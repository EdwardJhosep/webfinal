<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = ['nombre', 'email', 'password'];

    public function combos()
    {
        return $this->hasMany(Combo::class);
    }
}
