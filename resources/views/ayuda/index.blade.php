@extends('layouts.playerDashboard')

@section('contenido_player')

    <body class="bg-gray-100">
        <header class="bg-blue-500 text-white p-4">
            <div class="container mx-auto">
                <h1 class="text-2xl font-bold">Ayuda - Mi Aplicación</h1>
            </div>
        </header>

        <main class="container mx-auto my-8 p-8 bg-white shadow-md rounded-md">
            <h2 class="text-2xl font-bold mb-4">Preguntas Frecuentes</h2>

            <div class="mb-4">
                <h3 class="text-lg font-semibold">1. ¿Cómo hago una búsqueda?</h3>
                <p>Dirígete al buscador y busca dependiendo del dato que quieras buscar, por ejemplo: buscar por apellido o
                    nombre. </p>
            </div>

            <div class="mb-4">
                <h3 class="text-lg font-semibold">2. ¿Qué son los "Breadcrumbs" y cómo se utilizan en la aplicación?</h3>
                <p>En nuestra aplicación, los "Breadcrumbs" se utilizan para proporcionarte una referencia visual de la
                    ubicación actual y facilitar la navegación entre las diferentes secciones. Siempre puedes hacer clic en
                    uno de los elementos del "Breadcrumb" para volver rápidamente a una página anterior en la ruta de
                    navegación.</p>
            </div>
        </main>
    </body>
@endsection
