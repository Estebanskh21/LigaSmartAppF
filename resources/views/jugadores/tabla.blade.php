@extends('layouts.ownerDashboard')

@section('contenido_owner')
    <div class="container mx-auto mt-2">
        {{-- Buscador --}}
        <h1 class="text-3xl font-bold mb-6">Tabla de Jugadores</h1>
        <div class="flex justify-between mb-4">
            <form action="{{ route('jugadores.search') }}" method="GET" class="flex items-center">
                <div class="mr-2">
                    <label for="search" class="mr-2">Buscar:</label>
                    <input type="text" id="search" name="search" placeholder="Escribe para buscar"
                        class="p-2 border border-gray-300">
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                    Buscar</button>
            </form>
            <a href="{{ route('jugadores.create') }}" class="bg-green-500 hover:bg-green-600 text-white font-bold px-4 py-2 rounded">
                Crear Jugador
            </a>
        </div>

        {{-- Tabla --}}
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300 shadow">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-4 border-b">Nombre</th>
                        <th class="py-2 px-4 border-b">Apellido Paterno</th>
                        <th class="py-2 px-4 border-b">Apellido Materno</th>
                        <th class="py-2 px-4 border-b">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jugadores as $jugador)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $jugador->nombre }}</td>
                            <td class="py-2 px-4 border-b">{{ $jugador->apellido_paterno }}</td>
                            <td class="py-2 px-4 border-b">{{ $jugador->apellido_materno }}</td>
                            <td class="py-2 px-4 border-b">
                            <a href="{{ route('jugadores.edit', $jugador->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold px-2 py-1 mx-2 rounded">
                                    Editar
                                </a>
                                <form action="{{ route('jugadores.destroy', $jugador->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold px-2 py-1 rounded">
                                        Eliminar
                                    </button>
                            </td>
                        </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
