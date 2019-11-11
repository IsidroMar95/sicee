@extends('layouts._layout')
@section('title', 'Agregar Alumno')
@section('content')
    <form enctype="multipart/form-data" class="needs-validation" method="POST" action="{{route('alumnos.store')}}"
          autocomplete="off" role="form">
        @csrf
        @include('students.partials._form')
    </form>
@endsection
