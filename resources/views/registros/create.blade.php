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

                        <form action="{{ route('crear-registro') }}" method="post">
                            @csrf
                            <div class="modal-body">

                                <div class="row text-lg-start text-sm-start">

                                    {{-- equipo input --}}
                                    <div class="col-lg-12">
                                        <div class="mb-1">
                                            <label for="" class="form-label text-success">Equipo</label>
                                            <select class="form-control form-select" name="equipo" id="">
                                                <option selected> Selecciona un equipo </option>
                                                @foreach ($equipos as $e)
                                                    <option value="{{ $e->equipoid }}">
                                                        NNI: {{ $e->nni }} -
                                                        MODELO: "{{ $e->nombremarca }} {{ $e->nombremodelo }}"
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    {{-- responsable input --}}
                                    <div class="col-lg-12">
                                        <div class="mb-1">
                                            <label for="" class="form-label text-success">Responsable</label>
                                            <select class="form-control form-select" name="responsable" id="">
                                                <option selected> Selecciona al responsable </option>
                                                @foreach ($responsables as $r)
                                                    <option value="{{ $r->responsableid }}">
                                                        {{ $r->nombres }} {{ $r->apellidopaterno }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    {{-- oficina input --}}
                                    <div class="col-lg-12">
                                        <div class="mb-1">
                                            <label for="" class="form-label text-success">Oficina</label>
                                            <select class="form-control form-select" name="oficina" id="">
                                                <option selected> Selecciona una oficina </option>
                                                @foreach ($oficinas as $o)
                                                    <option value="{{ $o->oficinaid }}">
                                                        "{{ $o->nombreoficina }}" -
                                                        {{ $o->nombrearea }} -
                                                        {{ $o->nombreunidad }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

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



<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">NUEVO RESPONSABLE</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('crear-registro') }}" method="post">
                @csrf
                <div class="modal-body">

                    <div class="row text-lg-start text-sm-start">

                        {{-- equipo input --}}
                        <div class="col-lg-12">
                            <div class="mb-1">
                                <label for="" class="form-label text-success">Equipo</label>
                                <select class="form-control form-select" name="equipo" id="">
                                    <option selected> Selecciona un equipo </option>
                                    @foreach ($equipos as $e)
                                        <option value="{{ $e->equipoid }}">
                                            NNI: {{ $e->nni }} -
                                            MODELO: "{{ $e->nombremarca }} {{ $e->nombremodelo }}"
                                        </option>
                                    @endforeach
                                </select>
                            </div>
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
