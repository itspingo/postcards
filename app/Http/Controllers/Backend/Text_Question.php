<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\text_question_model;


/* ******************************************************
    This file is generated by SNOOBIX on Jul 30, 2024
    Please visit snoobix.com for more details
****************************************************** */


class Text_Question extends Controller
{
    public function __construct()
    {
        //if (!Auth::check()) return 'access_denied';
    }
   
    public function index()
    { 
        $data['module_title'] = 'Text Question';
		$data['rows'] = text_question_model::orderBy('id', 'desc')->get();
		return view("backend/text_question_list", $data);
	
    }


    public function create()
    {
        $data['module_title'] = 'Text Question';
       //$data['row'] = [];
       $data['submit_path'] = 'store';
       $data['module_name'] = 'Text Question';
       return view("backend/text_question_addedit", $data);       
    }

   
    public function store(Request $request)
    {
         $data['module_title'] = 'Text Question';
       
        $record = $request->all();
        
        
        $savedid = text_question_model::create($record)->id;
		if($savedid){
			 //return view("backend/text_question_addedit")->with('flash_success', "Record is saved successfuly");
             return redirect('backend/text_question/create')->with('flash_success', "Record is saved successfuly");
		}else{
			$data['row'] = $request->all();
			return view("backend/text_question_addedit", $data)->with('flash_failure', "Record is NOT saved successfuly");
		}
    }

    
    public function show()
    {
        //
    }

    
    public function edit($id)
    {
         $data['module_title'] = 'Text Question';
        $data['submit_path'] = 'update';
        $recCond = [
			'id' => str2id($id)
		];
		$data['row'] = text_question_model::where($recCond)->first();
		return view("backend/text_question_addedit", $data);
    }

   
    public function update(Request $request)
    {
		 $data['module_title'] = 'Text Question';
        $id = $request->post('id');
        $id = str2id($id);
        $vtext_question_model = text_question_model::find($id);
        
         $record = $request->all();
         
        
        $isaved = $vtext_question_model->fill($record)->save();  //this will save record with all fillable items

        if($isaved){
			//return view("backend/text_question_addedit")->with('flash_success', "Record is updated successfuly");
            return redirect('backend/text_question')->with('flash_success', "Record is updated successfuly");
		}else{

			//$data['postData'] = $record;
             $data['submit_path'] = 'update';
             $recCond = [
                'id' => $id,
            ];
            $data['row'] = text_question_model::where($recCond)->first();
			return view("backend/text_question_addedit", $data)->with('flash_failure', "Record is NOT updated successfuly");
		}		
    }

   
    public function destroy(Request $request)
    {
        $id = $request->post('delid');
        $id = str2id($id);
        $vtext_question_model = text_question_model::find($id);
        $isdeleted = $vtext_question_model->delete();
        if($isdeleted ){
            return redirect()->route('backend.text_question')->with('flash_success','Record is deleted successfuly');
        }else{
            return redirect()->route('backend.text_question')->with('flash_failure','Record is not deleted, try again later');
        }
    }
}
