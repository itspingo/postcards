<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\blog_posts_model;


/* ******************************************************
    This file is generated by SNOOBIX on May 16, 2024
    Please visit snoobix.com for more details
****************************************************** */


class Blog_Posts extends Controller
{
    public function __construct()
    {
        //if (!Auth::check()) return 'access_denied';
    }
   
    public function index()
    { 
        $data['module_title'] = 'Blog Posts';
		$data['rows'] = blog_posts_model::orderBy('id', 'desc')->get();
		return view("backend/blog_posts_list", $data);
	
    }


    public function create()
    {
        $data['module_title'] = 'Blog Posts';
       //$data['row'] = [];
       $data['submit_path'] = 'store';
       $data['module_name'] = 'Blog Posts';
       return view("backend/blog_posts_addedit", $data);       
    }

   
    public function store(Request $request)
    {
         $data['module_title'] = 'Blog Posts';
        /* $request->validate([
            [[validateFieldsArray]]
        ]); */

        /* $record = [
			[[fieldsArray]]
		];
		$iscreated = blog_posts_model::create($record); */

        $record = $request->all();
        if ($request->hasFile('blog_image')) {$imgFile = $request->file('blog_image')->store('public');$record['blog_image'] = $imgFile;}
        
        $savedid = blog_posts_model::create($record)->id;
		if($savedid){
			 //return view("backend/blog_posts_addedit")->with('flash_success', "Record is saved successfuly");
             return redirect('backend/blog_posts/create')->with('flash_success', "Record is saved successfuly");
		}else{
			$data['row'] = $request->all();
			return view("backend/blog_posts_addedit", $data)->with('flash_failure', "Record is NOT saved successfuly");
		}
    }

    
    public function show()
    {
        //
    }

    
    public function edit($id)
    {
         $data['module_title'] = 'Blog Posts';
        $data['submit_path'] = 'update';
        $recCond = [
			'id' => str2id($id)
		];
		$data['row'] = blog_posts_model::where($recCond)->first();
		return view("backend/blog_posts_addedit", $data);
    }

   
    public function update(Request $request)
    {
		 $data['module_title'] = 'Blog Posts';
        $id = $request->post('id');
        $id = str2id($id);
        $vblog_posts_model = blog_posts_model::find($id);
        
         $record = $request->all();
         if ($request->hasFile('blog_image')) {$imgFile = $request->file('blog_image')->store('public');$record['blog_image'] = $imgFile;}
        
        $isaved = $vblog_posts_model->fill($record)->save();  //this will save record with all fillable items

        if($isaved){
			//return view("backend/blog_posts_addedit")->with('flash_success', "Record is updated successfuly");
            return redirect('backend/blog_posts')->with('flash_success', "Record is updated successfuly");
		}else{

			//$data['postData'] = $record;
             $data['submit_path'] = 'update';
             $recCond = [
                'id' => $id,
            ];
            $data['row'] = blog_posts_model::where($recCond)->first();
			return view("backend/blog_posts_addedit", $data)->with('flash_failure', "Record is NOT updated successfuly");
		}		
    }

   
    public function destroy(Request $request)
    {
        $id = $request->post('delid');
        $id = str2id($id);
        $vblog_posts_model = blog_posts_model::find($id);
        $isdeleted = $vblog_posts_model->delete();
        if($isdeleted ){
            return redirect()->route('backend.blog_posts')->with('flash_success','Record is deleted successfuly');
        }else{
            return redirect()->route('backend.blog_posts')->with('flash_failure','Record is not deleted, try again later');
        }
    }
}
