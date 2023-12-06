<div class="container">
    <div class="row">
        <div class="col">
            {{-- Modal create --}}
            <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">NUEVO RESPONSABLE</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <form action="{{ route('responsables.store') }}" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="row">

                                    {{-- Nombre input --}}
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="mb-1">
                                            <label for="" class="form-label text-success">Nombre</label>
                                            <input type="text" class="form-control" name="nombre" id=""
                                                aria-describedby="helpId" placeholder="">
                                        </div>
                                    </div>

                                    {{-- Apellido paterno input --}}
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="mb-1">
                                            <label for="" class="form-label text-success">Apellido
                                                paterno</label>
                                            <input type="text" class="form-control" name="apellidop" id=""
                                                aria-describedby="helpId" placeholder="">
                                        </div>
                                    </div>

                                    {{-- Apellido materno input --}}
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="mb-1">
                                            <label for="" class="form-label text-success">Apellido
                                                materno</label>
                                            <input type="text" class="form-control" name="apellidom" id=""
                                                aria-describedby="helpId" placeholder="">
                                        </div>
                                    </div>

                                </div>

                                {{-- Matricula input --}}
                                <div class="mb-1">
                                    <label for="" class="form-label text-success">Matricula</label>
                                    <input type="text" class="form-control" name="matricula" id=""
                                        aria-describedby="helpId" placeholder="">
                                </div>

                                {{-- Correo input --}}
                                <div class="mb-1">
                                    <label for="" class="form-label text-success">Correo</label>
                                    <input type="text" class="form-control" name="correo" id=""
                                        aria-describedby="helpId" placeholder="">
                                </div>
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-success">Agregar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
