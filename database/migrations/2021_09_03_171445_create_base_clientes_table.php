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
            // $table->string('codigo');
            // $table->integer('fipais');
            // $table->integer('ficanal');
            // $table->integer('fisucursal');
            // $table->integer('fifolio');
            // $table->integer('periodo_atraso');
            // $table->integer('dia_atraso');
            // $table->double('requerido'); //este podria cambiase a string o double
            // $table->string('fcctenombre');
            // $table->integer('dni');
            // $table->string('fcctesexo');
            // $table->string('fec_nac');
            // $table->integer('edad');
            // $table->integer('telf_1');
            // $table->integer('telf_2');
            // $table->integer('telf_3');
            // $table->integer('telf_4');
            // $table->integer('telf_5');
            // $table->string('tipocliente');
            // $table->integer('dia_pago');
            // $table->string('riesgo');
            // $table->double('capital'); //double o interger o string para evitar problemas
            // $table->string('rangocapital');
            // $table->double('cap_vigrp');
            // $table->double('cap_exigp');
            // $table->double('capvdonexp');
            // $table->double('capvdoexip');
            // $table->double('interes');
            // $table->double('intdevnexp');
            // $table->double('int_vigp');
            // $table->double('int_transp');
            // $table->double('intvdoexrp');
            // $table->double('intdevdvdp');
            // $table->double('intmorap');
            // $table->double('saldototal');
            // $table->double('cuota');
            // $table->integer('escastigo');
            // $table->string('fcastigado'); //fecha
            // $table->double('provision_baz');
            // $table->integer('centrogestor');
            // $table->string('fecha_surt'); //fecha
            // $table->string('fultimopago'); //fecha
            // $table->string('fechaproxpago'); //fecha
            // $table->string('fcdircalle');
            // $table->string('fcdirnoext');
            // $table->string('fcdirnoint');
            // $table->string('fccolonia');
            // $table->string('poblacion');
            // $table->string('estado');
            // $table->integer('fideptoid');
            // $table->string('estado_gcc');
            // $table->string('situacionlaboral');
            // $table->string('gradoinstrucion');
            // $table->string('estatus_cliente');
            // $table->string('tipoproducto');
            // $table->string('rango_castigo');
            // $table->double('dcto_recovery');
            // $table->integer('monto_campana');


            $table->string('nombre');
            $table->string('apellido');
            $table->integer('numero');


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
