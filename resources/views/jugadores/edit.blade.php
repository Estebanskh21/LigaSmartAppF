@extends('layouts.ownerDashboard')

@section('contenido_owner')
    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold mb-6">Editar Jugador</h1>
        <form action="{{ route('jugadores.update', $jugador->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="{{ $jugador->nombre }}" class="p-2 border border-gray-300 rounded w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="apellido_paterno" class="block text-gray-700 font-bold mb-2">Apellido Paterno:</label>
                <input type="text" name="apellido_paterno" id="apellido_paterno" value="{{ $jugador->apellido_paterno }}" class="p-2 border border-gray-300 rounded w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="apellido_materno" class="block text-gray-700 font-bold mb-2">Apellido Materno:</label>
                <input type="text" name="apellido_materno" id="apellido_materno" value="{{ $jugador->apellido_materno }}" class="p-2 border border-gray-300 rounded w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-green-500">
                Guardar
            </button>
        </form>
    </div>
@endsection
