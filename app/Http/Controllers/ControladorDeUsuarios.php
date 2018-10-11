<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorDeUsuarios extends Controller
{
    public function index(){

        /* si el arreglo esta vacio */
        if (request()->has('empty')) {

            $usuarios = [];

        } else {

            $usuarios = ['Edilberto','Tatiana','Juan','Elkin','Luis',];

        }

        return view('usuarios',['usuarios' => $usuarios,
                                 'titulo' => 'Listado de Usuarios'
                                 ]);
    }

    public function mostrar($id){
        return("El id del usuarios es: {$id}");
    }

    public function crear(){
        return("Crear nuevo usuario");
    }
}
