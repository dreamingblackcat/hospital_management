@extends('layouts.dashboard')
<!-- 
@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@stop -->
@section('heading')
	<h3>Doctor Information</h3>
@stop

@section('sub_heading')
	<div class="row">
		<div class="col-sm-4 sub-heading">
			Doctor {{ $doctor->person->name }}
		</div>
		<div class="col-sm-offset-4 col-sm-4">
			<input type="text" class="form-control" placeholder="Text input">
		</div>
	</div>
@stop

@section('content')
	<ul class="nav nav-tabs" id="doctorTab">
	  <li class="active"><a href="#home">Personal Information</a></li>
	  <li><a href="#profile">Patients</a></li>
	  <li><a href="#messages">Schedule</a></li>
	</ul>

	<div class="tab-content">
	  <div class="tab-pane active" id="home">
	  	<p>{{ $doctor->person->name }}</p>
	  	<p>{{ $doctor->person->nationality }}</p>
	  	<p>{{ $doctor->person->ethnic_group }}</p>
	  	<p>{{ $doctor->person->date_of_birth->format('Y-m-d') }}</p>
	  	<p>{{ $doctor->person->nrc_number }}</p>
	  	<p>{{ $doctor->person->phone_number }}</p>
	  </div>
	  <div class="tab-pane" id="profile">Coming Soon</div>
	  <div class="tab-pane" id="messages">Coming Soon</div>
	  <div class="tab-pane" id="settings">Coming Soon</div>
	</div

@stop