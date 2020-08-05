<?php

use Illuminate\Http\Request;
use App\Models\T_persona;

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return T_persona::with('Municipio','TipoUsuario','Universidad','Giro')->find(1);
});


Route::resource('qr', 'qrController');

//Route::resource('c_roles', 'C_roleAPIController')->middleware('auth:api');

Route::resource('c_horarios', 'C_horarioAPIController')->middleware('auth:api');

Route::resource('c_giro_negocios', 'C_giro_negocioAPIController');

Route::resource('t_eventos', 'T_eventoAPIController')->middleware('auth:api');

Route::resource('t_personas', 'T_personaAPIController')->middleware('auth:api');

Route::resource('c_tipo_usuarios', 'C_tipo_usuarioAPIController')->middleware('auth:api');

Route::resource('c_universidads', 'C_universidadAPIController')->middleware('auth:api');

Route::resource('c_tipo_eventos', 'C_tipo_eventoAPIController')->middleware('auth:api');

Route::resource('c_municipios', 'C_municipioAPIController');

//Route::resource('c_estados', 'C_estadoAPIController')->middleware('auth:api');

Route::resource('t_likes', 'T_likeAPIController')->middleware('auth:api');

Route::resource('t_boletos', 'T_boletoAPIController');//->middleware('auth:api');

Route::resource('c_estados_reps', 'C_estados_repAPIController');

//Route::resource('estados', 'EstadoAPIController');

Route::resource('c_categorias', 'C_categoriaAPIController');

Route::resource('t_bazars', 'T_bazarAPIController');



Route::resource('t_imagen_bazars', 'T_imagen_bazarAPIController');

Route::resource('t_aprendes', 'T_aprendeAPIController');

Route::resource('c_categoria_aprendes', 'C_categoria_aprendeAPIController');