<?php

namespace App\Http\Controllers\Auth\Controller;

use App\Http\Controllers\Auth\Controller; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    // Método para mostrar el formulario de registro
    public function index()
    {
        return view('auth.passwords.register'); // Asegúrate de que esta vista exista
    }

    // Método para manejar el registro del usuario
    public function register(Request $request)
    {
            // Validación de los datos de entrada
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ]);
        
            // Crear un nuevo usuario
            $user = \App\Models\User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password), // Asegúrate de encriptar la contraseña
            ]);
        
            // Autenticar al usuario si se creó correctamente
            if ($user) {
                Auth::login($user);
                return redirect()->route('home');
            } else {
                return redirect()->back()->withErrors(['error' => 'No se pudo crear el usuario.']);
            }
        }
}        
