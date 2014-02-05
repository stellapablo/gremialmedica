<?php

class PruebaController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function pruebaWelcome()
	{
		return View::make('prueba.prueba');
	}
        
	public function prueba2Welcome()
	{
		return View::make('prueba.prueba2');
	}

}