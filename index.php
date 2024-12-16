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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jarkom</title>
    <link rel="icon" href="images/sekolah2.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- Navbar Start -->
          <nav class="navbar navbar-expand-lg navbar-dark sticky-top top-0 rounded-bottom-4 " style=" background-color:  white;">
            <div class="container">
              <a class="navbar-brand ms-0" href="index.html"><img data-aos="zoom-in" width="70px" src="images/sekolah2.png" class="img-fluid" alt=""></a>
              <h3 data-aos="zoom-in" style="color: rgb(3, 41, 3);">Jaringan Komputer</h3>
              <button class="navbar-toggler bg-success" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span style="color: rgb(3, 41, 3);" class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" data-aos="zoom-in" aria-current="page" style="color: rgb(3, 41, 3);" href="index.php"><strong>Home</strong></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-aos="zoom-in" aria-current="page" style="color: rgb(3, 41, 3);" href="tugas.php"><strong>List Buku</strong></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-aos="zoom-in" aria-current="page" style="color: rgb(3, 41, 3);" href="upload.php"><strong>Tambah Buku</strong></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-aos="zoom-in" aria-current="page" style="color: rgb(3, 41, 3);" href="logout.php"><strong>Logout</strong></a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
<!-- Navabar end -->

<!-- Home Start -->
 <section class="home" id="home">
  <div class="container">
    <div class="row d-flex justify-content-center" data-aos="fade-up"
    data-aos-duration="3000">
      <div class="col-lg-5 col-md-6 col-10 text-center text-md-start mt-5" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0%, 0px);">
        <h1 class="pt-5">
            <strong>Ayo Tingkatkan Literasi Kamu Dengan Membaca Buku</strong>
        </h1>
        <p>
          Kami Menyediakan Paltform Pengecekan Daftar Buku
          <br>
           Perpustakaan <strong> Berbasis Website</strong>
        </p>
        <div class="col-12">
          <button type="submit" class="btn" style="background-color: rgb(3, 135, 23);"><a style="color: black; text-decoration: none;" href="index.php">Kunjungi Sekarang</a></button>
        </div>
      </div>
      <div class="col-lg-5 col-md-6 col-12 text-center text-md-end">
        <img class="w-100" src="images/sekolah2.png" alt="">
      </div>
    </div>
  </div>
 </section>
<!-- Home End -->

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgb(3, 135, 23)" fill-opacity="1" d="M0,96L34.3,128C68.6,160,137,224,206,229.3C274.3,235,343,181,411,160C480,139,549,149,617,138.7C685.7,128,754,96,823,117.3C891.4,139,960,213,1029,240C1097.1,267,1166,245,1234,202.7C1302.9,160,1371,96,1406,64L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
<!-- Problem -->

<section class="problem mt-0" id="home" style="background-color: rgb(3, 135, 23);">
  <div class="container">
    <div class="row d-flex justify-content-center" data-aos="fade-up"
    data-aos-duration="3000">
      <div class="col-lg-5 col-md-6 col-12 text-center text-md-start mt-5">
        <img class="mt-5" height="400px"  src="images/pngtree-book-cartoon-books-simple-png-image_3881440-removebg-preview.png" alt="">
      </div>
      <div class="col-lg-5 col-md-6 col-10 text-center text-md-start mt-5" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0%, 0px);">
            <h1><strong>Apakah Kamu Kesulitan dan bingung untuk mengetahui pengetahuan di dunia?</strong></h1>
              <p>
              Di era modern ini, membaca buku memiliki peran penting dalam membuka wawasan dan memperluas pengetahuan. Dengan membaca, kita dapat mempelajari berbagai ilmu pengetahuan yang bermanfaat, memahami dunia dari perspektif yang berbeda, dan meningkatkan kemampuan berpikir kritis. Membiasakan diri untuk membaca buku adalah langkah penting dalam pengembangan diri dan meraih kesuksesan di masa depan.
              </p>
            <h1>
              <strong>Pusing dan bingung mengecek Ketersediaan buku di Perpustakaan?</strong>
            </h1>
              <p>
              Tenang saja, Universitas Brawijaya memiliki sebuah website yang menyediakan fitur untuk mengecek ketersediaan buku. Dengan fitur ini, mahasiswa dapat dengan mudah mencari dan memastikan buku yang mereka butuhkan tersedia, sehingga proses belajar menjadi lebih efektif dan efisien.
              </p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Problem End -->
<div class="wave-2">
    <svg viewBox="0 0 1366 231" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M0 205.59L33.1822 179.025C64.5209 153.615 130.885 102.795 195.406 98.175C259.927 93.555 324.448 136.29 390.812 132.825C455.333 128.205 519.854 77.385 586.219 77.385C650.74 77.385 715.26 128.205 779.781 136.29C846.146 145.53 910.667 110.88 975.188 98.175C1041.55 85.47 1106.07 93.555 1170.59 120.12C1235.11 145.53 1301.48 188.265 1332.82 209.055L1366 231V0H1332.82C1301.48 0 1235.11 0 1170.59 0C1106.07 0 1041.55 0 975.188 0C910.667 0 846.146 0 779.781 0C715.26 0 650.74 0 586.219 0C519.854 0 455.333 0 390.812 0C324.448 0 259.927 0 195.406 0C130.885 0 64.5209 0 33.1822 0H0V205.59Z" fill="rgb(3, 135, 23)"></path>
    </svg>
 </div>
 <div class="col text-center">
          <div class="col">
            <p class="mt-2 mb-5">Copyright <a href="" style="text-decoration: none;"><strong>Jaringan Komputer.co.id</strong></a>  © 2024 <strong>Jarkom</strong> - Melayani Sepenuh Hati.</p>
          </div>
        </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>