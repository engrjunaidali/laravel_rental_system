  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Rental System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
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
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-item">
                <a href="/admin" class="nav-link {{(Route::current()->getName()) == 'Dashboard' ? 'active' : ''}}">
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>

              {{-- Properties --}}
               <li class="nav-item">
                <a href="/properties" class="nav-link {{(Route::current()->getName()) == 'properties' ? 'active' : ''}}">
                  <i class="nav-icon fas fa-building"></i>
                  <p>
                    Properties
                  </p>
                </a>
              </li>
              
              {{-- Leases --}}
              <li class="nav-item">
                <a href="/leases" class="nav-link {{(Route::current()->getName()) == 'leases' ? 'active' : ''}}">
                  <i class="nav-icon fas fa-building"></i>
                  <p>
                    Leases
                  </p>
                </a>
              </li>

              {{-- Employees --}}
               <li class="nav-item">
                <a href="/employees" 
                class="nav-link {{(Route::current()->getName()) == 'employees' ? 'active' : ''}}">
                  <i class="nav-icon fa fa-users"></i>
                  <p>
                    Employees
                  </p>
                </a>
              </li>

              {{-- Logout --}}
              
                <li class="nav-item">
                  
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();" class="nav-link">
                  <i class="nav-icon fa fa-location-arrow"></i>
                  <p>
                    Logout
                  </p>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
                
              </li>
           
              
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>