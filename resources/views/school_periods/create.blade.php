@extends('layouts._layout')
@section('title', 'Agregar Periodo Escolar')
@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('vendors/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendors/select2/select2-bootstrap.min.css')}}">
@endpush
@section('content')
    <form enctype="multipart/form-data" class="needs-validation" method="POST" action="{{route('periodos-escolares.store')}}"
          autocomplete="off" role="form">
        @csrf
        @include('school_periods.partials._form')
    </form>
@endsection
@push('optional_scripts')
    <script src="{{ asset('vendors/inputmask/jquery.inputmask.js') }}"></script>
    <script>
        $(":input").inputmask();
        $(".year").inputmask("y", {
            alias: "date",
            placeholder: "YYYY",
            onincomplete: function(){
                $(this).val('');
            },
            yearrange: { minyear: 2010, maxyear: (new Date()).getFullYear() }});

    </script>
@endpush
