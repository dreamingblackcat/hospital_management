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
			<p>
		    	<div class="col-xs-4">{{ link_to_route('ExpertiseAreas.edit', "Edit", $parameters = array('id'=>$expertise_area->id), $attributes = array('class' => 'btn btn-default')) }}</div>
		    	<div class="col-xs-4">{{ link_to_route('ExpertiseAreas.show', "View", $parameters = array('id'=>$expertise_area->id), $attributes = array('class' => 'btn btn-default')) }}</div>
		    	<div class="col-xs-4">
					{{Form::open(array('method' => 'delete', 'route' => ['ExpertiseAreas.destroy',$expertise_area->id]))}}
		    			{{ Form::submit('Delete',array('class' => 'btn btn-default')) }}
		    		{{ Form::close() }}
		    	</div>
			</p>
		@endforeach
	</div>
@stop