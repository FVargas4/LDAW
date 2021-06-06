<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuegoFisicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juego_fisicos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign("user_id")->references('id')->on('users')->onDelete('set null');

            $table->unsignedBigInteger('titulo_id')->nullable();
            $table->foreign("titulo_id")->references('id')->on('titulos')->onDelete('set null');

            // $table->string('titulo');
            $table->string('condicion1');
            $table->string('consola1');
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
        Schema::dropIfExists('juego_fisicos');
    }
}
