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
        <h1>Mis Vehículos</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('usuario.dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item">Mis Vehículos</div>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-3">
        <a href="{{ route('usuario.automoviles.create') }}" class="btn btn-primary">Agregar Vehículo</a>
    </div>

    <div class="row">
        @foreach($vehicles as $vehicle)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset($vehicle->image) }}" class="card-img-top" alt="Imagen del Vehículo">
                    <div class="card-body">
                        <h5 class="card-title">{{ $vehicle->modelo }}</h5>
                        <p class="card-text">Matrícula: {{ $vehicle->matricula }}</p>
                        <p class="card-text">Marca: {{ $vehicle->brand->nomb_marca }}</p>
                        <p class="card-text">Año: {{ $vehicle->año_salida_vh }}</p>
                        <p class="card-text">Color: {{ $vehicle->color_vh }}</p>
                        <p class="card-text">Kilometraje: {{ $vehicle->kilometraje }}</p>
                        <p class="card-text">Cilindros: {{ $vehicle->cilindros }}</p>
                        <p class="card-text">Categoría: {{ $vehicle->category->nomb_categoria }}</p>
                        <a href="{{ route('usuario.automoviles.edit', $vehicle->id) }}" class="btn btn-actualizar mb-2">Actualizar</a>
                        <form action="{{ route('usuario.automoviles.destroy', $vehicle->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-eliminar" onclick="return confirm('¿Está seguro de que desea eliminar este vehículo?')">Borrar</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
