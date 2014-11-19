<?php

class DoctorsController extends \BaseController {

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
		return View::make('doctors.create');
	}

	/**
	 * Store a newly created doctor in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Doctor::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Doctor::create($data);

		return Redirect::route('doctors.index');
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
		$doctor = Doctor::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Doctor::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$doctor->update($data);

		return Redirect::route('doctors.index');
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

}
