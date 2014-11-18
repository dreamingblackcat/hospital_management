<?php
use Awitd\Exceptions\ValidationException;
use Awitd\Services\Validations\PersonValidator as Validator;

class PeopleController extends \BaseController {

	/**
	 * Display a listing of people
	 *
	 * @return Response
	 */
	public function __construct(Validator $validator)
    {
        $this->beforeFilter('auth');
        $this->_validator = $validator;
    }

	public function index()
	{
		$people = Person::all();

		return View::make('people.index', compact('people'));
	}

	/**
	 * Show the form for creating a new person
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('people.create');
	}

	/**
	 * Store a newly created person in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$inputs = Input::all();
        try{ 

        	$validate_data = $this->_validator->validate($inputs);
			Person::create($inputs);

			return Redirect::route('people.index')->withMessage( 'Data passed validation checks');
        } catch (ValidationException $e){

        	return Redirect::route('people.create')->withInput()->withErrors($e->get_errors());
        }
	}

	/**
	 * Display the specified person.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$person = Person::findOrFail($id);

		return View::make('people.show', compact('person'));
	}

	/**
	 * Show the form for editing the specified person.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$person = Person::find($id);

		return View::make('people.edit', compact('person'));
	}

	/**
	 * Update the specified person in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$person = Person::findOrFail($id);
		$inputs = Input::all();

		try{ 

        	$validate_data = $this->_validator->validate($inputs);
			$person->update($inputs);

			return Redirect::route('people.index')->withMessage( 'Data passed validation checks');

        } catch (ValidationException $e){

        	return Redirect::route('people.create')->withInput()->withErrors($e->get_errors());
        }
	}

	/**
	 * Remove the specified person from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Person::destroy($id);

		return Redirect::route('people.index');
	}

}
