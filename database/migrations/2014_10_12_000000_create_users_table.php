<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()//metodo para crear
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id'); //ENTERO AUTO INCREMENTADO
            $table->string('name');  // STRING
            $table->string('email')->unique(); // STRING UNICO
            $table->string('password'); // STRING DE NOMBRE PASS
            $table->rememberToken(); // TOKEN QUE RECUERDA VISITAS SUB SIGUIENTES
            $table->timestamps(); // MARCAS DE TIEMPO, CREADO EL, ACTUALIZADO EL.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()//metodo para eliminar
    {
        Schema::dropIfExists('users'); //ELIMINA SI EXISTE LA TABLA USERS
    }
}
