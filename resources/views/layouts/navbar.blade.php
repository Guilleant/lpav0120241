{{-- <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid"> --}}
{{-- <a class="navbar-brand" href="#">
            <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24"
                class="d-inline-block align-text-top">
            {{ config('app.name', 'Mi Aplicación') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> --}}
{{-- <div class="collapse navbar-collapse" id="navbarNav"> --}}
<ul class="navbar-nav me-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" v-pre>
            Básicos
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('lenguajes.index') }}">Lenguajes</a></li>
            <li><a class="dropdown-item" href="{{ route('habilidades.index') }}">Habilidades</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="{{ route('integrantes.index') }}">Integrantes</a></li>
        </ul>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Asignaciones
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li>
                <a class="dropdown-item" href="{{ route('integrantelenguajes.index') }}">Lenguajes a
                    Integrantes</a>
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('habilidades.index') }}">Habilidades a
                    Integrantes</a>
            </li>
        </ul>
    </li>
    @can('seguridad')
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                Seguridad
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('lenguajes.index') }}">Roles</a></li>
                <li><a class="dropdown-item" href="{{ route('habilidades.index') }}">Permisos</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="{{ route('integrantes.index') }}">Asignar Permisos a Roles</a></li>
                <li><a class="dropdown-item" href="{{ route('integrantes.index') }}">Asignar Roles a Usuarios</a></li>
            </ul>
        </li>
    @endcan
</ul>
{{-- </div> --}}
{{-- </div>
</nav> --}}
