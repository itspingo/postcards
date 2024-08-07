<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\user_text_model;


/* ******************************************************
    This file is generated by SNOOBIX on Jul 30, 2024
    Please visit snoobix.com for more details
****************************************************** */


class USER_TEXT extends Controller
{
    public function __construct()
    {
        //if (!Auth::check()) return 'access_denied';
    }
   
    public function index()
    { 
        $data['module_title'] = 'USER TEXT';
		$data['rows'] = user_text_model::orderBy('id', 'desc')->get();
		return view("backend/user_text_list", $data);
	
    }


    public function create()
    {
        $data['module_title'] = 'USER TEXT';
       //$data['row'] = [];
       $data['submit_path'] = 'store';
       $data['module_name'] = 'USER TEXT';
       return view("backend/user_text_addedit", $data);       
    }

   
    public function store(Request $request)
    {
         $data['module_title'] = 'USER TEXT';
       

        $record = $request->all();
        
        
        $savedid = user_text_model::create($record)->id;
		if($savedid){
			 //return view("backend/user_text_addedit")->with('flash_success', "Record is saved successfuly");
             return redirect('backend/user_text/create')->with('flash_success', "Record is saved successfuly");
		}else{
			$data['row'] = $request->all();
			return view("backend/user_text_addedit", $data)->with('flash_failure', "Record is NOT saved successfuly");
		}
    }

    
    public function show()
    {
        //
    }

    
    public function edit($id)
    {
         $data['module_title'] = 'USER TEXT';
        $data['submit_path'] = 'update';
        $recCond = [
			'id' => str2id($id)
		];
		$data['row'] = user_text_model::where($recCond)->first();
		return view("backend/user_text_addedit", $data);
    }

   
    public function update(Request $request)
    {
		 $data['module_title'] = 'USER TEXT';
        $id = $request->post('id');
        $id = str2id($id);
        $vuser_text_model = user_text_model::find($id);
        
         $record = $request->all();
         
        
        $isaved = $vuser_text_model->fill($record)->save();  //this will save record with all fillable items

        if($isaved){
			//return view("backend/user_text_addedit")->with('flash_success', "Record is updated successfuly");
            return redirect('backend/user_text')->with('flash_success', "Record is updated successfuly");
		}else{

			//$data['postData'] = $record;
             $data['submit_path'] = 'update';
             $recCond = [
                'id' => $id,
            ];
            $data['row'] = user_text_model::where($recCond)->first();
			return view("backend/user_text_addedit", $data)->with('flash_failure', "Record is NOT updated successfuly");
		}		
    }

   
    public function destroy(Request $request)
    {
        $id = $request->post('delid');
        $id = str2id($id);
        $vuser_text_model = user_text_model::find($id);
        $isdeleted = $vuser_text_model->delete();
        if($isdeleted ){
            return redirect()->route('backend.user_text')->with('flash_success','Record is deleted successfuly');
        }else{
            return redirect()->route('backend.user_text')->with('flash_failure','Record is not deleted, try again later');
        }
    }
}
