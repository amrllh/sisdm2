@extends('layoutpimpinan.head')

    @section('title', 'Dashboard')

    @include('layoutpimpinan.head')

    @include('layoutpimpinan.navbar')
    
    @include('layoutpimpinan.content')
        @yield('breadcrumb')
        @yield('dashboard')

    @include('layoutpimpinan.sidebar')

    @include('layoutpimpinan.footer')

    @include('layoutpimpinan.script')
