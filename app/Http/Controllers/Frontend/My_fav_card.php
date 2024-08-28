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

class My_fav_card extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');

    }

    public function index($id)
    {
        $data['page_title'] = "My Cards";

        //$favouriteIds = DB::table('favourites')->where('web_user_id', auth()->user()->id)->where('card_id',$id); 
        $data['favcard'] = cards_model::where('id', $id)->get();

        return view('frontend/my_fav_card', $data);
    }

   
   
}
