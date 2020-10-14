<div class="d-lg-none">
    <button type="button" class="btn btn-block btn-secondary d-flex justify-content-between align-items-center"
        data-toggle="class-toggle" data-target="#horizontal-navigation-hover-normal-dark" data-class="d-none">
       Sefeco
        <i class="fa fa-bars"></i>
    </button>
</div>
<div id="horizontal-navigation-hover-normal-dark" class="d-none d-lg-block mt-2 mt-lg-0">
    <ul class="nav-main nav-main-horizontal nav-main-hover nav-main-dark">
        @if(Auth::user()->rol == 'administrador')
        <li class="nav-main-item">
            <a class="nav-main-link active" href="{{ route('vacantes.index') }}">
                <i class="nav-main-link-icon fas fa-toolbox"></i>
                <span class="nav-main-link-name">Categorías</span>
            </a>
        </li>

        <li class="nav-main-item">
            <a class="nav-main-link active" href="{{ route('vacantes.index') }}">
                <i class="nav-main-link-icon fas fa-toolbox"></i>
                <span class="nav-main-link-name">Salarios</span>
            </a>
        </li>

        <li class="nav-main-item">
            <a class="nav-main-link active" href="{{ route('vacantes.index') }}">
                <i class="nav-main-link-icon fas fa-toolbox"></i>
                <span class="nav-main-link-name">Experiencia</span>
            </a>
        </li>

        <li class="nav-main-item">
            <a class="nav-main-link active" href="{{ route('vacantes.index') }}">
                <i class="nav-main-link-icon fas fa-toolbox"></i>
                <span class="nav-main-link-name">Ubicaciones</span>
            </a>
        </li>
        @else
                <li class="nav-main-item">
                    <a class="nav-main-link active" href="{{ route('vacantes.index') }}">
                        <i class="nav-main-link-icon fas fa-toolbox"></i>
                        <span class="nav-main-link-name">Administratar vacantes</span>
                    </a>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link active" href="{{ route('vacantes.create') }}">
                        <i class="nav-main-link-icon fas fa-plus-circle"></i>
                        <span class="nav-main-link-name">Nueva Vacante</span>
                    </a>
                </li>
        @endif
    </ul>
</div>
