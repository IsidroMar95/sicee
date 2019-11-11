<div class="row">
    <div class="col-12 d-flex align-items-stretch grid-margin">
        <div class="row flex-grow">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="green-epca mb-3">Materia</h4>
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' :'' }}"
                                   value="{{old('name', !empty($subject) ? $subject->name : '' )}}"
                                   name="name" id="name">
                            @if ($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6 {{$errors->has('career_id') ? 'is-invalid' :'' }}">
                                <label for="career_id">Carrera:</label>
                                <select id="career_id"
                                        class="form-control {{$errors->has('career_id') ? 'is-invalid' :'' }}"
                                        name="career_id">
                                    <option value="">Selecciona una carrera</option>
                                    @foreach ($careers as $career)
                                        <option value="{{ $career->id }}"
                                            {{!empty($subject) ? (($career->id == $subject->career_id) ? 'selected' : '') : '' }}>
                                            {{ $career->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('career_id'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('career_id') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group col-6 {{$errors->has('teacher_id') ? 'is-invalid' :'' }}">
                                <label for="teacher_id">Profesor:</label>
                                <select id="teacher_id"
                                        class="form-control {{$errors->has('teacher_id') ? 'is-invalid' :'' }}"
                                        name="teacher_id">
                                    <option value="">Selecciona una Profesor</option>
                                    @foreach ($teachers as $teacher)
                                        <option value="{{ $teacher->id }}"
                                            {{!empty($subject) ? (($teacher->id == $subject->teacher_id) ? 'selected' : '') : '' }}>
                                            {{$teacher->user->name.' '}}{{(!empty($teacher->user->middleName) ? $teacher->user->middleName : '')}}
                                            {{$teacher->user->firstLastName.' '}}
                                            {{$teacher->user->secondLastName.' '}}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('teacher_id'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('teacher_id') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6 {{$errors->has('grade_level_id') ? 'is-invalid' :'' }}">
                                <label for="grade_level_id">Cuatrimestre:</label>
                                <select id="grade_level_id"
                                        class="form-control {{$errors->has('grade_level_id') ? 'is-invalid' :'' }}"
                                        name="grade_level_id">
                                    <option value="">Selecciona un cuatrimestre</option>
                                    @foreach ($gradeLevels as $gradeLevel)
                                        <option value="{{ $gradeLevel->id }}"
                                            {{!empty($subject) ? (($gradeLevel->id == $subject->grade_level_id) ? 'selected' : '') : '' }}>
                                            {{ $gradeLevel->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('career_id'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('career_id') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group col-6 {{$errors->has('school_period_id') ? 'is-invalid' :'' }}">
                                <label for="school_period_id">Periodo Escolar:</label>
                                <select id="school_period_id"
                                        class="form-control {{$errors->has('school_period_id') ? 'is-invalid' :'' }}"
                                        name="school_period_id">
                                    <option value="">Selecciona un Periodo</option>
                                    @foreach ($schoolPeriods as $schoolPeriod)
                                        <option value="{{ $schoolPeriod->id }}"
                                            {{!empty($subject) ? (($schoolPeriod->id == $subject->school_period_id) ? 'selected' : '') : '' }}>
                                            {{ $schoolPeriod->description.' '.$schoolPeriod->year }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('career_id'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('career_id') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        @if (!Request::is('materias/crear'))
                            <div class="form-group">
                                <div class="form-check form-check-flat">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="status" id="status"
                                               class="form-check-input" {{!empty($subject) ? ($subject->status ? 'checked="checked"' : ''):''}} >
                                        Estatus <i class="input-helper"></i></label>
                                </div>
                            </div>
                        @endif

                        <button type="submit" class="btn btn-epca py-2  mr-2">
                            Guardar <i class="fas fa-check green-epca"></i>
                        </button>
                        <a href="{{route('materias.index')}}" class='btn btn-secondary py-2 btn-fw'>
                            <i class="fas fa-chevron-left blue-epca"></i>Cancelar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
