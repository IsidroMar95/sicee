@extends('layouts._layout')
@section('title', 'Alumnos')
@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('vendors/datatables/dataTables.bootstrap4.min.css')}}">
@endpush
@section('content')


    <div class="row">
        <div class="col-md-12">
            @if (session()->has('info'))
                <div class="alert alert-success" role="alert">
                    <strong>Muy bien.</strong> {{session('info')}}
                </div>
            @endif
        </div>
        <div class="col-md-12 grid-margin">
            @if (Auth::user()->hasRole('Admin'))
                <div class="d-flex justify-content-end">
                    <a href="{{route('alumnos.create')}}" role="button"
                       class="btn btn-md btn-epca mr-2 d-flex align-items-center">
                        <i class="mdi mdi-plus green-epca"></i>Agregar Alumno
                    </a>
                    <div class="dropdown toolbar-item">
                        <button class="btn btn-md btn-secondary dropdown-toggle" type="button" id="dropdownexport"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Exportar
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownexport" x-placement="bottom-start"
                             style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 33px, 0px);">
                            <a class="dropdown-item" href="#">Exportar como PDF</a>
                            <a class="dropdown-item" href="#">Export como Excel</a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-titleSection mb-3">
                        Alumnos <i class="fas fa-user-graduate fa-sm"></i>
                    </h2>
                    <div id="order-listing_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="table-responsive">
                                    <table id="data_table" class="table dataTable no-footer mt-5" role="grid"
                                           aria-describedby="order-listing_info">
                                        <thead>
                                        <tr role="row">
                                            <th>
                                                Nombre
                                            </th>
                                            <th>
                                                Apellidos
                                            </th>
                                            @if(Auth::user()->hasRole('Admin'))
                                                <th>
                                                    Teléfono
                                                </th>
                                            @endif
                                            <th>
                                                Email
                                            </th>
                                            {{--                                            <th>--}}
                                            {{--                                                Profesión--}}
                                            {{--                                            </th>--}}
                                            @if (Auth::user()->hasRole('Admin'))
                                                <th>
                                                    Estatus
                                                </th>
                                            @endif
                                            <th>
                                                Acciones
                                            </th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($students as $student)
                                            <tr role="row" class="odd">
                                                <td>{{$student->user->name.' '}}{{(!empty($student->user->middleName) ? $student->user->middleName : '')}}
                                                </td>
                                                <td>{{$student->user->firstLastName.' '.$student->user->secondLastName}}
                                                </td>
                                                @if (Auth::user()->hasRole('Admin'))
                                                    <td>{{$student->user->phone}}</td>
                                                @endif
                                                <td>{{$student->user->email}}</td>
                                                @if (Auth::user()->hasRole('Admin'))
                                                    <td>
                                                        <label
                                                            class="badge badge-inverse-{{$student->user->status=== 1 ? 'success':'danger'}}">
                                                            {{$student->user->status=== 1 ? 'Activo':'Inactivo'}}
                                                        </label>
                                                    </td>
                                                @endif
                                                <td>
                                                    <a href="" class='btn btn-option'
                                                       style='background-color:transparent;'>
                                                        <i class="fas fa-eye mr-0"></i>
                                                    </a>
                                                    @if (Auth::user()->hasRole('Admin'))
                                                        <a href="{{route('alumnos.edit',$student)}}"
                                                           class='btn btn-option' style='background-color:transparent;'>
                                                            <i class="fas fa-pencil-alt mr-0"></i>
                                                        </a>
                                                        <button onclick="deleteData({{$student->id}})"
                                                                class='btn btn-option'
                                                                style='background-color:transparent;'
                                                                data-toggle="modal"
                                                                data-target="#deleteModal">
                                                            <i class="fas fa-times mr-0"></i>
                                                        </button>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    Modal Delete Course--}}
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
         aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Eliminar Registro?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" id="deleteForm" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        Está acción es irreversible, borrarás el registro de forma permanente.
                        <input type="hidden" name="profession_id" id="prof_id" value="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No, mantener el registro.
                        </button>
                        <button type="submit" class="btn btn-danger">
                            Si, eliminar registro.
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--Modal--}}
@endsection


@push('optional_scripts')
    <script src="{{ asset('vendors/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#data_table').dataTable({
                "ordering": true,
                "language": {
                    "url": "{{ asset('vendors/datatables/Spanish.json') }}",
                },
                "pageLength": 10,

            });
        });
        window.setTimeout(function () {
            $(".alert-success").fadeTo(500, 0).slideUp(500, function () {
                $(this).remove();
            });
        }, 2500);

        function deleteData(studentId) {
            let id = studentId;
            let url = '{{ route("alumnos.destroy", ":id") }}';
            url = url.replace(':id', id);
            $("#deleteForm").attr('action', url);
        }

        function formSubmit() {
            $("#deleteForm").submit();
        }
    </script>
@endpush
