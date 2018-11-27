<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages/landing');
});
Route::get('/inicioSesion', function(){
	return view('pages/inicioSesion');
});
Route::get('/registro', function(){
	return view('pages/registro');
});

Route::get('/enviarConsulta', 'enviarController@enviarConsulta');
