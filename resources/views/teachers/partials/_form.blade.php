<div class="row nuevo">
    <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="green-epca mb-3">Información General</h4>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Primer Nombre</label>
                        <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' :'' }}"
                            value="{{old('name', !empty($teacher) ? $teacher->user->name: '' )}}" name="name" id="name">
                        @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="middleName">Segundo Nombre</label>
                        <input type="text" class="form-control {{$errors->has('middleName') ? 'is-invalid' :'' }}"
                            value="{{old('middleName', !empty($teacher) ? $teacher->user->middleName : '' )}}"
                            name="middleName" id="middleName">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="firstLastName">Apellido Paterno</label>
                        <input type="text" class="form-control {{$errors->has('firstLastName') ? 'is-invalid' :'' }}"
                            value="{{old('firstLastName', !empty($teacher) ? $teacher->user->firstLastName : '' )}}"
                            name="firstLastName" id="firstLastName">
                        @if ($errors->has('firstLastName'))
                        <div class="invalid-feedback">
                            {{ $errors->first('firstLastName') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="secondLastName">Apellido Materno</label>
                        <input type="text" class="form-control {{$errors->has('secondLastName') ? 'is-invalid' :'' }}"
                            value="{{old('secondLastName', !empty($teacher) ? $teacher->user->secondLastName : '' )}}"
                            name="secondLastName" id="secondLastName">
                        @if ($errors->has('secondLastName'))
                        <div class="invalid-feedback">
                            {{ $errors->first('secondLastName') }}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="birthday">Fecha de Nacimiento:</label>
                        <input name="birthday" type="date"
                            class="form-control {{$errors->has('birthday') ? 'is-invalid' :'' }}"
                            value="{{old('birthday', !empty($teacher) ? $teacher->user->birthday : '' )}}"
                            id="birthday">
                        @if ($errors->has('birthday'))
                        <div class="invalid-feedback">
                            {{ $errors->first('birthday') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="curp">CURP</label>
                        <input type="text" class="form-control {{$errors->has('curp') ? 'is-invalid' :'' }}"
                            value="{{old('curp', !empty($teacher) ? $teacher->user->curp : '' )}}" name="curp"
                            id="curp">
                        @if ($errors->has('curp'))
                        <div class="invalid-feedback">
                            {{ $errors->first('curp') }}
                        </div>
                        @endif
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-9 col-6">
                        <label for="address">Dirección</label>
                        <input type="text" class="form-control {{$errors->has('address') ? 'is-invalid' :'' }}"
                            value="{{old('address', !empty($teacher) ? $teacher->user->address : '' )}}" name="address"
                            id="address">
                        @if ($errors->has('address'))
                        <div class="invalid-feedback">
                            {{ $errors->first('address') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-3 col-6">
                        <label for="zipCode">Código Postal</label>
                        <input type="text" class="form-control {{$errors->has('zipCode') ? 'is-invalid' :'' }}"
                            value="{{old('zipCode', !empty($teacher) ? $teacher->user->zipCode : '' )}}" name="zipCode"
                            id="zipCode">
                        @if ($errors->has('zipCode'))
                        <div class="invalid-feedback">
                            {{ $errors->first('zipCode') }}
                        </div>
                        @endif
                    </div>
                </div>
                <h4 class="green-epca mb-3">Información Contacto</h4>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="phone">Teléfono</label>
                        <input type="tel" class="form-control {{$errors->has('phone') ? 'is-invalid' :'' }}"
                            value="{{old('phone', !empty($teacher) ? $teacher->user->phone : '' )}}" name="phone"
                            id="phone">
                        @if ($errors->has('phone'))
                        <div class="invalid-feedback">
                            {{ $errors->first('phone') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control {{$errors->has('email') ? 'is-invalid' :'' }}"
                            value="{{old('email', !empty($teacher) ? $teacher->user->email : '' )}}" name="email"
                            id="email">
                        @if ($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5 d-flex align-items-stretch grid-margin">
        <div class="row flex-grow">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="green-epca mb-3">Información Profesor</h4>
                        <div class="form-group">
                            <label for="start_date">Fecha de Ingreso:</label>
                            <input type="date" class="form-control {{$errors->has('start_date') ? 'is-invalid' :'' }}"
                                value="{{old('start_date', !empty($teacher) ? $teacher->start_date : '' )}}"
                                name="start_date" id="start_date">
                            @if ($errors->has('start_date'))
                            <div class="invalid-feedback">
                                {{ $errors->first('start_date') }}
                            </div>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('profession_id') ? 'is-invalid' :'' }}">
                            <label for="profession_id">Profesión:</label>
                            <select id="profession_id"
                                class="form-control {{$errors->has('profession_id') ? 'is-invalid' :'' }}"
                                name="profession_id">
                                <option value="">Selecciona una profesión</option>
                                @foreach ($professions as $profession)
                                <option value="{{ $profession->id }}"
                                    {{!empty($teacher) ? (($profession->id == $teacher->profession_id) ? 'selected' : '') : '' }}>
                                    {{ $profession->name }}
                                </option>
                                @endforeach
                            </select>
                            @if ($errors->has('profession_id'))
                            <div class="invalid-feedback">
                                {{ $errors->first('profession_id') }}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="username">Cédula Profesional (Nombre Usuario) </label>
                            <input type="text" class="form-control {{$errors->has('username') ? 'is-invalid' :'' }}"
                                value="{{old('username', !empty($teacher) ? $teacher->user->username : '' )}}"
                                name="username" id="username">
                            @if ($errors->has('username'))
                            <div class="invalid-feedback">
                                {{ $errors->first('username') }}
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password">Contraseña </label>
                            <input type="password" class="form-control {{$errors->has('password') ? 'is-invalid' :'' }}"
                                name="password" id="password">
                            @if ($errors->has('password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                            @endif
                        </div>

                        @if (!Request::is('profesores/crear'))
                        <div class="form-group">
                            <div class="form-check form-check-flat">
                                <label class="form-check-label">
                                    <input type="checkbox" name="status" id="status" class="form-check-input"
                                        {{!empty($teacher) ? ($teacher->user->status ? 'checked="checked"' : ''):''}}>
                                    Estatus <i class="input-helper"></i></label>
                            </div>
                        </div>
                        @endif

                        <button type="submit" class="btn btn-epca py-2  mr-2">
                            Guardar <i class="fas fa-check green-epca"></i>
                        </button>
                        <a href="{{route('profesores.index')}}" class='btn btn-secondary py-2 btn-fw'>
                            <i class="fas fa-chevron-left blue-epca"></i>Cancelar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>