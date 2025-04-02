@extends('layouts.app')

@section('titulo')
    Perfil: {{ $user->username }}
@endsection

@section('contenido')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:h-6/12 md:flex py-2 md:py-10 flex items-center bg-amber-300" > {{-- md = ≥768px, lg = ≥1024px  --}}
            <div class="w-8/12 lg:w-6/12 px-5 items-center justify-center flex bg-amber-700">
                <img class="rounded-full lg:h-90" src="{{ asset('img/usuario.svg') }}" alt="Imagen de Perfil">
            </div>

            <div class="md:w-8/12 lg:w-6/12 px-5 md:flex md:flex-col md:justify-center bg-red-500 md:items-start py-8 ">
                <p class="text-gray-700 text-2xl"> {{ $user->username }}</p>

                <p class="text-gray-800 text-sm mb-3 font-bold mt-2 lg:mt-5">
                    0
                    <span class="font-normal"> Seguidores </span>
                </p>


                <p class="text-gray-800 text-sm mb-3 font-bold">
                    0
                    <span class="font-normal"> Siguiendo </span>
                </p>

                <p class="text-gray-800 text-sm mb-3 font-bold">
                    0
                    <span class="font-normal"> Posts </span>
                </p>

            </div>
        </div>
    </div>
@endsection
