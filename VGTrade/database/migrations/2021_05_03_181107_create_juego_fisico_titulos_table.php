<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuegoFisicoTitulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juego_fisico_titulos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_juego_fisico');
            $table->foreignId('id_titulo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('juego_fisico_titulos');
    }
}
