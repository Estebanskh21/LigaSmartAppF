@extends('layouts.auth-master')

@section('content')
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex items-center w-screen h-screen mx-auto px-4">
            <div class="w-1/2 mx-auto">
                <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                    <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                        <img class="w-12 h-9 mr-2 rounded-full"
                            src="https://i.pinimg.com/564x/8e/18/ee/8e18ee902aa624f0cd6038dbc00463ce.jpg" alt="logo">
                        Liga Smart App
                    </a>
                    <div
                        class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                            <h1
                                class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                                Regístrate
                            </h1>

                            {{-- Mostrar mensajes de éxito --}}
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            {{-- Mostrar errores de validación --}}
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form class="space-y-4 md:space-y-6" action="{{ route('register.register') }}" method="POST">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="email" placeholder="Email" name="email"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        value="{{ old('email') }}">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" placeholder="name" id="name" name="name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        value="{{ old('name') }}">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" placeholder="Contraseña" name="password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contraseña</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" placeholder="Confirmar contraseña" name="password_confirmation"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirmar
                                        contraseña</label>
                                </div>
                                <div class="text-center block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                    ¿Ya tienes una cuenta? <a href="/" class="text-blue-400">Inicia sesión</a>
                                </div>
                                <div class="flex justify-center">
                                    <button type="submit"
                                        class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Crear
                                        cuenta</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
