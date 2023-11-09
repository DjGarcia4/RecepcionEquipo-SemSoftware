<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'rol'];

    // Relación con Transacciones (uno a muchos)
    public function transacciones()
    {
        return $this->hasMany('App\Models\Transaccion');
    }
}
