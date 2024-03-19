<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>@yield('titre')</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{ asset('assets_public/img/favicon.png') }}" rel="icon" />
    <link href="{{ asset('assets_public/img/OIP.jpg') }}" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets_public/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link
      href="{{ asset('assets_public/vendor/bootstrap/css/bootstrap.min.css') }}"
      rel="stylesheet"
    />
    <link
      href="{{ asset('assets_public/vendor/bootstrap-icons/bootstrap-icons.css') }}"
      rel="stylesheet"
    />
    <link href="{{ asset('assets_public/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link
      href="{{ asset('assets_public/vendor/glightbox/css/glightbox.min.css') }}"
      rel="stylesheet"
    />
    <link href="{{ asset('assets_public/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets_public/css/style.css') }}" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Flexor
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
      <div
        class="container d-flex justify-content-center justify-content-md-between"
      >
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"
            ><a href="mailto:contact@example.com">fasoevent@gmail.com</a></i
          >
          <i class="bi bi-phone d-flex align-items-center ms-4"
            ><span>+22662815688</span></i
          >
        </div>

        <div class="cta d-none d-md-flex align-items-center gap-2">
          @auth
          @if (auth()->user()->role == 'admin')
          <a href="{{route('private.adminTableaudebord')}}" class="scrollto">Mon compte Admin</a>  
          @endif

          @if (auth()->user()->role == 'promoteur')
          <a href="{{route('private.promoteurTableaudebord')}}" class="scrollto">Mon compte Promoteur</a>
          @endif

          @if (auth()->user()->role == 'abonne')
          <a href="{{route('private.abonneTableaudebord')}}" class="scrollto">Mon compte Abonné</a>
          @endif
          <a class="scrollto" style="cursor: pointer" onclick="event.preventDefault():document.getElementById('logout-form').submit():">
            Se déconnecter
          </a>

          <form id='logout-form' action="{{ route('deconnexion') }}" method="POST">
            @csrf
          </form>
          @else
          <a href="{{ route('public.inscription-option') }}" class="scrollto">Inscription</a>
          <a href="{{ route('public.connexion') }}" class="scrollto">Connexion</a>
          @endauth
          
        </div>
      </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">
        <div class="logo">
          <h1><a href="{{('acceuil')}}">FasoEvent</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets_public/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        @include('public._layouts.navbar')
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section
      id="hero"
      class="d-flex flex-column justify-content-center align-items-center"
    >
      <div class="container" data-aos="fade-in">
        <h1>Bienvenu sur FasoEvent</h1>
        <h2>Decouvrez et vivez la richesse culturelle du Burkina Faso</h2>
        <div class="d-flex align-items-center">
          <i class="bx bxs-right-arrow-alt get-started-icon"></i>
          <a href="#about" class="btn-get-started scrollto"
            >Commencez maintenant</a
          >
        </div>
      </div>
    </section>
    
    @yield('contenu')

    <!-- ======= Footer ======= -->
    @include('public._layouts.footer')
    <!-- End Footer -->

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets_public/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets_public/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets_public/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets_public/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets_public/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets_public/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets_public/js/main.js') }}"></script>
  </body>
</html>
