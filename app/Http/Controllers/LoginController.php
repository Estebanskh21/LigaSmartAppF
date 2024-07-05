<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect($this->redirectBasedOnRole());
        }

        return back()->withErrors([
            'message' => 'El email o la contraseña son incorrectos, inténtelo de nuevo',
        ]);
    }

    private function redirectBasedOnRole()
    {
        $user = Auth::user();

        switch ($user->role) {
            case 'arbitro':
                return '/dashboard/arbitro';
            case 'owner':
                return '/dashboard/owner';
            case 'player':
                return '/dashboard/player';
            default:
                return '/';
        }
    }




    public function destroy()
    {
        Auth::logout();

        return redirect()->to('/');
    }


}
