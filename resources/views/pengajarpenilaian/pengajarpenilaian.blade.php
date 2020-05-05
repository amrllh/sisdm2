@extends('layoutpengajar.head')

@section('title', 'Penilaian Kinerja')

@include('layoutpengajar.head')

@include('layoutpengajar.navbar')
    
@include('layoutpengajar.content')
    @yield('breadcrumb')
    @yield('alert')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12 col-sm-12">
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <h4 class="card-title">Kelola Data Penilaian</h4>
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
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Nilai</th>
                                        <th>Memo</th>
                                        <th>Catatan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $wargas as $warga )
                                    @if ($warga->stats->status != 1)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $warga->performances->nik }}</td>
                                        <td>{{ $warga->nama }}</td>
                                        <td>{{ $warga->performances->nilai }}</td>
                                        <td>{{ $warga->performances->memo }}</td>
                                        <td>{{ $warga->performances->catatan }}</td>
                                        <td>{{ $warga->stats->keterangan }}</td>
                                        <td>
                                        @if ($warga->stats->status != 3)
                                            <a href="/penilaiankinerja/{{ $warga->performances->id }}/penilaian" class="badge badge-info">Beri Nilai</a>
                                            <a href="/penilaiankinerja/{{ $warga->performances->id }}/ubahpenilaian" class="badge badge-danger">Ubah Nilai</a>
                                        @endif  
                                        @if ($warga->stats->status == 3)
                                            --
                                        @endif
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Nilai</th>
                                        <th>Memo</th>
                                        <th>Catatan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
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