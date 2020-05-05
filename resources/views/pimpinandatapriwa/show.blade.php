@extends('layoutpimpinan.head')

@section('title', 'Detail Data Pribadi Warga')

@include('layoutpimpinan.head')

@include('layoutpimpinan.navbar')
    
@include('layoutpimpinan.content')
    @yield('breadcrumb')
    @yield('alert')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12 col-sm-12">
                <div class="card card-info card-outline">
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
                                @if($warga->nik == null)
                                <tr>
                                    Data Pribadi warga belum terisi
                                </tr>
                                @else
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
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- card --}}
            </div>
            {{-- col-12 --}}
        </div>
        {{-- row --}}
    </div>
    {{-- container-fluid --}}
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 col-md-6 col-sm-6">
                <div class="card card-info card-outline">
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
                                        <td>{{ $skills->masterexpertises->expertise }}</td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- card --}}
            </div>
            {{-- col-6 --}}

            <div class="col-6 col-md-6 col-sm-6">
                <div class="card card-info card-outline">
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
                                @if($experiences == null)
                                <tr>
                                    Data Pengalaman warga belum terisi
                                </tr>
                                @else
                                    @foreach ($experiences as $experience)
                                        <tr>
                                            <th>Pengalaman {{ $loop->iteration }}</th>
                                            <th>:</th>
                                            <td>{{ $experience->pengalaman1 }}</td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        <br>
                    </div>
                </div>
                {{-- card--}}
            </div>
            {{-- col-6 --}}
        </div>
        {{-- row--}}
    </div>
    {{--container-fluid --}}
    <br><br>

@include('layoutpimpinan.sidebar')
    
@include('layoutpimpinan.footer')

@include('layoutpimpinan.script')