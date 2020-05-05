@extends('layouts.head')

    @section('title', 'Registrasi Pengguna')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>SISDM | @yield('title')</title>
<!-- Font Awesome Icons -->
    <link rel="stylesheet" href={{url("plugins/fontawesome-free/css/all.min.css")}}>
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href={{url("plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}>
    <!-- Theme style -->
    <link rel="stylesheet" href={{url("dist/css/adminlte.min.css")}}>
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" href={{url("plugins/datatables-bs4/css/dataTables.bootstrap4.css")}}>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Favicon Web Browser -->
    <link rel="icon" type="image/png" href="{{url("dist/img/KM16.png")}}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{url("dist/img/KM32.png")}}" sizes="32x32">
    
    <!-- Script -->
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3348689c57.js" crossorigin="anonymous"></script>
</head>
<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <div class="image">
                <img src="{{url("dist/img/km FIX.png")}}" class="" style="margin-left:-75px" alt="Kampung Marketer">
            </div>
        </div>

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

        <div class="card">
            <div class="card-body card-primary card-outline register-card-body">
                <p class="login-box-msg"><strong>Registrasi Pengguna Baru</strong></p>
                <form action="/registrasi" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Masukkan Nama Lengkap" value="{{ old('name') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan Email" value="{{ old('email') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Masukkan Password" value="{{ old('password') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="input-group mb-3">
                        <select name="role" id="role" class="custom-select @error('role') is-invalid @enderror" value="{{ old('role') }}">
                            <option value="">-- Pilih Jabatan --</option>
                            @foreach ($groups as $group)
                                <option value="{{ $group->role }}">{{ $group->keterangan }}</option>
                            @endforeach
                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-network-wired"></span>
                            </div>
                        </div>
                        @error('role') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="row">
                        <!-- /.col -->
                        <div class="col-6">
                            <a href="/login" class="btn btn-primary btn-block">Kembali  &nbsp; <i class="fas fa-chevron-circle-left" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-danger btn-block">Registrasi &nbsp; <i class="fas fa-user-plus" aria-hidden="true"></i></button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
        </div>
        <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
</body>
   

    @include('layouts.script')
