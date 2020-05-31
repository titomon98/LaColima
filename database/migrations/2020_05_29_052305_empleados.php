<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Empleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cargo', 50)->nullable();
            $table->date('fecha_contratacion');
            $table->boolean('estado')->default(1);
            $table->foreign('id')->references('id')->on('personas')->onDelete('cascade');
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
        Schema::dropIfExists('empleados');
    }
}
