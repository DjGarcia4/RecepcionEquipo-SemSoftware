<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    //Funcion para definir las relaciones con los otros modelos
    public function transacciones() {

    return $this->hasMany(Transaccion::class);

    }
}

