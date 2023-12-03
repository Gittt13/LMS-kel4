<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{  Config::get('settings.name') }} Dashboard Teacher {{  Config::get('settings.description') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel='icon' href='/favicon.ico' type='image/x-icon' >

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('styles')
    @include('includes.analytics')
    <style>
    .navbar {
        position: fixed;
        width: 100%;
    }

    .main-sidebar {
        position: fixed;
        height: 100%;
    }
    
    #logo{
        position: fixed;
    }
</style>
</head>
<style>
.dropbtn {
  background-color: #427D9D;
  border-radius: 8px;
  color: white;
  padding: 10px;
  border: none;
}

/* .dropdown {
  position: relative;
  display: inline-block;
} */

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #164863;}
</style>
<body class="hold-transition sidebar-mini">
<div class="wrapper " id="app">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom fixed-top">
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
    </ul>

    <!-- bagian button add -->
    <div class="dropdown d-flex flex-row-reverse justify-content-end">
        <button class="dropbtn">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
            </svg>
        </button>
            <div class="dropdown-content">
                <a href="#">Tambah Peserta</a>
                <a href="#">Lihat Peserta</a>
            </div>
    </div>
    
    <!-- SEARCH FORM -->
    <form class="form-inline ml-auto">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>
</nav>
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4" id="logo">
        <!-- Brand Logo -->
        <a href="{{ route('home') }}" class="brand-link">
            <img src="{{  Config::get('settings.logo') }}" alt="{{  Config::get('settings.name') }}" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">{{  Config::get('settings.name') }} <span class="right badge badge-danger">beta</span></span>
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
                        <a href="{{ route('home.teacher') }}" class="nav-link {{ is_active('home') }}">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                {{ __('Dashboard') }}
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('profile') }}" class="nav-link  {{ is_active('profile') }}">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                {{ __('Profile') }}
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="kelas" class="nav-link">
                            <i class="nav-icon fas fa-chalkboard"></i>
                            <p>
                                {{ __('Kelas') }}
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('kelas') }}" class="nav-link">
                                    <i class="fas fa-link"></i>
                                    <p>Kelas 1</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-link"></i>
                                    <p>Kelas 2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-link"></i>
                                    <p>Kelas 3</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('absensi') }}" class="nav-link  {{ is_active('absensi') }}">
                            <i class="nav-icon fas fa-clipboard-check"></i>
                            <p>
                                {{ __('Absensi') }}
                            </p>
                        </a>
                    </li>

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
                        <a class="nav-link"  href="{{ route('logout') }}"
                        onclick="event.preventDefault();
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

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            {{  Config::get('settings.name') }}
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; {{ \Carbon\Carbon::now()->year }} <a href="https://www.linkedin.com/in/muhammad-anggit-b83772262/">Kelompok 4 MSIB Gamelab</a>.</strong> Tetaplah bernafas.
    </footer>
</div>
<!-- ./wrapper -->

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
@yield('scripts')
</body>
</html>
