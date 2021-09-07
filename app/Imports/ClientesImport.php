<?php

namespace App\Imports;

use App\Models\Base_cliente;
use App\Models\Cliente;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;



class ClientesImport implements
    ToModel,
    WithHeadingRow,
    WithValidation,
    WithBatchInserts,
    WithChunkReading
{
    private $numRows = 0;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {

        ++$this->numRows;
        // dd($row);

        return new Base_cliente([

            //
            'codigo' => $row['codigo'],
            'fipais' => $row['fipais'],
            'ficanal' => $row['ficanal'],
            'fisucursal' => $row['fisucursal'],
            'fifolio' => $row['fifolio'],
            'periodo_atraso' => $row['periodo_atraso'],
            'dia_atraso' => $row['dia_atraso'],
            'requerido'  => $row['requerido'],
            'fcctenombre' => $row['fcctenombre'],
            'dni' => $row['dni'],
            'fcctesexo' => $row['fcctesexo'],
            'fec_nac' => $row['fec_nac'],
            'edad' => $row['edad'],
            'telf_1' => $row['telf_1'],
            'telf_2' => $row['telf_2'],
            'telf_3' => $row['telf_3'],
            'telf_4' => $row['telf_4'],
            'telf_5' => $row['telf_5'],
            'tipocliente' => $row['tipocliente'],
            'dia_pago' => $row['dia_pago'],
            'riesgo' => $row['riesgo'],
            'capital' => $row['capital'],
            'rangocapital' => $row['rangocapital'],
            'cap_vigrp' => $row['cap_vigrp'],
            'cap_exigp' => $row['cap_exigp'],
            'capvdonexp' => $row['capvdonexp'],
            'capvdoexip' => $row['capvdoexip'],
            'interes' => $row['interes'],
            'intdevnexp' => $row['intdevnexp'],
            'int_vigp' => $row['int_vigp'],
            'int_transp' => $row['int_transp'],
            'intvdoexrp' => $row['intvdoexrp'],
            'intdevdvdp' => $row['intdevdvdp'],
            'intmorap' => $row['intmorap'],
            'saldototal' => $row['saldototal'],
            'cuota' => $row['cuota'],
            'escastigo' => $row['escastigo'],
            'fcastigado' => $row['fcastigado'],
            'provision_baz' => $row['provision_baz'],
            'centrogestor' => $row['centrogestor'],
            'fecha_surt' => $row['fecha_surt'],
            'fultimopago' => $row['fultimopago'],
            'fechaproxpago' => $row['fechaproxpago'],
            'fcdircalle' => $row['fcdircalle'],
            'fcdirnoext' => $row['fcdirnoext'],
            'fcdirnoint' => $row['fcdirnoint'],
            'fccolonia' => $row['fccolonia'],
            'poblacion' => $row['poblacion'],
            'estado' => $row['estado'],
            'fideptoid' => $row['fideptoid'],
            'estado_gcc' => $row['estado_gcc'],
            'situacionlaboral' => $row['situacionlaboral'],
            'gradoinstrucion' => $row['gradoinstrucion'],
            'estatus_cliente' => $row['estatus_cliente'],
            'tipoproducto' => $row['tipoproducto'],
            'rango_castigo' => $row['rango_castigo'],
            'dcto_recovery' => $row['dcto_recovery'],
            'monto_campana' => $row['monto_campana'],

            // 'nombre' => $row['nombre'],
            // 'apellido' => $row['apellido'],
            // 'numero' => $row['numero'],


        ]);
    }
    public function rules(): array
    {
        return [
            'codigo' => 'nullable',
            'fipais' => 'nullable',
            'ficanal' => 'nullable',
            'fisucursal' => 'nullable',
            'fifolio' => 'nullable',
            'periodo_atraso' => 'nullable',
            'dia_atraso' => 'nullable',
            'requerido'  => 'nullable',
            'fcctenombre' => 'nullable',
            'dni' => 'nullable',
            'fcctesexo' => 'nullable',
            'fec_nac' => 'nullable',
            'edad' => 'nullable',
            'telf_1' => 'nullable',
            'telf_2' => 'nullable',
            'telf_3' => 'nullable',
            'telf_4' => 'nullable',
            'telf_5' => 'nullable',
            'tipocliente' => 'nullable',
            'dia_pago' => 'nullable',
            'riesgo' => 'nullable',
            'capital' => 'nullable',
            'rangocapital' => 'nullable',
            'cap_vigrp' => 'nullable',
            'cap_exigp' => 'nullable',
            'capvdonexp' => 'nullable',
            'capvdoexip' => 'nullable',
            'interes' => 'nullable',
            'intdevnexp' => 'nullable',
            'int_vigp' => 'nullable',
            'int_transp' => 'nullable',
            'intvdoexrp' => 'nullable',
            'intdevdvdp' => 'nullable',
            'intmorap' => 'nullable',
            'saldototal' => 'nullable',
            'cuota' => 'nullable',
            'escastigo' => 'nullable',
            'fcastigado' => 'nullable',
            'provision_baz' => 'nullable',
            'centrogestor' => 'nullable',
            'fecha_surt' => 'nullable',
            'fultimopago' => 'nullable',
            'fechaproxpago' => 'nullable',
            'fcdircalle' => 'nullable',
            'fcdirnoext' => 'nullable',
            'fcdirnoint' => 'nullable',
            'fccolonia' => 'nullable',
            'poblacion' => 'nullable',
            'estado' => 'nullable',
            'fideptoid' => 'nullable',
            'estado_gcc' => 'nullable',
            'situacionlaboral' => 'nullable',
            'gradoinstrucion' => 'nullable',
            'estatus_cliente' => 'nullable',
            'tipoproducto' => 'nullable',
            'rango_castigo' => 'nullable',
            'dcto_recovery' => 'nullable',
            'monto_campana' => 'nullable',



            // 'nombre' => 'required',
            // 'apellido' => 'nullable',
            // 'numero' => 'nullable',


        ];
    }
    /*
    -Importar un archivo grande a modelos Eloquent puede
    convertirse rápidamente en un cuello de botella ya que
    cada fila da como resultado una consulta de inserción.

    Con la WithBatchInserts preocupación, puede limitar la
    cantidad de consultas realizadas especificando un tamaño de lote.
    Este tamaño de lote determinará cuántos modelos se insertarán en
    la base de datos al mismo tiempo. Esto reducirá drásticamente la
    duración de la importación.
    */
    public function batchSize(): int
    {
        return 10;
    }
    public function chunkSize(): int
    {
        return 500;
    }
    public function getRowCount(): int
    {
        return $this->numRows;
    }
}
