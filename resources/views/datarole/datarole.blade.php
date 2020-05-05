@extends('layouts.head')

@section('title', 'Data Role Jabatan')

@include('layouts.head')

@include('layouts.navbar')
    
@include('layouts.content')
    @yield('breadcrumb')
    @yield('alert')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-9 col-md-9 col-sm-9">
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <h4 class="card-title">Kelola Data Role Jabatan</h4>
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
                                        <th>Role</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        @foreach( $groups as $group  )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $group->role }}</td>
                                            <td>{{ $group->keterangan }}</td>
                                            <td>
                                                <a href="/datarole/{{ $group->id }}" class="badge badge-info">Lihat Detail Data</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Role</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                            </table>
                        </div>
                        {{-- @endforeach --}}
                    </div>
                    {{-- card --}}
                </div>
                {{-- col-9 --}}

                <div class="col-3">
                    <div class="card card-info card-outline">
                        {{-- BUTTON TAMBAH --}}
                        <div class="card-header">
                            <h4 class="card-title">Tambah Role Jabatan</h4>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#modal-default">Tambah Role</button>
                        </div>
                    </div>
                    {{-- card --}}
                </div>
                {{-- col-3 --}}

                <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Tambah Role Jabatan</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="/datarole">
                                    @csrf
                                    <div class="form-group">
                                        <div class="col-12">
                                            <label>Nomor Role Jabatan :</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-clipboard-check"></i></span>
                                                </div>
                                                <input type="text" class="form-control @error('role') is-invalid @enderror" id="role" name="role" placeholder="Masukkan Nomor Role" value="{{ old('role') }}">
                                                @error('role') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        {{-- col-12 --}}
                                    </div>
                                    <!-- /.form group -->

                                    <div class="form-group">
                                        <div class="col-12">
                                            <label>Keterangan :</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-clipboard-check"></i></span>
                                                </div>
                                                <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" placeholder="Masukkan Keterangan Role" value="{{ old('keterangan') }}">
                                                @error('keterangan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        {{-- col-12 --}}
                                    </div>
                                    <!-- /.form group -->

                                    <div style="text-align: center">
                                        <button type="submit" class="btn btn-info">Tambah Data</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
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