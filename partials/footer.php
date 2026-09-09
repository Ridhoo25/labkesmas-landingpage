  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Laboratorium Kesehatan Masyarakat Tingkat 3</h3>
              <p>
                Jl. Letjend Soeprapto No 01, <br>Palangkaraya, Kalimantan Tengah<br><br>
                <strong>Phone:</strong> 0858-2418-4658<br>
                <strong>Email:</strong> blkkalteng@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://twitter.com/labkeskalteng" target="_blank" rel="noopener" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://facebook.com/labkeskal" target="_blank" rel="noopener" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/labkeskalteng/" target="_blank" rel="noopener" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.youtube.com/@labkeskalteng" target="_blank" rel="noopener" class="youtube"><i class="bx bxl-youtube"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Tautan Berguna</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="inner-sejarah.php">Tentang Kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="inner-layanan.php">Layanan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="inner-ppid.php">PPID</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="inner-tracking.php">Tracking Hasil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="inner-simulasi.php">Simulasi Tarif</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Layanan Kami</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="inner-layanan-klinik.php">Laboratorium Klinik</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="inner-layanan-mikrokesmas.php">Laboratorium Mikrobiologi Kesehatan Masyarakat</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="inner-layanan-kimkestok.php">Laboratorium Kimia Kesehatan &amp; Toksikologi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="inner-layanan-biomolekuler.php">Laboratorium Biomolekuler</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="inner-kalibrasi.php">Laboratorium Kalibrasi</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Buletin Kami</h4>
            <p>Silahkan masukan email untuk mengikuti buletin kami</p>
            <form onsubmit="event.preventDefault(); this.querySelector('.newsletter-success').style.display='block'; this.querySelector('input[type=email]').value='';">
              <input type="email" name="email" placeholder="Email Anda" required aria-label="Alamat email">
              <input type="submit" value="Berlangganan">
              <div class="newsletter-success" style="display:none; color:var(--secondary); margin-top:8px; font-size:0.9rem;">Terima kasih telah berlangganan!</div>
            </form>
            <div class="mt-3" style="font-size:.75rem; color:#fff;">
              <span>Total Pengunjung: <strong id="vc-total">-</strong></span>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
       2025 - 2026 &copy; <a href="https://www.instagram.com/ridhooe_/" target="_blank" rel="noopener"> <strong><span>M. Jamaludin Ridho</span></strong> </a> | Seksi Pemeliharaan Alat Kesehatan dan Kalibrasi
      </div>
      <div class="credits">
      </div>
    </div>

  <script>
  (function(){
    var elTotal=document.getElementById('vc-total');
    fetch('api/visitor-counter.php').then(function(r){return r.json();}).then(function(d){
      if(elTotal)elTotal.textContent=d.total.toLocaleString('id-ID');
    }).catch(function(){});
  })();
  </script>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <a href="https://wa.me/6285824184658" target="_blank" rel="noopener" class="wa-fab" aria-label="Chat WhatsApp" title="Chat via WhatsApp">
    <svg viewBox="0 0 32 32" fill="#fff" width="26" height="26"><path d="M16.004 0h-.008C7.174 0 0 7.176 0 16c0 3.5 1.132 6.744 3.054 9.374L1.054 31.25l6.114-1.98C9.774 30.998 12.774 32 16.004 32 24.83 32 32 24.822 32 16S24.83 0 16.004 0zm9.35 22.604c-.39 1.1-1.932 2.014-3.15 2.28-.834.18-1.924.322-5.586-1.202-4.686-1.946-7.692-6.72-7.922-7.026-.224-.306-1.86-2.476-1.86-4.722 0-2.246 1.18-3.35 1.6-3.812.39-.466.926-.612 1.232-.612.31 0 .618.002.886.016.284.014.666-.108 1.038.79.39.946 1.328 3.232 1.444 3.466.118.234.196.506.04.812-.154.312-.23.506-.458.78-.228.274-.48.612-.684.82-.228.234-.464.488-.196.962.268.474 1.192 1.968 2.56 3.188 1.762 1.57 3.242 2.056 3.716 2.284.474.228.75.19 1.024-.116.274-.306 1.174-1.366 1.484-1.842.312-.474.624-.394 1.054-.236.434.156 2.744 1.294 3.214 1.528.474.234.788.352.906.546.118.194.118 1.13-.272 2.232z"/></svg>
  </a>
  <style>
    .wa-fab{position:fixed;bottom:80px;left:20px;z-index:99998;width:54px;height:54px;border-radius:50%;background:#25d366;display:flex;align-items:center;justify-content:center;box-shadow:0 4px 16px rgba(37,211,102,.4);transition:transform .2s}
    .wa-fab:hover{transform:scale(1.1)}
    @media(max-width:991px){.wa-fab{bottom:80px;left:16px;width:48px;height:48px}.wa-fab svg{width:22px;height:22px}}
  </style>

  <script src="assets/js/search.js" defer></script>
  <script src="assets/js/accessibility.js" defer></script>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js" defer></script>
  <script src="assets/vendor/aos/aos.js" defer></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js" defer></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js" defer></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js" defer></script>
  <script src="assets/vendor/php-email-form/validate.js" defer></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js" defer></script>

  <!-- Modern theme: smooth scroll + motion -->
  <script src="assets/vendor/gsap/gsap.min.js" defer></script>
  <script src="assets/vendor/gsap/ScrollTrigger.min.js" defer></script>
  <script src="assets/js/theme.js" defer></script>

</body>

</html>
