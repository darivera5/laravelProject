<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosticosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosticos', function (Blueprint $table) {
            $table->id();
            $table->string('como_nos_conocio');
            $table->string('validaciones');
            $table->string('instrumentos_validacion');
            $table->string('metodologia');
            $table->string('recomendaciones');
            $table->timestamp('fecha_diagnostico');
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
        Schema::dropIfExists('diagnosticos');
    }
}
