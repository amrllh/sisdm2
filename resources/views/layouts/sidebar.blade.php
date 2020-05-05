<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/dashboard')}}" class="brand-link">
      <img src="{{url("dist/img/KM.jpg")}}" alt="SI Sumber Daya Manusia" class="brand-image img-circle elevation-3">
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
          <a href="#" class="d-block">Administrator</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="{{ url('/dashboard')}}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <div class="dropdown-divider"></div>

            <li class="nav-header">Menu Warga Binaan</li>
            <li class="nav-item">
              <a href="{{ url('/datapribadi')}}" class="nav-link">
              <i class="nav-icon fas fa-portrait"></i>
                <p>
                  Data Pribadi
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/datakeahlian')}}" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
                <p>
                  Data Keahlian
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/datapengalaman')}}" class="nav-link">
              <i class="nav-icon fas fa-file-contract"></i>
                <p>
                  Data Pengalaman Kerja
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/nilaikinerja')}}" class="nav-link">
              <i class="nav-icon fas fa-file-signature"></i>
                <p>
                  Penilaian Kinerja
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/cetaksertifikat')}}" class="nav-link">
              <i class="nav-icon fas fa-print"></i>
                <p>
                  Cetak Sertifikat
                </p>
              </a>
            </li>
            <div class="dropdown-divider"></div>

            <li class="nav-header">Menu Data Karyawan</li>
            <li class="nav-item">
              <a href="{{ url('/datalogin')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
                <p>
                  Data Login
                </p>
              </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/datapimpinan')}}" class="nav-link">
                  <i class="nav-icon fas fa-user-tie"></i>
                  <p>
                    Data Pimpinan
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/datapengajar')}}" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                  <p>
                    Data Pengajar
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/dataadmin')}}" class="nav-link">
                <i class="nav-icon fas fa-user-cog"></i>
                  <p>
                    Data Admin
                  </p>
                </a>
              </li>
              <div class="dropdown-divider"></div>

              <li class="nav-header">Menu Kelola Sistem</li>
              <li class="nav-item">
                <a href="{{ url('/dataketerampilan')}}" class="nav-link">
                <i class="nav-icon fas fa-clipboard-check"></i>
                  <p>
                    Data  Kelas Keterampilan
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/datarole')}}" class="nav-link">
                <i class="nav-icon fas fa-clipboard-check"></i>
                  <p>
                    Data Role
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/datamasterexpertise')}}" class="nav-link">
                <i class="nav-icon fas fa-clipboard-check"></i>
                  <p>
                    Data Master Keahlian
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/datastatus')}}" class="nav-link">
                <i class="nav-icon fas fa-clipboard-check"></i>
                  <p>
                    Data Status
                  </p>
                </a>
              </li>
              <div class="dropdown-divider"></div>
              <br><br><br><br>
              <br><br><br><br>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>