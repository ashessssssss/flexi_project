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
        <h5 class=" font-weight-bold">Reporte Marcas</h5>
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                <th>Nombre Categoria</th>
				<th>Descripción Categoria</th>
				<th>Estado Categoria</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($categories as $category)
                <tr>
                
				<td>{{ $category->nomb_categoria }}</td>
				<td>{{ $category->desc_categoria }}</td>
                <td>{{ $category->estado_cat }}</td>
                </tr>
                
                @empty

                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
