@extends('layouts.app')

@section('titulo')
    Crear Nueva Publicación
@endsection

@section('contenido')
    <div class="bg-red-500 md:flex md:items-center">

        <div class="md:w-1/2 px-10 ">
            <form action="/IMAGES" id="dropzone"
                class=" bg-amber-300 dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">
            </form>
        </div>

        <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0">

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <!-- Campo Nombre -->
                <div class="mb-2">
                    <label for="titulo" class="mb-1 block uppercase text-gray-500 font-bold text-sm">
                        Titulo
                    </label>

                    <input id="titulo" name="titulo" type="text" placeholder="Titulo de Publicación"
                        class="border border-gray-200 p-2 w-full rounded-lg text-sm" value={{ old('titulo') }}>

                    @error('titulo')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">
                            {{ $message }}
                        </p>
                    @enderror

                </div>

                <div class="mb-2">
                    <label for="descripcion" class="mb-1 block uppercase text-gray-500 font-bold text-sm">
                        Descripción de Publicación
                    </label>

                    <textarea id="descripcion" name="descripcion" placeholder="Descripción de Publicación"
                        class="border border-gray-200 p-2 w-full rounded-lg text-sm
                        @error('titulo') border-red-500 @enderror">
                        {{ old('titulo') }}
                    </textarea>

                    @error('descripcion')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <input type="submit" value="Crear Publicación"
                    class="text-sm bg-sky-600 hover:bg-sky-700 uppercase font-bold w-full p-2 text-white rounded-lg">

            </form>
        </div>
    </div>
@endsection
