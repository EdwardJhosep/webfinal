<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';

    protected $fillable = [
        'dni',
        'nombre',
        'telefono',
        'n_personas', // Nuevo campo
        'niños',      // Nuevo campo
        'incluye',    // Nuevo campo
        'fecha',
        'combo',
        'precio',
        'ticket',
        'imagen',
    ];
    
}
