<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\custom_user_voices_model;


/* ******************************************************
    This file is generated by SNOOBIX on May 16, 2024
    Please visit snoobix.com for more details
****************************************************** */


class Custom_User_Voices extends Controller
{
    public function __construct()
    {
        //if (!Auth::check()) return 'access_denied';
    }
   
    public function index()
    { 
        $data['module_title'] = 'Custom User Voices';
		$data['rows'] = custom_user_voices_model::orderBy('id', 'desc')->get();
		return view("backend/custom_user_voices_list", $data);
	
    }


    public function create()
    {
        $data['module_title'] = 'Custom User Voices';
       //$data['row'] = [];
       $data['submit_path'] = 'store';
       $data['module_name'] = 'Custom User Voices';
       return view("backend/custom_user_voices_addedit", $data);       
    }

   
    public function store(Request $request)
    {
         $data['module_title'] = 'Custom User Voices';
      
        $record = $request->all();
        
        
        $savedid = custom_user_voices_model::create($record)->id;
		if($savedid){
			 //return view("backend/custom_user_voices_addedit")->with('flash_success', "Record is saved successfuly");
             return redirect('backend/custom_user_voices/create')->with('flash_success', "Record is saved successfuly");
		}else{
			$data['row'] = $request->all();
			return view("backend/custom_user_voices_addedit", $data)->with('flash_failure', "Record is NOT saved successfuly");
		}
    }

    
    public function show()
    {
        //
    }

    
    public function edit($id)
    {
         $data['module_title'] = 'Custom User Voices';
        $data['submit_path'] = 'update';
        $recCond = [
			'id' => str2id($id)
		];
		$data['row'] = custom_user_voices_model::where($recCond)->first();
		return view("backend/custom_user_voices_addedit", $data);
    }

   
    public function update(Request $request)
    {
		 $data['module_title'] = 'Custom User Voices';
        $id = $request->post('id');
        $id = str2id($id);
        $vcustom_user_voices_model = custom_user_voices_model::find($id);
        
         $record = $request->all();
         
        
        $isaved = $vcustom_user_voices_model->fill($record)->save();  //this will save record with all fillable items

        if($isaved){
			//return view("backend/custom_user_voices_addedit")->with('flash_success', "Record is updated successfuly");
            return redirect('backend/custom_user_voices')->with('flash_success', "Record is updated successfuly");
		}else{

			//$data['postData'] = $record;
             $data['submit_path'] = 'update';
             $recCond = [
                'id' => $id,
            ];
            $data['row'] = custom_user_voices_model::where($recCond)->first();
			return view("backend/custom_user_voices_addedit", $data)->with('flash_failure', "Record is NOT updated successfuly");
		}		
    }

   
    public function destroy(Request $request)
    {
        $id = $request->post('delid');
        $id = str2id($id);
        $vcustom_user_voices_model = custom_user_voices_model::find($id);
        $isdeleted = $vcustom_user_voices_model->delete();
        if($isdeleted ){
            return redirect()->route('backend.custom_user_voices')->with('flash_success','Record is deleted successfuly');
        }else{
            return redirect()->route('backend.custom_user_voices')->with('flash_failure','Record is not deleted, try again later');
        }
    }
}
