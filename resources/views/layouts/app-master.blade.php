<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liga Smart App</title>
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="./dist/output.css"> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased">
    @include('layouts/menus.navbar')
    @yield('contenido_usu')
    @include('layouts/menus.footer')
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="./dist/app-bundle.js"></script>

</html>
