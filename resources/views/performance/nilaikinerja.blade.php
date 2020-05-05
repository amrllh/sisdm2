@extends('layouts.head')

    @section('title', 'Data Nilai Kinerja Warga')

    @include('layouts.head')
  
    @include('layouts.navbar')
        
    @include('layouts.content')
        @yield('breadcrumb')
        @yield('alert')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-secondary card-outline">
                        <div class="card-header">
                            <h4 class="m0-text-dark">Nilai Kinerja Warga</h4>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Kelas Keterampilan</th>
                                        <th>Nilai</th>
                                        <th>Memo</th>
                                        <th>Catatan</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $wargas->sortBy('status') as $warga )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $warga->performances->nik }}</td>
                                        <td>{{ $warga->nama }}</td>
                                        <td>{{ $warga->courses->keterampilan }}</td>
                                        <td>{{ $warga->performances->nilai }}</td>
                                        <td>{{ $warga->performances->memo }}</td>
                                        <td>{{ $warga->performances->catatan }}</td>
                                        <td>{{ $warga->stats->keterangan }} </td>
                                        {{-- <td>
                                            <a href="/performance/{{ $warga->performances->id }}" class="badge badge-info">Lihat Detail</a>
                                        </td> --}}
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Kelas Keterampilan</th>
                                        <th>Nilai</th>
                                        <th>Memo</th>
                                        <th>Catatan</th>
                                        <th>Status</th>
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

    @include('layouts.sidebar')

    @include('layouts.footer')

    @include('layouts.script')
        @yield('pagetable')