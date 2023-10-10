<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Combo extends Model
{
    use HasFactory;
    protected $table = 'combo';

    protected $fillable = [
        'titulo',
        'descripcion',
        'precio',
        'dias',
        'incluye',
        'imagen',
    ];
}
