<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Roles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 20);
            $table->boolean('estado')->default(1);
            $table->timestamps();
        });

        DB::table('roles')->insert(array('id'=>'1', 'nombre'=>'Administrador'));
        DB::table('roles')->insert(array('id'=>'2', 'nombre'=>'Bodeguero'));
        DB::table('roles')->insert(array('id'=>'3', 'nombre'=>'Vendedor'));
        DB::table('roles')->insert(array('id'=>'4', 'nombre'=>'Cobrador'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
