<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/dashboardpimpinan')}}" class="brand-link">
      <img src="{{url("dist/img/KM.jpg")}}" alt="" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">SI SDM KM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar small">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url("dist/img/user2-160x160.jpg")}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Pimpinan</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="{{ url('/dashboardpimpinan')}}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <div class="dropdown-divider"></div>

            <li class="nav-header">Menu Warga Binaan</li>
            <li class="nav-item">
              <a href="{{ url('/pimpinandatapriwa')}}" class="nav-link">
              <i class="nav-icon fas fa-portrait"></i>
                <p>
                  Data Pribadi Warga
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/pimpinanlaporan')}}" class="nav-link">
              <i class="nav-icon fas fa-file-signature"></i>
                <p>
                  Laporan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/pimpinankelulusan')}}" class="nav-link">
                <i class="nav-icon fas fa-graduation-cap"></i>
                <p>
                  Kelulusan Warga
                </p>
              </a>
            </li>
            <div class="dropdown-divider"></div>

            <li class="nav-header">Menu Pimpinan</li>
            <li class="nav-item">
              <a href="{{ url('/pimpinanprofil')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
                <p>
                  Data Profil
                </p>
              </a>
            </li>
            <div class="dropdown-divider"></div>

            
            
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>