@extends('layouts.playerDashboard')

@section('contenido_player')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-4">{{ $tema->titulo }}</h1>
        <p class="mb-4">{{ $tema->contenido }}</p>
        <p class="text-sm text-gray-600">Creado por: {{ $tema->usuario->name }}</p>
        <p class="text-sm text-gray-600 mb-8">Publicado: {{ $tema->created_at->diffForHumans() }}</p>

        <!-- Aquí muestra las respuestas del tema -->
        @foreach ($tema->respuestas as $respuesta)
            <div class="bg-gray-100 p-4 mb-4">
                <p>{{ $respuesta->contenido }}</p>
                <p class="text-sm text-gray-600">Respondido por: {{ $respuesta->usuario->name }}</p>
                <p class="text-sm text-gray-600">Fecha: {{ $respuesta->created_at->diffForHumans() }}</p>
            </div>
        @endforeach

        <!-- Enlace para responder al tema -->
        <a href="{{ route('respuestas.create', $tema->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Responder al Tema</a>
    </div>
@endsection
