@extends('layoutpengajar.head')

@section('title', 'Penilaian Kinerja Warga')

@include('layoutpengajar.head')

@include('layoutpengajar.navbar')
    
@include('layoutpengajar.content')
    @yield('breadcrumb')
    @yield('alert')

    <div class="container-fluid">
        <div class="row">
            <div class="col-8 col-md-8 col-sm-8">
                <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <h4 class="card-title">Formulir Data Pribadi Warga</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="/penilaiankinerja/{{ $performances->id }}">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12">
                                        <label>NIK Warga :</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                                            </div>
                                            <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" placeholder="Masukkan Nomor Induk Kependudukan dalam KTP" value="{{ $performances->nik }}" disabled>
                                            @error('nik') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    {{-- col-4 --}}
                                </div>
                                {{-- row --}}
                            </div>
                            <!-- /.form group -->

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-3">
                                        <label>Nilai Kinerja :</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control @error('nilai') is-invalid @enderror" id="nilai" name="nilai" placeholder="Masukkan Nilai" value="{{ $performances->nilai }}">
                                            @error('nilai') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    {{-- col-2 --}}
                                    <div class="col-9">
                                        <label>Memo Warga :</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                                            </div>
                                            <input type="text" class="form-control @error('memo') is-invalid @enderror" id="memo" name="memo" placeholder="Masukkan Memo Untuk Warga" value="{{ $performances->memo }}">
                                            @error('memo') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    {{-- col-10 --}}
                                </div>
                                {{-- row --}}
                            </div>
                            <!-- /.form group -->

                            <div class="form-group">
                                <label>Catatan :</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control @error('catatan') is-invalid @enderror" id="catatan" name="catatan" placeholder="Masukkan Catatan untuk Pengembangan Diri Warga" value="{{ $performances->catatan }}">
                                    @error('catatan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->

                            <div style="text-align: center">
                                <button type="submit" class="btn btn-primary">Simpan Data Nilai Warga</button>
                                <a href="/pengajarpenilaian" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- card --}}
            </div>
            {{-- col-12 --}}
            
            <div class="col-4 col-md-4 col-sm-4">
                <div class="card card-secondary card-outline">
                    <div class="card-header">
                        <h4 class="card-title">Data Absen Warga</h4>
                    </div>
                    <div class="card-body">
                        <table id="" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                                <tbody>
                                    @foreach( $absens as $absen  )
                                    <tr>
                                        {{-- <td>{{ $loop->iteration }}</td> --}}
                                        <td>{{ date('d-M-Y', strtotime($absen->tanggal)) }}</td>
                                        <td>{{ $absen->keteranganabsen->keterangan }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </tfoot>
                        </table>
                    </div>
                </div>
                {{-- card --}}
            </div>
            {{-- col-8 --}}
        </div>
        {{-- row --}}
    </div>
    {{-- container-fluid --}}

@include('layoutpengajar.sidebar')
    
@include('layoutpengajar.footer')

@include('layoutpengajar.script')
    @yield('pagetable')