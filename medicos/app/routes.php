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


Route::get('/', 'portadaController@inicio');
//Route::get('edicion/portada/', 'portadaController@edicion');

Route::post('edicion/actualizarPortada', 'portadaController@actualizarPortada');


Route::get('/prueba', 'PruebaController@pruebaWelcome');

Route::get('/prueba2',    'PruebaController@prueba2Welcome');

Route::get('/prueba2/do', 'PruebaController@prueba2Welcome');

Route::post('/prueba/guarda', 'PruebaController@pruebaGuarda');

Route::resource('afiliados', 'AfiliadosController');

Route::resource('/sobre_nosotros', 'sobreNosotrosController@SobreNosotros');

Route::resource('edicion/sobre_nosotros', 'sobreNosotrosController@SobreNosotrosEdicion');

Route::post('edicion/actualizarsobre_nosotros', 'sobreNosotrosController@actualizarsobre_nosotros');

Route::post('afiliate', 'sobreNosotrosController@actualizarsobre_nosotros');

Route::get('nueva/noticia', 'noticiasController@nuevaNoticia');

Route::post('/guardarNoticia', 'noticiasController@guardarNoticia');

Route::get('/noticia/{slug}', 'noticiasController@noticiaActual');

Route::get('edicion/noticia/{slug}', 'noticiasController@editarNoticiaActual');

Route::post('/edicion/noticia/{slug}/actualizarNoticia', 'noticiasController@editarNoticiaActual_guardar');

Route::get('/listado/noticias','noticiasController@listarNoticias');

Route::post('/listado/actualizarEstadoNoticia','noticiasController@actualizarEstadoNoticia');

Route::get('edicionNoticia', function()
 {
    return URL::action('noticiasController@editarNoticiaActual', array('slug'));
 });

Route::resource('carrucels', 'CarrucelsController');

Route::resource('galeria', 'GaleriaController');


Route::resource('galeria_seccion', 'GaleriaController@galeria_seccion');




Route::resource('/contacto', 'contactoController@Contacto');

Route::resource('edicion/contacto', 'contactoController@ContactoEdicion');

Route::post('edicion/actualizarContacto', 'contactoController@actualizarContacto');

Route::resource('centraltextos', 'CentraltextosController');


 Route::group(array('before' => 'auth'), function() {
    Route::post('edicion/actualizarPortada', 'portadaController@actualizarPortada');
//    Route::resource('edicion/sobre_nosotros', 'sobreNosotrosController@SobreNosotrosEdicion');
//    Route::post('edicion/actualizarsobre_nosotros', 'sobreNosotrosController@actualizarsobre_nosotros');
//    Route::post('afiliate', 'sobreNosotrosController@actualizarsobre_nosotros');
//    Route::get('nueva/noticia', 'noticiasController@nuevaNoticia');
//    Route::post('/guardarNoticia', 'noticiasController@guardarNoticia');
//    Route::get('edicion/noticia/{slug}', 'noticiasController@editarNoticiaActual');
//    Route::post('/edicion/noticia/{slug}/actualizarNoticia', 'noticiasController@editarNoticiaActual_guardar');    
//    Route::post('/listado/actualizarEstadoNoticia','noticiasController@actualizarEstadoNoticia');
//
//    Route::get('edicionNoticia', function()
//     {
//        return URL::action('noticiasController@editarNoticiaActual', array('slug'));
//     });
    Route::get('edicion/portada/', 'portadaController@edicion');    
    
//    Route::get('/listado/noticias','noticiasController@listarNoticias');
//
//    Route::resource('carrucels', 'CarrucelsController');
//
//    Route::resource('galeria', 'GaleriaController');
    
});
 