<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentores', function (Blueprint $table) {
            $table->unsignedBigInteger('codigo')->primary();
            $table->string('horario');
            $table->foreignId('id_usuario')->constrained('usuarios');
            $table->foreignId('id_cargo')->constrained('cargos');
            $table->foreignId('id_especialidad')->constrained('especialidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mentores');
    }
}
