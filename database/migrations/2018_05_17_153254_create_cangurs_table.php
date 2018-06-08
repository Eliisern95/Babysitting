<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCangursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cangurs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuari')->unsigned()->nullable();
            $table->string('sex');
            $table->string('name');
            $table->string('surname');
            $table->string('direction');
            $table->integer('postalcode')->unsigned();
            $table->string('phone');
            $table->string('email');
            $table->string('poblacio');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
           /* $table->foreign('id_usuari')
                   ->references('id')
                   ->on('users')
                   ->onDelete('cascade'); */
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cangurs');
    }
}
