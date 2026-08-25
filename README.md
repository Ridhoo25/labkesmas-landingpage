# LABKESMAS 3 KALTENG - Landing Page

Website resmi UPT Laboratorium Kesehatan dan Kalibrasi Tingkat 3 Kalimantan Tengah.

## Versi

| Versi | Tahun | Keterangan |
|-------|-------|------------|
| v1.0 | 2025 | Launch awal, template Medicio |
| v2.0 | 2026 | Revisi besar: PHP include, audit bug, SEO, accessibility |

## v2.0 Changelog (2026)

### PHP Include (v2.1)
- Konversi semua halaman dari `.html` ke `.php`
- Buat `partials/topbar.php`, `partials/header.php`, `partials/footer.php`
- Ubah navbar & footer sekali langsung berlaku untuk semua halaman
- Fix Dockerfile: tambah PHP-FPM + nginx + supervisord
- Buat `nginx.conf` untuk serve PHP via fastcgi
- Fix `search.js`: semua link internal `.html` -> `.php`

### Bug Fix
- Fix JavaScript crash `heroCarouselIndicators` di semua inner page
- Fix CSS `font-family: #0284C7` (invalid value)
- Fix CSS `var(--brand-300)` (undefined variable)
- Fix typo "pemeliharaaan" -> "pemeliharaan"
- Fix typo "Questioins" -> "Questions"
- Fix XSS vulnerability di `validate.js`
- Fix encoding karakter tahun di halaman sejarah

### Konsistensi
- Breadcrumb "Home" -> "Beranda" di semua halaman
- Footer "Subscribe" -> "Berlangganan"
- Copyright 2025 -> 2026
- Page title unik per halaman
- Navbar link konsisten pakai `.php`
- Normalisasi label navbar (Laboratorium, SPKP/SPAK)
- Icon laboratorium konsisten pakai Bootstrap Icons
- Judul h2 breadcrumbs konsisten Title Case
- CSS `.inner-page` ditambahkan untuk section padding
- CSS `.ppid-*` ditambahkan untuk form Permintaan Informasi

### SEO & Accessibility
- Meta description & keywords per halaman
- Logo navbar `alt` attribute
- Skip-to-content link
- `rel="noopener"` di semua `target="_blank"` links
- Accessibility widget (font size, contrast, animation toggle)

### Fitur
- Search modal dengan local page filter
- Visitor counter (Total/Bulan/Hari) di footer
- Alur kalibrasi interaktif (click-to-expand accordion)
- Contact form PHP backend (`forms/contact.php`)
- Newsletter footer dengan success message
- GSAP di-vendor lokal (hapus CDN dependency)
- PPID halaman dengan daftar kategori dokumen
- Download draft surat permohonan kalibrasi

### Cleanup
- Hapus dead code (Swiper, GLightbox unused)
- Hapus duplicate CSS properties
- Hapus script ganda (main.js, theme.js)
- Reformat 4 halaman minified
- Font references konsisten ke Inter

## Stack

- PHP 8
- HTML5, CSS3, JavaScript
- Bootstrap 5
- Bootstrap Icons
- AOS (Animate On Scroll)
- GLightbox
- Swiper
- GSAP + ScrollTrigger
- Nginx + PHP-FPM (Docker)

## Cara Jalankan

```bash
# Menggunakan Docker
docker-compose up -d

# Atau menggunakan PHP built-in server (Laragon)
# Buka http://localhost:8888 di browser
```

## Struktur

```
├── index.php                         # Beranda
├── inner-sejarah.php                 # Sejarah
├── inner-visimisi.php                # Visi & Misi
├── inner-sotk.php                    # Struktur Organisasi
├── inner-tupoksi.php                 # Tugas & Fungsi
├── inner-akreditasi.php              # Akreditasi
├── inner-layanan.php                 # Layanan
├── inner-layanan-klinik.php          # Laboratorium Klinik
├── inner-layanan-mikrokesmas.php     # Laboratorium Mikrobiologi
├── inner-layanan-kimkestok.php       # Laboratorium Kimia & Toksikologi
├── inner-layanan-biomolekuler.php    # Laboratorium Biomolekuler
├── inner-kalibrasi.php               # Laboratorium Kalibrasi
├── inner-galeri.php                  # Galeri
├── inner-video.php                   # Video
├── inner-tracking.php                # Tracking Hasil
├── inner-simulasi.php                # Simulasi Tarif
├── inner-profilkepala.php            # Profil Kepala UPT
├── inner-ppid.php                    # PPID
├── inner-inberkala.php               # Informasi Berkala
├── inner-insertamerta.php            # Informasi Segera Merta
├── inner-insetiapsaat.php            # Informasi Setiap Saat
├── inner-permintaaninformasipublik.php # Permintaan Informasi Publik
├── partials/
│   ├── topbar.php                    # Bar atas (tanggal, jam, greeting)
│   ├── header.php                    # Navbar
│   └── footer.php                    # Footer + scripts
├── forms/
│   └── contact.php                   # Backend contact form
├── api/
│   └── visitor-counter.php           # Visitor counter API
├── assets/
│   ├── css/
│   │   ├── style.css                 # Main styles
│   │   └── theme.css                 # Theme overrides
│   ├── js/
│   │   ├── main.js                   # Main JavaScript
│   │   ├── theme.js                  # Theme JavaScript
│   │   ├── topbar.js                 # DateTime updater
│   │   ├── search.js                 # Search modal
│   │   └── accessibility.js          # Accessibility widget
│   ├── img/                          # Images
│   └── vendor/                       # Third-party libraries
├── nginx.conf                        # Nginx config (Docker)
├── supervisord.conf                  # Supervisor config (Docker)
├── docker-compose.yml
├── Dockerfile
├── .dockerignore
└── .gitignore
```

## License

Template: [Medicio](https://bootstrapmade.com/medicio-free-bootstrap-theme/) - BootstrapMade
