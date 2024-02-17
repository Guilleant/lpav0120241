<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lenguaje;

class LenguajeController extends Controller
{
    public function index()
    {
        $lenguajes = Lenguaje::all();
        return view('lenguajes.index', compact('lenguajes'));
    }

    public function create()
    {
        return view('lenguajes.create');
    }

    public function store(Request $request)
    {
        Lenguaje::create($request->all());
        // Lenguaje::create(['nombre' => $request->nombre1]);
        return redirect(route('lenguajes.index'));
    }

    public function edit( $id )
    {
        $lenguaje = Lenguaje::find( $id );
        return view('lenguajes.edit', compact( 'lenguaje' ) );
    }

    public function update($id, Request $request)
    {
        $lenguaje = Lenguaje::find( $id );

        $lenguaje->nombre = $request->nombre;

        $lenguaje->save();

        return redirect(route('lenguajes.index'));
    }

    public function destroy( $id ){
        $lenguaje = Lenguaje::find( $id );
        $lenguaje->delete();
        return redirect(route('lenguajes.index'));
    }
}
