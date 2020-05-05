@extends('layouts.head')

    @section('title', 'Data Keahlian')

    @include('layouts.head')
  
    @include('layouts.navbar')
        
    @include('layouts.content')
        @yield('breadcrumb')
        @yield('alert')

        {{-- TABEL DATA KEAHLIAN --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12 col-sm-12">
                    <div class="card card-secondary card-outline">
                        <div class="card-header">
                            <h4 class="card-title">Kelola Data Keahlian</h4>
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
                                        <th>Keahlian</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        @foreach( $wargas as $warga  )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $warga->nik }}</td>
                                            <td>{{ $warga->nama }}</td>
                                            <td>
                                                @foreach ($warga->expertises as $item)
                                                    {{$item->masterexpertises->expertise}}
                                                    @if(!$loop->last)
                                                    ,
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                <a href="/skill/{{ $warga->id }}" class="badge badge-info">Lihat Detail</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Keahlian</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                            </table>
                        </div>
                        {{-- @endforeach --}}
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