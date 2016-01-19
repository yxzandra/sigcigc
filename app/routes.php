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


Route::get('/cpanel','HomeController@showLogin');

Route::get('/','HomeController@showBackend');

Route::get('/vacaciones','HomeController@showVacaciones');


/* RUTA PARA LAS TABLAS*/

Route::get('/usuarios', 'HomeController@showUsuarios');


/*RUTA PARA LOS USUARIOS*/

Route::post('login','UsuariosController@login');

Route::get('logout','UsuariosController@logout');

Route::get('backend/users_action', 'UsuariosController@users_action');

Route::post('backend/nuevo_usuario','UsuariosController@create_action');

Route::post('backend/editar_usuario','UsuariosController@edit_action');

Route::post('backend/eliminar_usuario','UsuariosController@delete_action');



