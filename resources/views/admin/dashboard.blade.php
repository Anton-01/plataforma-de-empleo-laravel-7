@extends('layouts.master')
@section('main')
<div class="block block-rounded">
    <div class="block-header">
        <h2>Administrador</h2>
    </div>

    <div class="block-content">
        <div class="row">
            <div class="col-6 col-md-4 col-lg-6 col-xl-4">
                <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Empresas</div>
                        <div class="font-size-h2 font-w400 text-dark">{{ $empresas }}</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-6 col-xl-4">
                <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Vacantes</div>
                        <div class="font-size-h2 font-w400 text-dark">{{ $vacantes }}</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-6 col-xl-4">
                <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Postulados</div>
                        <div class="font-size-h2 font-w400 text-dark">{{ $postulados }}</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="block block-rounded">
    <div class="block-header">
        <h2>Empresas</h2>
    </div>
    <div class="block-content">
        <div>
            <a href="{{route('empresas.exportpdf')}}" class="btn btn-success mr-1 mb-3">
                <i class="fas fa-file-pdf mr-1"></i> Exportar PDF
            </a>

            <a href="{{route('empresas.exportexcel')}}" class="btn btn-info mr-1 mb-3">
                <i class="fas fa-file-excel mr-1"></i> Exportar Excel
            </a>
        </div>
        <table class="ui celled table" id="table-empresas-sefeco">
            <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">#</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Actividad</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<div class="block block-rounded">
    <div class="block-header">
        <h2>Vacantes</h2>
    </div>
    <div class="block-content">
        <div>
            <a href="{{ route('vacantes.exportpdf') }}" class="btn btn-success mr-1 mb-3">
                <i class="fas fa-file-pdf mr-1"></i> Exportar PDF
            </a>

            <a href="{{ route('vacantes.exportexcel') }}" class="btn btn-info mr-1 mb-3">
                <i class="fas fa-file-excel mr-1"></i> Exportar Excel
            </a>
        </div>
        <table class="ui celled table" id="table-vacantes-sefeco">
            <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">#</th>
                    <th>Título</th>
                    <th>RFC</th>
                    <th>Plazas</th>
                    <th>Escolaridad</th>
                    <th>Sexo</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>
<div class="block block-rounded">
    <div class="block-header">
        <h2>Postulados</h2>
    </div>
    <div class="block-content">
        <div>
            <a href="{{ route('postulados.exportpdf') }}" class="btn btn-success mr-1 mb-3" target="_blank">
                <i class="fas fa-file-pdf mr-1"></i> Exportar PDF
            </a>

            <a href="{{ route('postulados.exportexcel') }}" class="btn btn-info mr-1 mb-3">
                <i class="fas fa-file-excel mr-1"></i> Exportar Excel
            </a>
        </div>
        <table class="ui celled table" id="table-postulados-sefeco">
            <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">#</th>
                    <th>Vacante</th>
                    <th>Empresa</th>
                    <th>Postulado</th>
                    <th>Tel. Postulado</th>
                    <th>Fecha Postulado</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>
@endsection
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#table-empresas-sefeco').DataTable({
            "ajax": "{{ route('empresas.ajax') }}",
            "columns": [{data: 'id'}, {data: 'name'},{data: 'email'},{data: 'telefono'},{data: 'actividad_economica'}]
        });


        $('#table-vacantes-sefeco').DataTable({
        "ajax": "{{ route('vacantes.ajax') }}",
        "columns": [{data: 'id'}, {data: 'titulo'},{data: 'rfc'},{data: 'plazas'},{data: 'escolaridad'},{data: 'sexo'}]
        });


        $('#table-postulados-sefeco').DataTable({
        "ajax": "{{ route('postulados.ajax') }}",
        "columns": [{data: 'id'},{data: 'vacante'},{data: 'empresa'},{data: 'usuario'},{data: 'contacto'},{data: 'postulado'}]
        });
    });
</script>
@endsection
