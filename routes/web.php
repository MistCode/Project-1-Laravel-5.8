<?php
/*
Route::get('/', function() {
    return view('welcome');
})->name('Home');
*/

Route::get('/', 'Control@index');

//Rutas de Create, Index, Show

Route::get('/grupos/create','PaginaController@create')->name('Añadir');

Route::post('/grupos/create','PaginaController@store');

Route::get('/grupos/{$slug}', 'PaginaController@show')->name('grupos.show');

Route::resource('grupos','PaginaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'UserController@profile')->name('user.profile');

Route::patch('/profile', 'UserController@update_profile')->name('user.profile.update');