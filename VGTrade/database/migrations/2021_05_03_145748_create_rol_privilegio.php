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
            
            $table->foreignId("rol_id")
                ->contrained()
                ->onDelete("cascade")
                ->onUpdate("cascade");
            
                $table->foreignId("privilegio_id")
                ->contrained()
                ->onDelete("cascade")
                ->onUpdate("cascade");

            $table->unique(['rol_id', 'privilegio_id']);
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
