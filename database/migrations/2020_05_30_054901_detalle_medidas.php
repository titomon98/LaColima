<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetalleMedidas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_medidas', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('equivalente', 10, 2); //Detalle de las medidas
            $table->boolean('estado')->default(1);
            $table->integer('idmedida')->unsigned();
            $table->foreign('idmedida')->references('id')->on('medidas');
            $table->integer('idproducto')->unsigned();
            $table->foreign('idproducto')->references('id')->on('productos');
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
        Schema::dropIfExists('detalle_medidas');
    }
}
