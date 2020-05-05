@extends('layouts.head')

@section('title', 'Detail Data Nilai Kinerja')

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
                        <h4 class="card-title">{{ $performance->nik }}</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped col-12">
                            <tbody>
                                <thead>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>:</th>
                                    <td>{{ $performance->nik }}</td>
                                </tr>
                                <tr>
                                    <th>Nilai</th>
                                    <th>:</th>
                                    <td>{{ $performance->nilai }}</td>
                                </tr>
                                <tr>
                                    <th>Memo</th>
                                    <th>:</th>
                                    <td>{{ $performance->memo }}</td>
                                </tr>
                                <tr>
                                    <th>Catatan</th>
                                    <th>:</th>
                                    <td>{{ $performance->catatan }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div style="text-align: center">
                            <br>
                            {{-- <a href="/performance/{{ $performance->id }}/edit" class="btn btn-primary d-inline my-5">Ubah Data</a>
                            <form action="{{ $performance->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger d-inline my-5">Hapus Data</button>
                            </form> --}}
                            <a href="/nilaikinerja" class="btn btn-secondary d-inline my-10">Kembali</a>
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

@include('layouts.sidebar')
    
@include('layouts.footer')

@include('layouts.script')
    @yield('pagetable')