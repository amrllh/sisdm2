@extends('layouts.head')

    @section('title', 'Data Nilai Kinerja Warga')

    @include('layouts.head')
  
    @include('layouts.navbar')
        
    @include('layouts.content')
        @yield('breadcrumb')
        @yield('alert')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-success card-outline">
                        <div class="card-header">
                            <h4 class="m0-text-dark">Data Login Sistem<h4>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        {{-- <th>Password</th> --}}
                                        <th>Role</th>
                                        <th>Jabatan</th>
                                        <th>Bidang</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $user as $user )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>{{ $user->jabatan }}</td>
                                        <td>{{ $user->bidang }}</td>
                                        <td>
                                            <a href="/datalogin/{{ $user->id }}" class="badge badge-info">Lihat Detail Data</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Jabatan</th>
                                        <th>Bidang</th>
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

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-success card-outline">
                        <div class="card-header">
                            <h4 class="m0-text-dark">Data Login Warga<h4>
                        </div>
                        <div class="card-body">
                            <table id="example3" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Jabatan</th>
                                        <th>Bidang</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $userwarga as $userwarga )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $userwarga->name }}</td>
                                        <td>{{ $userwarga->email }}</td>
                                        <td>{{ $userwarga->role }}</td>
                                        <td>{{ $userwarga->jabatan }}</td>
                                        <td>{{ $userwarga->bidang }}</td>
                                        <td>
                                            <a href="/datalogin/{{ $userwarga->id }}" class="badge badge-info">Lihat Detail Data</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Jabatan</th>
                                        <th>Bidang</th>
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

    @include('layouts.sidebar')

    @include('layouts.footer')

    @include('layouts.script')
        @yield('pagetable')
