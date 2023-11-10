<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function store(Request $request) {

        $mensajes = [
            'nombre.required' => 'El campo nombre es obligatorio.',
            'numero_id.unique' => 'Este número de identidad ya está en uso.',
            'correo.required' => 'El campo email es obligatorio.',
            'correo.email' => 'Por favor, introduce una dirección de correo electrónico válida.',
            'correo.unique' => 'La dirección de correo electrónico ya está en uso.',
            'correo.max' => 'La direccion de correo electronico no puede superar 255 caracteres',
            'contraseña.required' => 'El campo contraseña es obligatorio.',
            'contraseña.min' => 'La contraseña debe tener al menos :min caracteres.',
            'rol.required' => 'El campo rol es obligatorio.',
            'numero_id.required' => 'El campo número de identidad es obligatorio.',
            'rol.unique' => 'Este rol ya está en uso.',
        ];

        $request->validate([
            "nombre" => 'required|string',
            "numero_id" => 'required|unique:usuarios',
            "correo" => 'required|email|unique:Usuarios|max:255',
            'contraseña' => 'required|string|min:8',
            "rol" => 'required|string|unique:usuarios',
        ], $mensajes);

    //Guardar datos
    try{
        $usuario = new Usuario();
        $usuario->nombre = $request->input("nombre");
        $usuario->numero_id = $request->input("numero_id");
        $usuario->correo = $request->input("correo");
        $usuario->contraseña = bcrypt($request->input("contraseña"));
        $usuario->rol = $request->input("rol");
        $usuario->save();
    }
    catch(\Illuminate\Database\QueryException $e){
        return redirect('/Usuario')->with("Fallo","Hubo un Error");
    }
    return redirect('/formulariousuario')->with("Exito","Los datos se han guardado correctamente"); }
}