 <aside class="main-sidebar sidebar-light-warning elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('tecnovi.index') }}" class="brand-link navbar-warning">
      <img src="{{ asset('general/images/oveja.png') }}" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
      <span class="brand-text font-weight-light">TECNOVI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('general/images/usuario.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ __('Welcome') }}</a>
        </div>
      </div>
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('general/images/logosicefa.png') }}" class="" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ __('Back to SICEFA') }}</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item">
            <a href="{{ route('tecnovi.index') }}" class="nav-link {{ ! Route::is('tecnovi.index') ?: 'active' }}">
              <i class="fas fa-home"></i>
              <p>
                {{ __('Home') }}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('tecnovi.poblacion') }}" class="nav-link {{ ! Route::is('tecnovi.poblacion') ?: 'active' }}">
              <i class="fas fa-venus-mars"></i>
              <p>
                {{ __('Sheep Population') }}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('tecnovi.desarrolladores') }}" class="nav-link {{ ! Route::is('tecnovi.desarrolladores') ?: 'active' }}">
              <i class="fas fa-users"></i>
              <p>
                {{ __('Developers') }}
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>