<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());

        // Puedes autenticar al usuario después del registro si lo deseas
        // auth()->login($user);

        return redirect('/')->with('success', 'Cuenta creada exitosamente');
    }
}
