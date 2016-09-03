<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('galeria.template');
});



Route::get( 'login', 'Auth\LoginController@get_login' );


Route::group(['prefix' => 'admin'],function(){

Route::resource('usuario','UsuarioController');
});