<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UsuariosController;

Route::get('/', function () {
    return view('auth.registro');
});

Route::get('/registro', [RegisterController::class, 'index'])->name('registro');
Route::post('/registro', [RegisterController::class, 'store']);

Route::get('/usuarios/pdf', [UsuariosController::class, 'generarPDF'])->name('usuarios.pdf');
Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios');

Route::delete('/usuarios/{id}', [UsuariosController::class, 'eliminarUsuario'])->name('usuarios.eliminar');