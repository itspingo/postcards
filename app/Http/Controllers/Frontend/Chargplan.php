<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ticket_types_model;
use App\Models\transactions_model;


class Chargplan extends Controller
{
   
    public function __construct()
    {
        //$this->middleware('auth');
    }
 
    public function index()
    {
        $data['ticket_types']=ticket_types_model::where('active','1')->get();
        $data['page_title']="Charge plan";
       
        return view('frontend/chargplan',$data);
    }

    public function charge_success()
    {
        // Retrieve active ticket types
        $data['ticket_types'] = ticket_types_model::where('active', '1')->get();
        $data['page_title'] = "Charge plan";
        $data['payment_status'] = 'Payment process completed';
    
       
            $session_data = session()->get('sess_lineItems');    
            
            // Ensure session data exists
            if ($session_data) {

                $ticket_id = $session_data['stamp_id'];


                $transaction_data = [
                    'web_user_id'=>auth()->user()->id,
                    'feature' => 'Purchase',
                    'stamp_type' => $session_data['stamp_id'],
                    'tokens' => $session_data['charge_amount'],
                ];
    
                // Create transaction record
                transactions_model::create($transaction_data);
            } else {
                // Handle missing session data
                $data['payment_status'] = 'Payment process completed, but session data not found.';
            }
      
        return view('frontend/chargplan', $data);
    }
    
    public function charge_cacelled(){
        $data['ticket_types']=ticket_types_model::where('active','1')->get();
        $data['page_title']="Charge plan";
        $data['payment_status']='payment process cancelled';
        return view('frontend/chargplan',$data);
    }
    
    
}
