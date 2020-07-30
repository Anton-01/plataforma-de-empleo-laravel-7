@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{ asset('/css/plugins/lightbox.css') }}">
@endsection
@section('content')
<h1 class="text-3xl text-center mt-10">{{ $vacante->titulo }}</h1>
<div class="mt-10 mb-20 md:flex items-start">
    <div class="md:w-3/5">
        <p class="block text-gray-700 font-bold my-2">
            Contacto: <span class="font-normal">{{ $vacante->reclutador->name }}</span>
        </p>
        <p class="block text-gray-700 font-bold my-2">
            Publicado: <span class="font-normal">{{ $vacante->created_at->diffForHumans() }}</span><br>
        </p>
        <p class="block text-gray-700 font-bold my-2">
            Categoria: <span class="font-normal">{{ $vacante->categoria->nombre }}</span>
        </p>
        <p class="block text-gray-700 font-bold my-2">
            Salario: <span class="font-normal">{{ $vacante->salario->salario }}</span>
        </p>
        <p class="block text-gray-700 font-bold my-2">
            Ubicación: <span class="font-normal">{{ $vacante->ubicacion->ubicacion }}</span>
        </p>
        <p class="block text-gray-700 font-bold my-2">
            Experiencia: <span class="font-normal">{{ $vacante->experiencia->experiencia }}</span>
        </p>

        <h2 class="text-2xl text-left mt-6 mb-6 text-gray-600">Conocimientos y tecnologías</h2>

        @php
        $arraySkills = explode(',', $vacante->skills)
        @endphp
        @forelse ($arraySkills as $item)
        <p class="inline-block border border-gray-500 py-2 px-8 text-gray-700 font-normal my-2 rounded">
            {{ $item }}
        </p>
        @empty
        <p class="inline-block border border-gray-500 py-2 px-8 text-gray-700 font-normal my-2 rounded">
            No se especificaron habilidades para este puesto
        </p>
        @endforelse

        <a href="/storage/vacantes/{{ $vacante->imagen }}" data-lightbox="imagen"
            data-title="Vacante: {{ $vacante->titulo }}">
            <img src="/storage/vacantes/{{ $vacante->imagen }}" alt="{{ $vacante->titulo }}" class="w-40 mt-6">
        </a>
        <div class="descripcion mt-6 mb-5">
            {!! $vacante->descripcion !!}
        </div>
    </div>
    <div class="md:w-2/5 bg-teal-500 rounded m-3 p-5">
        <h2 class="text-2xl text-white uppercase font-bold text-center">Contacta al reclutador</h2>
    </div>
</div>
@endsection