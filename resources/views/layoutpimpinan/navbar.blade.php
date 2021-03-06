<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-light navbar-white">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link">@yield('title')</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
          {{-- <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fas fa-th-large"></i></a> --}}
      </li>
      <li class="nav-item">
        <a href="{{ url('/logout')}}">
          <button type="button" class="btn btn-block bg-gradient-danger btn-sm">Log Out &nbsp; <i class="fas fa-sign-out-alt" aria-hidden="true"></i></button>
        </a>
      </li>
    </ul>
</nav>
  <!-- /.navbar -->