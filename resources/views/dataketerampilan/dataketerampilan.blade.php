@extends('layouts.head')

@section('title', 'Data Kelas Keterampilan')

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
                            <h4 class="card-title">Kelola Data Kelas Keterampilan</h4>
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
                                        <th>Kelas Keterampilan</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        @foreach( $courses as $course  )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $course->keterampilan }}</td>
                                            <td>{{ $course->deskripsi }}</td>
                                            <td>
                                                <a href="/dataketerampilan/{{ $course->id }}" class="badge badge-info">Lihat Detail Data</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Kelas Keterampilan</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                            </table>
                        </div>
                    </div>
                    {{-- card --}}
                </div>
                {{-- col-9 --}}

                <div class="col-3">
                    <div class="card card-info card-outline">
                        {{-- BUTTON TAMBAH --}}
                        <div class="card-header">
                            <h4 class="card-title">Tambah Kelas Keterampilan</h4>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#modal-default">Tambah Keterampilan</button>
                        </div>
                    </div>
                    {{-- card --}}
                </div>
                {{-- col-3 --}}

                <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Tambah Kelas Keterampilan</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="/dataketerampilan">
                                    @csrf
                                    <div class="form-group">
                                        <div class="col-12">
                                            <label>Nama Kelas Keterampilan :</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-clipboard-check"></i></span>
                                                </div>
                                                <input type="text" class="form-control @error('keterampilan') is-invalid @enderror" id="keterampilan" name="keterampilan" placeholder="Masukkan Kelas Keterampilan" value="{{ old('keterampilan') }}">
                                                @error('keterampilan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        {{-- col-12 --}}
                                    </div>
                                    <!-- /.form group -->

                                    <div class="form-group">
                                        <div class="col-12">
                                            <label>Deskripsi :</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-clipboard-check"></i></span>
                                                </div>
                                                <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi Kelas Keterampilan" value="{{ old('deskripsi') }}">
                                                @error('deskripsi') <div class="invalid-feedback">{{ $message }}</div> @enderror
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

