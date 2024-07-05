@extends('layouts.ownerDashboard')

@section('contenido_owner')
    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold mb-6">Editar Liga</h1>
        <form action="{{ route('ligas.update', $liga->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="{{ $liga->nombre }}" class="p-2 border border-gray-300 rounded w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="region" class="block text-gray-700 font-bold mb-2">Región:</label>
                <input type="text" name="region" id="region" value="{{ $liga->region }}" class="p-2 border border-gray-300 rounded w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="ano_fundacion" class="block text-gray-700 font-bold mb-2">Año de fundacion:</label>
                <input type="text" name="ano_fundacion" id="ano_fundacion" value="{{ $liga->ano_fundacion }}" class="p-2 border border-gray-300 rounded w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-green-500">
                Guardar
            </button>
        </form>
    </div>
@endsection
