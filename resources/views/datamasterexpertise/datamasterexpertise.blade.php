@extends('layouts.head')

@section('title', 'Data Master Keahlian')

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
                            <h4 class="card-title">Kelola Data Master Keahlian</h4>
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
                                        <th>ID</th>
                                        <th>Keahlian</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $masterexpertises as $me  )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $me->id }}</td>
                                        <td>{{ $me->expertise }}</td>
                                        <td>
                                            <a href="/datamasterexpertise/{{ $me->id }}" class="badge badge-info">Lihat Detail Data</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>ID</th>
                                        <th>Keahlian</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    {{-- card --}}
                </div>
                {{-- col-9 --}}

                {{-- TAMBAH DATA --}}
                <div class="col-3">
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Data Keahlian</h4>
                        </div>
                        <div class="card-body">
                            <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#modal-default">Tambah Data</button>
                        </div>
                    </div>
                    {{-- card --}}
                </div>
                {{-- col-3 --}}

                <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Tambah Data Keahlian</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="/datamasterexpertise">
                                    @csrf
                                    <div class="form-group">
                                        <div class="col-12">
                                            <label>Nama Keahlian :</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-clipboard-check"></i></span>
                                                </div>
                                                <input type="text" class="form-control @error('expertise') is-invalid @enderror" id="expertise" name="expertise" placeholder="Masukkan Nama Keahlian" value="{{ old('expertise') }}">
                                                @error('expertise') <div class="invalid-feedback">{{ $message }}</div> @enderror
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