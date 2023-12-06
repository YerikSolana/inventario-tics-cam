@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-10 col-sm-7">
                    <h2>Registros</h2>
                </div>
                <div class="col-sm-5 col-lg-2 align-self-lg-center">
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#create">
                            Nuevo Registro
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">

            <form action="{{ route('registros') }}" method="get">
                {{-- unidades select --}}
                <div class="row mb-3">
                    <div class="col-lg-2 col-sm-12">
                        <div class="mb-3">
                            <select class="form-select" name="" id="">
                                <option selected>UNIDADES</option>
                                @foreach ($unidades as $u)
                                    <option value="{{ $u->unidadid }}">{{ $u->nombreunidad }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    {{-- areas select --}}
                    <div class="col-lg-2 col-sm-12">
                        <div class="mb-3">
                            <select class="form-select" name="" id="">
                                <option selected>AREAS</option>
                                @foreach ($areas as $a)
                                    <option value="{{ $a->areaid }}">{{ $a->nombrearea }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    {{-- oficinas select --}}
                    <div class="col-lg-2 col-sm-12">
                        <div class="mb-3">
                            <select class="form-select" name="" id="">
                                <option selected>OFICINAS</option>
                                @foreach ($oficinas as $o)
                                    <option value="{{ $o->oficinaid }}">{{ $o->nombreoficina }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-1 col-sm-auto">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </div>
            </form>

            {{-- input de busqueda --}}
            <div class="col-lg-3 col-sm-12 offset-2">
                <form class="d-flex" role="search" action="{{ route('registros') }}" method="get">
                    <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search"
                        value="{{ $search }}">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
        <div class="row text-center table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No. Inventario</th>
                        <th>No. Serie</th>
                        <th>Dirección IP</th>
                        <th>Dirección MAC</th>
                        <th>Hostname</th>
                        <th>Responsable</th>
                        <th>Modelo</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($query) <= 0)
                        <tr>
                            <td colspan="8">No hay resultados</td>
                        </tr>
                    @else
                        @foreach ($query as $q)
                            <tr>
                                <td>{{ $q->nni }}</td>
                                <td>{{ $q->serie }}</td>
                                <td>{{ $q->ip }}</td>
                                <td>{{ $q->mac }}</td>
                                <td>{{ $q->hostname }}</td>
                                <td>{{ $q->nombres }} {{ $q->apellidopaterno }} {{ $q->apellidomaterno }}</td>
                                <td>{{ $q->nombremodelo }} {{ $q->nombremarca }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        {{-- Edit button --}}
                                        {{-- <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#edit{{ $q->registroid }}">
                                            Editar
                                        </button> --}}

                                        {{-- Eliminar button --}}
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#delete{{ $q->registroid }}">
                                            Eliminar
                                        </button>

                                        {{-- Show link --}}
                                        {{-- <a href="{{ route('registros.show') }}" class="btn btn-primary">Detalles</a> --}}
                                    </div>
                                </td>
                            </tr>
                        @include('registros.info')
                        @endforeach
                    @endif
                </tbody>
            </table>
            {{ $query->links() }}
            @include('registros.create')
        </div>
    </div>
    </div>
@endsection
