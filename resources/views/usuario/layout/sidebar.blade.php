<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{ url('/') }}">FlexiGlide</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{ url('/') }}">Fg</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Personal</li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        <ul class="dropdown-menu">
          <li class="active"><a class="nav-link" href="{{ url('dashboard') }}">General</a></li>
          <li><a class="nav-link" href="{{ url('profile') }}">Perfil</a></li>
        </ul>
      </li>
      <li class="menu-header">Automoviles</li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-columns"></i> <span>Vehículos</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ url('automoviles/create') }}">Agregar Vehículo</a></li>
          <li><a class="nav-link" href="{{ url('automoviles') }}">Ver mis Vehículos</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Citas</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ url('usuario/citas/create') }}">Agendar Cita</a></li>
          <li><a class="nav-link" href="{{ url('usuario/citas') }}">Ver mis citas</a></li>
        </ul>
      </li>
    </ul>
  </aside>
</div>
