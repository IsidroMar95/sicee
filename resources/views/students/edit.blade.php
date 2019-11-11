@extends('layouts._layout')
@section('title', 'Editar Alumno')
@section('content')
    <form enctype="multipart/form-data" class="needs-validation" method="POST"
          action="{{route('alumnos.update',$student)}}" autocomplete="off" role="form">
        @csrf
        @method('PUT')
        @include('students.partials._form')
    </form>
@endsection
