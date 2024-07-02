<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title') | Rumah Piano</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="{{asset('assets')}}/dist/img/rar.png" type="image/ico" />
  <link href="landing/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="landing/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="landing/vendor/aos/aos.css" rel="stylesheet">
  <link href="landing/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="landing/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="landing/css/main.css" rel="stylesheet">


</head>
<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
    
          <a href="/" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">Rumah Piano</h1>
          </a>
    
          <nav id="navmenu" class="navmenu">
            <ul>
              <li><a href="/home#hero" >Home</a></li>
              <li><a href="/home#about">About</a></li>
              <li><a href="/home#services">Services</a></li>
              {{-- <li><a href="#portfolio">Portfolio</a></li> --}}
              {{-- <li><a href="#team">Team</a></li> --}}
              <li><a href="/home#pricing">Pricing</a></li>
              <li><a href="/home#contact">Contact</a></li>
            @auth
            <li class="navmenu dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Welcome Back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/beranda">My Dashboard</a></li>
  
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </li>
        @else
            <a class="btn-getstarted " href="/login">Login</a>
        @endauth
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          
            
          {{-- <a class="btn-getstarted" href="/login">Login</a> --}}
    </nav>
    
        </div>
      </header>
      <main class="main">

       
        @yield('content')
    
      </main>

       

    <footer id="footer" class="footer">
  
    
        <div class="container footer-top">
          <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
              <a href="index.html" class="d-flex align-items-center">
                <span class="sitename">Rumah Piano</span>
              </a>
              <div class="footer-contact pt-3">
                <p>Pejaten Kramatwatu</p>
                <p class="mt-3"><strong>Phone:</strong> <span>+62 822 5814 8668</span></p>
                <p><strong>Email:</strong> <span>rarpiano@gmail.com</span></p>
              </div>
            </div>
    
            <div class="col-lg-2 col-md-3 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#about">About us</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#services">Services</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#pricing">Pricing</a></li>
              </ul>
            </div>
    
            {{-- <div class="col-lg-2 col-md-3 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              </ul>
            </div> --}}
    
            <div class="col-lg-4 col-md-12">
              <h4>Follow Us</h4>
              <p>Untuk mendapatkan informasi lebih lanjut</p>
              <div class="social-links d-flex">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
    
          </div>
        </div>
    
        <div class="container copyright text-center mt-4">
          <p>© <span>Copyright</span> <strong class="px-1 sitename">Rizky Agras R</strong> <span>All Rights Reserved</span></p>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            Designed by <a href="https://bootstrapmade.com/">Rizky Agras Rifaldy</a>
          </div>
        </div>
    
      </footer>
    
      <!-- Scroll Top -->
      <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
      <!-- Preloader -->
      <div id="preloader"></div>
    
      <!-- Vendor JS Files -->
      <script src="landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="landing/vendor/php-email-form/validate.js"></script>
      <script src="landing/vendor/aos/aos.js"></script>
      <script src="landing/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="landing/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="landing/vendor/waypoints/noframework.waypoints.js"></script>
      <script src="landing/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
      <script src="landing/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    
      <!-- Main JS File -->
      <script src="landing/js/main.js"></script>
    
</body>


</html>