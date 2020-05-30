<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Personas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) { //Esto para no ingresar varias veces a las personas
            $table->increments('id');
            $table->string('nombre', 150); //nombre completo
            $table->string('direccion', 100)->nullable();
            $table->string('telefono', 50)->nullable();
            $table->string('email', 200)->nullable();
            $table->string('cui', 50)->nullable();
            $table->boolean('sexo')->nullable();
           
            $table->boolean('estado')->default(1);
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
        Schema::dropIfExists('personas');
    }
}
