@extends('layoutwarga.head')

@section('title', 'Detail Data Pribadi Warga')

@include('layoutwarga.head')

@include('layoutwarga.navbar')
    
@include('layoutwarga.content')
    @yield('breadcrumb')

    <div class="container-fluid">
        {{-- @if (Auth::user()->email == $warga->email) --}}
            
            <div class="row">
                <div class="col-8 col-md-8 col-sm-8">
                    <div class="card card-secondary card-outline">
                        {{-- BUTTON TAMBAH --}}
                        <div class="card-header">
                            <h4 class="card-title"><strong>Nilai kinerja, {{ $nilai->nik }}</strong></h4>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
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
                                        <td>{{ $nilai['nik'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nilai</th>
                                        <th>:</th>
                                        <td>{{ $nilai['nilai'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>Memo</th>
                                        <th>:</th>
                                        <td>{{ $nilai['memo'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>Catatan</th>
                                        <th>:</th>
                                        <td>{{ $nilai['catatan'] }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                        </div>
                    </div>
                    {{-- card --}}
                </div>
                {{-- col-12 --}}
            </div>
            {{-- row --}}
        </div>
        {{-- container-fluid --}}
        


@include('layoutwarga.sidebar')
    
@include('layoutwarga.footer')

@include('layoutwarga.script')
    @yield('pagetable')

