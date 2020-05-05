@extends('layouts.head')

@section('title', 'Ubah Data Admin')

@include('layouts.head')

@include('layouts.navbar')
    
@include('layouts.content')
    @yield('breadcrumb')

    <div class="container-fluid">
            <div class="row">
                <div class="col-10 col-md-10 col-sm-10">
                    <div class="card card-secondary card-outline">
                        {{-- BUTTON TAMBAH --}}
                        <div class="card-header">
                            <h4 class="card-title">Formulir Ubah Data Pengajar</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="/admin/{{ $admin->id }}">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label>NIK :</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                                            </div>
                                            <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" placeholder="Masukkan Nomor Induk Kependudukan dalam KTP" value="{{ $admin->nik }}">
                                            @error('nik') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    {{-- col-6 --}}
                                    <div class="col-6">
                                        <label>Nama Lengkap :</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Nama Lengkap Sesuai KTP" value="{{ $admin->nama }}">
                                            @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                        </div>
                                    </div>
                                    {{-- col-6 --}}
                                </div>
                                {{-- row --}}
                            </div>
                            <!-- /.form group -->
                            
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label>Jabatan :</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                                            </div>
                                            <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" placeholder="Masukkan Jabatan" value="{{ $admin->jabatan }}">
                                            @error('jabatan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    {{-- col-6 --}}
                                    <div class="col-6">
                                        <label>Bidang :</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                                            </div>
                                            <input type="text" class="form-control @error('bidang') is-invalid @enderror" id="bidang" name="bidang" placeholder="Masukkan Bidang" value="{{ $admin->bidang }}">
                                            @error('bidang') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    {{-- col-6 --}}
                                </div>
                                {{-- row --}}
                            </div>
                            <!-- /.form group -->
                            
                            <div style="text-align: center">
                                <button type="submit" class="btn btn-primary">Ubah Data Admin</button>
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

