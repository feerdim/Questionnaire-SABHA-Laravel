<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <link rel="icon" href="{{ asset('assets/img/icon2.png') }}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.css') }}">
  <!-- Data Tables -->
  <link rel="stylesheet" href="{{ asset('assets/DataTables/DataTables-1.10.23/css/dataTables.bootstrap4.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/css/adminlte.css') }}">
  <style>
* {
    cursor: none;
}
.cursor, .follower {
    position: fixed;
    top: 0;
    left: 0;
    border-radius: 50%;
    pointer-events: none;
}
.cursor {
    width: 10px;
    height: 10px;
    border: 1px solid black;
    background: white;
    z-index: 99999;
}
.follower {
    width: 30px;
    height: 30px;
    background: black;
    border: 2px solid white;
    opacity: .8;
    z-index: 99998;
}
  </style>

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
        <img src="{{ asset('assets/img/icon2.png') }}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SABHA</span>
      </a>

      <div class="sidebar">
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="{{ route('question.index') }}" class="nav-link {{ (request()->is('question*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-question-circle"></i>
                <p>
                  Pertanyaan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('result.index') }}" class="nav-link {{ (request()->is('result*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-poll-h"></i>
                <p>
                  Hasil Kuesioner
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
        <b>Version</b> 0.0.9-b
      </div>
    </footer>
  </div>
  @include('layouts/modal')
<div class="follower"></div>
<div class="cursor"></div>

  <!-- jQuery -->
<script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>
<!-- jQuery Data Tables -->
<script src="{{ asset('assets/DataTables/DataTables-1.10.23/js/jquery.dataTables.min.js') }}"></script>
<!-- Data Tables -->
<script src="{{ asset('assets/DataTables/DataTables-1.10.23/js/dataTables.bootstrap4.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Sweet Alert 2 -->
<script src="{{ asset('assets/sweetalert2/sweetalert2.all.min.js') }}"></script>
<!-- GSAP -->
<script src="{{ asset('assets/gsap/gsap.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/js/adminlte.min.js') }}"></script>
@stack('scripts')
<script>
const cur = document.querySelector('.cursor')
const follow = document.querySelector('.follower')


gsap.set('.cursor',{xPercent: -50, yPercent: -50});
gsap.set('.follower',{xPercent: -50, yPercent: -50});

window.addEventListener('mousemove', e => {
    gsap.to('.cursor', 0.2, {x:e.clientX, y:e.clientY})
    gsap.to('.follower', 0.9, {x:e.clientX, y:e.clientY})
})

if(window.innerWidth <= 670) {
    cur.style.display = "none"
    follow.style.display = "none"
}
</script>

<form id="logout" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
</body>
</html>