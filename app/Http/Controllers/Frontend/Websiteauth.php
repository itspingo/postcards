<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Models\settings;
// use App\Models\user_settings_model;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;
use Log;
use Session;
use App\Models\User;
use Hash;

class Websiteauth extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');

    }

    public function index()
    { 

        return view('frontend.login');
    }

    public function postLogin(Request $request)
    {
        // dd($request->post());
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            if (Auth::attempt($credentials)) {

                return redirect()->intended('card_designer');
            }
        } else {
            return redirect(route("login"))->with('flash_failure', 'You have entered invalid credentials');
        }

        return redirect(route("login"))->with('flash_failure', 'You have entered invalid credentials');
    }

    public function forgot()
    {
        return view('frontend.forgot');
    }
    public function postForgot(Request $request)
    {

        $request->validate([
            'email' => 'required|email|exists:users,email'
        ]);

        $data = $request->all();

        // Find the user by email
        $user = User::where('email', $request->email)->first();

        // If the user doesn't exist, return an error response
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        // Generate a random 7-character password
        $newPassword = randomWord(7);

        // Update the user's password
        $user->password = Hash::make($newPassword);
        $user->save();

        $emailData = array(
            'user_name' => $data['name'],
            'user_email' => $data['email'],
            'new_password' => $newPassword
        );

        $retval = sendEmail('forgot_password', $emailData);
        if ($retval) {
            $mesg = 'An email is sent to you with new password';
        } else {
            $mesg = 'Email could not be sent';
        }

        // Return a success response
        return redirect("login")->with(['flash_success' => 'New password has been sent to your email address'], 200);

    }

    public function register()
    {

        return view('frontend.register');
    }

    public function postRegister(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        // dd($data);
        //  DB::enableQueryLog();
        // $check = User::create($data)->id;

        $upperCaseRegex = '/[A-Z]/';
        $specialCharRegex = '/[^a-zA-Z0-9]/'; // Matches any character that is not alphanumeric
        $numberRegex = '/[0-9]/';
        $lengthRegex = '/^.{7,}$/'; // Matches strings of at least 7 characters
        $pasword_errors = [];

        if (!empty($pasword_errors)) {
            return redirect()->back()->with('flash_failure', $pasword_errors);
        }

        $validation_code = randomWord(10);
        $usrData = array(
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'country' => $data['country'],
            'account_type' => $data['account_type'],
            'state' => $data['state'],
            'city' => $data['city'],
            'street_address' => $data['street_address'],
            'zip_post_code' => $data['zip_post_code'],
            'phone' => $data['phone'],
            'validation_code' => $validation_code
        );

        // dd($usrData);

        $usrId = User::create($usrData)->id;
        if ($usrId) {
            generate_invoice('signup', $usrId);
            $emailData = array(
                'user_name' => $data['name'],
                'user_email' => $data['email'],
                'validation_code' => $validation_code
            );
            if (null != session('sess_settings') && session()->get('sess_settings')->signup_confirmation == 'Y') {
                $retval = sendEmail('user_registration', $emailData);
                if ($retval) {
                    $mesg = 'An email is sent for validation';
                } else {
                    $mesg = 'Email could not be sent for verifiation';
                }

            } else {
                $mesg = 'Registration is successful, plase login';
            }

            return redirect("login")->with('flash_success', );
        }

        //   dd(DB::getQueryLog());

    }

    public function validate_user($validation_code)
    {
        $user = User::where('validation_code', $validation_code)->first();
        if ($user) {
            $user->email_verified_at = now();
            $user->validation_code = NULL;
            $user->save();
            return redirect(url("login"))->with('flash_success', 'Your account is validated. Please login');
        } else {
            return redirect(url("login"))->with('flash_failure', 'Invalid validation code');
        }
    }

    public function dashboard()
    {

        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function logout()
    {

        User::where('id', auth()->user()->id)->update([
            'browser_agent' => NULL,
            'login_date_time' => NULL,
            'login_ip' => NULL
        ]);
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->first();
            if ($finduser) {
                Auth::login($finduser);
                return redirect('/home');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id
                ]);

                Auth::login($newUser);
                return redirect()->back();
            }

        } catch (Exception $e) {
            Log::info("Exception " . $e->getMessage());
            return redirect(route("login"))->with('flash_failure', 'You have entered invalid credentials');
        }
    }

}
