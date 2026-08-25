<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Visi & Misi - LABKESMAS 3 KALTENG</title>
  <meta content="Visi dan Misi UPT Laboratorium Kesehatan dan Kalibrasi Tingkat 3 Kalimantan Tengah" name="description">
  <meta content="visi, misi, labkesmas, UPT labkeskal, kalteng" name="keywords">

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
          <h2>Visi, Misi & Motto</h2>
          <ol>
            <li><a href="index.php">Beranda</a></li>
            <li>Visi & Misi</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <div class="row g-4 justify-content-center">

          <div class="col-lg-10">
            <div class="vm-card vm-visi">
              <div class="vm-icon"><i class="bi bi-eye"></i></div>
              <h5>Visi</h5>
              <p>"Menjadi Laboratorium yang Unggul dalam Kinerja Sesuai Standar Nasional dan Internasional Menuju Kalteng Berkah"</p>
            </div>
          </div>

          <div class="col-lg-10">
            <div class="vm-card vm-misi">
              <div class="vm-icon"><i class="bi bi-list-check"></i></div>
              <h5>Misi</h5>
              <ol class="vm-list">
                <li>Memberikan pelayanan secara professional</li>
                <li>Menerapkan manajemen Mutu dengan konsisten</li>
                <li>Berperan dalam meningkatkan kemampuan pengujian sesuai dengan perkembangan ilmu pengetahuan dan teknologi</li>
                <li>Senantiasa melakukan peningkatan sumber daya</li>
              </ol>
            </div>
          </div>

          <div class="col-lg-10">
            <div class="vm-card vm-motto">
              <div class="vm-icon"><i class="bi bi-quote"></i></div>
              <h5>Motto</h5>
              <p class="motto-text"><strong>KASANANG KETUN, KAHANJAK IKEI</strong></p>
              <p class="motto-makna">Makna: Pengunjung / penerima layanan yang merasa senang dengan pelayanan yang diberikan oleh petugas di labkeskal dan hal tersebut membuat petugas merasakan sukacita</p>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- Visi Misi styles -->
  <style>
    .vm-card {
      background: #fff;
      border-radius: var(--radius);
      padding: 2.5rem;
      box-shadow: 0 4px 24px rgba(14, 165, 233, 0.06);
      border: 1px solid rgba(14, 165, 233, 0.06);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .vm-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 12px 40px rgba(14, 165, 233, 0.1);
    }
    .vm-icon {
      width: 56px;
      height: 56px;
      border-radius: 16px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 1.25rem;
      font-size: 1.5rem;
      color: #fff;
    }
    .vm-visi .vm-icon { background: linear-gradient(135deg, #0EA5E9, #0284C7); }
    .vm-misi .vm-icon { background: linear-gradient(135deg, #38BDF8, #0EA5E9); }
    .vm-motto .vm-icon { background: linear-gradient(135deg, #7DD3FC, #38BDF8); }
    .vm-card h5 {
      font-weight: 800;
      color: #0F172A;
      margin-bottom: 1rem;
      font-size: 1.3rem;
    }
    .vm-card p {
      color: #555;
      line-height: 1.8;
      margin: 0;
      font-size: 1rem;
    }
    .vm-list {
      padding-left: 1.25rem;
      margin: 0;
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
    }
    .vm-list li {
      color: #555;
      line-height: 1.6;
      font-size: 0.95rem;
      padding-left: 0.25rem;
    }
    .motto-text {
      font-size: 1.2rem !important;
      color: #0EA5E9 !important;
      letter-spacing: 1px;
      margin-bottom: 1rem !important;
    }
    .motto-makna {
      color: #888 !important;
      font-size: 0.9rem !important;
      font-style: italic;
    }
  </style>

<?php include 'partials/footer.php'; ?>
