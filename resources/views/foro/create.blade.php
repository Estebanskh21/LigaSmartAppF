@extends('layouts.ownerDashboard')

@section('contenido_owner')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-4">Crear Nuevo Tema</h1>

        <form action="{{ route('temas.store') }}" method="POST" class="max-w-lg">
            @csrf
            <div class="mb-4">
                <label for="titulo" class="block text-gray-700 text-sm font-bold mb-2">Título del Tema</label>
                <input type="text" name="titulo" id="titulo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-6">
                <label for="contenido" class="block text-gray-700 text-sm font-bold mb-2">Contenido</label>
                <textarea name="contenido" id="contenido" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Crear Tema</button>
        </form>
    </div>
@endsection
