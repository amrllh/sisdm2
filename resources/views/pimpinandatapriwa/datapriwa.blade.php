@extends('layoutpimpinan.head')

@section('title', 'Data Pribadi')

@include('layoutpimpinan.head')

@include('layoutpimpinan.navbar')
    
@include('layoutpimpinan.content')
    @yield('breadcrumb')
    @yield('alert')

    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Warga Diberdayakan</span>
                        <span class="info-box-number">{{ $wrg }}</span>
                    </div>
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
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->  
        </div>
        <!-- /.row -->

        {{-- TABEL DATA PRIBADI --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12 col-sm-12">
                    <div class="card card-info card-outline">
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
                                        @foreach( $warga as $warga  )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $warga->nik }}</td>
                                            <td>{{ $warga->nama }}</td>
                                            <td>{{ $warga->email }}</td>
                                            <td>{{ $warga->kelamin }}</td>
                                            <td>{{ $warga->courses->keterampilan }}</td>
                                            <td>{{ $warga->stats->keterangan }}</td>
                                            <td>
                                                <a href="/pimpinandatapriwa/{{ $warga->nik }}" class="badge badge-info">Lihat Detail Data </a>
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

@include('layoutpimpinan.sidebar')

@include('layoutpimpinan.footer')

@include('layoutpimpinan.script')
    @yield('pagetable')