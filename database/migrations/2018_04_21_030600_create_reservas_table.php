<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function boot()
    {
    Schema::defaultStringLength(191);
    } 
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero',10)->unique()->nullable($value = true);
            $table->string('valorUnitario',10);
            $table->string('valorTotal',10);
            $table->integer('cantidad');
            $table->integer('funcion_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('funcion_id')->references('id')->on('funciones');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('reservas');
    }
}
