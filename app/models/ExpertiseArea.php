<?php

class ExpertiseArea extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'name' => 'required'
	];
	protected $table = 'ExpertiseAreas';
	// Don't forget to fill this array
	protected $fillable = ['name'];

	public function doctors()
    {
        return $this->belongsToMany('Doctor','ExpertiseArea_doctor','ExpertiseArea_id','doctor_id')->withTimestamps();;
    }

}