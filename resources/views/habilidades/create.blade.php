@extends('layouts.app')

@section('content')
    <div class="card border-success mb-3">
        <div class="card-header bg-transparent border-success d-flex justify-content-between">
            <h5>Crear Habilidad</h5>
        </div>
        <form action="{{ route('habilidades.store') }}" method="POST" id="formulario">
            @csrf
            @method('POST')
            <div class="card-body text-success">
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción de la habilidad</label>
                    <input type="text" class="form-control" id="descripcion" aria-describedby="Descripcion"
                        name="descripcion">
                </div>
            </div>
            <div class="card-footer bg-transparent border-success">
                <input type="submit" class="btn btn-primary" id="guardar" value="Guardar" />
                <a class="btn btn-secondary" href="{{ route('habilidades.index') }}">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
@endsection
