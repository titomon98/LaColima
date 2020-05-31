<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetalleCaja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_caja', function (Blueprint $table) { //Registro de quienes manejan el dinero, dependiendo de la localidad
            $table->increments('id');
            $table->string('descripcion', 190)->nullable();
            $table->string('numero_documento', 50);
            $table->decimal('cantidad', 10, 2);
            $table->boolean('estado')->default(1);
            $table->integer('idempleado')->unsigned();
            $table->foreign('idempleado')->references('id')->on('empleados');
            $table->integer('idcaja')->unsigned();
            $table->foreign('idcaja')->references('id')->on('caja');
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
        Schema::dropIfExists('detalle_caja');
    }
}
