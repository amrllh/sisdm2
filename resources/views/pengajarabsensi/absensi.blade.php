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
                <div class="col-6 col-md-6 col-sm-6">
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <h4 class="card-title">Absen Advertisement</h4>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p>Hari dan tanggal &emsp; : &nbsp; {{ $times->toRfc850String() }}</p>
                            <form action="/absen" method="POST">
                                @csrf
                                <input type="hidden" name="id_keterampilan" value="1">
                                <input type="hidden" name="tanggal" value="{{ $times }}">
                                <button type="submit" class="btn btn-block bg-gradient-info">Absen</button>
                            </form>
                        </div>
                    </div>
                    {{-- card --}}
                </div>
                {{-- col-6 --}}

                <div class="col-6 col-md-6 col-sm-6">
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <h4 class="card-title">Absen Customer Service</h4>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p>Hari dan tanggal &emsp; : &nbsp; {{ $times->toRfc850String() }}</p>
                            <form action="/absen" method="POST">
                                @csrf
                                <input type="hidden" name="id_keterampilan" value="2">
                                <input type="hidden" name="tanggal" value="{{ $times }}">
                                <button type="submit" class="btn btn-block bg-gradient-info">Absen</button>
                            </form>
                        </div>
                    </div>
                    {{-- card --}}
                </div>
                {{-- col-6 --}}

            </div>
            {{-- row --}}
            {{-- <div class="row">
                <div class="col-12 col-md-12 col-sm-12">
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <h4 class="card-title">Absensi</h4>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p>Hari dan tanggal &emsp; : &nbsp; {{ $times->toRfc850String() }}</p>
                            <label>Kelas Keterampilan :</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-clipboard-check"></i></span>
                                </div>
                                <select name="keterampilan" id="keterampilan" class="custom-select @error('keterampilan') is-invalid @enderror" value="{{ old('keterampilan') }}">
                                    <option value="">-- Pilih Kelas --</option>
                                    {{-- @foreach ($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->keterampilan }}</option>
                                    @endforeach
                                </select>
                                @error('keterampilan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <!-- /.input group -->
                            <form action="/absen" method="POST">
                                @csrf
                                <input type="hidden" name="id_keterampilan" value="2">
                                <input type="hidden" name="tanggal" value="{{ $times }}">
                                <button type="submit" class="btn btn-block bg-gradient-info">Absen</button>
                            </form>
                        </div>
                    </div>
                    card
                </div>
                col-6 --}}
            </div>
        </div>
        {{-- Container Fluid --}}
    </section>
    {{-- Section Content --}}

@include('layoutpengajar.sidebar')

@include('layoutpengajar.footer')

@include('layoutpengajar.script')
    @yield('pagetable')