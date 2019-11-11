@extends('layouts._layout')
@section('title', 'Agregar Profesión')

@section('content')
    <form enctype="multipart/form-data" class="needs-validation" method="POST" action="{{route('profesiones.store')}}"
          autocomplete="off" role="form">
        @csrf
        @include('professions.partials._form')
    </form>
@endsection

