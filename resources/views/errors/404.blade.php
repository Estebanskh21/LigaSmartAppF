@extends('layouts.auth-master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404 - Página no encontrada</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="bg-gray-900 text-white flex items-center justify-center h-screen">
    <div class="text-center">
        <h1 class="text-6xl font-bold mb-2">404</h1>
        <p class="text-2xl mb-4">Página no encontrada</p>
        <p class="text-lg mb-8">La página que estás buscando no existe.</p>
        <button id="goBackBtn" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Volver atrás
        </button>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    <script>
        // Manejar el botón de volver atrás con JavaScript
        document.getElementById('goBackBtn').addEventListener('click', function () {
            window.history.back();
        });
    </script>
</body>
</html>
@endsection
