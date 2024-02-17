<?php

namespace App\Http\Controllers;

use App\Models\Integrante;
use App\Models\IntegranteLenguaje;
use App\Models\Lenguaje;
use Illuminate\Http\Request;

class IntegranteLenguajeController extends Controller
{
    //
    public function index()
    {
        $integrantes = Integrante::all();
        return view('integrantelenguajes.index', compact('integrantes'));
    }

    public function create()
    {
        $integrantes = Integrante::all();
        $lenguajes = Lenguaje::all();

        return view('integrantelenguajes.create', compact('integrantes', 'lenguajes'));
    }

    public function store(Request $request)
    {
        dd($request);
    }
}
