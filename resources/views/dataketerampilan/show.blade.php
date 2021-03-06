@extends('layouts.head')

@section('title', 'Detail Data Keterampilan')

@include('layouts.head')

@include('layouts.navbar')
    
@include('layouts.content')
    @yield('breadcrumb')
    @yield('alert')
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-9">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h4 class="card-title"><strong>{{ $courses->keterampilan }}</strong></h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped col-12 table-sm">
                            <tbody>
                                <thead>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </thead>
                                <tr>
                                    <th>ID</th>
                                    <th>:</th>
                                    <th>{{ $courses->id }}</th>
                                </tr>
                                <tr>
                                    <th>Nama Keterampilan</th>
                                    <th>:</th>
                                    <td>{{ $courses->keterampilan }}</td>
                                </tr>
                                <tr>
                                    <th>Deskripsi</th>
                                    <th>:</th>
                                    <td>{{ $courses->deskripsi }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div style="text-align: center">
                            <button type="button" class="btn btn-info d-inline my-5 btn-sm" data-toggle="modal" data-target="#modal-default2">Ubah Data</button>
                            <button type="button" class="btn btn-danger d-inline my-5 btn-sm" data-toggle="modal" data-target="#modal-default">Hapus</button>
                            <button onclick="location.href='/dataketerampilan'" type="button" class="btn btn-secondary d-inline my-5 btn-sm">Kembali</button>
                        </div>
                    </div>
                </div>
                {{-- card --}}
            </div>
            {{-- col-9 --}}
        </div>
        {{-- row --}}
    </div>
    {{-- container-fluid --}}

    {{-- FORM TAMBAH DATA --}}
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-danger modal-outline">
                    <h4 class="modal-title">Hapus data?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Data keterampilan <strong>{{ $courses->keterampilan }}</strong> akan dihapus, Anda yakin?&hellip;</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <form action="{{ $courses->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Hapus Data</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    {{-- FORM UBAH DATA --}}
    <div class="modal fade" id="modal-default2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Formulir Ubah Data Pribadi Warga</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/dataketerampilan/{{ $courses->id }}">
                        @method('patch')    
                        @csrf
                            <div class="form-group">
                                <div class="col-12">
                                    <label>Nama Keterampilan :</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-clipboard-check"></i></span>
                                        </div>
                                        <input type="text" class="form-control @error('keterampilan') is-invalid @enderror" id="keterampilan" name="keterampilan" placeholder="Masukkan Jenis Keterampilan" value="{{ $courses->keterampilan }}">
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
                                        <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi Keterampilan" value="{{ $courses->deskripsi }}">
                                        @error('deskripsi') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                {{-- col-12 --}}
                            </div>
                            <!-- /.form group -->

                            <div style="text-align: center">
                                <button type="submit" class="btn btn-info">Ubah Data</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                            </div>
                    </form>
                </div>
                {{-- modal-body --}}
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

@include('layouts.sidebar')
    
@include('layouts.footer')

@include('layouts.script')
    @yield('pagetable')