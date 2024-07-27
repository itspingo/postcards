<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\settings;
use App\Models\orderItemModel;
use App\Models\Shopitems;
use App\Models\header_slider_model;
use App\Models\partners_model;
use App\Models\testimonials_model;
use App\Models\team_members_model;





use Carbon\Carbon;

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
        // set_country_info();
       
        // if(null == session('sess_settings')){

            // $vsettings=settings::first();
            // if($vsettings->enable_maintenance_mode=='Y'){
            //     return redirect(url('under_maintenance')); 
            // }
            // // dd($vsettings);
            // session()->put('sess_settings', $vsettings);
            
        // }


        // $data['random_collection']=Shopitems::whereNull('deleted_at')->inRandomOrder()->limit(10)->get();

        // $data['new_items'] = Shopitems::where('listing_type','!=','Auction')->whereNull('deleted_at')->orderby('id','desc')->take(10)->get();
        // $data['auction_items'] = Shopitems::where('listing_type','Auction')->whereNull('deleted_at')->orderby('id','desc')->take(10)->get();
        // $data['saving_items'] = Shopitems::where('listing_type','!=','Auction')->whereNull('deleted_at')->wherenotnull('old_price')->orderby('id','desc')->take(10)->get();
        // $data['featured_items'] = Shopitems::where('feature_home_page','Y')->whereNull('deleted_at')->orderby('id','desc')->take(10)->get();
        // $data['home_sliders'] = header_slider_model::where('active','1')->whereNull('deleted_at')->get();
        // $data['partners'] = partners_model::where('active','1')->whereNull('deleted_at')->get();
        // $data['testimonials'] = testimonials_model::where('active','1')->whereNull('deleted_at')->get();
        // $data['team_members'] = team_members_model::where('active','1')->whereNull('deleted_at')->get();
        

        $currentTime = Carbon::now();

        // $data['ending_soon'] = ShopItems::where(function ($query) use ($currentTime) {
        //                             $query->where('end_time_type', 'date')
        //                                 ->where('end_time_date', '>=', $currentTime);
        //                         })->orWhere(function ($query) use ($currentTime) {
        //                             $query->where('end_time_type', 'duration')
        //                                 ->where('end_time_duration', '>=', Carbon::now()->diffInMinutes($currentTime));
        //                         })->whereNull('deleted_at')->orderBy('end_time_date', 'asc')
        //                         ->orderBy('end_time_duration', 'asc')
        //                         ->get();
        
        //   dd($items);

        // dd( session()->get('sess_settings')->site_name);
        return view('frontend/home',$data);
    }
   
}
