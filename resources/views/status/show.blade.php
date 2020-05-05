@extends('layouts.head')

@section('title', 'Detail Data Status')

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
                        <h4 class="card-title"><strong>{{ $status->keterangan }}</strong></h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped col-12 table-sm">
                            <tbody>
                                <thead>
                                    <th></th>
                                    <th></th>
                                </thead>
                                <tr>
                                    <th>Nomor Status</th>
                                    <th>:</th>
                                    <th>{{ $status->status }}</th>
                                </tr>
                                <tr>
                                    <th>Keterangan Status</th>
                                    <th>:</th>
                                    <td>{{ $status->keterangan }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div style="text-align: center">
                            <button type="button" class="btn btn-info d-inline my-5 btn-sm" data-toggle="modal" data-target="#modal-default2">Ubah Data</button>
                            <button type="button" class="btn btn-danger d-inline my-5 btn-sm" data-toggle="modal" data-target="#modal-default">Hapus</button>
                            <button onclick="location.href='/datastatus'" type="button" class="btn btn-secondary d-inline my-5 btn-sm">Kembali</button>
                        </div>
                    </div>
                </div>
                {{-- card --}}
            </div>
            {{-- col-6 --}}
        </div>
        {{-- row --}}
    </div>
    {{-- container-fluid --}}

    {{-- FORM HAPUS DATA --}}
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
                    <p>Data status <strong>{{ $status->keterangan }}</strong> akan dihapus, Anda yakin?&hellip;</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <form action="{{ $status->id }}" method="post" class="d-inline">
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
                    <h4 class="modal-title">Formulir Ubah Data Status</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/datastatus/{{ $status->id }}">
                        @method('patch')    
                        @csrf
                        <div class="form-group">
                            <div class="col-12">
                                <label>Nomor Status :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-clipboard-check"></i></span>
                                    </div>
                                    <input type="text" class="form-control @error('status') is-invalid @enderror" id="status" name="status" placeholder="Masukkan Nomor Status" value="{{ $status->status }}">
                                    @error('status') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                                <!-- /.input group -->
                            </div>
                            {{-- col-12 --}}
                        </div>
                        <!-- /.form group -->

                        <div class="form-group">
                            <div class="col-12">
                                <label>Keterangan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-clipboard-check"></i></span>
                                    </div>
                                    <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" placeholder="Masukkan Keterangan Status" value="{{ $status->keterangan }}">
                                    @error('role') <div class="invalid-feedback">{{ $message }}</div> @enderror
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
    @yield('pagetable')s