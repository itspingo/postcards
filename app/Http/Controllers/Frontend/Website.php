<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;


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
        $data['page_title']="Home";

        return view('frontend/home',$data);
    }
   
}
