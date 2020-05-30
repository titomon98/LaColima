<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Localidades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localidad', function (Blueprint $table) { //tiendas
            $table->increments('id');
            $table->string('nombre', 50);
            $table->boolean('estado')->default(1);
            $table->timestamps();
        });

        DB::table('localidad')->insert(array('id'=>'1', 'nombre'=>'Central'));
        DB::table('localidad')->insert(array('id'=>'2', 'nombre'=>'Sucursal 1'));
        DB::table('localidad')->insert(array('id'=>'3', 'nombre'=>'Sucursal 2'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('localidad');
    }
}
