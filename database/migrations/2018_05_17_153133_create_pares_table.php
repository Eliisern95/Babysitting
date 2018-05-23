<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pares', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sexe');
            $table->string('nom');
            $table->string('cognom');
            $table->string('direcció');
            $table->integer('codiPostal')->unsigned();
            $table->integer('edat')->unsigned();
            $table->string('telefon');
            $table->string('correuelectronic');
            $table->string('provincia');
            $table->string('poblacio');
            







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
        Schema::dropIfExists('pares');
    }
}
