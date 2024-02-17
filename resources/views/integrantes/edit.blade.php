@extends('layouts.principal')

@section('content')
    <div class="card border-success mb-3">
        <div class="card-header bg-transparent border-success d-flex justify-content-between">
            <h5>Integrantes del Club</h5>
        </div>
        <form action="{{ route('integrantes.update', $integrante->id) }}" method="POST" id="formulario">
            @csrf
            @method('PUT')
            <div class="card-body text-success">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="Email" name="email"
                        value="{{ $integrante->email }}">
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del integrante</label>
                    <input type="text" class="form-control" id="nombre" aria-describedby="Nombre" name="nombre"
                        value="{{ $integrante->nombre }}">
                </div>

                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfonpo</label>
                    <input type="text" class="form-control" id="telefono" aria-describedby="Telefono" name="telefono"
                        value="{{ $integrante->telefono }}">
                </div>
            </div>
            <div class="card-footer bg-transparent border-success">
                <input type="submit" class="btn btn-primary" id="guardar" value="Actualizar" />
                <a class="btn btn-secondary" href="{{ route('integrantes.index') }}">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
@endsection
