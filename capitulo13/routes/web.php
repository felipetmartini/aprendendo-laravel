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
    return view('welcome');
});

Route::match(['GET', 'POST'], '/email/simples', 'EmailSimplesController@email');

Route::match(['GET', 'POST'], '/email/anexo', 'EmailAnexoController@email');

Route::get('/email/layout', function() {
    return view('email_layout');
});