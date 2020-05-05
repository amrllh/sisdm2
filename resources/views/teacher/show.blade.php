@extends('layouts.head')

@section('title', 'Detail Data Pengajar')

@include('layouts.head')

@include('layouts.navbar')
    
@include('layouts.content')
    @yield('breadcrumb')

    <div class="container-fluid">
            <div class="row">
                <div class="col-6 col-md-6 col-sm-6">
                    <div class="card card-secondary card-outline">
                        {{-- BUTTON TAMBAH --}}
                        <div class="card-header">
                            <h4 class="card-title">{{ $teacher->nama }}</h4>
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
                                        <th>NIK</th>
                                        <th>:</th>
                                        <td>{{ $teacher->nik }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <th>:</th>
                                        <td>{{ $teacher->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jabatan</th>
                                        <th>:</th>
                                        <td>{{ $teacher->jabatan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Bidang</th>
                                        <th>:</th>
                                        <td>{{ $teacher->bidang }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div style="text-align: center">
                                <a href="/teacher/{{ $teacher->id }}/edit" class="btn btn-primary d-inline my-5">Ubah Data</a>
                                <form action="{{ $teacher->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger d-inline my-5">Hapus Data</button>
                                </form>
                                <a href="/datapimpinan" class="btn btn-secondary d-inline my-5">Kembali</a>
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


@include('layouts.sidebar')
    
@include('layouts.footer')

@include('layouts.script')
    @yield('pagetable')

