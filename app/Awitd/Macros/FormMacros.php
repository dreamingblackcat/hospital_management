<?php

use Illuminate\Html\FormBuilder;

Form::macro('bsTextFieldWithLabel', function($column_name,$object,$errors,$old_value){
	$sanitized_column_name = sanitizeColumnName($column_name);
	$label_text = ucwords($sanitized_column_name);
	if($errors->has($sanitized_column_name)){
		$error_msg = $errors->first($sanitized_column_name);
		$error_text = "<p class='alert alert-warning'>$error_msg</p>";
	}else{
		$error_text = "";
	}
			
	$html = <<<FORM_CONTROL
	<div class="form-group">
	    <label class="col-sm-4" for="$sanitized_column_name">
	        $label_text:
	    </label>
	    <div class="col-sm-5">
	        <input id="$sanitized_column_name" class="form-control" type="text" value="$old_value" name="$column_name"></input>
	    	$error_text
		</div>
	</div>
FORM_CONTROL;
return $html;
});

// TODO => helper functions without tests
//         must rewrite for various use cases

function sanitizeColumnName($column_name){
	$start = strpos($column_name, '[');
	$label_text = '';
	if($start){
		$end = strpos($column_name,']');
		$label_text = extractNestedColumnName($column_name,$start,$end);
	}else{
		$label_text = $column_name;
	}
	return $label_text;
}

function extractNestedColumnName($str,$start,$end){
	$nested_data = '';
	for($i= $start+1; $i < $end; $i++ ){
		$nested_data .= $str[$i];
	}
	return $nested_data;
}
