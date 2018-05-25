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
