<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class bienvenida extends TestCase
{
    /**
     * @test
     */
    function bienvenidaAusuariosConNickname()
    {
        $this ->get('/saludo/edilberto/skrow')
              ->assertStatus(200)
              ->assertSee('Bienvenido: Edilberto, tu apodo es: skrow');

    }

    /**
     * @test
     */
    function bienvenidaAusuariosSinNickname()
    {
        $this ->get('/saludo/edilberto')
              ->assertStatus(200)
              ->assertSee('Bienvenido: Edilberto, No tienes apodo');

    }
}
