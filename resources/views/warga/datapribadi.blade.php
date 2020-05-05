 @extends('layouts.head')

    @section('title', 'Data Pribadi')

    @include('layouts.head')
    
    @include('layouts.navbar')
        
    @include('layouts.content')
        @yield('breadcrumb')
        @yield('alert')

    <section class="content">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Warga Diberdayakan</span>
                        <span class="info-box-number">{{ $wrg }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-ad"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Warga Advertiser</span>
                        <span class="info-box-number">{{ $adv }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-concierge-bell"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Warga Customer Service</span>
                        <span class="info-box-number">{{ $cs }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->  
        </div>
        <!-- /.row -->
        
        {{-- MODALS TAMBAH DATA PRIBADI WARGA  --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12 col-sm-12">
                    <div class="card card-secondary card-outline">
                        {{-- BUTTON TAMBAH --}}
                        <div class="card-header">
                            <h4 class="card-title">Tambah Data Pribadi Warga</h4>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#modal-lg">Tambah Data Pribadi Warga</button>
                        </div>
                    </div>
                    {{-- card --}}
                </div>
                {{-- col-12 --}}
            </div>
            {{-- row --}}
        </div>
        {{-- container-fluid --}}

        <div class="modal fade" id="modal-lg" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Formulir Tambah Data Pribadi Warga</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="/warga">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-4">
                                        <label>NIK Warga :</label>
                                        <div class="input-group {{ $errors->get('nik') ? 'has-error' : '' }}">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                                            </div>
                                            <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" placeholder="Masukkan NIK dalam KTP" value="{{ old('nik') }}">
                                            @error('nik') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                            @foreach ($errors->get('nik') as $errornik) @endforeach
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    {{-- col-4  --}}

                                    <div class="col-4">
                                        <label>Nama Warga :</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" value="{{ old('nama') }}">
                                            @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                        </div>
                                        <!-- /.input group -->
                                    </div>

                                    <div class="col-4">
                                        <label>Email Warga :</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                            </div>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan Email" value="{{ old('email') }}">
                                            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                {{-- row --}}
                            </div>
                            <!-- /.form group -->
                            
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-4">
                                        <label>Jenis Kelamin :</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                                            </div>
                                            <select name="kelamin" id="kelamin" class="custom-select @error('kelamin') is-invalid @enderror" value="{{ old('kelamin') }}">
                                                <option value="">-- Pilih Jenis Kelamin --</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                            @error('kelamin') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                            {{-- <input type="text" class="form-control @error('kelamin') is-invalid @enderror" id="kelamin" name="kelamin" placeholder="Jenis Kelamin (L/P)" value="{{ old('kelamin') }}">
                                            @error('kelamin') <div class="invalid-feedback">{{ $message }}</div> @enderror --}}
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    {{-- col-4 --}}

                                    <div class="col-4">
                                        <label>Agama :</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pray"></i></span>
                                            </div>
                                            <select name="agama" id="agama" class="custom-select @error('agama') is-invalid @enderror" value="{{ old('agama') }}">
                                                <option value="">-- Pilih Agama --</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                            </select>
                                            @error('agama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                            {{-- <input type="text" class="form-control @error('agama') is-invalid @enderror" id="agama" name="agama" placeholder="Masukkan Agama Sesuai KTP" value="{{ old('agama') }}"> --}}
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    {{-- col-4 --}}

                                    <div class="col-4">
                                        <label>Kelas Keterampilan :</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-clipboard-check"></i></span>
                                            </div>
                                            <select name="keterampilan" id="keterampilan" class="custom-select @error('keterampilan') is-invalid @enderror" value="{{ old('keterampilan') }}">
                                                <option value="">-- Pilih Kelas --</option>
                                                @foreach ($courses as $course)
                                                    <option value="{{ $course->id }}">{{ $course->keterampilan }}</option>
                                                @endforeach
                                            </select>
                                            @error('keterampilan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    {{-- col-4 --}}
                                </div>
                                {{-- row --}}
                            </div>
                            <!-- /.form group -->

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-4">
                                        <label>Tempat Lahir :</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                                            </div>
                                            <input type="text" class="form-control @error('tempatlahir') is-invalid @enderror" id="tempatlahir" name="tempatlahir" placeholder="Masukkan Tempat Lahir" value="{{ old('tempatlahir') }}">
                                            @error('tempatlahir') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    {{-- col-4 --}}

                                    <div class="col-8">
                                        <label>Tanggal Lahir :</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                            </div>
                                            <input type="date" class="form-control @error('tgllahir') is-invalid @enderror" id="tgllahir" name="tgllahir" value="{{ old('tgllahir') }}" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                            @error('tgllahir') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    {{-- col-4 --}}
                                </div>
                                {{-- row --}}
                            </div>
                            <!-- /.form group -->

                            <div class="form-group">
                                <label>Alamat :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                                    </div>
                                    <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="Masukkan Alamat Sesuai KTP" value="{{ old('alamat') }}"></textarea>
                                    @error('alamat') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <div style="text-align: center">
                                <button type="submit" class="btn btn-info">Simpan Data Pribadi Warga</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                {{-- <a href="/datapribadi" class="btn btn-secondary">Kembali</a> --}}
                            </div>
                        </form>
                    </div>
                    {{-- modal-body --}}
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        {{-- TABEL DATA PRIBADI --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12 col-sm-12">
                    <div class="card card-secondary card-outline">
                        <div class="card-header">
                            <h4 class="card-title">Kelola Data Pribadi</h4>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Kelas Keterampilan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        @foreach( $wargas as $warga )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $warga->nik }}</td>
                                            <td>{{ $warga->nama }}</td>
                                            <td>{{ $warga->email }}</td>
                                            <td>{{ $warga->kelamin }}</td>
                                            <td>{{ $warga->courses->keterampilan }}</td>
                                            <td>{{ $warga->stats->keterangan }}</td>
                                            <td>
                                                <a href="/warga/{{ $warga->id }}" class="badge badge-info">Lihat Detail Data</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Kelas Keterampilan</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                            </table>
                        </div>
                        {{-- @endforeach --}}
                    </div>
                    {{-- card --}}
                </div>
                {{-- col-md-12 --}}
            </div>
            {{-- row --}}
        </div>
        {{-- Container Fluid --}}
        
    </section>
    {{-- Section Content --}}
    
@include('layouts.sidebar')

@include('layouts.footer')

@include('layouts.script')
    @yield('pagetable')