<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';

    protected $fillable = [
        'nombre',
        'telefono',
        'año',
        'mes',
        'combo',
        'precio',
    ];
}
