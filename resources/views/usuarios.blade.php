@extends('layouts.app')

@section('titulo')

@endsection

@section('contenido')
<h1 class="text-4xl text-center font-bold mb-4 text-black">Lista de usuarios</h1>

<table class="w-full border border-collapse">
    <thead>
        <tr class="bg-gray-300">
            <th class="border p-2">ID</th>
            <th class="border p-2">Nombre</th>
            <th class="border p-2">Cédula</th>
            <th class="border p-2">Teléfono</th>
            <th class="border p-2">Dirección</th>
            <th class="border p-2">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
            <tr class="hover:bg-gray-200 cursor-pointer">
                <td class="border pl-2 text-center">{{ $usuario->id }}</td>
                <td class="border p-2 text-center">{{ $usuario->nombre }}</td>
                <td class="border p-2 text-center">{{ $usuario->cedula }}</td>
                <td class="border p-2 text-center">{{ $usuario->telefono }}</td>
                <td class="border p-2 text-center">{{ $usuario->direccion }}</td>
                <td class="border p-2 text-center">
                    <button onclick="eliminarUsuario({{ $usuario->id }})" class="bg-red-400 hover:bg-red-600 text-white py-2 px-1 ">
                        Eliminar
                    </button>
                    <button onclick="modificarUsuario({{ $usuario->id }})" class="bg-blue-400 hover:bg-blue-600 text-white py-2 px-1 ">
                        Modificar
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<button onclick="window.location='{{ route('usuarios.pdf') }}'" class="bg-sky-700 hover:bg-green-600 w-full p-3 text-white rounded-lg uppercase font-bold">
    Imprimir Datos
</button>
<div><br></div>
<a href="{{ route('registro') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ">
    Ir a Registros
</a>

<script>
    function eliminarUsuario(usuarioId) {
        if (confirm('¿Estás seguro de eliminar este usuario?')) {
            console.log('Eliminar usuario con ID:', usuarioId);
        }
    }

    function modificarUsuario(usuarioId) {
        console.log('Modificar usuario con ID:', usuarioId);
    }
</script>
@endsection
