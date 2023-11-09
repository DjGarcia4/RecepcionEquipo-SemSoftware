<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function store(Request $request) {
        $request->validate([    
            "numero_serie" => 'required|string',
            "tipo_equipo" => 'required|string',
            "fecha_entrega" => 'required|date',
            "estado" => 'required|string'
        ]);
    }
}
