<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tracking - LABKESMAS 3 KALTENG</title>
  <meta content="Lacak status pemeriksaan laboratorium di UPT Laboratorium Kesehatan dan Kalibrasi Tingkat 3 Kalimantan Tengah" name="description">
  <meta content="tracking, lacak hasil, pemeriksaan, labkesmas, UPT labkeskal, kalteng" name="keywords">

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
          <h2>Tracking Hasil Pemeriksaan</h2>
          <ol>
            <li><a href="index.php">Beranda</a></li>
            <li>Tracking Hasil</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <div class="section-title">
          <span class="eyebrow">Layanan</span>
          <h2>Tracking Hasil Pemeriksaan</h2>
          <p>Masukkan nomor order dan nomor HP Anda untuk mengecek status hasil laboratorium.</p>
        </div>

        <div class="tracking-card">
          <div class="step-indicator mb-4">
            <div class="step-dot active" data-step="1"><span>1</span> Pilih Tipe</div>
            <div class="step-dot" data-step="2"><span>2</span> Data &amp; Captcha</div>
          </div>

          <form id="trackingForm" class="tracking-form" novalidate>
            <!-- Step 1 -->
            <div class="tracking-step" data-step="1">
              <label class="tracking-label"><i class="bi bi-diagram-3"></i> Pilih Tipe Laboratorium</label>
              <div class="lab-options">
                <label class="lab-option">
                  <input type="radio" name="labType" value="Laboratorium Klinik">
                  <div class="lab-card">
                    <i class="bi bi-heart-pulse"></i>
                    <span>Laboratorium Klinik</span>
                  </div>
                </label>
                <label class="lab-option">
                  <input type="radio" name="labType" value="Laboratorium Kesehatan Masyarakat">
                  <div class="lab-card">
                    <i class="bi bi-hospital"></i>
                    <span>Laboratorium Kesehatan Masyarakat</span>
                  </div>
                </label>
              </div>
              <div class="invalid-feedback d-block" id="labTypeError" hidden>Pilih tipe laboratorium terlebih dahulu.</div>
              <div class="text-end mt-4">
                <button type="button" class="btn-gradient" id="toStep2"><i class="bi bi-arrow-right"></i> Lanjut</button>
              </div>
            </div>

            <!-- Step 2 -->
            <div class="tracking-step" data-step="2" hidden>
              <div class="form-group mb-3">
                <label for="noReg" id="noRegLabel"><i class="bi bi-hash"></i> No Register</label>
                <input type="text" class="form-control" id="noReg" name="noReg" placeholder="Contoh: REG-2025-000123" required>
                <div class="invalid-feedback">No Register wajib diisi.</div>
              </div>
              <div class="form-group mb-3">
                <label for="phone"><i class="bi bi-phone"></i> Nomor HP</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Contoh: 085824184658" required>
                <div class="invalid-feedback">Nomor HP wajib diisi (minimal 10 digit).</div>
              </div>
              <div class="form-group mb-3">
                <label for="captchaInput"><i class="bi bi-shield-check"></i> Captcha: <span id="captchaQuestion" class="fw-bold text-gradient"></span></label>
                <input type="text" class="form-control" id="captchaInput" name="captcha" placeholder="Masukkan hasil di atas" required>
                <div class="invalid-feedback" id="captchaError">Jawaban captcha salah.</div>
              </div>
              <div class="d-flex justify-content-between mt-4">
                <button type="button" class="btn btn-outline-secondary" id="backStep1"><i class="bi bi-arrow-left"></i> Kembali</button>
                <button type="submit" class="btn-gradient"><i class="bi bi-search"></i> Lacak Hasil</button>
              </div>
            </div>
          </form>
        </div>

        <div id="trackingResult" class="tracking-card tracking-card--wide tracking-result" hidden></div>
      </div>
    </section>

  </main><!-- End #main -->

  <script>
    (function () {
      function escapeHtml(s) {
        return String(s).replace(/[&<>"']/g, function (c) {
          return { "&": "&amp;", "<": "&lt;", ">": "&gt;", '"': "&quot;", "'": "&#39;" }[c];
        });
      }

      var API_BASE = "/api";

      var form = document.getElementById("trackingForm");
      if (!form) return;

      var step1 = form.querySelector('.tracking-step[data-step="1"]');
      var step2 = form.querySelector('.tracking-step[data-step="2"]');
      var dots = document.querySelectorAll(".step-indicator .step-dot");
      var labTypeError = document.getElementById("labTypeError");
      var captchaQuestion = document.getElementById("captchaQuestion");
      var captchaError = document.getElementById("captchaError");
      var captchaAnswer = 0;
      var resultEl = document.getElementById("trackingResult");
      var submitBtn = form.querySelector('button[type="submit"]');

      var STATUS_ORDER = ["Registered", "Arrived", "Sampling", "Examination", "Validation", "Reporting", "Finished"];

      function setStep(n) {
        step1.hidden = n !== 1;
        step2.hidden = n !== 2;
        dots.forEach(function (d) {
          d.classList.toggle("active", Number(d.dataset.step) <= n);
        });
      }

      function generateCaptcha() {
        var a = Math.floor(Math.random() * 9) + 1;
        var b = Math.floor(Math.random() * 9) + 1;
        captchaAnswer = a + b;
        captchaQuestion.textContent = a + " + " + b + " = ?";
      }

      function applyTypeLabels(labType) {
        var lbl = document.getElementById("noRegLabel");
        var inp = document.getElementById("noReg");
        if (labType === "Laboratorium Kesehatan Masyarakat") {
          lbl.innerHTML = '<i class="bi bi-hash"></i> No Order / FPPS (order_code)';
          inp.placeholder = "Contoh: 0133/FPPS/LKK-PKY/KESMAS/IV/2025";
        } else {
          lbl.innerHTML = '<i class="bi bi-hash"></i> No Register (registration_id)';
          inp.placeholder = "Contoh: 20250408002";
        }
      }

      function fmt(v) {
        if (v === null || v === undefined || v === "") return "-";
        return escapeHtml(v);
      }

      function statusBadge(text) {
        return '<span class="status-badge"><i class="bi bi-activity"></i> ' + escapeHtml(text) + '</span>';
      }

      function infoItem(k, v) {
        return '<div class="track-info-item"><div class="k">' + escapeHtml(k) + '</div><div class="v">' + fmt(v) + '</div></div>';
      }

      function timelineStep(title, time, state, by) {
        var cls = state === "done" ? "done" : state === "active" ? "active" : "";
        var t = (time && time !== "-" && time !== true) ? escapeHtml(time) : "Menunggu";
        var sub = by ? '<div class="t-date">' + escapeHtml(by) + '</div>' : "";
        return '<li class="' + cls + '"><div class="t-title">' + escapeHtml(title) + '</div>' +
               '<div class="t-date">' + t + '</div>' + sub + '</li>';
      }

      function showLoading() {
        resultEl.hidden = false;
        resultEl.innerHTML = '<div class="track-loading"><span class="spinner"></span> Mencari data pemeriksaan�</div>';
        resultEl.scrollIntoView({ behavior: "smooth", block: "center" });
      }

      function showError(message, detail) {
        resultEl.hidden = false;
        resultEl.innerHTML = '<div class="track-alert error"><i class="bi bi-exclamation-triangle me-1"></i> ' +
          escapeHtml(message) +
          (detail ? '<div class="small fw-normal mt-1">' + escapeHtml(detail) + '</div>' : '') +
          '</div>';
        resultEl.scrollIntoView({ behavior: "smooth", block: "center" });
      }

      function renderClinic(d) {
        var p = d.progress || {};
        var curIdx = STATUS_ORDER.indexOf(d.status);
        function st(name) {
          var i = STATUS_ORDER.indexOf(name);
          if (i < 0 || i === -1) return "";
          return (i <= curIdx) ? "done" : "";
        }
        var exam = p.examination || {};
        var examItems = Object.keys(exam).filter(function (k) { return exam[k]; })
          .map(function (k) { return escapeHtml(k.replace(/_/g, " ")) + ": " + escapeHtml(exam[k]); }).join("<br>");

        var html =
          '<div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-2">' +
            '<div><div class="fw-bold" style="font-family:var(--font-head);font-size:1.05rem;">' + escapeHtml(d.patient_name || "-") + '</div>' +
            '<div class="text-muted">No Register: ' + escapeHtml(d.registration_id) + '</div>' +
            '<div class="text-muted">MR: ' + fmt(d.patient_mr) + '</div></div>' +
            statusBadge(d.status) +
          '</div>' +
          '<div class="track-info-grid">' +
            infoItem("Dokter", d.doctor_name) +
            infoItem("Departemen", d.department) +
            infoItem("Tanggal Kunjungan", d.visit_date) +
            infoItem("Validasi Oleh", d.validation_by) +
          '</div>' +
          '<div class="track-section-title">Progress Pemeriksaan</div>' +
          '<ul class="timeline">' +
            timelineStep("Registrasi / Kedatangan", p.arrived, st("Arrived")) +
            timelineStep("Pengambilan Sampel", p.sampling && p.sampling.time, st("Sampling"), p.sampling && p.sampling.by) +
            timelineStep("Pemeriksaan", examItems || (p.examination ? "Diproses" : null), st("Examination")) +
            timelineStep("Validasi", p.validation && p.validation.time, st("Validation"), p.validation && p.validation.by) +
          '</ul>' +
          '<p class="text-muted small mt-2">* Hanya status &amp; progress. Nilai hasil sengaja tidak ditampilkan.</p>';
        resultEl.hidden = false;
        resultEl.innerHTML = html;
        resultEl.scrollIntoView({ behavior: "smooth", block: "center" });
      }

      function renderKesmas(d) {
        var p = d.progress || {};
        var c = d.customer || {};
        function done(v) { return (v && v !== "-" && v !== false) ? "done" : ""; }
        var samples = (d.samples || []).map(function (s) {
          return '<tr><td>' + fmt(s.sample_type) + '</td><td>' + fmt(s.sample_code) + '</td><td>' + fmt(s.sample_id) +
            '</td><td>' + fmt(s.sample_number) + '</td><td>' + fmt(s.sample_volume) + '</td><td>' + fmt(s.sample_container) +
            '</td><td>' + fmt(s.sample_description) + '</td><td>' + fmt(s.sample_division) + '</td><td>' + fmt(s.sample_collect_time) +
            '</td><td>' + fmt(s.sample_receive_time) + '</td></tr>';
        }).join("");
        var params = (d.parameters || []).map(function (s) {
          return '<tr><td>' + fmt(s.code) + '</td><td>' + fmt(s.name) + '</td><td>' + fmt(s.method) + '</td><td>' + fmt(s.group) +
            '</td><td>' + fmt(s.unit) + '</td><td>' + fmt(s.reference_value) + '</td><td>' + fmt(s.flag) + '</td><td>' +
            (s.has_result ? '<span class="has-yes">Ada</span>' : '<span class="has-no">Belum</span>') + '</td></tr>';
        }).join("");

        var html =
          '<div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-2">' +
            '<div><div class="fw-bold" style="font-family:var(--font-head);font-size:1.05rem;">' + escapeHtml(c.name || "-") + '</div>' +
            '<div class="text-muted">No Order: ' + escapeHtml(d.order_code) + '</div>' +
            '<div class="text-muted">PIC: ' + fmt(c.pic) + '</div></div>' +
            statusBadge(d.order_status) +
          '</div>' +
          '<div class="track-info-grid">' +
            infoItem("Tanggal Order", d.order_date) +
            infoItem("Jenis", d.order_type) +
            infoItem("Total", d.order_total) +
            infoItem("No HP", c.phone) +
          '</div>' +
          '<div class="track-section-title">Progress Order</div>' +
          '<ul class="timeline">' +
            timelineStep("Review", p.review && p.review.time, done(p.review)) +
            timelineStep("Pengambilan Sampel", p.collect && p.collect.time, done(p.collect)) +
            timelineStep("Diterima", p.receive && p.receive.time, done(p.receive)) +
            timelineStep("Masuk Laboratorium", p.receive_lab, done(p.receive_lab)) +
            timelineStep("Pemeriksaan", p.process && p.process.time, done(p.process)) +
            timelineStep("Verifikasi", p.verify && p.verify.time, done(p.verify)) +
            timelineStep("Validasi", p.validate && p.validate.time, done(p.validate)) +
            timelineStep("Selesai (LHU)", null, p.completed ? "done" : "") +
          '</ul>' +
          (samples ? ('<div class="track-section-title">Sampel</div><div class="track-table-wrap"><table class="track-table"><thead><tr>' +
            '<th>Jenis</th><th>Kode</th><th>ID</th><th>No</th><th>Volume</th><th>Wadah</th><th>Deskripsi</th><th>Divisi</th><th>Ambil</th><th>Terima</th>' +
            '</tr></thead><tbody>' + samples + '</tbody></table></div>') : '') +
          (params ? ('<div class="track-section-title">Parameter Uji</div><div class="track-table-wrap"><table class="track-table"><thead><tr>' +
            '<th>Kode</th><th>Parameter</th><th>Metode</th><th>Group</th><th>Satuan</th><th>Nilai Rujukan</th><th>Flag</th><th>Hasil</th>' +
            '</tr></thead><tbody>' + params + '</tbody></table></div>') : '') +
          '<p class="text-muted small mt-2">* Hanya status &amp; progress. Nilai hasil sengaja tidak ditampilkan.</p>';
        resultEl.hidden = false;
        resultEl.innerHTML = html;
        resultEl.scrollIntoView({ behavior: "smooth", block: "center" });
      }

      document.getElementById("toStep2").addEventListener("click", function () {
        var chosen = form.querySelector('input[name="labType"]:checked');
        if (!chosen) {
          labTypeError.hidden = false;
          return;
        }
        labTypeError.hidden = true;
        applyTypeLabels(chosen.value);
        generateCaptcha();
        setStep(2);
        step2.scrollIntoView({ behavior: "smooth", block: "center" });
      });

      document.getElementById("backStep1").addEventListener("click", function () {
        captchaError.hidden = true;
        setStep(1);
        step1.scrollIntoView({ behavior: "smooth", block: "center" });
      });

      form.addEventListener("submit", function (e) {
        e.preventDefault();
        var labType = form.querySelector('input[name="labType"]:checked').value;
        var noRegEl = document.getElementById("noReg");
        var phoneEl = document.getElementById("phone");
        var captchaEl = document.getElementById("captchaInput");
        var noReg = noRegEl.value.trim();
        var phone = phoneEl.value.trim();
        var ok = true;

        if (!noReg) { noRegEl.classList.add("is-invalid"); ok = false; }
        else { noRegEl.classList.remove("is-invalid"); }

        if (phone.replace(/\D/g, "").length < 10) { phoneEl.classList.add("is-invalid"); ok = false; }
        else { phoneEl.classList.remove("is-invalid"); }

        if (Number(captchaEl.value) !== captchaAnswer) {
          captchaEl.classList.add("is-invalid");
          captchaError.hidden = false;
          ok = false;
        } else {
          captchaEl.classList.remove("is-invalid");
          captchaError.hidden = true;
        }

        if (!ok) return;

        var isKesmas = labType === "Laboratorium Kesehatan Masyarakat";
        var path = isKesmas ? "/track/kesmas" : "/track/clinic";
        var params = isKesmas
          ? { order_code: noReg, phone: phone }
          : { registration_id: noReg, phone: phone };

        var url = API_BASE + path + "?" + new URLSearchParams(params).toString();
        var prevLabel = submitBtn.innerHTML;
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="bi bi-arrow-repeat spin"></i> Mencari�';
        showLoading();

        fetch(url, { method: "GET", headers: { "Accept": "application/json" } })
          .then(function (res) {
            if (res.status === 404) {
              return res.json().then(function (j) { throw { msg: (j && j.message) || "Data tidak ditemukan" }; });
            }
            if (res.status === 422) {
              return res.json().then(function (j) { throw { msg: (j && j.message) || "Parameter tidak lengkap" }; });
            }
            if (!res.ok) { throw { msg: "Terjadi kesalahan pada server (HTTP " + res.status + ")." }; }
            return res.json();
          })
          .then(function (data) {
            if (isKesmas) renderKesmas(data); else renderClinic(data);
          })
          .catch(function (err) {
            if (err && err.msg) { showError(err.msg); return; }
            showError("Gagal terhubung ke server.", "Periksa koneksi internet Anda. Jika situs ini di domain berbeda dengan API, pastikan server mengizinkan akses (CORS).");
          })
          .finally(function () {
            submitBtn.disabled = false;
            submitBtn.innerHTML = prevLabel;
          });
      });
    })();
  </script>

<?php include 'partials/footer.php'; ?>
