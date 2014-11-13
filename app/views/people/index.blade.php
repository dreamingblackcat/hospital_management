@extends('layouts.default')
<!-- 
@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@stop -->

@section('content')
<div class="alc">
	<h3>List of People</h3>
</div>
<div class="container">
<table class="table-bordered">
	<thead>
		<tr>
			<th>Name</th>
			<th>Nationality</th>
			<th>Ethnic Group</th>
			<th>Date of Birth</th>
			<th>NRC Number</th>
			<th>Contact Email</th>
			<th>Phone Number</th>
		</tr>
	</thead>
    @foreach ($people as $person)
    <tr>
    	<td>{{ $person->name }}</td>
    	<td>{{ $person->nationality }}</td>
    	<td>{{ $person->ethnic_group }}</td>
    	<td>{{ $person->date_of_birth->format('Y-m-d') }}</td>
    	<td>{{ $person->nrc_number }}</td>
    	<td>{{ $person->contact_email }}</td>
    	<td>{{ $person->phone_number }}</td>
    </tr>
	@endforeach
</table>
</div>
<div class="alr">
	{{ link_to_route('people.create', "New Pesron", $parameters = array(), $attributes = array('class' => 'btn btn-default'))}}
</div>

@stop