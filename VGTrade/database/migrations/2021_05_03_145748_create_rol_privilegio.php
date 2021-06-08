<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolPrivilegio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol_privilegio', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_rol')
                ->onDelete("cascade")
                ->onUpdate("cascade");
            $table->foreignId('id_privilegio')
                ->onDelete("cascade")
                ->onUpdate("cascade");

            $table->unique(['id_rol', 'id_privilegio']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rol_privilegio');
    }
}
