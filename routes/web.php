<?php

Route::get('/', 'TestController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/productos/{id}', 'ProductoController@show'); //mostrar productos

Route::middleware(['auth','admin'])->prefix('admin')->namespace('Admin')->group(function() {

	Route::get('/productos', 'ProductoController@index'); //listado de productos
	Route::get('/productos/create', 'ProductoController@create'); //furmulario de registro 
	Route::post('/productos', 'ProductoController@store'); //registrar los datos de los productos
	Route::get('/productos/{id}/edit', 'ProductoController@edit'); //furmulario de edicion
	Route::post('/productos/{id}/edit', 'ProductoController@update'); //registrar los datos editados
	Route::post('/productos/{id}/delete', 'ProductoController@destroy'); //furmulario de eliminacion
	Route::get('/productos/{id}/imagenes', 'ImagenController@index'); //furmulario de imagenes
	Route::post('/productos/{id}/imagenes', 'ImagenController@store'); //registrar imagenes 
	Route::delete('/productos/{id}/imagenes', 'ImagenController@destroy'); //eliminar imagenes
	Route::get('/productos/{id}/imagenes/select/{imagen}', 'ImagenController@select'); //Imagen destacada
});