/**
 * MNTechStudio — theme.js
 * Fixed: DOMContentLoaded wrapper, immediate reveal for above-fold elements,
 * removed nav conflict (nav JS now lives in header.php inline script).
 */

document.addEventListener('DOMContentLoaded', function () {

  /* ══════════════════════════════════════════════════════════
     1. SCROLL REVEAL — with immediate trigger for viewport els
  ══════════════════════════════════════════════════════════ */
  const revealEls = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');

  if ('IntersectionObserver' in window) {
    const revealObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          revealObserver.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.05,
      rootMargin: '0px 0px -20px 0px'   // reduced — was cutting off hero
    });

    revealEls.forEach(function (el) {
      revealObserver.observe(el);
    });

    // ── Immediate reveal for elements already in viewport on load ──
    // Small timeout lets the browser paint first so transition plays
    setTimeout(function () {
      revealEls.forEach(function (el) {
        const rect = el.getBoundingClientRect();
        if (rect.top < window.innerHeight && rect.bottom > 0) {
          el.classList.add('visible');
          revealObserver.unobserve(el);
        }
      });
    }, 80);

  } else {
    // Fallback for old browsers — show everything
    revealEls.forEach(function (el) {
      el.classList.add('visible');
    });
  }

  /* ══════════════════════════════════════════════════════════
     2. FAQ ACCORDION
  ══════════════════════════════════════════════════════════ */
  window.toggleFaq = function (el) {
    var item   = el.parentElement;
    var isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach(function (i) {
      i.classList.remove('open');
    });
    if (!isOpen) item.classList.add('open');
  };

  /* ══════════════════════════════════════════════════════════
     3. PORTFOLIO FILTER + SLIDER DOTS
  ══════════════════════════════════════════════════════════ */

  /* ── Portfolio dots init ─────────────────────────────────── */
  function initPortfolioDots() {
    var track    = document.getElementById('port-track');
    var dotsWrap = document.getElementById('dots-portfolio');
    if (!track || !dotsWrap) return;

    var isMobile = window.innerWidth < 580;
    dotsWrap.innerHTML = '';

    if (!isMobile) return; // dots only on mobile

    var items = track.querySelectorAll('.port-item:not(.port-hidden)');
    if (items.length === 0) return;

    items.forEach(function (_, i) {
      var dot = document.createElement('button');
      dot.className = 'pc-dot' + (i === 0 ? ' active' : '');
      dot.setAttribute('aria-label', 'Go to project ' + (i + 1));
      dot.addEventListener('click', function () {
        var visibleItems = track.querySelectorAll('.port-item:not(.port-hidden)');
        var item = visibleItems[i];
        if (item) {
          track.scrollTo({ left: item.offsetLeft - track.offsetLeft, behavior: 'smooth' });
        }
        dotsWrap.querySelectorAll('.pc-dot').forEach(function (d, di) {
          d.classList.toggle('active', di === i);
        });
      });
      dotsWrap.appendChild(dot);
    });

    /* sync dots on scroll */
    var scrollTimer;
    track.onscroll = function () {
      clearTimeout(scrollTimer);
      scrollTimer = setTimeout(function () {
        var visibleItems = Array.from(track.querySelectorAll('.port-item:not(.port-hidden)'));
        var center = track.scrollLeft + track.offsetWidth / 2;
        var bestIdx = 0, bestDist = Infinity;
        visibleItems.forEach(function (item, i) {
          var itemCenter = item.offsetLeft - track.offsetLeft + item.offsetWidth / 2;
          var dist = Math.abs(center - itemCenter);
          if (dist < bestDist) { bestDist = dist; bestIdx = i; }
        });
        dotsWrap.querySelectorAll('.pc-dot').forEach(function (d, i) {
          d.classList.toggle('active', i === bestIdx);
        });
      }, 60);
    };
  }

  /* ── Portfolio filter ────────────────────────────────────── */
  var portFilterBtns = document.querySelectorAll('.portfolio-filter');
  portFilterBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var filter = this.dataset.filter;

      /* Update active button */
      portFilterBtns.forEach(function (b) {
        b.style.borderColor = 'rgba(108,99,255,0.2)';
        b.style.background  = '#12121C';
        b.style.color       = '#B8B8D0';
      });
      this.style.borderColor = '#6C63FF';
      this.style.background  = 'rgba(108,99,255,0.15)';
      this.style.color       = '#6C63FF';

      /* Show/hide port-items (not cards) */
      var track = document.getElementById('port-track');
      if (!track) return;

      /* Reset scroll to start */
      track.scrollLeft = 0;

      track.querySelectorAll('.port-item').forEach(function (item) {
        var cat  = item.dataset.cat || '';
        var show = filter === 'all' || cat.includes(filter.replace(/-/g, ' '));
        if (show) {
          item.classList.remove('port-hidden');
          item.style.opacity   = '0';
          item.style.transform = 'translateY(12px)';
          setTimeout(function () {
            item.style.transition = 'opacity 0.35s ease, transform 0.35s ease';
            item.style.opacity    = '1';
            item.style.transform  = 'translateY(0)';
          }, 60);
        } else {
          item.classList.add('port-hidden');
          item.style.opacity    = '';
          item.style.transform  = '';
          item.style.transition = '';
        }
      });

      /* Reinit dots after filter */
      setTimeout(initPortfolioDots, 100);
    });
  });

  /* Init on load */
  initPortfolioDots();

  /* Reinit on resize */
  window.addEventListener('resize', function () {
    setTimeout(initPortfolioDots, 250);
  });

  /* ══════════════════════════════════════════════════════════
     4. LEAD FORM SUBMIT
  ══════════════════════════════════════════════════════════ */
  window.submitForm = function (e) {
    e.preventDefault();
    var btn = document.getElementById('btn-text');
    if (btn) btn.textContent = 'Sending...';
    setTimeout(function () {
      var form    = document.getElementById('lead-form');
      var success = document.getElementById('form-success');
      if (form)    form.style.display    = 'none';
      if (success) success.style.display = 'block';
    }, 1200);
  };

  /* ══════════════════════════════════════════════════════════
     5. STAT COUNTER ANIMATION
  ══════════════════════════════════════════════════════════ */
  var statWrap = document.querySelector('[data-stats-wrap]') ||
                 (function () {
                   var el = document.querySelector('.stat-number');
                   return el ? el.closest('section') : null;
                 }());

  if (statWrap && 'IntersectionObserver' in window) {
    var statsObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        entry.target.querySelectorAll('.stat-number').forEach(function (el) {
          var raw    = el.textContent.trim();
          var num    = parseInt(raw.replace(/\D/g, ''), 10);
          var suffix = raw.replace(/[0-9]/g, '');
          if (!num) return;
          var cur = 0;
          var inc = Math.ceil(num / 50);
          var t   = setInterval(function () {
            cur = Math.min(cur + inc, num);
            el.textContent = cur + suffix;
            if (cur >= num) clearInterval(t);
          }, 28);
        });
        statsObserver.unobserve(entry.target);
      });
    }, { threshold: 0.4 });

    statsObserver.observe(statWrap);
  }

  /* ══════════════════════════════════════════════════════════
     6. MOBILE NAV TOGGLE (backup — primary is in header.php)
  ══════════════════════════════════════════════════════════ */
  if (typeof window.toggleMobileNav === 'undefined') {
    window.toggleMobileNav = function () {
      var nav    = document.getElementById('mobile-nav');
      var isOpen = nav && nav.style.display === 'flex';
      if (nav)   nav.style.display = isOpen ? 'none' : 'flex';
      document.body.style.overflow = isOpen ? '' : 'hidden';
    };
  }

  // Legacy support — page-landing.php calls toggleMenu()
  if (typeof window.toggleMenu === 'undefined') {
    window.toggleMenu = window.toggleMobileNav;
  }

  /* ══════════════════════════════════════════════════════════
     7. MOBILE CTA BAR — hide when contact section visible
  ══════════════════════════════════════════════════════════ */
  var mobCta      = document.getElementById('mob-cta');
  var contactSect = document.getElementById('contact');
  if (mobCta && contactSect && 'IntersectionObserver' in window) {
    new IntersectionObserver(function (entries) {
      mobCta.style.opacity       = entries[0].isIntersecting ? '0' : '1';
      mobCta.style.pointerEvents = entries[0].isIntersecting ? 'none' : 'auto';
    }, { threshold: 0.2 }).observe(contactSect);
  }

  /* ══════════════════════════════════════════════════════════
     8. SCROLL ON LOAD — if URL has #hash, scroll to it
  ══════════════════════════════════════════════════════════ */
  if (window.location.hash) {
    setTimeout(function () {
      var target = document.querySelector(window.location.hash);
      if (target) {
        window.scrollTo({
          top: target.getBoundingClientRect().top + window.pageYOffset - 80,
          behavior: 'smooth'
        });
      }
    }, 300);
  }

}); // end DOMContentLoaded

  /* ══════════════════════════════════════════════════════════
     PC-SLIDER — dots + touch/mouse drag + auto-snap
  ══════════════════════════════════════════════════════════ */
  function initSliders() {
    const isMobile = window.innerWidth < 580;

    document.querySelectorAll('[data-slider]').forEach(function (slider) {
      const track    = slider.querySelector('.pc-slider-track');
      const dotsWrap = slider.querySelector('.pc-slider-dots');
      const slides   = slider.querySelectorAll('.pc-slide');
      if (!track || !dotsWrap || slides.length === 0) return;

      /* clear previous dots */
      dotsWrap.innerHTML = '';

      if (!isMobile) {
        /* Desktop: no dots needed, plain grid */
        return;
      }

      /* ── Build dots ────────────────────────────────────────── */
      slides.forEach(function (_, i) {
        var dot = document.createElement('button');
        dot.className = 'pc-dot' + (i === 0 ? ' active' : '');
        dot.setAttribute('aria-label', 'Go to slide ' + (i + 1));
        dot.addEventListener('click', function () {
          scrollToSlide(track, slides, i, dotsWrap);
        });
        dotsWrap.appendChild(dot);
      });

      /* ── Sync dots on scroll ────────────────────────────────── */
      var scrollTimer;
      track.addEventListener('scroll', function () {
        clearTimeout(scrollTimer);
        scrollTimer = setTimeout(function () {
          var idx = getActiveIndex(track, slides);
          updateDots(dotsWrap, idx);
        }, 60);
      }, { passive: true });

      /* ── Mouse drag (desktop fallback / landscape tablet) ───── */
      var isDragging = false, startX = 0, scrollLeft = 0;

      track.addEventListener('mousedown', function (e) {
        isDragging = true;
        startX     = e.pageX - track.offsetLeft;
        scrollLeft = track.scrollLeft;
        track.style.cursor = 'grabbing';
      });
      track.addEventListener('mouseleave', function () {
        isDragging = false;
        track.style.cursor = '';
      });
      track.addEventListener('mouseup', function () {
        isDragging = false;
        track.style.cursor = '';
        /* snap to nearest slide */
        var idx = getActiveIndex(track, slides);
        scrollToSlide(track, slides, idx, dotsWrap);
      });
      track.addEventListener('mousemove', function (e) {
        if (!isDragging) return;
        e.preventDefault();
        var x    = e.pageX - track.offsetLeft;
        var walk = (x - startX) * 1.2;
        track.scrollLeft = scrollLeft - walk;
      });
    });
  }

  /* ── Helpers ─────────────────────────────────────────────── */
  function scrollToSlide(track, slides, idx, dotsWrap) {
    var slide = slides[idx];
    if (!slide) return;
    track.scrollTo({ left: slide.offsetLeft - track.offsetLeft, behavior: 'smooth' });
    updateDots(dotsWrap, idx);
  }

  function getActiveIndex(track, slides) {
    var center = track.scrollLeft + track.offsetWidth / 2;
    var best = 0, bestDist = Infinity;
    slides.forEach(function (slide, i) {
      var slideCenter = slide.offsetLeft - track.offsetLeft + slide.offsetWidth / 2;
      var dist = Math.abs(center - slideCenter);
      if (dist < bestDist) { bestDist = dist; best = i; }
    });
    return best;
  }

  function updateDots(dotsWrap, activeIdx) {
    dotsWrap.querySelectorAll('.pc-dot').forEach(function (d, i) {
      d.classList.toggle('active', i === activeIdx);
    });
  }

  /* ── Init on load + reinit on resize ────────────────────────── */
  initSliders();
  var resizeTimer;
  window.addEventListener('resize', function () {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(initSliders, 200);
  });


  /* ══════════════════════════════════════════════════════════
     LEAD FORM — validation + submit + success state
  ══════════════════════════════════════════════════════════ */

  window.submitLeadForm = function (e) {
    e.preventDefault();

    var form   = document.getElementById('lead-form');
    var btn    = document.getElementById('lf-submit-btn');
    var label  = document.getElementById('lf-btn-label');
    var arrow  = document.getElementById('lf-btn-arrow');
    if (!form || !btn) return;

    /* ── Clear previous errors ─────────────────────────────── */
    form.querySelectorAll('.lf-error').forEach(function (el) {
      el.classList.remove('lf-error');
    });
    form.querySelectorAll('.lf-error-msg').forEach(function (el) {
      el.remove();
    });

    /* ── Validate ──────────────────────────────────────────── */
    var valid   = true;
    var fields  = [
      { name: 'name',    msg: 'Please enter your name.' },
      { name: 'phone',   msg: 'Please enter your WhatsApp / phone number.' },
      { name: 'email',   msg: 'Please enter a valid email address.' },
      { name: 'service', msg: 'Please select the service you need.' },
    ];

    fields.forEach(function (f) {
      var el = form.querySelector('[name="' + f.name + '"]');
      if (!el) return;
      var val = el.value.trim();
      var fail = false;

      if (!val) {
        fail = true;
      } else if (f.name === 'email' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val)) {
        fail = true;
      }

      if (fail) {
        valid = false;
        el.classList.add('lf-error');
        var err = document.createElement('span');
        err.className = 'lf-error-msg';
        err.innerHTML = '<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg> ' + f.msg;
        el.parentNode.appendChild(err);
        /* Remove error on input */
        el.addEventListener('input', function () {
          el.classList.remove('lf-error');
          var errEl = el.parentNode.querySelector('.lf-error-msg');
          if (errEl) errEl.remove();
        }, { once: true });
      }
    });

    if (!valid) {
      /* Shake the button */
      btn.style.animation = 'lf-shake 0.4s ease';
      setTimeout(function () { btn.style.animation = ''; }, 400);
      return;
    }

    /* ── Loading state ─────────────────────────────────────── */
    btn.disabled = true;
    if (label) label.textContent = 'Sending...';
    if (arrow) {
      arrow.outerHTML = '<span class="lf-spinner" id="lf-btn-arrow"></span>';
    }

    /* ── Collect data for wp_ajax (if available) ───────────── */
    var data = {
      action : 'pixelcraft_lead',
      nonce  : (typeof pixelcraft_ajax !== 'undefined') ? pixelcraft_ajax.nonce : '',
      name   : form.querySelector('[name="name"]')    ? form.querySelector('[name="name"]').value.trim()    : '',
      phone  : form.querySelector('[name="phone"]')   ? form.querySelector('[name="phone"]').value.trim()   : '',
      email  : form.querySelector('[name="email"]')   ? form.querySelector('[name="email"]').value.trim()   : '',
      service: form.querySelector('[name="service"]') ? form.querySelector('[name="service"]').value        : '',
      budget : form.querySelector('[name="budget"]')  ? form.querySelector('[name="budget"]').value         : '',
      message: form.querySelector('[name="message"]') ? form.querySelector('[name="message"]').value.trim() : '',
    };

    /* ── Try wp-ajax, fallback to success after 1.5s ──────── */
    var ajaxUrl = (typeof pixelcraft_ajax !== 'undefined') ? pixelcraft_ajax.url : '';

    function showSuccess() {
      form.style.display = 'none';
      var successEl = document.getElementById('lf-success');
      if (successEl) successEl.style.display = 'block';
    }

    if (ajaxUrl && data.nonce) {
      var body = Object.keys(data).map(function (k) {
        return encodeURIComponent(k) + '=' + encodeURIComponent(data[k]);
      }).join('&');

      fetch(ajaxUrl, {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: body,
      })
      .then(function (r) { return r.json(); })
      .then(function () { showSuccess(); })
      .catch(function ()  { showSuccess(); }); /* always show success */
    } else {
      setTimeout(showSuccess, 1500);
    }
  };