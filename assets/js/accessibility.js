/* Accessibility Widget - LABKESMAS 3 KALTENG */
(function () {
  var sizes = [14, 16, 18, 20];
  var labels = ["Kecil", "Normal", "Besar", "Sangat Besar"];
  var current = 1;

  function init() {
    var css = document.createElement("style");
    css.textContent =
      ".a11y-fab{position:fixed!important;bottom:20px!important;left:20px!important;z-index:99999!important}" +
      ".a11y-fab button#a11yToggle{width:48px;height:48px;border-radius:50%;border:none;background:#0284c7;color:#fff;font-size:1.5rem;cursor:pointer;box-shadow:0 4px 16px rgba(0,0,0,.25);display:flex;align-items:center;justify-content:center;margin:0;padding:0}" +
      ".a11y-fab button#a11yToggle:hover{background:#0369a1}" +
      ".a11y-panel{display:none;position:absolute;bottom:60px;left:0;background:#fff;border-radius:12px;box-shadow:0 8px 32px rgba(0,0,0,.2);padding:20px;width:260px}" +
      ".a11y-panel.open{display:block}" +
      ".a11y-panel h4{margin:0 0 14px;font-size:1rem;font-weight:700}" +
      ".a11y-group{margin-bottom:12px}" +
      ".a11y-group label{display:block;font-size:.85rem;font-weight:600;margin-bottom:6px}" +
      ".a11y-btns{display:flex;gap:6px}" +
      ".a11y-btns button{flex:1;padding:6px;border:1px solid #dee2e6;border-radius:6px;background:#fff;font-size:.82rem;cursor:pointer}" +
      ".a11y-btns button:hover,.a11y-btns button.active{background:#0284c7;color:#fff;border-color:#0284c7}" +
      ".a11y-btns span{flex:1;text-align:center;font-size:.85rem;line-height:32px}";
    document.head.appendChild(css);

    var wrap = document.createElement("div");
    wrap.className = "a11y-fab";
    wrap.innerHTML =
      '<button id="a11yToggle" aria-label="Pengaturan Aksesibilitas" title="Aksesibilitas">' +
        '<i class="bi bi-universal-access"></i>' +
      '</button>' +
      '<div class="a11y-panel" id="a11yPanel">' +
        '<h4>Aksesibilitas</h4>' +
        '<div class="a11y-group">' +
          '<label>Ukuran Teks</label>' +
          '<div class="a11y-btns">' +
            '<button id="a11yFontDown" aria-label="Perkecil teks"><i class="bi bi-dash"></i></button>' +
            '<span id="a11yFontLabel">Normal</span>' +
            '<button id="a11yFontUp" aria-label="Perbesar teks"><i class="bi bi-plus"></i></button>' +
          '</div>' +
        '</div>' +
        '<div class="a11y-group">' +
          '<label>Kontras</label>' +
          '<div class="a11y-btns">' +
            '<button id="a11yContrastNormal" class="active">Normal</button>' +
            '<button id="a11yContrastHigh">Tinggi</button>' +
          '</div>' +
        '</div>' +
        '<div class="a11y-group">' +
          '<label>Hapus Animasi</label>' +
          '<div class="a11y-btns">' +
            '<button id="a11yAnimOff">Ya</button>' +
            '<button id="a11yAnimOn" class="active">Tidak</button>' +
          '</div>' +
        '</div>' +
      '</div>';
    document.body.appendChild(wrap);

    var toggle = document.getElementById("a11yToggle");
    var panel = document.getElementById("a11yPanel");
    var fontLabel = document.getElementById("a11yFontLabel");

    // Load saved
    try {
      var saved = JSON.parse(localStorage.getItem("a11y") || "{}");
      if (typeof saved.font === "number") { current = saved.font; applyFont(); }
      if (saved.contrast === "high") { document.body.classList.add("a11y-high-contrast"); setActive("high"); }
      if (saved.anim === false) { document.body.classList.add("a11y-no-animation"); setActive("noanim"); }
    } catch (e) {}

    toggle.addEventListener("click", function (e) {
      e.stopPropagation();
      panel.classList.toggle("open");
    });

    document.addEventListener("click", function (e) {
      if (!wrap.contains(e.target)) panel.classList.remove("open");
    });

    document.getElementById("a11yFontUp").addEventListener("click", function () {
      if (current < 3) { current++; applyFont(); save(); }
    });
    document.getElementById("a11yFontDown").addEventListener("click", function () {
      if (current > 0) { current--; applyFont(); save(); }
    });

    document.getElementById("a11yContrastHigh").addEventListener("click", function () {
      document.body.classList.add("a11y-high-contrast");
      setActive("high"); save();
    });
    document.getElementById("a11yContrastNormal").addEventListener("click", function () {
      document.body.classList.remove("a11y-high-contrast");
      setActive("normal"); save();
    });

    document.getElementById("a11yAnimOff").addEventListener("click", function () {
      document.body.classList.add("a11y-no-animation");
      setActive("noanim"); save();
    });
    document.getElementById("a11yAnimOn").addEventListener("click", function () {
      document.body.classList.remove("a11y-no-animation");
      setActive("on"); save();
    });

    function applyFont() {
      document.documentElement.style.fontSize = sizes[current] + "px";
      if (fontLabel) fontLabel.textContent = labels[current];
    }

    function setActive(mode) {
      var cn = document.getElementById("a11yContrastNormal");
      var ch = document.getElementById("a11yContrastHigh");
      var ao = document.getElementById("a11yAnimOn");
      var af = document.getElementById("a11yAnimOff");
      if (mode === "high") { cn.classList.remove("active"); ch.classList.add("active"); }
      else if (mode === "normal") { ch.classList.remove("active"); cn.classList.add("active"); }
      else if (mode === "noanim") { ao.classList.remove("active"); af.classList.add("active"); }
      else if (mode === "on") { af.classList.remove("active"); ao.classList.add("active"); }
    }

    function save() {
      localStorage.setItem("a11y", JSON.stringify({
        font: current,
        contrast: document.body.classList.contains("a11y-high-contrast") ? "high" : "normal",
        anim: !document.body.classList.contains("a11y-no-animation")
      }));
    }
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", init);
  } else {
    init();
  }
})();
