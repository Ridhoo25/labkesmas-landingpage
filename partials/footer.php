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
              <div class="table-responsive">
              <table class="visitor-counter-table">
                <tr>
                  <td>Total Pengunjung</td>
                  <td>Bulan ini</td>
                  <td>Hari ini</td>
                </tr>
                <tr>
                  <td><strong id="vc-total">-</strong></td>
                  <td><strong id="vc-month">-</strong></td>
                  <td><strong id="vc-day">-</strong></td>
                </tr>
              </table>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; 2026 v2.0 | Seluruh Hak Cipta Dilindungi <a href="https://www.instagram.com/ridhooe_/" target="_blank" rel="noopener"> <strong><span>RNC Systems</span></strong></a>
      </div>
      <div class="credits">
      </div>
    </div>

  <script>
  fetch('api/visitor-counter.php').then(function(r){return r.json();}).then(function(d){
    var t=document.getElementById('vc-total'),m=document.getElementById('vc-month'),y=document.getElementById('vc-day');
    if(t)t.textContent=d.total.toLocaleString('id-ID');
    if(m)m.textContent=d.month.toLocaleString('id-ID');
    if(y)y.textContent=d.day.toLocaleString('id-ID');
  }).catch(function(){});
  </script>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="assets/js/search.js"></script>
  <script src="assets/js/accessibility.js"></script>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Modern theme: smooth scroll + motion -->
  <script src="assets/vendor/gsap/gsap.min.js"></script>
  <script src="assets/vendor/gsap/ScrollTrigger.min.js"></script>
  <script src="assets/js/theme.js"></script>

</body>

</html>
