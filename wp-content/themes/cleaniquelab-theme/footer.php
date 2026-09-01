<?php
/**
 * Footer template for Cleanique Lab Theme
 *
 * @package CleaniqueLab
 */
?>
</main><!-- #primary -->

<footer class="cq-footer">
    <div class="cq-container">
        <div class="cq-footer-grid">
            <!-- Col 1: Brand & Profil Pabrik -->
            <div class="cq-footer-brand">
                <h3>CLEANIQUE<span>LAB</span></h3>
                <p>
                    Pabrik dan produsen aneka sabun cair & bahan kimia pembersih berkualitas tinggi. Melayani pengadaan curah untuk industri, laundry, fasilitas kesehatan, sekolah, restoran, dan paket kemitraan reseller sabun curah.
                </p>
                <div class="cq-social-links">
                    <!-- Instagram -->
                    <a href="https://instagram.com/cleaniquelab" target="_blank" rel="noopener" aria-label="Instagram Cleanique Lab" class="cq-social-btn cq-social-ig" title="Instagram @cleaniquelab">
                        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
                    </a>
                    <!-- Shopee -->
                    <a href="https://shopee.co.id/cleaniquelab" target="_blank" rel="noopener" aria-label="Shopee Cleanique Lab Official" class="cq-social-btn cq-social-shopee" title="Shopee Official Cleanique Lab">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M19.78 7.37c-.36-.45-.88-.71-1.46-.74H16.2c-.37-2.31-2.27-4.08-4.63-4.08-2.36 0-4.26 1.77-4.63 4.08H4.68c-.58.03-1.1.29-1.46.74-.36.45-.51 1.05-.42 1.63l1.52 10.37c.18 1.25 1.25 2.18 2.51 2.18h9.34c1.26 0 2.33-.93 2.51-2.18l1.52-10.37c.09-.58-.06-1.18-.42-1.63zm-8.21-3.32c1.52 0 2.78 1.14 3.09 2.58H8.48c.31-1.44 1.57-2.58 3.09-2.58zm-1.02 12.35c-1.39-.23-2.11-.87-2.11-1.89 0-1.16.99-1.84 2.45-1.99l1.41-.15c.67-.07 1.01-.3 1.01-.69 0-.49-.49-.8-1.27-.8-.84 0-1.45.33-1.63.88l-1.4-.41c.36-.99 1.44-1.66 2.97-1.66 1.71 0 2.76.77 2.76 1.95 0 1.09-.81 1.71-2.26 1.87l-1.47.16c-.75.08-1.13.33-1.13.75 0 .54.55.88 1.41.88.94 0 1.66-.4 1.86-.97l1.37.45c-.41 1.13-1.61 1.78-3.21 1.66z"/></svg>
                    </a>
                    <!-- TikTok / TikTok Shop -->
                    <a href="https://tiktok.com/@cleaniquelab" target="_blank" rel="noopener" aria-label="TikTok Shop Cleanique Lab" class="cq-social-btn cq-social-tiktok" title="TikTok Shop @cleaniquelab">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64c.298-.002.595.042.88.13V9.4a6.33 6.33 0 0 0-1-.08A6.34 6.34 0 0 0 3 15.66a6.34 6.34 0 0 0 10.81 4.48 6.26 6.26 0 0 0 1.87-4.47V8.71a8.18 8.18 0 0 0 4.91 1.65V6.91a4.86 4.86 0 0 1-1-.22z"/></svg>
                    </a>
                    <!-- WhatsApp -->
                    <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab')); ?>" target="_blank" rel="noopener" aria-label="WhatsApp Cleanique Lab" class="cq-social-btn cq-social-wa" title="WhatsApp Customer Care">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Col 2: Navigasi Utama -->
            <div class="cq-footer-col">
                <h4>Navigasi</h4>
                <ul class="cq-footer-links">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">Beranda</a></li>
                    <li><a href="<?php echo esc_url(home_url('/about/')); ?>">Tentang Kami</a></li>
                    <li><a href="<?php echo esc_url(home_url('/pricelist/')); ?>">Daftar Harga</a></li>
                    <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">Artikel & Tips</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Hubungi Kami</a></li>
                </ul>
            </div>

            <!-- Col 3: Kategori Produk -->
            <div class="cq-footer-col">
                <h4>Kategori Produk</h4>
                <ul class="cq-footer-links">
                    <li><a href="<?php echo esc_url(home_url('/pricelist/#household')); ?>">Sabun Cuci Piring</a></li>
                    <li><a href="<?php echo esc_url(home_url('/pricelist/#laundry')); ?>">Deterjen Laundry</a></li>
                    <li><a href="<?php echo esc_url(home_url('/pricelist/#bodycare')); ?>">Hand Soap Premium</a></li>
                    <li><a href="<?php echo esc_url(home_url('/pricelist/#industrial')); ?>">Karbol Wangi Sereh</a></li>
                    <li><a href="<?php echo esc_url(home_url('/pricelist/#biang')); ?>">Paket Biang Konsentrat</a></li>
                </ul>
            </div>

            <!-- Col 4: Legal & Kepatuhan -->
            <div class="cq-footer-col">
                <h4>Legal & Kebijakan</h4>
                <ul class="cq-footer-links">
                    <li><a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">Kebijakan Privasi</a></li>
                    <li><a href="<?php echo esc_url(home_url('/cookie-policy/')); ?>">Kebijakan Cookie</a></li>
                    <li><a href="<?php echo esc_url(home_url('/terms/')); ?>">Syarat & Ketentuan</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Pusat Bantuan & Komplain</a></li>
                </ul>
            </div>

            <!-- Col 5: Kontak & Jam Layanan -->
            <div class="cq-footer-col">
                <h4>Pusat Operasional</h4>
                <div class="cq-footer-contact-item">
                    <svg class="cq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                    <span>Pusat Produksi & Workshop Sabun Cleanique Lab, Indonesia</span>
                </div>
                <div class="cq-footer-contact-item">
                    <svg class="cq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    <span>0812-3456-7890 (Customer Care)</span>
                </div>
                <div class="cq-footer-contact-item">
                    <svg class="cq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    <span>Senin - Sabtu: 08.00 - 17.00 WIB</span>
                </div>
            </div>
        </div>

        <!-- Jaringan Ekosistem & Mitra Bisnis (Backlink Network) -->
        <div class="cq-footer-network">
            <div class="cq-network-header">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--cq-cyan)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
                <span>Jaringan Ekosistem & Mitra Bisnis:</span>
            </div>
            <div class="cq-network-links">
                <a href="https://indotech.id/" target="_blank" rel="noopener" class="cq-network-item">Indotech Berkah Abadi</a>
                <span class="cq-network-sep">&bull;</span>
                <a href="https://orchidbrand.id/" target="_blank" rel="noopener" class="cq-network-item">Orchid Brand</a>
                <span class="cq-network-sep">&bull;</span>
                <a href="https://depocleanique.co.id/" target="_blank" rel="noopener" class="cq-network-item">Depo Cleanique</a>
                <span class="cq-network-sep">&bull;</span>
                <a href="http://malabeez.co.id/" target="_blank" rel="noopener" class="cq-network-item">Malabeez</a>
                <span class="cq-network-sep">&bull;</span>
                <a href="https://cleaniquelab.com/" target="_blank" rel="noopener" class="cq-network-item">Cleanique Lab</a>
                <span class="cq-network-sep">&bull;</span>
                <a href="https://cleaniqueacademy.com/" target="_blank" rel="noopener" class="cq-network-item">Cleanique Academy</a>
                <span class="cq-network-sep">&bull;</span>
                <a href="https://cleaniquemart.com/" target="_blank" rel="noopener" class="cq-network-item">Cleanique Mart</a>
                <span class="cq-network-sep">&bull;</span>
                <a href="https://prokopi.id/" target="_blank" rel="noopener" class="cq-network-item">Prokopi</a>
            </div>
        </div>

        <!-- Copyright & Legal Links -->
        <div class="cq-footer-bottom">
            <div>
                &copy; <?php echo date('Y'); ?> <strong>Cleanique Lab</strong>. All Rights Reserved. Produsen Aneka Sabun & Produk Kebersihan.
            </div>
            <div class="cq-footer-legal-bar">
                <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">Privasi</a>
                <span>•</span>
                <a href="<?php echo esc_url(home_url('/cookie-policy/')); ?>">Cookie</a>
                <span>•</span>
                <a href="<?php echo esc_url(home_url('/terms/')); ?>">Syarat & Ketentuan</a>
            </div>
        </div>
    </div>
</footer>

<!-- 4. FLOATING WHATSAPP BUTTON -->
<a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya ingin info produk sabun dan konsultasi pemesanan.')); ?>" 
   class="cq-whatsapp-float" 
   target="_blank" 
   rel="noopener" 
   title="Chat WhatsApp Cleanique Lab"
   aria-label="Hubungi Cleanique Lab via WhatsApp">
    <svg viewBox="0 0 24 24">
        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
    </svg>
</a>

<!-- 5. EDGE-DOCKED PRIVACY & COOKIE SLIDE-OUT TAB (FLUSH TO LEFT SCREEN EDGE) -->
<div id="cq-cookie-widget" class="cq-cookie-widget">
    <!-- Edge Tab Trigger Button (Attached to left border at the bottom) -->
    <button id="cq-cookie-trigger" class="cq-cookie-edge-tab" aria-label="Buka Pengaturan Privasi & Cookie" title="Pengaturan Privasi & Cookie">
        <svg class="cq-tab-arrow-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14"/><path d="m12 5 7 7-7 7"/><path d="M19 4v16"/>
        </svg>
    </button>

    <!-- Slide-out Drawer Panel -->
    <div id="cq-cookie-card" class="cq-cookie-drawer" aria-hidden="true">
        <div class="cq-cookie-drawer-header">
            <div style="display: flex; align-items: center; gap: 8px;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--cq-royal-blue)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
                <strong>Privasi & Cookie</strong>
            </div>
            <button id="cq-cookie-card-close" class="cq-cookie-card-close" aria-label="Tutup Panel">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
            </button>
        </div>
        <div class="cq-cookie-drawer-body">
            <p>
                Kami menggunakan cookie esensial dan analitik untuk menjamin kelancaran fungsi katalog dan pemesanan sabun Cleanique Lab.
            </p>
        </div>
        <div class="cq-cookie-drawer-actions">
            <button id="cq-cookie-accept" class="cq-btn-primary cq-btn-sm" style="flex: 1; padding: 8px 14px; font-size: 13px;">
                Setuju
            </button>
            <a href="<?php echo esc_url(home_url('/cookie-policy/')); ?>" class="cq-btn-outline cq-btn-outline-dark cq-btn-sm" style="padding: 8px 14px; font-size: 12px;">
                Kebijakan
            </a>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
