<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\card_categories_model;


// use Carbon\Carbon;

class Categories extends Controller
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
        $data['page_title']="Categories";
        $data['rows'] = card_categories_model::where('active','1')->get();

        return view('frontend/categories',$data);
    }
   
}
