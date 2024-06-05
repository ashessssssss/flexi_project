<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar Example</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="{{asset('backend/assets/css/estilos.css')}}">
</head>
<body>
  <div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{url("/")}}">FlexiGlide</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{url("/")}}">Fg</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Personal</li>
        <li class="dropdown ">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          <ul class="dropdown-menu">
            <li class="active"><a class="nav-link" href="{{url("dashboard")}}">General</a></li>
            <li><a class="nav-link" href="{{url("profile")}}">Perfil</a></li>
          </ul>
        </li>
        <li class="menu-header">Automoviles</li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Vehículos</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{url("automoviles")}}">Agregar Vehículo</a></li>
            <li><a class="nav-link" href="{{url("profile")}}">Ver mis Vehículos</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-th"></i> <span>Citas</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{url("citas")}}">Agendar Cita</a></li>
            <li><a class="nav-link" href="{{url("citas")}}">Ver mis citas</a></li>
            
          </ul>
        </li>
      </ul>
    </aside>
  </div>

  <!-- jQuery y Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
