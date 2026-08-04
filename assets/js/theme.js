/* =========================================================
   LABKESMAS 3 KALTENG — theme.js
   GSAP float + reveal (cheap transform/opacity).
   Native scroll is used (Lenis disabled for snappier feel).
   Requires (loaded before this file):
     - GSAP + ScrollTrigger (window.gsap, window.ScrollTrigger)
   Degrades gracefully if any lib is missing.
   ========================================================= */
(function () {
  "use strict";

  const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  /* ---------- GSAP float + reveal (cheap transform/opacity) ----------
     Lenis smooth scroll is disabled — native scroll is used (snappier).
     ScrollTrigger updates automatically on native scroll. */
  if (window.gsap && window.ScrollTrigger && !reduceMotion) {
    gsap.registerPlugin(ScrollTrigger);

    // Hero card gentle float (transform only — GPU friendly)
    const heroCard = document.querySelector(".hero-card");
    if (heroCard) {
      gsap.to(heroCard, {
        y: -12,
        duration: 3.2,
        ease: "sine.inOut",
        repeat: -1,
        yoyo: true,
      });
    }

    // Reveal on scroll for elements marked .reveal
    gsap.utils.toArray(".reveal").forEach((el) => {
      gsap.from(el, {
        y: 32,
        opacity: 0,
        duration: 0.7,
        ease: "power2.out",
        scrollTrigger: { trigger: el, start: "top 88%" },
      });
    });
  }
})();
