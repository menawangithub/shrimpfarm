@if(session()->has('login'))
<script>
    document.location.href = "/index"
</script>
@endif

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ShrimpFarm | Tingkatkan Produktifitas Budidaya Udang</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo/iconmini.png" rel="icon">
  <link href="assets/img/logo/iconmini.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a href="index.html"><img src="assets/img/logo/sf200.png" alt="ShrimpFarm" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
            <li><a href="/authlogin" class="btn-get-started scrollto">Masuk</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 style="color:#EB5D1E;">Solusi Terbaik Untuk Budidaya Udang Anda!</h1>
          <br>
          <p>ShrimpFarm adalah aplikasi pengelolaan tambak udang dengan fitur lengkap untuk membantu budidaya lebih maksimal</p>
          <div>
            <a href="/authregister" class="btn-get-started scrollto">Buat Akun ShrimpFarm Anda!</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/hero-image3.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>Berbudidaya Lebih Produktif dengan ShrimpFarm</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Kemudahan Konsultasi</a></h4>
              <p class="description">Ketahui Masalah Udang dan Rekomendasi dari Ahli Budidaya ShrimpFarm</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Kemudahan Pengelolaan</a></h4>
              <p class="description">Mudah mengelola tambak dari pencatatan hingga Pengelolaan dari mana saja GRATIS!</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Pantau Daftar Tugas Budidaya</a></h4>
              <p class="description">Pantau kemajuan budidaya Anda dengan fitur Daftar Tugas ShrimpFarm</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Edukasi Gratis</a></h4>
              <p class="description">Akses berbagai materi budidaya secara gratis untuk Tingkatkan Produktivitas Budidaya Udang</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->
   
    <!-- ======= Fitur Explanation ======= -->

     <!-- ======= Step By Step ======= -->
   <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <p>Langkah - Langkah Menggunakan Aplikasi ShrimpFarm</p>
      </div>
  
      <div class="row">
        <!-- Kotak 1 -->
        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <p class="description">Daftar Akun ShrimpFarm sebagai Pembudidaya maupun Non Pembudidaya</p>
          </div>
        </div>
  
        <!-- Kotak 2 -->
        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-file"></i></div>
            <p class="description">Masukkan dan Lengkapi Data Profil Budidaya Udang Anda</p>
          </div>
        </div>
  
        <!-- Kotak 3 -->
        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <p class="description"><strong>Selesai!</strong> ShrimpFarm telah menjadi rekan budidaya Anda!</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- End Step By Step Section -->

       <!-- ======= Team Section ======= -->
       <section id="team" class="team">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Di Balik Layar</h2>
            <p>Tim ShrimpFarm</p>
            <!-- <p>Dengan keragaman tim kami, yang memungkinkan kami mendekati setiap tantangan 
                dengan berbagai perspektif, menciptakan produk yang lebih baik </p> -->
          </div>
  
          <div class="row">
  
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
              <div class="member">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Nurrizkyta Aulia Hanifah</h4>
                    <span>Web Developer</span>
                  </div>
                  <div class="social">
                    <a href="https://instagram.com/nausssie"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/nurrizkyta-aulia/"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
              <div class="member">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Mochamad Alwan</h4>
                    <span>Product Manager</span>
                  </div>
                  <div class="social">
                    <a href="https://instagram.com/mchalwn_"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/mchalwn/"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
              <div class="member">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Muthia Nurul</h4>
                    <span>UI/UX Designer</span>
                  </div>
                  <div class="social">
                    <a href="https://instagram.com/mth.ns_"><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
              <div class="member">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Nasywa Shafa</h4>
                    <span>Database Manager</span>
                  </div>
                  <div class="social">
                    <a href="https://instagram.com/nasywashafas"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/nasywa-shafa-salsabila/"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Team Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak Kami</h2>
          <p>Hubungi Kami untuk menjawab kebutuhan budidaya Anda</p>
        </div>

        <div class="row">

          <div class="col-lg-20 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Jl. Kumbang No.14, RT.02/RW.06, Babakan, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16128</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><a href="http://mailto:menawanproject@gmail.com">menawanproject@gmail.com</a></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telepon:</h4>
                <p><a href="https://wa.me/6281290154792/">+62 812 9015 4792</a></p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1875.5600188640651!2d106.80606449381415!3d-6.589932385345199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5d2e602b501%3A0x25a12f0f97fac4ee!2sSchool%20of%20Vocational%20Studies%20-%20IPB%20University!5e0!3m2!1sen!2sid!4v1695439359434!5m2!1sen!2sid"  referrerpolicy="no-referrer-when-downgrade" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>ShrimpFarm</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="tentangkami.html">Menawan Project</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main2.js"></script>

</body>

</html>