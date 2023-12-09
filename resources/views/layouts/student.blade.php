<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{ Config::get('settings.name') }} Dashboard Student {{ Config::get('settings.description') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel='icon' href='/favicon.ico' type='image/x-icon'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    {{-- icon --}}
    <script src="https://kit.fontawesome.com/98ac9fd23e.js" crossorigin="anonymous"></script>

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @yield('styles')
    @include('includes.analytics')

    <style>
        .navbar {
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .main-sidebar {
            position: fixed;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        .content-wrapper {
            margin-top: 56px;
            margin-left: 250px;
        }

        #logo {
            position: fixed;
        }

        .btn-add {

            border-radius: 12px;
            color: #164863;
            padding: 4px;
            border: none;
        }

        .city {
            display: none;
        }

        .first {
        text-indent: 5em;
        }
    </style>
</head>

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
            <!-- tombol untuk join kelas -->


            <!-- SEARCH FORM -->
            <form class="form-inline ml-4 mr-6">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                        aria-label="Search">
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
                <img src="/img/uni-learn.png" alt="{{ Config::get('settings.name') }}"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">{{ Config::get('settings.name') }} 
                    <b>Uni-Learn</b>&nbspStudent  
                </span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ Auth::user()->avatar }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="{{ route('profil-student') }}" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item has-treeview ">
                            <a href="{{ route('home-student') }}" class="nav-link {{ is_active('home') }}">
                                <i class="fa-solid fa-house"></i>
                                <p>
                                    {{ __('Dashboard') }}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview ">
                            <a href="{{ route('kalender') }}" class="nav-link {{ is_active('kalender') }}">
                                <i class="fa-solid fa-calendar-days"></i>
                                <p>
                                    {{ __('Kalender') }}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview ">
                            <a href="{{ route('tugas') }}" class="nav-link {{ is_active('tugas') }}">
                                <i class="fa-solid fa-file"></i>
                                <p>
                                    {{ __('Daftar tugas') }}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview ">
                            <a href="{{ route('nilai') }}" class="nav-link {{ is_active('nilai') }}">
                                <i class="fa-solid fa-marker"></i>
                                <p>
                                    {{ __('Nilai') }}
                                </p>
                            </a>
                        </li>
                        {{-- <li class="nav-item has-treeview">
                            <a href="" class="nav-link {{ is_active('courses') }}">
                                <i class="fas fa-book-open"></i>
                                <p>
                                    {{ __('My Courses') }}
                                </p>
                            </a>
                        </li> --}}
                        <li class="nav-item has-treeview">
                            <a href="kelas" class="nav-link">
                                <i class="fas fa-book-open"></i>
                                <p>
                                    {{ __('Kelas') }}
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('kelas') }}" class="nav-link">
                                        <i class="av-icon fas fa-book"></i>
                                        <p>Kelas 1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="av-icon fas fa-book"></i>
                                        <p>Kelas 2</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="av-icon fas fa-book"></i>
                                        <p>Kelas 3</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <button onclick="document.getElementById('id01').style.display='block'" class="w3-button">
                        <i class="fa-solid fa-square-plus" style="color:white;"></i>
                        </button>
                        <div id="id01" class="w3-modal w3-modal-dialog w3-display-flex ">
                            <div class="w3-modal-content w3-card-4 w3-animate-zoom">
                                <header class="w3-container w3-blue">
                                    <span onclick="document.getElementById('id01').style.display='none'"
                                        class="w3-button w3-blue w3-xmedium w3-display-topright">&times;</span>
                                    <h2>Tambah Kelas</h2>
                                </header>

                                <div class="w3-bar w3-border-bottom">
                                    <button class="tablink w3-bar-item w3-button"
                                        onclick="openCity(event, 'Umum')">Kelas Umum</button>
                                    <button class="tablink w3-bar-item w3-button"
                                        onclick="openCity(event, 'Programer')">Kelas Programmer</button>
                                    <button class="tablink w3-bar-item w3-button"
                                        onclick="openCity(event, 'Tambahan')">Kelas Tambahan</button>
                                </div>

                                <div id="Umum" class="w3-container city">
                                    <h1>Kelas Umum</h1>
                                    <form class="container">
                                        <select class="custom-select my-1 mr-sm-2 w-50" id="inlineFormCustomSelectPref">
                                            <option selected>Pilih Salah satu</option>
                                            <option value="1">B. Inggris</option>
                                            <option value="2">Pemrograman Web Lanjut</option>
                                            <option value="3">Laravel</option>
                                        </select>
                                        <button type="submit" class="btn btn-primary my-1"
                                            onclick="alert('Apakah anda yakin ingin menambahkan kelas ini!')">Submit
                                        </button>
                                    </form>
                                </div>

                                <div id="Programer" class="w3-container city">
                                    <h1>Kelas Programmer</h1>
                                    <select class="custom-select my-1 mr-sm-2 w-50" id="inlineFormCustomSelectPref">
                                        <option selected>Pilih Salah satu</option>
                                        <option value="1">B. Inggris</option>
                                        <option value="2">Pemrograman Web Lanjut</option>
                                        <option value="3">Laravel</option>
                                    </select>
                                    <button type="submit" class="btn btn-primary my-1"
                                        onclick="alert('Apakah anda yakin ingin menambahkan kelas ini!')">Submit</button>
                                    </form>
                                </div>

                                <div id="Tambahan" class="w3-container city">
                                    <h1>Kelas Tambahan</h1>
                                    <select class="custom-select my-1 mr-sm-2 w-50" id="inlineFormCustomSelectPref">
                                        <option selected>Pilih Salah satu</option>
                                        <option value="1">B. Inggris</option>
                                        <option value="2">Pemrograman Web Lanjut</option>
                                        <option value="3">Laravel</option>
                                    </select>
                                    <button type="submit" class="btn btn-primary my-1"
                                        onclick="alert('Apakah anda yakin ingin menambahkan kelas ini!')">Submit</button>
                                    </form>
                                </div>

                                <div class="w3-container w3-container-fluid w3-light-grey w3-padding">
                                    <button class="w3-button w3-right w3-white w3-border"
                                        onclick="document.getElementById('id01').style.display='none'">Close</button>
                                </div>
                            </div>
                        </div>
                        {{-- <li class="nav-item">
                            <a href="{{ route('stream') }}" class="nav-link  {{ is_active('stream') }}">
                                <i class="nav-icon fas fa-play"></i>
                                <p>
                                    {{ __('Stream') }}
                                    <span class="right badge badge-danger">New</span>
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

        <!-- Control Sidebar -->
        {{-- <aside class="control-sidebar control-sidebar-dark">
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
            <strong>Copyright &copy; {{ \Carbon\Carbon::now()->year }} <a
                    href="https://www.instagram.com/nhurulanam/">Kelompok 4 MSIB Gamelab</a>.</strong> All rights
            reserved.
        </footer>
        </footer>
    </div>
    <!-- ./wrapper -->


    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    <script>
        document.getElementsByClassName("tablink")[0].click();

        function openCity(evt, cityName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].classList.remove("w3-light-grey");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.classList.add("w3-light-grey");
        }
    </script>
    @yield('scripts')
</body>

</html>