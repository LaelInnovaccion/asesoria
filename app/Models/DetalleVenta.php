<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetalleVenta extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'venta_id',
        'producto_id',
    ];
}
