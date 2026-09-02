<?php
/**
 * Template Name: Daftar Harga & Pricelist with Product Spotlight
 *
 * @package CleaniqueLab
 */

get_header();
?>

<!-- HERO SECTION PRICELIST -->
<section class="cq-hero" style="padding-top: 70px; padding-bottom: 180px;">
    <div class="cq-container">
        <span class="cq-hero-eyebrow">Pricelist & Katalog Resmi Pabrik</span>
        <h1 class="cq-hero-h1" style="font-size: clamp(40px, 6.5vw, 84px);">Daftar Harga & Paket Produk</h1>
        <p class="cq-hero-lead">
            Dapatkan harga grosir tangan pertama langsung dari produsen. Tersedia kemasan jerigen siap pakai 5 Liter, pasokan drum curah 20L - 200L, dan paket biang konsentrat hemat ongkir kirim seluruh Indonesia.
        </p>
    </div>

    <div class="cq-wave-divider">
        <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="#ffffff" d="M0,160L48,176C96,192,192,224,288,213.3C384,203,480,149,576,144C672,139,768,181,864,197.3C960,213,1056,203,1152,181.3C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
</section>

<!-- INTERACTIVE PDF PRICELIST VIEWER & DOWNLOAD SECTION -->
<section class="cq-section" style="background-color: #ffffff; padding-top: 50px; padding-bottom: 50px;">
    <div class="cq-container">
        <div style="background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); border-radius: 24px; border: 1px solid var(--cq-border-light); padding: 32px; box-shadow: 0 12px 36px rgba(0,0,0,0.05);">
            <!-- Header bar for PDF Viewer -->
            <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px; margin-bottom: 24px; padding-bottom: 20px; border-bottom: 1px solid var(--cq-border-light);">
                <div>
                    <span style="display: inline-flex; align-items: center; gap: 6px; font-size: 13px; font-weight: 800; color: #c61111; background: #fff0f0; padding: 4px 12px; border-radius: 50px; border: 1px solid #ffd6d6; margin-bottom: 8px;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><polyline points="14 2 14 8 20 8"/><path d="M10 12v6"/><path d="m13 15-3 3-3-3"/></svg>
                        PDF Dokumen Resmi
                    </span>
                    <h2 style="font-size: clamp(22px, 3.2vw, 32px); color: var(--cq-text-dark); margin: 0;">
                        Katalog & Price List Lengkap
                    </h2>
                    <p style="font-size: 14px; color: var(--cq-text-muted); margin-top: 4px;">
                        Pratinjau dokumen daftar harga resmi Cleanique Lab. Klik tombol di kanan untuk membuka atau mengunduh langsung dari Google Drive.
                    </p>
                </div>

                <div style="display: flex; align-items: center; gap: 12px; flex-wrap: wrap;">
                    <a href="https://drive.google.com/file/d/1rZk5N3N1P7gJWDF6cjfjbPBoNNJTmrnW/view?usp=drive_link" 
                       target="_blank" 
                       rel="noopener" 
                       class="cq-btn-primary" 
                       style="background: var(--cq-gradient-cta); padding: 12px 24px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                        Download PDF
                    </a>
                    <a href="https://drive.google.com/file/d/1rZk5N3N1P7gJWDF6cjfjbPBoNNJTmrnW/view?usp=drive_link" 
                       target="_blank" 
                       rel="noopener" 
                       class="cq-btn-outline cq-btn-outline-dark" 
                       style="padding: 12px 20px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                        Buka Drive
                    </a>
                </div>
            </div>

            <!-- PDF Viewer Iframe Container -->
            <div style="position: relative; width: 100%; min-height: 550px; height: 75vh; border-radius: 16px; overflow: hidden; background: #ffffff; border: 1px solid var(--cq-border-light); box-shadow: inset 0 2px 6px rgba(0,0,0,0.04);">
                <iframe 
                    src="https://drive.google.com/file/d/1rZk5N3N1P7gJWDF6cjfjbPBoNNJTmrnW/preview" 
                    title="Pratinjau Katalog & Price List Cleanique Lab" 
                    width="100%" 
                    height="100%" 
                    style="border: 0; position: absolute; top: 0; left: 0; width: 100%; height: 100%;" 
                    allow="autoplay">
                </iframe>
            </div>
        </div>
    </div>
</section>

<!-- 1. SOROTAN PRODUK UNGGULAN & PAKET BIANG KONSENTRAT -->
<section class="cq-section" style="background-color: #ffffff; padding-bottom: 40px;">
    <div class="cq-container">
        <div style="text-align: center; max-width: 760px; margin: 0 auto 40px auto;">
            <span style="font-family: var(--cq-font-body); font-size: 16px; font-weight: 800; color: var(--cq-green-deep); text-transform: uppercase; letter-spacing: 2px;">
                Sorotan Produk Unggulan
            </span>
            <h2 style="font-size: clamp(26px, 3.8vw, 38px); margin-top: 8px; color: var(--cq-text-dark);">
                Formula Terlaris & Paket Paling Hemat
            </h2>
        </div>

        <!-- Spotlight Card 1: Paket Biang Sabun Konsentrat -->
        <div class="cq-spotlight-card">
            <div class="cq-spotlight-inner">
                <div>
                    <div class="cq-spotlight-badge" style="color: var(--cq-green-deep); background: #eafaf1; border-color: #bbf2d0;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        Sorotan Unggulan: Sangat Hemat Ongkir Luar Pulau
                    </div>
                    <h3 class="cq-spotlight-title">
                        Paket Biang Sabun Konsentrat (1 Kg jadi 25 - 30 Liter)
                    </h3>
                    <p class="cq-spotlight-desc">
                        Solusi terbaik bagi reseller, pengusaha laundry, dan agen luar pulau Jawa. Dikirim dalam bentuk biang formula tanpa air, cukup campur air bersih di lokasi Anda dan langsung menghasilkan sabun kental berbusa melimpah berkualitas standar pabrik.
                    </p>
                    
                    <ul class="cq-spotlight-features">
                        <li><svg class="cq-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--cq-green-deep)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> <strong>Hemat Biaya Ongkir Kargo s/d 80%</strong></li>
                        <li><svg class="cq-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--cq-green-deep)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> <strong>Tersedia Varian:</strong> Cuci Piring Jeruk Nipis & Deterjen Laundry Matic</li>
                        <li><svg class="cq-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--cq-green-deep)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> <strong>Panduan Takaran & SOP Pencampuran Lengkap</strong></li>
                    </ul>

                    <div style="display: flex; align-items: center; gap: 16px; flex-wrap: wrap;">
                        <div>
                            <span style="font-size: 13px; color: var(--cq-text-muted); display: block;">Mulai dari:</span>
                            <strong style="font-size: 26px; color: var(--cq-green-deep); font-weight: 900;">Rp 48.000</strong> <span style="font-size: 13px; color: var(--cq-text-muted);">/ paket (Grosir)</span>
                        </div>
                        <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya tertarik pesan Paket Biang Sabun Konsentrat. Mohon info pilihan aroma dan cara pencampurannya.')); ?>" 
                           target="_blank" 
                           rel="noopener" 
                           class="cq-btn-primary cq-btn-sm" 
                           style="background: var(--cq-gradient-green);">
                            Pesan Paket &rarr;
                        </a>
                    </div>
                </div>

                <div class="cq-spotlight-visual" style="background: linear-gradient(135deg, #e8f9ed 0%, #cbf2d5 100%);">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/promo-kemitraan.jpg'); ?>" alt="Sorotan Paket Biang Sabun Cleanique Lab" onerror="this.src='https://cdn.cleaniquelab.com/wp-content/uploads/2025/02/Aneka-Sabun-Cleanique-Lab.webp';">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PAKET KEAGENAN PRICING SECTION -->
<section id="paket-keagenan" class="cq-section" style="background-color: var(--cq-bg-soft); padding: 90px 0;">
    <div class="cq-container">
        <div style="text-align: center; max-width: 820px; margin: 0 auto 50px auto;">
            <span style="font-family: var(--cq-font-body); font-size: 16px; font-weight: 900; color: #7edb0d; text-transform: uppercase; letter-spacing: 3px; display: inline-block; margin-bottom: 8px;">
                DAFTAR HARGA
            </span>
            <h2 style="font-size: clamp(32px, 5vw, 52px); margin-top: 4px; color: var(--cq-royal-blue); font-weight: 900; font-family: var(--cq-font-heading);">
                Paket Keagenan
            </h2>
            <p style="font-size: 16px; color: var(--cq-text-muted); margin-top: 10px; line-height: 1.6; font-weight: 500;">
                Anda akan mendapatkan produk senilai uang yang anda investasikan dan juga diskon dengan besaran sesuai paket keagenan yang anda pilih
            </p>
        </div>

        <div class="cq-keagenan-grid">
            <!-- 1. STARTER (Green) -->
            <div class="cq-keagenan-card starter">
                <div>
                    <div style="text-align: center;">
                        <span class="cq-keagenan-badge">STARTER</span>
                        <div class="cq-keagenan-price">1,8 JUTA</div>
                        <div class="cq-keagenan-subdisc">Diskon 5-10%</div>
                    </div>
                    <ul class="cq-keagenan-list">
                        <li>Bebas Pilih Produk Senilai 1.8 Juta Rupiah</li>
                        <li>Dapat Diskon Pembelian sebesar 5-10% per transaksi</li>
                        <li>Limited hanya berlaku hingga akhir bulan ini</li>
                        <li>Bonus Gambar Media Promosi Produk</li>
                    </ul>
                </div>
                <div>
                    <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya ingin daftar Paket Keagenan STARTER 1.8 Juta.')); ?>" 
                       target="_blank" 
                       rel="noopener" 
                       class="cq-keagenan-btn">
                        DAFTAR
                    </a>
                </div>
            </div>

            <!-- 2. RESELLER (Purple) -->
            <div class="cq-keagenan-card reseller">
                <div>
                    <div style="text-align: center;">
                        <span class="cq-keagenan-badge">RESELLER</span>
                        <div class="cq-keagenan-price">7,5 JUTA</div>
                        <div class="cq-keagenan-subdisc">Diskon 10-15%</div>
                    </div>
                    <ul class="cq-keagenan-list">
                        <li>Bebas Pilih Produk Senilai 7.5 Juta Rupiah</li>
                        <li>Dapat Diskon Pembelian sebesar 10-15% per transaksi</li>
                        <li>Order berikutnya tetap dapat diskon tanpa min. order</li>
                        <li>Bonus Gambar Media Promosi Produk</li>
                    </ul>
                </div>
                <div>
                    <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya ingin daftar Paket Keagenan RESELLER 7.5 Juta.')); ?>" 
                       target="_blank" 
                       rel="noopener" 
                       class="cq-keagenan-btn">
                        DAFTAR
                    </a>
                </div>
            </div>

            <!-- 3. AGEN (Blue) -->
            <div class="cq-keagenan-card agen">
                <div>
                    <div style="text-align: center;">
                        <span class="cq-keagenan-badge">AGEN</span>
                        <div class="cq-keagenan-price">15 JUTA</div>
                        <div class="cq-keagenan-subdisc">Diskon 15-20%</div>
                    </div>
                    <ul class="cq-keagenan-list">
                        <li>Bebas Pilih Produk Senilai 15 Juta Rupiah</li>
                        <li>Dapat Diskon Pembelian sebesar 15-20% per transaksi</li>
                        <li>Order berikutnya tetap dapat diskon tanpa min. order</li>
                        <li>Bonus Gambar Media Promosi Produk</li>
                    </ul>
                </div>
                <div>
                    <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya ingin daftar Paket Keagenan AGEN 15 Juta.')); ?>" 
                       target="_blank" 
                       rel="noopener" 
                       class="cq-keagenan-btn">
                        DAFTAR
                    </a>
                </div>
            </div>

            <!-- 4. SUPER AGEN (Red) -->
            <div class="cq-keagenan-card super-agen">
                <div>
                    <div style="text-align: center;">
                        <span class="cq-keagenan-badge">SUPER AGEN</span>
                        <div class="cq-keagenan-price">50 JUTA</div>
                        <div class="cq-keagenan-subdisc">Diskon 16-23%</div>
                    </div>
                    <ul class="cq-keagenan-list">
                        <li>Bebas Pilih Produk Senilai 50 Juta Rupiah</li>
                        <li>Dapat Diskon Pembelian sebesar 16-23% per transaksi</li>
                        <li>Limited hanya berlaku hingga akhir bulan ini</li>
                        <li>Bonus Gambar Media Promosi Produk</li>
                        <li>Hak Eksklusifitas wilayah</li>
                        <li>Voucher Belanja</li>
                    </ul>
                </div>
                <div>
                    <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya ingin daftar Paket Keagenan SUPER AGEN 50 Juta.')); ?>" 
                       target="_blank" 
                       rel="noopener" 
                       class="cq-keagenan-btn">
                        DAFTAR
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. CARA PEMESANAN (3 LANGKAH) -->
<section class="cq-section" style="background-color: #ffffff;">
    <div class="cq-container">
        <div style="text-align: center; max-width: 700px; margin: 0 auto 40px auto;">
            <h2 style="font-size: clamp(26px, 4vw, 36px); color: var(--cq-text-dark);">
                Cara Mudah Pemesanan Sabun
            </h2>
        </div>

        <div class="cq-step-grid" style="grid-template-columns: repeat(3, 1fr);">
            <div class="cq-step-card">
                <div class="cq-step-num">01</div>
                <h4 style="font-size: 18px; font-weight: 800; margin-bottom: 8px;">Pilih Produk & Jumlah</h4>
                <p style="font-size: 14px; color: var(--cq-text-muted);">Tentukan varian sabun, kemasan (jerigen 5L, drum, atau biang), dan kuantitas kebutuhan Anda.</p>
            </div>

            <div class="cq-step-card">
                <div class="cq-step-num">02</div>
                <h4 style="font-size: 18px; font-weight: 800; margin-bottom: 8px;">Konfirmasi via WhatsApp</h4>
                <p style="font-size: 14px; color: var(--cq-text-muted);">Klik tombol pesan untuk terhubung dengan Customer Support kami untuk invoice resmi & estimasi ongkir.</p>
            </div>

            <div class="cq-step-card">
                <div class="cq-step-num">03</div>
                <h4 style="font-size: 18px; font-weight: 800; margin-bottom: 8px;">Pengiriman Cepat & Aman</h4>
                <p style="font-size: 14px; color: var(--cq-text-muted);">Pesanan dikemas dengan standar segel anti-bocor dan dikirim via ekspedisi kargo terpercaya ke kota Anda.</p>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
