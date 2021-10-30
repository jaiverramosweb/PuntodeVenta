<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <div class="nav-link">
          <div class="profile-image">
            <img src="images/faces/face5.jpg" alt="image"/>
          </div>
          <div class="profile-name">
            <p class="name">
              Welcome Jane
            </p>
            <p class="designation">
              Super Admin
            </p>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index-2.html">
          <i class="fa fa-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      @can('category_index')
        <li class="nav-item">
          <a class="nav-link" href="{{ route('categories.index') }}">
            <i class="fa fa-puzzle-piece menu-icon"></i>
            <span class="menu-title">Cregorias</span>
          </a>
        </li>
      @endcan

      @can('provider_index')
        <li class="nav-item">
          <a class="nav-link" href="{{ route('providers.index') }}">
            <i class="fa fa-puzzle-piece menu-icon"></i>
            <span class="menu-title">Proveedores</span>
          </a>
        </li>
      @endcan

      @can('product_index')
        <li class="nav-item">
          <a class="nav-link" href="{{ route('products.index') }}">
            <i class="fa fa-puzzle-piece menu-icon"></i>
            <span class="menu-title">Producto</span>
          </a>
        </li>
      @endcan

      @can('client_index')
      <li class="nav-item">
        <a class="nav-link" href="{{ route('clients.index') }}">
          <i class="fa fa-puzzle-piece menu-icon"></i>
          <span class="menu-title">Clientes</span>
        </a>
      </li>
      @endcan

      @can('purchase_index')
      <li class="nav-item">
        <a class="nav-link" href="{{ route('purchases.index') }}">
          <i class="fa fa-puzzle-piece menu-icon"></i>
          <span class="menu-title">Compras</span>
        </a>
      </li>
      @endcan

      @can('sale_index')
      <li class="nav-item">
        <a class="nav-link" href="{{ route('sales.index') }}">
          <i class="fa fa-puzzle-piece menu-icon"></i>
          <span class="menu-title">Ventas</span>
        </a>
      </li>
      @endcan

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
          <i class="fab fa-trello menu-icon"></i>
          <span class="menu-title">Usuarios</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="page-layouts">
          <ul class="nav flex-column sub-menu">
            @can('user_index')
              <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{ route('users.index') }}">Usuario</a></li>
            @endcan

            @can('role_index')
              <li class="nav-item"> <a class="nav-link" href="{{ route('roles.index') }}">Roles</a></li>
            @endcan

            @can('permissions_index')
              <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{ route('permissions.index') }}">Permisos</a></li>
            @endcan
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#page-layouts2" aria-expanded="false" aria-controls="page-layouts2">
          <i class="fab fa-trello menu-icon"></i>
          <span class="menu-title">Reportes</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="page-layouts2">
          <ul class="nav flex-column sub-menu">
            @can('reports_day')
              <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{ route('reports.day') }}">Dia</a></li>
            @endcan

            @can('reports_date')
              <li class="nav-item"> <a class="nav-link" href="{{ route('reports.date') }}">Fecha</a></li>
            @endcan
          </ul>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="pages/documentation.html">
          <i class="far fa-file-alt menu-icon"></i>
          <span class="menu-title">Documentation</span>
        </a>
      </li>
    </ul>
  </nav>