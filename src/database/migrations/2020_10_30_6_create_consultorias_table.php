<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultorias', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->unsignedSmallInteger('realizada')->nullable();
            $table->time('tiempo_atencion')->nullable();
            $table->string('observaciones')->nullable();
            $table->foreignId('codigo_emprendedor')->references('codigo')->on('emprendedores');
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
        Schema::dropIfExists('consultorias');
    }
}
