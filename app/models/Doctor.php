<?php

class Doctor extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['education_info','expertise_area_id','official_started_working_date','person_id'];
	// public function person()
 //    {
 //        return $this->hasOne('Person');
 //    }
    public function person(){

	  return $this->morphOne('Person','profileable');
	}

}