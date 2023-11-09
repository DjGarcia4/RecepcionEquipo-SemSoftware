<?php

namespace App\Http\Controllers;

use App\Models\Transaccion;
use Illuminate\Http\Request;

class TransaccionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            "usuario_id" => 'required|exists:usuarios,id',
            "equipo_id" => 'required|exists:equipos,id',
            "accion" => 'required|string|in:entrega,recepcion',
        ]);
    }
}
