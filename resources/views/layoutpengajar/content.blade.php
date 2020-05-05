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
        @if ($errors->any())
            <div class="alert alert-danger">
              @foreach ($errors->all() as $error)
                {{ $error }}
              @endforeach
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
                      <h2 class="m-0 text dark">Selamat Datang Pengajar, di Sistem Informasi Sumber Daya Manusia!</h2>
                    </div>
                      <div class="card-body">
                        <p>
                          Sistem digunakan untuk mendata dan memetakan sumber daya manusia yang dibina dan diberdayakan oleh Kampung Marketer. Berikut mekanisme dari sistem ini :
                          <ol>
                            <li>Pengajar pelatihan warga dapat login ke sistem sebagai Pengajar</li>
                            <li>Pengajar yang telah masuk ke sistem mempunyai kemampuan untuk melakukan input nilai hasil ujian yang menggambarkan kinerja dari warga binaan</li>
                            <li>Nilai Kinerja dapat dimasukkan dalam Menu Penilaian Kinerja</li>
                            <li>Nilai Kinerja dapat dikelola oleh Pengajar, dapat dilihat oleh Admin, dan dapat dicetak oleh Pimpinan sebagai Laporan</li>
                          </ol>
                        </p>
                      </div>
                      <div class="card-footer">
                        Universitas Jenderal Soedirman, 2019
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