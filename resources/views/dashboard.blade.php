@extends('layouts.head')

    @section('title', 'Dashboard')

    @include('layouts.head')
    
    @include('layouts.navbar')
    
    @include('layouts.content')
        @yield('breadcrumb')
        @yield('dashboard')

    @include('layouts.sidebar')

    @include('layouts.footer')

    @include('layouts.script')
