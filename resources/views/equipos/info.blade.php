<div class="container">
    <div class="row">

        {{-- Modal edit --}}
        <div class="modal fade" id="edit{{ $q->equipoid }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR EQUIPO</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="{{ route('equipos.update', $q->equipoid) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="modal-body">
                            <div class="row text-lg-start">

                                {{-- serie input --}}
                                <div class="col-lg-6">
                                    <div class="mb-1">
                                        <label for="" class="form-label text-success">Serie</label>
                                        <input type="text" class="form-control" name="serie" id=""
                                            aria-describedby="helpId" placeholder="" value="{{ $q->serie }}">
                                    </div>
                                </div>

                                {{-- nni input --}}
                                <div class="col-lg-6">
                                    <div class="mb-1">
                                        <label for="" class="form-label text-success">Numero Nacional de
                                            Inventario</label>
                                        <input type="text" class="form-control" name="nni" id=""
                                            aria-describedby="helpId" placeholder="" value="{{ $q->nni }}">
                                    </div>
                                </div>

                                {{-- usuariodom input --}}
                                <div class="col-lg-12">
                                    <div class="mb-1">
                                        <label for="" class="form-label text-success">Usuario del
                                            Dominio</label>
                                        <input type="text" class="form-control" name="usuariodom" id=""
                                            aria-describedby="helpId" placeholder="" value="{{ $q->usuariodom }}">
                                    </div>
                                </div>

                                {{-- hostname input --}}
                                <div class="col-lg-12">
                                    <div class="mb-1">
                                        <label for="" class="form-label text-success">Nombre del
                                            Host</label>
                                        <input type="text" class="form-control" name="hostname" id=""
                                            aria-describedby="helpId" placeholder="" value="{{ $q->hostname }}">
                                    </div>
                                </div>

                                {{-- ip input --}}
                                <div class="col-lg-6">
                                    <div class="mb-1">
                                        <label for="" class="form-label text-success">Dirección IP</label>
                                        <input type="text" class="form-control" name="ip" id=""
                                            aria-describedby="helpId" placeholder="" value="{{ $q->ip }}">
                                    </div>
                                </div>

                                {{-- mac input --}}
                                <div class="col-lg-6">
                                    <div class="mb-1">
                                        <label for="" class="form-label text-success">Dirección MAC</label>
                                        <input type="text" class="form-control" name="mac" id=""
                                            aria-describedby="helpId" placeholder="" value="{{ $q->mac }}">
                                    </div>
                                </div>

                                {{-- so input --}}
                                <div class="col-lg-6">
                                    <div class="mb-1">
                                        <label for="" class="form-label text-success">Sistema
                                            Operativo</label>
                                        <select class="form-control form-select" name="soid" id="">
                                            @foreach ($so as $s)
                                                @if ($q->soid == $s->soid)
                                                    <option value="{{ $s->soid }}" selected>{{ $s->nombreso }}
                                                    </option>
                                                @else
                                                    <option value="{{ $s->soid }}">{{ $s->nombreso }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                {{-- modeloid input --}}
                                <div class="col-lg-6">
                                    <div class="mb-1">
                                        <label for="" class="form-label text-success">Modelo</label>
                                        <select class="form-control form-select" name="modeloid" id="">
                                            @foreach ($modelos as $m)
                                                @if ($q->modeloid == $m->modeloid)
                                                    <option value="{{ $m->modeloid }}" selected>
                                                        {{ $m->nombremarca }} -
                                                        {{ $m->nombremodelo }}</option>
                                                @else
                                                    <option value="{{ $m->modeloid }}">{{ $m->nombremarca }} -
                                                        {{ $m->nombremodelo }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="d-grid gap-2 mt-3">
                                <button type="submit" class="btn btn-warning">Actualizar</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Modal delete --}}
<div class="modal fade" id="delete{{ $q->equipoid }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR RESPONSABLE</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('equipos.destroy', $q->equipoid) }}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <h5>¿Estás seguro de eliminar este equipo?</h5>
                        </div>
                        <strong>
                            <div class="col-12">
                                NNI: {{ $q->nni }}
                            </div>
                            <div class="col-12">
                                MODELO: {{ $q->nombremarca }} {{ $q->nombremodelo }}
                            </div>
                        </strong>
                    </div>

                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col-10">
                        <div class="d-grid gap-2 mt-3 mb-3">
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </form>
        </div>
    </div>
</div>
