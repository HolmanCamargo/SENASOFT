 <nav class="main-header navbar navbar-expand navbar-dark navbar-success">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('tecnovi.index') }}" class="nav-link {{ ! Route::is('tecnovi.*') ?: 'active' }}">{{ __('Tecnovi') }}</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('insumos.index') }}" class="nav-link {{ ! Route::is('insumos.*') ?: 'active' }}">{{ __('Insumos') }}</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('seguimiento.index') }}" class="nav-link {{ ! Route::is('seguimiento.*') ?: 'active' }}">{{ __('Animal Tracking') }}</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('operadores.index') }}" class="nav-link {{ ! Route::is('operadores.*') ?: 'active' }}">{{ __('Operators') }}</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('general/libs/AdminLTE/dist/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('general/libs/AdminLTE/dist/img/user8-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('general/libs/AdminLTE/dist/img/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
       <!-- Language Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          @if(session('lang')!='en')
              <img src="{{ asset('general/images/colombia_r.svg') }}" class="icon-bar" alt="User Image" style="width: 20px; height: 20px;">
          @else
              <img src="{{ asset('general/images/estados-unidos-de-america_r.svg') }}" class="icon-bar" alt="User Image" style="width: 20px; height: 20px;">
          @endif
        </a>
        <div class="dropdown-menu dropdown-menu-right p-0">
          <a href="{{ url('lang', ['en']) }}" class="dropdown-item">
            <img src="{{ asset('general/images/estados-unidos-de-america_r.svg') }}" class="icon-bar" alt="User Image" style="width: 20px; height: 20px;"> English
          </a>
          <a href="{{ url('lang', ['es']) }}" class="dropdown-item">
            <img src="{{ asset('general/images/colombia_r.svg') }}" class="icon-bar" alt="User Image" style="width: 20px; height: 20px;"> Spanish
          </a>
        </div>
      </li>
    </ul>
  </nav>