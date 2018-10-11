<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class pruebas extends TestCase
{
    /**
     * @test
     */
    function verificarUsuarios()
    {
        $this ->get('/usuarios')
              ->assertStatus(200)
              ->assertSee('Listado de Usuarios')
              ->assertSee('Edilberto')
              ->assertSee('Tatiana');

    }

    function verificarUsuariosVacios()
    {
        $this ->get('/usuarios?empty')
              ->assertStatus(200)
              ->assertSee('No hay usuarios registrados.');

    }

    function verificarUsuarioId(){
        $this ->get('/usuarios/5')
              ->assertStatus(200)
              ->assertSee('El id del usuarios es: 5');

    }
    
    function nuevoUsuario(){
        $this ->get('/usuarios/nuevo')
              ->assertStatus(200)
              ->assertSee('Crear nuevo usuario');

    }
}
