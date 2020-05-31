<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetalleTraslado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_traslado', function (Blueprint $table) { //Registro de quienes manejan el dinero, dependiendo de la localidad
            $table->increments('id');
            $table->string('descripcion', 190)->nullable();
            $table->integer('cantidad');
            $table->boolean('estado')->default(1);

            $table->integer('idempleado')->unsigned();
            $table->foreign('idempleado')->references('id')->on('empleados');
            
            $table->integer('idenvia')->unsigned();
            $table->foreign('idenvia')->references('id')->on('existencias');

            $table->integer('idrecibe')->unsigned();
            $table->foreign('idrecibe')->references('id')->on('existencias');

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
        Schema::dropIfExists('detalle_traslado');
    }
}
