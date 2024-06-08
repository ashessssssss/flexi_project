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
        <h5 class=" font-weight-bold">Reporte Citas</h5>
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                <th>Id Usuario</th>
				<th>Id Servicio</th>
				<th>Id Vh</th>
				<th>Fecha Cita</th>
				<th>Hora Cita</th>
				<th>Id Empleado</th>
				<th>Estado Cita</th>
				<th>Id Prod</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($appoiments as $appoiment)
                <tr>
                <td>{{ $appoiment->id_usuario }}</td>
				<td>{{ $appoiment->id_servicio }}</td>
				<td>{{ $appoiment->id_vh }}</td>
				<td>{{ $appoiment->fecha_cita }}</td>
				<td>{{ $appoiment->hora_cita }}</td>
				<td>{{ $appoiment->id_empleado }}</td>
				<td>{{ $appoiment->estado_cita }}</td>
				<td>{{ $appoiment->id_prod }}</td>
                </tr>
                
                @empty

                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
