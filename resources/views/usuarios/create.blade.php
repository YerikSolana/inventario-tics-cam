@extends('layouts.app')

@section('content')
    <section class="vh-100 d-sm-inline d-lg-block">
        <div class="container-fluid h-custom">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="divider d-flex align-items-center my-4">
                            <h3 class="text-success text-center fw-bold mx-3 mb-0">Registrar usuario</h3>
                        </div>


                        <div class="form-outline mb-4">
                            <label class="text-success form-label" for="form3Example3">Nombre</label>
                            <input type="text" name="name" id="form3Example3" class="form-control form-control-lg"
                                placeholder="Ingresar nombre" />
                        </div>


                        <div class="form-outline mb-4">
                            <label class="text-success form-label" for="form3Example3">Correo</label>
                            <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
                                placeholder="Ingresar correo" />
                        </div>


                        <div class="form-outline mb-3">
                            <label class="text-success form-label" for="form3Example4">Contraseña</label>
                            <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
                                placeholder="Ingresa una contraseña no menor a 8 digitos" />
                        </div>


                        <div class="form-outline mb-3">
                            <label class="text-success form-label" for="form3Example4">Confirmar contraseña</label>
                            <input type="password" name="password_confirmation" id="form3Example4"
                                class="form-control form-control-lg" placeholder="Ingresar contraseña nuevamente" />
                        </div>


                        <div class="d-grid gap-2 text-center text-lg-start mb-4 mt-4 pt-2">
                            <button type="submit" class="btn btn-success btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Registrarse</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
