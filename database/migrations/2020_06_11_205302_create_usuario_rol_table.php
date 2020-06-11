<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

class CreateUsuarioRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_rol', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('estado');
            $table->unsignedInteger('id_rol');
            $table->foreign('id_rol','fk_usuariorol_rol')->references('id')->on('rol')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('id_usuario');
            $table->foreign('id_usuario','fk_usuariorol_usuario')->references('id')->on('usuario')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_rol');
    }
}
