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
          <h2 class="text-md-start text-center"><span>WELCOME TO </span><span class="accent">FIA.ID</span></h2>
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
    
    <section class="problem mt-0" id="home">
  <div class="container">
    <div class="row d-flex justify-content-center" data-aos="fade-up"data-aos-duration="3000">
        <div class="col-12">
        <div class="container">
        <h1 class="text-center fw-bold">FORM PENGAJUAN PEMINJAMAN RUANG & ALAT</h1>
        <form id="dataForm" onsubmit="return confirm('Apakah anda sudah yakin ?')" class="d-inline">
            
            <input type="hidden" id="id" name="id">
            <label for="nama_pinjam"  class="label-form">Nama</label>
            <input type="text" class="form-control" id="nama_pinjam" name="nama_pinjam" required>

            <label for="tanggal_pinjam" class="label-form">Tanggal Pinjam</label>
            <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" required>

            <label for="ruang" class="label-form">Ruang & Alat</label>
            <select name="ruang"  class="form-control"id="ruang">
            <option value="" hidden>Choose</option>
              <option value="GKM LANTAI 4">GKM LANTAI 4</option>
              <option value="GKM LANTAI 3">GKM LANTAI 3</option>
               <option value="Auditorium G2">Auditorium G2</option>
               <option value="Lab Komputer G1">Lab Komputer G1</option>
                <option value="Lapangan Basket">Lapangan Basket</option>
               <option value="Gedung F2.14">Gedung F2.14</option>
               <option value="Gedung F3.14">Gedung F3.14</option>
            </select>

            <label for="jam_mulai" class="label-form">Jam Mulai</label>
            <input type="time" class="form-control" name="jam_mulai" id="jam_mulai">

            <label for="jam_selesai" class="label-form">Jam Selesai</label>
            <input type="time" class="form-control" name="jam_selesai" id="jam_selesai">

            <label for="tanggal_pengajuan" class="label-form">Tanggal Pengajuan</label>
            <input type="date" class="form-control" name="tanggal_pengajuan" id="tanggal_pengajuan">
            
            <label for="kontak_peminjam" class="label-form">No Handphone</label>
            <input type="number" class="form-control" name="kontak_peminjam" id="kontak_peminjam">

            <button type="submit" id="submitButton" class="btn btn-success mt-3 align-items-center">Submit</button>
        </form>
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