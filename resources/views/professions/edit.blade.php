@extends('layouts._layout')
@section('title', 'Editar Profesión')

@section('content')
    <form enctype="multipart/form-data" class="needs-validation" method="POST"
          action="{{route('profesiones.update',$profession)}}" autocomplete="off" role="form">
        @csrf
        @method('PUT')
        @include('professions.partials._form')
    </form>
@endsection
