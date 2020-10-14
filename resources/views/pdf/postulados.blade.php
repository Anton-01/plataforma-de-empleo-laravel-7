<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: DejaVu Sans;
            font-size: 9px;
        }
    </style>
</head>

<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="text-center" style="width: 10px;">#</th>
                <th>Vacante</th>
                <th>Empresa</th>
                <th>Postulado</th>
                <th>Tel. Postulado</th>
                <th>Fecha Postulado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($postulados as $key => $value) )
            <tr>
                <td> {{ $key+1 }}</td>
                <td>{{ $value->vacante }}</td>
                <td>{{ $value->empresa }}</td>
                <td>{{ $value->usuario }}</td>
                <td>{{ $value->contacto }}</td>
                <td>{{ $value->postulado->format('d/m/Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
