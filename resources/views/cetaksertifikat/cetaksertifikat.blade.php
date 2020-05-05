@extends('layouts.head')

@section('title', 'Cetak Sertifikat')

@include('layouts.head')

@include('layouts.navbar')
    
@include('layouts.content')
    @yield('breadcrumb')
    @yield('alert')

    <section class="content">

    {{-- TABEL DATA PRIBADI --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12 col-sm-12">
                <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <h4 class="card-title">Data Cetak Sertifikat</h4>
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
                                    <th>Jenis Kelamin</th>
                                    <th>Kelas Keterampilan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                                <tbody>
                                    @foreach( $certificates as $warga )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $warga->nik }}</td>
                                        <td>{{ $warga->nama }}</td>
                                        <td>{{ $warga->kelamin }}</td>
                                        <td>{{ $warga->courses->keterampilan }}</td>
                                        <td>{{ $warga->stats->keterangan }}</td>
                                        <td>
                                            <a href="/sertifikat/{{ $warga->nik }}" class="badge badge-info" target="_blank">Cetak Sertifikat</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Kelas Keterampilan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                        </table>
                    </div>
                    {{-- @endforeach --}}
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
    
@include('layouts.sidebar')

@include('layouts.footer')

@include('layouts.script')
    @yield('pagetable')