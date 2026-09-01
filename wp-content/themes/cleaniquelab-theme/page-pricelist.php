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
        <div class="cq-spotlight-card" style="border-left: 6px solid var(--cq-green-deep);">
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
                            Pesan Paket Biang via WA &rarr;
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

<!-- 2. DAFTAR HARGA & TABEL LENGKAP -->
<section class="cq-section" style="background-color: var(--cq-bg-soft); padding-top: 40px;">
    <div class="cq-container">
        <div style="text-align: center; margin-bottom: 30px;">
            <h2 style="font-size: clamp(24px, 3.5vw, 34px); color: var(--cq-text-dark);">
                Tabel Katalog Harga Lengkap
            </h2>
            <p style="font-size: 15px; color: var(--cq-text-muted); margin-top: 6px;">
                Pilih kategori di bawah untuk menyaring daftar produk dan harga satuan / grosir.
            </p>
        </div>

        <!-- Filter Tabs -->
        <div class="cq-tabs-nav">
            <button class="cq-tab-btn active" data-filter="all">Semua Produk</button>
            <button class="cq-tab-btn" data-filter="dishwash">Cuci Piring</button>
            <button class="cq-tab-btn" data-filter="laundry">Laundry</button>
            <button class="cq-tab-btn" data-filter="handsoap">Hand Soap</button>
            <button class="cq-tab-btn" data-filter="floor">Karbol & Lantai</button>
            <button class="cq-tab-btn" data-filter="biang">Paket Biang / Bahan</button>
        </div>

        <!-- Tabel Harga -->
        <div class="cq-table-responsive">
            <table class="cq-price-table">
                <thead>
                    <tr>
                        <th>Nama Produk & Varian</th>
                        <th>Kategori</th>
                        <th>Kemasan</th>
                        <th>Harga Ecer</th>
                        <th>Harga Grosir (Min 5)</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dishwashing -->
                    <tr data-category="dishwash">
                        <td>
                            <strong>Sabun Cuci Piring Jeruk Nipis 5L</strong>
                            <div style="font-size: 13px; color: var(--cq-text-muted);">Busa melimpah, kesat instan, ekstrak jeruk nipis alami</div>
                        </td>
                        <td><span class="cq-tag cq-tag-green">Cuci Piring</span></td>
                        <td>Jerigen 5 Liter</td>
                        <td><strong>Rp 35.000</strong></td>
                        <td><strong style="color: var(--cq-green-deep);">Rp 30.000</strong></td>
                        <td>
                            <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya ingin pesan Sabun Cuci Piring Jeruk Nipis 5L')); ?>" target="_blank" rel="noopener" class="cq-btn-primary cq-btn-sm">
                                Pesan
                            </a>
                        </td>
                    </tr>

                    <!-- Laundry -->
                    <tr data-category="laundry">
                        <td>
                            <strong>Deterjen Cair Laundry (Liquid Detergent) 5L</strong>
                            <div style="font-size: 13px; color: var(--cq-text-muted);">Rendah busa khusus mesin matic & manual, aroma floral segar</div>
                        </td>
                        <td><span class="cq-tag cq-tag-purple">Laundry</span></td>
                        <td>Jerigen 5 Liter</td>
                        <td><strong>Rp 45.000</strong></td>
                        <td><strong style="color: var(--cq-green-deep);">Rp 38.000</strong></td>
                        <td>
                            <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya ingin pesan Deterjen Cair Laundry 5L')); ?>" target="_blank" rel="noopener" class="cq-btn-primary cq-btn-sm">
                                Pesan
                            </a>
                        </td>
                    </tr>

                    <tr data-category="laundry">
                        <td>
                            <strong>Pelembut & Pewangi Pakaian (Softener) 5L</strong>
                            <div style="font-size: 13px; color: var(--cq-text-muted);">Melembutkan serat kain, anti kusut, wangi tahan berminggu-minggu</div>
                        </td>
                        <td><span class="cq-tag cq-tag-purple">Laundry</span></td>
                        <td>Jerigen 5 Liter</td>
                        <td><strong>Rp 42.000</strong></td>
                        <td><strong style="color: var(--cq-green-deep);">Rp 36.000</strong></td>
                        <td>
                            <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya ingin pesan Softener Pewangi Laundry 5L')); ?>" target="_blank" rel="noopener" class="cq-btn-primary cq-btn-sm">
                                Pesan
                            </a>
                        </td>
                    </tr>

                    <!-- Hand Soap -->
                    <tr data-category="handsoap">
                        <td>
                            <strong>Sabun Cuci Tangan (Hand Soap Anti-Bacterial) 5L</strong>
                            <div style="font-size: 13px; color: var(--cq-text-muted);">Varian Strawberry / Apple / Lemon, plus moisturizer lembut</div>
                        </td>
                        <td><span class="cq-tag cq-tag-blue">Hand Soap</span></td>
                        <td>Jerigen 5 Liter</td>
                        <td><strong>Rp 38.000</strong></td>
                        <td><strong style="color: var(--cq-green-deep);">Rp 32.000</strong></td>
                        <td>
                            <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya ingin pesan Hand Soap Anti-Bacterial 5L')); ?>" target="_blank" rel="noopener" class="cq-btn-primary cq-btn-sm">
                                Pesan
                            </a>
                        </td>
                    </tr>

                    <!-- Floor & Karbol -->
                    <tr data-category="floor">
                        <td>
                            <strong>Karbol Wangi Sereh Alami (Citronella) 5L</strong>
                            <div style="font-size: 13px; color: var(--cq-text-muted);">Minyak sereh murni, pengusir lalat & serangga, disinfektan lantai</div>
                        </td>
                        <td><span class="cq-tag cq-tag-red">Karbol</span></td>
                        <td>Jerigen 5 Liter</td>
                        <td><strong>Rp 42.000</strong></td>
                        <td><strong style="color: var(--cq-green-deep);">Rp 36.000</strong></td>
                        <td>
                            <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya ingin pesan Karbol Wangi Sereh 5L')); ?>" target="_blank" rel="noopener" class="cq-btn-primary cq-btn-sm">
                                Pesan
                            </a>
                        </td>
                    </tr>

                    <tr data-category="floor">
                        <td>
                            <strong>Pembersih Lantai Super Kilap (Floor Cleaner) 5L</strong>
                            <div style="font-size: 13px; color: var(--cq-text-muted);">Aroma Lavender / Apel / Citrus, cepat kering & tidak lengket</div>
                        </td>
                        <td><span class="cq-tag cq-tag-red">Lantai</span></td>
                        <td>Jerigen 5 Liter</td>
                        <td><strong>Rp 32.000</strong></td>
                        <td><strong style="color: var(--cq-green-deep);">Rp 27.000</strong></td>
                        <td>
                            <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya ingin pesan Pembersih Lantai 5L')); ?>" target="_blank" rel="noopener" class="cq-btn-primary cq-btn-sm">
                                Pesan
                            </a>
                        </td>
                    </tr>

                    <!-- Biang / Paket Konsentrat -->
                    <tr data-category="biang">
                        <td>
                            <strong>Paket Biang Sabun Cuci Piring (Konsentrat)</strong>
                            <div style="font-size: 13px; color: var(--cq-text-muted);">1 Paket biang cukup ditambah air jadi 25-30 Liter sabun kental siap pakai!</div>
                        </td>
                        <td><span class="cq-tag cq-tag-green">Paket Biang</span></td>
                        <td>Paket 1 Kg</td>
                        <td><strong>Rp 55.000</strong></td>
                        <td><strong style="color: var(--cq-green-deep);">Rp 48.000</strong></td>
                        <td>
                            <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya ingin pesan Paket Biang Cuci Piring')); ?>" target="_blank" rel="noopener" class="cq-btn-primary cq-btn-sm">
                                Pesan
                            </a>
                        </td>
                    </tr>

                    <tr data-category="biang">
                        <td>
                            <strong>Paket Biang Deterjen Laundry Konsentrat</strong>
                            <div style="font-size: 13px; color: var(--cq-text-muted);">1 Paket biang cukup ditambah air jadi 25 Liter deterjen matic premium</div>
                        </td>
                        <td><span class="cq-tag cq-tag-purple">Paket Biang</span></td>
                        <td>Paket 1 Kg</td>
                        <td><strong>Rp 65.000</strong></td>
                        <td><strong style="color: var(--cq-green-deep);">Rp 58.000</strong></td>
                        <td>
                            <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya ingin pesan Paket Biang Deterjen Laundry')); ?>" target="_blank" rel="noopener" class="cq-btn-primary cq-btn-sm">
                                Pesan
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="margin-top: 30px; padding: 20px; background-color: #ffffff; border: 1px solid var(--cq-border-light); border-radius: 14px; font-size: 14px; color: var(--cq-text-muted);">
            * Harga belum termasuk ongkos kirim. Untuk pembelian drum (200 Liter) atau pemesanan skala industri/maklon brand sendiri, silakan hubungi tim sales kami untuk penawaran khusus.
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
