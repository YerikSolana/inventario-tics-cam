<div class="container">
    <div class="row">

        {{-- Modal edit --}}
        <div class="modal fade" id="edit{{ $q->responsableid }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR RESPONSABLE</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="{{ route('responsables.update', $q->responsableid) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="row text-start">

                                {{-- Nombre input --}}
                                <div class="col-lg-12">
                                    <div class="mb-1">
                                        <label for="" class="form-label text-success">Nombre</label>
                                        <input type="text" class="form-control" name="nombre" id=""
                                            aria-describedby="helpId" placeholder="" value="{{ $q->nombres }}">
                                    </div>
                                </div>

                                {{-- Apellido paterno input --}}
                                <div class="col-lg-6">
                                    <div class="mb-1">
                                        <label for="" class="form-label text-success">Apellido
                                            Paterno</label>
                                        <input type="text" class="form-control" name="apellidop" id=""
                                            aria-describedby="helpId" placeholder="" value="{{ $q->apellidopaterno }}">
                                    </div>
                                </div>

                                {{-- Apellido materno input --}}
                                <div class="col-lg-6">
                                    <div class="mb-1">
                                        <label for="" class="form-label text-success">Apellido
                                            materno</label>
                                        <input type="text" class="form-control" name="apellidom" id=""
                                            aria-describedby="helpId" placeholder="" value="{{ $q->apellidomaterno }}">
                                    </div>
                                </div>

                            </div>

                            {{-- Matricula input --}}
                            <div class="mb-1">
                                <label for="" class="form-label text-success">Matricula</label>
                                <input type="text" class="form-control" name="matricula" id=""
                                    aria-describedby="helpId" placeholder="" value="{{ $q->matricula }}">
                            </div>

                            {{-- Correo input --}}
                            <div class="mb-1">
                                <label for="" class="form-label text-success">Correo</label>
                                <input type="text" class="form-control" name="correo" id=""
                                    aria-describedby="helpId" placeholder="" value="{{ $q->correo }}">
                            </div>
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Modal delete --}}
<div class="modal fade" id="delete{{ $q->responsableid }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR RESPONSABLE</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('responsables.destroy', $q->responsableid) }}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    ¿Estás seguro de eliminar a <strong> {{ $q->nombres }} {{ $q->apellidopaterno }} </strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>
