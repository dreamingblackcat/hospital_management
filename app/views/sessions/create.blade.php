@extends('layouts.default')

@section('content')

{{Form::open(array('route' =>'sessions.store','class' => 'form-horizontal'))}}
	<div class="form-group">
		{{ Form::label('email', 'Email:',array('class' => "col-sm-4 control-label" )) }}
	
		<div class="col-sm-5">
			{{ Form::text('email','', array('class' => "form-control" )) }}
			<i class="fa fa-user fa-2x"></i>
		</div>
	</div><!-- form-group -->
	<div class="form-group">
		{{ Form::label('password', 'Password:', array('class' => "col-sm-4 control-label")) }}
		<div class="col-sm-5">
		{{ Form::password('password',array('class' => "form-control")) }}<i class="fa fa-lock fa-2x"></i>
		</div>
	</div><!-- form-group -->
	<div class="alc">
		<div class="form-group">
			<div class="col-sm-16">
				{{ Form::submit("Log in",array("class" => "btn btn-default"))}}
			</div>
		</div><!-- form-group -->
	</div>	
{{ Form::close() }}

@stop
