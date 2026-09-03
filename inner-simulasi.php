<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Simulasi Biaya - LABKESMAS 3 KALTENG</title>
  <meta content="Simulasi biaya pemeriksaan laboratorium di UPT Laboratorium Kesehatan dan Kalibrasi Tingkat 3 Kalimantan Tengah" name="description">
  <meta content="simulasi, biaya, pemeriksaan, labkesmas, UPT labkeskal, kalteng" name="keywords">

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
          <h2>Simulasi Tarif</h2>
          <ol>
            <li><a href="index.php">Beranda</a></li>
            <li>Simulasi Tarif</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->
    
    <!-- ======= Inner Page Section ======= -->
<section class="inner-page">
  <div class="container">
    <div class="row g-4">
      <!-- Left: Form area -->
      <div class="col-lg-8">
        <div class="mb-4">
          <label for="labSelect" class="form-label fw-bold">Pilih Laboratorium:</label>
          <select id="labSelect" class="form-select">
            <option value="">-- Pilih Laboratorium --</option>
            <option value="labA">Laboratorium Hematologi dan Urinalisa Klinik</option>
            <option value="labB">Laboratorium Imunoserologi dan Mikrobiologi Klinik</option>
            <option value="labC">Laboratorium Kimia Klinik</option>
            <option value="labD">Laboratorium Mikrobiologi Kesehatan Masyarakat</option>
            <option value="labE">Laboratorium Kimia Kesehatan dan Toksikologi</option>
            <option value="labF">Laboratorium Kalibrasi</option>
          </select>
        </div>

        <div id="daftarPemeriksaan" class="card shadow p-4 d-none">
          <h5 class="mb-3" id="namaLab"></h5>
          <form id="simulasiForm">
            <div id="testList"></div>
            <button type="reset" class="btn btn-secondary mt-3" id="btnReset">Reset</button>
          </form>
        </div>
      </div>

      <!-- Right: Modern total price panel -->
      <div class="col-lg-4">
        <div id="totalPanel" class="total-panel d-none">
          <div class="total-panel-card">
            <div class="total-panel-label">Total Biaya</div>
            <div class="total-panel-amount" id="totalHarga">Rp 0</div>
            <div class="total-panel-sub">* Harga dapat berubah sesuai ketentuan</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    const dataLaboratorium = {      
      labA: {
        nama: "Laboratorium Hematologi dan Urinalisa Klinik",
        tests: [
          { id: "hb", nama: "Hemoglobin", harga: 20000 },
          { id: "leu", nama: "Lekosit", harga: 15000 },
          { id: "hjl", nama: "Hitung Jenis Lekosit", harga: 15000 },
          { id: "led", nama: "LED", harga: 20000 },
          { id: "tro", nama: "Trombosit", harga: 15000 },
          { id: "eri", nama: "Eritrosit", harga: 15000 },
          { id: "hema", nama: "Hematokrit", harga: 15000 },
          { id: "mcv", nama: "MCV", harga: 10000 },
          { id: "mch", nama: "MCH", harga: 12000 },
          { id: "mchc", nama: "MCHC", harga: 10000 },
          { id: "ct", nama: "Waktu Pembekuan (CT)", harga: 10000 },
          { id: "bt", nama: "Waktu Pendarahan (BT)", harga: 10000 },
          { id: "golda", nama: "Golongan Darah", harga: 20000 },
          { id: "gambaran", nama: "Gambaran Darah", harga: 30000 },
          { id: "DL", nama: "Darah Lengkap", harga: 60000 },
          { id: "DR", nama: "Darah Rutin", harga: 40000 },
          { id: "paket", nama: "MCV, MCH, MCHC (Paket)", harga: 30000 },
          { id: "kejernihan", nama: "Kejernihan", harga: 0 },
          { id: "warna", nama: "Warna", harga: 30000 },
          { id: "berat_jenis", nama: "Berat Jenis", harga: 15000 },
          { id: "ph", nama: "pH", harga: 0 },
          { id: "leukosit_urine", nama: "Leukosit", harga: 0 },
          { id: "nitrit", nama: "Nitrit", harga: 0 },
          { id: "protein", nama: "Protein", harga: 15000 },
          { id: "glukosa", nama: "Glukosa", harga: 0 },
          { id: "keton", nama: "Keton", harga: 0 },
          { id: "urobinogen", nama: "Urobinogen", harga: 20000 },
          { id: "bilirubin", nama: "Bilirubin", harga: 0 },
          { id: "erytrosit_urine", nama: "Erytrosit", harga: 0 },
          { id: "sedimen", nama: "Sedimen", harga: 15000 },
          { id: "urine_lengkap", nama: "Urine lengkap", harga: 30000 },
          { id: "narkoba4", nama: "Narkoba 4 Parameter", harga: 165000 },
          { id: "narkoba5", nama: "Narkoba 5 Parameter", harga: 200000 },
          { id: "narkoba7", nama: "Narkoba 7 Parameter", harga: 245000 }
        ]
      },
      labB: {
        nama: "Laboratorium Imunoserologi dan Mikrobiologi Klinik",
        tests: [
          { id: "hbsag", nama: "HBs Ag", harga: 25000 },
          { id: "anti_hbsag", nama: "Anti HBs Ag", harga: 25000 },
          { id: "pp_tes", nama: "PP Tes", harga: 30000 },
          { id: "widal", nama: "Widal tes", harga: 50000 },
          { id: "vdrl", nama: "VDRL", harga: 75000 },
          { id: "tpha", nama: "TPHA", harga: 50000 },
          { id: "rf", nama: "Rhematoid Factor", harga: 30000 },
          { id: "tubex", nama: "Tubex Ig. M Anti Salmonella", harga: 200000 },
          { id: "dengue_igg_igm", nama: "Dengue Blood Ig M & Ig G", harga: 100000 },
          { id: "ns1", nama: "NS-1", harga: 100000 },
          { id: "anti_hiv", nama: "Anti HIV", harga: 120000 },
          { id: "hiv_ab", nama: "HIV Ab", harga: 112000 },
          { id: "malaria_ddr", nama: "Malaria / DDR", harga: 50000 },
          { id: "bta_tb", nama: "BTA (TB)", harga: 100000 },
          { id: "bta_hansen", nama: "BTA (Hansen) (lepra)", harga: 50000 },
          { id: "sekret_vagina_uretra", nama: "Sekret Vagina/Uretra", harga: 25000 },
          { id: "sekret_tricomonas", nama: "Sekret Tricomonas Vagina", harga: 50000 },
          { id: "sekret_diplococcus", nama: "Sekret Diplococcus", harga: 50000 },
          { id: "sekret_jamur", nama: "Sekret Jamur", harga: 50000 },
          { id: "sekret_mikroorganis", nama: "Sekret Mikro Organisme", harga: 50000 },
          { id: "asto", nama: "Asto", harga: 60000 },
          { id: "crp", nama: "CRP", harga: 0 },
          { id: "anti_hcv", nama: "Anti HCV", harga: 65000 },
          { id: "cmv", nama: "Citomegalovirus", harga: 150000 },
          { id: "ceas", nama: "CEA'S", harga: 400000 },
          { id: "feaces", nama: "Feaces", harga: 0 }
        ]
      },
      labC: {
        nama: "Laboratorium Kimia Klinik",
        tests: [
          { id: "glucose_puasa", nama: "Glucose puasa", harga: 20000 },
          { id: "glucose_2jpp", nama: "Glucose 2 J PP", harga: 20000 },
          { id: "glucose_sewaktu", nama: "Glucose sewaktu", harga: 20000 },
          { id: "hba1c", nama: "HBA1c", harga: 150000 },
          { id: "uric_acid", nama: "Uric Acid", harga: 25000 },
          { id: "protein_total", nama: "Protein Total", harga: 30000 },
          { id: "albumin", nama: "Albumin", harga: 25000 },
          { id: "globulin", nama: "Globulin", harga: 20000 },
          { id: "urea", nama: "Urea", harga: 25000 },
          { id: "bun", nama: "B U N", harga: 25000 },
          { id: "creatinin", nama: "Creatinin", harga: 25000 },
          { id: "bilirubin_total", nama: "Bilirubin Total", harga: 25000 },
          { id: "bilirubin_direct", nama: "Bilirubin Direct", harga: 25000 },
          { id: "bilirubin_indirect", nama: "Bilirubin Indirect", harga: 18000 },
          { id: "cholesterol", nama: "Cholesterol", harga: 35000 },
          { id: "triglycerides", nama: "Triglycerides", harga: 35000 },
          { id: "cholesterol_hdl", nama: "Cholesterol HDL", harga: 35000 },
          { id: "cholesterol_ldl", nama: "Cholesterol LDL", harga: 35000 },
          { id: "alk_phospatase", nama: "Alk Phospatase", harga: 35000 },
          { id: "ast_got", nama: "AST/GOT", harga: 30000 },
          { id: "alt_gpt", nama: "ALT/GPT", harga: 30000 },
          { id: "ck", nama: "CK", harga: 50000 },
          { id: "ckmb_nac_act", nama: "CKMB (NAC-act)", harga: 0 },
          { id: "ldh", nama: "LDH", harga: 40000 },
          { id: "gamma_gt", nama: "Gamma -GT (Y-GT)", harga: 50000 },
          { id: "na", nama: "Na", harga: 30000 },
          { id: "k", nama: "K", harga: 30000 },
          { id: "cl", nama: "Cl", harga: 30000 },
          { id: "ca", nama: "Ca", harga: 30000 },
          { id: "cholinesterase", nama: "Cholinesterase", harga: 90000 }
        ]
      },
      labD: {
        nama: "Laboratorium Mikrobiologi Kesehatan Masyarakat",
        tests: [
          // Air Minum
          { id: "air_minum_coliform", nama: "Air Minum - Total Coliform*", harga: 180000 },
          { id: "air_minum_ecoli", nama: "Air Minum - Escherichia Coli*", harga: 180000 },

          // Air SPA /Sanitas perAquam
          { id: "spa_hpc_tpc", nama: "Air SPA - HPC/TPC", harga: 150000 },
          { id: "spa_ecoli", nama: "Air SPA - Escherichia Coli*", harga: 180000 },
          { id: "spa_pseudomonas", nama: "Air SPA - Pseudomonas Aerogenosa", harga: 180000 },
          { id: "spa_legionella", nama: "Air SPA - Legionella spp", harga: 180000 },

          // Air Kolam Renang
          { id: "kolam_hpc_tpc", nama: "Air Kolam Renang - HPC/TPC", harga: 150000 },
          { id: "kolam_ecoli", nama: "Air Kolam Renang - Escherichia Coli*", harga: 180000 },
          { id: "kolam_pseudomonas", nama: "Air Kolam Renang - Pseudomonas Aerogenosa", harga: 180000 },
          { id: "kolam_legionella", nama: "Air Kolam Renang - Legionella spp", harga: 180000 },
          { id: "kolam_staphylococcus", nama: "Air Kolam Renang - Staphylococcus aureus", harga: 180000 },

          // Air Pemandian Umum
          { id: "pemandian_enterococci", nama: "Air Pemandian Umum - Enterococci", harga: 180000 },
          { id: "pemandian_ecoli", nama: "Air Pemandian Umum - Escherichia Coli*", harga: 180000 },

          // Air Limbah Domestik
          { id: "limbah_mpn_coliform", nama: "Air Limbah Domestik - MPN Coliform *", harga: 400000 },

          // Air Sungai dan sejenisnya
          { id: "sungai_mpn_coliform", nama: "Air Sungai - MPN Coliform *", harga: 300000 },
          { id: "sungai_mpn_fecal", nama: "Air Sungai - MPN Fecal Coli *", harga: 300000 },

          // Air Danau dan sejenisnya
          { id: "danau_mpn_coliform", nama: "Air Danau - MPN Coliform *", harga: 300000 },
          { id: "danau_mpn_fecal", nama: "Air Danau - MPN Fecal Coli *", harga: 300000 },

          // Air Laut
          { id: "laut_mpn_coliform", nama: "Air Laut - MPN Coliform *", harga: 300000 },
          { id: "laut_mpn_fecal", nama: "Air Laut - MPN Fecal Coli *", harga: 300000 },

          // Udara
          { id: "udara_mikrobiologi", nama: "Udara - Kualitas Udara Mikrobiologi", harga: 150000 },

          // Media Tanah
          { id: "tanah_mpn_ecoli", nama: "Media Tanah - MPN E coli", harga: 300000 },
          { id: "tanah_mpn_fecal", nama: "Media Tanah - MPN Fecal Coli", harga: 300000 },
          { id: "tanah_ascaris", nama: "Media Tanah - Ascaris sp", harga: 50000 },
          { id: "tanah_taenia", nama: "Media Tanah - Taenia", harga: 50000 },

          // Makanan dan Minuman
          { id: "makmin_ecoli", nama: "Makanan & Minuman - E coli", harga: 300000 },
          { id: "makmin_salmonella", nama: "Makanan & Minuman - Salmonella sp", harga: 275000 },
          { id: "makmin_staphylococcus", nama: "Makanan & Minuman - Staphylococcus aureus", harga: 180000 },
          { id: "makmin_bacillus", nama: "Makanan & Minuman - Bacillus cereus", harga: 180000 },
          { id: "makmin_listeria", nama: "Makanan & Minuman - Listeria monocytogenes", harga: 275000 },

          // Alat makan masak & Linen
          { id: "alatmakan_tpc", nama: "Alat Makan Masak - Angka Kuman (TPC)", harga: 150000 },
          { id: "linen_tpc", nama: "Linen - Angka Kuman (TPC)", harga: 150000 },

          // Parameter lainnya
          { id: "param_mpn_coliform", nama: "Parameter Lainnya - MPN Coliform *", harga: 300000 },
          { id: "param_mpn_fecal", nama: "Parameter Lainnya - MPN Fecal Coli *", harga: 300000 },
          { id: "param_mpn_escherichia", nama: "Parameter Lainnya - MPN Escherichia coli *", harga: 300000 },
          { id: "param_total_coliform", nama: "Parameter Lainnya - Total Coliform*", harga: 180000 },
          { id: "param_total_fecal", nama: "Parameter Lainnya - Total Fecal coli", harga: 180000 },
          { id: "param_total_escherichia", nama: "Parameter Lainnya - Total Escherichia coli", harga: 180000 },
          { id: "param_total_plate_count", nama: "Parameter Lainnya - Total Plate Count", harga: 150000 },
          { id: "param_ecoli", nama: "Parameter Lainnya - E coli", harga: 175000 },
          { id: "param_salmonella", nama: "Parameter Lainnya - Salmonella sp", harga: 275000 },
          { id: "param_staphylococcus", nama: "Parameter Lainnya - Staphylococcus aureus", harga: 275000 },
          { id: "param_bacillus", nama: "Parameter Lainnya - Bacillus cereus", harga: 275000 },
          { id: "param_klebsiella", nama: "Parameter Lainnya - Klebsiella sp", harga: 175000 },
          { id: "param_vibrio", nama: "Parameter Lainnya - Vibrio Cholera", harga: 275000 },
          { id: "param_pseudomonas", nama: "Parameter Lainnya - Pseudomonas aerogenosa", harga: 275000 },
          { id: "param_shigella", nama: "Parameter Lainnya - Shigella sp", harga: 275000 },
          { id: "param_streptococcus", nama: "Parameter Lainnya - Streptococcus sp", harga: 275000 }
        ]
      },
      labE: {
        nama: "Laboratorium Kimia Kesehatan dan Toksikologi",
        tests: [
          { id: "suhu", nama: "Suhu", harga: 15000 },
          { id: "tds", nama: "Jumlah Zat Padat Terlarut (TDS)*", harga: 50000 },
          { id: "kekeruhan", nama: "Kekeruhan*", harga: 50000 },
          { id: "warna", nama: "Warna*", harga: 40000 },
          { id: "bau", nama: "Bau", harga: 10000 },
          { id: "ph", nama: "Derajat Keasaman (pH)*", harga: 40000 },
          { id: "nitrat", nama: "Nitrat (NO3) (terlarut)*", harga: 50000 },
          { id: "nitrit", nama: "Nitrit (NO2) (terlarut)*", harga: 50000 },
          { id: "krom_valensi_6", nama: "Krom Valensi 6 (Cr6+) (terlarut)", harga: 60000 },
          { id: "besi", nama: "Besi (Fe) (terlarut)*", harga: 100000 },
          { id: "mangan", nama: "Mangan (Mn) (terlarut)*", harga: 100000 },
          { id: "sisa_klor", nama: "Sisa Klor (Klor bebas)", harga: 50000 },
          { id: "kadmium", nama: "Kadmium (Cd) (terlarut)", harga: 100000 },
          { id: "timbal", nama: "Timbal (Pb) terlarut", harga: 100000 },
          { id: "fluorida", nama: "Fluorida*", harga: 50000 },
          { id: "posfat", nama: "Posfat (posfat sebagai P)", harga: 50000 },
          { id: "amoniak", nama: "Amoniak (NH4-N) / Amoniak (NH3-N)", harga: 60000 },
          { id: "kalium", nama: "Kalium", harga: 100000 },
          { id: "total_kromium", nama: "Total kromium (Cr)", harga: 100000 },
          { id: "sianida", nama: "Sianida", harga: 50000 },
          { id: "sulfida", nama: "Sulfida", harga: 50000 },
          { id: "tembaga", nama: "Tembaga (Cu)*", harga: 100000 },
          { id: "seng", nama: "Seng (Zn)*", harga: 100000 },
          { id: "nikel", nama: "Nikel (Ni)", harga: 100000 },
          { id: "fenol", nama: "Fenol", harga: 50000 },
          { id: "mbas_detergen", nama: "Methylene Blue Active Substance (MBAS) / Detergen", harga: 170000 },
          { id: "klorida", nama: "Klorida*", harga: 50000 },
          { id: "kesadahan", nama: "Kesadahan*", harga: 50000 },
          { id: "permanganat", nama: "Nilai permanganat/ Zat Organik*", harga: 50000 },
          { id: "sulfat", nama: "Sulfat*", harga: 50000 }
        ]
      },
      labF: {
        nama: "Laboratorium Kalibrasi",
        tests: [
          { id: "sphygmomanometer_analog", nama: "Sphygmomanometer / Tensimeter Analog", harga: 0 },
          { id: "tensimeter_digital", nama: "Tensimeter Digital", harga: 0 },
          { id: "timbang_bayi_mekanik", nama: "Timbang Bayi Mekanik", harga: 0 },
          { id: "timbang_bayi_digital", nama: "Timbang Bayi Digital", harga: 0 },
          { id: "timbang_dewasa_mekanik", nama: "Timbang Dewasa Mekanik", harga: 0 },
          { id: "timbang_dewasa_digital", nama: "Timbang Dewasa Digital", harga: 0 },
          { id: "centrifuge", nama: "Centrifuge", harga: 0 },
          { id: "vortex_mixer", nama: "Vortex Mixer", harga: 0 },
          { id: "ph_meter", nama: "pH Meter", harga: 0 },
          { id: "tds_meter", nama: "TDS Meter", harga: 0 },
          { id: "konduktivity_meter", nama: "Konduktivitas Meter", harga: 0 },
          { id: "do_meter", nama: "DO Meter", harga: 0 },
          { id: "salinit_meter", nama: "Salinitas Meter", harga: 0 }
        ]
      }
    };

    const labSelect = document.getElementById("labSelect");
    const daftarPemeriksaan = document.getElementById("daftarPemeriksaan");
    const totalPanel = document.getElementById("totalPanel");
    const namaLaboratorium = document.getElementById("namaLab");
    const testList = document.getElementById("testList");
    const totalHargaEl = document.getElementById("totalHarga");
    const simulasiForm = document.getElementById("simulasiForm");

    labSelect.addEventListener("change", () => {
      const labKey = labSelect.value;
      if (!labKey) {
        daftarPemeriksaan.classList.add("d-none");
        totalPanel.classList.add("d-none");
        return;
      }

      const lab = dataLaboratorium[labKey];
      namaLab.textContent = lab.nama;
      testList.innerHTML = "";

      lab.tests.forEach(test => {
        const div = document.createElement("div");
        div.className = "form-check";
        div.innerHTML = `
          <input class="form-check-input test-check" type="checkbox" value="${test.harga}" id="${test.id}">
          <label class="form-check-label" for="${test.id}">
            ${test.nama} (${test.harga > 0 ? 'Rp ' + test.harga.toLocaleString("id-ID") : 'Rp 0'})
          </label>
        `;
        testList.appendChild(div);
      });

      daftarPemeriksaan.classList.remove("d-none");
      totalPanel.classList.remove("d-none");
      updateTotal();

      document.querySelectorAll(".test-check").forEach(cb => {
        cb.addEventListener("change", updateTotal);
      });
    });

    function updateTotal() {
      let total = 0;
      document.querySelectorAll(".test-check").forEach(cb => {  
        if (cb.checked) {
          total += parseInt(cb.value);
        }
      });
      totalHargaEl.textContent = "Rp " + total.toLocaleString("id-ID");
    }

    simulasiForm.addEventListener("reset", () => {
      setTimeout(() => {
        updateTotal();
      }, 0);
    });
  </script>
</section>

  </main>

    <!-- Simulasi page styles -->
  <style>
    html, body { overflow-x: hidden; }
    #main { overflow-x: hidden; }

    /* Select lab */
    #labSelect {
      width: 100%;
      max-width: 100%;
      min-width: 0;
    }

    /* Card daftar pemeriksaan */
    #daftarPemeriksaan {
      overflow: hidden;
      max-width: 100%;
      box-sizing: border-box;
    }
    #daftarPemeriksaan h5 {
      word-break: break-word;
      overflow-wrap: break-word;
      font-size: clamp(1rem, 2.5vw, 1.25rem);
    }
    #daftarPemeriksaan .form-check {
      padding-left: 1.75rem;
      display: flex;
      align-items: baseline;
      gap: .4rem;
    }
    #daftarPemeriksaan .form-check-input {
      flex-shrink: 0;
      margin-top: 0;
    }
    #daftarPemeriksaan .form-check-label {
      word-break: break-word;
      overflow-wrap: break-word;
      hyphens: auto;
      min-width: 0;
    }

    /* Total panel */
    .total-panel {
      position: sticky;
      top: 130px;
    }
    .total-panel-card {
      background: linear-gradient(135deg, #0EA5E9 0%, #0284C7 100%);
      border-radius: var(--radius);
      padding: 2rem 1.5rem;
      text-align: center;
      box-shadow: 0 20px 60px rgba(26, 118, 210, 0.3);
      color: #fff;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .total-panel-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 25px 70px rgba(26, 118, 210, 0.4);
    }
    .total-panel-label {
      font-size: 1rem;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 2px;
      opacity: 0.85;
      margin-bottom: 0.5rem;
    }
    .total-panel-amount {
      font-size: 2.5rem;
      font-weight: 800;
      line-height: 1.2;
      word-break: break-word;
    }
    .total-panel-sub {
      font-size: 0.8rem;
      opacity: 0.6;
      margin-top: 0.75rem;
    }

    @media (max-width: 991px) {
      .total-panel { position: static; }
      .total-panel-card { padding: 1.5rem 1rem; }
      .total-panel-amount { font-size: 2rem; }
    }
    @media (max-width: 576px) {
      #daftarPemeriksaan { padding: 1rem !important; }
      #daftarPemeriksaan .form-check { padding-left: 1.5rem; gap: .3rem; }
      #daftarPemeriksaan .form-check-label { font-size: .85rem; line-height: 1.4; }
      .total-panel-card { padding: 1.2rem .75rem; }
      .total-panel-amount { font-size: 1.5rem; }
      .total-panel-label { font-size: .8rem; letter-spacing: 1px; }
      .total-panel-sub { font-size: .7rem; }
    }
  </style>

<?php include 'partials/footer.php'; ?>
