<?php

namespace App\Http\Controllers;

use App\Models\Transaccion;
use Illuminate\Http\Request;

class TransaccionController extends Controller
{
    public function store(Request $request) {
        $mensajes = [
            'usuario_id.required' => 'El campo usuario es obligatorio.',
            'equipo_id.required' => 'El campo equipo es obligatorio.',
            'accion.required' => 'El campo acción es obligatorio.',
        ];

        $request->validate([
            "usuario_id" => 'required|exists:usuarios,id',
            "equipo_id" => 'required|exists:equipos,id',
            "accion" => 'required|string|in:Entrega,Recepcion',
        ], $mensajes);

    //Guardar datos
    try{    
        $transaccion = new Transaccion();
        $transaccion->usuario_id = $request->input("usuario_id");
        $transaccion->equipo_id = $request->input("equipo_id");
        $transaccion->accion = $request->input("accion");
        $transaccion->save();
    }
    catch(\Illuminate\Database\QueryException $e){
        return redirect('/Transaccion')->with("Fallo","Hubo un Error");
    }
    return redirect('/formulariotransaccion')->with("Exito","Los datos se han guardado correctamente"); }
}
