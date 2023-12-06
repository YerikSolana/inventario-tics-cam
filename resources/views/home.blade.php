@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card m-lg-5" style="@media (max-width: 1250px) {width: 40rem}; @media (max-width: 576px) {width: 30rem};">
            <div class="card-header text-center bg-dark">
                <h3 class="text-white">Perfil del usuario</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-5 col-sm-12">
                        <img src="https://cdn-icons-png.flaticon.com/512/666/666201.png" alt="img" style="width: 300px; heigth: 400px;">
                    </div>
                    <div class="col-lg-2 col-sm-auto">
                        <p class="card-text fs-4 mt-lg-5 mt-sm-2 mb-3">Nombre:</p>
                        <p class="card-text fs-5 mb-3">Email:</p>
                        {{-- <p class="card-text mb-3">Matricula:</p>
                        <p class="card-text">Puesto:</p> --}}
                    </div>
                    <div class="col mt-lg-5 mt-sm-2">
                        <h3 class="card-title mb-4">{{ Auth::user()->name }}</h3>
                        <p class="card-text">{{ Auth::user()->email }}</p>
                        {{-- <p class="card-text">6309960</p>
                        <p class="card-text">Pasante</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection