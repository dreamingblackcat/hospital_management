<?php

class ExpertiseAreasController extends \BaseController {

	/**
	 * Display a listing of ExpertiseAreas
	 *
	 * @return Response
	 */


	public function index()
	{
		$expertise_areas = ExpertiseArea::all();

		return View::make('ExpertiseAreas.index', compact('expertise_areas'));
	}

	/**
	 * Show the form for creating a new expertise_area
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('ExpertiseAreas.create');
	}

	/**
	 * Store a newly created expertise_area in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), ExpertiseArea::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		ExpertiseArea::create($data);

		return Redirect::route('ExpertiseAreas.index');
	}

	/**
	 * Display the specified expertise_area.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$expertise_area = ExpertiseArea::findOrFail($id);

		return View::make('ExpertiseAreas.show', compact('expertise_area'));
	}

	/**
	 * Show the form for editing the specified expertise_area.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$expertise_area = ExpertiseArea::find($id);

		return View::make('ExpertiseAreas.edit', compact('expertise_area'));
	}

	/**
	 * Update the specified expertise_area in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$expertise_area = ExpertiseArea::findOrFail($id);

		$validator = Validator::make($data = Input::all(), ExpertiseArea::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$expertise_area->update($data);

		return Redirect::route('ExpertiseAreas.index');
	}

	/**
	 * Remove the specified expertise_area from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		ExpertiseArea::destroy($id);

		return Redirect::route('ExpertiseAreas.index');
	}

}
