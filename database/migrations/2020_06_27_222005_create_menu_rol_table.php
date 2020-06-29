<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_rol', function (Blueprint $table) {
            $table->unsignedInteger('id_rol');
            $table->foreign('id_rol','fk_menu_rol_rol')->references('id')->on('rol')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('id_menu');
            $table->foreign('id_menu','fk_menu_rol_menu')->references('id')->on('menu')->onDelete('cascade')->onUpdate('cascade');
            $table->charset='utf8mb4';
            $table->collation='utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_rol');
    }
}
