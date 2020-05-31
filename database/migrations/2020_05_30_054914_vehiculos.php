<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vehiculos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) { //Registro de quienes manejan el dinero, dependiendo de la localidad
            $table->increments('id');
            $table->string('placa', 25);
            $table->string('descripcion', 190)->nullable();
            $table->boolean('estado')->default(1);
            $table->integer('idlocalidad')->unsigned();
            $table->foreign('idlocalidad')->references('id')->on('localidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
}
