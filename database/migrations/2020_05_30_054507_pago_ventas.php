<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PagoVentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('cantidad', 10, 2); //cantidad del tipo de pago
            $table->boolean('estado')->default(1);
            $table->integer('idtipopago')->unsigned();
            $table->foreign('idtipopago')->references('id')->on('tipos_pago');
            $table->integer('idventa')->unsigned();
            $table->foreign('idventa')->references('id')->on('ventas');
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
        Schema::dropIfExists('pago_ventas');
    }
}
