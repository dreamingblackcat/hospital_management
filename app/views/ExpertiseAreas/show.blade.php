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
	<h4 class="alc">
		{{ $expertise_area->name }}
	</h4>
@stop