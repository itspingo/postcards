@extends('layouts.app')
@section('content')

        {{-- ************************************************
         This file is generated by SNOOBIX on Jul 30, 2024
         Please visit snoobix.com for more details
         *********************************************** --}}

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <form action="{{route('backend.cont_and_comm.'.$submit_path)}}" method="POST" ENCTYPE="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <div class="row" >
                                <div class="col-3 text-start">
                                    <div class="page-title-box d-flex align-items-center justify-content-between">
                                        <h4 class="card-title">{{ucwords($module_title)}} </h4>
                                    </div>
                                </div>
                                <div class="col-6 text-center">
                                    @if(session('flash_success') != '')
                                        <div class="alert alert-success">{{session('flash_success')}}</div>
                                    @endif
                                    @if(session('flash_failure') != '')
                                        <div class="alert alert-danger">{{session('flash_failure')}}</div>
                                    @endif
                                </div>
                                <div class="col-3 text-end">
                                    <a href="{{route('backend.cont_and_comm')}}" class="btn btn-info btn-md"  >List Page</a>
                                </div> 
                            </div>
                        </div>
                        <div class="card-body">
                            
                            <div class="row">
                                <div class="col-lg-12">
                                
                                        
                                            <div class="row"> 

                                                    
		<input
			type="hidden"
			id="id"
			name="id"
			value="@if(isset($row->id)) {{ $row->id }} @endif"
		/>
		




		<input
			type="hidden"
			id="user_id"
			name="user_id"
			value="@if(isset($row->user_id)) {{ $row->user_id }} @endif"
		/>
		



<div class="col-md-6 mt-3">
	<div class="form-group">
    <label class="form-label" for="web_user_id">USER NAME</label>

@php
    
    if(!Empty($row)){ 
        $selected = $row->web_user_id; 
    }else{
        $selected = '';
    }
    $options = get_list_values('users','name');
    //pre($options);
	//$options = $web_user_id;
 @endphp

		 <select class="form-control" name="web_user_id" id="web_user_id"> 
		   <option value="">--Select--</option>
		   @foreach ($options as $key => $value)
			<option value="{{$key}}" {{($key == $selected) ? 'selected' : '' }}> 
				{{$value}} 
			</option>
		  @endforeach    
		</select>

 </div>
 <div id="diverr_web_user_id" text-danger></div>
</div>

<div class="col-md-6 mt-3">
	<div class="form-group">
    <label class="form-label" for="card_id">CARD</label>

@php
    
    if(!Empty($row)){ 
        $selected = $row->card_id; 
    }else{
        $selected = '';
    }
    $options = get_list_values('cards','title');
    //pre($options);
	//$options = $card_id;
 @endphp

		 <select class="form-control" name="card_id" id="card_id"> 
		   <option value="">--Select--</option>
		   @foreach ($options as $key => $value)
			<option value="{{$key}}" {{($key == $selected) ? 'selected' : '' }}> 
				{{$value}} 
			</option>
		  @endforeach    
		</select>

 </div>
 <div id="diverr_card_id" text-danger></div>
</div>

<div class="col-md-6 mt-3">
	<div class="form-group">
    <label class="form-label" for="comm_type">COMM TYPE</label>

@php
    
    if(!Empty($row)){ 
        $selected = $row->comm_type; 
    }else{
        $selected = '';
    }
    $options = get_list_values('','');
    //pre($options);
	//$options = $comm_type;
 @endphp

		 <select class="form-control" name="comm_type" id="comm_type"> 
		   <option value="">--Select--</option>
		   @foreach ($options as $key => $value)
			<option value="{{$key}}" {{($key == $selected) ? 'selected' : '' }}> 
				{{$value}} 
			</option>
		  @endforeach    
		</select>

 </div>
 <div id="diverr_comm_type" text-danger></div>
</div>


<div class="col-md-6 mt-3">
	<div class="form-group">
		<label class="form-label" for="comm_title">TITLE</label>
		<input
			type="text"
			id="comm_title"
			name="comm_title"
			class="form-control"
			value="@if(isset($row->comm_title)){{$row->comm_title}}@endif"
			
		/>
	</div>
	<div id="diverr_comm_title" text-danger></div>
</div>



<div class="col-md-6 mt-3">
	<div class="form-group">
		<label class="form-label" for="comm_tel">TELEPHONE</label>
		<input
			type="text"
			id="comm_tel"
			name="comm_tel"
			class="form-control"
			value="@if(isset($row->comm_tel)){{$row->comm_tel}}@endif"
			
		/>
	</div>
	<div id="diverr_comm_tel" text-danger></div>
</div>



<div class="col-md-6 mt-3">
	<div class="form-group">
		<label class="form-label" for="comm_mobile">MOBILE</label>
		<input
			type="text"
			id="comm_mobile"
			name="comm_mobile"
			class="form-control"
			value="@if(isset($row->comm_mobile)){{$row->comm_mobile}}@endif"
			
		/>
	</div>
	<div id="diverr_comm_mobile" text-danger></div>
</div>



<div class="col-md-6 mt-3">
	<div class="form-group">
		<label class="form-label" for="comm_sms_no">SMS NO</label>
		<input
			type="text"
			id="comm_sms_no"
			name="comm_sms_no"
			class="form-control"
			value="@if(isset($row->comm_sms_no)){{$row->comm_sms_no}}@endif"
			
		/>
	</div>
	<div id="diverr_comm_sms_no" text-danger></div>
</div>



<div class="col-md-6 mt-3">
	<div class="form-group">
		<label class="form-label" for="comm_sms_text">SMS TEXT</label>
		<input
			type="text"
			id="comm_sms_text"
			name="comm_sms_text"
			class="form-control"
			value="@if(isset($row->comm_sms_text)){{$row->comm_sms_text}}@endif"
			
		/>
	</div>
	<div id="diverr_comm_sms_text" text-danger></div>
</div>



<div class="col-md-6 mt-3">
	<div class="form-group">
		<label class="form-label" for="comm_email">EMAIL</label>
		<input
			type="text"
			id="comm_email"
			name="comm_email"
			class="form-control"
			value="@if(isset($row->comm_email)){{$row->comm_email}}@endif"
			
		/>
	</div>
	<div id="diverr_comm_email" text-danger></div>
</div>



<div class="col-md-6 mt-3">
	<div class="form-group">
		<label class="form-label" for="comm_whatsapp_no">WHATSAPP NO</label>
		<input
			type="text"
			id="comm_whatsapp_no"
			name="comm_whatsapp_no"
			class="form-control"
			value="@if(isset($row->comm_whatsapp_no)){{$row->comm_whatsapp_no}}@endif"
			
		/>
	</div>
	<div id="diverr_comm_whatsapp_no" text-danger></div>
</div>



<div class="col-md-6 mt-3">
	<div class="form-group">
		<label class="form-label" for="comm_whatsapp_text">WHATSAPP TEXT</label>
		<input
			type="text"
			id="comm_whatsapp_text"
			name="comm_whatsapp_text"
			class="form-control"
			value="@if(isset($row->comm_whatsapp_text)){{$row->comm_whatsapp_text}}@endif"
			
		/>
	</div>
	<div id="diverr_comm_whatsapp_text" text-danger></div>
</div>



<div class="col-md-6 mt-3">
	<div class="form-group">
    <label class="form-label" for="active">ACTIVE</label>

@php
    
    if(!Empty($row)){ 
        $selected = $row->active; 
    }else{
        $selected = '';
    }
    $options = get_list_values('active_status','is_active');
    //pre($options);
	//$options = $active;
 @endphp

		 <select class="form-control" name="active" id="active"> 
		   <option value="">--Select--</option>
		   @foreach ($options as $key => $value)
			<option value="{{$key}}" {{($key == $selected) ? 'selected' : '' }}> 
				{{$value}} 
			</option>
		  @endforeach    
		</select>

 </div>
 <div id="diverr_active" text-danger></div>
</div>


                                                
                                            </div>
                                            
                                            <input type="hidden" name="continue" id="continue" value="Y" />
                                            <input type="hidden" name="id" id="id" value="@if(isset($row->id)) {{id2str($row->id)}} @endif" />
                                            
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="row " > 
                                <div class="col-md-6 text-start mt-2">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light w-md">Submit</button>
                                </div>
                                <div class="col-md-6 text-end  mt-2">
                                    <button type="reset" class="btn btn-outline-danger waves-effect waves-light w-md">Reset</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div> 
    </div>


@endsection