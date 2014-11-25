{{ Form::token()}}

{{Form::bsTextFieldWithLabel('name',$person,$errors,Input::old('name',$person->name))}}
{{Form::bsTextFieldWithLabel('nationality',$person,$errors,Input::old('nationality',$person->nationality))}}
{{Form::bsTextFieldWithLabel('ethnic_group',$person,$errors,Input::old('ethnic_group',$person->ethnic_group))}}
{{Form::bsTextFieldWithLabel('date_of_birth',$person,$errors,Input::old('date_of_birth',$person->date_of_birth))}}
{{Form::bsTextFieldWithLabel('nrc_number',$person,$errors,Input::old('nrc_number',$person->nrc_number))}}
{{Form::bsTextFieldWithLabel('contact_email',$person,$errors,Input::old('contact_email',$person->contact_email))}}
{{Form::bsTextFieldWithLabel('phone_number',$person,$errors,Input::old('phone_number',$person->phone_number))}}
{{Form::bsTextFieldWithLabel('father_name',$person,$errors,Input::old('father_name',$person->father_name))}}
<div class="form-group alr">
	{{ Form::submit($button_text,['class'=>"btn btn-default"])}}
</div>