@extends('usuario.layout.master')

@section('content')
<style>
    .form-group {
      margin-bottom: 1.5rem; /* Ajusta este valor para más o menos espacio */
    }
  </style>
<section class="section">
          <div class="section-header">
            <h1>Editar Perfil</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{route('usuario.dashboard')}}">Dashboard</a></div>
              <div class="breadcrumb-item">Editar Perfil</div>
            </div>
          </div>
          <div class="section-body">
            

            <div class="row mt-sm-4">
              
              <div class="col-12 col-md-12 col-lg-7">
                <div class="card profile-widget">
                  <form method="post" class="needs-validation" novalidate="" action="{{route('usuario.profile.update')}}  " enctype="multipart/form-data">
                  @csrf

                  <div class="profile-widget-header text-center" style="background-color: #f8f9fa; padding: 15px;">
                    <img src="{{asset(Auth::user()->image)}}" alt=""
                    class="img-thumbnail rounded-circle mb-3" width="150"">


                  </div>
                    <div class="card-header">
                      <h4>Datos del Usuario</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">    
                        <div class="form-group col-12">
                    <label for="profilePicture">Foto de Perfil</label>
                    <div class="custom-file">
                      <input type="file" id="profilePicture" class="custom-file-input" name="image" value="{{Auth::user()->image}}">
                      <label class="custom-file-label" for="profilePicture">Elija su foto</label>
                    </div>
                    <div class="invalid-feedback">
                      Complete el campo con su foto de perfil
                    </div>
                  </div>                           
                          <div class="form-group col-md-6 col-12">
                            <label>Nombre y Apellido</label>
                            <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}" required="">
                            <div class="invalid-feedback">
                              Complete el campo con su nombre y apellido
                            </div>
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>Correo Electrónico</label>
                            <input type="text" class="form-control" name="email" value="{{Auth::user()->email}}" required="">
                            <div class="invalid-feedback">
                              Complete el campo con su correo electrónico
                            </div>
                          </div>
                        </div>
                         <div class="row">
                          
                          <div class="form-group col-md-5 col-12">
                            <label>Télefono</label>
                            <input type="tel" class="form-control" name="phone" value="{{Auth::user()->phone}}">
                          </div>
                          <div class="invalid-feedback">
                              Complete el campo con su número de télefono
                            </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6 col-12">
                        <label for="birthdate">Fecha de Nacimiento</label>
                        <input type="date" id="birthdate" class="form-control" name="birthdate" value="{{Auth::user()->birthdate}}">
                        <div class="invalid-feedback">
                          Complete el campo con su fecha de nacimiento
                        </div>
                        </div>
                        
        

                    
                    
                    </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Guardar los cambios</button>
                    </div>
                  </form>
                </div>
              </div>

              <div class="col-12 col-md-12 col-lg-7">
                <div class="card profile-widget">

                @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                @if (session('notification'))
                     <div class="alert alert-success" role="alert">
                     {{ session('notification') }}
                     </div>
                @endif

                  <form method="post" class="needs-validation" novalidate="" action="{{route('usuario.password.update')}}" enctype="multipart/form-data">
                  @csrf

                  <div class="card-body">
                  <div class="row">
            <!-- Campo para la contraseña actual -->
            <div class="form-group col-md-6 col-12">
              <label for="current_password">Contraseña Actual</label>
              <div class="input-group">
                <input type="password" id="current_password" class="form-control" name="current_password">
                <div class="input-group-append">
                  <button type="button" class="btn btn-outline-secondary" onclick="togglePassword('current_password')">Mostrar</button>
                </div>
              </div>
              <div class="invalid-feedback">
                Complete el campo con su contraseña actual
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Campo para la nueva contraseña -->
            <div class="form-group col-md-6 col-12">
              <label for="new_password">Nueva Contraseña</label>
              <div class="input-group">
                <input type="password" id="new_password" class="form-control" name="new_password">
                <div class="input-group-append">
                  <button type="button" class="btn btn-outline-secondary" onclick="togglePassword('new_password')">Mostrar</button>
                </div>
              </div>
              <div class="invalid-feedback">
                Complete el campo con su nueva contraseña
              </div>
            </div>
          
         
            <!-- Campo para confirmar la nueva contraseña -->
            <div class="form-group col-md-6 col-12">
              <label for="confirm_password">Confirmar Contraseña</label>
              <div class="input-group">
                <input type="password" id="confirm_password" class="form-control" name="confirm_password">
                <div class="input-group-append">
                  <button type="button" class="btn btn-outline-secondary" onclick="togglePassword('confirm_password')">Mostrar</button>
                </div>
              </div>
              <div class="invalid-feedback">
                Complete el campo para confirmar su nueva contraseña
              </div>
            </div>
          </div>
          <div class="card-footer text-right">
            <button class="btn btn-primary">Guardar Contraseña</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>

  <!-- jQuery y Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <!-- Script para mostrar/ocultar contraseña -->
  <script>
    function togglePassword(inputId) {
      var passwordInput = document.getElementById(inputId);
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
      } else {
        passwordInput.type = 'password';
      }
    }

    // Mostrar nombre de archivo seleccionado
    document.querySelector('.custom-file-input').addEventListener('change', function(e) {
      var fileName = document.getElementById("profilePicture").files[0].name;
      var nextSibling = e.target.nextElementSibling;
      nextSibling.innerText = fileName;
    });
  </script>

@endsection