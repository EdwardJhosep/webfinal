<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Combo extends Model
{
    protected $fillable = ['titulo', 'descripcion', 'precio', 'dias', 'incluye', 'imagen', 'admin_id'];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
