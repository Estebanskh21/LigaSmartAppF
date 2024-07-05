<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Ligas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 flex">
    <!-- Menú lateral -->
    <div class="bg-gray-800 text-white w-64 min-h-screen fixed">
        <div class="p-4">
            <h1 class="text-3xl font-bold">LigaSmartApp</h1>
            <ul class="mt-4">
                <li class="mb-2">
                    <a href="/dashboard/player" class="block px-4 py-2 rounded hover:bg-gray-700">Inicio</a>
                </li>
                <li class="mb-2">
                    <a href="/foro/index" class="block px-4 py-2 rounded hover:bg-gray-700">Vista temas</a>
                </li>
                <li class="mb-2">
                    <a href="/ayuda" class="block px-4 py-2 rounded hover:bg-gray-700">Ayuda</a>
                </li>
                <li class="mb-2">
                    <a href="/logout" class="block px-4 py-2 rounded hover:bg-gray-700">Cerrar Sesión</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="flex-1 p-8 ml-64">
        @yield('contenido_player')
    </div>
</body>

</html>
