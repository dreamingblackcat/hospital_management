<?php

class SessionsController extends \BaseController {


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$inputs = Input::all();
		
		$attempt = Auth::attempt([
			'email' => $inputs["email"],
			'password' => $inputs["password"]
			]);
		if($attempt){
			return Redirect::intended('/')->with('flash_message', "You have been logged in!");
		}

		dd("Problem");
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();
		return Redirect::home();
	}

}
