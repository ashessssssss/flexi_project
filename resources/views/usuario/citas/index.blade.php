@extends('usuario.layout.master')

@section('content')
<style>
    .btn-actualizar {
        background-color: #FFC107; /* Color amarillo */
        color: white;
        border-color: #FFC107; /* Borde amarillo */
    }

    .btn-actualizar:hover {
        background-color: #E0A800; /* Color amarillo oscuro */
        color: white;
    }

    .btn-eliminar {
        background-color: #DC3545; /* Color rojo */
        color: white;
        border-color: #DC3545; /* Borde rojo */
    }

    .btn-eliminar:hover {
        background-color: #C82333; /* Color rojo oscuro */
        color: white;
    }
</style>

<div class="container">
    <div class="section-header">
        <h1>Mis Citas</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('usuario.dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item">Mis Citas</div>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-3">
        <a href="{{ route('usuario.citas.create') }}" class="btn btn-primary">Crear Cita</a>
    </div>

    <div class="row">
        @foreach($citas as $cita)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Cita #{{ $cita->id }}</h5>
                        <p class="card-text">Vehículo: {{ $cita->vehicle->matricula }}</p>
                        <p class="card-text">Servicio: {{ $cita->service->nombre_serv }}</p>
                        <p class="card-text">Fecha: {{ $cita->fecha_cita }}</p>
                        <p class="card-text">Hora: {{ $cita->hora_cita }}</p>
                        <p class="card-text">Estado: {{ $cita->estado_cita }}</p>
                        <form action="{{ route('usuario.citas.destroy', $cita->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-eliminar" onclick="return confirm('¿Está seguro de que desea eliminar esta cita?')">Borrar</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
