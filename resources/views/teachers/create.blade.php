@extends('layouts._layout')
@section('title', 'Agregar Profesor')
@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('vendors/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendors/select2/select2-bootstrap.min.css')}}">
@endpush
@section('content')
    <form enctype="multipart/form-data" class="needs-validation" method="POST" action="{{route('profesores.store')}}"
          autocomplete="off" role="form">
        @csrf
        @include('teachers.partials._form')
    </form>
@endsection
@push('optional_scripts')
    <script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
    <script src="{{ asset('vendors/inputmask/jquery.inputmask.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#profession_id').select2();
        });
    </script>
@endpush
