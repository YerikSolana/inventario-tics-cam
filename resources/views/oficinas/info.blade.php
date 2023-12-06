<div class="container">
    <div class="row">

        {{-- Modal edit --}}
        <div class="modal fade" id="edit{{ $q->oficinaid }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR EQUIPO</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="{{ route('oficinas.update', $q->oficinaid) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="modal-body">
                            <div class="row text-lg-start">

                                {{-- area input --}}
                                <div class="col-lg-12">
                                    <div class="mt-1">
                                        <label for="" class="form-label">Area</label>
                                        <select class="form-control form-select" name="area" id="">
                                            @foreach ($areas as $a)
                                                @if ($q->areaid == $a->areaid)
                                                    <option value="{{ $a->areaid }}" selected>
                                                        "{{ $a->nombrearea }}"
                                                        {{ $a->nombreunidad }}
                                                    </option>
                                                @else
                                                    <option value="{{ $a->areaid }}">
                                                        "{{ $a->nombrearea }}"
                                                        {{ $a->nombreunidad }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                {{-- oficina input --}}
                                <div class="col-lg-12">
                                    <div>
                                        <label for="" class="form-label">Nombre de
                                            la oficina</label>
                                        <input type="text" class="form-control" name="oficina" id=""
                                            aria-describedby="helpId" placeholder="" value="{{ $q->nombreoficina }}">
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
<div class="modal fade" id="delete{{ $q->oficinaid }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR RESPONSABLE</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('oficinas.destroy', $q->oficinaid) }}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <h5>
                                ¿Estás seguro de eliminar la oficina:
                                <strong>
                                    {{ $q->nombreoficina }}
                                </strong>
                                ?
                                Ubicada en:
                                     "{{ $q->nombrearea }}"
                                     {{ $q->nombreunidad }}
                            </h5>
                        </div>
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
