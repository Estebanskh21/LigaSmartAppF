<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tema;
use Mews\Purifier\Facades\Purifier;

class TemaController extends Controller
{
    public function index()
    {
        $temas = Tema::latest()->paginate(10);
        return view('foro.index', compact('temas'));
    }

    public function show($id)
    {
        $tema = Tema::findOrFail($id);
        $temas = Tema::latest()->paginate(10);
        return view('foro.show', compact('tema', 'temas'));
    }

    public function create()
    {
        return view('foro.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string',
        ]);

        $titulo_limpio = Purifier::clean($request->titulo);  // Limpiar el título
        $contenido_limpio = Purifier::clean($request->contenido); // Limpiar el contenido

        $tema = new Tema();
        $tema->titulo = $titulo_limpio;
        $tema->contenido = $contenido_limpio;
        $tema->usuario_id = auth()->id();
        $tema->save();

        return redirect()->route('owner.index')->with('success', 'Tema creado correctamente.');
    }
}
