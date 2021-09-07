<?php

namespace App\Imports;

use App\Models\Base_pago;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class UpdatePagosImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $rows)
    {

        unset($rows[0]);
        foreach ($rows as $row) {
            Base_pago::updateOrCreate([
                'numero_identificacion_cliente' => $row[3],
            ], [
                'fecha_emision_reporte' => $row[0],
                'codigo' => $row[1],
                'tipo_identificacion_cliente' => $row[2],
                'numero_identificacion_cliente' => $row[3],
                'descripcion' => $row[4],
                'pago' => $row[5],
                'producto' => $row[6],
            ]);
        }
    }
}
