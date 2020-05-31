<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Caja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caja', function (Blueprint $table) { //Registro de quienes manejan el dinero, dependiendo de la localidad
            $table->increments('id');
            $table->string('descripcion', 190)->nullable();
            $table->decimal('cantidad', 10, 2);
            $table->boolean('estado')->default(1);
            $table->integer('idlocalidad')->unsigned();
            $table->foreign('idlocalidad')->references('id')->on('localidad');
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
        Schema::dropIfExists('caja');
    }
}
