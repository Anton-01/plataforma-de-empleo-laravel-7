<div class="header-area header-transparrent">
    <div class="headder-top header-sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-2">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('front/img/logo/logo-sefeco.png') }}" alt="sedeco" height="50px"></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="menu-wrapper">
                        <!-- Main-menu -->
                        <div class="main-menu">
                            <nav class="d-none d-lg-block">
                                <ul id="navigation">
                                    <li><a href="{{ url('/') }}">Inicio</a></li>
                                    <li><a href="{{ route('trabajos') }}">Encuentra un trabajo </a></li>
                                    <li><a href="{{ route('contacto') }}">Contacto</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header-btn -->
                        <div class="header-btn d-none f-right d-lg-block">
                            <a href="{{ route('register') }}" class="btn head-btn1">{{ __('Register') }}</a>
                            <a href="{{ route('login') }}" class="btn head-btn2">{{ __('Login') }}</a>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
</div>
