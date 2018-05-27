<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AnuncisCangurs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
     /*La taula usuaris fem que sigui únic a on fa referencia a un nom de cangurs, si el
    cangur es dóna de baixa s'esborra tot l'historial d'aquest cangur*/
    {
    Schema::create('anuncis_cangurs', function (Blueprint $table) {
         $table->increments('id');
         $table->integer('usuaris')->unsigned();
         $table->foreign('usuaris')->references('id')->on('cangurs')->onDelete('cascade');
         $table->string('titol');
         $table->string('descripcio');
         $table->integer('preu')->unsigned();
         $table->rememberToken();
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
        //
    }
}
