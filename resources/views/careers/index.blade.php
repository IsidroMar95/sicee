@extends('layouts._layout')
@section('title', 'Carreras')
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
        <div class="col-md-12">
            @if (session()->has('error'))
                <div class="alert alert-danger" role="alert">
                    <strong>Ops¡</strong> {{session('error')}}
                </div>
            @endif
        </div>

        <div class="col-md-12 grid-margin">
            @if (Auth::user()->hasRole('Admin'))
                <div class="d-flex justify-content-end">
                    <a href="{{route('carreras.create')}}" role="button"
                       class="btn btn-md btn-epca mr-2 d-flex align-items-center">
                        <i class="mdi mdi-plus green-epca"></i>Agregar Carrera
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
                        Carreras <i class="fas fa-cog sm"></i>
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
                                                Carrera
                                            </th>
                                            <th>
                                                N° de Acuerdo
                                            </th>
                                            <th>
                                                Fecha de Registro
                                            </th>
                                            @if (Auth::user()->hasRole('Admin'))
                                                <th>
                                                    Estatus
                                                </th>

                                            <th>
                                                Acciones
                                            </th>
                                            @endif

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($careers as $career)
                                            <tr role="row" class="odd">
                                                <td>{{$career->name}}</td>
                                                <td>{{$career->agreementNumber}}</td>
                                                <td>{{$career->start_date->locale('es_MX')->isoFormat('LL')}}</td>
                                                @if (Auth::user()->hasRole('Admin'))
                                                    <td>
                                                        <label
                                                            class="badge badge-inverse-{{$career->status=== 1 ? 'success':'danger'}}">
                                                            {{$career->status=== 1 ? 'Activo':'Inactivo'}}
                                                        </label>
                                                    </td>

                                                <td>
                                                    <a href="" class='btn btn-option'
                                                       style='background-color:transparent;'>
                                                        <i class="fas fa-eye mr-0"></i>
                                                    </a>

                                                        <a href="{{route('carreras.edit',$career)}}"
                                                           class='btn btn-option'
                                                           style='background-color:transparent;'>
                                                            <i class="fas fa-pencil-alt mr-0"></i>
                                                        </a>
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
            $(".alert").fadeTo(600, 0).slideUp(600, function () {
                $(this).remove();
            });
        }, 2500);
    </script>
@endpush
