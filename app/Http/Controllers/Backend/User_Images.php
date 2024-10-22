<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\user_images_model;


/* ******************************************************
    This file is generated by SNOOBIX on Jul 30, 2024
    Please visit snoobix.com for more details
****************************************************** */


class User_Images extends Controller
{
    public function __construct()
    {
        //if (!Auth::check()) return 'access_denied';
    }
   
    public function index()
    { 
        $data['module_title'] = 'User Images';
		$data['rows'] = user_images_model::orderBy('id', 'desc')->get();
		return view("backend/user_images_list", $data);
	
    }


    public function create()
    {
        $data['module_title'] = 'User Images';
       //$data['row'] = [];
       $data['submit_path'] = 'store';
       $data['module_name'] = 'User Images';
       return view("backend/user_images_addedit", $data);       
    }

   
    public function store(Request $request)
    {
         $data['module_title'] = 'User Images';
        

        $record = $request->all();
        if ($request->hasFile('image_url')) {
$imgFile = $request->file('image_url')->store('public');
$record['image_url'] = $imgFile;
}

        
        $savedid = user_images_model::create($record)->id;
		if($savedid){
			 //return view("backend/user_images_addedit")->with('flash_success', "Record is saved successfuly");
             return redirect('backend/user_images/create')->with('flash_success', "Record is saved successfuly");
		}else{
			$data['row'] = $request->all();
			return view("backend/user_images_addedit", $data)->with('flash_failure', "Record is NOT saved successfuly");
		}
    }

    
    public function show()
    {
        //
    }

    
    public function edit($id)
    {
         $data['module_title'] = 'User Images';
        $data['submit_path'] = 'update';
        $recCond = [
			'id' => str2id($id)
		];
		$data['row'] = user_images_model::where($recCond)->first();
		return view("backend/user_images_addedit", $data);
    }

   
    public function update(Request $request)
    {
		 $data['module_title'] = 'User Images';
        $id = $request->post('id');
        $id = str2id($id);
        $vuser_images_model = user_images_model::find($id);
        
         $record = $request->all();
         if ($request->hasFile('image_url')) {
$imgFile = $request->file('image_url')->store('public');
$record['image_url'] = $imgFile;
}

        
        $isaved = $vuser_images_model->fill($record)->save();  //this will save record with all fillable items

        if($isaved){
			//return view("backend/user_images_addedit")->with('flash_success', "Record is updated successfuly");
            return redirect('backend/user_images')->with('flash_success', "Record is updated successfuly");
		}else{

			//$data['postData'] = $record;
             $data['submit_path'] = 'update';
             $recCond = [
                'id' => $id,
            ];
            $data['row'] = user_images_model::where($recCond)->first();
			return view("backend/user_images_addedit", $data)->with('flash_failure', "Record is NOT updated successfuly");
		}		
    }

   
    public function destroy(Request $request)
    {
        $id = $request->post('delid');
        $id = str2id($id);
        $vuser_images_model = user_images_model::find($id);
        $isdeleted = $vuser_images_model->delete();
        if($isdeleted ){
            return redirect()->route('backend.user_images')->with('flash_success','Record is deleted successfuly');
        }else{
            return redirect()->route('backend.user_images')->with('flash_failure','Record is not deleted, try again later');
        }
    }
}
