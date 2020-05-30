<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion', 100)->nullable();
            $table->string('codigo', 50); //codigo de barras en el frontend
            $table->string('nombre', 50);
            $table->integer('existencia')->nullable(); //hace referencia a la existencia total del producto
            $table->decimal('precio_compra', 10, 2)->nullable();
            $table->decimal('precio_publico', 10, 2)->nullable();
            $table->boolean('estado')->default(1);
            $table->integer('idcategoria')->unsigned();
            $table->foreign('idcategoria')->references('id')->on('categorias');
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
        Schema::dropIfExists('productos');
    }
}
