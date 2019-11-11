<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="{{route('dashboard')}}">
            <img src="{{asset('images/logo.svg')}}" alt="logo"/>
        </a>
        <a class="navbar-brand brand-logo-mini" href="{{route('dashboard')}}">
            <img src="{{asset('images/logo-mini.svg')}}" alt="logo"/>
        </a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav">
        </ul>
        <form class="mr-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div>
                    <input type="search" class="form-control form-control-lg"
                           placeholder="Alumnos, materias...">
                </div>
            </div>
        </form>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown d-xl-inline-block user-dropdown">
                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown"
                   aria-expanded="false">
                    <img class="img-xs rounded-circle" src="{{asset('images/faces/profile.jpg')}}"
                         alt="Profile image">
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <div class="dropdown-header text-center">
                        <img class="img-md rounded-circle" src="{{asset('images/faces/profile.jpg')}}"
                             alt="Profile image">
                        <p class="mb-1 mt-3 font-weight-semibold">
                            @auth
                                {{Auth::user()->name.' '.Auth::user()->firstLastName}}
                            @endauth
                        </p>
                        <p class="font-weight-light text-muted mb-0">
                            @auth
                                {{Auth::user()->email}}
                            @endauth
                        </p>
                    </div>
                    <a class="dropdown-item" href="#">Ajustes de la Cuenta<i
                            class="dropdown-item-icon ti-dashboard"></i></a>
                    <a class="dropdown-item" href="{{ route('logout') }}">Cerrar Sesión<i
                            class="dropdown-item-icon ti-power-off"></i></a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
