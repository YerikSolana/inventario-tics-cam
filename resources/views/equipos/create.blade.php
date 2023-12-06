<div class="container">
    <div class="row">
        <div class="col">
            {{-- Modal create --}}
            <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">NUEVO EQUIPO</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <form action="{{ route('equipos.store') }}" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="row text-lg-start text-sm-start">
                                    <div class="col-lg-6">
                                        {{-- serie input --}}
                                        <div class="mb-1">
                                            <label for="" class="form-label text-success">Serie</label>
                                            <input type="text" class="form-control" name="serie" id=""
                                                aria-describedby="helpId" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        {{-- nni input --}}
                                        <div class="mb-1">
                                            <label for="" class="form-label text-success">Numero Nacional de
                                                Inventario</label>
                                            <input type="text" class="form-control" name="nni" id=""
                                                aria-describedby="helpId" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        {{-- userdom input --}}
                                        <div class="mb-1">
                                            <label for="" class="form-label text-success">Usuario del
                                                Dominio</label>
                                            <input type="text" class="form-control" name="usuariodom" id=""
                                                aria-describedby="helpId" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        {{-- hostname input --}}
                                        <div class="mb-1">
                                            <label for="" class="form-label text-success">Nombre del
                                                Host</label>
                                            <input type="text" class="form-control" name="hostname" id=""
                                                aria-describedby="helpId" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        {{-- ip input --}}
                                        <div class="mb-1">
                                            <label for="" class="form-label text-success">Dirección IP</label>
                                            <input type="text" class="form-control" name="ip" id=""
                                                aria-describedby="helpId" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        {{-- mac input --}}
                                        <div class="mb-1">
                                            <label for="" class="form-label text-success">Dirección MAC</label>
                                            <input type="text" class="form-control" name="mac" id=""
                                                aria-describedby="helpId" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        {{-- so input --}}
                                        <div class="mb-1">
                                            <label for="" class="form-label text-success">Sistema
                                                Operativo</label>
                                            <select class="form-control form-select" name="soid" id="">
                                                <option selected>Selecciona un Sistema Operativo</option>
                                                @foreach ($so as $s)
                                                    <option value="{{ $s->soid }}">{{ $s->nombreso }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        {{-- modeloid input --}}
                                        <div class="mb-1">
                                            <label for="" class="form-label text-success">Modelo</label>
                                            <select class="form-control form-select" name="modeloid" id="">
                                                <option selected> Selecciona un modelo </option>
                                                @foreach ($modelos as $m)
                                                    <option value="{{ $m->modeloid }}">{{ $m->nombremarca }} -
                                                        {{ $m->nombremodelo }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>


                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger"
                                        data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-success">Agregar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
