<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('empleados')->onDelete('cascade');
            
            $table->integer('idrol')->unsigned();
            $table->foreign('idrol')->references('id')->on('roles')->onDelete('cascade');

            $table->string('usuario', 45)->unique();
            $table->string('password');
            $table->string('foto');
            $table->boolean('estado')->default(1);

            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
