<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tema;
use App\Models\Respuesta;
use Mews\Purifier\Facades\Purifier;

class RespuestaController extends Controller
{
    public function store(Request $request, Tema $tema)
    {
        $request->validate([
            'contenido' => 'required|string',
        ]);

        $contenido_limpio = Purifier::clean($request->contenido); // Limpiar el contenido

        $respuesta = new Respuesta();
        $respuesta->contenido = $contenido_limpio;
        $respuesta->usuario_id = auth()->id();
        $respuesta->tema_id = $tema->id;
        $respuesta->save();

        return redirect()->route('temas.show', $tema->id)->with('success', 'Respuesta enviada correctamente.');
    }

    public function create(Tema $tema)
    {
        return view('respuestas.create', compact('tema'));
    }
}
