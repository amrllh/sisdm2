@extends('layouts.head')

@section('title', 'Detail Data Keahlian Warga')

@include('layouts.head')

@include('layouts.navbar')
    
@include('layouts.content')
    @yield('breadcrumb')
    @yield('alert')

    <div class="container-fluid">
            <div class="row">
                <div class="col-10 col-md-10 col-sm-10">
                    <div class="card card-secondary card-outline">
                        {{-- BUTTON TAMBAH --}}
                        <div class="card-header">
                        @foreach ($wargas as $warga)
                            <h4 class="card-title"><strong>{{ $warga->nama }}</strong></h4>
                        @endforeach
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
                                    @foreach ($wargas as $warga)
                                        <th>NIK</th>
                                        <th>:</th>
                                        <td>{{ $warga->nama }}</td>
                                        <td></td>
                                    @endforeach
                                    </tr>
                                    @foreach ($skill as $skills)
                                        <tr>
                                            <th>Keahlian {{ $loop->iteration }}</th>
                                            <th>:</th>
                                            <td>{{ $skills->masterexpertises->expertise }}</td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-lg{{ $loop->iteration }}">Ubah Data</button>
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-default{{ $loop->iteration }}">Hapus</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <br><br>
                            <div style="text-align: center">
                                <a href="/datakeahlian" class="btn btn-secondary d-inline my-5">Kembali</a>
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

        @foreach ($skill as $skills)
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
                        <p>Data keahlian <strong>{{ $skills->masterexpertises->expertise }}</strong> akan dihapus, Anda yakin?&hellip;</p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <form action="{{ $skills->id }}" method="post" class="d-inline">
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
                        <h4 class="modal-title">Formulir Ubah Data Keahlian Warga</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="/skill/{{ $skills->id }}">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label>Keahlian :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-sort-alpha-down"></i></span>
                                    </div>
                                    <select name="addmore" id="ahli" class="custom-select">
                                        <option value="">-- Pilih Keahlian --</option>
                                        @foreach ($masterexpertises as $masterexpertise)
                                            <option value="{{ $masterexpertise->id }}" {{ $skills->expertise_id == $masterexpertise->id ? "selected" : '' }}>{{ $masterexpertise->expertise }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                            <div style="text-align: center">
                                <button type="submit" class="btn btn-info">Ubah Data Keahlian</button>
                                <a href="/datakeahlian" class="btn btn-secondary">Kembali</a>
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

