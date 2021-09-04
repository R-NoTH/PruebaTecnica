<?php

namespace App\Imports;

use App\Models\base_cliente;
use App\Models\Cliente;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;



class ClientesImport implements ToModel, WithHeadingRow, WithValidation
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

        return new base_cliente([
            //
            // 'codigo' => $row['CODIGO'],
            // 'fipais' => $row['FIPAIS'],
            // 'ficanal' => $row['FICANAL'],
            // 'fisucursal' => $row['FISUCURSAL'],
            // 'fifolio' => $row['FIFOLIO'],
            // 'periodo_atraso' => $row['PERIODO_ATRASO'],
            // 'dia_atraso' => $row['DIA_ATRASO'],
            // 'requerido'  => $row['REQUERIDO'],
            // 'fcctenombre' => $row['fcCteNombre'],
            // 'dni' => $row['DNI'],
            // 'fcctesexo' => $row['fcCteSexo'],
            // 'fec_nac' => $row['FEC_NAC'],
            // 'edad' => $row['EDAD'],
            // 'telf_1' => $row['TELF_1'],
            // 'telf_2' => $row['TELF_2'],
            // 'telf_3' => $row['TELF_3'],
            // 'telf_4' => $row['TELF_4'],
            // 'telf_5' => $row['TELF_5'],
            // 'tipocliente' => $row['TIPOCLIENTE'],
            // 'dia_pago' => $row['DIA_PAGO'],
            // 'riesgo' => $row['RIESGO'],
            // 'capital' => $row['CAPITAL'],
            // 'rangocapital' => $row['RANGOCAPITAL'],
            // 'cap_vigrp' => $row['CAP_VIGRP'],
            // 'cap_exigp' => $row['CAP_EXIGP'],
            // 'capvdonexp' => $row['CAPVDONEXP'],
            // 'capvdoexip' => $row['CAPVDOEXIP'],
            // 'interes' => $row['INTERES'],
            // 'intdevnexp' => $row['INTDEVNEXP'],
            // 'int_vigp' => $row['INT_VIGP'],
            // 'int_transp' => $row['INT_TRANSP'],
            // 'intvdoexrp' => $row['INTVDOEXRP'],
            // 'intdevdvdp' => $row['INTDEVDVDP'],
            // 'intmorap' => $row['INTMORAP'],
            // 'saldototal' => $row['SALDOTOTAL'],
            // 'cuota' => $row['Cuota'],
            // 'escastigo' => $row['EsCastigo'],
            // 'fcastigado' => $row['FCASTIGADO'],
            // 'provision_baz' => $row['PROVISION_BAZ'],
            // 'centrogestor' => $row['CENTROGESTOR'],
            // 'fecha_surt' => $row['FECHA_SURT'],
            // 'fultimopago' => $row['FULTIMOPAGO'],
            // 'fechaproxpago' => $row['FECHAPROXPAGO'],
            // 'fcdircalle' => $row['fcDirCalle'],
            // 'fcdirnoext' => $row['fcDirNoExt'],
            // 'fcdirnoint' => $row['fcDirNoInt'],
            // 'fccolonia' => $row['fcColonia'],
            // 'poblacion' => $row['Poblacion'],
            // 'estado' => $row['Estado'],
            // 'fideptoid' => $row['FIDEPTOID'],
            // 'estado_gcc' => $row['ESTADO_GCC'],
            // 'situacionlaboral' => $row['SituacionLaboral'],
            // 'gradoinstrucion' => $row['GradoInstrucion'],
            // 'estatus_cliente' => $row['ESTATUS_CLIENTE'],
            // 'tipoproducto' => $row['TIPOPRODUCTO'],
            // 'rango_castigo' => $row['RANGO_CASTIGO'],
            // 'dcto_recovery' => $row['DCTO_RECOVERY'],
            // 'monto_campana' => $row['MONTO_CAMPAÑA'],

            'nombre' => $row['nombre'],
            'apellido' => $row['apellido'],
            'numero' => $row['numero'],


        ]);
    }
    public function rules(): array
    {
        return [
            // 'codigo' => 'nullable',
            // 'fipais' => 'nullable',
            // 'ficanal' => 'nullable',
            // 'fisucursal' => 'nullable',
            // 'fifolio' => 'nullable',
            // 'periodo_atraso' => 'nullable',
            // 'dia_atraso' => 'nullable',
            // 'requerido'  => 'nullable',
            // 'fcctenombre' => 'nullable',
            // 'dni' => 'nullable',
            // 'fcctesexo' => 'nullable',
            // 'fec_nac' => 'nullable',
            // 'edad' => 'nullable',
            // 'telf_1' => 'nullable',
            // 'telf_2' => 'nullable',
            // 'telf_3' => 'nullable',
            // 'telf_4' => 'nullable',
            // 'telf_5' => 'nullable',
            // 'tipocliente' => 'nullable',
            // 'dia_pago' => 'nullable',
            // 'riesgo' => 'nullable',
            // 'capital' => 'nullable',
            // 'rangocapital' => 'nullable',
            // 'cap_vigrp' => 'nullable',
            // 'cap_exigp' => 'nullable',
            // 'capvdonexp' => 'nullable',
            // 'capvdoexip' => 'nullable',
            // 'interes' => 'nullable',
            // 'intdevnexp' => 'nullable',
            // 'int_vigp' => 'nullable',
            // 'int_transp' => 'nullable',
            // 'intvdoexrp' => 'nullable',
            // 'intdevdvdp' => 'nullable',
            // 'intmorap' => 'nullable',
            // 'saldototal' => 'nullable',
            // 'cuota' => 'nullable',
            // 'escastigo' => 'nullable',
            // 'fcastigado' => 'nullable',
            // 'provision_baz' => 'nullable',
            // 'centrogestor' => 'nullable',
            // 'fecha_surt' => 'nullable',
            // 'fultimopago' => 'nullable',
            // 'fechaproxpago' => 'nullable',
            // 'fcdircalle' => 'nullable',
            // 'fcdirnoext' => 'nullable',
            // 'fcdirnoint' => 'nullable',
            // 'fccolonia' => 'nullable',
            // 'poblacion' => 'nullable',
            // 'estado' => 'nullable',
            // 'fideptoid' => 'nullable',
            // 'estado_gcc' => 'nullable',
            // 'situacionlaboral' => 'nullable',
            // 'gradoinstrucion' => 'nullable',
            // 'estatus_cliente' => 'nullable',
            // 'tipoproducto' => 'nullable',
            // 'rango_castigo' => 'nullable',
            // 'dcto_recovery' => 'nullable',
            // 'monto_campana' => 'nullable',



            'nombre' => 'required',
            'apellido' => 'nullable',
            'numero' => 'nullable',


        ];
    }
    public function getRowCount(): int
    {
        return $this->numRows;
    }
}
