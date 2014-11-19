
<div class="form-group">
	{{ Form::label('name', 'Name:',array('class' => "col-sm-4" )) }}

	<div class="col-sm-5">
		{{ Form::text('name',Input::old('name',$expertise_area->name), array('class' => "form-control" )) }}
		@if($errors->has('name'))
			<p class="alert alert-warning">{{ $errors->first('name') }}</p> 
		@endif
	</div>
	<div class="form-group alr">
		{{ Form::submit($button_text,['class'=>"btn btn-default"])}}
	</div>
</div>