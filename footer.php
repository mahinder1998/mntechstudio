<!-- ════════════════════════════════════════════════════════════
     FOOTER
═══════════════════════════════════════════════════════════════ -->
<footer style="background:#0A0A0F;border-top:1px solid rgba(108,99,255,0.12);padding:56px 0 32px;">
  <div class="pc-container">

    <div style="display:grid;grid-template-columns:1fr;gap:40px;margin-bottom:48px;" id="footer-inner">
      <!-- Brand col -->
      <div>
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:16px;">
          <div style="width:36px;height:36px;border-radius:10px;background:linear-gradient(135deg,#6C63FF,#FF6B6B);display:flex;align-items:center;justify-content:center;">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
          </div>
          <span style="font-family:'Space Grotesk',sans-serif;font-weight:800;font-size:20px;color:#F8F8FF;">PixelCraft<span class="grad-text">Studio</span></span>
        </div>
        <p style="font-size:14px;color:#B8B8D0;line-height:1.75;max-width:280px;margin-bottom:16px;">Building fast, modern, conversion-focused websites for businesses ready to grow online.</p>
        <p style="font-size:14px;color:#B8B8D0;margin-bottom:6px;">📧 hello@pixelcraftstudio.in</p>
        <p style="font-size:14px;color:#B8B8D0;">📞 +91 98765 43210</p>
      </div>

      <!-- Services col -->
      <div>
        <p style="font-family:'Space Grotesk',sans-serif;font-weight:700;font-size:13px;letter-spacing:0.08em;text-transform:uppercase;color:#6C63FF;margin-bottom:16px;">Services</p>
        <?php foreach(['Website Design','WordPress Dev','Shopify Dev','React Dev','Landing Pages','Bug Fixing','Maintenance'] as $s): ?>
        <a href="#services" style="display:block;font-size:14px;color:#B8B8D0;text-decoration:none;margin-bottom:10px;transition:color 0.2s;" onmouseover="this.style.color='#F8F8FF'" onmouseout="this.style.color='#B8B8D0'"><?php echo $s; ?></a>
        <?php endforeach; ?>
      </div>

      <!-- Links col -->
      <div>
        <p style="font-family:'Space Grotesk',sans-serif;font-weight:700;font-size:13px;letter-spacing:0.08em;text-transform:uppercase;color:#6C63FF;margin-bottom:16px;">Quick Links</p>
        <?php foreach([['#','Home'],['#portfolio','Portfolio'],['#pricing','Pricing'],['#testimonials','Reviews'],['#contact','Contact']] as $l): ?>
        <a href="<?php echo $l[0]; ?>" style="display:block;font-size:14px;color:#B8B8D0;text-decoration:none;margin-bottom:10px;transition:color 0.2s;" onmouseover="this.style.color='#F8F8FF'" onmouseout="this.style.color='#B8B8D0'"><?php echo $l[1]; ?></a>
        <?php endforeach; ?>
      </div>
    </div>

    <div style="border-top:1px solid rgba(108,99,255,0.1);padding-top:24px;display:flex;flex-wrap:wrap;justify-content:space-between;align-items:center;gap:12px;">
      <p style="font-size:13px;color:#6A6A8E;">© <?php echo date('Y'); ?> PixelCraft Studio. All rights reserved.</p>
      <p style="font-size:12px;color:#6A6A8E;font-family:'JetBrains Mono',monospace;">Built with ❤️ — v2.1.0</p>
    </div>
  </div>
</footer>

<!-- Mobile sticky CTA bar -->
<div class="mobile-cta-bar" id="mob-cta">
  <a href="#contact" style="flex:1;background:linear-gradient(135deg,#FF6B6B,#FF8E53);color:#fff;padding:14px;border-radius:8px;font-size:14px;font-weight:700;font-family:'Space Grotesk',sans-serif;text-decoration:none;text-align:center;display:flex;align-items:center;justify-content:center;">Get Free Quote →</a>
  <a href="https://wa.me/919876543210" target="_blank" style="background:linear-gradient(135deg,#25D366,#128C7E);color:#fff;padding:14px 18px;border-radius:8px;display:flex;align-items:center;justify-content:center;text-decoration:none;">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
  </a>
</div>
<div class="mobile-bottom-spacer"></div>

<style>
/* Footer grid — responsive without Tailwind */
@media (min-width: 640px) {
  #footer-inner { grid-template-columns: 1fr 1fr !important; }
}
@media (min-width: 900px) {
  #footer-inner { grid-template-columns: 2fr 1fr 1fr !important; }
}
/* Hide mobile CTA bar when contact section is visible */
</style>

<script>
/* Hide mobile CTA bar near the contact section */
const mobCta = document.getElementById('mob-cta');
const contactSection = document.getElementById('contact');
if (mobCta && contactSection) {
  const obs = new IntersectionObserver(function(entries) {
    mobCta.style.opacity = entries[0].isIntersecting ? '0' : '1';
    mobCta.style.pointerEvents = entries[0].isIntersecting ? 'none' : 'auto';
  }, { threshold: 0.2 });
  obs.observe(contactSection);
}
</script>

<?php wp_footer(); ?>
</body>
</html>