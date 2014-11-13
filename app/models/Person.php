<?php

class Person extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	protected $dates = array('date_of_birth');

	// Don't forget to fill this array
	protected $fillable = [];

}