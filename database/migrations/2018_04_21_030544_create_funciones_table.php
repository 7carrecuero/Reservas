<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionesTable extends Migration
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
        Schema::create('funciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50);
            $table->string('resumen',100);
            $table->string('descripcion',255);
            $table->string('precio',9);
            $table->string('foto');
            $table->string('extens');
            $table->date('fecha');
            $table->integer('user_id')->unsigned();
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
        Schema::dropIfExists('funciones');
    }
}
