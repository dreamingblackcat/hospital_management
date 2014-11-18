<?php

use Carbon\Carbon;


class Person extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	protected $dates = array('date_of_birth');

	// public function setDateOfBirthAttribute($value)
 //    {
 //        $this->attributes['date_of_birth'] = new Carbon($value);
 //    }

	// Don't forget to fill this array
	protected $fillable = ['name','nationality','ethnic_group', 'date_of_birth','nrc_number','contact_email','phone_number','father_name'];

}