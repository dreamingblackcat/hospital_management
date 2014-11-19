@extends('layouts.dashboard')
<!-- 
@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@stop -->
@section('heading')
	<h3>People</h3>
@stop

@section('sub_heading')
	<div class="row">
		<div class="col-sm-4 sub-heading">
			People List
		</div>
		<div class="col-sm-offset-4 col-sm-4">
			<input type="text" class="form-control" placeholder="Text input">
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
			<th>Experience</th>
			<th colspan="3">Actions</th>
		</tr>
	</thead>
    @foreach ($people as $index => $doctor)
    <tr>
    	<td>{{ $index+1 }}</td>
    	<td>{{ $doctor->name }}</td>
    	<td>{{ $doctor->nationality }}</td>
    	<td>{{ $doctor->ethnic_group }}</td>
    	<td>{{ $doctor->date_of_birth->format('Y-m-d') }}</td>
    	<td>{{ $doctor->nrc_number }}</td>
    	<td>{{ $doctor->phone_number }}</td>
    	<td>{{ link_to_route('people.edit', "Edit", $parameters = array('id'=>$doctor->id), $attributes = array('class' => 'btn btn-default')) }}</td>
    	<td>{{ link_to_route('people.show', "View", $parameters = array('id'=>$doctor->id), $attributes = array('class' => 'btn btn-default')) }}</td>
    	<td>
			{{Form::open(array('method' => 'delete', 'route' => ['people.destroy',$doctor->id]))}}
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