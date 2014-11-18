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
	<div class="col-md-12">
		@foreach($expertise_areas as $index => $expertise_area)

			<p>
				{{ $index+1 }}. {{ $expertise_area->name }}
			</p>
		@endforeach
	</div>
@stop