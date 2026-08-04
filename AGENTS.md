# AGENTS.md

Static landing page for **UPT Labkesmas Tingkat 3 Kalimantan Tengah** (government health lab site).

## Stack
- Pure static **multi-page HTML** site. No build, bundler, package manager, or test runner. There is **no `package.json`**.
- Built on the [Medicio](https://bootstrapmade.com/medicio-free-bootstrap-theme/) Bootstrap 5 template, customized to Indonesian.
- All libraries are vendored locally under `assets/vendor/` (Bootstrap, AOS, GLightbox, Swiper, FontAwesome, etc.). Do not `npm install`; assets are committed.

## Layout
- `index.html` is the homepage. All subpages are flat `inner-*.html` files at repo root (sejarah, visimisi, sotk, tupoksi, akreditasi, galeri, video, ppid, tracking, simulasi, profilkepala, etc.).
- Shared styles: `assets/css/style.css`. Shared JS is inline in each HTML file (no central JS bundle).

## Forms are non-functional
- `forms/contact.php` and `forms/appointment.php` depend on the **pro-only** "PHP Email Form" library (`assets/vendor/php-email-form/php-email-form.php`), which is NOT in the repo. They will `die()` at runtime. Only `assets/vendor/php-email-form/validate.js` (JS-side validation) exists. Treat forms as placeholders unless that library is added.

## External integrations
- Most real functionality (SPKP survey, WBS, Lapor, SI MUTLAK, SIAP RESPON, Buku Tamu, SI BAHALAB, Login app) lives on **external URLs** linked from the navbar, not in this repo. Do not try to "fix" them locally.

## Command conventions (important)
- This repo's `CLAUDE.md` mandates the **RTK** tool: prefix dev/build/tooling commands with `rtk` (e.g. `rtk git add .`, `rtk git commit`). Honor this for any git or tooling command run here.

## Verification
- No automated tests. Manual check: open `index.html` and `inner-*.html` in a browser, or serve the folder (Caddy, port 8888) and confirm assets load. Watch for broken asset paths — some slide images originally used spaces in filenames; they were renamed to hyphenated (e.g. `assets/img/slide/foto-bersama.jpeg`).
