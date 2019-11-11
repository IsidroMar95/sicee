<div class="row">
    <div class="col-12 d-flex align-items-stretch grid-margin">
        <div class="row flex-grow">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="green-epca mb-3">Periodos Escolares</h4>
                        <div class="form-group">
                            <label for="year">Año:</label>
                            <input type="text" data-inputmask="'mask': '9999'" class="form-control year {{$errors->has('year') ? 'is-invalid' :'' }}"
                                   value="{{old('year', !empty($school_period) ? $school_period->year : '' )}}"
                                   name="year" id="year">
                            @if ($errors->has('year'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('year') }}
                                </div>
                            @endif
                        </div>


                        <div class="form-group {{$errors->has('description') ? 'is-invalid' :'' }}">
                            <label for="description">Periodo:</label>
                            <select id="description"
                                    class="form-control {{$errors->has('description') ? 'is-invalid' :'' }}"
                                    name="description">

                                <option value="">Selecciona un periodo</option>
                                @foreach(["ENERO-ABRIL" => "ENERO-ABRIL", "MAYO-AGOSTO" => "MAYO-AGOSTO", "SEPTIEMBRE-DICIEMBRE" => "SEPTIEMBRE-DICIEMBRE"] AS $description => $descriptionLabel)
                                    <option
                                        value="{{ $description }}" {{ old("description",  !empty($school_period) ? $school_period->description == $description ? 'selected' : '':'') }}>
                                        {{ $descriptionLabel }}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('description'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('description') }}
                                </div>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-epca py-2  mr-2">
                            Guardar <i class="fas fa-check green-epca"></i>
                        </button>
                        <a href="{{route('periodos-escolares.index')}}" class='btn btn-secondary py-2 btn-fw'>
                            <i class="fas fa-chevron-left blue-epca"></i>Cancelar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
