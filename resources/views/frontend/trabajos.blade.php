@extends('layouts.main')
@section('content-job')
<!-- Hero Area Start-->
<div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center"
        data-background="{{ asset('front/img/hero/trabajo3.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Encuentra un trabajo</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->

<!-- Job List Area Start -->
<div class="job-listing-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Featured_job_start -->
                <section class="featured-job-area">
                    <div class="container">
                        <!-- Count of Job list Start -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="count-job mb-35">
                                    <span>{{ $vacantes->count() }} {{ $vacantes->count() > 1 ? 'empleos' : 'empleo'}}</span>
                                </div>
                            </div>
                        </div>
                        <!-- Count of Job list End -->
                        @forelse ($vacantes as $vacante)
                        <div class="single-job-items mb-30 border-sefeco">
                            <div class="job-items">

                                <div class="job-tittle">
                                    <a href="{{ route('vacantes.show', $vacante) }}">
                                        <h4>{{ $vacante->titulo }}</h4>
                                    </a>
                                    <ul>
                                        <li>Empresa: {{ $vacante->reclutador->name }}</li>
                                        <li>Salario: {{ $vacante->salario->salario }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <a href="{{ route('vacantes.show', $vacante) }}">Ver vacante</a>
                                <span>{{ $vacante->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                        @empty
                        <li class="p-10 border border-gray-300 bg-white shadow">
                            <h2 class="text-2xl font-bold text-gray-700">No hay Vacantes disponibles para mostrar</h2>
                        </li>
                        @endforelse
                    </div>
                </section>
                <!-- Featured_job_end -->
            </div>
        </div>
    </div>
</div>
<!-- Job List Area End -->
<!--Pagination Start  -->
<div class="pagination-area pb-115 text-center">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="single-wrap d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                        {{$vacantes->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Pagination End  -->

@endsection
