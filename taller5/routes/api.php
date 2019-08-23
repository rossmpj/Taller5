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

Route::resource('calificaciones','CalificacionController');
Route::resource('autores','AutorController');
Route::resource('libroautores','LibroAutorController');
Route::resource('libros','LibroController');
Route::resource('usuarios','UsuarioController');
Route::get('historico/{autor}','HistoricoController@show');

