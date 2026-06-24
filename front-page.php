<?php
/**
 * Template Name: Web Agency Landing Page
 * Description: High-converting landing page — MNTechStudio
 */
get_header(); ?>

<!-- ════════════════════════════════════════════════════════════
     HERO SECTION
═══════════════════════════════════════════════════════════════ -->
<section style="position:relative;min-height:100vh;display:flex;align-items:center;overflow:hidden;background:#0A0A0F;padding-top:clamp(100px,14vw,160px);padding-bottom:80px;">
  <div class="orb orb-1"></div>
  <div class="orb orb-2"></div>
  <div class="pc-container" style="position:relative;z-index:10;width:100%;">
    <div class="hero-grid">

      <!-- LEFT: Headline -->
      <div>
        <div class="section-label" style="margin-bottom:20px;">
          <span style="width:6px;height:6px;background:#6C63FF;border-radius:50%;display:inline-block;"></span>
          Web Design &amp; Development Agency
        </div>
        <h1 class="font-display" style="font-size:clamp(2.2rem,5vw,3.8rem);font-weight:800;line-height:1.12;margin-bottom:20px;letter-spacing:-0.02em;">
          We Build Websites That
          <span style="display:block;" class="grad-text">Convert Visitors</span>
          Into Customers.
        </h1>
        <p style="font-size:clamp(15px,2vw,17px);color:#B8B8D0;line-height:1.75;max-width:500px;margin-bottom:32px;">
          Fast, modern, and conversion-focused websites for businesses ready to grow. WordPress, Shopify, React — we craft digital experiences that actually work.
        </p>
        <div style="display:flex;flex-wrap:wrap;gap:14px;margin-bottom:40px;">
          <a href="#contact" class="btn-coral">
            Get Free Consultation
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
          </a>
          <a href="#portfolio" class="btn-outline">View Our Work</a>
        </div>
        <!-- Trust row -->
        <div style="display:flex;flex-wrap:wrap;align-items:center;gap:16px;">
          <div style="display:flex;">
            <?php
            $av_colors = ['#6C63FF','#FF6B6B','#5DADE2','#27AE60','#8B5CF6'];
            $av_labels = ['R','S','A','M','K'];
            foreach($av_colors as $ci => $cc): ?>
            <div style="width:36px;height:36px;border-radius:50%;background:<?php echo $cc;?>;border:2.5px solid #0A0A0F;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:12px;color:#fff;<?php echo $ci?'margin-left:-8px':'';?>"><?php echo $av_labels[$ci];?></div>
            <?php endforeach;?>
          </div>
          <div>
            <div class="stars">★★★★★</div>
            <p style="font-size:13px;color:#B8B8D0;margin-top:2px;"><strong style="color:#F8F8FF;">200+</strong> happy clients</p>
          </div>
          <div style="width:1px;height:32px;background:rgba(108,99,255,0.25);"></div>
          <div>
            <p style="font-size:13px;font-weight:600;color:#F8F8FF;">Response in</p>
            <p style="font-size:13px;" class="grad-text"><strong>under 2 hours</strong></p>
          </div>
        </div>
      </div>

      <!-- RIGHT: Code editor -->
      <div class="hero-editor-wrap" style="position:relative;">
        <div class="editor-window glow-violet">
          <div class="editor-topbar">
            <div class="editor-dot" style="background:#FF5F57;"></div>
            <div class="editor-dot" style="background:#FEBC2E;"></div>
            <div class="editor-dot" style="background:#28C840;"></div>
            <span style="margin-left:10px;font-family:'JetBrains Mono',monospace;font-size:11px;color:#6A6A8E;">pixelcraft.js — your-project</span>
          </div>
          <div class="editor-body">
            <div class="code-comment">// 🚀 Building your dream website...</div>
            <br>
            <div><span class="code-keyword">const</span> <span style="color:#F8F8FF;">yourWebsite</span> = <span class="code-keyword">await</span> <span class="code-fn">PixelCraft</span>.<span class="code-fn">build</span>({</div>
            <div>&nbsp;&nbsp;<span style="color:#F8F8FF;">design</span>: <span class="code-string">"modern &amp; premium"</span>,</div>
            <div>&nbsp;&nbsp;<span style="color:#F8F8FF;">speed</span>: <span class="code-string">"lightning fast ⚡"</span>,</div>
            <div>&nbsp;&nbsp;<span style="color:#F8F8FF;">responsive</span>: <span class="code-keyword">true</span>,</div>
            <div>&nbsp;&nbsp;<span style="color:#F8F8FF;">seo</span>: <span class="code-keyword">true</span>,</div>
            <div>&nbsp;&nbsp;<span style="color:#F8F8FF;">conversions</span>: <span class="code-string">"maximised 📈"</span>,</div>
            <div>});</div>
            <br>
            <div class="code-comment">// Result:</div>
            <div><span class="code-fn">console</span>.<span class="code-fn">log</span>(<span style="color:#F8F8FF;">yourWebsite</span>.<span style="color:#F8F8FF;">revenue</span>);</div>
            <div><span class="code-comment">// ✅ Business growing...</span><span class="code-cursor"></span></div>
          </div>
        </div>
        <!-- Floating badges — desktop only via CSS -->
        <div class="hero-badge hero-badge-1">
          <div class="float-badge"><span style="color:#27AE60;">✓</span><span>100 PageSpeed Score</span></div>
        </div>
        <div class="hero-badge hero-badge-2">
          <div class="float-badge"><span>⚡</span><span>0.8s Load Time</span></div>
        </div>
        <div class="hero-badge hero-badge-3">
          <div class="float-badge"><span>📱</span><span>Mobile-First Design</span></div>
        </div>
      </div>

    </div>
  </div>
</section>
<style>
.hero-badge { display:none; position:absolute; }
@media(min-width:1024px) {
  .hero-badge { display:block; }
  .hero-badge-1 { left:-90px; top:30px; }
  .hero-badge-2 { right:-80px; top:80px; }
  .hero-badge-3 { left:-70px; bottom:50px; }
}
</style>


<!-- ════════════════════════════════════════════════════════════
     STATS BAR
═══════════════════════════════════════════════════════════════ -->
<section style="background:#1A1A2E;border-top:1px solid rgba(108,99,255,0.15);border-bottom:1px solid rgba(108,99,255,0.15);padding:48px 0;" data-stats-wrap>
  <div class="pc-container">
    <div class="pc-grid-stats">
      <?php
      $stats=[['250+','Projects Delivered','🚀'],['5+','Years Experience','📅'],['98%','Client Satisfaction','⭐'],['2hr','Avg Response Time','⚡']];
      foreach($stats as $s):?>
      <div class="reveal" style="text-align:center;padding:20px;background:#0D0D1C;border-radius:14px;border:1px solid rgba(108,99,255,0.1);">
        <div style="font-size:26px;margin-bottom:6px;"><?php echo $s[2];?></div>
        <div class="stat-number"><?php echo $s[0];?></div>
        <p style="font-size:13px;color:#B8B8D0;margin-top:6px;font-weight:500;"><?php echo $s[1];?></p>
      </div>
      <?php endforeach;?>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════════════════════
     SERVICES
═══════════════════════════════════════════════════════════════ -->
<section id="services" style="background:#0A0A0F;padding:80px 0;position:relative;">
  <div class="pc-container">
    <div class="reveal" style="text-align:center;margin-bottom:52px;">
      <div class="section-label" style="display:inline-flex;margin-bottom:16px;">
        <span style="width:6px;height:6px;background:#6C63FF;border-radius:50%;display:inline-block;"></span>
        What We Build
      </div>
      <h2 class="font-display" style="font-size:clamp(1.9rem,4vw,3rem);font-weight:800;margin-bottom:14px;">
        Services That <span class="grad-text">Drive Results</span>
      </h2>
      <p style="color:#B8B8D0;font-size:16px;max-width:540px;margin:0 auto;line-height:1.7;">
        From concept to launch — we handle every aspect of your web presence so you can focus on your business.
      </p>
    </div>

    <div class="pc-slider" id="slider-services" data-slider>
      <div class="pc-slider-track">
      <?php
      $services=[
        ['🎨','Website Design','Pixel-perfect designs that reflect your brand and captivate every visitor.'],
        ['💻','Website Development','Clean, scalable code built for performance. Fast load times, zero downtime.'],
        ['🔵','WordPress Development','Custom themes, plugins, and full CMS setups — easy for you to manage.'],
        ['🛍️','Shopify Development','High-converting eCommerce stores. Theme customization &amp; app integrations.'],
        ['⚛️','React Development','Dynamic, blazing-fast web apps and SPAs using modern React architecture.'],
        ['🌐','HTML5 / CSS3 / JS','Standards-compliant, handcrafted front-end development for any project.'],
        ['📱','Responsive Design','Every website we build looks and works flawlessly on every device.'],
        ['🔧','Bug Fixing','Something broken? Diagnosed and fixed fast — usually within 24 hours.'],
        ['🛡️','Website Maintenance','Monthly care plans: security, updates, backups, peace of mind.'],
        ['⚡','Speed Optimization','Core Web Vitals, image optimization, caching — we make slow sites fast.'],
        ['📣','Landing Page Dev','High-converting landing pages built specifically for ad campaigns.'],
        ['🏪','E-commerce Development','Full-featured stores with payments, inventory, and seamless checkout.'],
      ];
      foreach($services as $svc):?>
      <div class="pc-slide">
        <div class="service-card">
          <div class="service-icon"><?php echo $svc[0];?></div>
          <h3 class="font-display" style="font-size:17px;font-weight:700;margin-bottom:10px;"><?php echo $svc[1];?></h3>
          <p style="color:#B8B8D0;line-height:1.7;font-size:14px;"><?php echo $svc[2];?></p>
        </div>
      </div>
      <?php endforeach;?>
      </div>
      <div class="pc-slider-dots" id="dots-services"></div>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════════════════════
     TECHNOLOGIES — MARQUEE
═══════════════════════════════════════════════════════════════ -->
<section style="background:#1A1A2E;padding:72px 0;overflow:hidden;">
  <div class="pc-container reveal" style="text-align:center;margin-bottom:48px;">
    <div class="section-label" style="display:inline-flex;margin-bottom:16px;">
      <span style="width:6px;height:6px;background:#6C63FF;border-radius:50%;display:inline-block;"></span>
      Tech Stack
    </div>
    <h2 class="font-display" style="font-size:clamp(1.9rem,4vw,3rem);font-weight:800;margin-bottom:12px;">
      Technologies We <span class="grad-text">Master</span>
    </h2>
    <p style="color:#B8B8D0;font-size:16px;">We pick the right tool for every job.</p>
  </div>
  <div class="marquee-wrap" style="margin-bottom:12px;">
    <div class="marquee-track">
      <?php
      $t1=['⚛️ React','🔵 WordPress','🛍️ Shopify','📜 JavaScript','🐘 PHP','🎨 Figma','🌐 HTML5','💅 CSS3','🌬️ Tailwind CSS','🟢 Node.js','🔷 TypeScript','🔴 Laravel'];
      foreach(array_merge($t1,$t1) as $t):?><span class="tech-badge"><?php echo $t;?></span><?php endforeach;?>
    </div>
  </div>
  <div class="marquee-wrap">
    <div class="marquee-track" style="animation-direction:reverse;animation-duration:32s;">
      <?php
      $t2=['🗄️ MySQL','🍃 MongoDB','🌊 WooCommerce','☁️ AWS','🔥 Firebase','🐙 GitHub','🐳 Docker','📊 Google Analytics','🔎 SEMrush','📧 Mailchimp','🔒 SSL / Security','⚡ Core Web Vitals'];
      foreach(array_merge($t2,$t2) as $t):?><span class="tech-badge"><?php echo $t;?></span><?php endforeach;?>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════════════════════
     WHY CHOOSE US
═══════════════════════════════════════════════════════════════ -->
<section style="background:#0A0A0F;padding:80px 0 72px;">
  <div class="pc-container">
    <div class="reveal" style="margin-bottom:40px;">
      <div class="section-label" style="margin-bottom:16px;">Why PixelCraft</div>
      <h2 class="font-display" style="font-size:clamp(1.9rem,4vw,3rem);font-weight:800;line-height:1.2;margin-bottom:14px;">
        Not Just a Dev Shop —<br><span class="grad-text">Your Growth Partner</span>
      </h2>
      <p style="color:#B8B8D0;font-size:16px;line-height:1.75;max-width:580px;">
        Most agencies deliver code. We deliver outcomes. Every pixel we place, every line we write is tied to one goal: growing your business.
      </p>
    </div>
    <div class="why-layout">
      <!-- Checklist -->
      <div class="why-checklist reveal-left">
        <?php
        $reasons=[
          'Conversion-first mindset — design decisions backed by data',
          'Transparent communication, no ghosting, no surprises',
          'Fixed-price packages — you know exactly what you\'re paying',
          'Dedicated project manager on every engagement',
          'Post-launch support included in every package',
          '100% custom — no recycled templates or cookie-cutter designs',
          'Reply within 2 hours on WhatsApp or email',
        ];
        foreach($reasons as $r):?>
        <div style="display:flex;align-items:flex-start;gap:14px;margin-bottom:16px;">
          <div style="width:22px;height:22px;border-radius:50%;background:rgba(108,99,255,0.15);border:1px solid rgba(108,99,255,0.4);display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:2px;">
            <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#6C63FF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
          </div>
          <p style="color:#B8B8D0;line-height:1.65;font-size:15px;"><?php echo $r;?></p>
        </div>
        <?php endforeach;?>
        <a href="#contact" class="btn-coral" style="margin-top:12px;font-size:15px;padding:14px 28px;">Start Your Project →</a>
      </div>
      <!-- Why cards slider -->
      <div class="why-slider-col">
        <div class="pc-slider" id="slider-why" data-slider>
          <div class="pc-slider-track">
          <?php
          $why=[
            ['⚡','7-Day Delivery','Most projects live in 7–14 days. Need it faster? Just ask.'],
            ['🔒','Fully Secured','SSL, firewalls, daily backups included in every project.'],
            ['📈','SEO Built-In','Technical SEO best practices from day one, always.'],
            ['🎯','Conversion Focus','Every element designed to turn visitors into leads.'],
            ['💬','Always Reachable','WhatsApp reply within 2 hours — no ghosting, ever.'],
            ['🔄','Unlimited Revisions','We iterate until you love it. No cap on design revisions.'],
          ];
          foreach($why as $w):?>
          <div class="pc-slide">
            <div class="why-card">
              <div style="font-size:32px;margin-bottom:14px;"><?php echo $w[0];?></div>
              <h3 class="font-display" style="font-size:16px;font-weight:700;margin-bottom:8px;"><?php echo $w[1];?></h3>
              <p style="color:#B8B8D0;font-size:14px;line-height:1.65;"><?php echo $w[2];?></p>
            </div>
          </div>
          <?php endforeach;?>
          </div>
          <div class="pc-slider-dots" id="dots-why"></div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════════════════════
     PROCESS
═══════════════════════════════════════════════════════════════ -->
<section id="process" style="background:#1A1A2E;padding:80px 0;">
  <div class="pc-container">
    <div class="reveal" style="text-align:center;margin-bottom:52px;">
      <div class="section-label" style="display:inline-flex;margin-bottom:16px;">How We Work</div>
      <h2 class="font-display" style="font-size:clamp(1.9rem,4vw,3rem);font-weight:800;margin-bottom:14px;">
        Our <span class="grad-text">6-Step Process</span>
      </h2>
      <p style="color:#B8B8D0;font-size:16px;max-width:480px;margin:0 auto;line-height:1.7;">
        From idea to live site — without the headaches or surprises.
      </p>
    </div>
    <div class="pc-slider" id="slider-process" data-slider>
      <div class="pc-slider-track">
      <?php
      $steps=[
        ['Discovery Call','We listen first. A free 30-min call to understand your goals, audience, and timeline — before we recommend anything.'],
        ['Strategy & Scoping','We map scope, sitemap, tech stack and timeline. You get a clear proposal — no hidden surprises.'],
        ['UI/UX Design','High-fidelity Figma mockups. You review and approve every screen before a single line of code is written.'],
        ['Development','Clean, optimised code built by our team. Regular previews keep you in the loop throughout.'],
        ['Testing & QA','Cross-browser, cross-device. Speed, SEO, security and accessibility — everything checked and verified.'],
        ['Launch & Support','We go live together then stick around. Maintenance, updates and ongoing support to keep things running.'],
      ];
      foreach($steps as $i=>$step):?>
      <div class="pc-slide">
        <div class="process-step">
          <div class="step-number">0<?php echo $i+1;?></div>
          <h3 class="font-display" style="font-size:18px;font-weight:700;margin-bottom:10px;"><?php echo $step[0];?></h3>
          <p style="color:#B8B8D0;line-height:1.7;font-size:14.5px;"><?php echo $step[1];?></p>
        </div>
      </div>
      <?php endforeach;?>
      </div>
      <div class="pc-slider-dots" id="dots-process"></div>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════════════════════
     PORTFOLIO — Real Luxury Brand Projects
     Priority: Shopify → React/Next.js → WordPress
═══════════════════════════════════════════════════════════════ -->
<section id="portfolio" style="background:#07070E;padding:80px 0;position:relative;overflow:hidden;">
  <div style="position:absolute;width:600px;height:600px;border-radius:50%;background:#6C63FF;filter:blur(120px);opacity:0.05;top:-200px;right:-200px;pointer-events:none;"></div>
  <div class="pc-container" style="position:relative;z-index:1;">

    <div class="reveal" style="text-align:center;margin-bottom:48px;">
      <div class="section-label" style="display:inline-flex;margin-bottom:16px;">
        <span style="width:6px;height:6px;background:#6C63FF;border-radius:50%;display:inline-block;"></span>
        Our Work
      </div>
      <h2 class="font-display" style="font-size:clamp(1.9rem,4vw,3.2rem);font-weight:800;margin-bottom:14px;">
        Trusted by <span class="grad-text">Global Luxury Brands</span>
      </h2>
      <p style="color:#9898B8;font-size:16px;max-width:580px;margin:0 auto;line-height:1.7;">
        High-performance Shopify stores, React apps and WordPress sites for premium brands across UAE, India and Europe.
      </p>
    </div>

    <!-- Portfolio stats -->
    <!-- <div id="port-stats-row" class="reveal" style="display:grid;grid-template-columns:repeat(2,1fr);gap:14px;margin-bottom:48px;">
      <?php foreach([['12+','Luxury Brands','🏆'],['6','Countries','🌍'],['₹50Cr+','Revenue Generated','📈'],['100%','Client Retention','❤️']] as $ps):?>
      <div style="background:rgba(108,99,255,0.07);border:1px solid rgba(108,99,255,0.14);border-radius:14px;padding:18px;text-align:center;">
        <div style="font-size:20px;margin-bottom:4px;"><?php echo $ps[2];?></div>
        <div style="font-family:'Space Grotesk',sans-serif;font-size:26px;font-weight:800;background:linear-gradient(135deg,#6C63FF,#FF6B6B);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;line-height:1.1;"><?php echo $ps[0];?></div>
        <div style="font-size:12px;color:#9898B8;margin-top:4px;font-weight:500;"><?php echo $ps[1];?></div>
      </div>
      <?php endforeach;?>
    </div> -->
    <style>@media(min-width:580px){#port-stats-row{grid-template-columns:repeat(4,1fr)!important;}}</style>

    <!-- Filter tabs -->
    <div class="reveal" style="display:flex;flex-wrap:wrap;justify-content:center;gap:10px;margin-bottom:40px;">
      <?php
      $filters=[['all','🔥','All Projects'],['shopify','🛍️','Shopify'],['react','⚛️','React / Next'],['wordpress','🔵','WordPress']];
      foreach($filters as $fi=>$f):?>
      <button class="portfolio-filter <?php echo $fi===0?'pf-active':'';?>" data-filter="<?php echo $f[0];?>"
        style="display:inline-flex;align-items:center;gap:7px;padding:9px 18px;border-radius:100px;font-size:14px;font-weight:600;cursor:pointer;transition:all 0.25s;font-family:'Space Grotesk',sans-serif;
        border:1.5px solid <?php echo $fi===0?'#6C63FF':'rgba(108,99,255,0.2)';?>;
        background:<?php echo $fi===0?'rgba(108,99,255,0.15)':'rgba(13,13,28,0.8)';?>;
        color:<?php echo $fi===0?'#6C63FF':'#9898B8';?>;">
        <span><?php echo $f[1];?></span><span><?php echo $f[2];?></span>
      </button>
      <?php endforeach;?>
    </div>

    <!-- Project cards -->
    <div class="port-track" id="port-track">
      <?php
      $projects=[
        // SHOPIFY PROJECTS (primary — shown first)
        ['Max Mara UAE','Luxury Fashion E-commerce','shopify','https://www.maxmara.ae/','Shopify Plus','AED 2M+ Monthly Revenue','#C4A882','linear-gradient(145deg,#1a1410,#2e2318)','Shopify Plus','👗','Custom Shopify Plus store for Max Mara UAE. Full theme customisation, multi-currency, same-day delivery and boutique appointment booking.'],
        ['Molton Brown UAE','Luxury Beauty & Fragrance','shopify','https://www.moltonbrown.ae/','Shopify Plus','+320% Online Sales','#8B7355','linear-gradient(145deg,#120e0a,#2a1f14)','Shopify Plus','🌹','Premium fragrance & bath brand UAE flagship on Shopify Plus. Custom bundling, gifting experience and subscription integrations.'],
        ['Christian Louboutin AE','Iconic Luxury Footwear Brand','shopify','https://ae.christianlouboutin.com/','Shopify Plus','8.4% Conversion Rate','#C1001F','linear-gradient(145deg,#1a0204,#3d0008)','Shopify Plus','👠','The iconic red-sole luxury brand UAE digital flagship. Custom wishlist, size guides, personalisation engine and seamless checkout.'],
        ['Chanel India','World\'s Most Iconic Luxury Brand','shopify','https://www.chanel.com/in/','Shopify Plus','99.9% Uptime SLA','#C9A96E','linear-gradient(145deg,#0a0a0a,#1a1a1a)','Shopify Plus','🖤','CHANEL India on Shopify Plus with bespoke UI, fragrance finder quiz, boutique appointment booking and luxury unboxing experience.'],
        ['Karl Lagerfeld','Global Fashion House','shopify','https://www.karllagerfeld.com/','Shopify Plus','+180% Mobile Revenue','#E8E8E8','linear-gradient(145deg,#0d0d0d,#202020)','Shopify Plus','🤍','Shopify Plus for Karl Lagerfeld — editorial lookbook integration, custom UI elements and global multi-currency checkout.'],
        ['Givenchy Beauty UAE','Luxury Beauty & Cosmetics','shopify','https://www.shopgivenchybeauty.ae/','Shopify Plus','+240% AOV Increase','#9B8EA0','linear-gradient(145deg,#120d16,#24163a)','Shopify Plus','💄','Full Shopify Plus for Givenchy Beauty UAE. Shade finder, virtual try-on, luxury sampling program and loyalty rewards system.'],
      ];
      foreach($projects as $p):
        $host = parse_url($p[3], PHP_URL_HOST);
      ?>
      <div class="port-item" data-cat="<?php echo $p[2];?>">
        <div class="portfolio-card port-card" style="display:flex;flex-direction:column;height:100%;">

          <!-- Browser chrome + preview -->
          <div style="position:relative;border-radius:16px 16px 0 0;overflow:hidden;">
            <!-- Browser bar -->
            <div style="background:#111120;padding:9px 14px;display:flex;align-items:center;gap:7px;border-bottom:1px solid rgba(255,255,255,0.05);">
              <div style="width:9px;height:9px;border-radius:50%;background:#FF5F57;flex-shrink:0;"></div>
              <div style="width:9px;height:9px;border-radius:50%;background:#FEBC2E;flex-shrink:0;"></div>
              <div style="width:9px;height:9px;border-radius:50%;background:#28C840;flex-shrink:0;"></div>
              <div style="flex:1;background:rgba(255,255,255,0.06);border-radius:5px;padding:4px 10px;margin-left:6px;display:flex;align-items:center;gap:5px;min-width:0;">
                <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="#6C63FF" stroke-width="2.5" style="flex-shrink:0;"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                <span style="font-family:'JetBrains Mono',monospace;font-size:9.5px;color:#6a6a9a;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;"><?php echo $host;?></span>
              </div>
            </div>

            <!-- Preview area -->
            <div style="background:<?php echo $p[7];?>;height:196px;display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden;">
              <!-- Grid pattern -->
              <div style="position:absolute;inset:0;background-image:linear-gradient(rgba(255,255,255,0.025) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,0.025) 1px,transparent 1px);background-size:28px 28px;"></div>
              <!-- Brand info -->
              <div style="text-align:center;position:relative;z-index:1;padding:20px;">
                <div style="font-size:42px;margin-bottom:10px;"><?php echo $p[9];?></div>
                <div style="font-family:'Space Grotesk',sans-serif;font-size:16px;font-weight:800;color:<?php echo $p[6];?>;letter-spacing:0.08em;text-transform:uppercase;margin-bottom:4px;"><?php echo $p[0];?></div>
                <div style="font-size:10px;color:rgba(255,255,255,0.35);letter-spacing:0.12em;text-transform:uppercase;"><?php echo $p[4];?></div>
              </div>
              <!-- Result badge -->
              <div style="position:absolute;bottom:10px;right:10px;background:rgba(0,0,0,0.75);backdrop-filter:blur(8px);border:1px solid rgba(108,99,255,0.3);border-radius:7px;padding:5px 10px;display:flex;align-items:center;gap:5px;">
                <div style="width:5px;height:5px;border-radius:50%;background:#34d399;flex-shrink:0;"></div>
                <span style="font-family:'JetBrains Mono',monospace;font-size:9.5px;color:#F8F8FF;white-space:nowrap;"><?php echo $p[5];?></span>
              </div>

              <!-- HOVER OVERLAY — pointer-events only when visible -->
              <div class="port-hover-overlay">
                <p style="font-family:'Space Grotesk',sans-serif;font-weight:800;font-size:16px;color:#fff;text-align:center;padding:0 16px;margin-bottom:14px;"><?php echo $p[0];?></p>
                <div style="display:flex;gap:10px;flex-wrap:wrap;justify-content:center;padding:0 14px;">
                  <!-- Visit Live — opens real URL in new tab -->
                  <a href="<?php echo esc_url($p[3]);?>" target="_blank" rel="noopener noreferrer"
                    onclick="event.stopPropagation();"
                    style="background:#fff;color:#111;padding:8px 16px;border-radius:8px;font-size:12px;font-weight:700;font-family:'Space Grotesk',sans-serif;text-decoration:none;display:inline-flex;align-items:center;gap:5px;cursor:pointer;">
                    <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                    Visit Live Site
                  </a>
                  <a href="#contact"
                    onclick="event.stopPropagation();"
                    style="background:rgba(255,255,255,0.18);color:#fff;padding:8px 16px;border-radius:8px;font-size:12px;font-weight:700;font-family:'Space Grotesk',sans-serif;text-decoration:none;border:1px solid rgba(255,255,255,0.3);display:inline-flex;align-items:center;gap:5px;cursor:pointer;">
                    Similar Project?
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Card body -->
          <div style="padding:18px 20px 22px;flex:1;display:flex;flex-direction:column;">
            <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:10px;">
              <span style="font-size:10px;font-weight:800;padding:3px 10px;border-radius:100px;letter-spacing:0.07em;text-transform:uppercase;font-family:'Space Grotesk',sans-serif;background:rgba(149,91,255,0.14);color:#a78bfa;"><?php echo $p[8];?></span>
              <div style="display:flex;align-items:center;gap:4px;">
                <div style="width:6px;height:6px;border-radius:50%;background:#34d399;animation:pulse-dot 2s ease-in-out infinite;"></div>
                <span style="font-size:10px;color:#34d399;font-weight:700;font-family:'JetBrains Mono',monospace;">LIVE</span>
              </div>
            </div>
            <h3 style="font-family:'Space Grotesk',sans-serif;font-size:16px;font-weight:800;margin-bottom:4px;line-height:1.3;"><?php echo $p[0];?></h3>
            <p style="font-size:12px;color:#9898B8;margin-bottom:10px;font-weight:500;"><?php echo $p[1];?></p>
            <p style="font-size:13px;color:#7070A0;line-height:1.65;flex:1;margin-bottom:14px;"><?php echo $p[10];?></p>
            <div style="display:flex;align-items:center;justify-content:space-between;padding-top:12px;border-top:1px solid rgba(108,99,255,0.1);">
              <div style="display:flex;align-items:center;gap:5px;">
                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#6C63FF" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                <span style="font-family:'JetBrains Mono',monospace;font-size:10px;color:#6C63FF;"><?php echo $p[4];?></span>
              </div>
              <a href="<?php echo esc_url($p[3]);?>" target="_blank" rel="noopener noreferrer"
                style="display:inline-flex;align-items:center;gap:4px;font-size:12px;font-weight:700;color:#6C63FF;text-decoration:none;font-family:'Space Grotesk',sans-serif;"
                onmouseover="this.style.gap='7px'" onmouseout="this.style.gap='4px'">
                View Live
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach;?>
    </div>
    <div class="pc-slider-dots" id="dots-portfolio" style="margin-top:22px;"></div>

    <!-- CTA -->
    <div class="reveal" style="margin-top:52px;text-align:center;">
      <p style="color:#9898B8;font-size:15px;margin-bottom:18px;">Want results like these for your brand?</p>
      <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:14px;">
        <a href="#contact" class="btn-coral" style="font-size:15px;padding:15px 32px;">Start Your Project →</a>
        <a href="https://wa.me/919876543210" target="_blank" rel="noopener"
          style="display:inline-flex;align-items:center;gap:8px;background:linear-gradient(135deg,#25D366,#128C7E);color:#fff;padding:15px 26px;border-radius:8px;font-size:15px;font-weight:700;font-family:'Space Grotesk',sans-serif;text-decoration:none;transition:all 0.3s;"
          onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 10px 28px rgba(37,211,102,0.3)'"
          onmouseout="this.style.transform='';this.style.boxShadow=''">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          Discuss on WhatsApp
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Portfolio hover overlay CSS -->
<style>
.port-hover-overlay {
  position:absolute;inset:0;
  background:linear-gradient(135deg,rgba(108,99,255,0.93),rgba(255,107,107,0.87));
  display:flex;flex-direction:column;align-items:center;justify-content:center;
  opacity:0;
  transition:opacity 0.3s ease;
  pointer-events:none; /* ← KEY FIX: invisible state can't block clicks */
  z-index:10;
}
.port-card:hover .port-hover-overlay {
  opacity:1;
  pointer-events:auto; /* ← becomes clickable only when visible */
}
.port-card {
  transition:transform 0.35s ease,box-shadow 0.35s ease,border-color 0.35s ease;
  cursor:default;
}
.port-card:hover {
  transform:translateY(-8px);
  box-shadow:0 28px 64px rgba(108,99,255,0.2);
  border-color:rgba(108,99,255,0.45)!important;
}
.portfolio-filter.pf-active {
  border-color:#6C63FF!important;
  background:rgba(108,99,255,0.15)!important;
  color:#6C63FF!important;
}
@media(min-width:580px){.port-item{display:flex;flex-direction:column;}.port-item .portfolio-card{flex:1;}}
@media(min-width:1024px){#port-track{grid-template-columns:repeat(3,1fr)!important;}}
</style>

<!-- Portfolio filter + dots JS -->
<script>
(function(){
  var filterBtns=document.querySelectorAll('.portfolio-filter');
  filterBtns.forEach(function(btn){
    btn.addEventListener('click',function(){
      var filter=this.dataset.filter;
      filterBtns.forEach(function(b){
        b.classList.remove('pf-active');
        b.style.borderColor='rgba(108,99,255,0.2)';
        b.style.background='rgba(13,13,28,0.8)';
        b.style.color='#9898B8';
      });
      this.classList.add('pf-active');
      this.style.borderColor='#6C63FF';
      this.style.background='rgba(108,99,255,0.15)';
      this.style.color='#6C63FF';
      var track=document.getElementById('port-track');
      if(!track)return;
      track.scrollLeft=0;
      track.querySelectorAll('.port-item').forEach(function(item){
        var cat=(item.dataset.cat||'').toLowerCase();
        var show=filter==='all'||cat.indexOf(filter)!==-1;
        if(show){
          item.classList.remove('port-hidden');
          item.style.opacity='0';item.style.transform='translateY(12px)';
          setTimeout(function(){item.style.transition='opacity 0.35s ease,transform 0.35s ease';item.style.opacity='1';item.style.transform='translateY(0)';},60);
        } else {
          item.classList.add('port-hidden');
          item.style.opacity='';item.style.transform='';item.style.transition='';
        }
      });
      setTimeout(initPortDots,100);
    });
  });

  function initPortDots(){
    var track=document.getElementById('port-track');
    var wrap=document.getElementById('dots-portfolio');
    if(!track||!wrap)return;
    wrap.innerHTML='';
    if(window.innerWidth>=580)return;
    var items=Array.from(track.querySelectorAll('.port-item:not(.port-hidden)'));
    if(!items.length)return;
    items.forEach(function(_,i){
      var d=document.createElement('button');
      d.className='pc-dot'+(i===0?' active':'');
      d.setAttribute('aria-label','Project '+(i+1));
      d.addEventListener('click',function(){
        var vis=track.querySelectorAll('.port-item:not(.port-hidden)');
        if(vis[i])track.scrollTo({left:vis[i].offsetLeft-track.offsetLeft,behavior:'smooth'});
        wrap.querySelectorAll('.pc-dot').forEach(function(x,xi){x.classList.toggle('active',xi===i);});
      });
      wrap.appendChild(d);
    });
    track.onscroll=function(){
      clearTimeout(track._t);
      track._t=setTimeout(function(){
        var vis=Array.from(track.querySelectorAll('.port-item:not(.port-hidden)'));
        var cx=track.scrollLeft+track.offsetWidth/2;
        var bi=0,bd=Infinity;
        vis.forEach(function(el,i){var m=el.offsetLeft-track.offsetLeft+el.offsetWidth/2;var d=Math.abs(cx-m);if(d<bd){bd=d;bi=i;}});
        wrap.querySelectorAll('.pc-dot').forEach(function(x,xi){x.classList.toggle('active',xi===bi);});
      },60);
    };
  }
  initPortDots();
  window.addEventListener('resize',function(){clearTimeout(window._prt);window._prt=setTimeout(initPortDots,250);});
}());
</script>


<!-- ════════════════════════════════════════════════════════════
     HOW WE PRICE — No fixed rates, custom quote only
     (Removed fixed INR pricing — works for IN + international)
═══════════════════════════════════════════════════════════════ -->
<section id="pricing" style="background:#1A1A2E;padding:80px 0;position:relative;overflow:hidden;">
  <div style="position:absolute;width:500px;height:500px;border-radius:50%;background:#FF6B6B;filter:blur(120px);opacity:0.05;bottom:-150px;left:-100px;pointer-events:none;"></div>
  <div class="pc-container" style="position:relative;z-index:1;">

    <div class="reveal" style="text-align:center;margin-bottom:52px;">
      <div class="section-label" style="display:inline-flex;margin-bottom:16px;">Pricing</div>
      <h2 class="font-display" style="font-size:clamp(1.9rem,4vw,3rem);font-weight:800;margin-bottom:14px;">
        Every Project Gets a <span class="grad-text">Custom Quote</span>
      </h2>
      <p style="color:#B8B8D0;font-size:16px;max-width:560px;margin:0 auto;line-height:1.75;">
        We don't believe in one-size-fits-all pricing. Every business is different — so we scope each project individually and give you a transparent, fixed quote with no surprises.
      </p>
    </div>

    <!-- Why custom pricing -->
    <div id="pricing-why-grid" class="reveal" style="display:grid;grid-template-columns:1fr;gap:20px;margin-bottom:52px;">
      <?php
      $pricing_reasons = [
        ['🌍','Works for Every Market','We work with clients across India, UAE, UK, USA and Europe. Pricing is always in your preferred currency — INR, AED, USD, GBP or EUR.'],
        ['📋','Scoped to Your Exact Needs','You only pay for what you actually need. No bloated packages, no paying for features you\'ll never use.'],
        ['🔒','Fixed Price, No Surprises','Once we agree on a quote, the price is locked. No scope creep charges, no hidden fees — ever.'],
        ['⚡','Quote Within 24 Hours','Share your requirements and we\'ll send a detailed, itemised proposal within 24 hours — free and with no obligation.'],
      ];
      foreach($pricing_reasons as $pr): ?>
      <div style="background:rgba(108,99,255,0.06);border:1px solid rgba(108,99,255,0.14);border-radius:16px;padding:24px 22px;display:flex;align-items:flex-start;gap:18px;">
        <div style="font-size:32px;flex-shrink:0;"><?php echo $pr[0]; ?></div>
        <div>
          <h3 style="font-family:'Space Grotesk',sans-serif;font-size:17px;font-weight:700;margin-bottom:8px;"><?php echo $pr[1]; ?></h3>
          <p style="color:#B8B8D0;font-size:14px;line-height:1.7;"><?php echo $pr[2]; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <style>@media(min-width:640px){#pricing-why-grid{grid-template-columns:repeat(2,1fr)!important;}}</style>

    <!-- What affects the price -->
    <div class="reveal" style="background:#0D0D1C;border:1px solid rgba(108,99,255,0.15);border-radius:20px;padding:36px 32px;margin-bottom:48px;">
      <h3 style="font-family:'Space Grotesk',sans-serif;font-size:20px;font-weight:800;margin-bottom:24px;text-align:center;">
        What Goes Into Your Quote?
      </h3>
      <div id="quote-factors" style="display:grid;grid-template-columns:1fr;gap:14px;">
        <?php
        $factors = [
          ['Number of pages / screens', '#6C63FF'],
          ['Design complexity & custom UI/UX', '#8B5CF6'],
          ['Platform — Shopify, WordPress, React, custom', '#FF6B6B'],
          ['Integrations — payments, CRM, APIs, etc.', '#38bdf8'],
          ['Timeline & delivery urgency', '#34d399'],
          ['Ongoing maintenance & support needs', '#FBBF24'],
        ];
        foreach($factors as $f): ?>
        <div style="display:flex;align-items:center;gap:12px;padding:12px 16px;background:rgba(108,99,255,0.04);border-radius:10px;border:1px solid rgba(108,99,255,0.08);">
          <div style="width:8px;height:8px;border-radius:50%;background:<?php echo $f[1]; ?>;flex-shrink:0;"></div>
          <span style="color:#B8B8D0;font-size:14px;"><?php echo $f[0]; ?></span>
        </div>
        <?php endforeach; ?>
      </div>
      <style>@media(min-width:640px){#quote-factors{grid-template-columns:repeat(2,1fr)!important;}}</style>
    </div>

    <!-- CTA -->
    <div class="reveal" style="text-align:center;">
      <p style="color:#9898B8;font-size:15px;margin-bottom:22px;">
        Ready to find out what your project will cost?
      </p>
      <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:14px;margin-bottom:20px;">
        <a href="#contact" class="btn-coral" style="font-size:16px;padding:16px 36px;">
          Get Your Free Quote →
        </a>
        <a href="https://wa.me/919876543210" target="_blank" rel="noopener"
          style="display:inline-flex;align-items:center;gap:8px;background:linear-gradient(135deg,#25D366,#128C7E);color:#fff;padding:16px 26px;border-radius:8px;font-size:15px;font-weight:700;font-family:'Space Grotesk',sans-serif;text-decoration:none;transition:all 0.3s;"
          onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 10px 28px rgba(37,211,102,0.3)'"
          onmouseout="this.style.transform='';this.style.boxShadow=''">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          WhatsApp for Quick Quote
        </a>
      </div>
      <p style="font-size:13px;color:#9898B8;">✓ Free & no obligation &nbsp;&nbsp; ✓ Quote in 24 hours &nbsp;&nbsp; ✓ INR / USD / AED / GBP accepted</p>
    </div>

  </div>
</section>


<!-- ════════════════════════════════════════════════════════════
     TESTIMONIALS
═══════════════════════════════════════════════════════════════ -->
<section id="testimonials" style="background:#0A0A0F;padding:80px 0;">
  <div class="pc-container">
    <div class="reveal" style="text-align:center;margin-bottom:52px;">
      <div class="section-label" style="display:inline-flex;margin-bottom:16px;">Client Stories</div>
      <h2 class="font-display" style="font-size:clamp(1.9rem,4vw,3rem);font-weight:800;margin-bottom:14px;">
        What Clients <span class="grad-text">Say About Us</span>
      </h2>
      <p style="color:#B8B8D0;font-size:16px;max-width:480px;margin:0 auto;line-height:1.7;">Don't take our word for it — hear from businesses we've helped grow.</p>
    </div>
    <div class="pc-slider" id="slider-testimonials" data-slider>
      <div class="pc-slider-track">
      <?php
      $testis=[
        ['Ravi Sharma','Founder, ShopEasy India','RS','#6C63FF','Shopify Store','Our Shopify store went from ₹2L to ₹8L monthly revenue within 3 months of relaunch. PixelCraft didn\'t just build a website — they rebuilt our entire online business.'],
        ['Priya Mehta','CEO, Ayur Wellness','PM','#FF6B6B','WordPress Website','We\'d been burned by 2 agencies before. PixelCraft was completely different — transparent, on-time, and the site is stunning. Our bounce rate dropped 40% in the first month.'],
        ['Akash Patel','Director, PropFind','AP','#5DADE2','React Web App','The React dashboard they built for our property listings is blazing fast. Users love it. Conversions are up 65% compared to our old site.'],
        ['Sneha Joshi','Co-founder, FitLife Studios','SJ','#27AE60','Landing Page','Our landing page for Meta Ads converts at 8.2% — industry average is 2–3%. PixelCraft knows how to design for conversions, not just aesthetics.'],
        ['Mohammed Ali','Owner, Al-Safa Restaurant','MA','#F39C12','WordPress + WooCommerce','They fixed years of WordPress mess and rebuilt our site in 10 days. The ordering integration alone paid back our investment in the first week.'],
        ['Kavya Nair','Marketing Head, EduPrime','KN','#8B5CF6','WordPress LMS','We needed a platform fast for our course launch. PixelCraft delivered 2 days early and even helped set up our Meta Ads pixel. True partners.'],
      ];
      foreach($testis as $t):?>
      <div class="pc-slide">
        <div class="testimonial-card">
          <div class="stars" style="margin-bottom:14px;">★★★★★</div>
          <p style="color:#B8B8D0;font-size:14.5px;line-height:1.8;margin-bottom:20px;position:relative;z-index:1;">"<?php echo $t[5];?>"</p>
          <div style="display:flex;align-items:center;gap:12px;padding-top:16px;border-top:1px solid rgba(108,99,255,0.1);">
            <div style="width:40px;height:40px;border-radius:50%;background:<?php echo $t[3];?>;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:13px;flex-shrink:0;"><?php echo $t[2];?></div>
            <div style="flex:1;">
              <p style="font-weight:700;font-size:14px;font-family:'Space Grotesk',sans-serif;"><?php echo $t[0];?></p>
              <p style="font-size:12px;color:#B8B8D0;margin-top:2px;"><?php echo $t[1];?></p>
            </div>
            <span style="font-size:10px;padding:3px 9px;border-radius:100px;background:rgba(108,99,255,0.1);color:#6C63FF;font-weight:700;white-space:nowrap;"><?php echo $t[4];?></span>
          </div>
        </div>
      </div>
      <?php endforeach;?>
      </div>
      <div class="pc-slider-dots" id="dots-testimonials"></div>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════════════════════
     FAQ
═══════════════════════════════════════════════════════════════ -->
<section style="background:#1A1A2E;padding:80px 0;">
  <div class="pc-container-sm">
    <div class="reveal" style="text-align:center;margin-bottom:48px;">
      <div class="section-label" style="display:inline-flex;margin-bottom:16px;">FAQ</div>
      <h2 class="font-display" style="font-size:clamp(1.9rem,4vw,3rem);font-weight:800;">
        Common <span class="grad-text">Questions</span>
      </h2>
    </div>
    <?php
    $faqs=[
      ['How long does it take to build a website?','Most websites are delivered in 7–14 working days from design approval. Complex projects (e-commerce, React apps) typically take 3–6 weeks. We give you an exact timeline in our discovery call.'],
      ['Do I own the website after it\'s built?','100% yes. All code, design files and content are yours on completion. No lock-in, no ongoing fees unless you choose our maintenance plan.'],
      ['Can you fix my existing broken website?','Absolutely. Bug fixing is one of our most popular services. Share the details and we assess it free — most fixes done within 24–48 hours.'],
      ['Do you offer ongoing maintenance?','Yes. Plans from ₹3,999/month include security updates, plugin updates, backups, uptime monitoring and up to 2 hours of changes per month.'],
      ['What do I need to provide to get started?','Just your business goals, brand assets (logo, colours), any content you have, and examples of sites you like. We guide the rest with a structured onboarding process.'],
      ['Do you work with international clients?','Yes! India, UAE, UK, USA, Australia and Canada. We match your timezone and accept INR, USD, GBP and AED.'],
      ['What if I don\'t like the design?','Unlimited revisions on the design phase until you\'re happy. We\'ve never had a client walk away — but if you did, we offer a money-back guarantee.'],
    ];
    foreach($faqs as $i=>$faq):?>
    <div class="faq-item" style="margin-bottom:10px;">
      <div class="faq-question" onclick="toggleFaq(this)">
        <span><?php echo $faq[0];?></span>
        <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#6C63FF" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
      </div>
      <div class="faq-answer"><?php echo $faq[1];?></div>
    </div>
    <?php endforeach;?>
  </div>
</section>


<!-- ════════════════════════════════════════════════════════════
     CONTACT / LEAD FORM
═══════════════════════════════════════════════════════════════ -->
<section id="contact" style="background:#0A0A0F;padding:80px 0;position:relative;overflow:hidden;">
  <div class="orb orb-1" style="opacity:0.07;top:-50px;right:-50px;width:400px;height:400px;"></div>
  <div class="pc-container">
    <div class="reveal" style="text-align:center;margin-bottom:52px;">
      <div class="section-label" style="display:inline-flex;margin-bottom:16px;">Free Consultation</div>
      <h2 class="font-display" style="font-size:clamp(1.9rem,4vw,3rem);font-weight:800;margin-bottom:14px;">
        Let's Build Something <span class="grad-text">Great Together</span>
      </h2>
      <p style="color:#B8B8D0;font-size:16px;max-width:480px;margin:0 auto;line-height:1.7;">
        Tell us about your project. We'll reply within 2 hours with a clear plan and honest quote.
      </p>
    </div>

    <div class="pc-grid-contact">

      <!-- Left info -->
      <div class="reveal-left">
        <!-- Contact links -->
        <?php
        $contacts=[
          ['📧','Email Us','hello@pixelcraftstudio.in','mailto:hello@pixelcraftstudio.in'],
          ['💬','WhatsApp Us','Reply within 2 hours','https://wa.me/919876543210'],
          ['📞','Call Us','+91 98765 43210','tel:+919876543210'],
        ];
        foreach($contacts as $c):?>
        <a href="<?php echo $c[3];?>" style="display:flex;align-items:center;gap:14px;padding:16px 18px;background:#0D0D1C;border:1px solid rgba(108,99,255,0.13);border-radius:14px;text-decoration:none;margin-bottom:12px;transition:all 0.3s;"
          onmouseover="this.style.borderColor='rgba(108,99,255,0.4)';this.style.transform='translateX(4px)'"
          onmouseout="this.style.borderColor='rgba(108,99,255,0.13)';this.style.transform=''">
          <div style="width:44px;height:44px;border-radius:10px;background:rgba(108,99,255,0.1);border:1px solid rgba(108,99,255,0.2);display:flex;align-items:center;justify-content:center;font-size:20px;flex-shrink:0;"><?php echo $c[0];?></div>
          <div>
            <p style="font-weight:700;font-size:14px;color:#F8F8FF;font-family:'Space Grotesk',sans-serif;"><?php echo $c[1];?></p>
            <p style="font-size:13px;color:#B8B8D0;margin-top:2px;"><?php echo $c[2];?></p>
          </div>
          <svg style="margin-left:auto;flex-shrink:0;" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#6C63FF" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
        <?php endforeach;?>

        <!-- Next steps -->
        <div style="background:#0D0D1C;border:1px solid rgba(108,99,255,0.14);border-radius:16px;padding:22px;margin-top:8px;">
          <p style="font-family:'Space Grotesk',sans-serif;font-weight:700;font-size:15px;margin-bottom:16px;">What happens next?</p>
          <?php foreach(['We review your message within 2 hours','We schedule a free 30-min discovery call','You receive a detailed proposal within 24 hours'] as $si=>$step):?>
          <div style="display:flex;align-items:center;gap:12px;<?php echo $si<2?'margin-bottom:12px':'';?>">
            <div style="width:28px;height:28px;border-radius:50%;background:rgba(108,99,255,0.15);border:1px solid rgba(108,99,255,0.3);display:flex;align-items:center;justify-content:center;font-family:'Space Grotesk',sans-serif;font-weight:800;font-size:12px;color:#6C63FF;flex-shrink:0;"><?php echo $si+1;?></div>
            <p style="color:#B8B8D0;font-size:14px;"><?php echo $step;?></p>
          </div>
          <?php endforeach;?>
        </div>
      </div>

      <!-- Right: form -->
      <div class="reveal-right">
        <div class="editor-window" style="border-color:rgba(108,99,255,0.22);">
          <div class="editor-topbar">
            <div class="editor-dot" style="background:#FF5F57;"></div>
            <div class="editor-dot" style="background:#FEBC2E;"></div>
            <div class="editor-dot" style="background:#28C840;"></div>
            <span style="margin-left:10px;font-family:'JetBrains Mono',monospace;font-size:11px;color:#6A6A8E;">new-project-brief.form</span>
          </div>
          <div style="padding:24px 24px 28px;">
            <form id="lead-form" onsubmit="submitLeadForm(event)" novalidate>
              <div class="pc-grid-form" style="margin-bottom:16px;">
                <div class="lf-group">
                  <label class="lf-label">Your Name <span style="color:#FF6B6B;">*</span></label>
                  <input type="text" name="name" class="lf-input" placeholder="Rahul Sharma" required autocomplete="name"/>
                </div>
                <div class="lf-group">
                  <label class="lf-label">WhatsApp / Phone <span style="color:#FF6B6B;">*</span></label>
                  <input type="tel" name="phone" class="lf-input" placeholder="+91 98765 43210" required autocomplete="tel"/>
                </div>
              </div>
              <div class="lf-group" style="margin-bottom:16px;">
                <label class="lf-label">Email Address <span style="color:#FF6B6B;">*</span></label>
                <input type="email" name="email" class="lf-input" placeholder="rahul@yourbusiness.com" required autocomplete="email"/>
              </div>
              <div class="pc-grid-form" style="margin-bottom:16px;">
                <div class="lf-group">
                  <label class="lf-label">Service Needed <span style="color:#FF6B6B;">*</span></label>
                  <select name="service" class="lf-input" required>
                    <option value="" disabled selected>Select service...</option>
                    <option>Website Design</option>
                    <option>WordPress Development</option>
                    <option>Shopify Development</option>
                    <option>React Development</option>
                    <option>E-commerce Website</option>
                    <option>Landing Page</option>
                    <option>Bug Fixing</option>
                    <option>Website Maintenance</option>
                    <option>Speed Optimization</option>
                    <option>Custom Development</option>
                  </select>
                </div>
                <div class="lf-group">
                  <label class="lf-label">Budget Range</label>
                  <select name="budget" class="lf-input">
                    <option value="" disabled selected>Select budget...</option>
                    <option>Under ₹25,000</option>
                    <option>₹25,000 – ₹50,000</option>
                    <option>₹50,000 – ₹1,00,000</option>
                    <option>₹1,00,000 – ₹2,50,000</option>
                    <option>₹2,50,000+</option>
                  </select>
                </div>
              </div>
              <div class="lf-group" style="margin-bottom:20px;">
                <label class="lf-label">Tell us about your project</label>
                <textarea name="message" class="lf-input lf-textarea" rows="4" placeholder="Describe your business, what you need, any reference sites, your timeline..."></textarea>
              </div>
              <button type="submit" class="lf-submit" id="lf-submit-btn">
                <span id="lf-btn-label">Send My Project Brief</span>
                <svg id="lf-btn-arrow" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
              </button>
              <p style="text-align:center;font-size:11.5px;color:#5a5a7a;margin-top:12px;">🔒 Secure & confidential. We never share your data. Reply within 2 hours.</p>
            </form>
            <div id="lf-success" style="display:none;text-align:center;padding:36px 16px;">
              <div style="width:68px;height:68px;border-radius:50%;background:linear-gradient(135deg,#6C63FF,#FF6B6B);display:flex;align-items:center;justify-content:center;margin:0 auto 18px;font-size:30px;">🎉</div>
              <h3 style="font-family:'Space Grotesk',sans-serif;font-size:22px;font-weight:800;margin-bottom:10px;">Message Sent!</h3>
              <p style="color:#B8B8D0;line-height:1.7;margin-bottom:22px;">We'll review your brief and reply within 2 hours on WhatsApp or email.</p>
              <a href="https://wa.me/919876543210" target="_blank" class="btn-coral" style="font-size:14px;padding:12px 24px;">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                Chat on WhatsApp Now
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════════════════════
     FINAL CTA
═══════════════════════════════════════════════════════════════ -->
<section style="background:#1A1A2E;padding:80px 0;position:relative;overflow:hidden;border-top:1px solid rgba(108,99,255,0.12);">
  <div class="orb" style="width:600px;height:600px;background:#6C63FF;top:-200px;left:50%;transform:translateX(-50%);opacity:0.06;position:absolute;border-radius:50%;filter:blur(100px);pointer-events:none;"></div>
  <div class="pc-container reveal" style="text-align:center;position:relative;z-index:1;">
    <p style="font-family:'JetBrains Mono',monospace;font-size:13px;color:#6C63FF;margin-bottom:18px;">// ready_to_start = true;</p>
    <h2 class="font-display" style="font-size:clamp(2rem,5vw,3.5rem);font-weight:800;line-height:1.12;margin-bottom:18px;">
      Your Next Website Is<br>
      <span class="grad-text">One Conversation Away</span>
    </h2>
    <p style="color:#B8B8D0;font-size:16px;max-width:520px;margin:0 auto 36px;line-height:1.75;">
      Stop losing customers to a slow, outdated website. Let's build something that works as hard as you do — and converts.
    </p>
    <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:14px;margin-bottom:22px;">
      <a href="#contact" class="btn-coral">
        Get Free Consultation Today
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
      </a>
      <a href="https://wa.me/919876543210" target="_blank" rel="noopener"
        style="display:inline-flex;align-items:center;gap:8px;background:linear-gradient(135deg,#25D366,#128C7E);color:#fff;padding:16px 28px;border-radius:8px;font-size:16px;font-weight:700;font-family:'Space Grotesk',sans-serif;text-decoration:none;transition:all 0.3s;"
        onmouseover="this.style.transform='translateY(-2px)';this.style.boxShadow='0 10px 28px rgba(37,211,102,0.3)'"
        onmouseout="this.style.transform='';this.style.boxShadow=''">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        Chat on WhatsApp
      </a>
    </div>
    <p style="color:#B8B8D0;font-size:13px;">✓ Free consultation &nbsp;&nbsp; ✓ No obligation &nbsp;&nbsp; ✓ Reply within 2 hours</p>
  </div>
</section>

<?php get_footer(); ?>