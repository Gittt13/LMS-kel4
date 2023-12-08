<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css" /> -->
  <title>{{ Config::get('settings.name') }} Dashboard Admin {{ Config::get('settings.description') }}</title>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel='icon' href='/favicon.ico' type='image/x-icon'>

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  @yield('styles')
  @include('includes.analytics')
  <!-- <style>
    .sidebar-dark-primary {
      background-color: #64CCC5;
    }

    .sidebar-dark-primary .nav-sidebar .nav-item .nav-link {
      color: #192655;
    }

    .sidebar-dark-primary .info a {
      color: #192655;
    }

    .sidebar {
      position: fixed;
    }

    #logo {
      position: fixed;
    }

    .user-panel .info a {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      max-width: 150px;
    }
  </style> -->
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper" id="app">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-globe"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ route('home') }}" class="nav-link {{ is_active('home') }}">
            <i class="nav-icon fas fa-home"></i> {{ __('Home') }}
          </a>
        </li>

      </ul>
      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar Right Links (Optional) -->
      <!-- Add your right navbar links here -->
    </nav>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-warning elevation-4" id="logo">
      <!-- Brand Logo -->
      <a class="brand-link">
        <img src="{{ Config::get('settings.logo') }}" alt="{{ Config::get('settings.name') }}" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ Config::get('settings.name') }} <span class="right badge badge-danger">ADMIN</span>
      </a>
      <!-- Sidebar -->
      <div class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ Auth::user()->avatar }}" class="img-circle elevation-2" alt="User Image">

          </div>
          <div class="info">
            <a href="#" class="d-block" style="text-decoration: none;">{{ Auth::user()->name }}</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <!-- Navbar Item - Dashboard -->
            <li class="nav-item has-treeview">
              <a href="{{ route('admin.dashboard') }}" class="nav-link {{ is_active('admin.dashboard') }} ">
                <i class="nav-icon fas fa-globe"></i>
                <p>
                  {{ __('Dashboard') }}
                </p>
              </a>
            </li>

            <!-- Navbar Item - About -->
            <li class="nav-item">
              <a href="{{ route('admin.about') }}" class="nav-link {{ is_active('admin.about') }}">
                <i class="nav-icon fas fa-info"></i>
                <p>
                  {{ __('About') }}
                </p>
              </a>
            </li>

            <!-- Navbar Item - About -->
            <li class="nav-item">
              <a href="{{ route('admin.eventpage') }}" class="nav-link {{ is_active('admin.eventpage') }}">
                <i class="nav-icon fas fa-info"></i>
                <p>
                  {{ __('Calendar') }}
                </p>
              </a>
            </li>

            <!-- Navbar Item - Profile -->
            <li class="nav-item">
              <a href="{{ route('admin.profile') }}" class="nav-link {{ is_active('admin.profile') }}">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  {{ __('Profile') }}
                </p>
              </a>
            </li>

            <!-- Navbar Item - Data Kelas -->
            <li class="nav-item has-treeview">
             <hr class="dropdown-divider"> <!-- Garis Horizontal -->
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-graduation-cap"></i>
                <p>
                  Data Kelas
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('admin.kelas-umum.halaman') }}" class="nav-link {{ is_active('admin/kelas-umum/halaman') }}">
                    <i class="nav-icon fas fa-user-graduate"></i>
                    <p>Kelas Umum</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.kelas-programming.halaman') }}" class="nav-link {{ is_active('admin/kelas-programming/halaman') }}">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Kelas Programming</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin/kelas-tambahan/halaman') }}" class="nav-link {{ is_active('admin/kelas-tambahan/halaman') }}">
                    <i class="nav-icon fas fa-list"></i>
                    <p>Kelas Tambahan</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Navbar Item - Data Instructur -->
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                <p>
                  Data Instructur
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('admin/instructur-profil/halaman') }}" class="nav-link {{ is_active('admin/instructur-profil/halaman') }}">
                    <i class="nav-icon fas fa-user-graduate"></i>
                    <p>Profil Instructur</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin/instructur-kelas/halaman') }}" class="nav-link {{ is_active('admin/instructur-kelas/halaman') }}">
                    <i class="nav-icon fas fa-list"></i>
                    <p>Kelas Instructur</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Navbar Item - Data Peserta -->
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-graduate"></i>
                <p>
                  Data Peserta
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('admin/peserta-profil/halaman') }}" class="nav-link {{ is_active('admin/peserta-profil/halaman') }}">
                    <i class="nav-icon fas fa-user-graduate"></i>
                    <p>Profil Peserta</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin/peserta-kelas/halaman') }}" class="nav-link {{ is_active('admin/instructur-profil/halaman') }}">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Kelas Peserta</p>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Navbar Item - Logout -->
            <li class="nav-item">
              <hr class="dropdown-divider"> <!-- Garis Horizontal -->
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-power-off red"></i>
                <p>
                  {{ __('Logout') }}
                </p>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">@yield('title')</h1>
            </div>
          </div>
        </div>
      </div>

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          @include('sweetalert::alert')
          @include('flash::message')
          <div class="row">
            @yield('content')
          </div>
        </div>
      </div>
    </div>

    <!-- Main Footer -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-inline">
        {{ Config::get('settings.name') }}
      </div>
      <strong>Copyright &copy; {{ \Carbon\Carbon::now()->year }} <a href="http://angelkurten.com">KELOMPOK
          4</a>.</strong> Jika orang lain bisa kenapa harus saya.
    </footer>
  </div>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
  @yield('scripts')
</body>

</html>
