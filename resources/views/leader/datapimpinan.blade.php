@extends('layouts.head')

    @section('title', 'Data Pimpinan')

    @include('layouts.head')

    @include('layouts.navbar')
        
    @include('layouts.content')
        @yield('breadcrumb')
        @yield('alert')
    
        {{-- TABEL DATA PRIBADI --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12 col-sm-12">
                    <div class="card card-success card-outline">
                        <div class="card-header">
                            <h4 class="card-title">Kelola Data Pimpinan</h4>
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
                                        <th>Jabatan</th>
                                        <th>Bidang</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        @foreach( $leader as $leader  )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $leader->nik }}</td>
                                            <td>{{ $leader->name }}</td>
                                            <td>{{ $leader->email }}</td>
                                            <td>{{ $leader->jabatan }}</td>
                                            <td>{{ $leader->bidang }}</td>
                                            {{-- <td>
                                                <a href="/leader/{{ $leader->id }}" class="badge badge-info">Lihat Detail Data</a>
                                            </td> --}}
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Jabatan</th>
                                            <th>Bidang</th>
                                        </tr>
                                    </tfoot>
                            </table>
                        </div>
                    </div>
                    {{-- card --}}
                </div>
                {{-- col-9 --}}
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