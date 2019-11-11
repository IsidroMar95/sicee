<div class="row">
    <div class="col-12 d-flex align-items-stretch grid-margin">
        <div class="row flex-grow">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="green-epca mb-3">Carrera</h4>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' :'' }}"
                                       value="{{old('name', !empty($career) ? $career->name: '' )}}" name="name"
                                       id="name">
                                @if ($errors->has('name'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label for="agreementNumber">N° de Acuerdo </label>
                                <input type="text"
                                       class="form-control {{$errors->has('agreementNumber') ? 'is-invalid' :'' }}"
                                       value="{{old('agreementNumber', !empty($career) ? $career->agreementNumber : '' )}}"
                                       name="agreementNumber" id="agreementNumber">
                                @if ($errors->has('agreementNumber'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('agreementNumber') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="start_date">Fecha de Registro:</label>
                                <input type="date"
                                       class="form-control {{$errors->has('start_date') ? 'is-invalid' :'' }}"
                                       value="{{old('start_date', !empty($career) ? $career->start_date->format('Y-m-d') : '' )}}"
                                       name="start_date" id="start_date">
                                @if ($errors->has('start_date'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('start_date') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        @if (!Request::is('carreras/crear'))
                            <div class="form-group">
                                <div class="form-check form-check-flat">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="status" id="status"
                                               class="form-check-input" {{!empty($career) ? ($career->status ? 'checked="checked"' : ''):''}} >
                                        Estatus <i class="input-helper"></i></label>
                                </div>
                            </div>
                        @endif
                        <button type="submit" class="btn btn-epca py-2  mr-2">
                            Guardar <i class="fas fa-check green-epca"></i>
                        </button>
                        <a href="{{route('carreras.index')}}" class='btn btn-secondary py-2 btn-fw'>
                            <i class="fas fa-chevron-left blue-epca"></i>Cancelar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


