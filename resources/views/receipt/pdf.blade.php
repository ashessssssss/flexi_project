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
        <h5 class=" font-weight-bold">Reporte de Factura</h5>
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                <th>Id Usuario</th>
										<th>Id Empleado</th>
										<th>Id Cita</th>
										<th>Id Prod</th>
										<th>Fecha Factura</th>
										<th>Hora Factura</th>
										<th>Tipo Pago</th>
										<th>Estado</th>
										<th>Descuento Porcentaje</th>
										<th>Descuento Monto</th>
										<th>Subtotal</th>
										<th>Impuesto</th>
										<th>Total Factura</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($receipts as $receipt)
                <tr>
                <td>{{ $receipt->id_usuario }}</td>
											<td>{{ $receipt->id_empleado }}</td>
											<td>{{ $receipt->id_cita }}</td>
											<td>{{ $receipt->id_prod }}</td>
											<td>{{ $receipt->fecha_factura }}</td>
											<td>{{ $receipt->hora_factura }}</td>
											<td>{{ $receipt->tipo_pago }}</td>
											<td>{{ $receipt->estado }}</td>
											<td>{{ $receipt->descuento_porcentaje }}</td>
											<td>{{ $receipt->descuento_monto }}</td>
											<td>{{ $receipt->subtotal }}</td>
											<td>{{ $receipt->impuesto }}</td>
											<td>{{ $receipt->total_factura }}</td>
                </tr>
                
                @empty

                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
