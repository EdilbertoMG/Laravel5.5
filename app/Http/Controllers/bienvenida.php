<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bienvenida extends Controller
{
    public function index($name,$nickname = null){
        $name = ucfirst($name);
    if($nickname){
        return "Bienvenido: {$name}, tu apodo es: {$nickname}";
    }else{
            return "Bienvenido: {$name}, No tienes apodo";
    }
    }
}
