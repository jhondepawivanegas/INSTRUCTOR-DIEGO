@extends('layouts.app')

@section('titulo')

@endsection

@section('contenido')
<h1 class="font-bold">Registro de Usuarios</h1>
<div class="md:flex mt-5">
    
<div class="md:w-1/2 bg-white p-6  " >
<form action="{{ route('registro') }}" method="post">
    @csrf
    <div class="mb-5">
        <label for="nombre" class="mb-2 block uppercase text-black font-bold">Nombre</label>
        <input id="nombre" name="nombre" placeholder="Nombre" type="text" class=" border p-1 w-full  bg-blue-100 border-green-400">
        @error('nombre')
        <p class="text-white text-center my-2 p-2 bg-red-400  text-sm" >{{$message}}</p>
        @enderror
    </div>
    <div class="mb-5">
        <label for="cedula" class="mb-2 block uppercase text-black font-bold">Cédula</label>
        <input id="cedula" name="cedula" placeholder="Cédula de Usuario" type="text" class=" border p-1 w-full  bg-blue-100 border-green-400">
        @error('cedula')
        <p class="text-white text-center my-2 p-2 bg-red-400  text-sm" >{{$message}}</p>
        @enderror
    </div>
    <div class="mb-5">
        <label for="telefono" class="mb-2 block uppercase text-black font-bold">Número telefónico</label>
        <input id="telefono" name="telefono" placeholder="Teléfono" type="text" class=" border p-1 w-full  bg-blue-100 border-green-400">
        @error('telefono')
        <p class="text-white text-center my-2 p-2 bg-red-400  text-sm" >{{$message}}</p>
        @enderror
    </div>
    <div class="mb-5">
        <label for="direccion" class="mb-2 block uppercase text-black font-bold">Dirección</label>
        <input id="direccion" name="direccion" placeholder="Dirección" type="text" class=" border p-1 w-full  bg-blue-100 border-green-400">
        @error('cedula')
        <p class="text-white text-center my-2 p-2 bg-red-400  text-sm" >{{$message}}</p>
        @enderror
    </div>
    <input type="submit" value="Registrar" class="bg-sky-700  hover:bg-green-600 w-full p-3 text-white rounded-lg uppercase font-bold" >
   
</form>

@if (session('success'))
    <div class="alert alert-success text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm">
        {{ session('success') }}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger text-white text-center my-2 p-2 bg-red-400 rounded-lg text-sm">
        {{ session('error') }}
    </div>
@endif

<a href="{{ route('usuarios') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">
    Ir a Usuarios
</a>
</div>

</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("nombre").focus();
    });
</script>

@endsection
