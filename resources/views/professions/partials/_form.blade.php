<div class="row">
    <div class="col-12 d-flex align-items-stretch grid-margin">
        <div class="row flex-grow">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="green-epca mb-3">Profesión</h4>
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' :'' }}"
                                   value="{{old('name', !empty($profession) ? $profession->name : '' )}}"
                                   name="name" id="name">
                            @if ($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-epca py-2  mr-2">
                            Guardar <i class="fas fa-check green-epca"></i>
                        </button>
                        <a href="{{route('profesiones.index')}}" class='btn btn-secondary py-2 btn-fw'>
                            <i class="fas fa-chevron-left blue-epca"></i>Cancelar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
