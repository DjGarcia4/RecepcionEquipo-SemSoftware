<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function store(Request $request) {
        $mensajes = [
            'numero_serie.required' => 'El campo número de serie es obligatorio.',
            'numero_serie.unique' => 'Este número de serie ya está en uso.',
            'tipo_equipo.required' => 'El campo tipo de equipo es obligatorio.',
            'fecha_entrega.required' => 'El campo fecha de entrega es obligatorio.',
            'estado.required' => 'El campo estado es obligatorio.',
            'estado.in' => 'El valor del campo estado no es válido.',
        ];
        
        //validaciones
        $request->validate([    
            'numero_serie' => 'required|unique:equipos,numero_serie,NULL,id,tipo_equipo,' . $request->tipo_equipo,
            'tipo_equipo' => 'required|in:Computadora,Celular,Tablet',
            "fecha_entrega" => 'required|date',
            "estado" => 'required|in:Disponible,Prestado,Perdido'
        ], $mensajes);

        //Guardar Datos
        try{    
            $equipo = new Equipo();
            $equipo->numero_serie = $request->input("numero_serie");
            $equipo->tipo_equipo = $request->input("tipo_equipo");
            $equipo->fecha_entrega = $request->input("fecha_entrega");
            $equipo->estado = $request->input("estado");
            $equipo->save();
        }
        catch(\Illuminate\Database\QueryException $e){
            return redirect('/Equipo')->with("Fallo","Hubo un Error");
        }
        return redirect('/formularioequipo')->with("Exito","Los datos se han guardado correctamente"); 
    }
}
