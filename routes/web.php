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
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');













Route::resource('cHorarios', 'C_horarioController');















Route::resource('cGiroNegocios', 'C_giro_negocioController');











Route::resource('tEventos', 'T_eventoController');



Route::resource('tPersonas', 'T_personaController');



Route::resource('cGiroNegocios', 'C_giro_negocioController');



Route::resource('cTipoUsuarios', 'C_tipo_usuarioController');

Route::resource('cUniversidads', 'C_universidadController');

Route::resource('cTipoEventos', 'C_tipo_eventoController');

Route::resource('cMunicipios', 'C_municipioController');

Route::resource('cMunicipios', 'C_municipioController');

Route::resource('cMunicipios', 'C_municipioController');