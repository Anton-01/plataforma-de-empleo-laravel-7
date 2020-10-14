@extends('layouts.master')

@section('main')
<div class="block block-rounded">
    <div class="block-header">
        <h2 class="text-center">Candidatos: {{ $vacante->titulo }}</h2>
    </div>
    <div class="block-content block-content-full table-responsive">
        @if( count($vacante->candidatos) > 0 )
        <table class="table table-hover table-vcenter">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Curriculum</th>
                    <th>Nota</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vacante->candidatos as $candidato)
                <tr>
                    <td> {{ $candidato->nombre }}</td>
                    <td> {{ $candidato->telefono }}</td>
                    <td> {{ $candidato->email ? $candidato->email : 'Sin correo' }}</td>
                    <td> {{ $candidato->cv ? $candidato->cv : 'Sin Curriculum' }}</td>
                    <td>
                        @if($vacante->nota)
                        <button type="button" class="btn btn-sm btn-primary push" data-toggle="modal"
                            data-target="#modal-candidato-nota{{ $candidato->id }}">
                            <i class="fas fa-sticky-note"></i>
                            Ver Nota
                        </button>
                        @else
                        'Sin nota'
                        @endif
                        <!-- Normal Block Modal -->
                        <div class="modal" id="modal-candidato-nota{{ $candidato->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-block-normal"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="block block-themed block-transparent mb-0">
                                        <div class="block-header bg-primary-dark">
                                            <h3 class="block-title">Nota del candidaro</h3>
                                            <div class="block-options">
                                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                    <i class="fa fa-fw fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="block-content font-size-sm">
                                            {{ $vacante->nota }}
                                        </div>
                                        <div class="block-content block-content-full text-right border-top">
                                            <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal"> Cerrar </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Normal Block Modal -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p class="text-center mt-5">No tienes candidatos aún</p>
        @endif
    </div>
</div>

@endsection
