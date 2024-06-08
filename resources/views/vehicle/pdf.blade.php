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
        <h5 class=" font-weight-bold">Reporte de Vehiculo</h5>
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                <th>Id Usuario</th>
										<th>Matricula</th>
										<th>Image</th>
										<th>Id Marca</th>
										<th>Modelo</th>
										<th>Año Salida Vh</th>
										<th>Color Vh</th>
										<th>Kilometraje</th>
										<th>Cilindros</th>
										<th>Id Categoria</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($vehicles as $vehicle)
                <tr>
                <td>{{ $vehicle->id_usuario }}</td>
											<td>{{ $vehicle->matricula }}</td>
											<td>{{ $vehicle->image }}</td>
											<td>{{ $vehicle->id_marca }}</td>
											<td>{{ $vehicle->modelo }}</td>
											<td>{{ $vehicle->año_salida_vh }}</td>
											<td>{{ $vehicle->color_vh }}</td>
											<td>{{ $vehicle->kilometraje }}</td>
											<td>{{ $vehicle->cilindros }}</td>
											<td>{{ $vehicle->id_categoria }}</td>
                </tr>
                
                @empty

                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
