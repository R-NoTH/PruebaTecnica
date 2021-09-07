<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('base_pagos', function (Blueprint $table) {
            $table->id();
            $table->string('fecha_emision_reporte')->nullable();
            $table->string('codigo')->nullable();
            $table->integer('tipo_identificacion_cliente')->nullable();
            $table->integer('numero_identificacion_cliente')->nullable();
            $table->string('descripcion')->nullable();
            $table->double('pago')->nullable();
            $table->string('fecha_pago')->nullable();
            $table->string('producto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('base_pagos');
    }
}
