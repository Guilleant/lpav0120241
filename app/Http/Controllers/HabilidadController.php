<?php

namespace App\Http\Controllers;

use App\Models\Habilidad;
use Illuminate\Http\Request;

class HabilidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $habilidades = Habilidad::all();
        return view('habilidades.index', compact('habilidades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('habilidades.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Habilidad::create($request->all());
        // habilidad::create(['nombre' => $request->nombre1]);
        return redirect(route('habilidades.index'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $habilidad = Habilidad::find($id);
        return view('habilidades.edit', compact('habilidad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $habilidad = Habilidad::find($id);

        $habilidad->descripcion = $request->descripcion;

        $habilidad->save();

        return redirect(route('habilidades.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $habilidad = Habilidad::find($id);
        $habilidad->delete();
        return redirect(route('habilidades.index'));
    }
}
