@extends('layouts._layout')
@section('title', 'Agregar Carrera')

@section('content')
    <form enctype="multipart/form-data" class="needs-validation" method="POST" action="{{route('carreras.store')}}"
          autocomplete="off" role="form">
        @csrf
        @include('careers.partials._form')
    </form>
@endsection

