@extends('layouts.master')

@section('main')



<div class="block block-rounded">
    <div class="block-header">
        <h2 class="text-center">Notificaciones</h2>
    </div>
    <div class="block-content block-content-full table-responsive">
    @if ( count($notificaciones) > 0)
        <table class="table table-hover table-vcenter">
            <thead>
                <tr>
                    <th>Vacante</th>
                    <th>Fecha</th>
                    <th>Candidatos</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $notificaciones as $notification )
                @php
                $data = $notification->data
                @endphp
                <tr>
                    <td> {{ $data['vacante'] }}</td>
                    <td> {{ $notification->created_at->diffForHumans() }}</td>
                    <td>
                        <a href="{{ route('candidatos.index', $data['slug']) }}" class="">
                            Ver Candidatos
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
    <p class="text-center mt-5">No hay notificaciones</p>
    </div>
</div>


@endif
@endsection
