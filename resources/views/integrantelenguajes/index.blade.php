@extends('layouts.app')

@push('estilos')
    <link href="{{ asset('assets/DataTables/datatables.min.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="card border-success mb-3">
        <div class="card-header bg-transparent border-success d-flex justify-content-between">
            <h5>Intengrantes y sus lenguajes de programación</h5>
            <a class="btn btn-primary" href="{{ route('integrantelenguajes.create') }}">
                <i class="fa fa-plus" aria-hidden="true"></i>
            </a>
        </div>
        <div class="card-body text-success">
            <table class="table table-striped table-hover" id="myTable">
                <thead>
                    <tr>
                        <th>Integrante.</th>
                        <th>Lenguajes.</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($integrantes as $item)
                        <tr>
                            <td>{{ $item->nombre }}</td>
                            <td class="">
                                <ul>
                                    @foreach ($item->lenguajes as $il)
                                        <li class="d-flex justify-content-end gap-2">
                                            {{ $il->lenguaje->nombre }}
                                            <a class="btn btn-warning btn-sm"
                                                href="{{ route('integrantelenguajes.edit', $il->id) }}">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </a>
                                            <form action="{{ route('integrantelenguajes.destroy', $il->id) }}"
                                                method="POST" id="formulario">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm"
                                                    onclick=" return confirm('¿Desea Borrar?');">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            </form>

                                        </li>
                                    @endforeach
                                </ul>

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
