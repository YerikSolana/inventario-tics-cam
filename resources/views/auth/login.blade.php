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
                        alt="image">
                </div>

                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    {{-- Formulario de login --}}
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="divider d-flex align-items-center my-4">
                            <h3 class="text-success text-center fw-bold mx-3 mb-0">Iniciar Sesión</h3>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="text-success form-label" for="form3Example3">Correo electronico</label>
                            <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
                                placeholder="Ingresar correo" required />
                        </div>

                        {{-- <div class="form-outline mb-4 col-md-4 position-relative">
                            <label for="validationTooltipUsername" class="form-label text-success">Correo electronico</label>
                            <div class="input-group has-validation">
                              <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                              <div class="invalid-tooltip">
                                Coloque un correo valido.
                              </div>
                              <div class="valid-tooltip">
                                Correo valido
                              </div>
                            </div>
                          </div> --}}

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="text-success form-label" for="form3Example4">Contraseña</label>
                            <input type="password" name="password" id="form3Example4"
                                class="form-control form-control-lg" placeholder="Ingresar contraseña" required />
                            <div class="invalid-tooltip">
                                Contraseña incorrecta
                            </div>
                        </div>

                        <div class="d-grid gap-2 text-center text-lg-start mb-4 mt-4 pt-2">
                            <button type="submit" class=" btn btn-success btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Ingresar</button>
                            {{-- <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!" class="link-danger">Register</a></p> --}}
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div
            class="d-flex flex-column flex-md-row text-center text-md-start justify-content-end py-4 px-4 px-xl-5 bg-success">
            {{-- Firma --}}
            <div class="text-white mb-3 mb-md-0">
                Created at 2023. By: Yerik A. Solana Peralta
            </div>
        </div>
    </section>



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

    
</body>

</html>
