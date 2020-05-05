@extends('layoutpimpinan.head')

@section('title', 'Penilaian Kinerja')

@include('layoutpimpinan.head')

@include('layoutpimpinan.navbar')
    
@include('layoutpimpinan.content')
    @yield('breadcrumb')
    @yield('alert')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-9 col-md-9 col-sm-9">
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <h4 class="card-title">Laporan Warga</h4>
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
                                        <th>Keterampilan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $warga as $warga  )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $warga->nik }}</td>
                                        <td>{{ $warga->nama }}</td>
                                        <td>{{ $warga->courses->keterampilan }}</td>
                                        <td>
                                            <a href="/lapwarga/{{ $warga->nik }}" class="badge badge-info" target="_blank">Cetak Data</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Keterampilan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    {{-- card --}}
                </div>
                {{-- col-9 --}}

                <div class="col-md-3">
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            </i><h5>Cetak Laporan Data Pribadi Warga</h5>
                        </div>
                        <div class="card-body">
                            <a href="/lapdapriwa"class="btn btn-outline-info btn-block" target="_blank">Cetak Laporan</a>
                        </div>
                    </div>
                    {{-- card --}}

                    <div class="card card-info card-outline">
                        <div class="card-header">
                            </i><h5>Cetak Laporan Penilaian Kinerja Kerja Warga</h5>
                        </div>
                        <div class="card-body">
                            <a href="/lapkinerja" class="btn btn-outline-info btn-block" target="_blank">Cetak Laporan</a>
                        </div>
                    </div>
                    {{-- card --}}
                </div>
                {{-- col --}}
            </div>
            {{-- row --}}
        </div>
        {{-- container-fluid --}}
    </section>
    {{-- Section Content --}}

@include('layoutpimpinan.sidebar')

@include('layoutpimpinan.footer')

@include('layoutpimpinan.script')
    @yield('pagetable')