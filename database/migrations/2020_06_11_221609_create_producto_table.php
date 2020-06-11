<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',100);
            $table->text('descripcion')->nullable();
            $table->decimal('precio_compra',8,2);
            $table->decimal('precio_venta',8,2)->nullable();
            $table->unsignedInteger('stock');
            $table->text('observacion')->nullable();
            $table->unsignedInteger('id_usuario');
            $table->foreign('id_usuario','fk_producto_usuario')->references('id')->on('usuario')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('id_categoria');
            $table->foreign('id_categoria','fk_producto_categoria')->references('id')->on('categoria')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('producto');
    }
}
