@extends('layouts.principal')

@section('content')
    <div class="card border-success mb-3">
        <div class="card-header bg-transparent border-success d-flex justify-content-between">
            <h5>Integrantes</h5>
        </div>
        <form action="{{ route('integrantes.store') }}" method="POST" id="formulario">
            @csrf
            @method('POST')
            <div class="card-body text-success">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="Email" name="email">
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del integrante</label>
                    <input type="text" class="form-control" id="nombre" aria-describedby="Nombre" name="nombre">
                </div>

                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfonpo</label>
                    <input type="text" class="form-control" id="telefono" aria-describedby="Telefono" name="telefono">
                </div>
            </div>
            <div class="card-footer bg-transparent border-success">
                <input type="submit" class="btn btn-primary" id="guardar" value="Guardar" />
                <a class="btn btn-secondary" href="{{ route('integrantes.index') }}">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
@endsection
