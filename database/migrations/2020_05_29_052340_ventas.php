<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ventas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) { //Hay que ver los metodos de pago
            $table->increments('id');
            $table->datetime('fecha_venta');
            $table->string('descripcion', 2000)->nullable();
            $table->string('numero_documento', 50);
            $table->string('nit', 50);
            $table->decimal('total', 10, 2);
            $table->decimal('credito', 10, 2)->nullable();
            $table->date('limite_credito')->nullable();
            $table->boolean('estado')->default(1);
            $table->boolean('estado_credito')->nullable();
            $table->integer('idcliente')->unsigned();
            $table->foreign('idcliente')->references('id')->on('clientes');
            $table->integer('idempleado')->unsigned();
            $table->foreign('idempleado')->references('id')->on('empleados');
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
        Schema::dropIfExists('ventas');
    }
}
