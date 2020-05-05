@extends('layouts.head')

    @section('title', 'Data Pengalaman Kerja')

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
                            <h4 class="card-title">Kelola Data Pengalaman Kerja Warga</h4>
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
                                        <th>Pengalaman</th>
                                        <th>Tempat Kerja</th>
                                        <th>Lama Kerja</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        @foreach( $experience as $experience  )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $experience->nik }}</td>
                                            <td>{{ $experience->nama }}</td>
                                            <td>{{ implode(", ", array_column($experience->experiences->toArray(), 'pengalaman1')) }}</td>
                                            <td>{{ implode(", ", array_column($experience->experiences->toArray(), 'tempatkerja')) }}</td>
                                            <td>{{ implode(", ", array_column($experience->experiences->toArray(), 'lamakerja')) }}</td>
                                            <td>
                                                <a href="/experience/{{ $experience->nik }}" class="badge badge-info">Lihat Detail</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Pengalaman</th>
                                            <th>Tempat Kerja</th>
                                            <th>Lama Kerja</th>
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