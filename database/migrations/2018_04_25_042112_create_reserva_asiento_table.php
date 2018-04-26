<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservaAsientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva_asiento', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reserva_id')->unsigned();
            $table->integer('asiento_id')->unsigned();
            $table->integer('funcion_id')->unsigned();
            $table->foreign('funcion_id')->references('id')->on('funciones');
            $table->foreign('reserva_id')->references('id')->on('reservas');
            $table->foreign('asiento_id')->references('id')->on('asientos');
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
        Schema::dropIfExists('reserva_asiento');
    }
}
