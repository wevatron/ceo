<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});












Route::resource('c_roles', 'C_roleAPIController');















Route::resource('c_horarios', 'C_horarioAPIController');



Route::resource('c_giro_negocios', 'C_giro_negocioAPIController');









Route::resource('t_eventos', 'T_eventoAPIController');



Route::resource('t_personas', 'T_personaAPIController');



Route::resource('c_tipo_usuarios', 'C_tipo_usuarioAPIController');

Route::resource('c_universidads', 'C_universidadAPIController');

Route::resource('c_tipo_eventos', 'C_tipo_eventoAPIController');

Route::resource('c_municipios', 'C_municipioAPIController');

Route::resource('c_estados', 'C_estadoAPIController');