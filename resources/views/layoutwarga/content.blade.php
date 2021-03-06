{{-- CONTENT --}}
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      {{-- Breadcrumb --}}
      @section('breadcrumb')
          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h3 class="m-0 text-dark">@yield('title')</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/home')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">@yield('title')</li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->
      @endsection

      @section('alert')
      @if (session('statuscreate'))
          <div class="alert alert-success">
              {{ session('statuscreate') }}
          </div>
      @endif
      @if (session('statusupdate'))
          <div class="alert alert-info">
              {{ session('statusupdate') }}
          </div>
      @endif
      @if (session('statusdelete'))
          <div class="alert alert-danger">
              {{ session('statusdelete') }}
          </div>
      @endif
      @if (session('statusakun'))
              <div class="alert alert-danger">
                  {{ session('statusakun') }}
              </div>
          @endif
      @endsection

      @section('dashboard')        
            <!-- Main content -->
            <section class="content">
              <div class="container-fluid">        
                <!-- Main row -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                      <h2 class="m-0 text dark">Selamat Datang Warga, di Sistem Informasi Sumber Daya Manusia!</h2>
                    </div>
                    <div class="card-body">
                      <p>
                        Sistem digunakan untuk mendata dan memetakan sumber daya manusia yang dibina dan diberdayakan oleh Kampung Marketer. Berikut mekanisme dari sistem ini :
                        <ol>
                          <li>Warga dapat login ke sistem sebagai Warga Binaan</li>
                          <li>Warga yang telah masuk ke sistem mempunyai kemampuan untuk melihat Data Pribadi dan Data Nilai</li>
                          <li>Nilai Kinerja dikelola oleh Pengajar dan Data Pribadi dikelola oleh Administrator</li>
                        </ol>
                      </p>
                    </div>
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->        
        
                    
              </div>
              <!--/. container-fluid -->
            </section>
            <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
        @endsection
      
        <!-- Control Sidebar -->
      {{-- <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside> --}}
      <!-- /.control-sidebar -->

      {{-- END OF CONTENT --}}