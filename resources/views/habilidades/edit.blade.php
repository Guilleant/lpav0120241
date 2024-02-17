@extends('layouts.principal')

@section('content')
    <div class="card border-success mb-3">
        <div class="card-header bg-transparent border-success d-flex justify-content-between">
            <h5>Editar Habilidad</h5>
        </div>
        <form action="{{ route('habilidades.update', $habilidad->id) }}" method="POST" id="formulario">
            @csrf
            @method('PUT')
            <div class="card-body text-success">
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción de la Habilidad</label>
                    <input type="text" class="form-control" id="descripcion" aria-describedby="Descripcion"
                        name="descripcion" value="{{ $habilidad->descripcion }}">
                </div>
            </div>
            <div class="card-footer bg-transparent border-success">
                <input type="submit" class="btn btn-primary" id="guardar" value="Actualizar" />
                <a class="btn btn-secondary" href="{{ route('habilidades.index') }}">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
@endsection
