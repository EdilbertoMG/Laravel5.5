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

Route::get('/', function () {
    return ('Edilberto M. Gutiérrez');
});

Route::get('/usuarios','ControladorDeUsuarios@index');

Route::get('/usuarios/{id}','ControladorDeUsuarios@mostrar')
->where('id','[0-9+]');

Route::get('/usuarios/nuevo','ControladorDeUsuarios@crear');

Route::get('/saludo/{name}/{nickname?}','bienvenida@index');