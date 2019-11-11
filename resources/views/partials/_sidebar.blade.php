<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle" src="{{asset('images/faces/profile.jpg')}}" alt="profile image">
                </div>
                <div class="text-wrapper">
                    <p class="profile-name">
                        @auth
                        {{Auth::user()->name.' '.Auth::user()->firstLastName}}
                        @endauth
                    </p>
                    <p class="designation">
                        {{auth::user()->roles->first()->name}}
                    </p>
                </div>
            </div>

        </li>
        <li class="nav-item nav-category">Opciones</li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard')}}">
                <i class="menu-icon fas fa-home"></i>
                <span class="menu-title">Dashboard</span>

            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#menuCicloEscolar" aria-expanded="false"
                aria-controls="menuCicloEscolar">
                <i class="menu-icon fas fa-bookmark"></i>
                <span class="menu-title">Ciclo Escolar</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="menuCicloEscolar">
                <ul class="nav flex-column sub-menu">
                    @if (Auth::user()->hasRole('Admin'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('periodos-escolares.index')}}">Periodo Escolar</a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('carreras.index')}}">Carreras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Horarios</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item {{ request()->is('profesores/*','profesiones/*') ? 'active' : '' }} ">
            <a class="nav-link" data-toggle="collapse" href="#menuProfesor"
                aria-expanded="{{ request()->is('profesores/*','profesiones/*') ? 'true' : 'false' }}"
                aria-controls="menuProfesor">
                <i class="menu-icon fas fa-chalkboard-teacher"></i>
                <span class="menu-title">Profesores</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse {{ request()->is('profesores/*','profesiones/*') ? 'show' : '' }}" id="menuProfesor">
                <ul class="nav flex-column sub-menu">
                    @can('profesores.index')
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('profesores.index')}}">Profesores</a>
                    </li>
                    @endcan
                    @can('profesiones.index')
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('profesiones.index')}}">Profesiones</a>
                    </li>
                    @endcan
                </ul>
            </div>
        </li>
        @can('alumnos.index')
        <li class="nav-item">
            <a class="nav-link" href="{{route('alumnos.index')}}">
                <i class="menu-icon fas fa-user-graduate"></i>
                <span class="menu-title">Alumnos</span>
            </a>
        </li>
        @endcan
        <li class="nav-item">
            <a class="nav-link" href="{{route('materias.index')}}">
                <i class="menu-icon fas fa-book"></i>
                <span class="menu-title">Materias</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="menu-icon fas fa-list-ol"></i>
                <span class="menu-title">Calificaciones</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#menuUsuarios" aria-expanded="false"
                aria-controls="menuUsuarios">
                <i class="menu-icon fas fa-user-shield"></i>
                <span class="menu-title">Usuarios</span>
                <i class="menu-arrow"></i>
            </a>

            <div class="collapse" id="menuUsuarios">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="">Roles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Permisos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Usuarios</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="menu-icon fas fa-file-alt"></i>
                <span class="menu-title">Formatos</span>
            </a>
        </li>


    </ul>
</nav>
