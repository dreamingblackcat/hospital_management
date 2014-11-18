@extends('layouts.dashboard')

@section('heading')
	<h3>Personal Information of {{ $person->name }}</h3>
@stop

@section('sub_heading')
	<div class="row">
		<div class="col-sm-4 sub-heading">
			{{ $person->name }}
		</div>
		<div class="col-sm-offset-4 col-sm-4">
			<input type="text" class="form-control" placeholder="Text input">
		</div>
	</div>
@stop

@section('content')
		<div class="alc">			
			<p>{{ $person->name }}</p>
			<p>{{ $person->nationality }}</p>
			<p>{{ $person->ethnic_group }}</p>
			<p>{{ $person->date_of_birth->format('Y-m-d') }}</p>
			<p>{{ $person->nrc_number }}</p>
			<p>{{ $person->phone_number }}</p>
		</div>
@stop