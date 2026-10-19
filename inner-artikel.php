<?php
$dataFile = __DIR__ . '/assets/data/berita.json';
$data = is_file($dataFile) ? json_decode(file_get_contents($dataFile), true) : null;
$items = (is_array($data) && isset($data['items']) && is_array($data['items'])) ? $data['items'] : [];

function tgl_id($ymd) {
  $bulan = [1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
  $ts = strtotime($ymd);
  if (!$ts) return htmlspecialchars($ymd);
  return date('j', $ts) . ' ' . $bulan[(int) date('n', $ts)] . ' ' . date('Y', $ts);
}

$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';
$berita = null;
foreach ($items as $it) {
  if (isset($it['slug']) && $it['slug'] === $slug) { $berita = $it; break; }
}

$kategoriList = [];
foreach ($items as $it) {
  $k = isset($it['kategori']) ? $it['kategori'] : 'Lainnya';
  $kategoriList[$k] = true;
}
$kategoriList = array_keys($kategoriList);

$pageTitle = $berita ? $berita['judul'] . ' - LABKESMAS 3 KALTENG' : 'Artikel & Berita - LABKESMAS 3 KALTENG';
$pageDesc = $berita ? (isset($berita['ringkasan']) ? $berita['ringkasan'] : '') : 'Artikel, berita, dan pengumuman UPT Laboratorium Kesehatan dan Kalibrasi Tingkat 3 Kalimantan Tengah';
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <meta content="<?= htmlspecialchars($pageDesc, ENT_QUOTES, 'UTF-8') ?>" name="description">
  <meta content="artikel, berita, pengumuman, labkesmas, UPT labkeskal, kalteng" name="keywords">

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

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2><?= $berita ? 'Detail Artikel' : 'Artikel & Berita' ?></h2>
          <ol>
            <li><a href="index.php">Beranda</a></li>
            <li>
              <?php if ($berita): ?>
                <a href="inner-artikel.php">Artikel</a>
              <?php else: ?>
                Artikel
              <?php endif; ?>
            </li>
            <?php if ($berita): ?>
              <li><?= htmlspecialchars($berita['judul'], ENT_QUOTES, 'UTF-8') ?></li>
            <?php endif; ?>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">

        <?php if ($berita): ?>

          <?php
            $gbr = isset($berita['gambar']) && $berita['gambar'] !== '' ? $berita['gambar'] : '';
            $kat = isset($berita['kategori']) ? $berita['kategori'] : 'Artikel';
          ?>
          <article class="artikel-detail">
            <a href="inner-artikel.php" class="artikel-back"><i class="bi bi-arrow-left"></i> Kembali ke daftar</a>
            <span class="artikel-badge artikel-badge-static"><?= htmlspecialchars($kat, ENT_QUOTES, 'UTF-8') ?></span>
            <h1 class="artikel-detail-title"><?= htmlspecialchars($berita['judul'], ENT_QUOTES, 'UTF-8') ?></h1>
            <div class="artikel-meta">
              <span><i class="bi bi-calendar3"></i> <?= tgl_id(isset($berita['tanggal']) ? $berita['tanggal'] : '') ?></span>
              <?php if (!empty($berita['penulis'])): ?>
                <span><i class="bi bi-person"></i> <?= htmlspecialchars($berita['penulis'], ENT_QUOTES, 'UTF-8') ?></span>
              <?php endif; ?>
            </div>

            <?php if ($gbr !== ''): ?>
              <div class="artikel-detail-hero">
                <img src="<?= htmlspecialchars($gbr, ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($berita['judul'], ENT_QUOTES, 'UTF-8') ?>">
              </div>
            <?php endif; ?>

            <div class="artikel-detail-body">
              <?php
                $isi = isset($berita['isi']) && is_array($berita['isi']) ? $berita['isi'] : [];
                foreach ($isi as $p):
              ?>
                <p><?= nl2br(htmlspecialchars($p, ENT_QUOTES, 'UTF-8')) ?></p>
              <?php endforeach; ?>
            </div>

            <div class="artikel-share">
              <span class="artikel-share-label">Bagikan:</span>
              <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode('https://labkesmas.kalteng.go.id/inner-artikel.php?slug=' . rawurlencode($berita['slug'])) ?>" target="_blank" rel="noopener" class="artikel-share-btn" aria-label="Bagikan ke Facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://twitter.com/intent/tweet?url=<?= urlencode('https://labkesmas.kalteng.go.id/inner-artikel.php?slug=' . rawurlencode($berita['slug'])) ?>&text=<?= urlencode($berita['judul']) ?>" target="_blank" rel="noopener" class="artikel-share-btn" aria-label="Bagikan ke Twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://wa.me/?text=<?= urlencode($berita['judul'] . ' - https://labkesmas.kalteng.go.id/inner-artikel.php?slug=' . rawurlencode($berita['slug'])) ?>" target="_blank" rel="noopener" class="artikel-share-btn" aria-label="Bagikan ke WhatsApp"><i class="bx bxl-whatsapp"></i></a>
            </div>
          </article>

          <?php
            $lainnya = [];
            foreach ($items as $it) {
              if (isset($it['slug']) && $it['slug'] !== $berita['slug']) { $lainnya[] = $it; }
              if (count($lainnya) >= 3) break;
            }
          ?>
          <?php if ($lainnya): ?>
            <hr class="my-5">
            <h4 class="fw-bold mb-4">Artikel Lainnya</h4>
            <div class="row g-4">
              <?php foreach ($lainnya as $it): ?>
                <div class="col-lg-4 col-md-6">
                  <?php $g = isset($it['gambar']) && $it['gambar'] !== '' ? $it['gambar'] : ''; ?>
                  <a href="inner-artikel.php?slug=<?= htmlspecialchars($it['slug'], ENT_QUOTES, 'UTF-8') ?>" class="artikel-card">
                    <div class="artikel-thumb">
                      <?php if ($g !== ''): ?>
                        <img src="<?= htmlspecialchars($g, ENT_QUOTES, 'UTF-8') ?>" class="img-fluid" alt="<?= htmlspecialchars($it['judul'], ENT_QUOTES, 'UTF-8') ?>">
                      <?php else: ?>
                        <div class="artikel-thumb-placeholder"><i class="bi bi-newspaper"></i></div>
                      <?php endif; ?>
                      <span class="artikel-badge"><?= htmlspecialchars(isset($it['kategori']) ? $it['kategori'] : 'Artikel', ENT_QUOTES, 'UTF-8') ?></span>
                    </div>
                    <div class="artikel-body">
                      <span class="artikel-date"><i class="bi bi-calendar3"></i> <?= tgl_id(isset($it['tanggal']) ? $it['tanggal'] : '') ?></span>
                      <h5><?= htmlspecialchars($it['judul'], ENT_QUOTES, 'UTF-8') ?></h5>
                    </div>
                  </a>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>

        <?php else: ?>

          <?php if (!$items): ?>
            <div class="artikel-empty">
              <i class="bi bi-newspaper"></i>
              <p>Belum ada artikel. Silakan tambahkan data pada <code>assets/data/berita.json</code>.</p>
            </div>
          <?php else: ?>

            <!-- Filter Buttons -->
            <div class="text-center mb-5">
              <div class="btn-group flex-wrap gap-2" role="group" id="artikelFilter">
                <button class="btn btn-outline-primary active" data-filter="all">Semua</button>
                <?php foreach ($kategoriList as $k): ?>
                  <button class="btn btn-outline-primary" data-filter="<?= htmlspecialchars(strtolower($k), ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($k, ENT_QUOTES, 'UTF-8') ?></button>
                <?php endforeach; ?>
              </div>
            </div>

            <!-- Artikel Grid -->
            <div class="row g-4" id="artikelGrid">
              <?php foreach ($items as $it): ?>
                <?php
                  $g = isset($it['gambar']) && $it['gambar'] !== '' ? $it['gambar'] : '';
                  $kat = isset($it['kategori']) ? $it['kategori'] : 'Artikel';
                ?>
                <div class="col-lg-4 col-md-6 artikel-item" data-category="<?= htmlspecialchars(strtolower($kat), ENT_QUOTES, 'UTF-8') ?>">
                  <a href="inner-artikel.php?slug=<?= htmlspecialchars($it['slug'], ENT_QUOTES, 'UTF-8') ?>" class="artikel-card">
                    <div class="artikel-thumb">
                      <?php if ($g !== ''): ?>
                        <img src="<?= htmlspecialchars($g, ENT_QUOTES, 'UTF-8') ?>" class="img-fluid" alt="<?= htmlspecialchars($it['judul'], ENT_QUOTES, 'UTF-8') ?>">
                      <?php else: ?>
                        <div class="artikel-thumb-placeholder"><i class="bi bi-newspaper"></i></div>
                      <?php endif; ?>
                      <span class="artikel-badge"><?= htmlspecialchars($kat, ENT_QUOTES, 'UTF-8') ?></span>
                    </div>
                    <div class="artikel-body">
                      <span class="artikel-date"><i class="bi bi-calendar3"></i> <?= tgl_id(isset($it['tanggal']) ? $it['tanggal'] : '') ?></span>
                      <h5><?= htmlspecialchars($it['judul'], ENT_QUOTES, 'UTF-8') ?></h5>
                      <p><?= htmlspecialchars(isset($it['ringkasan']) ? $it['ringkasan'] : '', ENT_QUOTES, 'UTF-8') ?></p>
                      <span class="artikel-more">Baca Selengkapnya <i class="bi bi-arrow-right"></i></span>
                    </div>
                  </a>
                </div>
              <?php endforeach; ?>
            </div>

          <?php endif; ?>

        <?php endif; ?>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- Artikel styles -->
  <style>
    .artikel-card {
      display: block;
      height: 100%;
      text-decoration: none;
      background: var(--surface, #fff);
      border: 1px solid var(--line, #DCEEFF);
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 8px 30px rgba(0,0,0,0.06);
      transition: transform 0.4s ease, box-shadow 0.4s ease;
    }
    .artikel-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 16px 48px rgba(26, 118, 210, 0.18);
    }
    .artikel-thumb {
      position: relative;
      aspect-ratio: 16 / 10;
      overflow: hidden;
      background: #EEF8FF;
    }
    .artikel-thumb img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.6s ease;
    }
    .artikel-card:hover .artikel-thumb img { transform: scale(1.08); }
    .artikel-thumb-placeholder {
      width: 100%;
      height: 100%;
      display: grid;
      place-items: center;
      font-size: 2.5rem;
      color: #94A3B8;
      background: linear-gradient(135deg, #EEF8FF 0%, #FFFFFF 100%);
    }
    .artikel-badge {
      position: absolute;
      top: 12px;
      left: 12px;
      background: var(--brand-grad, linear-gradient(135deg,#38BDF8,#0284C7));
      color: #fff;
      font-family: var(--font-head, "Inter", sans-serif);
      font-size: 0.7rem;
      font-weight: 700;
      letter-spacing: 0.04em;
      text-transform: uppercase;
      padding: 0.3rem 0.7rem;
      border-radius: 999px;
      box-shadow: 0 4px 12px rgba(2,132,199,.3);
    }
    .artikel-badge-static {
      position: static;
      display: inline-block;
      margin-bottom: 0.75rem;
    }
    .artikel-body { padding: 1.1rem 1.25rem 1.35rem; }
    .artikel-date {
      font-size: 0.78rem;
      color: var(--muted, #64748B);
      display: inline-flex;
      align-items: center;
      gap: 0.35rem;
      margin-bottom: 0.4rem;
    }
    .artikel-body h5 {
      font-size: 1.05rem;
      font-weight: 700;
      line-height: 1.4;
      color: var(--ink, #0F172A);
      margin: 0 0 0.5rem;
      transition: color 0.25s ease;
    }
    .artikel-card:hover .artikel-body h5 { color: var(--brand-700, #0284C7); }
    .artikel-body p {
      font-size: 0.9rem;
      color: var(--muted, #64748B);
      margin: 0 0 0.9rem;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }
    .artikel-more {
      font-family: var(--font-head, "Inter", sans-serif);
      font-weight: 700;
      font-size: 0.85rem;
      color: var(--brand-600, #0EA5E9);
      display: inline-flex;
      align-items: center;
      gap: 0.35rem;
    }
    .artikel-item { transition: opacity 0.4s ease; }
    .artikel-item.hidden { display: none; }
    #artikelFilter .btn {
      border-radius: 50px !important;
      padding: 0.5rem 1.5rem;
      font-size: 0.9rem;
      font-weight: 600;
      transition: all 0.3s ease;
    }
    #artikelFilter .btn.active {
      background: #0EA5E9;
      border-color: #0EA5E9;
      color: #fff;
    }
    .artikel-empty {
      text-align: center;
      padding: 3rem 1rem;
      color: var(--muted, #64748B);
    }
    .artikel-empty i { font-size: 3rem; color: #94A3B8; display: block; margin-bottom: 1rem; }
    /* Detail */
    .artikel-detail {
      max-width: 820px;
      margin: 0 auto;
    }
    .artikel-back {
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      font-family: var(--font-head, "Inter", sans-serif);
      font-weight: 600;
      font-size: 0.88rem;
      color: var(--brand-600, #0EA5E9);
      text-decoration: none;
      margin-bottom: 1.2rem;
    }
    .artikel-back:hover { color: var(--brand-700, #0284C7); }
    .artikel-detail-title {
      font-size: clamp(1.5rem, 3vw, 2.2rem);
      font-weight: 800;
      line-height: 1.2;
      color: var(--ink, #0F172A);
      margin-bottom: 0.9rem;
    }
    .artikel-meta {
      display: flex;
      flex-wrap: wrap;
      gap: 1.2rem;
      font-size: 0.85rem;
      color: var(--muted, #64748B);
      margin-bottom: 1.5rem;
    }
    .artikel-meta span { display: inline-flex; align-items: center; gap: 0.4rem; }
    .artikel-detail-hero {
      border-radius: 18px;
      overflow: hidden;
      margin-bottom: 1.75rem;
      box-shadow: 0 14px 34px rgba(2,132,199,.12);
    }
    .artikel-detail-hero img { width: 100%; height: auto; object-fit: cover; }
    .artikel-detail-body p {
      font-size: 1.02rem;
      line-height: 1.85;
      color: #334155;
      margin-bottom: 1.15rem;
    }
    .artikel-share {
      display: flex;
      align-items: center;
      gap: 0.6rem;
      margin-top: 2rem;
      padding-top: 1.5rem;
      border-top: 1px solid var(--line, #DCEEFF);
    }
    .artikel-share-label {
      font-family: var(--font-head, "Inter", sans-serif);
      font-weight: 700;
      font-size: 0.9rem;
      color: var(--ink, #0F172A);
    }
    .artikel-share-btn {
      width: 38px;
      height: 38px;
      display: inline-grid;
      place-items: center;
      border-radius: 50%;
      background: var(--brand-grad-soft, #EEF8FF);
      color: var(--brand-600, #0EA5E9);
      text-decoration: none;
      transition: all 0.25s ease;
    }
    .artikel-share-btn:hover {
      background: var(--brand-grad, linear-gradient(135deg,#38BDF8,#0284C7));
      color: #fff;
      transform: translateY(-3px);
    }
  </style>

  <!-- Artikel JS -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const filterBtns = document.querySelectorAll("#artikelFilter .btn");
      const items = document.querySelectorAll(".artikel-item");

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
    });
  </script>

<?php include 'partials/footer.php'; ?>
