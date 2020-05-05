@extends('layouts.head')

@section('title', 'Tambah Data Admin')

@include('layouts.head')

@include('layouts.navbar')
    
@include('layouts.content')
    @yield('breadcrumb')

    <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12 col-sm-12">
                    <div class="card card-secondary card-outline">
                        {{-- BUTTON TAMBAH --}}
                        <div class="card-header">
                            <h4 class="card-title">Formulir Data Admin</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="/admin">
                            @csrf
                            <div class="form-group">
                                <label>NIK :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                                    </div>
                                    <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" placeholder="Masukkan Nomor Induk Kependudukan dalam KTP" value="{{ old('nik') }}">
                                    @error('nik') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                
                            <div class="form-group">
                                <label>Nama Lengkap :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Nama Lengkap Sesuai KTP" value="{{ old('nama') }}">
                                    @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
        
                            <div class="form-group">
                                <label>Jabatan :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                                    </div>
                                    <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" placeholder="Masukkan Jabatan" value="{{ old('jabatan') }}">
                                    @error('jabatan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                        
                            <div class="form-group">
                                <label>Bidang :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                                    </div>
                                    <input type="text" class="form-control @error('bidang') is-invalid @enderror" id="bidang" name="bidang" placeholder="Masukkan Bidang" value="{{ old('bidang') }}">
                                    @error('bidang') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <div style="text-align: center">
                                <button type="submit" class="btn btn-primary">Simpan Data Pengajar</button>
                                <a href="/dataadmin" class="btn btn-secondary">Kembali</a>
                            </div>
                            </form>
                        </div>
                    </div>
                    {{-- card --}}
                </div>
                {{-- col-12 --}}
            </div>
            {{-- row --}}
        </div>
        {{-- container-fluid --}}


@include('layouts.sidebar')
    
@include('layouts.footer')

@include('layouts.script')
    @yield('pagetable')

