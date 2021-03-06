<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('images/laravel.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">DIAGNOSA KLINIK</a>
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
                <a href="{{ asset('dashboard') }}" class="nav-link {{ Request::is('dashboard') ?'active' :'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>

     
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
             
              <li class="nav-item">
                <a href="{{ asset('admin.paket') }}" class="nav-link {{ Request::is('admin.paket') ?'active' :'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DATA PAKET</p>
                </a>
              </li>



              <li class="nav-item" >
                <a href="{{ asset('admin.admin') }}" class="nav-link {{ Request::is('admin.admin') ?'active' :'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DATA ADMIN</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ asset('admin.pasien') }}" class="nav-link {{ Request::is('admin.pasien') ?'active' :'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DATA PASIEN</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ asset('admin.pasien') }}" class="nav-link {{ Request::is('admin.pasien') ?'active' :'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>HASIL MCU</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>