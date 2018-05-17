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
            $table->string('sexe');
            $table->string('nom');
            $table->string('cognom');
            $table->integer('edat')->unsigned();
            $table->string('telefon');
            $table->string('correuelectronic');
            $table->string('pais');
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
        Schema::dropIfExists('cangurs');
    }
}