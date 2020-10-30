@extends('layouts.main')
@section('content-job')
<!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center" data-background="{{ asset('front/img/hero/image.jpg') }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="hero__caption">
                                    <h1>Bolsa de trabajo <strong>Morelia</strong> </h1>
                                </div>
                            </div>
                        </div>
                        <!-- Search Box -->
                         @livewire('contact-search-bar')
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- Featured_job_start -->
        <section class="featured-job-area feature-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Empleos disponibles</span>
                            <h2>Últimos empleos agregados</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <!-- single-job-content -->
                        @include('ui.listadoVacantas')
                        <!-- single-job-content -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured_job_end -->

        <!-- Online CV Area Start -->
        <div class="online-cv cv-bg section-overly pt-90 pb-120" data-background="{{ asset('front/img/gallery/cv_bg.jpg') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="cv-caption text-center">
                            <p class="pera1">Herramientas disponibles</p>
                            <p class="pera2">¡ Marque la diferencia con su curriculum !</p>
                            <a href="https://zety.es/blog/plantillas-de-curriculum-vitae-para-rellenar-gratis-en-pdf" class="border-btn2 border-btn4" target="_blank">Hacer mi curriculum</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Online CV Area End-->
        <!-- How  Apply Process Start-->
        <div class="apply-process-area apply-bg pt-150 pb-150" data-background="{{ asset('front/img/gallery/how-applybg.png') }}">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle white-text text-center">
                            <span>Aplicar proceso</span>
                            <h2>Cómo funciona</h2>
                        </div>
                    </div>
                </div>
                <!-- Apply Process Caption -->
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-search"></span>
                            </div>
                            <div class="process-cap">
                                <h5>1. Busca un trabajo</h5>
                                <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut
                                    laborea.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-curriculum-vitae"></span>
                            </div>
                            <div class="process-cap">
                                <h5>2. Aplica al trabajo</h5>
                                <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut
                                    laborea.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="process-cap">
                                <h5>3. Consigue tu trabajo</h5>
                                <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut
                                    laborea.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- How  Apply Process End-->
        <!-- Support Company Start-->
        <div class="support-company-area support-padding fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="right-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2">
                                <span>Qué estamos haciendo</span>
                                <h2>Muchas personas talentosas estan buscando trabajo</h2>
                            </div>
                            <div class="support-caption">
                                <p class="pera-top">Mollit anim laborum duis au dolor in voluptate velit ess cillum
                                    dolore eu lore dsu quality mollit anim laborumuis au dolor in voluptate velit
                                    cillum.</p>
                                <p>Mollit anim laborum.Duis aute irufg dhjkolohr in re voluptate velit esscillumlore eu
                                    quife nrulla parihatur. Excghcepteur signjnt occa cupidatat non inulpadeserunt
                                    mollit aboru. temnthp incididbnt ut labore mollit anim laborum suis aute.</p>
                                <a href="{{ route('register') }}" class="btn post-btn">Publicar un trabajo</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="support-location-img">
                            <img src="{{ asset('front/img/hero/since2.png') }}" alt="Sefeco Since">
                            <div class="support-img-cap text-center">
                                <p>Desde</p>
                                <span>2020</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Support Company End-->

        @if( Session::has('vacante-guardada-ok'))
        <script>
            $("body").overhang({
                    type: "success",
                    message: "¡La vacante ha sido guardada exitosamente!",
                    closeConfirm: false,
                    custom: true,
                    primary: "#2c3e50",
                    accent: "#F4B350"
                });
        </script>
        @endif
@endsection
