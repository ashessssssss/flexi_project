@extends('usuario.layout.master')
@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
@endpush
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Editar Vehículo</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('usuario.dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('usuario.automoviles.index') }}">Mis Vehículos</a></div>
            <div class="breadcrumb-item">Editar Vehículo</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row mt-sm-4">
            <div class="col-12 col-md-12 col-lg-7">
                <div class="card profile-widget">
                    <form method="POST" action="{{ route('usuario.automoviles.update', $vehicle->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="card-header">
                            <h4>Datos del Vehículo</h4>
                        </div>
                        <div class="profile-widget-header text-center" style="background-color: #f8f9fa; padding: 15px;">
                        @if($vehicle->image)
                            <img src="{{ asset($vehicle->image) }}" alt="Imagen del Vehículo" class="img-thumbnail rounded-circle mb-3" width="150">
                        @endif
                    </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="profilePicture">Foto del Vehículo</label>
                                    <div class="custom-file">
                                        <input type="file" id="profilePicture" class="custom-file-input" name="image">
                                        <label class="custom-file-label" for="profilePicture">Elija su foto</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                <label for="matricula">Matrícula</label>
                            
                                    <input type="text" class="form-control" name="matricula" value="{{ $vehicle->matricula }}" required>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="brand">Marca</label>
                                    <select id="brand" class="form-control select2" name="id_marca" required>
                                        <option value="">Seleccione una marca</option>
                                        @foreach($brands as $brand)
                                            <option value="{{ $brand->id }}" {{ $brand->id == $vehicle->id_marca ? 'selected' : '' }}>{{ $brand->nomb_marca }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Modelo</label>
                                    <input type="text" class="form-control" name="modelo" value="{{ $vehicle->modelo }}" required>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                <label for="año_salida_vh">Año de salida del Vehículo</label>
                                    <select id="año_salida_vh" class="form-control select2" name="año_salida_vh" required>
                                        <option value="">Seleccione el año</option>
                                        @for ($year = date('Y'); $year >= 1900; $year--)
                                            <option value="{{ $year }}" {{ $year == $vehicle->año_salida_vh ? 'selected' : '' }}>{{ $year }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Color del Vehículo</label>
                                    <input type="text" class="form-control" name="color_vh" value="{{ $vehicle->color_vh }}" required>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Kilometraje</label>
                                    <input type="number" class="form-control" name="kilometraje" value="{{ $vehicle->kilometraje }}" required>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Cilindros</label>
                                    <input type="number" class="form-control" name="cilindros" value="{{ $vehicle->cilindros }}" required>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label for="category">Categoría</label>
                                    <select id="category" class="form-control select2" name="id_categoria" required>
                                        <option value="">Seleccione una categoría</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ $category->id == $vehicle->id_categoria ? 'selected' : '' }}>{{ $category->nomb_categoria }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Actualizar Vehículo</button>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $('.select2').select2();
    });

    document.querySelector('.custom-file-input').addEventListener('change', function(e) {
    var fileName = document.getElementById("profilePicture").files[0].name;
    var nextSibling = e.target.nextElementSibling;
    nextSibling.innerText = fileName;
  });
</script>
@endsection
