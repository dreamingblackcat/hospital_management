<?php
 
namespace Awitd\Services\Validations;
 
class DoctorValidator extends Validator {
 
    /**
     * @var array Validation rules for the test form, they can contain in-built Laravel rules or our custom rules
     */
    public $rules = array(
        'education_info' => array( 'required', 'max:200' ),
        'official_started_working_date' => array( 'required', 'date')
    );
 
}   //end of class
 