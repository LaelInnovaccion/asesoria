<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Venta extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'fecha',
        'cliente_id',
    ];

    protected $dates = ['fecha'];

    // public function cliente()
    // {
    //     return $this->hasOne(Cliente::class, 'id', 'cliente_id');
    // }
}
