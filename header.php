<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(''); ?>>
<?php wp_body_open(); ?>

<style>
/* ── Hamburger → X animation ──────────────────────────────── */
#ham-btn {
  background: none;
  border: none;
  cursor: pointer;
  padding: 8px;
  width: 40px;
  height: 40px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 5px;
  position: relative;
  z-index: 201; /* always on top so click works */
}
.ham-l {
  display: block;
  width: 24px;
  height: 2px;
  background: #F8F8FF;
  border-radius: 2px;
  transition: transform 0.35s ease, opacity 0.25s ease, width 0.3s ease;
  transform-origin: center;
}
/* Open state — lines become X */
#ham-btn.is-open .ham-l:nth-child(1) { transform: translateY(7px) rotate(45deg); }
#ham-btn.is-open .ham-l:nth-child(2) { opacity: 0; width: 0; }
#ham-btn.is-open .ham-l:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

/* ── Mobile nav overlay ───────────────────────────────────── */
#mobile-nav {
  display: none;
  position: fixed;
  inset: 0;
  z-index: 200; /* same as navbar so logo row shows above it */
  background: rgba(10,10,15,0.97);
  backdrop-filter: blur(24px);
  -webkit-backdrop-filter: blur(24px);
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 28px;
  padding-top: 80px; /* space below the logo/ham row */
}
#mobile-nav a {
  font-family: 'Space Grotesk', sans-serif;
  font-size: 26px;
  font-weight: 700;
  color: #F8F8FF;
  text-decoration: none;
  transition: color 0.2s;
  letter-spacing: -0.01em;
}
#mobile-nav a:hover { color: #6C63FF; }

/* ── Desktop only ─────────────────────────────────────────── */
@media (min-width: 768px) {
  #ham-btn     { display: none !important; }
  #mobile-nav  { display: none !important; }
  #desktop-links { display: flex !important; }
  #nav-cta       { display: inline-flex !important; }  
} 
</style>

<!-- ═══════════════════════════════════════════════════════════
     NAVIGATION
════════════════════════════════════════════════════════════ -->
<nav id="navbar" style="position:fixed;top:0;left:0;right:0;z-index:201;padding:14px 0px;transition:background 0.3s,padding 0.3s,border 0.3s;">
  <div style="max-width:1200px;margin:0 auto;padding:0 20px;display:flex;align-items:center;justify-content:space-between;" class="lg:px-0">

    <!-- Logo -->
    <a href="<?php echo home_url('/'); ?>" style="display:flex;align-items:center;gap:10px;text-decoration:none;position:relative;z-index:202;">
      <div style="width:36px;height:36px;border-radius:10px;background:linear-gradient(135deg,#6C63FF,#FF6B6B);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
      </div>
      <span style="font-family:'Space Grotesk',sans-serif;font-weight:800;font-size:19px;color:#F8F8FF;white-space:nowrap;">MNTech<span style="background:linear-gradient(135deg,#6C63FF,#FF6B6B);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Studio</span></span>
    </a>

    <!-- Desktop nav links (hidden on mobile via CSS) -->
    <div id="desktop-links" style="display:none;align-items:center;gap:32px;">
      <a href="#services"     style="font-size:14px;font-weight:500;color:#B8B8D0;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#F8F8FF'" onmouseout="this.style.color='#B8B8D0'">Services</a>
      <a href="#process"      style="font-size:14px;font-weight:500;color:#B8B8D0;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#F8F8FF'" onmouseout="this.style.color='#B8B8D0'">Process</a>
      <a href="#portfolio"    style="font-size:14px;font-weight:500;color:#B8B8D0;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#F8F8FF'" onmouseout="this.style.color='#B8B8D0'">Work</a>
      <a href="#pricing"      style="font-size:14px;font-weight:500;color:#B8B8D0;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#F8F8FF'" onmouseout="this.style.color='#B8B8D0'">Pricing</a>
      <a href="#testimonials" style="font-size:14px;font-weight:500;color:#B8B8D0;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#F8F8FF'" onmouseout="this.style.color='#B8B8D0'">Reviews</a>
      <a href="#contact"      style="font-size:14px;font-weight:500;color:#B8B8D0;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#F8F8FF'" onmouseout="this.style.color='#B8B8D0'">Contact</a>
    </div>

    <!-- Right: CTA + hamburger -->
    <div style="display:flex;align-items:center;gap:10px;">
      <!-- Desktop CTA (hidden on mobile via CSS) -->
      <a href="#contact" id="nav-cta" style="display:none;background:linear-gradient(135deg,#6C63FF,#8B5CF6);color:#fff;padding:10px 20px;border-radius:8px;font-size:14px;font-weight:700;font-family:'Space Grotesk',sans-serif;text-decoration:none;white-space:nowrap;transition:transform 0.3s,box-shadow 0.3s;" onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 8px 24px rgba(108,99,255,0.4)'" onmouseout="this.style.transform='';this.style.boxShadow=''">
        Get Free Quote →
      </a>

      <!-- Hamburger button — animates to X -->
      <button id="ham-btn" onclick="toggleNav()" aria-label="Toggle menu" aria-expanded="false">
        <span class="ham-l"></span>
        <span class="ham-l"></span>
        <span class="ham-l"></span>
      </button>
    </div>

  </div>
</nav>

<!-- ═══════════════════════════════════════════════════════════
     MOBILE NAV OVERLAY
     (no separate close button — hamburger IS the close button)
════════════════════════════════════════════════════════════ -->
<div id="mobile-nav" role="dialog" aria-modal="true" aria-label="Navigation menu">
  <a href="#services"     onclick="toggleNav()">Services</a>
  <a href="#process"      onclick="toggleNav()">Process</a>
  <a href="#portfolio"    onclick="toggleNav()">Work</a>
  <a href="#pricing"      onclick="toggleNav()">Pricing</a>
  <a href="#testimonials" onclick="toggleNav()">Reviews</a>
  <a href="#contact"      onclick="toggleNav()">Contact</a>
  <a href="#contact" onclick="toggleNav()" style="background:linear-gradient(135deg,#FF6B6B,#FF8E53);color:#fff !important;padding:15px 36px;border-radius:10px;font-size:16px;margin-top:8px;">Get Free Quote →</a>
</div>

<script>
/* ── Nav scroll effect ──────────────────────────────────────── */
const _nav = document.getElementById('navbar');
window.addEventListener('scroll', function () {
  if (window.scrollY > 60) {
    _nav.style.background    = 'rgba(10,10,15,0.95)';
    _nav.style.backdropFilter = 'blur(20px)';
    _nav.style.webkitBackdropFilter = 'blur(20px)';
    _nav.style.padding       = '10px 0';
    _nav.style.borderBottom  = '1px solid rgba(108,99,255,0.15)';
  } else {
    _nav.style.background    = 'transparent';
    _nav.style.backdropFilter = '';
    _nav.style.webkitBackdropFilter = '';
    _nav.style.padding       = '14px 0';
    _nav.style.borderBottom  = 'none';
  }
}, { passive: true });

/* ── Single toggle function — hamburger becomes X ───────────── */
function toggleNav() {
  const overlay = document.getElementById('mobile-nav');
  const btn     = document.getElementById('ham-btn');
  const isOpen  = overlay.style.display === 'flex';

  if (isOpen) {
    /* CLOSE */
    overlay.style.display = 'none';
    btn.classList.remove('is-open');
    btn.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  } else {
    /* OPEN */
    overlay.style.display = 'flex';
    btn.classList.add('is-open');
    btn.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
  }
}

/* ── Close on Escape key ────────────────────────────────────── */
document.addEventListener('keydown', function (e) {
  if (e.key === 'Escape' && document.getElementById('mobile-nav').style.display === 'flex') {
    toggleNav();
  }
});

/* ── Smooth scroll + auto-close nav on link click ───────────── */
document.addEventListener('click', function (e) {
  const a = e.target.closest('a[href^="#"]');
  if (!a) return;
  const href = a.getAttribute('href');
  if (!href || href === '#') return;
  e.preventDefault();
  const target = document.querySelector(href);
  if (target) {
    window.scrollTo({
      top: target.getBoundingClientRect().top + window.pageYOffset - 70,
      behavior: 'smooth'
    });
  }
  /* Close nav if open */
  if (document.getElementById('mobile-nav').style.display === 'flex') toggleNav();
});

/* ── Legacy aliases (theme.js may call these) ───────────────── */
window.toggleMenu       = toggleNav;
window.toggleMobileNav  = toggleNav;
</script>