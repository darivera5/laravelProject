<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroMentoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_mentores', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha_registro');
            $table->foreignId('codigo_administrador')->references('codigo')->on('administradores');
            $table->foreignId('codigo_mentor')->references('codigo')->on('mentores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_mentors');
    }
}
