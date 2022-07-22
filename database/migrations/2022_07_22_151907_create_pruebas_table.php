<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePruebasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_departamentos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('nombre');
            $table->boolval('activo');
            $table->foreignId('idUsuarioCreacion')->constrained();
        });

        Schema::create('tb_cargos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('nombre');
            $table->char('activo',1);
            $table->foreignId('idUsuarioCreacion')->constrained();
        });

        Schema::create('tb_usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('usuario');
            $table->string('primer_nombre');
            $table->string('segundo_nombre');
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
            $table->char('activo',1);
            $table->foreignId('id_departamento')->constrained();
            $table->foreignId('id_cargo')->constrained();
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pruebas');
    }
}
