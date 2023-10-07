<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';

    protected $fillable = [
        'nombre',
        'contrasena',
        'combo_id', // Agrega la columna combo_id a los campos rellenables
    ];

    public function combo()
    {
        return $this->belongsTo(Combo::class);
    }
}
