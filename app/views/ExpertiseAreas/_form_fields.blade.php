{{Form::bsTextFieldWithLabel("name",$expertise_area,$errors,Input::old('name',$expertise_area->name))}}

<div class="form-group alr">
	{{ Form::submit($button_text,['class'=>"btn btn-default"])}}
</div>