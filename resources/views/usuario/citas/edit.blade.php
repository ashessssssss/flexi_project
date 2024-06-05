@extends('usuario.layout.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Editar Cita</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('usuario.dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('usuario.citas.index') }}">Mis Citas</a></div>
            <div class="breadcrumb-item">Editar Cita</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row mt-sm-4">
            <div class="col-12 col-md-12 col-lg-7">
                <div class="card profile-widget">
                    <form method="POST" action="{{ route('usuario.citas.update', $cita->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="card-header">
                            <h4>Datos de la Cita</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="vehicle">Vehículo</label>
                                    <select id="vehicle" class="form-control" name="id_vh" required>
                                        <option value="">Seleccione un vehículo</option>
                                        @foreach($vehicles as $vehicle)
                                            <option value="{{ $vehicle->id }}" {{ $vehicle->id == $cita->id_vh ? 'selected' : '' }}>{{ $vehicle->matricula }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <label for="service">Servicio</label>
                                    <select id="service" class="form-control" name="id_servicio" required>
                                        <option value="">Seleccione un servicio</option>
                                        @foreach($services as $service)
                                            <option value="{{ $service->id }}" {{ $service->id == $cita->id_servicio ? 'selected' : '' }}>{{ $service->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <label for="product">Producto</label>
                                    <select id="product" class="form-control" name="id_prod" required>
                                        <option value="">Seleccione un producto</option>
                                        @foreach($products as $product)
                                            <option value="{{ $product->id }}" {{ $product->id == $cita->id_prod ? 'selected' : '' }}>{{ $product->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <label for="employee">Empleado</label>
                                    <select id="employee" class="form-control" name="id_empleado" required>
                                        <option value="">Seleccione un empleado</option>
                                        @foreach($employees as $employee)
                                            <option value="{{ $employee->id }}" {{ $employee->id == $cita->id_empleado ? 'selected' : '' }}>{{ $employee->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <label>Fecha de la Cita</label>
                                    <input type="date" class="form-control" name="fecha_cita" value="{{ $cita->fecha_cita }}" required>
                                </div>
                                <div class="form-group col-12">
                                    <label>Hora de la Cita</label>
                                    <input type="time" class="form-control" name="hora_cita" value="{{ $cita->hora_cita }}" required>
                                </div>
                                <div class="form-group col-12">
                                    <label>Estado de la Cita</label>
                                    <select class="form-control" name="estado_cita" required>
                                        <option value="EN PROCESO" {{ $cita->estado_cita == 'EN PROCESO' ? 'selected' : '' }}>En Proceso</option>
                                        <option value="COMPLETADA" {{ $cita->estado_cita == 'COMPLETADA' ? 'selected' : '' }}>Completada</option>
                                        <option value="CANCELADA" {{ $cita->estado_cita == 'CANCELADA' ? 'selected' : '' }}>Cancelada</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Actualizar Cita</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
