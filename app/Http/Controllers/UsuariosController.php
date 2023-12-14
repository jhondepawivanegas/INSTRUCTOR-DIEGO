<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Barryvdh\DomPDF\Facade as PDF;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return view('usuarios', ['usuarios' => $usuarios]);
    }

    public function generarPDF()
    {
        $usuarios = User::all();
        $pdf = PDF::loadView('usuarios', compact('usuarios'));

        return $pdf->download('lista_usuarios.pdf');
    }

    public function eliminarUsuario(Request $request, $id)
    {
        User::destroy($id);

        return response()->json(['message' => 'Usuario eliminado con éxito']);
    }
}
