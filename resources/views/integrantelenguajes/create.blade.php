@extends('layouts.app')

@section('content')
    <div class="card border-success mb-3">
        <div class="card-header bg-transparent border-success d-flex justify-content-between">
            <h5>Asignación de lenguajes a integrantes</h5>
        </div>
        <form action="{{ route('integrantelenguajes.store') }}" method="POST" id="formulario">
            @csrf
            @method('POST')
            <div class="card-body text-success">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Integrante</label>
                    <select name="integrante_id" id="integrante_id" class="form-control">
                        <option value="-1" selected>Seleccione un integrante</option>
                        @foreach ($integrantes as $item)
                            <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Lenguajes</label>
                    <select name="lenguaje_id[]" id="integrante_id" class="form-control" multiple>
                        @foreach ($lenguajes as $item)
                            <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                        @endforeach
                    </select>
                </div>


            </div>
            <div class="card-footer bg-transparent border-success">
                <input type="submit" class="btn btn-primary" id="guardar" value="Guardar" />
                <a class="btn btn-secondary" href="{{ route('integrantelenguajes.index') }}">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
@endsection

@push('scriptsjs')
    <script>
        document.addEventListener("DOMContentLoaded", (event) => {
            let cbointegrante = document.getElementById('integrante_id');

            cbointegrante.addEventListener("change", (event) => {
                function llenarLenguajes() {
                    $.ajax({
                        url: '{{ route('lenguajesintegrante') }}',
                        type: 'GET',
                        data: {
                            id: cbointegrante.value
                        },
                        dataType: 'json',
                        success: function(msj) {
                            if (msj.status) {
                                console.log(msj.status);
                                return;
                            }

                            console.log(msj);

                            // //Con Datatables, así limpiamos el body de la tabla
                            // $('#tabla').DataTable().clear();

                            // for (var idx in msj) {
                            //     //Se agrega un elemento con los datos de cada fila.Los datos se encuentran dentro de un array.
                            //     $('#tabla').DataTable().row.add([msj[idx].id,
                            //         msj[idx].nombre,
                            //         '<a class="btn btn-outline-warning btn-sm" href="views/lenguajes/edit.php?id=' +
                            //         msj[idx].id + '"> ' +
                            //         '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">' +
                            //         '<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>' +
                            //         '<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>' +
                            //         '</svg>' +
                            //         '</a>' +

                            //         '<button type="button" class="btn btn-outline-danger btn-sm" onclick="eliminar(' +
                            //         msj[idx].id + ')">' +
                            //         '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">' +
                            //         '<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />' +
                            //         '<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />' +
                            //         '</svg>' +
                            //         '</button>'
                            //     ]).draw();
                            // }
                        },
                        error: function(msj) {
                            console.log(msj);
                            console.log("Llenar el Combo ERROR: " + msj);
                        }
                    });
                }
            });
        });
    </script>
@endpush
