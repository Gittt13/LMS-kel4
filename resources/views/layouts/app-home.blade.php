<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Uni-Learn</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="/img/favicon.png" rel="icon">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/vendor/aos/aos.css" rel="stylesheet">
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/css/style.css" rel="stylesheet">
  <style>
  body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
  .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
  .fa-anchor,.fa-coffee {font-size:200px}
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">UNI-LEARN</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link   scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
          <!-- <li><a class="getstarted scrollto" href="{{route('login')}}">Get Started</a></li> -->

    <!-- Authentication Links -->
    @guest
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}" style="color:#F3EEEA; font-family: 'Poppins', sans-serif;">{{ __('Login') }}</a>
    </li>
    @if (Route::has('register'))
    <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}" style="color:#F3EEEA; font-family: 'Poppins', sans-serif;">{{ __('Register') }}</a>
    </li>
    @endif
    @else
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre 
            style="color:#F3EEEA; font-family: 'Poppins', sans-serif;">
                {{ Auth::user()->name }} <span class="caret"></span>
        </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
    </form>
    </div>
    </li>
    @endguest
</ul>
<i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->

<main>
    @yield('content')
</main>

</body>
</html>