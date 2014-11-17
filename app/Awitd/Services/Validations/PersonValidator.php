<?php
 
namespace Awitd\Services\Validations;
 
class PersonValidator extends Validator {
 
    /**
     * @var array Validation rules for the test form, they can contain in-built Laravel rules or our custom rules
     */
    public $rules = array(
        'name' => array( 'required', 'alpha_dash', 'max:200' ),
        'nationality' => array( 'required', 'max:200' ),
        'ethnic_group' =>array( 'required', 'max:200' ),
        'date_of_birth' => array( 'required', 'date'),
        'nrc_number' => array( 'required', 'max:25' ),
        'contact_email' => array( 'required', 'email' ),
        'phone_number' => array( 'required', 'max:25' ),
        'father_name' => array( 'required', 'max:25' )
    );
 
}   //end of class
 