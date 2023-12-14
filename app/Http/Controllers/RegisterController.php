<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view ('auth.registro');
    }
    public function store(Request $request){
        /* dd($request); se usa para tener un console log*/

        /* $request->request->add(['code' => Str::slug($request->code)]); */

      $this->validate($request, [
        'nombre' => 'required|max:30',
        'cedula' => 'required|unique:users|min:3|max:30',
        'telefono' => 'required|max:60',
        'direccion' => 'required|min:2'
        ]);

        try {
          User::create([
              'nombre' => $request->nombre,
              'cedula' => $request->cedula,
              'telefono' => $request->telefono,
              'direccion' => $request->direccion,
              
          ]);
          session()->flash('success', 'Usuario registrado con éxito.');

      } catch (\Exception $e) {
        
          session()->flash('error', 'Ha ocurrido un error al registrar el usuario.');
          return redirect()->back()->withInput();
      }        
    
      return redirect()->route('usuarios')->with('bienvenida', '¡Tu registro ha sido exitoso ');
    }
}
 