<?php

Route::get('/', 'TestController@welcome');

Auth::routes();

Route::get('/busquedas', 'SearchController@show'); //Buscar productos
Route::get('productos/json', 'SearchController@data'); //Buscar productos

Route::get('/contacto', 'ContactoController@index');
Route::post('/send', 'ContactoController@send');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/productos/{id}', 'ProductoController@show'); //mostrar productos
Route::get('/productos', 'ProductoController@index'); //mostrar productos al cliente

Route::get('/categorias/{categoria}', 'CategoryController@show'); //mostrar categorias
Route::get('/cuenta', 'CuentaController@index');

Route::post('/cart', 'CartDetailController@store'); //gestionar carrito de compras
Route::delete('/cart', 'CartDetailController@destroy'); //elim. produ. de carrito de compras

Route::post('/orden', 'CartController@email'); //gestionar email con la compras

Route::middleware(['auth', 'admin'])->prefix('admin')->namespace('Admin')->group(function () {

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

	Route::get('/categorias', 'CategoryController@index'); //listado de categorias
	Route::get('/categorias/create', 'CategoryController@create'); //furmulario de registro 
	Route::post('/categorias', 'CategoryController@store'); //registrar los datos de los categorias
	Route::get('/categorias/{categoria}/edit', 'CategoryController@edit'); //furmulario de edicion
	Route::post('/categorias/{categoria}/edit', 'CategoryController@update'); //registrar los datos editados
	Route::post('/categorias/{categoria}/delete', 'CategoryController@destroy'); //furmulario de eliminacion

});
