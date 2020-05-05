@extends('layoutwarga.head')

    @section('title', 'Dashboard')

    @include('layoutwarga.head')

    @include('layoutwarga.navbar')
    
    @include('layoutwarga.content')
        @yield('breadcrumb')
        @yield('dashboard')
        @yield('alert')

    @include('layoutwarga.sidebar')

    @include('layoutwarga.footer')

    @include('layoutwarga.script')