<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            "nombre" => 'required|string',
            "rol" => 'required|string',
        ]);
    }
}
