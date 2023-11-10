<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = "usuarios"; //especifica el nombre de la tabla

    public static $rolesPermitidos = ['Administrador', 'Coordinador', 'Estudiante'];

    protected $fillable = ['nombre', 'numero_id', 'correo', 'contraseña', 'rol'];

    // Relación con Transacciones (uno a muchos)
    public function transacciones()
    {
        return $this->hasMany('App\Models\Transaccion');
    }
}
