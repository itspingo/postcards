@extends('layouts.app')
@section('content')

        {{-- ************************************************
         This file is generated by SNOOBIX on May 16, 2024
         Please visit snoobix.com for more details
         *********************************************** --}}

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <form action="{{route('backend.card_reviews.'.$submit_path)}}" method="POST" ENCTYPE="multipart/form-data">
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
                                    <a href="{{route('backend.card_reviews')}}" class="btn btn-info btn-md"  >List Page</a>
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
		



		<input
			type="hidden"
			id="web_user_id"
			name="web_user_id"
			value="@if(isset($row->web_user_id)) {{ $row->web_user_id }} @endif"
		/>
		


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
    <label class="form-label" for="score_rating">SCORE RATING</label>

@php
    
    if(!Empty($row)){ 
        $selected = $row->score_rating; 
    }else{
        $selected = '';
    }
    $options = get_list_values('','');
    //pre($options);
	//$options = $score_rating;
 @endphp

		 <select class="form-control" name="score_rating" id="score_rating"> 
		   <option value="">--Select--</option>
		   @foreach ($options as $key => $value)
			<option value="{{$key}}" {{($key == $selected) ? 'selected' : '' }}> 
				{{$value}} 
			</option>
		  @endforeach    
		</select>

 </div>
 <div id="diverr_score_rating" text-danger></div>
</div>

<div class="col-md-6 mt-3">
	<div class="form-group">
		<label class="form-label" for="full_name">FULL NAME</label>
		<input
			type="text"
			id="full_name"
			name="full_name"
			class="form-control"
			value="@if(isset($row->full_name)){{$row->full_name}}@endif"
			
		/>
	</div>
	<div id="diverr_full_name" text-danger></div>
</div>


<div class="col-md-12 mt-3">
	<div class="form-group">
		<label class="form-label" for="review">REVIEW</label>
		<textarea
			id="review"
			name="review"
			class="form-control"
			
			>@if(isset($row->review)){{$row->review}}@endif</textarea>
			
	</div>
	<div id="diverr_review" text-danger></div>
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