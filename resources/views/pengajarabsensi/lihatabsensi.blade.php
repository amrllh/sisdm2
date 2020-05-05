@extends('layoutpengajar.head')

@section('title', 'Absensi Warga')

@include('layoutpengajar.head')

@include('layoutpengajar.navbar')
    
@include('layoutpengajar.content')
    @yield('breadcrumb')
    @yield('alert')
    
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12 col-sm-12">
                    <div class="card card-info card-outline ">
                        <div class="card-header">
                            <h4 class="card-title">Absensi </h4>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p>Hari dan tanggal &emsp; : &nbsp; {{ date('d-M-Y', strtotime($tanggal)) }}</p>
                            <hr>

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Tanggal</th>
                                        <th>Keterangan</th>
                                        <th>Absen</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        @foreach( $absens as $absen  )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $absen->citizen->nik }}</td>
                                            <td>{{ $absen->citizen->nama }}</td>
                                            <td>{{ date('d-M-Y', strtotime($absen->tanggal)) }}</td>
                                            <td>{{ $absen->keteranganabsen->keterangan }}</td>
                                            <td>
                                                <form action="/absenmasuk" method="post">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $absen->id }}">
                                                    <button type="submit" name="keterangan" value="1" class="btn  btn-sm btn-primary">Hadir</button>  
                                                    <button type="submit" name="keterangan" value="2" class="btn  btn-sm btn-warning">Sakit</button>
                                                    <button type="submit" name="keterangan" value="3" class="btn  btn-sm btn-info">Izin</button>
                                                    <button type="submit" name="keterangan" value="4" class="btn  btn-sm btn-danger">Tanpa Ket</button>
                                                </form>
                                                {{-- <a href="/pengajardatapriwa/{{ $warga->nik }}" class="badge badge-info">Lihat Detail Data </a> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Absen</th>
                                        </tr>
                                    </tfoot>
                            </table>
                        </div>
                    </div>
                    {{-- card --}}
                </div>
                {{-- col-md-12 --}}
            </div>
            {{-- row --}}
        </div>
        {{-- Container Fluid --}}
    </section>
    {{-- Section Content --}}

@include('layoutpengajar.sidebar')

@include('layoutpengajar.footer')

@include('layoutpengajar.script')
    @yield('pagetable')