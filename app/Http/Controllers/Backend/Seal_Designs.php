<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\seal_designs_model;


/* ******************************************************
    This file is generated by SNOOBIX on May 25, 2024
    Please visit snoobix.com for more details
****************************************************** */


class Seal_Designs extends Controller
{
    public function __construct()
    {
        //if (!Auth::check()) return 'access_denied';
    }
   
    public function index()
    { 
        $data['module_title'] = 'Seal Designs';
		$data['rows'] = seal_designs_model::orderBy('id', 'desc')->get();
		return view("backend/seal_designs_list", $data);
	
    }


    public function create()
    {
        $data['module_title'] = 'Seal Designs';
       //$data['row'] = [];
       $data['submit_path'] = 'store';
       $data['module_name'] = 'Seal Designs';
       return view("backend/seal_designs_addedit", $data);       
    }

   
    public function store(Request $request)
    {
         $data['module_title'] = 'Seal Designs';
       

        $record = $request->all();
        if ($request->hasFile('main_image')) {$imgFile = $request->file('main_image')->store('public');$record['main_image'] = $imgFile;}
        if ($request->hasFile('more_images')) {$imagePaths = [];foreach ($request->file('more_images') as $image) {$imagePath = $image->store('public');$imagePaths[] = $imagePath;}$record['more_images'] = implode(',', $imagePaths);}
        $savedid = seal_designs_model::create($record)->id;
		if($savedid){
			 //return view("backend/seal_designs_addedit")->with('flash_success', "Record is saved successfuly");
             return redirect('backend/seal_designs/create')->with('flash_success', "Record is saved successfuly");
		}else{
			$data['row'] = $request->all();
			return view("backend/seal_designs_addedit", $data)->with('flash_failure', "Record is NOT saved successfuly");
		}
    }

    
    public function show()
    {
        //
    }

    
    public function edit($id)
    {
         $data['module_title'] = 'Seal Designs';
        $data['submit_path'] = 'update';
        $recCond = [
			'id' => str2id($id)
		];
		$data['row'] = seal_designs_model::where($recCond)->first();
		return view("backend/seal_designs_addedit", $data);
    }

   
    public function update(Request $request)
    {
		 $data['module_title'] = 'Seal Designs';
        $id = $request->post('id');
        $id = str2id($id);
        $vseal_designs_model = seal_designs_model::find($id);
        
         $record = $request->all();
         if ($request->hasFile('main_image')) {$imgFile = $request->file('main_image')->store('public');$record['main_image'] = $imgFile;}
        if ($request->hasFile('more_images')) {$imagePaths = [];foreach ($request->file('more_images') as $image) {$imagePath = $image->store('public');$imagePaths[] = $imagePath;}$record['more_images'] = implode(',', $imagePaths);}
        $isaved = $vseal_designs_model->fill($record)->save();  //this will save record with all fillable items

        if($isaved){
			//return view("backend/seal_designs_addedit")->with('flash_success', "Record is updated successfuly");
            return redirect('backend/seal_designs')->with('flash_success', "Record is updated successfuly");
		}else{

			//$data['postData'] = $record;
             $data['submit_path'] = 'update';
             $recCond = [
                'id' => $id,
            ];
            $data['row'] = seal_designs_model::where($recCond)->first();
			return view("backend/seal_designs_addedit", $data)->with('flash_failure', "Record is NOT updated successfuly");
		}		
    }

   
    public function destroy(Request $request)
    {
        $id = $request->post('delid');
        $id = str2id($id);
        $vseal_designs_model = seal_designs_model::find($id);
        $isdeleted = $vseal_designs_model->delete();
        if($isdeleted ){
            return redirect()->route('backend.seal_designs')->with('flash_success','Record is deleted successfuly');
        }else{
            return redirect()->route('backend.seal_designs')->with('flash_failure','Record is not deleted, try again later');
        }
    }
}
