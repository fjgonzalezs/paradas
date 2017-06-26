<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ParadasMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paradas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->default('parada_nombre');
            $table->text('descripcion')->nullable();
            $table->double('latitud')->nullable();
            $table->double('longitud')->nullable();
            $table->integer('ruta_id')->unsigned();

            $table->foreign('ruta_id')->references('id')->on('rutas');


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
        Schema::dropIfExists('paradas');
    }
}
