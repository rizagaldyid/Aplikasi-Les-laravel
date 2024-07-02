@extends('layouts.landing')
@section('title', 'Home')
@section('content')


<body class="index-page">

    
  
    <main class="main">
  
      <!-- Hero Section -->
      <section id="hero" class="hero section">
  
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
              <h1 class="">Solusi Baik Untuk Permainan Piano Anda</h1>
              <p class="">Kami bersedia menjadi pendamping anda from zero to hero</p>
              <div class="d-flex">
                <a href="#about" class="btn-get-started">About</a>
                <a href="https://youtu.be/SF1ChqibdSA?si=VHfQHhm_NPRvrTX4" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
              </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
              <img src="landing/img/pianoe.png" class="img-fluid animated" alt="">
            </div>
          </div>
        </div>
  
      </section><!-- /Hero Section -->
  
      <!-- Clients Section -->
      <section id="clients" class="clients section">
  
        <div class="container" data-aos="zoom-in">
  
          <div class="swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 2,
                    "spaceBetween": 40
                  },
                  "480": {
                    "slidesPerView": 3,
                    "spaceBetween": 60
                  },
                  "640": {
                    "slidesPerView": 4,
                    "spaceBetween": 80
                  },
                  "992": {
                    "slidesPerView": 5,
                    "spaceBetween": 120
                  },
                  "1200": {
                    "slidesPerView": 6,
                    "spaceBetween": 120
                  }
                }
              }
            </script>
            <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide"><img src="landing/img/clients/client-1.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="landing/img/clients/client-2.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="landing/img/clients/client-3.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="landing/img/clients/client-4.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="landing/img/clients/client-5.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="landing/img/clients/client-6.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="landing/img/clients/client-7.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="landing/img/clients/client-8.png" class="img-fluid" alt=""></div>
            </div>
          </div>
  
        </div>
  
      </section><!-- /Clients Section -->
  
      <!-- About Section -->
      <section id="about" class="about section">
  
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2 class="">About Us</h2>
        </div><!-- End Section Title -->
  
        <div class="container">
  
          <div class="row gy-4">
  
            <div class="col-lg-6 content-center" data-aos="fade-up" data-aos-delay="100">
              <p align='justify'>
                

Selamat datang di Rumah Piano, mitra tepercaya Anda dalam keunggulan pendidikan musik. Di Rumah Piano, kami percaya pada kekuatan transformatif dari pembelajaran yang dipersonalisasi. Misi kami adalah memberdayakan siswa untuk mencapai tujuan bisa bermain pianoa dan membuka potensi penuh mereka melalui layanan bimbingan belajar yang disesuaikan dan berkualitas tinggi.


              </p>
              <ul>
                <li><i class="bi bi-check2-circle"></i> <span>Di Dampingi oleh guru yang profesional</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Mendapatkan E-book.</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Join Komunitas Musik di seluruh Indonesia</span></li>
              </ul>
            </div>
  
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
              <p align='justify'>Cerita kita

                Didirikan di 2023, Rumah Piano didirikan dengan visi untuk memberikan dukungan pembelajaran piano yang komprehensif, mudah diakses, dan menarik bagi siswa dari segala usia dan tingkatan. Pendiri kami, Rizky Agras Rifaldy, terinspirasi oleh perjalanan belajar musik dan dampak mendalam dari pengajaran tatap muka yang penuh dedikasi terhadap keberhasilan permainan mereka.</p>
              <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
  
          </div>
  
        </div>
  
      </section><!-- /About Section -->
  
      
  
      
  
      <!-- Services Section -->
      <section id="services" class="services section">
  
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Services</h2>
          <p>Pelayanan yang kami berikan</p>
        </div><!-- End Section Title -->
  
        <div class="container">
  
          <div class="row gy-4">
  
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-activity icon"></i></div>
                <h4><a href="service-details.html" class="stretched-link">Les Privat Piano</a></h4>
                <p>Guru piano datang ke rumah Kamu. Ini sangat nyaman dan penyesuaian kurikulum berdasarkan kebutuhan kamu.</p>
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
              <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                <h4><a href="service-details.html" class="stretched-link">Les Private Online</a></h4>
                <p>Belajar dari mana saja dengan guru terbaik di seluruh dunia tanpa batas </p>
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
              <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                <h4><a href="service-details.html" class="stretched-link">Jadwal Fleksibel</a></h4>
                <p>Guru piano menawarkan fleksibilitas dalam penjadwalan, memungkinkan kamu untuk memilih waktu yang paling sesuai dengan rutinitas kamu</p>
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
              <div class="service-item position-relative">
                <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                <h4><a href="service-details.html" class="stretched-link">Materi Pembelajaran</a></h4>
                <p>Notasi dan Skor Musik: PDF atau materi digital dari notasi dan skor musik yang dapat diunduh.
                </p>
              </div>
            </div><!-- End Service Item -->
  
          </div>
  
        </div>
  
      </section><!-- /Services Section -->
  
      
  
      <!-- Portfolio Section -->
      {{-- <section id="portfolio" class="portfolio section">
  
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Portfolio</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->
  
        <div class="container">
  
          <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
  
            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-product">Card</li>
              <li data-filter=".filter-branding">Web</li>
            </ul><!-- End Portfolio Filters -->
  
            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <img src="landing/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 1</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="landing/img/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                <img src="landing/img/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 1</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="landing/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                <img src="landing/img/masonry-portfolio/masonry-portfolio-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 1</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="landing/img/masonry-portfolio/masonry-portfolio-3.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <img src="landing/img/masonry-portfolio/masonry-portfolio-4.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 2</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="landing/img/masonry-portfolio/masonry-portfolio-4.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                <img src="landing/img/masonry-portfolio/masonry-portfolio-5.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 2</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="landing/img/masonry-portfolio/masonry-portfolio-5.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                <img src="landing/img/masonry-portfolio/masonry-portfolio-6.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 2</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="landing/img/masonry-portfolio/masonry-portfolio-6.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <img src="landing/img/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 3</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="landing/img/masonry-portfolio/masonry-portfolio-7.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                <img src="landing/img/masonry-portfolio/masonry-portfolio-8.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 3</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="landing/img/masonry-portfolio/masonry-portfolio-8.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
  
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                <img src="landing/img/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 3</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="landing/img/masonry-portfolio/masonry-portfolio-9.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
  
            </div><!-- End Portfolio Container -->
  
          </div>
  
        </div>
  
      </section><!-- /Portfolio Section --> --}}
  
      <!-- Team Section -->
      {{-- <section id="team" class="team section">
  
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Team</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->
  
        <div class="container">
  
          <div class="row gy-4">
  
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <div class="team-member d-flex align-items-start">
                <div class="pic"><img src="landing/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                  <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                  </div>
                </div>
              </div>
            </div><!-- End Team Member -->
  
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
              <div class="team-member d-flex align-items-start">
                <div class="pic"><img src="landing/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                  <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                  </div>
                </div>
              </div>
            </div><!-- End Team Member -->
  
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
              <div class="team-member d-flex align-items-start">
                <div class="pic"><img src="landing/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                  <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                  </div>
                </div>
              </div>
            </div><!-- End Team Member -->
  
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
              <div class="team-member d-flex align-items-start">
                <div class="pic"><img src="landing/img/team/team-4.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""> <i class="bi bi-linkedin"></i> </a>
                  </div>
                </div>
              </div>
            </div><!-- End Team Member -->
  
          </div>
  
        </div>
  
      </section><!-- /Team Section --> --}}
  
      <!-- Pricing Section -->
      <section id="pricing" class="pricing section">
  
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Pricing</h2>
          <p>Nikmati hasil investasi untuk diri kamu di masa depan</p>
        </div><!-- End Section Title -->
  
        <div class="container">
  
          <div class="row gy-4">
  
            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
              <div class="pricing-item">
                <h3>Paket Dasar (Beginner)</h3>
                <h4><sup>Rp </sup>500,000<span> / month</span></h4>
                <ul>
                  <li><i class="bi bi-check"></i> <span>Durasi: 30 menit per sesi.</span></li>
                  <li><i class="bi bi-check"></i> <span>Pertemuan 2 kali per minggu</span></li>
                  <li><i class="bi bi-check"></i> <span>Mempelajari pada dasar-dasar piano, teori musik dasar, dan teknik dasar jari</span></li>
                  <li class="na"><i class="bi bi-x"></i> <span>Tutorial</span></li>
                  <li class="na"><i class="bi bi-x"></i> <span>Grup Whatsapp</span></li>
                </ul>
                <a href="/products" class="buy-btn">Buy Now</a>
              </div>
            </div><!-- End Pricing Item -->
  
            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
              <div class="pricing-item featured">
                <h3>Paket Menengah (Intermediate)</h3>
                <h4><sup>Rp</sup>700,000<span> / month</span></h4>
                <ul>
                  <li><i class="bi bi-check"></i> <span>Durasi: 45 menit per sesi.</span></li>
                  <li><i class="bi bi-check"></i> <span>Pertemuan 2 kali per minggu.</span></li>
                  <li><i class="bi bi-check"></i> <span>Mempelajari teori musik yang lebih mendalam, latihan skala dan akor, serta pengenalan ke berbagai genre musik.</span></li>
                  <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                  <li><i class="bi bi-check"></i> <span>Grup Whatsapp</span></li>
                </ul>
                <a href="/products" class="buy-btn">Buy Now</a>
              </div>
            </div><!-- End Pricing Item -->
  
            <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
              <div class="pricing-item">
                <h3>Paket Lanjutan (Advanced)</h3>
                <h4><sup>Rp</sup>1,000,000<span> / month</span></h4>
                <ul>
                  <li><i class="bi bi-check"></i> <span>Durasi: 60 menit per sesi</span></li>
                  <li><i class="bi bi-check"></i> <span>Pertemuan 2 kali per minggu.</span></li>
                  <li><i class="bi bi-check"></i> <span>Mempelajari Teknik lanjutan, repertoar klasik dan modern, persiapan untuk ujian musik atau kompetisi.</span></li>
                  <li><i class="bi bi-check"></i> <span>Grup Whatsapp</span></li>
                  <li><i class="bi bi-check"></i> <span>repertoar klasik dan modern</span></li>
                </ul>
                <a href="/products" class="buy-btn">Buy Now</a>
              </div>
            </div><!-- End Pricing Item -->
  
          </div>
  
        </div>
  
      </section><!-- /Pricing Section -->
  
      <!-- Testimonials Section -->
      {{-- <section id="testimonials" class="testimonials section">
  
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Testimonials</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->
  
        <div class="container" data-aos="fade-up" data-aos-delay="100">
  
          <div class="swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                }
              }
            </script>
            <div class="swiper-wrapper">
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="landing/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="landing/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="landing/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="landing/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="landing/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->
  
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
  
      </section> --}}
      <!-- /Testimonials Section -->
  
      <!-- Faq 2 Section -->
      {{-- <section id="faq-2" class="faq-2 section">
  
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Frequently Asked Questions</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div><!-- End Section Title -->
  
        <div class="container">
  
          <div class="row justify-content-center">
  
            <div class="col-lg-10">
  
              <div class="faq-container">
  
                <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                  <i class="faq-icon bi bi-question-circle"></i>
                  <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                  <div class="faq-content">
                    <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->
  
                <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                  <i class="faq-icon bi bi-question-circle"></i>
                  <h3>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h3>
                  <div class="faq-content">
                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->
  
                <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                  <i class="faq-icon bi bi-question-circle"></i>
                  <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                  <div class="faq-content">
                    <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->
  
                <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                  <i class="faq-icon bi bi-question-circle"></i>
                  <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
                  <div class="faq-content">
                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->
  
                <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                  <i class="faq-icon bi bi-question-circle"></i>
                  <h3>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h3>
                  <div class="faq-content">
                    <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->
  
              </div>
  
            </div>
  
          </div>
  
        </div>
  
      </section><!-- /Faq 2 Section --> --}}
  
      <!-- Contact Section -->
      <section id="contact" class="contact section">
  
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <p>Hubungi Sekarang</p>
        </div><!-- End Section Title -->
  
        <div class="container" data-aos="fade-up" data-aos-delay="100">
  
          <div class="row gy-4">
  
            <div class="col-lg-5">
  
              <div class="info-wrap">
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-geo-alt flex-shrink-0"></i>
                  <div>
                    <h3>Address</h3>
                    <p>Pejaten - Kramatwatu</p>
                  </div>
                </div><!-- End Info Item -->
  
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-telephone flex-shrink-0"></i>
                  <div>
                    <h3>Call Us</h3>
                    <p>+62 822 5814 8668</p>
                  </div>
                </div><!-- End Info Item -->
  
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-envelope flex-shrink-0"></i>
                  <div>
                    <h3>Email Us</h3>
                    <p>rarpiano@gmail.com</p>
                  </div>
                </div><!-- End Info Item -->
  
                {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1164.3864555077719!2d106.10836440535186!3d-6.050005218180517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1717486808747!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
  
            <div class="col-lg-7">
              <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">
  
                  <div class="col-md-6">
                    <label for="name-field" class="pb-2">Your Name</label>
                    <input type="text" name="name" id="name-field" class="form-control" required="">
                  </div>
  
                  <div class="col-md-6">
                    <label for="email-field" class="pb-2">Your Email</label>
                    <input type="email" class="form-control" name="email" id="email-field" required="">
                  </div>
  
                  <div class="col-md-12">
                    <label for="subject-field" class="pb-2">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject-field" required="">
                  </div>
  
                  <div class="col-md-12">
                    <label for="message-field" class="pb-2">Message</label>
                    <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                  </div>
  
                  <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
  
                    <button type="submit">Send Message</button>
                  </div>
  
                </div>
              </form>
            </div><!-- End Contact Form -->
  
          </div>
  
        </div>
  
      </section><!-- /Contact Section -->
  
    </main>
  
   
  
  </body>



@endsection