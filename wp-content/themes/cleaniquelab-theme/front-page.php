<?php
/**
 * Front Page Template (Beranda) - Rich SEO & GEO Architecture
 *
 * @package CleaniqueLab
 */

get_header();
?>

<!-- 1. HERO SECTION -->
<section class="cq-hero">
    <div class="cq-container">
        <span class="cq-hero-eyebrow">Pusat Produksi & Formula Sabun Indonesia</span>
        <h1 class="cq-hero-h1" style="font-size: clamp(36px, 6vw, 80px); margin-bottom: 24px;">
            Pabrik Aneka Sabun &<br>Kimia Pembersih Berkualitas
        </h1>
        <p class="cq-hero-lead" style="max-width: 840px;">
            Cleanique Lab memproduksi dan memasok aneka sabun cair curah, deterjen laundry, sabun cuci piring, hand soap, karbol desinfektan, serta paket biang konsentrat ekonomis untuk kebutuhan industri, perhotelan, rumah makan, laundry, dan reseller ke seluruh 38 provinsi di Indonesia.
        </p>

        <div class="cq-hero-actions">
            <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya ingin konsultasi kebutuhan sabun & katalog harga grosir pabrik.')); ?>" 
               target="_blank" 
               rel="noopener" 
               class="cq-btn-primary">
                <svg class="cq-icon" width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                Konsultasi & Penawaran Pabrik
            </a>
            <a href="<?php echo esc_url(home_url('/pricelist/')); ?>" class="cq-btn-outline">
                Katalog & Daftar Harga
            </a>
        </div>

        <div class="cq-hero-visual" style="margin-top: 40px;">
            <div class="cq-badge-float left" style="padding: 10px 16px;">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/promo-kemitraan.jpg'); ?>" alt="Promo Kemitraan Cleanique Lab" style="width: 48px; height: 48px; border-radius: 50%; object-fit: cover;">
                <div>
                    <strong style="display: block; font-size: 14px;">Peluang Agen & Maklon</strong>
                    <span style="font-size: 12px; color: var(--cq-text-muted);">Suplai Jerigen & Drum Curah</span>
                </div>
            </div>

            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hero-products.jpg'); ?>" 
                 alt="Katalog Produk Sabun Jerigen 5L Cleanique Lab" 
                 class="cq-hero-product-img"
                 style="border-radius: 20px;"
                 onerror="this.src='https://cdn.cleaniquelab.com/wp-content/uploads/2025/02/Aneka-Sabun-Cleanique-Lab.webp';">

            <div class="cq-badge-float right">
                <div style="width: 40px; height: 40px; border-radius: 50%; background: #e8f3ff; display: flex; align-items: center; justify-content: center; color: var(--cq-royal-blue);">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
                </div>
                <div>
                    <strong style="display: block; font-size: 14px;">Segel Kargo Anti-Bocor</strong>
                    <span style="font-size: 12px; color: var(--cq-text-muted);">Garansi Pengiriman Aman</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Organic Wave Divider to White Section -->
    <div class="cq-wave-divider">
        <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="#ffffff" d="M0,160L48,176C96,192,192,224,288,213.3C384,203,480,149,576,144C672,139,768,181,864,197.3C960,213,1056,203,1152,181.3C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
</section>

<!-- 2. SEKTOR INDUSTRI & SOLUSI B2B -->
<section class="cq-section" style="background-color: #ffffff;">
    <div class="cq-container">
        <div style="text-align: center; max-width: 800px; margin: 0 auto 50px auto;">
            <span style="font-family: var(--cq-font-body); font-size: 16px; font-weight: 800; color: var(--cq-royal-blue); text-transform: uppercase; letter-spacing: 2px;">
                Solusi Suplai Sektor Komersial
            </span>
            <h2 style="font-size: clamp(28px, 4vw, 42px); margin-top: 8px; color: var(--cq-text-dark);">
                Didesain Khusus untuk Berbagai Skala Industri
            </h2>
            <p style="font-size: 16px; color: var(--cq-text-muted); margin-top: 10px;">
                Cleanique Lab menjadi partner pengadaan bahan pembersih rutin untuk ratusan unit usaha di seluruh Indonesia dengan jaminan mutu dan efisiensi biaya operasional.
            </p>
        </div>

        <div class="cq-industry-grid">
            <!-- Sektor 1: Laundry -->
            <div class="cq-industry-card">
                <div class="cq-industry-icon" style="color: var(--cq-purple-bright); background: #fbf0fc;">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" x2="12" y1="22.08" y2="12"/></svg>
                </div>
                <h3>Bisnis Laundry Kiloan & Hotel</h3>
                <p>Deterjen cair rendah busa (low foam) yang aman untuk modul mesin cuci front-loading, oxy bleach pencerah serat, pelembut konsentrat, serta parfum laundry grade premium anti-apek.</p>
                <div class="cq-industry-tag">Suplai Jerigen 5L - 20L</div>
            </div>

            <!-- Sektor 2: Restoran & F&B -->
            <div class="cq-industry-card">
                <div class="cq-industry-icon" style="color: var(--cq-green-deep); background: #eefcf0;">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2v6a3 3 0 0 1-3 3 3 3 0 0 1-3-3V2"/><path d="M15 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2-2V2"/><path d="M12 2v20"/><path d="M21 15v7"/></svg>
                </div>
                <h3>Restoran, Cafe & Catering</h3>
                <p>Sabun cuci piring berkadar surfaktan aktif tinggi, cepat memecah minyak & lemak sisa masakan, kesat seketika tanpa residu licin, dan aman bersentuhan dengan peralatan makan (*food safe*).</p>
                <div class="cq-industry-tag">Efisien & Kesat Cepat</div>
            </div>

            <!-- Sektor 3: Hotel & Hospitality -->
            <div class="cq-industry-card">
                <div class="cq-industry-icon" style="color: var(--cq-royal-blue); background: #eff6ff;">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"/><path d="M5 21V7l8-4v18"/><path d="M19 21V11l-6-4"/><path d="M9 9v.01"/><path d="M9 13v.01"/><path d="M9 17v.01"/></svg>
                </div>
                <h3>Hotel, Villa & Penginapan</h3>
                <p>Pasokan amenities pembersih lengkap: hand soap wangi mewah dengan moisturizer, pembersih lantai mengkilap, karbol wangi aroma terapi, dan pembersih kaca anti-bercak.</p>
                <div class="cq-industry-tag">Standar Mutu Hospitality</div>
            </div>

            <!-- Sektor 4: Kesehatan & Sekolah -->
            <div class="cq-industry-card">
                <div class="cq-industry-icon" style="color: var(--cq-red); background: #fdf1f1;">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/><path d="M12 5v14"/></svg>
                </div>
                <h3>Rumah Sakit, Klinik & Sekolah</h3>
                <p>Produk sanitasi higienis berdaya bunuh kuman 99.9%: Hand soap antiseptik tanpa triclosan keras, desinfektan lantai karbol pinus/sereh, dan sabun sanitasi fasilitas umum.</p>
                <div class="cq-industry-tag">Anti-Bakteri Teruji</div>
            </div>

            <!-- Sektor 5: Reseller & Agen Curah -->
            <div class="cq-industry-card">
                <div class="cq-industry-icon" style="color: var(--cq-orange-cta); background: #fff4ed;">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                </div>
                <h3>Toko Sabun Curah & Maklon UMKM</h3>
                <p>Paket biang sabun konsentrat super hemat ongkir luar pulau, jerigen curah siap kemas ulang, serta peluang jasa maklon produksi sabun dengan merek dan formula kustom Anda sendiri.</p>
                <div class="cq-industry-tag">Peluang Usaha Menjanjikan</div>
            </div>
        </div>
    </div>
</section>

<!-- 3. PENGGALAN & SHOWCASE KATALOG PRODUK UNGGULAN -->
<section class="cq-section cq-section-with-wave" style="background-color: var(--cq-bg-soft);">
    <div class="cq-container">
        <div style="text-align: center; max-width: 760px; margin: 0 auto 30px auto;">
            <span style="font-family: var(--cq-font-body); font-size: 16px; font-weight: 800; color: var(--cq-green-deep); text-transform: uppercase; letter-spacing: 2px;">
                Penggalan Katalog Produk
            </span>
            <h2 style="font-size: clamp(28px, 4vw, 42px); margin-top: 8px; color: var(--cq-text-dark);">
                Formula Unggulan Berdaya Bersih Maksimal
            </h2>
            <p style="font-size: 17px; color: var(--cq-text-muted); margin-top: 10px;">
                Pilihan formula sabun siap pakai kemasan jerigen 5L, drum 200L, serta paket biang konsentrat ekonomis langsung dari pabrik.
            </p>
        </div>

        <div class="cq-product-grid">
            <!-- Card 1: Cuci Piring (Green) -->
            <div class="cq-card cq-card-green">
                <div class="cq-card-badge">Cuci Piring</div>
                <h3 class="cq-card-title">Dishwashing Liquid 5L</h3>
                <div class="cq-card-price">Rp 35.000 <span class="cq-unit">/ 5 Liter</span></div>
                <ul class="cq-card-features">
                    <li><svg class="cq-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--cq-gold)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Ekstrak Jeruk Nipis Asli</li>
                    <li><svg class="cq-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--cq-gold)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Ampuh Rontokkan Lemak & Bau</li>
                    <li><svg class="cq-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--cq-gold)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Busa Tebal & Kesat Cepat</li>
                    <li><svg class="cq-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--cq-gold)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> pH Netral, Lembut di Tangan</li>
                </ul>
                <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya ingin order Sabun Cuci Piring 5L')); ?>" target="_blank" rel="noopener" class="cq-card-btn">Pesan via WA</a>
            </div>

            <!-- Card 2: Laundry (Purple) -->
            <div class="cq-card cq-card-purple">
                <div class="cq-card-badge">Laundry Specialist</div>
                <h3 class="cq-card-title">Deterjen Cair Laundry 5L</h3>
                <div class="cq-card-price">Rp 45.000 <span class="cq-unit">/ 5 Liter</span></div>
                <ul class="cq-card-features">
                    <li><svg class="cq-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--cq-gold)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Rendah Busa (Aman Mesin Matic)</li>
                    <li><svg class="cq-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--cq-gold)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Aroma Fresh Floral Tahan Lama</li>
                    <li><svg class="cq-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--cq-gold)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Formula Anti-Apek & Anti-Kuman</li>
                    <li><svg class="cq-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--cq-gold)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Pencerah Serat & Mudah Bilas</li>
                </ul>
                <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya ingin order Deterjen Laundry 5L')); ?>" target="_blank" rel="noopener" class="cq-card-btn">Pesan via WA</a>
            </div>

            <!-- Card 3: Hand Soap (Blue) -->
            <div class="cq-card cq-card-blue">
                <div class="cq-card-badge">Hygiene & Antiseptic</div>
                <h3 class="cq-card-title">Hand Soap Premium 5L</h3>
                <div class="cq-card-price">Rp 38.000 <span class="cq-unit">/ 5 Liter</span></div>
                <ul class="cq-card-features">
                    <li><svg class="cq-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--cq-gold)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Ekstra Pelembap Aloe Vera</li>
                    <li><svg class="cq-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--cq-gold)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Perlindungan Anti-Bakteri 99.9%</li>
                    <li><svg class="cq-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--cq-gold)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Varian Strawberry, Apple, Lemon</li>
                    <li><svg class="cq-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--cq-gold)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Standar Hotel & Rumah Sakit</li>
                </ul>
                <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya ingin order Hand Soap 5L')); ?>" target="_blank" rel="noopener" class="cq-card-btn">Pesan via WA</a>
            </div>

            <!-- Card 4: Karbol (Red) -->
            <div class="cq-card cq-card-red">
                <div class="cq-card-badge">Floor & Industrial</div>
                <h3 class="cq-card-title">Karbol Wangi Sereh 5L</h3>
                <div class="cq-card-price">Rp 42.000 <span class="cq-unit">/ 5 Liter</span></div>
                <ul class="cq-card-features">
                    <li><svg class="cq-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--cq-gold)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Minyak Citronella Sereh Alami</li>
                    <li><svg class="cq-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--cq-gold)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Efektif Usir Nyamuk & Lalat</li>
                    <li><svg class="cq-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--cq-gold)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Desinfektan Lantai & Toilet</li>
                    <li><svg class="cq-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--cq-gold)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Menghilangkan Bau Amis & Apek</li>
                </ul>
                <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya ingin order Karbol Wangi 5L')); ?>" target="_blank" rel="noopener" class="cq-card-btn">Pesan via WA</a>
            </div>
        </div>

        <div style="text-align: center; margin-top: 40px;">
            <a href="<?php echo esc_url(home_url('/pricelist/')); ?>" class="cq-btn-primary" style="background: var(--cq-royal-blue); box-shadow: 0 10px 22px rgba(58, 123, 213, 0.35);">
                Lihat Seluruh Daftar Harga & Katalog Lengkap &rarr;
            </a>
        </div>
    </div>

    <!-- Organic Wave Divider to White Section -->
    <div class="cq-wave-divider">
        <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="#ffffff" d="M0,160L48,176C96,192,192,224,288,213.3C384,203,480,149,576,144C672,139,768,181,864,197.3C960,213,1056,203,1152,181.3C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
</section>

<!-- 4. SPESIFIKASI FORMULASI & STANDAR MUTU LAB -->
<section class="cq-section" style="background-color: #ffffff;">
    <div class="cq-container">
        <div style="text-align: center; max-width: 760px; margin: 0 auto 50px auto;">
            <span style="font-family: var(--cq-font-body); font-size: 16px; font-weight: 800; color: var(--cq-royal-blue); text-transform: uppercase; letter-spacing: 2px;">
                Transparansi Kualitas Kimia
            </span>
            <h2 style="font-size: clamp(28px, 4vw, 40px); margin-top: 8px; color: var(--cq-text-dark);">
                Standar Formulasi Teruji Cleanique Lab
            </h2>
            <p style="font-size: 16px; color: var(--cq-text-muted); margin-top: 10px;">
                Setiap batch produksi melewati kontrol kualitas ketat untuk menjamin keamanan pengguna, keawetan formula, dan stabilitas kekentalan.
            </p>
        </div>

        <div class="cq-spec-grid-2x2">
            <!-- Card 1: Surfaktan & Bahan Aktif -->
            <div class="cq-spec-card-rich">
                <div class="cq-spec-top">
                    <div class="cq-spec-icon-box" style="background: #eff6ff; color: var(--cq-royal-blue);">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 2v7.31M14 9.3V1.99M8.5 2h7M14 9.3a6.5 6.5 0 1 1-4 0"/></svg>
                    </div>
                    <div class="cq-spec-title-wrap">
                        <h3>Konsentrasi Surfaktan & Bahan Aktif</h3>
                        <span class="cq-spec-subtag" style="background: #eff6ff; color: var(--cq-royal-blue);">Formula Efektif</span>
                    </div>
                </div>
                <p class="cq-spec-desc">
                    Diformulasikan dengan konsentrasi surfaktan aktif berdaya larut tinggi yang mampu memecah rantai molekul minyak pekat, lemak industri, dan noda membandel secara cepat tanpa mengikis permukaan peralatan masak maupun merusak serat pakaian.
                </p>
                <ul class="cq-spec-points">
                    <li>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--cq-green-deep)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Daya bersih maksimal melarutkan lemak dan kotoran membandel</span>
                    </li>
                    <li>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--cq-green-deep)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Busa stabil serta mudah dibilas tanpa meninggalkan residu</span>
                    </li>
                </ul>
            </div>

            <!-- Card 2: Keseimbangan pH & Perlindungan Kulit -->
            <div class="cq-spec-card-rich">
                <div class="cq-spec-top">
                    <div class="cq-spec-icon-box" style="background: #eafaf1; color: var(--cq-green-deep);">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <div class="cq-spec-title-wrap">
                        <h3>Keseimbangan Derajat Keasaman (pH)</h3>
                        <span class="cq-spec-subtag" style="background: #eafaf1; color: var(--cq-green-deep);">Perlindungan Kulit</span>
                    </div>
                </div>
                <p class="cq-spec-desc">
                    Tingkat keasaman terjaga seimbang pada ambang netral yang selaras dengan lapisan pelindung alami kulit. Dilengkapi bahan pelembap untuk mencegah efek kulit kering, panas, atau iritasi meski digunakan berulang kali dalam aktivitas harian.
                </p>
                <ul class="cq-spec-points">
                    <li>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--cq-green-deep)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Lembut di tangan dan aman bagi pengguna berkulit sensitif</span>
                    </li>
                    <li>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--cq-green-deep)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Bebas senyawa kaustik keras yang merusak kelembapan kulit</span>
                    </li>
                </ul>
            </div>

            <!-- Card 3: Biodegradabilitas & Ramah Lingkungan -->
            <div class="cq-spec-card-rich">
                <div class="cq-spec-top">
                    <div class="cq-spec-icon-box" style="background: #fbf0fc; color: var(--cq-purple-bright);">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>
                    </div>
                    <div class="cq-spec-title-wrap">
                        <h3>Formula Biodegradable & Ekologis</h3>
                        <span class="cq-spec-subtag" style="background: #fbf0fc; color: var(--cq-purple-bright);">Ramah Lingkungan</span>
                    </div>
                </div>
                <p class="cq-spec-desc">
                    Menggunakan bahan baku ramah lingkungan yang mudah terurai oleh mikroorganisme tanah dan saluran air limbah. Tidak mengandung senyawa berbahaya berlebih sehingga aman untuk saluran perpipaan, septic tank, dan kelestarian ekosistem perairan.
                </p>
                <ul class="cq-spec-points">
                    <li>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--cq-green-deep)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Aman untuk instalasi pengolahan air limbah (IPAL) dan drainase</span>
                    </li>
                    <li>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--cq-green-deep)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Mendukung operasional usaha yang berwawasan kelestarian alam</span>
                    </li>
                </ul>
            </div>

            <!-- Card 4: Stabilitas Formula & Masa Simpan -->
            <div class="cq-spec-card-rich">
                <div class="cq-spec-top">
                    <div class="cq-spec-icon-box" style="background: #fef4ee; color: var(--cq-orange-cta);">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    </div>
                    <div class="cq-spec-title-wrap">
                        <h3>Stabilitas Formula & Masa Simpan</h3>
                        <span class="cq-spec-subtag" style="background: #fef4ee; color: var(--cq-orange-cta);">Kualitas Konsisten</span>
                    </div>
                </div>
                <p class="cq-spec-desc">
                    Formulasi distabilkan dengan chelating agent khusus untuk menjaga kekentalan, kejernihan warna, dan kesegaran aroma wangi tetap prima dalam jangka panjang. Tahan terhadap fluktuasi suhu ruang penyimpanan gudang tanpa mengalami pemisahan lapisan atau endapan.
                </p>
                <ul class="cq-spec-points">
                    <li>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--cq-green-deep)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Tidak memisah, mengendap, atau menggumpal saat disimpan</span>
                    </li>
                    <li>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--cq-green-deep)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Aroma segar tahan lama dan viskositas terjaga hingga tetes akhir</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- 5. PENGGALAN ARTIKEL & EDUKASI TERKINI (BLOG SHOWCASE) -->
<section class="cq-section" style="background-color: var(--cq-bg-soft);">
    <div class="cq-container">
        <div style="display: flex; align-items: flex-end; justify-content: space-between; flex-wrap: wrap; gap: 20px; margin-bottom: 40px;">
            <div style="max-width: 650px;">
                <span style="font-family: var(--cq-font-body); font-size: 16px; font-weight: 800; color: var(--cq-royal-blue); text-transform: uppercase; letter-spacing: 2px;">
                    Artikel & Wawasan Kebersihan
                </span>
                <h2 style="font-size: clamp(28px, 4vw, 40px); margin-top: 8px; color: var(--cq-text-dark);">
                    Panduan & Edukasi Formulasi Sabun
                </h2>
                <p style="font-size: 16px; color: var(--cq-text-muted); margin-top: 8px;">
                    Informasi praktis seputar efisiensi operasional laundry, standar higienitas F&B, dan panduan bisnis sabun curah.
                </p>
            </div>
            <div>
                <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts')) ?: home_url('/blog/')); ?>" 
                   style="display: inline-flex; align-items: center; gap: 6px; font-size: 15px; font-weight: 800; color: var(--cq-royal-blue); background: #ffffff; border: 1.5px solid var(--cq-royal-blue); padding: 10px 20px; border-radius: 30px; text-decoration: none; transition: all 0.2s ease;">
                    Lihat Semua Artikel
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
            </div>
        </div>

        <?php
        $homepage_posts = new WP_Query([
            'post_type'      => 'post',
            'posts_per_page' => 3,
            'post_status'    => 'publish',
        ]);

        if ($homepage_posts->have_posts()) :
        ?>
            <div class="cq-blog-grid">
                <?php while ($homepage_posts->have_posts()) : $homepage_posts->the_post(); ?>
                    <article class="cq-article-card">
                        <div class="cq-article-thumb">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('cleaniquelab-card'); ?>
                            <?php else : ?>
                                <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #00d2ff, #3a7bd5); color: #fff;">
                                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" x2="8" y1="13" y2="13"/><line x1="16" x2="8" y1="17" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="cq-article-content">
                            <div class="cq-article-meta">
                                <span style="display: inline-flex; align-items: center; gap: 4px;">
                                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="3" y1="10" y2="10"/></svg>
                                    <?php echo get_the_date('d M Y'); ?>
                                </span>
                            </div>
                            <h3 class="cq-article-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <div class="cq-article-excerpt">
                                <?php echo wp_trim_words(get_the_excerpt(), 18, '...'); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="cq-article-link">
                                Baca Selengkapnya &rarr;
                            </a>
                        </div>
                    </article>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        <?php else : ?>
            <!-- Fallback Static High-Quality Guides -->
            <div class="cq-blog-grid">
                <article class="cq-article-card">
                    <div class="cq-article-thumb">
                        <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #109733, #7edb0d); color: #fff;">
                            <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>
                        </div>
                    </div>
                    <div class="cq-article-content">
                        <div class="cq-article-meta">
                            <span style="color: var(--cq-green-deep); font-weight: 800;">Panduan Bisnis</span>
                        </div>
                        <h3 class="cq-article-title">
                            <a href="<?php echo esc_url(home_url('/pricelist/')); ?>">Cara Memulai Usaha Sabun Cuci Piring Curah dengan Modal Minim</a>
                        </h3>
                        <p class="cq-article-excerpt">
                            Strategi pengadaan pasokan jerigen curah, teknik pengemasan ulang yang menarik, serta cara menghitung margin profit hingga 100% untuk pasar lokal.
                        </p>
                        <a href="<?php echo esc_url(home_url('/pricelist/')); ?>" class="cq-article-link">
                            Pelajari Selengkapnya &rarr;
                        </a>
                    </div>
                </article>

                <article class="cq-article-card">
                    <div class="cq-article-thumb">
                        <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #6d0a6c, #a51da3); color: #fff;">
                            <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" x2="12" y1="22.08" y2="12"/></svg>
                        </div>
                    </div>
                    <div class="cq-article-content">
                        <div class="cq-article-meta">
                            <span style="color: var(--cq-purple-bright); font-weight: 800;">Tips Laundry</span>
                        </div>
                        <h3 class="cq-article-title">
                            <a href="<?php echo esc_url(home_url('/pricelist/')); ?>">Kenapa Usaha Laundry Wajib Menggunakan Deterjen Cair Rendah Busa?</a>
                        </h3>
                        <p class="cq-article-excerpt">
                            Ketahui alasan teknis mengapa formula low foam melindungi modul mesin cuci matic, mencegah kerak tabung, dan menghasilkan cucian bebas noda residu.
                        </p>
                        <a href="<?php echo esc_url(home_url('/pricelist/')); ?>" class="cq-article-link">
                            Pelajari Selengkapnya &rarr;
                        </a>
                    </div>
                </article>

                <article class="cq-article-card">
                    <div class="cq-article-thumb">
                        <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #00d2ff, #3a7bd5); color: #fff;">
                            <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
                        </div>
                    </div>
                    <div class="cq-article-content">
                        <div class="cq-article-meta">
                            <span style="color: var(--cq-royal-blue); font-weight: 800;">Sanitasi & Formulasi</span>
                        </div>
                        <h3 class="cq-article-title">
                            <a href="<?php echo esc_url(home_url('/about/')); ?>">Standar pH Netral pada Hand Soap: Mengapa Aman Tanpa Bikin Kulit Kering?</a>
                        </h3>
                        <p class="cq-article-excerpt">
                            Ulasan ilmiah peran formulasi pH 6.5 - 7.5 dan pelembap aloe vera dalam menjaga barrier alami kulit meskipun digunakan berkali-kali setiap hari.
                        </p>
                        <a href="<?php echo esc_url(home_url('/about/')); ?>" class="cq-article-link">
                            Pelajari Selengkapnya &rarr;
                        </a>
                    </div>
                </article>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- 6. JANGKAUAN EKSPEDISI & PUSAT DISTRIBUSI GEO NASIONAL -->
<section class="cq-section" style="background-color: #ffffff;">
    <div class="cq-container">
        <div style="text-align: center; max-width: 800px; margin: 0 auto 50px auto;">
            <span style="font-family: var(--cq-font-body); font-size: 16px; font-weight: 800; color: var(--cq-royal-blue); text-transform: uppercase; letter-spacing: 2px;">
                Cakupan Pengiriman Nasional
            </span>
            <h2 style="font-size: clamp(28px, 4vw, 40px); margin-top: 8px; color: var(--cq-text-dark);">
                Jangkauan Distribusi Sabun ke 38 Provinsi
            </h2>
            <p style="font-size: 16px; color: var(--cq-text-muted); margin-top: 10px;">
                Didukung oleh jaringan kargo spesialis cairan darat, laut, dan udara untuk memastikan paket tiba tepat waktu, aman, dan dengan biaya kirim yang sangat terjangkau.
            </p>
        </div>

        <div class="cq-geo-grid">
            <div class="cq-geo-card">
                <div class="cq-geo-header">
                    <svg class="cq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--cq-royal-blue)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                    <h4>Pulau Jawa & Madura</h4>
                </div>
                <p>Jabodetabek, Bandung, Semarang, Solo, Yogyakarta, Surabaya, Malang, Cirebon, Tasikmalaya, Serang, Tegal, Purwokerto, Jember, Kediri.</p>
                <span class="cq-geo-badge">Armada Pabrik & Kargo 1-2 Hari</span>
            </div>

            <div class="cq-geo-card">
                <div class="cq-geo-header">
                    <svg class="cq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--cq-green-deep)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                    <h4>Sumatera & Kepulauan Riau</h4>
                </div>
                <p>Medan, Palembang, Pekanbaru, Bandar Lampung, Padang, Jambi, Bengkulu, Batam, Tanjung Pinang, Pangkal Pinang, Banda Aceh.</p>
                <span class="cq-geo-badge">Kargo Darat & Laut Reguler</span>
            </div>

            <div class="cq-geo-card">
                <div class="cq-geo-header">
                    <svg class="cq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--cq-purple-bright)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                    <h4>Kalimantan</h4>
                </div>
                <p>Balikpapan, Samarinda, Banjarmasin, Pontianak, Palangka Raya, Tarakan, Bontang, Singkawang, Banjarbaru, Berau.</p>
                <span class="cq-geo-badge">Paket Biang Sangat Hemat Ongkir</span>
            </div>

            <div class="cq-geo-card">
                <div class="cq-geo-header">
                    <svg class="cq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--cq-orange-cta)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                    <h4>Sulawesi, Bali & Nusa Tenggara</h4>
                </div>
                <p>Makassar, Manado, Denpasar, Mataram, Kupang, Palu, Kendari, Gorontalo, Bitung, Singaraja, Labuan Bajo.</p>
                <span class="cq-geo-badge">Pengiriman Kontainer & Kargo</span>
            </div>

            <div class="cq-geo-card" style="grid-column: span 2;">
                <div class="cq-geo-header">
                    <svg class="cq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--cq-red)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                    <h4>Maluku & Seluruh Wilayah Papua</h4>
                </div>
                <p>Ambon, Ternate, Jayapura, Sorong, Timika, Merauke, Manokwari, Biak. Direkomendasikan menggunakan <strong>Paket Biang Sabun Konsentrat</strong> untuk meminimalkan beban volume kargo laut/udara hingga 80%.</p>
                <span class="cq-geo-badge">Layanan Kargo Laut Pelni & Udara</span>
            </div>
        </div>

        <!-- Cargo Partners Strip -->
        <div class="cq-cargo-strip">
            <span style="font-size: 14px; font-weight: 700; color: var(--cq-text-muted);">Mitra Ekspedisi Kargo Terpercaya:</span>
            <div class="cq-cargo-badges">
                <span class="cq-cargo-badge-item">J&T Cargo</span>
                <span class="cq-cargo-badge-item">Indah Logistik</span>
                <span class="cq-cargo-badge-item">Dakota Cargo</span>
                <span class="cq-cargo-badge-item">Baraka Sarana Tama</span>
                <span class="cq-cargo-badge-item">Sentral Cargo</span>
                <span class="cq-cargo-badge-item">Armada Truk Pabrik</span>
            </div>
        </div>
    </div>
</section>

<!-- 7. ALUR PEMESANAN & STANDAR KEAMANAN PENGIRIMAN CAIRAN -->
<section class="cq-section" style="background-color: var(--cq-bg-soft);">
    <div class="cq-container">
        <div style="text-align: center; max-width: 760px; margin: 0 auto 50px auto;">
            <span style="font-family: var(--cq-font-body); font-size: 16px; font-weight: 800; color: var(--cq-green-deep); text-transform: uppercase; letter-spacing: 2px;">
                Prosedur Standar Pabrik
            </span>
            <h2 style="font-size: clamp(28px, 4vw, 40px); margin-top: 8px; color: var(--cq-text-dark);">
                4 Langkah Mudah Pemesanan Sabun
            </h2>
        </div>

        <div class="cq-step-grid">
            <div class="cq-step-card">
                <div class="cq-step-num">01</div>
                <h4>Konsultasi Kebutuhan</h4>
                <p>Sampaikan jenis sabun, kuantitas volume (jerigen/drum/biang), serta lokasi pengiriman kepada Customer Care via WhatsApp.</p>
            </div>

            <div class="cq-step-card">
                <div class="cq-step-num">02</div>
                <h4>Faktur & Ekspedisi Terbaik</h4>
                <p>Tim kami akan menerbitkan invoice resmi dan memilihkan opsi ekspedisi kargo termurah dan tercepat ke kota Anda.</p>
            </div>

            <div class="cq-step-card">
                <div class="cq-step-num">03</div>
                <h4>Produksi & Packing Anti-Bocor</h4>
                <p>Pesanan dipersiapkan dengan segel ganda, lakban pengaman tebal, dan plastik pembungkus berlapis standar kargo cairan.</p>
            </div>

            <div class="cq-step-card">
                <div class="cq-step-num">04</div>
                <h4>Resi & Pelacakan Live</h4>
                <p>Nomor resi kargo resmi dibagikan segera setelah paket diserahkan, dengan pendampingan pelacakan hingga barang tiba di tujuan.</p>
            </div>
        </div>
    </div>
</section>

<!-- 8. FAQ ACCORDION (FAQPAGE SCHEMA COMPLIANT) -->
<section class="cq-section" style="background-color: #ffffff;">
    <div class="cq-container" style="max-width: 860px;">
        <div style="text-align: center; margin-bottom: 40px;">
            <span style="font-family: var(--cq-font-body); font-size: 16px; font-weight: 800; color: var(--cq-royal-blue); text-transform: uppercase; letter-spacing: 2px;">
                Tanya Jawab
            </span>
            <h2 style="font-size: clamp(28px, 4vw, 40px); margin-top: 8px; color: var(--cq-text-dark);">
                Pertanyaan yang Sering Diajukan
            </h2>
        </div>

        <div class="cq-faq-accordion">
            <div class="cq-faq-item">
                <button class="cq-faq-question" aria-expanded="false">
                    <span>Apakah melayani pengiriman sabun cair dan biang ke luar pulau Jawa?</span>
                    <svg class="cq-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                </button>
                <div class="cq-faq-answer">
                    <p>Ya, Cleanique Lab melayani pengiriman ke seluruh 38 provinsi di Indonesia menggunakan ekspedisi kargo resmi spesialis cairan (J&T Cargo, Indah Logistik, Dakota, dll.) dengan segel tutup ganda anti-bocor. Untuk efisiensi biaya kirim luar pulau, kami sangat menyarankan memilih <strong>Paket Biang Sabun Konsentrat</strong>.</p>
                </div>
            </div>

            <div class="cq-faq-item">
                <button class="cq-faq-question" aria-expanded="false">
                    <span>Apa keuntungan membeli paket biang sabun konsentrat Cleanique Lab?</span>
                    <svg class="cq-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                </button>
                <div class="cq-faq-answer">
                    <p>Paket biang sabun konsentrat menghemat ongkos kirim hingga 80% karena dikirim tanpa air. Anda cukup menambahkan air bersih sesuai panduan takaran resmi kami, diaduk rata, dan dalam hitungan menit Anda menghasilkan sabun kental berbusa melimpah dengan kualitas persis standar pabrik.</p>
                </div>
            </div>

            <div class="cq-faq-item">
                <button class="cq-faq-question" aria-expanded="false">
                    <span>Apakah Cleanique Lab melayani maklon atau private label merek sendiri?</span>
                    <svg class="cq-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                </button>
                <div class="cq-faq-answer">
                    <p>Ya, kami melayani jasa maklon (OEM) dan private label untuk pembuatan sabun cair, deterjen, dan pembersih lantai dengan merek, aroma, warna, dan formula kustom Anda sendiri dengan MOQ dan perjanjian kerja sama yang fleksibel.</p>
                </div>
            </div>

            <div class="cq-faq-item">
                <button class="cq-faq-question" aria-expanded="false">
                    <span>Berapa Minimum Order Quantity (MOQ) untuk pembelian grosir jerigen atau drum?</span>
                    <svg class="cq-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                </button>
                <div class="cq-faq-answer">
                    <p>Pembelian jerigen 5 Liter tidak memiliki batas minimum ketat (bisa order mulai dari 1 jerigen). Untuk pasokan drum 200L atau pesanan formula kustom, berlaku MOQ khusus dengan harga grosir pabrik yang jauh lebih hemat.</p>
                </div>
            </div>

            <div class="cq-faq-item">
                <button class="cq-faq-question" aria-expanded="false">
                    <span>Apakah produk sabun Cleanique Lab aman bagi kulit sensitif?</span>
                    <svg class="cq-faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                </button>
                <div class="cq-faq-answer">
                    <p>Seluruh formulasi kami dirancang dengan pH seimbang netral (pH 6.5 - 7.5) dan diperkaya ekstrak pelembap pada produk Hand Soap, serta bebas dari zat berbahaya seperti triclosan keras dan merkuri, sehingga tidak membuat tangan panas atau kering.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 9. BANNER KEMITRAAN & AJAKAN BISNIS (SLATE DARK BACKGROUND) -->
<section class="cq-section" style="background-color: #2b2b33; color: #ffffff; padding-top: 40px; padding-bottom: 100px;">
    <div class="cq-container">
        <div class="cq-cta-box" style="background: linear-gradient(135deg, #109733 0%, #3a7bd5 100%);">
            <h2>Mulai Usaha Sabun Curah di Kota Anda Sekarang</h2>
            <p>
                Dapatkan paket kemitraan agen, pasokan curah langsung dari pabrik, dan paket biang sabun konsentrat dengan modal terjangkau serta potensi keuntungan tinggi.
            </p>
            <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya ingin info detail Paket Kemitraan & Peluang Usaha Sabun.')); ?>" 
                   target="_blank" 
                   rel="noopener" 
                   class="cq-btn-primary">
                    <svg class="cq-icon" width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                    Gabung Kemitraan Sekarang
                </a>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="cq-btn-outline">
                    Konsultasi Gratis
                </a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
