<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\transactions_model;
use App\Models\ticket_types_model;

// use Carbon\Carbon;

class Transactions extends Controller
{
   
    public function __construct()
    {
        //$this->middleware('auth');
       
    }

 
    public function index()
    {
        $data['transactions']=transactions_model::where('web_user_id',auth()->user()->id)->get();
        $data['page_title']="My Transactions";
       
        $data['ticket_types'] = ticket_types_model::where(['active'=>'1'])->get();
        return view('frontend/transactions',$data);
    }

    
   
}
