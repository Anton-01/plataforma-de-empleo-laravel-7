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
        <th class="text-center" style="width: 50px;">#</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Actividad</th>
    </tr>
</thead>
<tbody>
@foreach ($empresas as $key => $value) )
<tr>
    <td> {{ $key+1 }}</td>
    <td>{{ $value->name }}</td>
    <td>{{ $value->email }}</td>
    <td>{{ $value->telefono }}</td>
    <td>{{ $value->actividad_economica }}</td>
</tr>
@endforeach
</tbody>
</table>
</body>
</html>
