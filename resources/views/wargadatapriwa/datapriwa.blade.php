@extends('layoutwarga.head')

@section('title', 'Detail Data Pribadi Warga')

@include('layoutwarga.head')

@include('layoutwarga.navbar')
    
@include('layoutwarga.content')
    @yield('breadcrumb')

    <div class="container-fluid">
        {{-- @if (Auth::user()->email == $warga->email) --}}
            
            <div class="row">
                <div class="col-12 col-md-12 col-sm-12">
                    <div class="card card-secondary card-outline">
                        {{-- BUTTON TAMBAH --}}
                        <div class="card-header">
                            <h4 class="card-title"><strong>{{ $warga->nama }}, {{ $warga->courses->keterampilan }}</strong></h4>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
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
                                        <th>Keterampilan</th>
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
                            <br>
                        </div>
                    </div>
                    {{-- card --}}
                </div>
                {{-- col-12 --}}
            </div>
            {{-- row --}}
        </div>
        {{-- container-fluid --}}
        
        {{-- <div class="container-fluid">
            <div class="row">
                <div class="col-6 col-md-6 col-sm-6">
                    <div class="card card-secondary card-outline">
                        <div class="card-header">
                            <h4 class="card-title">Keahlian</h4>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped col-12">
                                <tbody>
                                    <thead>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </thead>
                                        @foreach ($skill as $skills)
                                        <tr>
                                            <th>Keahlian {{ $loop->iteration }}</th>
                                            <th>:</th>
                                            <td>{{ $skills->ahli1 }}</td>
                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                            <br>
                        </div>
                    </div>
                    {{-- card -}}
                </div>
                {{-- col-6 -}}

                <div class="col-6 col-md-6 col-sm-6">
                        <div class="card card-secondary card-outline">
                            <div class="card-header">
                                <h4 class="card-title">Pengalaman Kerja</h4>
                                <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped col-12">
                                    <tbody>
                                        <thead>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </thead>
                                            @foreach ($experience as $experiences)
                                                <tr>
                                                    <th>Pengalaman {{ $loop->iteration }}</th>
                                                    <th>:</th>
                                                    <td>{{ $experiences->pengalaman1 }}</td>
                                                </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                                <br>
                            </div>
                        </div>
                        {{-- card -}}
                    </div>
                    {{-- col-6 -}}
                    <div class="d-flex justify-content-center" style="align: center">
                        <div class="p-2">
                            <a href="/pengajardatapriwa" class="btn btn-secondary btn-block d-inline my-5">Kembali</a>
                        </div>
                    </div>
                    
            </div>
            {{-- row -}}
        </div>
        {{-- container-fluid --}}
        <br><br><br>


@include('layoutwarga.sidebar')
    
@include('layoutwarga.footer')

@include('layoutwarga.script')
    @yield('pagetable')

