<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\cards_model;
use App\Models\favourites_model;
use Illuminate\Http\Request;


class Website extends Controller
{
    
    public function __construct()
    {
        //$this->middleware('auth');
       
    }


    public function index()
    {
        $data['mycards'] = cards_model::where('web_user_id', '2')->with('card_recipients')->get();
        $data['page_title']="Home";

        return view('frontend/home',$data);
    }

    public function addto_favorites(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'card_id' => 'required|integer|exists:cards,id', // Assuming 'cards' is your cards table
        ]);

        $favorite = favourites_model::where('web_user_id', auth()->user()->id)
                                    ->where('card_id', $request->card_id)
                                    ->first();

        if ($favorite) {
            // Remove the favorite record
            $favorite->delete();
            $message = 'removed';
        } else {
            // Create a new favorite record
            $favorite = new favourites_model();
            $favorite->web_user_id = auth()->user()->id; // Get the logged-in user's ID
            $favorite->card_id = $request->card_id; // Get the clicked card ID
            $favorite->save();
            $message = 'added';
        }


        // Create a new favorite record
        // $favorite = new favourites_model();
        // $favorite->web_user_id = auth()->user()->id; // Get the logged-in user's ID
        // $favorite->card_id = $request->card_id; // Get the clicked card ID
        // $favorite->save();

        return response()->json(['success' => true, 'message' => $message]);
    }
   
}
