<!doctype html>
<html lang="en">

<head>
    <title>Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

    <style>
        table {
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <h5 class=" font-weight-bold">Reporte de Servicios</h5>
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                <th>Nombre Serv</th>
										<th>Id Tipo Serv</th>
										<th>Desc Serv</th>
										<th>Precio Serv</th>
										<th>Tiempo Estimado</th>
										<th>Estado Serv</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($services as $service)
                <tr>
                <td>{{ $service->nombre_serv }}</td>
											<td>{{ $service->id_tipo_serv }}</td>
											<td>{{ $service->desc_serv }}</td>
											<td>{{ $service->precio_serv }}</td>
											<td>{{ $service->tiempo_estimado }}</td>
											<td>{{ $service->estado_serv }}</td>
                </tr>
                
                @empty

                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
