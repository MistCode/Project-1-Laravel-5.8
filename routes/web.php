<?php
/*
Route::get('/', function() {
    return view('welcome');
})->name('Home');
*/

Route::get('/', 'Control@index');

//Rutas de Grupo

Route::get('/grupos/create','PaginaController@create')->name('grupos.create');

Route::post('/grupos/create','PaginaController@store');

Route::get('/grupos/{$slug}', 'PaginaController@show')->name('grupos.show');

Route::resource('grupos','PaginaController');

//route Comunidad

Route::resource('comunidades', 'ComunidadController');

Route::get('/comunidades/create','ComunidadController@create')->name('comunidades.create');

Route::post('/comunidades/create','ComunidadController@store');

Route::get('/comunidades/{$slug}', 'ComunidadController@show')->name('comunidades.show');


//route Persona

Route::resource('personas','PersonaController');

Route::get('/grupos/{grupo}/personas','PersonaController@index');

Route::post('/grupos/{grupo}/personas','PersonaController@store');

//auth

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'UserController@profile')->name('user.profile');

Route::patch('/profile', 'UserController@update_profile')->name('user.profile.update');