
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('weather.index') }}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-cloud-sun-rain"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Weather</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item {{ request()->routeIs('weather.index') ? 'active' : '' }} ">
        <a class="nav-link" href=" {{ route('weather.index')  }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Weather
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item {{ request()->routeIs('weather.index')  ? 'active' : '' }} " >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-search"></i>
          <span>Buscar clima</span>
        </a>
        <div id="collapseTwo" class="collapse {{ request()->routeIs('weather.index')  ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opciones:</h6>
            <a class="collapse-item {{ request()->routeIs('weather.index') ? 'active' : '' }}" href="{{ route('weather.list') }}">Ver historial de busqueda</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item {{ request()->routeIs('weather.list')  ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-list"></i>
          <span>Historial</span>
        </a>
        <div id="collapseUtilities" class="collapse {{ request()->routeIs('weather.list') ? 'show' : '' }}" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opciones:</h6>
            <a class="collapse-item {{ request()->routeIs('weather.list') ? 'active' : '' }}" href="{{ route('weather.index') }}">Realizar nueva busqueda</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>

  