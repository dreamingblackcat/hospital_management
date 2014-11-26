<?php
use Awitd\Exceptions\ValidationException;
use Awitd\Services\Validations\DoctorValidator as DoctorValidator;
use Awitd\Services\Validations\PersonValidator as PersonValidator;

class DoctorsController extends \BaseController {


	public function __construct(DoctorValidator $doctor_validator, PersonValidator $person_validator)
    {
        $this->beforeFilter('auth');
        $this->_doctor_validator = $doctor_validator;
        $this->_person_validator = $person_validator;
    }

	/**
	 * Display a listing of doctors
	 *
	 * @return Response
	 */
	public function index()
	{
		$doctors = Doctor::all();

		return View::make('doctors.index', compact('doctors'));
	}

	/**
	 * Show the form for creating a new doctor
	 *
	 * @return Response
	 */
	public function create()
	{
		$person = new Person;
		// $expertise_areas = $this->transformForSelect(ExpertiseArea::all());		
		$expertise_areas = ExpertiseArea::select(['id','name'])->get()->toArray();
		// dd(array_chunk($expertise_areas,3));
		return View::make('doctors.create',compact('person','expertise_areas'));
	}

	/**
	 * Store a newly created doctor in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$doctor_inputs = $this->fetchDoctorInputs(Input::all());
		$personal_inputs = Input::get('person');
		$expertise_areas = Input::get('expertise_areas');
		// dd($expertise_areas);
        try{ 
        	$validate_data = $this->_doctor_validator->validate($doctor_inputs);
        	$validate_data = $this->_person_validator->validate($personal_inputs);
			DB::transaction(function() use ( $doctor_inputs, $personal_inputs, $expertise_areas){
			    $doctor = Doctor::create($doctor_inputs);
        		$person = new Person($personal_inputs);
			    $doctor->person()->save($person);
			    $doctor->expertise_areas()->sync($expertise_areas);
			});

			return Redirect::route('doctors.index')->withMessage( 'Data passed validation checks');
        } catch (ValidationException $e){
        	// dd($e->get_errors());
        	return Redirect::route('doctors.create')->withInput()->withErrors($e->get_errors());
        }
	}

	/**
	 * Display the specified doctor.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$doctor = Doctor::findOrFail($id);

		return View::make('doctors.show', compact('doctor'));
	}

	/**
	 * Show the form for editing the specified doctor.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$doctor = Doctor::find($id);

		return View::make('doctors.edit', compact('doctor'));
	}

	/**
	 * Update the specified doctor in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$doctor = Person::findOrFail($id);
		$inputs = Input::all();

		try{ 

        	$validate_data = $this->_validator->validate($inputs);
			$doctor->update($inputs);

			return Redirect::route('doctors.index')->withMessage( 'Data passed validation checks');

        } catch (ValidationException $e){

        	return Redirect::route('doctors.create')->withInput()->withErrors($e->get_errors());
        }
	}

	/**
	 * Remove the specified doctor from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Doctor::destroy($id);

		return Redirect::route('doctors.index');
	}

	// private function transformForSelect($ary,$key_attr= 'id',$value_attr = 'name'){
	// 	$new_ary = [];
	// 	foreach($ary as $item){
	// 		$new_ary[$item->getAttribute($key_attr)]= $item->getAttribute($value_attr);
	// 	}
	// 	return $new_ary;
	// }
	private function fetchDoctorInputs($inputs){
		return [
			'education_info' => $inputs['education_info'],
			'official_started_working_date'=> $inputs['official_started_working_date']
		];
	}

}
