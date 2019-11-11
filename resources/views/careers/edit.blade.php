@extends('layouts._layout')
@section('title', 'Editar Carrera')

@section('content')
    <form enctype="multipart/form-data" class="needs-validation" method="POST"
          action="{{route('carreras.update',$career)}}" autocomplete="off" role="form">
        @csrf
        @method('PUT')
        @include('careers.partials._form')
    </form>
@endsection
