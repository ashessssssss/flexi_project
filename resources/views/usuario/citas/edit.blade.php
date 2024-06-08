@extends('usuario.layout.master')
@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
@endpush
@section('content')
<div class="container">
    <div class="section-header">
        <h1>Editar Cita</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{ route('usuario.dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('usuario.citas.index') }}">Mis Citas</a></div>
            <div class="breadcrumb-item">Editar Cita</div>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        <div class="col-12 col-md-8 col-lg-6">
            <div class="card">
                <form method="post" action="{{ route('usuario.citas.update', $cita->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="id_vh">Vehículo</label>
                            <select id="id_vh" class="form-control select2" name="id_vh" required>
                                <option value="">Seleccione un vehículo</option>
                                @foreach($vehicles as $vehicle)
                                    <option value="{{ $vehicle->id }}" {{ $vehicle->id == $cita->id_vh ? 'selected' : '' }}>{{ $vehicle->matricula }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="id_servicio">Servicio</label>
                            <select id="id_servicio" class="form-control select2" name="id_servicio" required>
                                <option value="">Seleccione un servicio</option>
                                @foreach($services as $service)
                                    <option value="{{ $service->id }}" {{ $service->id == $cita->id_servicio ? 'selected' : '' }}>{{ $service->nombre_serv }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="fecha_cita">Fecha</label>
                            <input type="date" id="fecha_cita" class="form-control" name="fecha_cita" value="{{ $cita->fecha_cita }}" required>
                        </div>
                        <div class="form-group">
                            <label for="hora_cita">Hora</label>
                            <input type="time" id="hora_cita" class="form-control" name="hora_cita" value="{{ $cita->hora_cita }}" required>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Actualizar Cita</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Asegúrate de cargar jQuery completo -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
@endsection
