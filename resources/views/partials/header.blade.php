<header id="page-header">
    <div class="content-header">
        <div class="d-flex align-items-center">
            <a class="font-w600 text-dual mr-3" href="{{ route('vacantes.index') }}">
                <i class="fa fa-circle-notch text-primary"></i>
                <span class="font-w700 font-size-h5">Sefeco</span>
            </a>

            <div class="dropdown d-inline-block mr-2">
                <a href="{{ route('notificaciones') }}" class="btn btn-sm btn-dual">
                    <i class="si si-bell"></i>
                    <span class="badge badge-primary badge-pill">{{ Auth::user()->unreadNotifications->count() }}</span>
                </a>
            </div>
        </div>
        @include('partials.contenido_menu')
        <div class="d-flex align-items-center">

            <!-- User Dropdown -->
            <div class="dropdown d-inline-block ml-2">
                <button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img class="rounded" src="{{ asset('assets/media/avatars/social.png') }}" alt="sefeco avatar"
                        style="width: 18px;">
                    <span class="d-none d-sm-inline-block ml-1">{{ Auth::user()->name }}</span>
                    <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right p-0 border-0 font-size-sm"
                    aria-labelledby="page-header-user-dropdown">
                    <div class="p-3 text-center bg-primary">
                        <img class="img-avatar img-avatar48 img-avatar-thumb"
                            src="{{ asset('assets/media/avatars/social.png') }}" alt="sefeco avatar">
                    </div>
                    <div class="p-2">
                        <h5 class="dropdown-header text-uppercase">Acciones</h5>
                        <a href="{{ route('logout') }}"
                            class="dropdown-item d-flex align-items-center justify-content-between" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <span>Cerrar Sesión</span>
                            <i class="si si-logout ml-1"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <!-- END User Dropdown -->
        </div>
    </div>
</header>
