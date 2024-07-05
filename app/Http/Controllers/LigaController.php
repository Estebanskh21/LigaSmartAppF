<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Liga;
use Illuminate\Support\Facades\Validator;

class LigaController extends Controller
{
    public function index()
    {
        $ligas = Liga::all();
        return view('ligas.tabla', compact('ligas'));
    }

    public function create()
    {
        return view('ligas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de entradas
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'ano_fundacion' => 'required|integer|min:1900|max:'.date('Y'),
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Sanitización de datos
        $sanitizedData = $validator->validated();
        $sanitizedData['nombre'] = htmlspecialchars($sanitizedData['nombre'], ENT_QUOTES, 'UTF-8');
        $sanitizedData['region'] = htmlspecialchars($sanitizedData['region'], ENT_QUOTES, 'UTF-8');

        Liga::create($sanitizedData);

        return redirect()->route('ligas.index')->with('success', 'Liga creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Liga $liga)
    {
        return view('ligas.show', compact('liga'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Liga $liga)
    {
        return view('ligas.edit', compact('liga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Liga $liga)
    {
        // Validación de entradas
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'ano_fundacion' => 'required|integer|min:1900|max:'.date('Y'),
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Sanitización de datos
        $sanitizedData = $validator->validated();
        $sanitizedData['nombre'] = htmlspecialchars($sanitizedData['nombre'], ENT_QUOTES, 'UTF-8');
        $sanitizedData['region'] = htmlspecialchars($sanitizedData['region'], ENT_QUOTES, 'UTF-8');

        $liga->update($sanitizedData);

        return redirect()->route('ligas.index')->with('success', 'Liga actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Liga $liga)
    {
        $liga->delete();

        return redirect()->route('ligas.index')->with('success', 'Liga eliminada exitosamente.');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        // Sanitización de entrada
        $search = htmlspecialchars($search, ENT_QUOTES, 'UTF-8');

        $ligas = Liga::where('nombre', 'like', "%$search%")
            ->orWhere('region', 'like', "%$search%")
            ->orWhere('ano_fundacion', 'like', "%$search%")
            ->get();

        return view('ligas.tabla', compact('ligas'));
    }
}
