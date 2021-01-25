<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SABHA</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.css') }}">
  <!-- Data Tables -->
  <link rel="stylesheet" href="{{ asset('assets/DataTables/DataTables-1.10.23/css/dataTables.bootstrap4.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/css/adminlte.css') }}">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="index3.html" class="brand-link">
        <img src="{{ asset('assets/img/Emboss Logo.png') }}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SABHA</span>
      </a>

      <div class="sidebar">
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="{{ route('question.index') }}" class="nav-link {{ (request()->is('question*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Kuesioner
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('responden.index') }}" class="nav-link {{ (request()->is('responden*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Hasil
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout').submit();">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Log Out
                </p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <div class="content-wrapper">
      @yield('content')
    </div>

    <footer class="main-footer">
      <strong>Copyright &copy; 2021 <a href="https://sabha.com">SABHA</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 0.0.2-b
      </div>
    </footer>
  </div>
  @include('layouts/modal')

  <!-- jQuery -->
<script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('assets/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- jQuery Data Tables -->
<script src="{{ asset('assets/DataTables/DataTables-1.10.23/js/jquery.dataTables.min.js') }}"></script>
<!-- Data Tables -->
<script src="{{ asset('assets/DataTables/DataTables-1.10.23/js/dataTables.bootstrap4.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Sweet Alert 2 -->
<script src="{{ asset('assets/sweetalert2/sweetalert2.all.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/js/adminlte.min.js') }}"></script>
@stack('scripts')
<form id="logout" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
</body>
</html>
