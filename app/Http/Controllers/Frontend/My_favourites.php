<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Mail\SendCardToRecipient;
use App\Models\ticket_types_model;
use App\Models\transactions_model;
use App\Models\UserTextFormat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\cards_model;

use Mail;

// use Carbon\Carbon;

class My_favourites extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');

    }

    public function index()
    {
        $data['page_title'] = "My Cards";

        $favouriteIds = DB::table('favourites')->where('web_user_id', auth()->user()->id)->pluck('card_id'); 
        $data['favourites'] = cards_model::whereIn('id', $favouriteIds)->get();

        return view('frontend/my_favourites', $data);
    }

   
   
}
