<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Permintaan Informasi Publik - LABKESMAS 3 KALTENG</title>
  <meta content="Formulir Permintaan Informasi Publik UPT Laboratorium Kesehatan dan Kalibrasi Tingkat 3 Kalimantan Tengah" name="description">
  <meta content="permintaan informasi, informasi publik, PPID, labkesmas, kalteng" name="keywords">

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

</head>

<body>
  <a href="#main" class="skip-to-content">Langsung ke Konten</a>

  <?php include 'partials/topbar.php'; ?>

  <?php include 'partials/header.php'; ?>


    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Permintaan Informasi Publik</h2>
          <ol>
            <li><a href="index.php">Beranda</a></li>
            <li>PPID</li>
            <li>Permintaan Informasi</li>
          </ol>
        </div>
      </div>
    </section>

    <section class="inner-page">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10">

            <div class="ppid-intro">
              <div class="ppid-intro-icon"><i class="bi bi-file-earmark-text"></i></div>
              <h5>Ajukan Permintaan Informasi Publik</h5>
              <p>Masyarakat dapat mengajukan permintaan informasi publik kepada UPT Laboratorium Kesehatan dan Kalibrasi Provinsi Kalimantan Tengah sesuai dengan Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik. Isi formulir di bawah ini untuk mengajukan permintaan.</p>
            </div>

            <div class="ppid-form-card">
              <form id="formPermintaan" onsubmit="return false;">
                <div class="row g-4">
                  <div class="col-md-6">
                    <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                    <input type="text" class="form-control ppid-input" required placeholder="Masukkan nama lengkap">
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">No. KTP <span class="text-danger">*</span></label>
                    <input type="text" class="form-control ppid-input" required placeholder="Masukkan nomor KTP">
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control ppid-input" required placeholder="contoh@email.com">
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">No. Telepon <span class="text-danger">*</span></label>
                    <input type="tel" class="form-control ppid-input" required placeholder="08xxxxxxxxxx">
                  </div>
                  <div class="col-12">
                    <label class="form-label">Alamat <span class="text-danger">*</span></label>
                    <textarea class="form-control ppid-input" rows="2" required placeholder="Masukkan alamat lengkap"></textarea>
                  </div>
                  <div class="col-12">
                    <label class="form-label">Jenis Informasi yang Diminta <span class="text-danger">*</span></label>
                    <textarea class="form-control ppid-input" rows="3" required placeholder="Jelaskan informasi publik yang ingin Anda peroleh"></textarea>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Tujuan Permintaan Informasi <span class="text-danger">*</span></label>
                    <select class="form-select ppid-input">
                      <option value="">-- Pilih Tujuan --</option>
                      <option>Keperluan Pribadi</option>
                      <option>Penelitian/Akademis</option>
                      <option>Keperluan Organisasi/Lembaga</option>
                      <option>Keperluan Jurnalistik</option>
                      <option>Lainnya</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Cara Memperoleh Informasi <span class="text-danger">*</span></label>
                    <select class="form-select ppid-input">
                      <option value="">-- Pilih Cara --</option>
                      <option>Melihat/Membaca di tempat</option>
                      <option>Mendapatkan salinan (fotokopi/softcopy)</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Cara Mendapatkan Salinan</label>
                    <select class="form-select ppid-input">
                      <option value="">-- Pilih Cara --</option>
                      <option>Datang langsung ke PPID</option>
                      <option>Dikirim melalui email</option>
                      <option>Dikirim melalui pos</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Upload File Pendukung (KTP/Surat Kuasa)</label>
                    <input type="file" class="form-control ppid-input">
                  </div>
                </div>

                <div class="ppid-submit-bar">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="ppidCheck" required>
                    <label class="form-check-label" for="ppidCheck">
                      Saya menyatakan bahwa data yang diisi adalah benar dan bertanggung jawab atas permintaan ini.
                    </label>
                  </div>
                  <button type="submit" class="btn btn-primary ppid-btn">
                    <i class="bi bi-send me-2"></i>Kirim Permintaan
                  </button>
                </div>
              </form>
          </div>

        </div>
        </div>
      </div>
    </section>

<?php include 'partials/footer.php'; ?>
