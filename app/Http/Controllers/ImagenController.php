<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ImagenController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Máximo 2 MB
        ]);

        $imagen = $request->file('file');
        $nombreImagen = Str::uuid() . "." . $imagen->extension();

        $imagen->move(public_path('uploads'), $nombreImagen);

        return response()->json(['imagen' => $nombreImagen]);
    }
}