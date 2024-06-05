@extends('usuario.layout.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Crear Cita</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('usuario.dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('usuario.citas.index') }}">Mis Citas</a></div>
            <div class="breadcrumb-item">Crear Cita</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row mt-sm-4">
            <div class="col-12 col-md-12 col-lg-7">
                <div class="card profile-widget">
                    <form method="POST" action="{{ route('usuario.citas.store') }}">
                        @csrf

                        <div class="card-header">
                            <h4>Datos de la Cita</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="vehicle">Vehículo</label>
                                    <select id="vehicle" class="form-control select2" name="id_vh" required>
                                        <option value="">Seleccione un vehículo</option>
                                        @foreach($vehicles as $vehicle)
                                            <option value="{{ $vehicle->id }}">{{ $vehicle->matricula }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <label for="service">Servicio</label>
                                    <select id="service" class="form-control select2" name="id_servicio" required>
                                        <option value="">Seleccione un servicio</option>
                                        @foreach($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->nombre_serv }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <label for="product">Producto</label>
                                    <select id="product" class="form-control select2" name="id_prod" required>
                                        <option value="">Seleccione un producto</option>
                                        @foreach($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <label for="employee">Empleado</label>
                                    <select id="employee" class="form-control select2" name="id_empleado" required>
                                        <option value="">Seleccione un empleado</option>
                                        @foreach($workers as $worker)
                                            <option value="{{ $worker->id }}">{{ $worker->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <label>Fecha de la Cita</label>
                                    <input type="date" class="form-control" name="fecha_cita" required>
                                </div>
                                <div class="form-group col-12">
                                    <label>Hora de la Cita</label>
                                    <input type="time" class="form-control" name="hora_cita" required>
                                </div>
                                
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Crear Cita</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Incluir Select2 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
@endsection
