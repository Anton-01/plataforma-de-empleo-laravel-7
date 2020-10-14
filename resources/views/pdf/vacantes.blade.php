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
                <th>Título</th>
                <th>RFC</th>
                <th style="width: 10px;">Plazas</th>
                <th style="width: 17px;">Escolaridad</th>
                <th style="width: 12px;">Sexo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vacantes as $key => $value) )
            <tr>
                <td> {{ $key+1 }}</td>
                <th> {{ $value->titulo }}</th>
                <th> {{ $value->rfc }}</th>
                <th> {{ $value->plazas }}</th>
                <th> {{ $value->escolaridad }}</th>
                <th> {{ $value->sexo }}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
