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

Route::get('/', 'FrontController@index')->name('index');

Route::get('/encuentro-2020', 'FrontController@encuentro')->name('encuentro-2020');
Route::get('/nosotros', 'FrontController@nosotros')->name('nosotros');
Route::get('/ponentes', 'FrontController@ponentes')->name('ponentes');
Route::get('/bazar-digital', 'FrontController@bazar')->name('bazar-digital');
Route::get('/reset', 'FrontController@reset')->name('reset');
Route::get('/paneles', 'FrontController@paneles')->name('paneles');
Route::get('/live', 'FrontController@live')->name('live');

Auth::routes();

Route::resource('/newsletter', 'NewsletterController');

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/herramientas-emprender', 'HomeController@index')->name('herramientas-emprender')->middleware('auth');

Route::resource('cHorarios', 'C_horarioController')->middleware(['auth','nivel']);



Route::resource('cGiroNegocios', 'C_giro_negocioController')->middleware(['auth','nivel']);

Route::resource('tEventos', 'T_eventoController')->middleware(['auth','nivel']);



Route::resource('tPersonas', 'T_personaController')->middleware(['auth','nivel']);



Route::resource('cGiroNegocios', 'C_giro_negocioController')->middleware(['auth','nivel']);



Route::resource('cTipoUsuarios', 'C_tipo_usuarioController')->middleware(['auth','nivel']);

Route::resource('cUniversidads', 'C_universidadController')->middleware(['auth','nivel']);

Route::resource('cTipoEventos', 'C_tipo_eventoController')->middleware(['auth','nivel']);

Route::resource('cMunicipios', 'C_municipioController')->middleware(['auth','nivel']);

Route::resource('cMunicipios', 'C_municipioController')->middleware(['auth','nivel']);

Route::resource('cMunicipios', 'C_municipioController')->middleware(['auth','nivel']);

Route::resource('tImagenes', 'T_imagenesController')->middleware(['auth','nivel']);

Route::resource('tLikes', 'T_likeController')->middleware(['auth','nivel']);

Route::resource('tLikes', 'T_likeController')->middleware(['auth','nivel']);

Route::resource('tBoletos', 'T_boletoController')->middleware(['auth','nivel']);

Route::resource('cEstadosReps', 'C_estados_repController')->middleware(['auth','nivel']);

Route::resource('estados', 'EstadoController')->middleware(['auth','nivel']);


Route::get('notificaciones', 'notificaciones@notificarEvento')->name('notificaciones')->middleware(['auth','nivel']);

Route::resource('cCategorias', 'C_categoriaController')->middleware(['auth','nivel']);

Route::resource('tBazars', 'T_bazarController')->middleware(['auth','nivel']);



Route::resource('tImagenBazars', 'T_imagen_bazarController')->middleware(['auth','nivel']);

Route::resource('tAprendes', 'T_aprendeController')->middleware(['auth','nivel']);

Route::resource('cCategoriaAprendes', 'C_categoria_aprendeController')->middleware(['auth','nivel']);

Route::resource('cOcupacions', 'C_ocupacionController')->middleware(['auth','nivel']);

Route::resource('cRegions', 'C_regionController')->middleware(['auth','nivel']);