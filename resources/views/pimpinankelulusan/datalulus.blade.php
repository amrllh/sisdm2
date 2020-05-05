@extends('layoutpimpinan.head')

@section('title', 'Data Warga')

@include('layoutpimpinan.head')

@include('layoutpimpinan.navbar')
    
@include('layoutpimpinan.content')
    @yield('breadcrumb')
    @yield('alert')

    <section class="content">
        {{-- DATA WARGA DINILAI --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12 col-sm-12">
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <h4 class="card-title">Data Warga Telah Dinilai</h4>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        {{-- <th>No.</th> --}}
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Kelas Keterampilan</th>
                                        <th>Nilai</th>
                                        <th>Memo</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        @foreach( $wargalulus as $warga  )
                                        @if ($warga->performances->nilai != -1 && $warga->stats->status == 0 || $warga->stats->status == 2 )
                                        <tr>
                                            {{-- <td>{{ $loop->iteration }}</td> --}}
                                            <td>{{ $warga->nik }}</td>
                                            <td>{{ $warga->nama }}</td>
                                            <td>{{ $warga->courses->keterampilan }}</td>
                                            <td>{{ $warga->performances->nilai }}</td>
                                            <td>{{ $warga->performances->memo }}</td>
                                            <td>{{ $warga->stats->keterangan }}</td>
                                            <td>
                                                <a href="/pimpinankelulusan/{{ $warga->nik }}/lulus" class="badge badge-primary">Lulus</a>
                                                <a href="/pimpinankelulusan/{{ $warga->nik }}/ulang" class="badge badge-info">Ulang</a>
                                                <a href="/pimpinankelulusan/{{ $warga->nik }}/tidaklulus" class="badge badge-danger">Tidak Lulus</a>
                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            {{-- <th>No.</th> --}}
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Kelas Keterampilan</th>
                                            <th>Nilai</th>
                                            <th>Memo</th>
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

                {{-- DATA WARGA BELUM DINILAI --}}
                <div class="col-12 col-md-12 col-sm-12">
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <h4 class="card-title">Data Warga Belum Dinilai</h4>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example3" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        {{-- <th>No.</th> --}}
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Kelas Keterampilan</th>
                                        <th>Nilai</th>
                                        <th>Memo</th>
                                        <th>Status</th>
                                        {{-- <th>Aksi</th> --}}
                                    </tr>
                                </thead>
                                    <tbody>
                                        @foreach( $wargalulus as $warga  )
                                        @if ($warga->performances->nilai === -1)
                                        <tr>
                                            {{-- <td>{{ $loop->iteration }}</td> --}}
                                            <td>{{ $warga->nik }}</td>
                                            <td>{{ $warga->nama }}</td>
                                            <td>{{ $warga->courses->keterampilan }}</td>
                                            <td>{{ $warga->performances->nilai }}</td>
                                            <td>{{ $warga->performances->memo }}</td>
                                            <td>{{ $warga->stats->keterangan }}</td>
                                            {{-- <td>
                                                <a href="/pimpinankelulusan/{{ $warga->nik }}" class="badge badge-primary">Lulus</a>
                                                <a href="/pimpinankelulusan/{{ $warga->nik }}" class="badge badge-danger">Tidak Lulus</a>
                                            </td> --}}
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            {{-- <th>No.</th> --}}
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Kelas Keterampilan</th>
                                            <th>Nilai</th>
                                            <th>Memo</th>
                                            <th>Status</th>
                                            {{-- <th>Aksi</th> --}}
                                        </tr>
                                    </tfoot>
                            </table>
                        </div>
                    </div>
                    {{-- card --}}
                </div>
                {{-- col-md-12 --}}

                {{-- DATA WARGA LULUS --}}
                <div class="col-12 col-md-12 col-sm-12">
                    <div class="card card-primary card-outline collapsed-card">
                        <div class="card-header">
                            <h4 class="card-title">Data Warga Lulus</h4>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example4" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        {{-- <th>No.</th> --}}
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Kelas Keterampilan</th>
                                        <th>Nilai</th>
                                        <th>Memo</th>
                                        <th>Status</th>
                                        {{-- <th>Aksi</th> --}}
                                    </tr>
                                </thead>
                                    <tbody>
                                        @foreach( $wargalulus as $warga  )
                                        @if ($warga->stats->status == 1)
                                        <tr>
                                            {{-- <td>{{ $loop->iteration }}</td> --}}
                                            <td>{{ $warga->nik }}</td>
                                            <td>{{ $warga->nama }}</td>
                                            <td>{{ $warga->courses->keterampilan }}</td>
                                            <td>{{ $warga->performances->nilai }}</td>
                                            <td>{{ $warga->performances->memo }}</td>
                                            <td>{{ $warga->stats->keterangan }}</td>
                                            {{-- <td>
                                                <a href="/pimpinankelulusan/{{ $warga->nik }}" class="badge badge-primary">Lulus</a>
                                                <a href="/pimpinankelulusan/{{ $warga->nik }}" class="badge badge-danger">Tidak Lulus</a>
                                            </td> --}}
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            {{-- <th>No.</th> --}}
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Kelas Keterampilan</th>
                                            <th>Nilai</th>
                                            <th>Memo</th>
                                            <th>Status</th>
                                            {{-- <th>Aksi</th> --}}
                                        </tr>
                                    </tfoot>
                            </table>
                        </div>
                    </div>
                    {{-- card --}}
                </div>
                {{-- col-md-12 --}}

                {{-- DATA WARGA MENGULANG --}}
                <div class="col-12 col-md-12 col-sm-12">
                    <div class="card card-info card-outline collapsed-card">
                        <div class="card-header">
                            <h4 class="card-title">Data Warga Mengulang</h4>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example5" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        {{-- <th>No.</th> --}}
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Kelas Keterampilan</th>
                                        <th>Nilai</th>
                                        <th>Memo</th>
                                        <th>Status</th>
                                        {{-- <th>Aksi</th> --}}
                                    </tr>
                                </thead>
                                    <tbody>
                                        @foreach( $wargalulus as $warga  )
                                        @if ($warga->stats->status == 2)
                                        <tr>
                                            {{-- <td>{{ $loop->iteration }}</td> --}}
                                            <td>{{ $warga->nik }}</td>
                                            <td>{{ $warga->nama }}</td>
                                            <td>{{ $warga->courses->keterampilan }}</td>
                                            <td>{{ $warga->performances->nilai }}</td>
                                            <td>{{ $warga->performances->memo }}</td>
                                            <td>{{ $warga->stats->keterangan }}</td>
                                            {{-- <td>
                                                <a href="/pimpinankelulusan/{{ $warga->nik }}" class="badge badge-primary">Lulus</a>
                                                <a href="/pimpinankelulusan/{{ $warga->nik }}" class="badge badge-danger">Tidak Lulus</a>
                                            </td> --}}
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            {{-- <th>No.</th> --}}
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Kelas Keterampilan</th>
                                            <th>Nilai</th>
                                            <th>Memo</th>
                                            <th>Status</th>
                                            {{-- <th>Aksi</th> --}}
                                        </tr>
                                    </tfoot>
                            </table>
                        </div>
                    </div>
                    {{-- card --}}
                </div>
                {{-- col-md-12 --}}
                
                {{-- DATA WARGA TIDAK LULUS --}}
                <div class="col-12 col-md-12 col-sm-12">
                    <div class="card card-danger card-outline collapsed-card">
                        <div class="card-header">
                            <h4 class="card-title">Data Warga Tidak Lulus</h4>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example6" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        {{-- <th>No.</th> --}}
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Kelas Keterampilan</th>
                                        <th>Nilai</th>
                                        <th>Memo</th>
                                        <th>Status</th>
                                        {{-- <th>Aksi</th> --}}
                                    </tr>
                                </thead>
                                    <tbody>
                                        @foreach( $wargalulus as $warga  )
                                        @if ($warga->stats->status == 3)
                                        <tr>
                                            {{-- <td>{{ $loop->iteration }}</td> --}}
                                            <td>{{ $warga->nik }}</td>
                                            <td>{{ $warga->nama }}</td>
                                            <td>{{ $warga->courses->keterampilan }}</td>
                                            <td>{{ $warga->performances->nilai }}</td>
                                            <td>{{ $warga->performances->memo }}</td>
                                            <td>{{ $warga->stats->keterangan }}</td>
                                            {{-- <td>
                                                <a href="/pimpinankelulusan/{{ $warga->nik }}" class="badge badge-primary">Lulus</a>
                                                <a href="/pimpinankelulusan/{{ $warga->nik }}" class="badge badge-danger">Tidak Lulus</a>
                                            </td> --}}
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            {{-- <th>No.</th> --}}
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Kelas Keterampilan</th>
                                            <th>Nilai</th>
                                            <th>Memo</th>
                                            <th>Status</th>
                                            {{-- <th>Aksi</th> --}}
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

@include('layoutpimpinan.sidebar')

@include('layoutpimpinan.footer')

@include('layoutpimpinan.script')
    @yield('pagetable')