<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioshasRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarioshas_roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('idUsuario');
            $table->string('idRol');
            $table->string('nombreUsuario');
            $table->string('password');
            $table->string('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarioshas_roles');
    }
}
