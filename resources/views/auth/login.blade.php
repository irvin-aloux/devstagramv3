@extends('layouts.app')

@section('titulo')
    Inicia sesión en Devstagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-6 md:items-center">
        <!-- Primera columna -->
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/login.jpg') }}" alt="Imagen de Registro">
        </div>

        <!-- Segunda columna -->
        <div class="max-md:p-3 md:w-4/12 2xl:w-6/12">
            <div class="md:w-12/12 bg-white p-6 rounded-lg shadow-xl">

                <form action="{{ route('login') }}" novalidate method="POST">
                    @csrf

                    @if (session('mensaje'))
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">
                            {{ session('mensaje') }}
                        </p>
                    @endif

                    <!-- Campo Email de Usuario -->
                    <div class="mb-2">
                        <label for="email" class="mb-1 block uppercase text-gray-500 font-bold text-sm">
                            Email
                        </label>

                        <input id="email" name="email" type="email" placeholder="Tu Email de Registro"
                            class="border border-gray-200 p-2 w-full rounded-lg text-sm" value={{ old('email') }}>

                        @error('email')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Campo para el Password del Usuario -->
                    <div class="mb-2">
                        <label for="password" class="mb-1 block uppercase text-gray-500 font-bold text-sm">
                            Password
                        </label>
                        <input id="password" name="password" type="password" placeholder="Password de Registro"
                            class="border border-gray-200 p-2 w-full rounded-lg text-sm" value={{ old('password') }}>
                        @error('password')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <input type="checkbox" name="remember">
                        <label for="remember" class="text-sm text-gray-500">
                            Mantener mi sesión abierta
                        </label>
                    </div>

                    <input type="submit" value="Iniciar Sesión"
                        class="text-sm bg-sky-600 hover:bg-sky-700 uppercase font-bold w-full p-2 text-white rounded-lg">

                </form>
            </div>
        </div>
    </div>
@endsection
