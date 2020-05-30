<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Detalleventa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_venta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad');
            $table->decimal('precio', 10, 2);
            $table->decimal('descuento', 11, 2);
            $table->boolean('estado')->default(1);

            $table->integer('idventa')->unsigned();
            $table->foreign('idventa')->references('id')->on('ventas');

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
        Schema::dropIfExists('detalle_venta');
    }
}
