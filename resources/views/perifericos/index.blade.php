@extends('layouts.app')

@section('content')
    
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-10 col-sm-8">
                    <h2>Perifericos</h2>
                </div>
                <div class="col align-self-lg-center">
                    <a href="{{ route('registros.create') }}" class="btn btn-success">Agregar periferico</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-10 col-sm-8">
                                    <h2>Mouse</h2>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row text-center table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No. Serie</th>
                                            <th>Modelo</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>238947283</td>
                                            <td>G105 LOGITECH</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                    <button type="button" class="btn btn-warning">Editar</button>
                                                    <button type="button" class="btn btn-danger">Eliminar</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-lg-12 mt-lg-4">
            
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-10 col-sm-8">
                                    <h2>Monitor</h2>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row text-center table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No. Serie</th>
                                            <th>Modelo</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>095672389</td>
                                            <td>Lenovo 2233</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                    <button type="button" class="btn btn-warning">Editar</button>
                                                    <button type="button" class="btn btn-danger">Eliminar</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mt-lg-4">
            
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-10 col-sm-8">
                                    <h2>Teclado</h2>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row text-center table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No. Serie</th>
                                            <th>Modelo</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>6743235</td>
                                            <td>N182 HP</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                    <button type="button" class="btn btn-warning">Editar</button>
                                                    <button type="button" class="btn btn-danger">Eliminar</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection