<?php
use Carbon\Carbon as Carbon;
class Doctor extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	protected $dates = array('official_started_working_date');

	// Don't forget to fill this array
	protected $fillable = ['education_info','official_started_working_date'];
	// public function person()
 //    {
 //        return $this->hasOne('Person');
 //    }
    public function person(){

	  return $this->morphOne('Person','profileable');
	}

	   public function expertise_areas()
    {
        return $this->belongsToMany('ExpertiseArea','ExpertiseArea_doctor', 'doctor_id','ExpertiseArea_id')->withTimestamps();;
    }

    public function work_experience(){
    	return Carbon::parse($this->official_started_working_date)->age;
    }
     public function setOfficialStartedWorkingDateAttribute($date){
    	$this->attributes['official_started_working_date'] = Carbon::parse($date);
    }
}

