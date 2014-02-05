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

Route::get('acceso', array('before' => 'guest', function() {
    return View::make('adminlayouts.login');
}));


Route::post('login', array('uses' => 'AuthController@doLogin', 'before' => 'guest'));

Route::get('logout', 'AuthController@doLogout');


Route::get('/test', function() {
    return View::make('adminlayouts.layout');
});

//Route::get('/prueba', function()
//{
//	return View::make('prueba');
//});



Route::get('/prueba', 'PruebaController@pruebaWelcome');

Route::get('/prueba2', 'PruebaController@prueba2Welcome');

Route::get('/prueba2/do', 'PruebaController@prueba2Welcome');

Route::resource('afiliados', 'AfiliadosController');
