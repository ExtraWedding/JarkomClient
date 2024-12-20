<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Fakultas Ilmu Administrasi</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header fixed-top">

 

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <h1 class="sitename">FIA.ID</h1>
          <span>.</span>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="index.php" class="active">Home<br></a></li>
            <li><a href="tugas.php">Ruang & Gedung</a></li>
            <li><a href="upload.php">Pengajuan</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section accent-background">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5 justify-content-between">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          ]<h2 class="text-md-start text-center"><span>WELCOME TO </span><span class="accent">FIA.ID</span></h2>
            <p class="text-md-start text-center">Temukan Kemudahan Dalam Administrasi Peminjaman Ruang, Barang, dan Gedung dengan FIA.ID</p>
            <div class="d-flex justify-content-center justify-content-md-start">
              <a href="index.html" class="btn-get-started">Kunjungi Sekarang</a>
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2">
            <img src="assets/img/logo.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>

      <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
        <div class="container position-relative">
          <div class="row gy-4 mt-5">

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-house-check-fill"></i></div>
                <h4 class="title">Ruangan</h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-building-check"></i></div>
                <h4 class="title">Lapangan</h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-tools"></i></div>
                <h4 class="title">Alat</h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-calendar-week"></i></div>
                <h4 class="title">Traciking</h4>
              </div>
            </div><!--End Icon Box -->

          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->
    
    <section class="problem" id="home" >
  <div class="container">
    <div class="row d-flex justify-content-center" data-aos="fade-up"
    data-aos-duration="3000">
    <form id="dataForm" onsubmit="return confirm('Apakah Anda yakin ingin menyimpan data ini?')" class="form-container">
    </form>
    <div class="col-12">
         <div class="bg-light rounded h-100 p-4" style="background-color: #008374;">
            <h1 class="mb-4 text-center fw-bold">Peminjaman Ruang & Alat </h1>
                <div class="table-responsive" >
                    <table class="table">
                        <thead>
                             <tr>
                                 <th scope="col">No</th>
                                 <th scope="col">Nama</th>
                                 <th scope="col">Tanggal Pinjam</th>
                                 <th scope="col">Jam Mulai</th>
                               <th scope="col">Jam Selesai</th>
                             <th scope="col">Tempat & Alat</th>
                             <th scope="col">Status</th>
                             <th scope="col">No Handphone</th>
                         </tr>
                    </thead>
                    <tbody id="dataList"></tbody>
                </table>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>


  <footer id="footer" class="footer accent-background">


    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">FIA.ID</strong> <span>All Rights Reserved</span></p>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="script.js"></script>
</body>

</html>