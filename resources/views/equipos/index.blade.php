@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-10 col-sm-8">
                    <h2>Equipo</h2>
                </div>
                <div class="col align-self-lg-center">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#create">
                        Agregar equipo
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row text-center table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No. Inventario</th>
                            <th>No. Serie</th>
                            <th>Dirección IP</th>
                            <th>Dirección MAC</th>
                            <th>Hostname</th>
                            <th>Modelo</th>
                            <th>Usuario de dominio</th>
                            <th>Sistema Operativo</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($query) <= 0)
                            <tr>
                                <td colspan="9">No hay resultados</td>
                            </tr>
                        @else
                            @foreach ($query as $q)
                                <tr>
                                    <td>{{ $q->nni }}</td>
                                    <td>{{ $q->serie }}</td>
                                    <td>{{ $q->ip }}</td>
                                    <td>{{ $q->mac }}</td>
                                    <td>{{ $q->hostname }}</td>
                                    <td>{{ $q->nombremodelo }} {{ $q->nombremarca }}</td>
                                    <td>{{ $q->usuariodom }}</td>
                                    <td>{{ $q->nombreso }}</td>


                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">

                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#edit{{ $q->equipoid }}">
                                                Editar
                                            </button>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#delete{{ $q->equipoid }}">
                                                Eliminar
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @include('equipos.info')
                            @endforeach
                        @endif
                    </tbody>
                </table>
                {{ $query->links() }}
                @include('equipos.create')
            </div>
        </div>
    </div>
@endsection
