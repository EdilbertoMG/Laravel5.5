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

Route::get('/usuarios',function(){
    return('Contacto Edilberto M. Gutiérrez');
});

Route::get('/usuarios/nuevo', function(){

    return("Crear nuevo usuario");
});

Route::get('/usuarios/{id}', function($id){

    return("El id del usuarios es: {$id}");
});

Route::get('/saludo/{name}/{nickname?}', function($name,$nickname = null){

    /**
     *metodo para poner la primera letra en mayuscula $name = ucfirst($name);
     */

    $name = ucfirst($name);
    if($nickname){
        return "Bienvenido: {$name}, tu apodo es: {$nickname}";
    }else{
            return "Bienvenido: {$name}, No tienes apodo";
    }

});