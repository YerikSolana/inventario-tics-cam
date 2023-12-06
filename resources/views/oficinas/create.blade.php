<div class="container">
    <div class="row">
        <div class="col">
            {{-- Modal create --}}
            <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">NUEVA OFICINA</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <form action="{{ route('oficinas.store') }}" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="row text-lg-start">

                                    {{-- oficina input --}}
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <label for="" class="form-label text-success">Nombre de
                                                Oficina</label>
                                            <input type="text" class="form-control" name="oficina" id=""
                                                aria-describedby="helpId" placeholder="">
                                        </div>
                                    </div>

                                    {{-- area input --}}
                                    <div class="col-lg-6">
                                        <div class="mb-1">
                                            <label for="" class="form-label text-success">Area</label>
                                            <select class="form-control form-select" name="area" id="">
                                                <option selected> Selecciona un modelo </option>
                                                @foreach ($query as $q)
                                                    <option value="{{ $q->areaid }}"> {{ $q->nombrearea }} -
                                                        {{ $q->nombreunidad }} </option>
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
