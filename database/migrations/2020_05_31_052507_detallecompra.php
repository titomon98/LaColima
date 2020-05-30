<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Detallecompra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_compra', function (Blueprint $table) {
            $table->increments('id');

            $table->decimal('precio_compra', 10,2);
            $table->integer('cantidad');
            $table->decimal('subtotal', 10, 2);
            $table->boolean('estado')->default(1);

            $table->integer('idcompra')->unsigned();
            $table->foreign('idcompra')->references('id')->on('compras');

            $table->integer('idmedida')->unsigned();
            $table->foreign('idmedida')->references('id')->on('medidas');

            $table->integer('idexistencia')->unsigned();
            $table->foreign('idexistencia')->references('id')->on('existencias');
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
        Schema::dropIfExists('detalle_compra');
    }
}
