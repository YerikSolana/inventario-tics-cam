@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h2>Usuarios</h2>
                </div>
                <div class="col align-self-lg-center offset-6">
                    <a href="{{ route('usuarios.create') }}" class="btn btn-success">Agregar usuario</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row text-center table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre de usuario</th>
                            <th>Correo</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <button type="button" class="btn btn-warning">Editar</button>
                                        <button type="button" class="btn btn-danger">Eliminar</button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection
