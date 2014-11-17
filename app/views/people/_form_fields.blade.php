{{ Form::token()}}
<div class="form-group">
	{{ Form::label('name', 'name:',array('class' => "col-sm-4" )) }}

	<div class="col-sm-5">
		{{ Form::text('name','', array('class' => "form-control",'value' => Input::old('name') )) }}
		@if($errors->has('name'))
			<p class="alert alert-warning">{{ $errors->first('name') }}</p> 
		@endif
	</div>
</div>
<div class="form-group">
	{{ Form::label('nationality', 'nationality:',array('class' => "col-sm-4" )) }}

	<div class="col-sm-5">
		{{ Form::text('nationality','', array('class' => "form-control",'value' => Input::old('nationality') )) }}
		@if($errors->has('nationality'))
			<p class="alert alert-warning">{{ $errors->first('nationality') }}</p> 
		@endif
	</div>
</div>
<div class="form-group">
	{{ Form::label('ethnic_group', 'ethnic_group:',array('class' => "col-sm-4" )) }}

	<div class="col-sm-5">
		{{ Form::text('ethnic_group','', array('class' => "form-control",'value' => Input::old('ethnic_group') )) }}
		@if($errors->has('ethnic_group'))
			<p class="alert alert-warning">{{ $errors->first('ethnic_group') }}</p> 
		@endif
	</div>
</div>
<div class="form-group">
	{{ Form::label('date_of_birth', 'date_of_birth:',array('class' => "col-sm-4" )) }}

	<div class="col-sm-5">
		{{ Form::text('date_of_birth','', array('class' => "form-control",'value' => Input::old('date_of_birth') )) }}
		@if($errors->has('date_of_birth'))
			<p class="alert alert-warning">{{ $errors->first('date_of_birth') }}</p> 
		@endif
	</div>
</div>
<div class="form-group">
	{{ Form::label('nrc_number', 'nrc_number:',array('class' => "col-sm-4" )) }}

	<div class="col-sm-5">
		{{ Form::text('nrc_number','', array('class' => "form-control",'value' => Input::old('nrc_number') )) }}
		@if($errors->has('nrc_number'))
			<p class="alert alert-warning">{{ $errors->first('nrc_number') }}</p> 
		@endif
	</div>
</div>
<div class="form-group">
	{{ Form::label('contact_email', 'contact_email:',array('class' => "col-sm-4" )) }}

	<div class="col-sm-5">
		{{ Form::text('contact_email','', array('class' => "form-control",'value' => Input::old('contact_email') )) }}
		@if($errors->has('contact_email'))
			<p class="alert alert-warning">{{ $errors->first('contact_email') }}</p> 
		@endif
	</div>
</div>
<div class="form-group">
	{{ Form::label('phone_number', 'phone_number:',array('class' => "col-sm-4" )) }}

	<div class="col-sm-5">
		{{ Form::text('phone_number','', array('class' => "form-control",'value' => Input::old('phone_number') )) }}
		@if($errors->has('phone_number'))
			<p class="alert alert-warning">{{ $errors->first('phone_number') }}</p> 
		@endif
	</div>
</div>
<div class="form-group">
	{{ Form::label('father_name', 'father_name:',array('class' => "col-sm-4" )) }}

	<div class="col-sm-5">
		{{ Form::text('father_name','', array('class' => "form-control",'value' => Input::old('father_name') )) }}
		@if($errors->has('father_name'))
			<p class="alert alert-warning">{{ $errors->first('father_name') }}</p> 
		@endif
	</div>
</div>
<div class="form-group alr">
	{{ Form::submit($button_text,['class'=>"btn btn-default"])}}
</div>