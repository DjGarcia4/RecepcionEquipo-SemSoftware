<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
    use HasFactory;

    //Funcion para definir las relaciones con los otros modelos
    public function usuario() {

    return $this->belongsTo(Usuario::class);

    }

    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }
}
