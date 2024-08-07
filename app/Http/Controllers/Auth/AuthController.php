<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;

class AuthController extends Controller
{

    public function index()
    {

        return view('auth.login');
        die();
    }

    public function registration()
    {
        return view('auth.register');
    }

    public function postLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required'

        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (auth()->user()->account_type == 'Admin') {
                return redirect()->intended('backend/home');
            } else {
                Session::flush();
                Auth::logout();

                return redirect('backend/login')->with('flash_failure', 'Invalid login credentials');
            }
        } else {
            //dd('you r here .. 2');    
            $error['email'] = 'envalid email entered';
            return redirect('backend/login')->with('flash_failure', 'Invalid login credentials ... 1');
        }
    }

    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect("backend/adminpanel")->withSuccess('Great! You have Successfully loggedin');
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('backend/adminpanel');
        }

        return redirect("backend/login")->withSuccess('Opps! You do not have access');
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

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('backend/login');
    }
}
