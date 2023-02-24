<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Okira') }}</title>

    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="{{asset('assets/css/variables.css')}}" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
    
</head>
<body>
    <div id="app">

               
        <header id="header" class="header fixed-top bg-danger" data-scrollto-offset="0">
            <div class="container d-flex align-items-center justify-content-between">

            <a href="{{ url('/') }}" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="{{asset('assets/img/logo.png')}}" alt=""> -->
                <h1>Okira<span></span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>

                <li><a class="nav-link scrollto" href="{{ url('/') }}">Accueil</a></li>
                <li><a class="nav-link scrollto" href="#">A propos</a></li>
                <li><a class="nav-link scrollto" href="{{route('comment')}}">Comment ça marche ?</a></li>
                <li><a class="nav-link scrollto" href="{{route('contact')}}">Contact</a></li>


                @guest
                    @if (Route::has('login'))
                        <a href="{{route('login')}}" ><span class="btn btn-success m-0" ><i class="fa fa-user" aria-hidden="true"></i> Connexion</span> </a>
                    @endif

                    @if (Route::has('register'))
                        <a href="{{route('register')}}" ><span class="btn btn-primary m-0" ><i class="fa fa-edit" aria-hidden="true"></i> Inscription</span> </a>
                    @endif
                    @else
                    {{-- <li><a class="nav-link scrollto" href="{{route('home')}}">Tableau de bord</a></li> --}}

                        <li class="nav-item">
                            <a id="navbarDropdown" class="nav-link scrollto text-warning" href="{{route('home')}}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <b>{{ Auth::user()->name }}</b>
                            </a>
                        </li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span class="btn btn-danger"><i class="fa fa-power-off" aria-hidden="true"></i> {{ __('Deconnexion') }}</span></a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                @endguest

                </ul>
                <i class="bi bi-list mobile-nav-toggle d-none"></i>
            </nav><!-- .navbar -->
            
            
            </div>
        </header>


        <main class="py-4">
            @yield('content')
        </main>
    </div>

      <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-legal text-center">
        <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

            <div class="d-flex flex-column align-items-center align-items-lg-start">
            <div class="copyright">
                <strong><span>Okira</span></strong> &copy; 2022 Copyright Yubile Technologie. Touts dorits réservés
            </div>
            <div class="credits">
            </div>
            </div>

            <div class="social-links order-last order-lg-last mb-3 mb-lg-0">
            <a href="#" class="text-light">Conditions d'utilisation</a> | 
            <a href="#" class="text-light">Vie Privée</a>
            <!-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> -->
            </div>

        </div>
        </div>

    </footer><!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>
</body>


      <!-- Vendor JS Files -->
      <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
      <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
      <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
      <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
      <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
    
      <!-- Template Main JS File -->
      <script src="{{asset('assets/js/main.js')}}"></script>
</html>
