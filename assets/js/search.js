/* Search Modal - LABKESMAS 3 KALTENG */
(function () {
  const pages = [
    { title: "Beranda", url: "index.php", keywords: "beranda home utama", cat: "Halaman" },
    { title: "Sejarah", url: "inner-sejarah.php", keywords: "sejarah history", cat: "Halaman" },
    { title: "Visi, Misi & Motto", url: "inner-visimisi.php", keywords: "visi misi motto tujuan", cat: "Halaman" },
    { title: "Struktur Organisasi", url: "inner-sotk.php", keywords: "struktur organisasi sotk", cat: "Halaman" },
    { title: "Tugas & Fungsi", url: "inner-tupoksi.php", keywords: "tugas fungsi tupoksi", cat: "Halaman" },
    { title: "Akreditasi", url: "inner-akreditasi.php", keywords: "akreditasi sertifikat", cat: "Halaman" },
    { title: "Layanan", url: "inner-layanan.php", keywords: "layanan jasa", cat: "Halaman" },
    { title: "Laboratorium Klinik", url: "inner-layanan-klinik.php", keywords: "klinik darah urine patologi", cat: "Halaman" },
    { title: "Laboratorium Mikrobiologi Kesehatan Masyarakat", url: "inner-layanan-mikrokesmas.php", keywords: "mikrobiologi masyarakat bakteri virus", cat: "Halaman" },
    { title: "Laboratorium Kimia Kesehatan & Toksikologi", url: "inner-layanan-kimkestok.php", keywords: "kimia toksikologi kimkestok", cat: "Halaman" },
    { title: "Laboratorium Biomolekuler", url: "inner-layanan-biomolekuler.php", keywords: "biomolekuler dna pcr", cat: "Halaman" },
    { title: "Laboratorium Kalibrasi", url: "inner-kalibrasi.php", keywords: "kalibrasi ukur alat", cat: "Halaman" },
    { title: "Galeri", url: "inner-galeri.php", keywords: "galeri foto photo", cat: "Halaman" },
    { title: "Video", url: "inner-video.php", keywords: "video", cat: "Halaman" },
    { title: "Tracking Hasil Pemeriksaan", url: "inner-tracking.php", keywords: "tracking hasil cek pemeriksaan", cat: "Halaman" },
    { title: "Simulasi Tarif", url: "inner-simulasi.php", keywords: "simulasi tarif biaya harga", cat: "Halaman" },
    { title: "Profil Kepala UPT", url: "inner-profilkepala.php", keywords: "profil kepala", cat: "Halaman" },
    { title: "PPID", url: "inner-ppid.php", keywords: "ppid informasi publik", cat: "Halaman" },
    { title: "Informasi Berkala", url: "inner-inberkala.php", keywords: "informasi berkala", cat: "Halaman" },
    { title: "Informasi Segera Merta", url: "inner-insertamerta.php", keywords: "informasi serta merta", cat: "Halaman" },
    { title: "Informasi Setiap Saat", url: "inner-insetiapsaat.php", keywords: "informasi setiap saat", cat: "Halaman" },
    { title: "Permintaan Informasi Publik", url: "inner-permintaaninformasipublik.php", keywords: "permintaan informasi publik", cat: "Halaman" },
    { title: "Whistle Blowing Systems", url: "https://wbs.kalteng.go.id/", keywords: "whistle blowing wbs pengaduan kalteng", cat: "Tautan" },
    { title: "SP4N Lapor", url: "https://www.lapor.go.id/", keywords: "sp4n lapor pengaduan nasional", cat: "Tautan" },
    { title: "Layanan Pengaduan Masyarakat", url: "https://bit.ly/DumasUPTLabkeskal", keywords: "pengaduan masyarakat dumas", cat: "Tautan" },
    { title: "SKM ONLINE KEMENPANRB", url: "https://skm.go.id/sign-in", keywords: "skm online survey kepuasan kemenpanrb", cat: "Tautan" },
    { title: "PEKPPP KEMENPANRB", url: "https://evaluasi.menpan.go.id/admin/login", keywords: "pekppp evaluasi kemenpanrb", cat: "Tautan" },
    { title: "BKSDN KEMENDAGRI", url: "https://indeks.inovasi.bskdn.kemendagri.go.id/login", keywords: "bksdn inovasi kemendagri", cat: "Tautan" },
    { title: "ASN Digital BKN", url: "https://asndigital.bkn.go.id/login", keywords: "asn digital bkn", cat: "Tautan" },
    { title: "SINERJA BKD KALTENG", url: "https://sinerja.bkd.kalteng.go.id./login/login", keywords: "sinerja bkd kalteng", cat: "Tautan" },
    { title: "SIDIA BKAD KALTENG", url: "https://sidia.live/index.php/login", keywords: "sidia bkad kalteng", cat: "Tautan" },
    { title: "Seksi Kalibrasi", url: "https://sites.google.com/view/kalibrasipm/home", keywords: "kalibrasi pm", cat: "Tautan" },
    { title: "ASPAK KEMENKES", url: "https://aspak.kemkes.go.id/aplikasi/", keywords: "aspak kemenkes", cat: "Tautan" },
    { title: "SATUSEHAT SDMK KEMENKES", url: "https://satusehat.kemkes.go.id/sdmk", keywords: "satusehat sdmk kemenkes", cat: "Tautan" },
    { title: "DFO KEMENKES", url: "https://dfo.kemkes.go.id/v2/", keywords: "dfo kemenkes", cat: "Tautan" },
    { title: "Survey Kepuasan Masyarakat", url: "https://skm.go.id/share/instansi/62982dcd-ea8f-44a3-8e08-b275a694abf1/2", keywords: "survey kepuasan masyarakat skm", cat: "Tautan" },
    { title: "Survei Persepsi Kualitas & Anti Korupsi (SPKP/SPAK)", url: "https://bit.ly/KuesionerSurvei2026UPTLabkeskal", keywords: "survei persepsi kualitas pelayanan anti korupsi spkp spak", cat: "Tautan" },
    { title: "SI MUTLAK", url: "https://sites.google.com/view/simutlak26/halaman-login", keywords: "si mutlak", cat: "Tautan" },
    { title: "SIAP RESPON", url: "https://s.id/LabkesmasKalteng", keywords: "siap respon", cat: "Tautan" },
    { title: "BUKU TAMU DIGITAL", url: "https://docs.google.com/forms/d/e/1FAIpQLSf-OevKHcsIN98oxL0-LR9l6VjPK3lJRsnn41dR4F1q9CMycA/viewform", keywords: "buku tamu digital", cat: "Tautan" },
    { title: "SI BAHALAB", url: "https://bahalab.labkesmas-kalteng.id/", keywords: "si bahalab", cat: "Tautan" }
  ];

  function getBasePath() {
    var path = window.location.pathname;
    if (path.indexOf("inner-") !== -1) return "";
    return "";
  }

  function renderSearchModal() {
    var modal = document.createElement("div");
    modal.className = "search-overlay";
    modal.id = "searchModal";
    modal.innerHTML =
      '<div class="search-overlay-backdrop" id="searchBackdrop"></div>' +
      '<div class="search-overlay-dialog">' +
        '<div class="search-overlay-header">' +
          '<h3>Cari Halaman & Tautan</h3>' +
          '<button type="button" class="search-overlay-close" id="searchClose"><i class="bi bi-x-lg"></i></button>' +
        '</div>' +
        '<div class="search-overlay-body">' +
          '<input type="text" id="searchInput" class="form-control" placeholder="Ketik nama halaman atau tautan..." autocomplete="off">' +
          '<ul id="searchResults" class="search-results"></ul>' +
        '</div>' +
      '</div>';
    document.body.appendChild(modal);
  }

  function renderSearchCSS() {
    var style = document.createElement("style");
    style.textContent =
      ".search-overlay{position:fixed;inset:0;z-index:9999;display:none;align-items:flex-start;justify-content:center;padding-top:80px}" +
      ".search-overlay.active{display:flex}" +
      ".search-overlay-backdrop{position:absolute;inset:0;background:rgba(0,0,0,.5)}" +
      ".search-overlay-dialog{position:relative;background:#fff;border-radius:12px;width:90%;max-width:560px;max-height:70vh;display:flex;flex-direction:column;box-shadow:0 20px 60px rgba(0,0,0,.3)}" +
      ".search-overlay-header{display:flex;align-items:center;justify-content:space-between;padding:16px 20px;border-bottom:1px solid #e9ecef}" +
      ".search-overlay-header h3{margin:0;font-size:1.1rem;font-weight:600}" +
      ".search-overlay-close{background:none;border:none;font-size:1.2rem;cursor:pointer;color:#666;padding:4px}" +
      ".search-overlay-close:hover{color:#333}" +
      ".search-overlay-body{padding:16px 20px;overflow-y:auto}" +
      ".search-overlay-body .form-control{border-radius:8px;padding:10px 14px;font-size:.95rem;margin-bottom:12px}" +
      ".search-results{list-style:none;padding:0;margin:0}" +
      ".search-results li{padding:10px 12px;border-radius:8px;cursor:pointer}" +
      ".search-results li:hover,.search-results li.active{background:var(--brand,#0284c7);color:#fff}" +
      ".search-results li a{color:inherit;text-decoration:none;display:block}" +
      ".search-results .sr-title{font-weight:600;font-size:.95rem}" +
      ".search-results .sr-keywords{font-size:.8rem;opacity:.7;margin-top:2px}" +
      ".search-results .sr-cat{display:inline-block;font-size:.7rem;padding:2px 8px;border-radius:99px;margin-right:6px;font-weight:600}" +
      ".sr-cat-halaman{background:#e0f2fe;color:#0369a1}" +
      ".sr-cat-tautan{background:#dcfce7;color:#15803d}" +
      ".search-results .sr-empty{color:#999;text-align:center;padding:24px 0;font-size:.9rem}";
    document.head.appendChild(style);
  }

  function getBase() {
    var p = window.location.pathname;
    if (p.indexOf("/") !== -1) {
      var parts = p.split("/");
      var last = parts[parts.length - 1];
      if (last.indexOf("inner-") === 0) return "";
    }
    return "";
  }

  function doSearch(query) {
    var list = document.getElementById("searchResults");
    if (!list) return;
    var q = query.toLowerCase().trim();
    var base = getBase();

    if (!q) {
      list.innerHTML = "";
      return;
    }

    var results = pages.filter(function (p) {
      return (
        p.title.toLowerCase().indexOf(q) !== -1 ||
        p.keywords.toLowerCase().indexOf(q) !== -1
      );
    });

    if (results.length === 0) {
      list.innerHTML = '<li class="sr-empty">Tidak ditemukan hasil untuk "' + query + '"</li>';
      return;
    }

    list.innerHTML = results
      .map(function (r) {
        var catLabel = r.cat === "Tautan" ? '<span class="sr-cat sr-cat-tautan">Tautan</span>' : '<span class="sr-cat sr-cat-halaman">Halaman</span>';
        return (
          '<li><a href="' + r.url + '" target="' + (r.cat === "Tautan" ? "_blank" : "_self") + '">' +
            '<div class="sr-title">' + catLabel + r.title + "</div>" +
            '<div class="sr-keywords">' + r.keywords + "</div>" +
          "</a></li>"
        );
      })
      .join("");
  }

  function init() {
    renderSearchModal();
    renderSearchCSS();

    var openBtn = document.getElementById("searchOpen");
    var modal = document.getElementById("searchModal");
    var backdrop = document.getElementById("searchBackdrop");
    var closeBtn = document.getElementById("searchClose");
    var input = document.getElementById("searchInput");

    if (openBtn) {
      openBtn.addEventListener("click", function () {
        modal.classList.add("active");
        setTimeout(function () { input.focus(); }, 100);
      });
    }

    function closeModal() {
      modal.classList.remove("active");
      input.value = "";
      var list = document.getElementById("searchResults");
      if (list) list.innerHTML = "";
    }

    if (backdrop) backdrop.addEventListener("click", closeModal);
    if (closeBtn) closeBtn.addEventListener("click", closeModal);

    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape" && modal.classList.contains("active")) closeModal();
    });

    if (input) {
      input.addEventListener("input", function () {
        doSearch(this.value);
      });
    }
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", init);
  } else {
    init();
  }
})();
