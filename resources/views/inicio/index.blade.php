@extends('layouts.app-master')

@section('contenido_usu')
    <div id="default-carousel" class="container mx-auto my-8 relative" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96 flex justify-center items-center">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://i.pinimg.com/736x/bd/df/e9/bddfe97ce367341b3a5b663bb6b7171b.jpg"
                    class="absolute w-2/3 h-full rounded-xl inset-0 mx-auto" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://i.pinimg.com/564x/eb/a7/35/eba735b325e32fded481531f9b87ef98.jpg"
                    class="absolute w-2/3 h-full rounded-xl inset-0 mx-auto" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://i.pinimg.com/564x/2d/ba/a0/2dbaa0013dd0d3282f063bea7619c11c.jpg"
                    class="absolute w-2/3 h-full rounded-xl inset-0 mx-auto" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://www.generacionuniversitaria.com.mx/wp-content/uploads/2022/06/soccer-1024x631.jpg"
                    class="absolute w-2/3 h-full rounded-xl inset-0 mx-auto" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://www.eloficial.ec/wp-content/uploads/2018/06/mundial-rusia-1.png"
                    class="absolute w-2/3 h-full rounded-xl inset-0 mx-auto" alt="...">
            </div>
        </div>

        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-1/2 left-2 z-30 transform -translate-y-1/2 flex items-center justify-center h-10 w-10 rounded-full bg-white/30 dark:bg-gray-800/30 group hover:bg-white/50 dark:hover:bg-gray-800/60 focus:ring-4 focus:ring-white dark:focus:ring-gray-800/70 focus:outline-none"
            data-carousel-prev>
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 1 1 5l4 4" />
            </svg>
            <span class="sr-only">Previous</span>
        </button>
        <button type="button"
            class="absolute top-1/2 right-2 z-30 transform -translate-y-1/2 flex items-center justify-center h-10 w-10 rounded-full bg-white/30 dark:bg-gray-800/30 group hover:bg-white/50 dark:hover:bg-gray-800/60 focus:ring-4 focus:ring-white dark:focus:ring-gray-800/70 focus:outline-none"
            data-carousel-next>
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
        </button>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 p-4">
        <!-- Tarjeta de Noticia 1 -->
        <div class="relative overflow-hidden bg-white rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
          <img class="w-full h-48 object-cover object-center" src="https://www.eloficial.ec/wp-content/uploads/2018/06/mundial-rusia-1.png" alt="Noticia 1">
          <div class="p-4">
            <h3 class="text-xl font-bold mb-2">Equipo Nacional Gana la Copa del Mundo</h3>
            <p class="text-gray-700">El equipo nacional de fútbol de un país celebró en grande al ganar la última edición de la Copa del Mundo en una final emocionante.</p>
          </div>
        </div>

        <!-- Tarjeta de Noticia 2 -->
        <div class="relative overflow-hidden bg-white rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
          <img class="w-full h-48 object-cover object-center" src="https://www.generacionuniversitaria.com.mx/wp-content/uploads/2022/06/soccer-1024x631.jpg" alt="Noticia 2">
          <div class="p-4">
            <h3 class="text-xl font-bold mb-2">Lionel Messi Anota un Hat-Trick en el Clásico</h3>
            <p class="text-gray-700">El astro argentino Lionel Messi lideró a su equipo con un impresionante hat-trick en el último clásico contra su eterno rival.</p>
          </div>
        </div>

        <!-- Tarjeta de Noticia 3 -->
        <div class="relative overflow-hidden bg-white rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105">
          <img class="w-full h-48 object-cover object-center" src="https://i.pinimg.com/564x/eb/a7/35/eba735b325e32fded481531f9b87ef98.jpg" alt="Noticia 3">
          <div class="p-4">
            <h3 class="text-xl font-bold mb-2">Neymar Regresa al Equipo Después de Lesión</h3>
            <p class="text-gray-700">El delantero brasileño Neymar Jr. está de vuelta en el terreno de juego después de una lesión que lo mantuvo fuera por varios meses.</p>
          </div>
        </div>
      </div>



@endsection
