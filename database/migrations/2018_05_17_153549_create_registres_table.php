<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registres', function (Blueprint $table) {
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
            $table->string('email');
            $table->Integer('contrasenya');
            
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
        Schema::dropIfExists('registres');
    }
}
