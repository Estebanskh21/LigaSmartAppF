@extends('layouts.playerDashboard')

@section('contenido_player')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-4">Listado de Temas</h1>

        @if ($temas->count() > 0)
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <ul>
                    @foreach ($temas as $tema)
                        <li class="border-t border-gray-200">
                            <a href="{{ route('temas.show', $tema->id) }}" class="block hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out">
                                <div class="px-4 py-4 sm:px-6">
                                    <div class="flex items-center justify-between">
                                        <p class="text-lg leading-5 font-medium text-indigo-600">{{ $tema->titulo }}</p>
                                        <p class="text-sm leading-5 text-gray-500">{{ $tema->created_at->diffForHumans() }}</p>
                                    </div>
                                    <div class="mt-2 sm:flex sm:justify-between">
                                        <div class="sm:flex">
                                            <p class="flex items-center text-sm leading-5 text-gray-500">
                                                Creado por: {{ $tema->usuario->name }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="px-4 py-2 bg-gray-100">
                                <a href="{{ route('respuestas.create', $tema->id) }}" class="text-sm text-gray-600 hover:text-blue-600">Responder a este tema</a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="mt-4">
                {{ $temas->links() }}
            </div>
        @else
            <p class="text-gray-600">No hay temas disponibles.</p>
        @endif
    </div>
@endsection
