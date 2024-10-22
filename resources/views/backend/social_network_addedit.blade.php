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
                        <form action="{{route('backend.social_network.'.$submit_path)}}" method="POST" ENCTYPE="multipart/form-data">
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
                                    <a href="{{route('backend.social_network')}}" class="btn btn-info btn-md"  >List Page</a>
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
		<label class="form-label" for="sn_title">TITLE</label>
		<input
			type="text"
			id="sn_title"
			name="sn_title"
			class="form-control"
			value="@if(isset($row->sn_title)){{$row->sn_title}}@endif"
			
		/>
	</div>
	<div id="diverr_sn_title" text-danger></div>
</div>


<div class="col-md-6 mt-3">
	<div class="form-group">
		<label class="form-label" for="sn_facebook">FACEBOOK</label>
		<input
			type="text"
			id="sn_facebook"
			name="sn_facebook"
			class="form-control"
			value="@if(isset($row->sn_facebook)){{$row->sn_facebook}}@endif"
			
		/>
	</div>
	<div id="diverr_sn_facebook" text-danger></div>
</div>


<div class="col-md-6 mt-3">
	<div class="form-group">
		<label class="form-label" for="sn_twitter">TWITTER</label>
		<input
			type="text"
			id="sn_twitter"
			name="sn_twitter"
			class="form-control"
			value="@if(isset($row->sn_twitter)){{$row->sn_twitter}}@endif"
			
		/>
	</div>
	<div id="diverr_sn_twitter" text-danger></div>
</div>


<div class="col-md-6 mt-3">
	<div class="form-group">
		<label class="form-label" for="sn_instagram">INSTAGRAM</label>
		<input
			type="text"
			id="sn_instagram"
			name="sn_instagram"
			class="form-control"
			value="@if(isset($row->sn_instagram)){{$row->sn_instagram}}@endif"
			
		/>
	</div>
	<div id="diverr_sn_instagram" text-danger></div>
</div>


<div class="col-md-6 mt-3">
	<div class="form-group">
		<label class="form-label" for="sn_telegram">TELEGRAM</label>
		<input
			type="text"
			id="sn_telegram"
			name="sn_telegram"
			class="form-control"
			value="@if(isset($row->sn_telegram)){{$row->sn_telegram}}@endif"
			
		/>
	</div>
	<div id="diverr_sn_telegram" text-danger></div>
</div>


<div class="col-md-6 mt-3">
	<div class="form-group">
		<label class="form-label" for="sn_whatsapp">WHATSAPP</label>
		<input
			type="text"
			id="sn_whatsapp"
			name="sn_whatsapp"
			class="form-control"
			value="@if(isset($row->sn_whatsapp)){{$row->sn_whatsapp}}@endif"
			
		/>
	</div>
	<div id="diverr_sn_whatsapp" text-danger></div>
</div>


<div class="col-md-6 mt-3">
	<div class="form-group">
		<label class="form-label" for="sn_pinterest">PINTEREST</label>
		<input
			type="text"
			id="sn_pinterest"
			name="sn_pinterest"
			class="form-control"
			value="@if(isset($row->sn_pinterest)){{$row->sn_pinterest}}@endif"
			
		/>
	</div>
	<div id="diverr_sn_pinterest" text-danger></div>
</div>


		<input
			type="hidden"
			id="ticket_type_id"
			name="ticket_type_id"
			value="@if(isset($row->ticket_type_id)) {{ $row->ticket_type_id }} @endif"
		/>
		


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