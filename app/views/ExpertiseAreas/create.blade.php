@extends('layouts.dashboard')

@section('heading')
	<h3>Expertise Areas</h3>
@stop
@section('sub_heading')
	<div class="row">
		<div class="col-sm-4 sub-heading">
			List of Expertise Areas
		</div>
	</div>
@stop

@section('content')
	{{ Form::model($expertise_area = new ExpertiseArea, array('route' => array('ExpertiseAreas.store'),'class'=>"form-horizontal"))}}

		@include('ExpertiseAreas._form_fields',['button_text' => 'Save'])

	{{Form::close()}}

@stop