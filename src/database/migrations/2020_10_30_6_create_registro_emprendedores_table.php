<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroEmprendedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_emprendedores', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha_registro');
            $table->foreignId('codigo_administrador')->references('codigo')->on('administradores');
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
        Schema::dropIfExists('registro_emprendedores');
    }
}
