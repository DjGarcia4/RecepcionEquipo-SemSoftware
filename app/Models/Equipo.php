<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    // Definir las opciones permitidas para el campo 'estado'
    public static $estadosPermitidos = ['Prestado', 'Disponible', 'Perdido'];

    protected $fillable = ['numero_serie', 'tipo_equipo', 'fecha_entrega', 'estado'];

    // Relación con Transacciones (uno a muchos)
    public function transacciones() {
        return $this->hasMany('App\Models\Transaccion');
    }
}

