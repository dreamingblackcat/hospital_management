@extends('layouts.dashboard')
<!-- 
@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@stop -->
@section('heading')
	<h3>Doctors</h3>
@stop

@section('sub_heading')
	<div class="row">
		<div class="col-sm-4 sub-heading">
			Doctor List
		</div>
		<div class="col-sm-offset-4 col-sm-4">
			@include('shared._create_link_and_search_form',['create_route' => 'doctors.create'])
		</div>
	</div>
@stop

@section('content')
<div class="col-md-12">
<table class="cm-table table-bordered">
	<thead>
		<tr>
			<th>No.</th>
			<th>Name</th>
			<th>Expertise Area</th>
			<th>Education Info</th>
			<th>Years of Experience</th>
			<th colspan="3">Actions</th>
		</tr>
	</thead>
    @foreach ($doctors as $index => $doctor)
    <tr>
    	<td>{{ $index+1 }}</td>
    	<td>{{ $doctor->person->name}}</td>
    	<td>
    		@foreach ($doctor->expertise_areas()->get() as $expertise_area)
    			{{ $expertise_area->name . " "}}
    		@endforeach
    	</td>
    	<td>{{ $doctor->education_info }}</td>
     	<td>{{ $doctor->work_experience() }}</td> 
    	<td>{{ link_to_route('doctors.edit', "Edit", $parameters = array('id'=>$doctor->id), $attributes = array('class' => 'btn btn-default')) }}</td>
    	<td>{{ link_to_route('doctors.show', "View", $parameters = array('id'=>$doctor->id), $attributes = array('class' => 'btn btn-default')) }}</td>
    	<td>
			{{Form::open(array('method' => 'delete', 'route' => ['doctors.destroy',$doctor->id]))}}
    			{{ Form::submit('Delete',array('class' => 'btn btn-default')) }}
    		{{ Form::close() }}</td>
    </tr>
	@endforeach
</table>
</div>
<br>
<div class="alr">
</div>

@stop