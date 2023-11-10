<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
    use HasFactory;

    protected $table = "transaccions"; //especifica el nombre de la tabla

    public static $accionesPermitidos = ['Prestado', 'Disponible', 'Perdido'];

    protected $fillable = ['usuario_id', 'equipo_id', 'accion'];

    // Relación con Equipos (muchos a uno)
    public function equipo()
    {
        return $this->belongsTo('App\Models\Equipo');
    }

    // Relación con Usuarios (muchos a uno)
    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuario');
    }
}
