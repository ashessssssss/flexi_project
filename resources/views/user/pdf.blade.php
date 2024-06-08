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
        <h5 class=" font-weight-bold">Reporte de Usuarios</h5>
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                <th>Name</th>
										<th>Gender</th>
										<th>Image</th>
										<th>Phone</th>
										<th>Email</th>
										<th>Birthdate</th>
										<th>Role</th>
										<th>Status</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($users as $user)
                <tr>
                <td>{{ $user->name }}</td>
											<td>{{ $user->gender }}</td>
											<td>{{ $user->image }}</td>
											<td>{{ $user->phone }}</td>
											<td>{{ $user->email }}</td>
											<td>{{ $user->birthdate }}</td>
											<td>{{ $user->role }}</td>
											<td>{{ $user->status }}</td>

                </tr>
                
                @empty

                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
