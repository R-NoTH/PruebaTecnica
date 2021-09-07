<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Base_cliente extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function basePagos()
    {
        return $this->belongsTo(Base_pago::class);
    }
}
