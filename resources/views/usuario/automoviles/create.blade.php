@extends('usuario.layout.master')

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
@endpush

@section('content')
<style>
    .form-group {
      margin-bottom: 1.5rem;
    }
    
</style>

<section class="section">
  <div class="section-header">
    <h1>Agregar Vehículo</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="{{ route('usuario.dashboard') }}">Dashboard</a></div>
      <div class="breadcrumb-item">Agregar Vehículo</div>
    </div>
  </div>
  <div class="section-body">
    <div class="row mt-sm-4">
      <div class="col-12 col-md-12 col-lg-7">
        <div class="card profile-widget">
          <div class="profile-widget-header text-center" style="background-color: #f8f9fa; padding: 15px;">
            <img id="vehicleImagePreview" src="{{ asset('uploads/vehicles/default-vehicle.jpg') }}" alt="Imagen del Vehículo" class="img-thumbnail rounded-circle mb-3" width="150">
          </div>
          <form method="post" class="needs-validation" novalidate="" action="{{ route('usuario.automoviles.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="card-header">
            <h4>Datos del Vehículo</h4>
          </div>
          <div class="card-body">
          @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
            <div class="row">
              <div class="form-group col-12">
                <label for="profilePicture">Foto del Vehículo</label>
                <div class="custom-file">
                  <input type="file" id="profilePicture" class="custom-file-input" name="image" required>
                  <label class="custom-file-label" for="profilePicture">Elija su foto</label>
                </div>
                <div class="invalid-feedback">
                  Complete el campo con una foto del Vehículo
                </div>
              </div>
              <div class="form-group col-md-6 col-12">
              <label>Matrícula</label>
                <input type="text" class="form-control" name="matricula" required>
                <div class="invalid-feedback">
                  Complete el campo con su Matrícula
                </div>
              </div>
              <div class="form-group col-md-6 col-12">
                <label for="brand">Marca</label>
                <select id="brand" class="form-control select2" name="id_marca" required>
                    <option value="">Seleccione una marca</option>
                    @foreach($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->nomb_marca}}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    Complete el campo con la marca del Vehículo
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6 col-12">
                <label>Modelo</label>
                <input type="text" class="form-control" name="modelo" required>
                <div class="invalid-feedback">
                  Complete el campo con el modelo del Vehículo
                </div>
              </div>
              <div class="form-group col-md-6 col-12">
                <label for="año_salida_vh">Año de salida del Vehículo</label>
                <select id="año_salida_vh" class="form-control select2" name="año_salida_vh" required>
                  <option value="">Seleccione el año</option>
                  @for ($year = date('Y'); $year >= 1900; $year--)
                      <option value="{{ $year }}">{{ $year }}</option>
                  @endfor
                </select>
                <div class="invalid-feedback">
                  Complete el campo con el año de salida del Vehículo
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6 col-12">
                <label>Color del Vehículo</label>
                <input type="text" class="form-control" name="color_vh" required>
                <div class="invalid-feedback">
                  Complete el campo con el color del Vehículo
                </div>
              </div>
              <div class="form-group col-md-6 col-12">
                <label>Kilometraje</label>
                <input type="number" class="form-control" name="kilometraje" required>
                <div class="invalid-feedback">
                  Complete el campo con el kilometraje del Vehículo
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6 col-12">
                <label>Cilindros</label>
                <input type="number" class="form-control" name="cilindros" required>
                <div class="invalid-feedback">
                  Complete el campo con el número de cilindros
                </div>
              </div>
              <div class="form-group col-md-6 col-12">
                <label for="category">Categoría de Vehículo</label>
                <select id="category" class="form-control select2" name="id_categoria" required>
                    <option value="">Seleccione una categoría</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->nomb_categoria}}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                  Complete el campo con la categoría del Vehículo
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer text-right">
            <button class="btn btn-primary">Agregar Vehículo</button>
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

    // Mostrar nombre de archivo seleccionado y previsualización de imagen
    document.querySelector('.custom-file-input').addEventListener('change', function(e) {
        var fileName = document.getElementById("profilePicture").files[0].name;
        var nextSibling = e.target.nextElementSibling;
        nextSibling.innerText = fileName;

        var reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('vehicleImagePreview').src = e.target.result;
        }
        reader.readAsDataURL(document.getElementById("profilePicture").files[0]);
    });
</script>

@endsection
