<?php

namespace App\Imports;

use App\Models\Base_pago;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class PagosImport implements
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
        return new Base_pago([

            'fecha_emision_reporte' => $row['fecha_emision_reporte'],
            'codigo' => $row['codigo'],
            'tipo_identificacion_cliente' => $row['tipo_identificacion_cliente'],
            'numero_identificacion_cliente' => $row['numero_identificacion_cliente'],
            'descripcion' => $row['descripcion'],
            'pago' => $row['pago'],
            'producto' => $row['producto'],

        ]);
    }
    public function rules(): array
    {
        return [
            'fecha_emision_reporte' => 'nullable',
            'codigo' => 'nullable',
            'tipo_identificacion_cliente' => 'nullable',
            'numero_identificacion_cliente' => 'nullable',
            'descripcion' => 'nullable',
            'pago' => 'nullable',
            'producto' => 'nullable',

        ];
    }
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
