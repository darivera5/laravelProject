<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignacionMentoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignacion_mentores', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('activo');
            $table->foreignId('codigo_administrador')->references('codigo')->on('administradores');
            $table->foreignId('codigo_mentor')->references('codigo')->on('mentores');
            $table->foreignId('codigo_emprendedor')->references('codigo')->on('emprendedores');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asignacion_mentores');
    }
}
