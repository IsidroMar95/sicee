<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="Autor" content="Sitio creado por Isidro Martínez">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#0A3759">

    <title>SICCE - Entrar</title>
    <!-- css -->
    <link rel="stylesheet" href="{{asset('vendors/iconfonts/mdi/css/materialdesignicons.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700&display=swap">
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">

    <!-- endcss -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}"/>
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper auth p-0 theme-two">
            <div class="row d-flex align-items-stretch">
                <div class="col-md-4 banner-section d-none d-md-flex align-items-stretch justify-content-center">
                    <div class="slide-content bg-1"></div>
                </div>
                <div class="col-12 col-md-8 h-100 bg-white">
                    <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">
                        <form autocomplete="off" method="POST" action="{{route('login')}}">
                            @csrf
                            <h3 class="login-title mr-auto">SICEE</h3>
                            <p class="login-subtitle mb-5 mr-auto">Sistema Integral de Control Escolar EPCA</p>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text">
                                              <i class="mdi mdi-account-outline"></i>
                                            </span>
                                    </div>
                                    <input type="text" placeholder="Usuario"
                                           class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}"
                                           name="username" value="{{ old('username') }}">
                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                       {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-lock-outline"></i>
                                            </span>
                                    </div>
                                    <input type="password"
                                           class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           placeholder="Contraseña" name="password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                       {{ $message }}
                                    </span>
                                    @enderror

                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-epca">Entrar</button>
                            </div>
                            <div class="wrapper mt-5 text-gray">
                                <p class="footer-text">Copyright © 2019. EPCA Todos los derechos reservados.</p>
                                <ul class="auth-footer text-gray">
                                    <li>
                                        <a href="#">Terminos y Condiciones</a>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>


</body>

</html>
