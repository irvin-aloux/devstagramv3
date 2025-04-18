@extends('layouts.app')

@section('titulo')
    Crear Nueva Publicación
@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('contenido')
    <div class="md:flex md:items-center">

        <div class="md:w-1/2 px-10 ">
            <form action="{{ route('imagenes.store') }}" id="dropzone" enctype="multipart/form-data"
                class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">
                @csrf
            </form>
        </div>

        <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0">

            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <!-- Campo Nombre -->
                <div class="mb-2">
                    <label for="titulo" class="mb-1 block uppercase text-gray-500 font-bold text-sm">
                        Titulo
                    </label>

                    <input id="titulo" name="titulo" type="text" placeholder="Titulo de Publicación"
                        class="border border-gray-200 p-2 w-full rounded-lg text-sm
                        @error('titulo') border-red-500 @enderror"
                        value={{ old('titulo') }}>

                    @error('titulo')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
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
                        @error('descripcion') border-red-500 @enderror">
                        {{ old('descripcion') }}
                    </textarea>

                    @error('descripcion')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <input type="hidden" name="imagen" value="{{ old('imagen') }}">
                    @error('imagen')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <input type="submit" value="Crear Publicación"
                    class="text-sm bg-sky-600 hover:bg-sky-700 uppercase font-bold w-full p-2 text-white rounded-lg">

            </form>
        </div>
    </div>
@endsection
