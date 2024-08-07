<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\cont_and_comm_model;


/* ******************************************************
    This file is generated by SNOOBIX on Jul 30, 2024
    Please visit snoobix.com for more details
****************************************************** */


class cont_and_comm extends Controller
{
    public function __construct()
    {
        //if (!Auth::check()) return 'access_denied';
    }
   
    public function index()
    { 
        $data['module_title'] = 'Cont & Comm';
		$data['rows'] = cont_and_comm_model::orderBy('id', 'desc')->get();
		return view("backend/cont_and_comm_list", $data);
	
    }


    public function create()
    {
        $data['module_title'] = 'Cont & Comm';
       //$data['row'] = [];
       $data['submit_path'] = 'store';
       $data['module_name'] = 'Cont & Comm';
       return view("backend/cont_and_comm_addedit", $data);       
    }

   
    public function store(Request $request)
    {
         $data['module_title'] = 'Cont & Comm';
        
        $record = $request->all();
        
        
        $savedid = cont_and_comm_model::create($record)->id;
		if($savedid){
			 //return view("backend/cont_and_comm_addedit")->with('flash_success', "Record is saved successfuly");
             return redirect('backend/cont_and_comm/create')->with('flash_success', "Record is saved successfuly");
		}else{
			$data['row'] = $request->all();
			return view("backend/cont_and_comm_addedit", $data)->with('flash_failure', "Record is NOT saved successfuly");
		}
    }

    
    public function show()
    {
        //
    }

    
    public function edit($id)
    {
         $data['module_title'] = 'Cont & Comm';
        $data['submit_path'] = 'update';
        $recCond = [
			'id' => str2id($id)
		];
		$data['row'] = cont_and_comm_model::where($recCond)->first();
		return view("backend/cont_and_comm_addedit", $data);
    }

   
    public function update(Request $request)
    {
		 $data['module_title'] = 'Cont & Comm';
        $id = $request->post('id');
        $id = str2id($id);
        $vcont_and_comm_model = cont_and_comm_model::find($id);
        
         $record = $request->all();
         
        
        $isaved = $vcont_and_comm_model->fill($record)->save();  //this will save record with all fillable items

        if($isaved){
			//return view("backend/cont_and_comm_addedit")->with('flash_success', "Record is updated successfuly");
            return redirect('backend/cont_and_comm')->with('flash_success', "Record is updated successfuly");
		}else{

			//$data['postData'] = $record;
             $data['submit_path'] = 'update';
             $recCond = [
                'id' => $id,
            ];
            $data['row'] = cont_and_comm_model::where($recCond)->first();
			return view("backend/cont_and_comm_addedit", $data)->with('flash_failure', "Record is NOT updated successfuly");
		}		
    }

   
    public function destroy(Request $request)
    {
        $id = $request->post('delid');
        $id = str2id($id);
        $vcont_and_comm_model = cont_and_comm_model::find($id);
        $isdeleted = $vcont_and_comm_model->delete();
        if($isdeleted ){
            return redirect()->route('backend.cont_and_comm')->with('flash_success','Record is deleted successfuly');
        }else{
            return redirect()->route('backend.cont_and_comm')->with('flash_failure','Record is not deleted, try again later');
        }
    }
}
