@extends('layoutpimpinan.head')

@section('title', 'Profil Pimpinan')

@include('layoutpimpinan.head')

@include('layoutpimpinan.navbar')
    
@include('layoutpimpinan.content')
    @yield('breadcrumb')
    @yield('alert')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                @foreach ($user as $user)
                <div class="col-6 col-md-6 col-sm-6">
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <h4 class="card-title">{{ $user->name }}</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-sm">
                                <tbody>
                                    <thead>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </thead>
                                    <tr>
                                        <th>NIK</th>
                                        <th>:</th>
                                        <td>{{ $user->nik }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <th>:</th>
                                        <td>{{ $user->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <th>:</th>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jabatan</th>
                                        <th>:</th>
                                        <td>{{ $user->jabatan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Bidang</th>
                                        <th>:</th>
                                        <td>{{ $user->bidang }}</td>
                                    </tr>
                                    <tr>
                                        <th>Role Sistem</th>
                                        <th>:</th>
                                        <td>{{ $user->role }} </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <div style="text-align: center">
                            @if (Auth::user()->role == $user->role)
                                @if (Auth::user()->id == $user->id)
                                    <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#modal-lg{{ $loop->iteration }}">Ubah Data Profil</button>
                                @endif
                            @endif
                            </div>
                        </div>
                    </div>
                    {{-- card --}}
                </div>
                {{-- col-6 --}}

                <div class="modal fade" id="modal-lg{{ $loop->iteration }}">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Formulir Ubah Data Profil</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="/pimpinanprofil/{{ $user->id }}">
                                    @method('patch')
                                    @csrf
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-4">
                                                <label>NIK :</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" placeholder="Masukkan NIK" value="{{$user->nik }}">
                                                    @error('nik') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                            {{-- col-6  --}}
                                            <div class="col-4">
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
                                            {{-- col-6  --}}
                                            <div class="col-4">
                                                <label>Email :</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan Email" value="{{ $user->email }}" disabled>
                                                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                            {{-- col-6  --}}
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
                                            {{-- col-6  --}}
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
                                            {{-- col-6  --}}
                                        </div>
                                        {{-- row --}}
                                    </div>
                                    <!-- /.form group -->
                                    <br>
                                    <div style="text-align: center">
                                        <button type="submit" class="btn btn-info">Ubah Data Profil Pimpinan</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                @endforeach
            </div>
            {{-- row --}}
        </div>
        {{-- container-fluid --}}
    </section>
    {{-- Section Content --}}

@include('layoutpimpinan.sidebar')

@include('layoutpimpinan.footer')

@include('layoutpimpinan.script')