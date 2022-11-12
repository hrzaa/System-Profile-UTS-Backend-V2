<aside class="main-sidebar sidebar-dark-primary elevation-4 bg-dark">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Sistem Profile</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/img/{{Auth::user()->foto }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            @if (Auth::check())
            <a href="/profile50" class="d-block">{{ Auth::user()->name }}</a>
            @else
            <a href="/login50" class="d-block">Guest</a>
            @endif
        </div>
      </div>

          <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
              <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                  </button>
              </div>
            </div>
          </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-accordion="false">
          <li class="nav-item">
            <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           @if ($role == "User")
          <li class="nav-item">
            <a href="#" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
              <p>User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/profile50" class="nav-link {{ request()->is('profile50') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data User</p>
                </a>
              </li> 
              
          </ul>
        </li>  
        @endif
            {{-- @if (Auth::check()) --}}
                @if ($role == "Admin")
                <li class="nav-item ">
                    <a href="/users50" class="nav-link {{ request()->is('users50') ? 'active' : '' }}">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <p>Users</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="/agama50" class="nav-link {{ request()->is('agama50') ? 'active' : '' }}">
                    <i class="fa fa-list-alt" aria-hidden="true"></i>
                    <p>Agama</p>
                    </a>
                </li>
                @endif
            {{-- @endif --}}
            <li class="nav-item">
                @if (!Auth::check())
                <a href="/login50" class="nav-link">
                  <p>Login</p>
                </a>
                @else
                <a href="/logout50" class="nav-link">
                  <i class="fas fa-power-off"></i>
                  <p>Logout</p>
                </a>
                @endif
            </li>
        </ul>
      </nav>
    </div>
  </aside>
