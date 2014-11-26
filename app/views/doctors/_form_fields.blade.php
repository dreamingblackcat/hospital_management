

{{ Form::token()}}

{{Form::bsTextFieldWithLabel("education_info",$doctor,$errors,Input::old('education_info',$doctor->education_info))}}
{{Form::bsTextFieldWithLabel("official_started_working_date",$doctor,$errors,Input::old('official_started_working_date',$doctor->official_started_working_date))}}

<div class="form-group">
    <label class="col-sm-12" for="$column_name">
        Expertise Areas:
    </label>
	    @foreach(array_chunk($expertise_areas, 3) as $row)
			<div class="row">
	    		@foreach($row as $index => $expertise_area)
			    	<div class="col-sm-4">
					    	{{$expertise_area['name']}}{{Form::checkbox('expertise_areas[]', $expertise_area['id']);}}
					</div>
		    	@endforeach
			</div>
	    @endforeach
</div>

<h3>Fill in personal information</h3>{{Form::bsTextFieldWithLabel("person[name]",$person,$errors,Input::old('person[name]',$person->name))}}
{{Form::bsTextFieldWithLabel('person[nationality]',$person,$errors,Input::old('person[nationality]',$person->nationality))}}
{{Form::bsTextFieldWithLabel('person[ethnic_group]',$person,$errors,Input::old('person[ethnic_group]',$person->ethnic_group))}}
{{Form::bsTextFieldWithLabel('person[date_of_birth]',$person,$errors,Input::old('person[date_of_birth]',$person->date_of_birth))}}
{{Form::bsTextFieldWithLabel('person[nrc_number]',$person,$errors,Input::old('person[nrc_number]',$person->nrc_number))}}
{{Form::bsTextFieldWithLabel('person[contact_email]',$person,$errors,Input::old('person[contact_email]',$person->contact_email))}}
{{Form::bsTextFieldWithLabel('person[phone_number]',$person,$errors,Input::old('person[phone_number]',$person->phone_number))}}
{{Form::bsTextFieldWithLabel('person[father_name]',$person,$errors,Input::old('[father_name]',$person->father_name))}}
<div class="form-group alr">
	{{ Form::submit($button_text,['class'=>"btn btn-default"])}}
</div>