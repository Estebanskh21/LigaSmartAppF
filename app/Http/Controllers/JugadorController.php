<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jugadores = Jugador::all();
        return view('jugadores.tabla', compact('jugadores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jugadores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de entradas
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'apellido_paterno' => 'required|string|max:255',
            'apellido_materno' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Sanitización de datos
        $sanitizedData = $validator->validated();
        $sanitizedData['nombre'] = htmlspecialchars($sanitizedData['nombre'], ENT_QUOTES, 'UTF-8');
        $sanitizedData['apellido_paterno'] = htmlspecialchars($sanitizedData['apellido_paterno'], ENT_QUOTES, 'UTF-8');
        $sanitizedData['apellido_materno'] = htmlspecialchars($sanitizedData['apellido_materno'], ENT_QUOTES, 'UTF-8');

        Jugador::create($sanitizedData);

        return redirect()->route('jugadores.index')->with('success', 'Jugador creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jugador $jugador)
    {
        return view('jugadores.show', compact('jugador'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jugador $jugador)
    {
        return view('jugadores.edit', compact('jugador'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jugador $jugador)
    {
        // Validación de entradas
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'apellido_paterno' => 'required|string|max:255',
            'apellido_materno' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Sanitización de datos
        $sanitizedData = $validator->validated();
        $sanitizedData['nombre'] = htmlspecialchars($sanitizedData['nombre'], ENT_QUOTES, 'UTF-8');
        $sanitizedData['apellido_paterno'] = htmlspecialchars($sanitizedData['apellido_paterno'], ENT_QUOTES, 'UTF-8');
        $sanitizedData['apellido_materno'] = htmlspecialchars($sanitizedData['apellido_materno'], ENT_QUOTES, 'UTF-8');

        $jugador->update($sanitizedData);

        return redirect()->route('jugadores.index')->with('success', 'Jugador actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jugador $jugador)
    {
        $jugador->delete();

        return redirect()->route('jugadores.index')->with('success', 'Jugador eliminado exitosamente.');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        // Sanitización de entrada
        $search = htmlspecialchars($search, ENT_QUOTES, 'UTF-8');

        $jugadores = Jugador::where('nombre', 'like', "%$search%")
            ->orWhere('apellido_paterno', 'like', "%$search%")
            ->orWhere('apellido_materno', 'like', "%$search%")
            ->get();

        return view('jugadores.tabla', compact('jugadores'));
    }
}
