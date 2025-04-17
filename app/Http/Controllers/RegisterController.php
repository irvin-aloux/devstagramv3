<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
  public function index()
  {
    return view('auth.register');
  }

  public function store(Request $request)
  {
    $request->request->add(['username' => Str::slug($request->username)]);

    // Validar datos
    $this->validate($request, [
      'name' => 'required|min:5|max:40',
      'username' => 'required|unique:users|min:5|max:15',  //Este dato tine que ser unico para la URL
      'email' => 'required|unique:users|email|max:60', // Este dato tine que ser unico para evitar la creación de otra cuenta con el mismo email
      'password' => 'required|min:8|max:20',
    ]);

    // Crear usuario
    User::create([
      'name' => $request->name,
      'username' => Str::slug($request->username),
      'email' => $request->email,
      'password' => Hash::make($request->password),
    ]);

    // Autenticar al usuario
    auth()->attempt([
      'email' => $request->email,
      'password' => $request->password,
    ]);

    // Redireccionar
    return redirect()->route('posts.index', auth()->user());

  }
}
