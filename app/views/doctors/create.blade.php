@extends('layouts.dashboard')

@section('heading')
	<h3>Doctors</h3>
@stop

@section('sub_heading')
	<div class="row">
		<div class="col-sm-4 sub-heading">
			Register a new doctor
		</div>
	</div>
@stop

@section('content')
	@if(! $errors->isEmpty()) 
	<div class="alert alert-danger alc">
		There are errors present! Please re-check the form!
	</div>
	@elseif ( Session::has( 'message' ) )
	    <div class="messages">
	        <div class="col-md-6 col-md-offset-2 alert alert-success">{{ Session::get( 'message' ) }}</div>
	    </div>
    @else
    	<br>
	@endif
	{{ Form::model($doctor = new Doctor, array('route' => array('doctors.store'),'class'=>"form-horizontal"))}}

		@include('doctors._form_fields',['button_text' => 'Save'])

	{{Form::close()}}

@stop