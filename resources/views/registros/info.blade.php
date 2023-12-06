<div class="container">
    <div class="row">

        {{-- Modal edit --}}
        <div class="modal fade" id="edit{{ $q->registroid }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR EQUIPO</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="{{ route('editar-registro', $q->registroid) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="modal-body">
                            <div class="row text-lg-start">

                                {{-- equipo input --}}
                                <div class="col-lg-12">
                                    <div class="mb-1">
                                        <label for="" class="form-label text-success">Equipo</label>
                                        <select class="form-control form-select" name="equipo" id="">
                                            @foreach ($equipos as $e)
                                                @if ($q->equipoid == $e->equipoid)
                                                    <option value="{{ $e->equipoid }}" selected required>
                                                        NNI: {{ $e->nni }} -
                                                        MODELO: "{{ $e->nombremarca }} {{ $e->nombremodelo }}"
                                                    </option>
                                                @else
                                                    <option value="{{ $e->equipoid }}">
                                                        NNI: {{ $e->nni }} -
                                                        MODELO: "{{ $e->nombremarca }} {{ $e->nombremodelo }}"
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                {{-- responsable input --}}
                                <div class="col-lg-12">
                                    <div class="mb-1">
                                        <label for="" class="form-label text-success">Responsable</label>
                                        <select class="form-control form-select" name="responsable" id="">
                                            @foreach ($responsables as $r)
                                                @if ($q->responsableid == $r->responsableid)
                                                    <option value="{{ $r->responsableid }}" selected required>
                                                        {{ $r->nombres }} {{ $r->apellidopaterno }}
                                                    </option>
                                                @else
                                                    <option value="{{ $r->responsableid }}">
                                                        {{ $r->nombres }} {{ $r->apellidopaterno }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                {{-- oficina input --}}
                                <div class="col-lg-12">
                                    <div class="mb-1">
                                        <label for="" class="form-label text-success">Oficina</label>
                                        <select class="form-control form-select" name="oficina" id="">
                                            @foreach ($oficinas as $o)
                                                @if ($q->oficinaid == $o->oficinaid)
                                                    <option value="{{ $o->oficinaid }}" selected required>
                                                        "{{ $o->nombreoficina }}" -
                                                        {{ $o->nombrearea }} -
                                                        {{ $o->nombreunidad }}
                                                    </option>
                                                @else
                                                    <option value="{{ $o->oficinaid }}">
                                                        "{{ $o->nombreoficina }}" -
                                                        {{ $o->nombrearea }} -
                                                        {{ $o->nombreunidad }}
                                                    </option>
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
<div class="modal fade" id="delete{{ $q->registroid }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR RESPONSABLE</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('eliminar-registro', $q->registroid) }}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <h5>¿Deeseas borrar el registro?</h5>
                        </div>
                        <strong>
                            <div class="col-12">
                                Responsable: {{ $q->nombres }} {{ $q->apellidopaterno }}
                            </div>
                            <div class="col-12">
                                Equipo: {{ $q->serie }}
                            </div>
                            <div class="col-12">
                                Oficina: "{{ $q->nombreoficina }}" - {{ $q->nombrearea }} {{ $q->nombreunidad }}
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
