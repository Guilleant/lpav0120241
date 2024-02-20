@extends('layouts.app')

@push('estilos')
    <link href="{{ asset('assets/DataTables/datatables.min.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="card border-success mb-3">
        <div class="card-header bg-transparent border-success d-flex justify-content-between">
            <h5>Habilidades</h5>
            <a class="btn btn-primary" href="{{ route('habilidades.create') }}">
                <i class="fa fa-plus" aria-hidden="true"></i>
            </a>
        </div>
        <div class="card-body text-success">
            <table class="table table-striped table-hover" id="myTable">
                <thead>
                    <tr>
                        <th>Nro.</th>
                        <th>Descripción.</th>
                        <th>Acciones.</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($habilidades as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->descripcion }}</td>
                            <td class="d-flex gap-3">
                                <a class="btn btn-warning btn-sm" href="{{ route('habilidades.edit', $item->id) }}">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>


                                <form action="{{ route('habilidades.destroy', $item->id) }}" method="POST" id="formulario">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick=" return confirm('¿Desea Borrar?');">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- <div class="card-footer bg-transparent border-success">
            
        </div> --}}
    </div>
@endsection

@push('scriptsjs')
    <script src="{{ asset('assets/DataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endpush
