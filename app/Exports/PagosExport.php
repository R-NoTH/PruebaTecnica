<?php

namespace App\Exports;

use App\Models\Base_pago;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PagosExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Base_pago::all();
    }
    public function headings(): array
    {
        return [
            '#',
            'FECHA_EMISION_REPORTE',
            'CODIGO',
            'TIPO_IDENTIFICACION_CLIENTE',
            'NUMERO_IDENTIFICACION_CLIENTE',
            'Descripcion',
            'Pago',
            'Fecha Pago',
            'Producto',
            'created_at',
            'updated_at',
        ];
    }
}
