@extends('usuario.layout.master')

@section('content')
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

    <div class="row">
    @foreach($citas as $cita)
    <div class="col-md-4">
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Cita con {{ $cita->worker->name }}</h5> <!-- Corregido el acceso a worker -->
                <p class="card-text">Fecha: {{ $cita->fecha_cita }}</p>
                <p class="card-text">Hora: {{ $cita->hora_cita }}</p>
                <p class="card-text">Estado: {{ $cita->estado_cita }}</p>
                <a href="{{ route('usuario.citas.edit', $cita->id) }}" class="btn btn-primary mb-2">Actualizar</a>
                <form action="{{ route('usuario.citas.destroy', $cita->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Está seguro de que desea eliminar esta cita?')">Borrar</button>
                </form>
            </div>
        </div>
    </div>
@endforeach

    </div>
</div>
@endsection
