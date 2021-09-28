<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('no'); //INTEGER UNSIGNED INCREMENT
            $table->integer('id');
            $table->string('name'); //varchar ('name',100) almacenar menos , text('name') almacenar mas de 255 caracteres
            $table->string('email')->unique(); //protege el campo y recibe unicos registros
            $table->timestamp('email_verified_at')->nullable();// almacena verificacion de correo, permite quedar vacío
            $table->string('password');
            $table->rememberToken(); // espacio para mantener la secion inicada
            $table->timestamps(); //create up , update at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
