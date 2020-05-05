@extends('layoutpengajar.head')

    @section('title', 'Dashboard')

    @include('layoutpengajar.head')

    @include('layoutpengajar.navbar')
    
    @include('layoutpengajar.content')
        @yield('breadcrumb')
        @yield('dashboard')

    @include('layoutpengajar.sidebar')

    @include('layoutpengajar.footer')

    @include('layoutpengajar.script')
