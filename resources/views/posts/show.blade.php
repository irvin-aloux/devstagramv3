@extends('layouts.app')

@section('titulo')
    {{ $post->titulo }}
@endsection

@section('contenido')
    <div class="container mx-auto md:flex">

        <div class="md:w-1/2 bg-amber-300">
            <img class="w-full h-auto p-10" src="{{ asset('uploads' . '/' . $post->imagen) }}" alt="{{ $post->descripcion }}">

            <div class="px-10 pb-5">
                <p>0 Likes</p>
            </div>

            <div class="px-10 pb-5">
                <p class="font-bold">{{ $post->user->username }}</p>
                <p class="text-sm text-gray-500 ">{{ $post->created_at->diffForHumans() }}</p>
                <p class="">{{ $post->descripcion }}</p>
            </div>
        </div>

        <div class="md:w-1/2 p-5">
            <div class="shadow bg-white p-5 mb-5">

                @auth
                    <p class="text-xl font-bold text-center mb-4"> Agregar un Nuevo Comentario</p>

                    <form action="{{ route('comentario.store', ['post' => $post, 'user' => $user]) }}" method="POST">
                        @csrf

                        <div class="mb-2">
                            <label for="comentario" class="mb-1 block uppercase text-gray-500 font-bold text-sm">
                                Añade un Comentario
                            </label>

                            <textarea id="comentario" name="comentario" placeholder="Agrega un comentario"
                                class="border border-gray-200 p-2 w-full rounded-lg text-sm
                            @error('comentario') border-red-500 @enderror">
                          </textarea>

                            @error('comentario')
                                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center"> {{ $message }} </p>
                            @enderror
                        </div>

                        <input type="submit" value="Comentar"
                            class="text-sm bg-sky-600 hover:bg-sky-700 uppercase font-bold w-full p-2 text-white rounded-lg">


                    </form>
                @endauth

                <div class="bg-white shadow mb-5 max-h-96 overflow-y-scroll mt-5">
                    @if ($post->comentarios->count())
                        @foreach ($post->comentarios as $comentario)
                            <div class="p-5 border-gray-300 border-b">
                                <a href="{{ route('posts.index', $comentario->user) }}" class="font-bold">
                                    {{ $comentario->user->username }}
                                </a>
                                <p>
                                    {{ $comentario->comentario }}
                                </p>
                                <p class="text-sm text-gray-500">
                                    {{ $comentario->created_at->diffForHumans() }}
                                </p>
                            </div>
                        @endforeach
                    @else
                        <p class="p-10 text-center">No Hay comentarios Aún</p>
                    @endif
                </div>

            </div>
        </div>
    @endsection
