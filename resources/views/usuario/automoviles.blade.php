@extends('usuario.layout.master')

@section('content')
<style>
    .form-group {
      margin-bottom: 1.5rem; /* Ajusta este valor para más o menos espacio */
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
          <form method="post" class="needs-validation" novalidate="" action="{{ route('usuario.automoviles.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="profile-widget-header">
            <img src="{{ asset(Auth::user()->image) }}" alt="" class="rounded-circle profile-widget-picture">
          </div>
          <div class="card-header">
            <h4>Datos del Vehículo</h4>
          </div>
          <div class="card-body">
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
                <select id="brand" class="form-control" name="id_marca" required>
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
                <input type="year" class="form-control" name="año_salida_vh" required>
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
                <select id="category" class="form-control" name="id_categoria" required>
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

<!-- jQuery y Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- Script para mostrar/ocultar contraseña -->
<script>
  

  // Mostrar nombre de archivo seleccionado
  document.querySelector('.custom-file-input').addEventListener('change', function(e) {
    var fileName = document.getElementById("profilePicture").files[0].name;
    var nextSibling = e.target.nextElementSibling;
    nextSibling.innerText = fileName;
  });
</script>

@endsection
