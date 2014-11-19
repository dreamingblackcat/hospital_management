<?php

class ExpertiseArea extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'name' => 'required'
	];
	protected $table = 'ExpertiseAreas';
	// Don't forget to fill this array
	protected $fillable = ['name'];

}