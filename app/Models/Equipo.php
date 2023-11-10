<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $table = "equipos"; //especifica el nombre de la tabla

    // Definir las opciones permitidas para el campo 'estado'
    public static $estadosPermitidos = ['Prestado', 'Disponible', 'Perdido'];

    // Definir las opciones permitidas para el campo 'Tipo de Equipo'
    public static $equiposPermitidos = ['Computadora', 'Celular', 'Tablet'];

    protected $fillable = ['numero_serie', 'tipo_equipo', 'fecha_entrega', 'estado'];

    // Relación con Transacciones (uno a muchos)
    public function transacciones() {
        return $this->hasMany('App\Models\Transaccion');
    }
}

