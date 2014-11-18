@extends('layouts.dashboard')

@section('heading')
	<h3>Edit Person</h3>
@stop

@section('sub_heading')
	<div class="row">
		<div class="col-sm-4 sub-heading">
			Edit information of {{ $person->name }}
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
	{{ Form::model($person, array('route' => array('people.update','id' => $person->id),'method'=> 'put','class'=>"form-horizontal"))}}

		@include('people._form_fields',['button_text' => 'Update'])

	{{Form::close()}}

@stop