<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\cards_model;
use App\Models\feedback_model;

// use Carbon\Carbon;

class Capture extends Controller
{
   
    public function __construct()
    {
        //$this->middleware('auth');
       
    }


    public function index($id)
    {
       $data['page_title']="Card";
       $data['mycard'] = cards_model::where('id',$id)->first();

    //    dd($data['card']);
       return view('frontend/capture',$data);
    }

 
}
