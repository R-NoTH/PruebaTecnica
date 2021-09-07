<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Base_pago extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function baseClientes()
    {
        return $this->hasMany(Base_cliente::class);
    }
}
