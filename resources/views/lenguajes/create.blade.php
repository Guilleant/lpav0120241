@extends('layouts.app')

@section('content')
    <div class="card border-success mb-3">
        <div class="card-header bg-transparent border-success d-flex justify-content-between">
            <h5>Lenguajes de Programación</h5>
        </div>
        <form action="{{ route('lenguajes.store') }}" method="POST" id="formulario">
            @csrf
            @method('POST')
            <div class="card-body text-success">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del Lenguaje</label>
                    <input type="text" class="form-control" id="nombre" aria-describedby="Nombre" name="nombre">
                </div>


            </div>
            <div class="card-footer bg-transparent border-success">
                <input type="submit" class="btn btn-primary" id="guardar" value="Guardar" />
                <a class="btn btn-secondary" href="{{ route('lenguajes.index') }}">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
@endsection
