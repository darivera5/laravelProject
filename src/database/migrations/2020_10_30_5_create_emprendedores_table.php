<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmprendedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprendedores', function (Blueprint $table) {
            $table->unsignedBigInteger('codigo')->primary();
            $table->string('vinculo_emprendedor');
            $table->string('direccion');
            $table->foreignId('id_usuario')->constrained('usuarios');
            $table->foreignId('id_programa')->constrained('programas');
            $table->foreignId('id_proyecto')->constrained('proyectos');
            $table->foreignId('id_ruta')->constrained('rutas');
            $table->foreignId('id_diagnostico')->constrained('diagnosticos');
            $table->foreignId('id_ciudad')->constrained('ciudades');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emprendedores');
    }
}
