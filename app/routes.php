<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/login','SessionsController@create');
Route::get('/logout','SessionsController@destroy');

// temporary profile page for logged in user
Route::get('/profile', function(){
	return "Welcome ". Auth::user()->email;
})->before('auth');

Route::get('/',['as'=> 'home', function()
{
	return View::make('hello');
}]);

Route::resource('sessions','SessionsController',['only'=> array('create','store','destroy')]);

Route::resource('people', 'PeopleController');

Route::resource('ExpertiseAreas', 'ExpertiseAreasController');