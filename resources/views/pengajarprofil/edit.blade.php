@extends('layoutpengajar.head')

@section('title', 'Profil Pengajar')

@include('layoutpengajar.head')

@include('layoutpengajar.navbar')
    
@include('layoutpengajar.content')
    @yield('breadcrumb')
    @yield('alert')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-10 col-md-10 col-sm-10">
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <h4 class="card-title">Formulir Ubah Data Profil Pengajar</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="/pengajarprofil/{{ $user->id }}">
                                @method('patch')
                                @csrf                
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Nama Lengkap :</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Masukkan Nama Lengkap" value="{{$user->name }}">
                                                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        {{-- col-6 --}}
                                        <div class="col-6">
                                            <label>Email :</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                                                </div>
                                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan Email" value="{{ $user->email }}">
                                                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        {{-- col-6 --}}
                                    </div>
                                    {{-- row --}}
                                </div>
                                <!-- /.form group -->

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Jabatan (Fungsional) :</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                                                </div>
                                                <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" placeholder="Masukkan Jabatan Fungsional" value="{{ $user->jabatan }}">
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
                                                <input type="text" class="form-control @error('bidang') is-invalid @enderror" id="bidang" name="bidang" placeholder="Masukkan Bidang" value="{{ $user->bidang }}">
                                                @error('bidang') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        {{-- col-6 --}}
                                    </div>
                                    {{-- row --}}
                                </div>
                                <!-- /.form group -->

                                <div class="form-group">
                                    <label>Jabatan (Role) :</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                                        </div>
                                        <select name="role" id="role" class="custom-select">
                                            <option value="">-- Pilih Jabatan --</option>
                                            <option value="1">1 -- Administrator</option>
                                            <option value="2">2 -- Pengajar</option>
                                            <option value="3">3 -- Manajer</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.form group -->
                                
                                <div style="text-align: center">
                                    <button type="submit" class="btn btn-primary">Ubah Data Profil Pengajar</button>
                                    <a href="/pengajarprofil" class="btn btn-secondary">Kembali</a>
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
    </section>
    {{-- Section Content --}}

    @include('layoutpengajar.sidebar')

    @include('layoutpengajar.footer')

    @include('layoutpengajar.script')