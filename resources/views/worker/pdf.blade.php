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
        <h5 class=" font-weight-bold">Reporte de Empleado</h5>
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                <th>Nombre Emp</th>	
                                    <th>Id Usuario</th>
										<th>Fecha Ing Emp</th>
										<th>Fecha Sali Emp</th>
										<th>Estado Emp</th>
										<th>Id Puesto</th>
										<th>Sueldo</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($workers as $worker)
                <tr>
                <td>{{ $worker->nombre_emp }}</td>
											<td>{{ $worker->id_usuario }}</td>
											<td>{{ $worker->fecha_ing_emp }}</td>
											<td>{{ $worker->fecha_sali_emp }}</td>
											<td>{{ $worker->estado_emp }}</td>
											<td>{{ $worker->id_puesto }}</td>
											<td>{{ $worker->sueldo }}</td>
                </tr>
                
                @empty

                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
