@extends('layouts.head')

    @section('title', 'Data Pengajar')

    @include('layouts.head')

    @include('layouts.navbar')
        
    @include('layouts.content')
        @yield('breadcrumb')
        @yield('alert')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12 col-sm-12">
                    <div class="card card-success card-outline">
                        <div class="card-header">
                            <h4 class="m0-text-dark">Kelola Data Pengajar</h4>
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
                                        @foreach( $teacher as $teacher  )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $teacher->nik }}</td>
                                            <td>{{ $teacher->name }}</td>
                                            <td>{{ $teacher->email }}</td>
                                            <td>{{ $teacher->jabatan }}</td>
                                            <td>{{ $teacher->bidang }}</td>
                                            {{-- <td>
                                                <a href="/teacher/{{ $teacher->id }}" class="badge badge-info">Lihat Detail Data</a>
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
                {{-- col-12 --}}
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