<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Base_cliente extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function consultaIdRepetidos()
    {
        $sql = 'SELECT dni,COUNT(*) FROM `base_clientes` GROUP BY dni HAVING COUNT(*) > 1';
        $consulta = DB::select($sql);
        return $consulta;
    }
}
