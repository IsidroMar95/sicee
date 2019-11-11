<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{--   Required meta tags--}}
    <meta charset="UTF-8">
    <meta name="Autor" content="Sitio creado por Isidro Martínez">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#0A3759">

    <title>SICEE - @yield('title')</title>
    {{--    css--}}
    <link rel="stylesheet" href="{{asset('vendors/iconfonts/mdi/css/materialdesignicons.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/iconfonts/ionicons/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/iconfonts/typicons/src/font/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/iconfonts/font-awesome/all.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.addons.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700&display=swap">
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">

    @stack('stylesheets')
    {{--    endcss--}}
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />
</head>

<body>
    <div class="container-scroller">
        {{--     partial:partials/_navbar.html--}}
        @include('partials._navbar')
        <div class="container-fluid page-body-wrapper">
            {{--        partial:partials/_sidebar.html--}}
            @include('partials._sidebar')
            {{--        partial --}}
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                {{--            content-wrapper ends--}}
                <footer class="footer">
                    <div class="container-fluid clearfix">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">
                            Copyright © 2019
                            <a href="https://www.epca.edu.mx/" target="_blank">EPCA</a>.Todos los derechos reservados.
                        </span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
                            Made With <i class="mdi mdi-heart text-danger"></i>
                        </span>
                    </div>
                </footer>
                {{--            partial--}}
            </div>
            {{--        main-panel ends --}}
        </div>
        {{--    page-body-wrapper ends--}}
    </div>
    {{--container-scroller--}}
    {{--js --}}
    <script src="{{asset('vendors/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('vendors/js/vendor.bundle.addons.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/off-canvas.js')}}"></script>
    <script src="{{asset('js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('js/misc.js')}}"></script>
    @stack('optional_scripts')

    {{-- endjs --}}
</body>

</html>
