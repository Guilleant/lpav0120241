<?php

namespace App\Http\Controllers;

use App\Models\Integrante;
use Illuminate\Http\Request;

class IntegranteController extends Controller
{
    public function index()
    {
        $integrantes = Integrante::all();
        return view('integrantes.index', compact('integrantes'));
    }

    public function create()
    {
        return view('integrantes.create');
    }

    public function store(Request $request)
    {
        Integrante::create($request->all());
        // Integrante::create(['nombre' => $request->nombre1]);
        return redirect(route('integrantes.index'));
    }

    public function edit($id)
    {
        $integrante = Integrante::find($id);
        return view('integrantes.edit', compact('integrante'));
    }

    public function update($id, Request $request)
    {
        $integrante = Integrante::find($id);

        $integrante->email = $request->email;
        $integrante->nombre = $request->nombre;
        $integrante->telefono = $request->telefono;

        $integrante->save();

        return redirect(route('integrantes.index'));
    }

    public function destroy($id)
    {
        $integrante = Integrante::find($id);
        $integrante->delete();
        return redirect(route('integrantes.index'));
    }

    public function lenguajes(Request $request)
    {
        // dd($request);
        // $integrante = Integrante::find($id);
        return response()->json(['data' => "Algo"]);
    }
}
