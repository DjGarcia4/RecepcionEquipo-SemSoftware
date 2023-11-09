<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\TransaccionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formularioequipo', function () {
    return view('formularioequipo');
});

Route::get('/formulariousuario', function () {
    return view('formulariousuario');
});

Route::get('/formulariotransaccion', function () {
    return view('formulariotransaccion');
});

//rutas para formulario de equipo
Route::post("/insertarEquipo", [EquipoController::class, "store"])->name("formularioequipo.store");

//rutas para formulario de usuario
Route::post("/insertarUsuario", [UsuarioController::class, "store"])->name("formulariousuario.store");

//rutas para formulario de transacciones
Route::post("/insertarTransaccion", [TransaccionController::class, "store"])->name("formulariotransaccion.store");
