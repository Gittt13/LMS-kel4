<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet">

  <title>{{ Config::get('settings.name') }} Dashboard Admin {{ Config::get('settings.description') }}</title>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel='icon' href='/favicon.ico' type='image/x-icon'>

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  @yield('styles')
  @include('includes.analytics')
  <style>
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
    #logo{
      position: fixed;
    }

  </style>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper " id="app">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ route('home') }}" class="nav-link {{ is_active('home') }}">
            <i class="nav-icon fas fa-home"></i> {{ __('Home') }}
          </a>
        </li>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
        </form>

        {{-- <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="fa fa-bell"></i> <!-- Icon pemberitahuan -->
            </a>
            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
              <a href="#" class="dropdown-item">Notification 1</a>
              <a href="#" class="dropdown-item">Notification 2</a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">View All Notifications</a>
            </div>
          </li>

          <!-- Chat Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="fa fa-comments"></i> <!-- Icon chat -->
            </a>
            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
              <a href="#" class="dropdown-item">Chat 1</a>
              <a href="#" class="dropdown-item">Chat 2</a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">Open Chat Window</a>
            </div>
          </li>

          <!-- User Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <img src="https://cdn-icons-png.flaticon.com/512/2304/2304226.png" class="img-circle elevation-2" alt="User Image" style="width: 24px; height: 24px;">
              <!-- Gambar profil -->
            </a>
            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
              <a href="#" class="dropdown-item">Profile</a>
              <a href="#" class="dropdown-item">Settings</a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">Logout</a>
            </div>
          </li>

          
        </ul> --}}
    </nav>

    {{-- <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ route('stream') }}" class="nav-link {{ is_active('stream') }}">
    <i class="nav-icon fas fa-play"></i>
    {{ __('Stream') }}
    <span class="right badge badge-danger">New</span>
    </a>
    </li> --}}
    </ul>

    {{-- <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> --}}
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4" id="logo">
      <!-- Brand Logo -->
      <a  class="brand-link">
        <img src="{{ Config::get('settings.logo') }}" alt="{{ Config::get('settings.name') }}" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ Config::get('settings.name') }} <span class="right badge badge-danger">ADMIN</span></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
      
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ Auth::user()->avatar }}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item has-treeview">
              <a href="{{ route('admin.dashboard') }}" class="nav-link {{ is_active('admin.dashboard') }} ">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  {{ __('Dashboard') }}
                </p>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a href="{{ route('stream') }}" class="nav-link {{ is_active('stream') }}">
            <i class="nav-icon fas fa-play"></i>
            <p>
              {{ __('Stream') }}
              <span class="right badge badge-danger">New</span>
            </p>
            </a>
            </li> --}}

            <li class="nav-item">
              <a href="{{ route('admin.about') }}" class="nav-link {{ is_active('admin.about') }}">
                <i class="nav-icon fas fa-info"></i>
                <p>
                  {{ __('About') }}
                </p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="{{ route('admin.profile') }}" class="nav-link {{ is_active('admin.profile') }}">
                  <i class="nav-icon fas fa-user"></i>
                <p>
                  {{ __('Profile') }}
                </p>
              </a>
            </li>

            {{-- <li class="nav-item">
                      <a href="{{ route('admin.data-mahasiswa') }}" class="nav-link {{ is_active('admin.data-mahasiswa') }}">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>Data Mahasiswa</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('admin.data-dosen') }}" class="nav-link {{ is_active('admin.data-dosen') }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Data Dosen</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('admin.data-jurusan') }}" class="nav-link {{ is_active('admin.data-jurusan') }}">
                        <i class="nav-icon fas fa-list"></i>
                        <p>Data Jurusan</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('admin.data-mata-kuliah') }}" class="nav-link {{ is_active('admin.data-mata-kuliah') }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Data Mata Kuliah</p>
                      </a>
                    </li> --}}

            <!-- DROPDOWN KELAS-->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-database"></i>
                    <p>
                      Data Kelas
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{ route('admin/kelas-umum/halaman') }}" class="nav-link {{ is_active('admin/kelas-umum/halaman') }}">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>Kelas Umum</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('admin/kelas-programming/halaman') }}" class="nav-link {{ is_active('admin/kelas-programming/halaman') }}">
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
                <!-- Your other menu items -->

              </ul>
            </nav>
            <!-- DROPDOWN KELAS -->

            <!-- DROPDOWN INSTRUCTUR-->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-database"></i>
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
                        <p>Kelas Instructur</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- Your other menu items -->

              </ul>
            </nav>
            <!-- DROPDOWN Instructur -->

           <!-- DROPDOWN PESERTA-->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-database"></i>
                    <p>
                      Data Peserta
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{ route('admin/instructur-profil/halaman') }}" class="nav-link {{ is_active('admin/peserta-profil/halaman') }}">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>Profil Peserta</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('admin/peserta-kelas/halaman') }}" class="nav-link {{ is_active('admin/peserta-kelas/halaman') }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Kelas Peserta</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- Your other menu items -->

              </ul>
            </nav>
            <!-- DROPDOWN PESERTA-->


            

            <!-- /.sidebar-menu -->

            {{-- <li class="nav-item">
              <a href="{{ route('admin.reports') }}" class="nav-link {{ is_active('admin.reports') }}">
            <i class="nav-icon fas fa-chart-bar"></i>
            <p>
              {{ __('Reports') }}
            </p>
            </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.settings') }}" class="nav-link {{ is_active('admin.settings') }}">
                <i class="nav-icon fas fa-cogs"></i>
                <p>
                  {{ __('Settings') }}
                </p>
              </a>
            </li> --}}
            {{-- <li class="nav-item">
              <a href="{{ route('logout') }}" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              {{ __('Logout') }}
            </p>
            </a>
            </li> --}}


            @can('view_admin')
            <li class="nav-header">@lang('menus.administration')</li>

            <li class="nav-item">
              <a href="{{ route('roles.index') }}" class="nav-link">
                <i class="nav-icon fas fa-lock"></i>
                <p>
                  @lang('roles.roles')
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('courses.index') }}" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  @lang('course/fields.courses')
                </p>
              </a>
            </li>
            @endcan
            <li class="nav-header"></li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
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
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">@yield('title')</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          @include('sweetalert::alert')
          @include('flash::message')
          <div class="row">
            @yield('content')
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    {{-- <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside> --}}
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        {{ Config::get('settings.name') }}
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; {{ \Carbon\Carbon::now()->year }} <a href="http://angelkurten.com">KELOMPOK 4</a>.</strong> Jika orang lain bisa kenapa harus saya.
    </footer>
  </div>
  <!-- ./wrapper -->


  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>

  @yield('scripts')
</body>

</html>
