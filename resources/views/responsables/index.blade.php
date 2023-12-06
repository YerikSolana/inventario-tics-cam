@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-10 col-sm-8">
                    <h2>Responsables</h2>
                </div>
                <div class="col align-self-lg-center">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#create">
                        Agregar responsable
                    </button>
                </div>
            </div>
        </div>

        <div class="card-body">

            <div class="row text-center table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre del responsable</th>
                            <th>Matricula</th>
                            <th>Correo electronico</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($query) <= 0)
                            <tr>
                                <td colspan="4">No hay resultados</td>
                            </tr>
                        @else
                            @foreach ($query as $q)
                                <tr>
                                    <th>{{ $q->nombres }} {{ $q->apellidopaterno }} {{ $q->apellidomaterno }}</th>
                                    <th>{{ $q->matricula }}</th>
                                    <th>{{ $q->correo }}</th>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">

                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#edit{{ $q->responsableid }}">
                                                Editar
                                            </button>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#delete{{ $q->responsableid }}">
                                                Eliminar
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @include('responsables.info')
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            {{ $query->links() }}
            @include('responsables.create')
        </div>
    </div>
@endsection
