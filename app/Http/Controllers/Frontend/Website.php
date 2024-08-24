<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\cards_model;

class Website extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
       
    }


    public function index()
    {
        $data['mycards'] = cards_model::where('web_user_id', auth()->user()->id)->with('card_recipients')->get();
        $data['page_title']="Home";

        return view('frontend/home',$data);
    }
   
}
