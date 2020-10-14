@extends('layouts.master')
@section('main')
<div class="block block-rounded">
    <div class="block-header">
        <h2>Vacantes</h2>
    </div>
    <div class="block-content block-content-full table-responsive">
        @if( count($vacantes) > 0)
        <table class="table table-hover table-vcenter">
            <thead>
                <tr>
                    <th>Titulo Vacante</th>
                    <th>Estado</th>
                    <th>Candidatos</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vacantes as $vacante)
                <tr>
                    <td> {{ $vacante->titulo }}</td>
                    <td>
                        <estado-vacante estado="{{ $vacante->condicion }}" id="{{ $vacante->slug }}">
                        </estado-vacante>
                    </td>
                    <td>
                        <a href="{{ route('candidatos.index', ['id' => $vacante->slug]) }}">
                            {{ $vacante->candidatos->count() }}
                            Candidatos
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('vacantes.edit', $vacante) }}"
                        class="btn btn-sm btn-info mr-2">Editar</a>

                        <eliminar-vacante id="{{ $vacante->slug }}"></eliminar-vacante>

                        <a href="{{ route('vacantes.show', $vacante->slug) }}" class="btn btn-sm btn-primary" target="_blank">Ver</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p class="text-center mt-5">No tienes vacantes aún</p>
        @endif
    </div>
</div>
@endsection
