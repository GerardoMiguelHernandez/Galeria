<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddImagenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagen', function (Blueprint $table) {
            $table->increments('id');
            $table->binary('imagen');
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_evento')->unsigned();

            $table->foreign('id_usuario')->references('id')->on('usuario')->onDelete('cascade');
            $table->foreign('id_evento')->references('id')->on('evento')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagen');
    }
}
