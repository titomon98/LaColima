<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Compras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) { //Hay que ver los metodos de pago
            $table->increments('id');
            $table->datetime('fecha_compra');
            $table->string('descripcion', 100);
            $table->string('numero_documento', 50);
            $table->decimal('total', 10, 2);
            $table->decimal('credito', 10, 2)->nullable();
            $table->date('limite_credito')->nullable();
            $table->boolean('estado')->default(1);
            $table->integer('idproveedor')->unsigned();
            $table->foreign('idproveedor')->references('id')->on('proveedores');
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
        Schema::dropIfExists('compras');
    }
}
