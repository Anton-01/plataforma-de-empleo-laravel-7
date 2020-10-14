@extends('layouts.main')
@section('styles')
<link rel="stylesheet" href="{{ asset('/css/plugins/lightbox.css') }}">
@endsection
@section('content-job')
<!-- Hero Area Start-->
<div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center"
        data-background="{{ asset('front/img/hero/acueducto_detail.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>{{ $vacante->titulo }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->
<!-- job post company Start -->
<div class="job-post-company pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-between">
            <!-- Left Content -->
            <div class="col-xl-7 col-lg-8">
                <!-- job single -->
                <div class="single-job-items mb-50">
                    <div class="job-items">
                        <div class="job-tittle">
                            <a href="#">
                                <h4>{{ $vacante->titulo }}</h4>
                            </a>
                            <ul>
                                <li>{{ $vacante->reclutador->name }}</li>
                                <li><i class="fas fa-map-marker-alt"></i>{{ $vacante->ubicacion->ubicacion }}</li>
                                <li>{{ $vacante->salario->salario }}</li>
                            </ul>
                            <p>Horario: {{ $vacante->horario }}</p>
                        </div>
                    </div>
                </div>
                <!-- job single End -->

                <div class="job-post-details">
                    <div class="post-details1 mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Descripción</h4>
                        </div>
                        <p>{!! $vacante->descripcion !!}</p>
                    </div>
                    <div class="post-details2  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Actividades</h4>
                        </div>
                        {!! $vacante->actividades !!}
                    </div>
                    <div class="post-details2  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Habilidades necesarias</h4>
                        </div>
                        {!! $vacante->habilidades !!}
                    </div>
                </div>

            </div>
            <!-- Right Content -->
            <div class="col-xl-4 col-lg-4">
                <div class="post-details3  mb-50">
                    <!-- Small Section Tittle -->
                    <div class="small-section-tittle">
                        <h4>Resumen del trabajo</h4>
                    </div>
                    <ul>
                        <li>Contacto : <span>{{ $vacante->reclutador->name }}</span></li>
                        <li>Publicado : <span>{{ $vacante->created_at->diffForHumans() }}</span></li>
                        <li>No. Plazas : <span>{{ $vacante->plazas }}</span></li>
                        <hr>
                        <li>Ubicación : <span>{{ $vacante->ubicacion->ubicacion }}</span></li>
                        <li>Categoría : <span>{{ $vacante->categoria->nombre }}</span></li>
                        <li>Experiencia : <span>{{ $vacante->experiencia->experiencia }}</span></li>
                        <li>Salario : <span>{{ $vacante->salario->salario }}</span></li>
                        <li>RFC : <span>{{ $vacante->rfc }}</span></li>
                        <hr>
                        <li>Sexo : <span>{{ $vacante->sexo }}</span></li>
                        <li>Rango de edad : <span>{{ $vacante->rango }}</span></li>
                        <li>Licencia de conducir : <span>{{ $vacante->licencia }}</span></li>
                        <li>Cartilla militar : <span>{{ $vacante->cartilla }}</span></li>
                    </ul>
                </div>
                <div class="post-details3  mb-50">
                    <!-- Small Section Tittle -->
                    <form action="{{ route('candidatos.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="small-section-tittle">
                            <h4>Contactar al reclutador</h4>
                        </div>

                        <div class="mt-10">
                            <label for="">Nombre</label>
                            <input type="text" name="nombre" placeholder="Tu nombre" class="single-input" value="{{ old('nombre') }}">

                            @error('nombre')
                            <div class="error-front">
                                <span class="block">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>

                        <div class="mt-10">
                            <label for="">Teléfono</label>
                            <input type="text" name="telefono" placeholder="Tu teléfono"  class="single-input" value="{{ old('telefono') }}">
                                @error('telefono')
                                <div class="error-front">
                                    <span class="block">{{ $message }}</span>
                                </div>
                                @enderror
                        </div>

                        <div class="mt-10">
                            <label for="">Correo electrónico: (opcional)</label>
                            <input type="email" name="correo" placeholder="Tu correo electrónico"   class="single-input" value="{{ old('correo') }}">
                                @error('correo')
                                <div class="error-front">
                                    <span class="block">{{ $message }}</span>
                                </div>
                                @enderror
                        </div>

                        <div class="mt-10">
                            <label for="">Curriculum (.pdf): (opcional)</label>
                            <input type="file" name="cv" placeholder="Tu curriculum .pdf" class="single-input" value="{{ old('cv') }}" accept="application/pdf">
                                @error('cv')
                                <div class="error-front">
                                    <span class="block">{{ $message }}</span>
                                </div>
                                @enderror
                        </div>


                        <div class="mt-10">
                            <label for="">Nota: (opcional)</label>
                            <textarea class="single-textarea" placeholder="Tu mensaje para el reclutador" name="nota">
                            {{ old('nota') }}
                            </textarea>
                                @error('nota')
                                <div class="error-front">
                                    <span class="block">{{ $message }}</span>
                                </div>
                                @enderror
                        </div>

                        <input type="hidden" value="{{ $vacante->id }}" name="vacante_id">


                        <div class="apply-btn2 mt-10">
                            <button type="submit" class="btn">Aplicar a este empleo</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- job post company End -->


@if (Session::has('candidato-aplicado-ok'))
<script>
    $.fancybox.open(`<div id="postulado" class="p-5 fancybox-content" style="display: none; max-width: 600px;">
    <h2>
        ¡Felicidades!
    </h2>
    <p>
        Te has postulado exitosamente a la vacante.
    </p>
    <p>
        ¡ Suerte en tu proceso !
    </p>
    <p>
        <button data-fancybox-close="" class="genric-btn primary circle arrow">Cerrar</button>
    </p>
</div>`);
</script>
@endif

@endsection


