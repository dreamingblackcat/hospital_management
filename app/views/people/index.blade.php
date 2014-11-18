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
			<th>Nationality</th>
			<th>Ethnic Group</th>
			<th>Date of Birth</th>
			<th>NRC Number</th>
			<th>Phone Number</th>
			<th colspan="3">Actions</th>
		</tr>
	</thead>
    @foreach ($people as $index => $person)
    <tr>
    	<td>{{ $index+1 }}</td>
    	<td>{{ $person->name }}</td>
    	<td>{{ $person->nationality }}</td>
    	<td>{{ $person->ethnic_group }}</td>
    	<td>{{ $person->date_of_birth->format('Y-m-d') }}</td>
    	<td>{{ $person->nrc_number }}</td>
    	<td>{{ $person->phone_number }}</td>
    	<td>{{ link_to_route('people.edit', "Edit", $parameters = array('id'=>$person->id), $attributes = array('class' => 'btn btn-default')) }}</td>
    	<td>{{ link_to_route('people.show', "View", $parameters = array('id'=>$person->id), $attributes = array('class' => 'btn btn-default')) }}</td>
    	<td>
			{{Form::open(array('method' => 'delete', 'route' => ['people.destroy',$person->id]))}}
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