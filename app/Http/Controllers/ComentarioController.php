<?php

namespace App\Http\Controllers;
use App\Models\Comentario;

use Illuminate\Http\Request;

class ComentarioController extends Controller
{
  public function store(Request $request)
  {
    $this->validate($request, [
      'comentario' => 'required|max:255'
    ]);

    // dd($request->post);

    Comentario::create([
      'comentario' => $request->comentario,
      'user_id' => auth()->user()->id,
      'post_id' => $request->post
    ]);

    return back()->with('mensaje', 'Comentario Publicado Correctamente');
  }
}
