<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Galeri - LABKESMAS 3 KALTENG</title>
  <meta content="Galeri foto kegiatan UPT Laboratorium Kesehatan dan Kalibrasi Tingkat 3 Kalimantan Tengah" name="description">
  <meta content="galeri, foto, kegiatan, labkesmas, UPT labkeskal, kalteng" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/home/Logo-Provinsi-Kalimantan-Tengah.png" rel="icon">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/theme.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <a href="#main" class="skip-to-content">Langsung ke Konten</a>

  <?php include 'partials/topbar.php'; ?>

  <?php include 'partials/header.php'; ?>

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Galeri</h2>
          <ol>
            <li><a href="index.php">Beranda</a></li>
            <li>Galeri</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">

        <!-- Filter Buttons -->
        <div class="text-center mb-5">
          <div class="btn-group flex-wrap gap-2" role="group" id="galeriFilter">
            <button class="btn btn-outline-primary active" data-filter="all">Semua</button>
            <button class="btn btn-outline-primary" data-filter="lab">Laboratorium</button>
            <button class="btn btn-outline-primary" data-filter="kegiatan">Kegiatan</button>
            <button class="btn btn-outline-primary" data-filter="acara">Acara</button>
          </div>
        </div>

        <!-- Gallery Grid -->
        <div class="row g-4" id="galeriGrid">
          <div class="col-lg-4 col-md-6 galeri-item" data-category="lab">
            <a href="assets/img/gallery/mikrokesmas.JPG" class="glightbox-galeri" data-gallery="gallery">
              <div class="galeri-card">
                <img src="assets/img/gallery/mikrokesmas.JPG" class="img-fluid" alt="Laboratorium Mikrobiologi Kesehatan Masyarakat">
                <div class="galeri-overlay">
                  <div class="galeri-caption">
                    <h6>Laboratorium Mikrobiologi Kesehatan Masyarakat</h6>
                    <span>Laboratorium</span>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 galeri-item" data-category="lab">
            <a href="assets/img/gallery/kimkestok.JPG" class="glightbox-galeri" data-gallery="gallery">
              <div class="galeri-card">
                <img src="assets/img/gallery/kimkestok.JPG" class="img-fluid" alt="Laboratorium Kimia Kesehatan dan Toksikologi">
                <div class="galeri-overlay">
                  <div class="galeri-caption">
                    <h6>Laboratorium Kimia Kesehatan & Toksikologi</h6>
                    <span>Laboratorium</span>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 galeri-item" data-category="lab">
            <a href="assets/img/gallery/biomolekuler.JPG" class="glightbox-galeri" data-gallery="gallery">
              <div class="galeri-card">
                <img src="assets/img/gallery/biomolekuler.JPG" class="img-fluid" alt="Laboratorium Biomolekuler">
                <div class="galeri-overlay">
                  <div class="galeri-caption">
                    <h6>Laboratorium Biomolekuler</h6>
                    <span>Laboratorium</span>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 galeri-item" data-category="kegiatan">
            <a href="assets/img/gallery/air minum pak agus.jpg" class="glightbox-galeri" data-gallery="gallery">
              <div class="galeri-card">
                <img src="assets/img/gallery/air minum pak agus.jpg" class="img-fluid" alt="Pengujian Air Minum">
                <div class="galeri-overlay">
                  <div class="galeri-caption">
                    <h6>Pengujian Air Minum</h6>
                    <span>Kegiatan</span>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 galeri-item" data-category="acara">
            <a href="assets/img/gallery/Hari Raya Idul Fitri 1446 H- 2025 M dalam waktu dekat akan dirayakan oleh seluruh umat muslim di.jpg" class="glightbox-galeri" data-gallery="gallery">
              <div class="galeri-card">
                <img src="assets/img/gallery/Hari Raya Idul Fitri 1446 H- 2025 M dalam waktu dekat akan dirayakan oleh seluruh umat muslim di.jpg" class="img-fluid" alt="Hari Raya Idul Fitri 1446 H">
                <div class="galeri-overlay">
                  <div class="galeri-caption">
                    <h6>Hari Raya Idul Fitri 1446 H</h6>
                    <span>Acara</span>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 galeri-item" data-category="kegiatan">
            <a href="assets/img/gallery/Kalibrasi merupakan kegiatan peneraan untuk menentukan kebenaran nilai penunjukkan alat ukur dan.jpg" class="glightbox-galeri" data-gallery="gallery">
              <div class="galeri-card">
                <img src="assets/img/gallery/Kalibrasi merupakan kegiatan peneraan untuk menentukan kebenaran nilai penunjukkan alat ukur dan.jpg" class="img-fluid" alt="Kegiatan Kalibrasi">
                <div class="galeri-overlay">
                  <div class="galeri-caption">
                    <h6>Kegiatan Kalibrasi</h6>
                    <span>Kegiatan</span>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 galeri-item" data-category="acara">
            <a href="assets/img/slide/foto-bersama.jpeg" class="glightbox-galeri" data-gallery="gallery">
              <div class="galeri-card">
                <img src="assets/img/slide/foto-bersama.jpeg" class="img-fluid" alt="Foto Bersama">
                <div class="galeri-overlay">
                  <div class="galeri-caption">
                    <h6>Foto Bersama</h6>
                    <span>Acara</span>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 galeri-item" data-category="acara">
            <a href="assets/img/slide/IID.jpeg" class="glightbox-galeri" data-gallery="gallery">
              <div class="galeri-card">
                <img src="assets/img/slide/IID.jpeg" class="img-fluid" alt="IID">
                <div class="galeri-overlay">
                  <div class="galeri-caption">
                    <h6>IID</h6>
                    <span>Acara</span>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 galeri-item" data-category="kegiatan">
            <a href="assets/img/slide/fotbaryettie.JPG" class="glightbox-galeri" data-gallery="gallery">
              <div class="galeri-card">
                <img src="assets/img/slide/fotbaryettie.JPG" class="img-fluid" alt="Foto Bar Yettie">
                <div class="galeri-overlay">
                  <div class="galeri-caption">
                    <h6>Dokumentasi Kegiatan</h6>
                    <span>Kegiatan</span>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>

        <!-- Instagram Section -->
        <hr class="my-5">
        <div>
          <div class="d-flex align-items-center justify-content-between mb-4">
            <h4 class="fw-bold mb-0"><i class="bi bi-instagram text-danger me-2" style="color:#e1306c !important;"></i>Instagram</h4>
            <a href="https://www.instagram.com/labkeskalteng/" target="_blank" rel="noopener" class="btn btn-sm rounded-pill px-3" style="border-color:#e1306c;color:#e1306c;">Lihat Semua <i class="bi bi-arrow-right ms-1"></i></a>
          </div>
          <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
              <div class="ig-card">
                <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/reel/DZHSaI5uXOw/"></blockquote>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="ig-card">
                <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/DZl2JqcifOi/"></blockquote>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="ig-card">
                <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/reel/DahhhJCicm6/"></blockquote>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- Gallery styles -->
  <style>
    .galeri-card {
      position: relative;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 8px 30px rgba(0,0,0,0.08);
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      cursor: pointer;
      aspect-ratio: 4 / 3;
    }
    .galeri-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.6s ease;
    }
    .galeri-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 16px 48px rgba(26, 118, 210, 0.18);
    }
    .galeri-card:hover img {
      transform: scale(1.08);
    }
    .galeri-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, transparent 60%);
      opacity: 0;
      transition: opacity 0.4s ease;
      display: flex;
      align-items: flex-end;
      padding: 1.25rem;
    }
    .galeri-card:hover .galeri-overlay {
      opacity: 1;
    }
    .galeri-caption h6 {
      color: #fff;
      font-weight: 700;
      margin: 0;
      font-size: 1rem;
    }
    .galeri-caption span {
      color: rgba(255,255,255,0.75);
      font-size: 0.8rem;
      text-transform: uppercase;
      letter-spacing: 1px;
    }
    .galeri-item {
      transition: opacity 0.4s ease, transform 0.4s ease;
    }
    .galeri-item.hidden {
      display: none;
    }
    #galeriFilter .btn {
      border-radius: 50px !important;
      padding: 0.5rem 1.5rem;
      font-size: 0.9rem;
      font-weight: 600;
      transition: all 0.3s ease;
    }
    #galeriFilter .btn.active {
      background: #0EA5E9;
      border-color: #0EA5E9;
      color: #fff;
    }
    .ig-card {
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 8px 30px rgba(0,0,0,0.08);
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      background: #fff;
    }
    .ig-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 16px 48px rgba(0,0,0,0.12);
    }
    .ig-card .instagram-media {
      margin: 0 !important;
      min-width: unset !important;
      width: 100% !important;
    }
  </style>

  <!-- Gallery JS -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const filterBtns = document.querySelectorAll("#galeriFilter .btn");
      const items = document.querySelectorAll(".galeri-item");

      filterBtns.forEach(btn => {
        btn.addEventListener("click", function() {
          filterBtns.forEach(b => b.classList.remove("active"));
          this.classList.add("active");
          const filter = this.dataset.filter;
          items.forEach(item => {
            if (filter === "all" || item.dataset.category === filter) {
              item.classList.remove("hidden");
            } else {
              item.classList.add("hidden");
            }
          });
        });
      });

      if (typeof GLightbox !== "undefined") {
        GLightbox({
          selector: ".glightbox-galeri",
          touchNavigation: true,
          loop: true
        });
      }
    });
  </script>

  <!-- Instagram Embed JS -->
  <script async src="//www.instagram.com/embed.js"></script>

<?php include 'partials/footer.php'; ?>
