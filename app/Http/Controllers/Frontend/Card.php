<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\cards_model;
use App\Models\feedback_model;

// use Carbon\Carbon;

class Card extends Controller
{
   
    public function __construct()
    {
        //$this->middleware('auth');
       
    }


    public function index($id)
    {
       $data['page_title']="Card";
       $data['card'] = cards_model::where('id',$id)->first();
       $data['other_cards'] = cards_model::where('id', '!=', $id)
                                  ->orderBy('id', 'desc')
                                  ->limit(6)
                                  ->get();
        $data['feedbacks'] = feedback_model::where('item_id',  $id)
                                  ->orderBy('id', 'desc')
                                  ->get();

    //    dd($data['card']);
       return view('frontend/card',$data);
    }

    public function save_feedback(Request $request)
    {
        // $request->validate([
        //     'full_name' => 'required|string|max:200',
        //     'email_address' => 'required|email|max:200',
        //     'item_id' => 'required|string|max:10',
        //     'feedback' => 'required|string',
        //     //'rating' => 'required|integer|between(1,5)',
        // ]);

        feedback_model::create([
            'web_user_id' => auth()->id() ?? null,
            'item_id' => $request->input('card_id'),
            'full_name' => $request->input('full_name'),
            'email_address' => $request->input('email_address'),
            'feedback' => $request->input('feedback'),
            'rating' => $request->input('rating'),
            'base_lang' => 'en',
            'active' => '1',
        ]);

        return redirect('card/'.$request->input('card_id'));
    }

   
}
