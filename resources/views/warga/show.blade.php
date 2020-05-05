@extends('layouts.head')

@section('title', 'Detail Data Pribadi')

@include('layouts.head')

@include('layouts.navbar')
    
@include('layouts.content')
    @yield('breadcrumb')
    @yield('alert')

    <div class="container-fluid">
            <div class="row">
                <div class="col-8 col-md-8 col-sm-8">
                    <div class="card card-secondary card-outline">
                        {{-- BUTTON TAMBAH --}}
                        <div class="card-header">
                            <h4 class="card-title">{{ $warga->nama }}</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped col-12">
                                <tbody>
                                    <thead>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </thead>
                                    <tr>
                                        <th>NIK</th>
                                        <th>:</th>
                                        <td>{{ $warga->nik }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <th>:</th>
                                        <td>{{ $warga->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <th>:</th>
                                        <td>{{ $warga->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <th>:</th>
                                        <td>{{ $warga->kelamin }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tempat Lahir</th>
                                        <th>:</th>
                                        <td>{{ $warga->tempatlahir }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <th>:</th>
                                        <td>{{ $warga->tgllahir }}</td>
                                    </tr>
                                    <tr>
                                        <th>Agama</th>
                                        <th>:</th>
                                        <td>{{ $warga->agama }}</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <th>:</th>
                                        <td>{{ $warga->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <th>Kelas Keterampilan</th>
                                        <th>:</th>
                                        <td>{{ $warga->courses->keterampilan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <th>:</th>
                                        <td>{{ $warga->stats->keterangan }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div style="text-align: center">
                                <button type="button" id="ubahwarga" class="btn btn-info d-inline my-5" data-toggle="modal" data-target="#modal-lg" data-id="{{ $warga->id }}">Ubah Data Pribadi</button>
                                <button type="button" class="btn btn-danger d-inline my-5" data-toggle="modal" data-target="#modal-default">Hapus</button>
                                <button onclick="location.href='/datapribadi'" type="button" class="btn btn-secondary d-inline my-5">Kembali</button>
                            </div>
                        </div>
                    </div>
                    {{-- card --}}
                </div>
                {{-- col-6 --}}

                <div class="col-4">
                    <div class="card card-secondary card-outline">
                        {{-- BUTTON TAMBAH --}}
                        <div class="card-header">
                            <h4 class="card-title">Tambah Data Keahlian Warga</h4>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#modal-lg1">Tambah Data Keahlian Warga</button>
                        </div>
                    </div>
                    {{-- card --}}
                    <div class="card card-secondary card-outline">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Data Pengalaman Warga</h4>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#modal-xl2">Tambah Data Pengalaman Warga</button>
                        </div>
                    </div>
                </div>
                {{-- col-4 --}}
                <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header modal-danger modal-outline">
                                <h4 class="modal-title">Hapus data?</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Data pribadi <strong>{{ $warga->nama }}</strong> akan dihapus, Anda yakin?&hellip;</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                    <form action="{{ $warga->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Hapus Data</button>
                                    </form>
                                {{-- <button type="button" class="btn btn-danger">Hapus Data</button> --}}
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
        
                {{-- FORM UBAH DATA --}}
                <div class="modal fade" id="modal-lg" data-keyboard="false" data-backdrop="static">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Formulir Ubah Data Pribadi Warga</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="/warga/{{ $warga->id }}">
                                    @method('patch')
                                    @csrf
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-4">
                                                <label>NIK Warga :</label>
                                                <div class="input-group {{ $errors->get('nik') ? 'has-error' : '' }}">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" placeholder="Masukkan NIK dalam KTP" value="{{ $warga->nik }}">
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
                                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" value="{{ $warga->nama }}">
                                                    @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                                </div>
                                                <!-- /.input group -->
                                            </div>

                                            <div class="col-4">
                                                <label>Email :</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                    </div>
                                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan Email" value="{{ $warga->email }}">
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
                                                    <select name="kelamin" id="{{ $warga->kelamin }}" class="custom-select @error('kelamin') is-invalid @enderror" value="{{ $warga->kelamin }}">
                                                        <option value="">-- Pilih Jenis Kelamin --</option>
                                                        <option value="Laki-laki" {{ $warga->kelamin == 'Laki-laki' ? "selected" : '' }}>Laki-laki</option>
                                                        <option value="Perempuan" {{ $warga->kelamin == 'Perempuan' ? "selected" : '' }}>Perempuan</option>
                                                    </select>
                                                    @error('kelamin') <div class="invalid-feedback">{{ $message }}</div> @enderror
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
                                                    <select name="agama" id="agama" class="custom-select @error('agama') is-invalid @enderror" value="{{ $warga->agama}}">
                                                        <option value="">-- Pilih Agama --</option>
                                                        <option value="Islam" {{ $warga->agama == 'Islam' ? "selected" : '' }}>Islam</option>
                                                        <option value="Kristen" {{ $warga->agama == 'Kristen' ? "selected" : '' }}>Kristen</option>
                                                        <option value="Katolik" {{ $warga->agama == 'Katolik' ? "selected" : '' }}>Katolik</option>
                                                        <option value="Hindu" {{ $warga->agama == 'Hindu' ? "selected" : '' }}>Hindu</option>
                                                        <option value="Buddha" {{ $warga->agama == 'Buddha' ? "selected" : '' }}>Buddha</option>
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
                                                    <select name="keterampilan" id="keterampilan" class="custom-select @error('keterampilan') is-invalid @enderror" value="{{ $warga->keterampilan}}">
                                                        <option value="">-- Pilih Kelas --</option>
                                                        @foreach ($courses as $course)
                                                            <option value="{{ $course->id }}" {{ $warga->pelatihan_id == $course->id ? "selected" : '' }}>{{ $course->keterampilan }}</option>
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
                                                    <input type="text" class="form-control @error('tempatlahir') is-invalid @enderror" id="tempatlahir" name="tempatlahir" placeholder="Masukkan Tempat Lahir" value="{{ $warga->tempatlahir }}">
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
                                                    <input type="date" class="form-control @error('tgllahir') is-invalid @enderror" id="tgllahir" name="tgllahir" value="{{ $warga->tgllahir }}" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
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
                                            <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="Masukkan Alamat Sesuai KTP">{{ $warga->alamat }}</textarea>
                                            @error('alamat') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
        
                                    <div style="text-align: center">
                                        <button type="submit" class="btn btn-info">Ubah Data Pribadi Warga</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
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
        
                {{-- FORM TAMBAH DATA KEAHLIAN --}}
                <div class="modal fade" id="modal-lg1" data-keyboard="false" data-backdrop="static">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Formulir Tambah Data Keahlian Warga</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="float-right">
                                    <div class="input-group-btn">
                                        <button class="btn btn-info add-more" type="button" style="margin-bottom:10px" id="keahlianplus"><i class="fas fa-plus"></i> &nbsp; Form Keahlian</button>
                                    </div>
                                </div>
                                <br><br>
                                    <form method="POST" action="/skill">
                                        @csrf
                                        <input type="hidden" class="form-control" id="id" name="id" value="{{ $warga->id }}">
                                        <div class="form-group">
                                            <label>Keahlian :</label>
                                            <div class="input-group control-group after-add-ahli">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                                                </div>
                                                <select name="addmore[]" id="ahli" class="custom-select">
                                                    <option value="">-- Pilih Keahlian --</option>
                                                    @foreach ($masterexpertises as $masterexpertise)
                                                        <option value="{{ $masterexpertise->id }}">{{ $masterexpertise->expertise }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        {{-- col-4 --}}
                                        
                                        <div style="text-align: center">
                                            <button type="submit" class="btn btn-info">Simpan Data Keahlian</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                        </div>
                                    </form>
        
                                <div class="copy d-none" id="keahlianinput">
                                    <div class="input-group control-group">
                                        <label style="margin-top:10px">Keahlian :</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                                            </div>
                                            <select name="addmore[]" id="ahli" class="custom-select">
                                                <option value="">-- Pilih Keahlian --</option>
                                                @foreach ($masterexpertises as $masterexpertise)
                                                    <option value="{{ $masterexpertise->id }}">{{ $masterexpertise->expertise }}</option>
                                                @endforeach
                                            </select>
                                            <div class="input-group-btn">
                                                <button class="btn btn-danger remove" type="button">Hapus Kolom</button>
                                            </div>
                                        </div>
                                        {{-- input-group --}}
                                    </div>
                                    <!-- /.input group control-group -->
                                </div>
                                <!-- /copy d-none -->
                            </div>
                            {{-- modal-body --}}
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                
        
                {{-- FORM TAMBAH DATA PENGALAMAN --}}
                <div class="modal fade" id="modal-xl2" data-keyboard="false" data-backdrop="static">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Formulir Tambah Data Pengalaman Warga</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="float-right">
                                    <div class="input-group-btn">
                                        <button class="btn btn-info add-more" type="button" style="margin-bottom:10px" id="pengalamanplus"><i class="fas fa-plus"></i> &nbsp; Form Pengalaman</button>
                                    </div>
                                </div>
                                <br><br><br>
                                <form method="POST" action="/experience">
                                    @csrf
                                    <input type="hidden" class="form-control" id="nik" name="nik"value="{{ $warga->nik }}">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-2">
                                                <label>Pengalaman Kerja :</label>
                                            </div>
                                            <div class="col-4">
                                                <div class="input-group control-group after-add-pengalaman">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="pengalaman1" name="addmore[]" placeholder="Pengalaman Kerja" value="{{ old('pengalaman1') }}">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="input-group control-group after-add-tempatkerja">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-hotel"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="tempatkerja" name="tempatkerja[]" placeholder="Tempat Kerja" value="{{ old('tempatkerja') }}">
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="input-group control-group after-add-lamakerja">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="lamakerja" name="lamakerja[]" placeholder="Lama Kerja" value="{{ old('lamakerja') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                    <div style="text-align: center">
                                        <button type="submit" class="btn btn-info">Simpan Data Pengalaman</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                    </div>
                                </form>
        
                                <div class="copy d-none" id="pengalamaninput">
                                    <div class="input-group control-group">
                                        <div class="input-group" style="margin-top:10px">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="pengalaman1" name="addmore[]" placeholder="Pengalaman Kerja" value="{{ old('pengalaman5') }}">
                                            <div class="input-group-btn">
                                                <button class="btn btn-danger remove" type="button"><i class="fas fa-times"></i></button>
                                            </div>
                                        </div>
                                        {{-- input-group --}}
                                    </div>
                                    <!-- /.input group control-group -->
                                </div>
                                <!-- /copy d-none -->

                                <div class="copy d-none" id="pengalamaninput2">
                                    <div class="input-group control-group">
                                        <div class="input-group" style="margin-top:10px">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-hotel"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="pengalaman1" name="tempatkerja[]" placeholder="Tempat Kerja" value="{{ old('pengalaman5') }}">
                                            <div class="input-group-btn">
                                                <button class="btn btn-danger remove" type="button"><i class="fas fa-times"></i></button>
                                            </div>
                                        </div>
                                        {{-- input-group --}}
                                    </div>
                                    <!-- /.input group control-group -->
                                </div>
                                <!-- /copy d-none -->

                                <div class="copy d-none" id="pengalamaninput3">
                                    <div class="input-group control-group">
                                        <div class="input-group" style="margin-top:10px">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="pengalaman1" name="lamakerja[]" placeholder="Lama Kerja" value="{{ old('pengalaman5') }}">
                                            <div class="input-group-btn">
                                                <button class="btn btn-danger remove" type="button"><i class="fas fa-times"></i></button>
                                            </div>
                                        </div>
                                        {{-- input-group --}}
                                    </div>
                                    <!-- /.input group control-group -->
                                </div>
                                <!-- /copy d-none -->
                            </div>
                            {{-- modal-body --}}
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
            {{-- row --}}
        </div>
        {{-- container-fluid --}}
        
@include('layouts.sidebar')
    
@include('layouts.footer')

@include('layouts.script')
    @yield('pagetable')

