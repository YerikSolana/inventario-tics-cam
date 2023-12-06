<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/estilo.css') }}">
</head>

<body>
    <section class="vh-100 d-sm-inline d-lg-block">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://1000marcas.net/wp-content/uploads/2022/01/IMSS-Logo.png" class="img-fluid"
                        alt="Sample image">
                </div>
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
                            <input type="password" name="password" id="form3Example4"
                                class="form-control form-control-lg"
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
                            <p class="small fw-bold mt-2 pt-1 mb-0">Ya tienes una cuenta?
                                <a href="{{ route('login') }}" class="text-success link-danger">Inicia sesión</a>
                            </p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="d-flex flex-md-row text-center text-md-start justify-content-end py-4 px-4 px-xl-5 bg-success">

            <div class="text-white mb-3 mb-md-0">
                Created at 2023. By: Yerik A. Solana Peralta
            </div>

        </div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
