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
              <div style="margin-bottom:6px;">
                <select id="vc-filter-year" class="vc-select"></select>
                <select id="vc-filter-month" class="vc-select" style="margin-left:4px;"></select>
              </div>
              <div class="table-responsive">
              <table class="visitor-counter-table">
                <tr>
                  <td>Total</td>
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
       2026 &copy; <a href="https://www.instagram.com/ridhooe_/" target="_blank" rel="noopener"> <strong><span>M. Jamaludin Ridho</span></strong> </a> | Seksi Pemeliharaan Alat Kesehatan dan Kalibrasi
      </div>
      <div class="credits">
      </div>
    </div>

  <style>
  .vc-select{background:var(--primary);color:#fff;border:none;border-radius:4px;padding:2px 6px;font-size:.7rem}
  .vc-select option{background:var(--primary);color:#fff}
  </style>
  <script>
  (function(){
    var elTotal=document.getElementById('vc-total');
    var elMonth=document.getElementById('vc-month');
    var elDay=document.getElementById('vc-day');
    var selYear=document.getElementById('vc-filter-year');
    var selMonth=document.getElementById('vc-filter-month');
    var monthNames=['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'];

    var now=new Date();
    var curYear=now.getFullYear();
    var curMonth=now.getMonth()+1;

    for(var y=curYear;y>=curYear-4;y--){
      var o=document.createElement('option');o.value=y;o.textContent=y;
      if(y===curYear)o.selected=true;
      selYear.appendChild(o);
    }
    for(var m=1;m<=12;m++){
      var om=document.createElement('option');om.value=m;om.textContent=monthNames[m-1];
      if(m===curMonth)om.selected=true;
      selMonth.appendChild(om);
    }

    function loadCounter(year,month){
      var url='api/visitor-counter.php?year='+year+'&month='+month;
      fetch(url).then(function(r){return r.json();}).then(function(d){
        if(elTotal)elTotal.textContent=d.total.toLocaleString('id-ID');
        if(elMonth)elMonth.textContent=d.month.toLocaleString('id-ID');
        if(elDay){
          if(d.day!==null)elDay.textContent=d.day.toLocaleString('id-ID');
          else elDay.textContent='-';
        }
      }).catch(function(){});
    }

    loadCounter(curYear,curMonth);

    selYear.addEventListener('change',function(){
      loadCounter(parseInt(selYear.value),parseInt(selMonth.value));
    });
    selMonth.addEventListener('change',function(){
      loadCounter(parseInt(selYear.value),parseInt(selMonth.value));
    });
  })();
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
