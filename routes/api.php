<?php

use Illuminate\Http\Request;

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('c_roles', 'C_roleAPIController')->middleware('auth:api');

Route::resource('c_horarios', 'C_horarioAPIController')->middleware('auth:api');

Route::resource('c_giro_negocios', 'C_giro_negocioAPIController')->middleware('auth:api');

Route::resource('t_eventos', 'T_eventoAPIController')->middleware('auth:api');

Route::resource('t_personas', 'T_personaAPIController')->middleware('auth:api');

Route::resource('c_tipo_usuarios', 'C_tipo_usuarioAPIController')->middleware('auth:api');

Route::resource('c_universidads', 'C_universidadAPIController')->middleware('auth:api');

Route::resource('c_tipo_eventos', 'C_tipo_eventoAPIController')->middleware('auth:api');

Route::resource('c_municipios', 'C_municipioAPIController')->middleware('auth:api');

Route::resource('c_estados', 'C_estadoAPIController')->middleware('auth:api');

Route::resource('t_likes', 'T_likeAPIController')->middleware('auth:api');;