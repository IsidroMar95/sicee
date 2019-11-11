@extends('layouts._layout')
@section('title', 'Agregar Materia')
@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('vendors/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendors/select2/select2-bootstrap.min.css')}}">
@endpush
@section('content')
    <form enctype="multipart/form-data" class="needs-validation" method="POST" action="{{route('materias.store')}}"
          autocomplete="off" role="form">
        @csrf
        @include('subjects.partials._form')
    </form>
@endsection
@push('optional_scripts')
    <script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
    <script src="{{ asset('vendors/inputmask/jquery.inputmask.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#career_id').select2();
            $('#grade_level_id').select2();
            $('#school_period_id').select2();
            $('#teacher_id').select2();
        });
    </script>
@endpush
