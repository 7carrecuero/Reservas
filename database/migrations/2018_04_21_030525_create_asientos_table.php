<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsientosTable extends Migration
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
        Schema::create('asientos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fila',2);
            $table->string('columna',2);
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
        Schema::dropIfExists('asientos');
    }
}
