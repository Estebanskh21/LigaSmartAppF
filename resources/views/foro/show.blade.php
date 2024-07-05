@extends('layouts.playerDashboard')

@section('contenido_player')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-4">{{ $tema->titulo }}</h1>

        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-4 sm:px-6">
                <p class="text-lg leading-5 font-medium text-indigo-600">Contenido del Tema:</p>
                <p class="mt-2 text-sm leading-5 text-gray-500">{{ $tema->contenido }}</p>
                <p class="mt-4 text-sm leading-5 text-gray-500">Creado por: {{ $tema->usuario->name }}</p>
                <p class="mt-1 text-sm leading-5 text-gray-500">Fecha de creación: {{ $tema->created_at->format('d/m/Y H:i') }}</p>
            </div>
        </div>

        <h2 class="text-2xl font-bold mt-8 mb-4">Respuestas</h2>

        @if ($tema->respuestas->count() > 0)
            <ul class="bg-white shadow overflow-hidden sm:rounded-lg">
                @foreach ($tema->respuestas as $respuesta)
                    <li class="border-t border-gray-200">
                        <div class="px-4 py-4 sm:px-6">
                            <p class="text-lg leading-5 font-medium text-indigo-600">{{ $respuesta->usuario->name }}</p>
                            <p class="mt-2 text-sm leading-5 text-gray-500">{{ $respuesta->contenido }}</p>
                            <p class="mt-1 text-sm leading-5 text-gray-500">Fecha de respuesta: {{ $respuesta->created_at->format('d/m/Y H:i') }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-gray-600 mt-4">No hay respuestas aún.</p>
        @endif

        {{-- Formulario para responder --}}
        <div class="mt-8">
            <h2 class="text-xl font-bold mb-4">Responder a este tema</h2>
            <form action="{{ route('respuestas.store', $tema->id) }}" method="POST" class="max-w-lg">
                @csrf
                <div class="mb-6">
                    <label for="contenido" class="block text-gray-700 text-sm font-bold mb-2">Contenido de la Respuesta</label>
                    <textarea name="contenido" id="contenido" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Enviar Respuesta</button>
            </form>
        </div>
    </div>
@endsection
