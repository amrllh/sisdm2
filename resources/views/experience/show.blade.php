@extends('layouts.head')

@section('title', 'Detail Data Pengalaman Warga')

@include('layouts.head')

@include('layouts.navbar')
    
@include('layouts.content')
    @yield('breadcrumb')
    @yield('alert')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12 col-sm-12">
                <div class="card card-secondary card-outline">
                    {{-- BUTTON TAMBAH --}}
                    <div class="card-header">
                        <h4 class="card-title"><strong>{{ $nik }},</strong></h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped col-12 table-sm">
                            <tbody>
                                <thead>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>:</th>
                                    <td>{{ $nik }}</td>
                                    <td></td>
                                </tr>
                                @foreach ($experience as $experiences)
                                <tr>
                                    <th>Pengalaman {{ $loop->iteration }}</th>
                                    <th>:</th>
                                    <td>Berpengalaman sebagai <strong>{{ $experiences->pengalaman1 }}</strong>
                                        di <strong>{{ $experiences->tempatkerja }}</strong>
                                        selama <strong>{{ $experiences->lamakerja }}.</strong>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-lg{{ $loop->iteration }}" id="">Ubah Data</button>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-default{{ $loop->iteration }}">Hapus</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br><br>
                        <div style="text-align: center">
                            <a href="/datapengalaman" class="btn btn-secondary d-inline my-5">Kembali</a>
                        </div>
                    </div>
                </div>
                {{-- card --}}
            </div>
            {{-- col-12 --}}
        </div>
        {{-- row --}}
    </div>
    {{-- container-fluid --}}

    @foreach ($experience as $experiences)
    <div class="modal fade" id="modal-default{{ $loop->iteration }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-danger modal-outline">
                    <h4 class="modal-title">Hapus data?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Data keahlian <strong>{{ $experiences->pengalaman1 }}</strong> akan dihapus, Anda yakin?&hellip;</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <form action="{{ $experiences->id }}" method="post" class="d-inline">
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
    <div class="modal fade" id="modal-lg{{ $loop->iteration }}" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Formulir Ubah Data Pengalaman Warga</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/experience/{{ $experiences->id }}">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label>Pengalaman :</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                                </div>
                                <input type="text" class="form-control" id="pengalaman1" name="pengalaman1" placeholder="Masukkan Pengalaman" value="{{ $experiences->pengalaman1 }}">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                        <div class="form-group">
                            <label>Tempat Kerja :</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-hotel"></i></span>
                                </div>
                                <input type="text" class="form-control" id="tempatkerja" name="tempatkerja" placeholder="Masukkan Tempat Kerja" value="{{ $experiences->tempatkerja }}">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                        <div class="form-group">
                            <label>Lama Kerja :</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                </div>
                                <input type="text" class="form-control" id="lamakerja" name="lamakerja" placeholder="Masukkan Lama Kerja" value="{{ $experiences->lamakerja }}">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                        <div style="text-align: center">
                            <button type="submit" class="btn btn-info">Ubah Data Pengalaman</button>
                            <a href="/datapengalaman" class="btn btn-secondary">Kembali</a>
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
    @endforeach

@include('layouts.sidebar')
    
@include('layouts.footer')

@include('layouts.script')
    @yield('pagetable')