<?php

use Illuminate\Html\FormBuilder;

Form::macro('bsTextFieldWithLabel', function($column_name,$object,$errors,$old_value){
	$label_text = ucwords($column_name);
	if($errors->has($column_name)){
		$error_msg = $errors->first($column_name);
		$error_text = "<p class='alert alert-warning'>$error_msg</p>";
	}else{
		$error_text = "";
	}
			
	$html = <<<FORM_CONTROL
	<div class="form-group">
	    <label class="col-sm-4" for="$column_name">
	        $label_text:
	    </label>
	    <div class="col-sm-5">
	        <input id="$column_name" class="form-control" type="text" value="$old_value" name="$column_name"></input>
	    	$error_text
		</div>
	</div>
FORM_CONTROL;

return $html;
});
