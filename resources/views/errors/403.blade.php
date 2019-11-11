<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="Autor" content="Sitio creado por Isidro Martínez">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#0A3759">

    <title>SICCE - Acceso No Autorizado</title>
    <!-- css -->
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">

    <!-- endcss -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />
</head>

<body>
<div class="container d-flex justify-content-center align-items-center" style="height: 100vh; min-height: 500px">
    <div class="text-center">
        <img class="img-fluid img-error403" src="{{asset('images/403.png')}}" alt="">
        <h1 class="error-title">¡ACCESO NO AUTORIZADO!</h1>
        <p class="error-subtitle">No tienes permiso para visualizar la página que solicitaste.</p>
        <a href="{{route('dashboard')}}" class="btn btn-epca">&larr; Regresar al Inicio</a>
    </div>
</div>

</body>

</html>
