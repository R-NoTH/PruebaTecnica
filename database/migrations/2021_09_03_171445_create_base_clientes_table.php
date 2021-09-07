<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaseClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('base_clientes', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->nullable();
            $table->integer('fipais')->nullable();
            $table->integer('ficanal')->nullable();
            $table->integer('fisucursal')->nullable();
            $table->integer('fifolio')->nullable();
            $table->integer('periodo_atraso')->nullable();
            $table->integer('dia_atraso')->nullable();
            $table->double('requerido')->nullable(); //este podria cambiase a string o double
            $table->string('fcctenombre')->nullable();
            $table->integer('dni')->nullable();
            $table->string('fcctesexo')->nullable();
            $table->string('fec_nac')->nullable();
            $table->integer('edad')->nullable();
            $table->integer('telf_1')->nullable();
            $table->integer('telf_2')->nullable();
            $table->integer('telf_3')->nullable();
            $table->integer('telf_4')->nullable();
            $table->integer('telf_5')->nullable();
            $table->string('tipocliente')->nullable();
            $table->integer('dia_pago')->nullable();
            $table->string('riesgo')->nullable();
            $table->double('capital')->nullable(); //double o interger o string para evitar problemas
            $table->string('rangocapital')->nullable();
            $table->double('cap_vigrp')->nullable();
            $table->double('cap_exigp')->nullable();
            $table->double('capvdonexp')->nullable();
            $table->double('capvdoexip')->nullable();
            $table->double('interes')->nullable();
            $table->double('intdevnexp')->nullable();
            $table->double('int_vigp')->nullable();
            $table->double('int_transp')->nullable();
            $table->double('intvdoexrp')->nullable();
            $table->double('intdevdvdp')->nullable();
            $table->double('intmorap')->nullable();
            $table->double('saldototal')->nullable();
            $table->double('cuota')->nullable();
            $table->integer('escastigo')->nullable();
            $table->string('fcastigado')->nullable(); //fecha
            $table->double('provision_baz')->nullable();
            $table->integer('centrogestor')->nullable();
            $table->string('fecha_surt')->nullable(); //fecha
            $table->string('fultimopago')->nullable(); //fecha
            $table->string('fechaproxpago')->nullable(); //fecha
            $table->string('fcdircalle')->nullable();
            $table->string('fcdirnoext')->nullable();
            $table->string('fcdirnoint')->nullable();
            $table->string('fccolonia')->nullable();
            $table->string('poblacion')->nullable();
            $table->string('estado')->nullable();
            $table->integer('fideptoid')->nullable();
            $table->string('estado_gcc')->nullable();
            $table->string('situacionlaboral')->nullable();
            $table->string('gradoinstrucion')->nullable();
            $table->string('estatus_cliente')->nullable();
            $table->string('tipoproducto')->nullable();
            $table->string('rango_castigo')->nullable();
            $table->double('dcto_recovery')->nullable();
            $table->integer('monto_campana')->nullable();

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
        Schema::dropIfExists('base_clientes');
    }
}
