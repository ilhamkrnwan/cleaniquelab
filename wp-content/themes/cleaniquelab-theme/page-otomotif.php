<?php
/**
 * Template Name: Kimia Pembersih & Perawatan Otomotif
 * Description: Standalone Landing Page Katalog Kimia Otomotif dengan tema Hitam Biru (Black & Electric Blue), Gambar Produk Resmi, dan Layering Detail Produk.
 *
 * @package CleaniqueLab
 */

// Ambil Data Katalog Produk Otomotif (Dapat diatur dinamis dari WP Admin Dashboard)
$otomotif_products = function_exists('cleaniquelab_get_otomotif_products') 
    ? cleaniquelab_get_otomotif_products() 
    : [];
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="icon" type="image/x-icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/images/favicon.ico'); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url(get_template_directory_uri() . '/assets/images/favicon-32x32.png'); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(get_template_directory_uri() . '/assets/images/apple-touch-icon.png'); ?>">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Source+Sans+3:ital,wght@0,300..900;1,300..900&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class('cq-otomotif-landing-page'); ?>>
<?php wp_body_open(); ?>

<!-- 1. DEDICATED STANDALONE NAVBAR (TEMA HITAM BIRU) -->
<header class="cq-otomotif-nav">
    <div class="cq-container cq-otomotif-nav-inner">
        <a href="<?php echo esc_url(home_url('/otomotif/')); ?>" class="cq-otomotif-brand">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>" alt="Cleanique Lab Logo" width="36" height="36">
            <span class="cq-otomotif-brand-text">
                CLEANIQUE<strong>LAB</strong>
                <span class="cq-otomotif-brand-pill">OTOMOTIF</span>
            </span>
        </a>

        <nav class="cq-otomotif-menu">
            <a href="#katalog-otomotif">Katalog Produk</a>
            <a href="#aksesoris">Paket Aplikator</a>
            <a href="#keunggulan">Keunggulan Pabrik</a>
            <a href="#sampel">Uji Sampel</a>
        </nav>

        <div class="cq-otomotif-nav-action">
            <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya ingin konsultasi kimia otomotif / car wash.')); ?>" target="_blank" rel="noopener" class="cq-btn-primary cq-otomotif-nav-btn">
                <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                <span>Order WA</span>
            </a>
        </div>
    </div>
</header>

<!-- 2. HERO BANNER OTOMOTIF SECTION (HITAM BIRU & REAL ASSETS SHOWCASE) -->
<section class="cq-hero cq-otomotif-hero">
    <div class="cq-container">
        <div class="cq-otomotif-hero-grid">
            <div class="cq-otomotif-hero-copy">
                <!-- Eyebrow Tag (Maksimal 2 Kata) -->
                <span class="cq-hero-eyebrow cq-otomotif-eyebrow">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="display: inline-block; vertical-align: middle; margin-right: 4px;"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                    Formula Otomotif
                </span>

                <!-- Main Banner Title -->
                <h1 class="cq-hero-h1 cq-otomotif-hero-h1">
                    Kimia Pembersih &amp; Perawatan<br>
                    <span class="cq-otomotif-highlight">Otomotif Profesional</span>
                </h1>

                <!-- Subtitle / Lead -->
                <p class="cq-hero-lead cq-otomotif-hero-lead">
                    Formulasi kimia kendaraan standar pabrik tangan pertama untuk usaha cuci mobil/motor, salon detailing, rental, dan armada. Bersih tuntas, kilap tahan lama, aman cat &amp; coating, dengan pilihan kemasan botol retail hingga curah drum.
                </p>



                <!-- Banner Actions (Maksimal 2 Kata) -->
                <div class="cq-hero-actions cq-otomotif-hero-actions">
                    <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya tertarik pasokan kimia otomotif / car wash curah.')); ?>" target="_blank" rel="noopener" class="cq-btn-primary cq-otomotif-btn-cta">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                        Order Curah
                    </a>
                    <a href="#katalog-otomotif" class="cq-btn-outline cq-otomotif-btn-outline">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
                        Katalog Produk
                    </a>
                </div>
            </div>

            <!-- Hero Image Showcase (Real Render Lineup) -->
            <div class="cq-otomotif-hero-visual">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/otomotif/hero_all.png'); ?>" alt="Lini Produk Kimia Otomotif Cleanique Lab" class="cq-otomotif-hero-img" width="560" height="380" loading="eager">
                <div class="cq-hero-visual-badge">
                    <span>Produksi PT Indotech Berkah Abadi</span>
                    <strong>Lini Kimia Otomotif Resmi 100ml, 250ml, 1L &amp; Curah</strong>
                </div>
            </div>
        </div>
    </div>

    <!-- Organic Wave Divider (Deep Slate) -->
    <div class="cq-wave-divider">
        <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="#0d121f" d="M0,160L48,176C96,192,192,224,288,213.3C384,203,480,149,576,144C672,139,768,181,864,197.3C960,213,1056,203,1152,181.3C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
</section>

<!-- 3. SECTION KATALOG PRODUK OTOMOTIF (HITAM BIRU) -->
<section id="katalog-otomotif" class="cq-section cq-otomotif-catalog-section">
    <div class="cq-container">
        <!-- Section Header -->
        <div class="cq-otomotif-section-header">
            <span class="cq-spotlight-badge">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m10 15 5-3-5-3v6Z"/></svg>
                Katalog Produk
            </span>
            <h2 class="cq-otomotif-section-h2">
                Pilih Formula Perawatan Kendaraan
            </h2>
            <p class="cq-otomotif-section-lead">
                Klik kartu atau tombol <strong>&ldquo;Detail Produk&rdquo;</strong> untuk membuka layering spesifikasi lengkap, cara pakai, peringatan resmi, dan takaran:
            </p>

            <!-- Category Filter Buttons (Semua Maksimal 2 Kata) -->
            <div class="cq-otomotif-filters" role="tablist" aria-label="Filter Kategori Produk">
                <button type="button" class="cq-otomotif-filter-btn active" data-filter="all">Semua Produk</button>
                <button type="button" class="cq-otomotif-filter-btn" data-filter="mesin">Perawatan Mesin</button>
                <button type="button" class="cq-otomotif-filter-btn" data-filter="eksterior">Restorasi Eksterior</button>
                <button type="button" class="cq-otomotif-filter-btn" data-filter="ban-velg">Perawatan Roda</button>
                <button type="button" class="cq-otomotif-filter-btn" data-filter="kaca">Perawatan Kaca</button>
                <button type="button" class="cq-otomotif-filter-btn" data-filter="interior">Perawatan Interior</button>
            </div>
        </div>

        <!-- Product Cards Grid (2 Kolom Kanan Kiri di Mobile) -->
        <div class="cq-otomotif-grid">
            <?php 
            foreach ($otomotif_products as $key => $p) : 
                $img_url = '';
                if (!empty($p['image'])) {
                    $img_url = (strpos($p['image'], 'http') === 0) ? $p['image'] : get_template_directory_uri() . $p['image'];
                }
            ?>
                <div class="cq-otomotif-card" data-category="<?php echo esc_attr($p['category']); ?>" id="product-card-<?php echo esc_attr($p['id']); ?>" onclick="window.cqCardClick(event, '<?php echo esc_attr($p['id']); ?>')">
                    <!-- Top Ribbon / Category Badge (Maksimal 2 Kata) -->
                    <div class="cq-otomotif-card-header">
                        <span class="cq-otomotif-cat-badge"><?php echo esc_html($p['cat_name']); ?></span>
                    </div>

                    <!-- Product Bottle Image Showcase -->
                    <div class="cq-otomotif-card-img-wrap">
                        <?php if (!empty($img_url)) : ?>
                            <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($p['title']); ?>" class="cq-otomotif-card-img" loading="lazy">
                        <?php else : ?>
                            <div class="cq-otomotif-icon-wrap" style="color: <?php echo esc_attr($p['badge_color']); ?>;">
                                <?php echo $p['icon']; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Title & Summary -->
                    <div class="cq-otomotif-card-body">
                        <h3 class="cq-otomotif-card-title"><?php echo esc_html($p['title']); ?></h3>
                        <p class="cq-otomotif-card-desc"><?php echo esc_html($p['summary']); ?></p>

                    </div>

                    <!-- Card Actions (Semua Label Maksimal 2 Kata) -->
                    <div class="cq-otomotif-card-footer">
                        <button type="button" class="cq-btn-primary cq-btn-otomotif-detail" onclick="window.cqOpenOtomotifLayering('<?php echo esc_attr($p['id']); ?>')">
                            <span>Detail Produk</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        </button>
                        <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya ingin memesan ' . $p['title'])); ?>" target="_blank" rel="noopener" class="cq-btn-outline cq-btn-outline-dark cq-btn-otomotif-wa" title="Order Cepat via WhatsApp" onclick="event.stopPropagation();">
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                            Order WA
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 4. SEKSI AKSESORIS & PERLENGKAPAN DETAILING (HITAM BIRU) -->
<section id="aksesoris" class="cq-section cq-otomotif-addons-section">
    <div class="cq-container">
        <div class="cq-otomotif-section-header">
            <span class="cq-spotlight-badge">Aksesoris Detailing</span>
            <h2 class="cq-otomotif-section-h2">Paket Aplikator</h2>
            <p class="cq-otomotif-section-lead">Aksesori pendukung resmi untuk hasil aplikasi kimia pembersih dan semir kendaraan yang maksimal:</p>
        </div>
        <div class="cq-otomotif-addons-grid">
            <div class="cq-otomotif-addon-card">
                <div class="cq-otomotif-addon-img-wrap">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/otomotif/addon_kuas.png'); ?>" alt="Kuas Detailing Halus" class="cq-otomotif-addon-img" loading="lazy">
                </div>
                <h4 class="cq-otomotif-addon-title">Kuas Detailing</h4>
                <p class="cq-otomotif-addon-desc">Kuas bulu lembut anti gores untuk sela-sela mesin, baut velg, dan kisi AC.</p>
                <span class="cq-otomotif-addon-badge">Kuas Mesin</span>
            </div>
            <div class="cq-otomotif-addon-card">
                <div class="cq-otomotif-addon-img-wrap">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/otomotif/addon_spons.png'); ?>" alt="Spons Busa Aplikator" class="cq-otomotif-addon-img" loading="lazy">
                </div>
                <h4 class="cq-otomotif-addon-title">Spons Busa</h4>
                <p class="cq-otomotif-addon-desc">Bantalan busa densitas tinggi khusus aplikasi semir ban &amp; penghitam body.</p>
                <span class="cq-otomotif-addon-badge">Busa Lembut</span>
            </div>
            <div class="cq-otomotif-addon-card">
                <div class="cq-otomotif-addon-img-wrap">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/otomotif/addon_microfiber.png'); ?>" alt="Kain Microfiber Lembut" class="cq-otomotif-addon-img" loading="lazy">
                </div>
                <h4 class="cq-otomotif-addon-title">Lap Microfiber</h4>
                <p class="cq-otomotif-addon-desc">Kain microfiber ultra-absorbent tanpa serat untuk poles bodi dan lap kaca jernih.</p>
                <span class="cq-otomotif-addon-badge">Anti Gores</span>
            </div>
            <div class="cq-otomotif-addon-card">
                <div class="cq-otomotif-addon-img-wrap">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/otomotif/addon_sarung_tangan.png'); ?>" alt="Sarung Tangan Nitrile" class="cq-otomotif-addon-img" loading="lazy">
                </div>
                <h4 class="cq-otomotif-addon-title">Sarung Tangan</h4>
                <p class="cq-otomotif-addon-desc">Sarung tangan nitrile hitam pelindung tangan dari cairan kimia saat detailing.</p>
                <span class="cq-otomotif-addon-badge">Proteksi Tangan</span>
            </div>
        </div>
    </div>
</section>

<!-- 5. SEKSI KEUNGGULAN KEMITRAAN CAR WASH & DETAILING -->
<section id="keunggulan" class="cq-section cq-otomotif-advantages-section">
    <div class="cq-container">
        <div class="cq-otomotif-advantages-inner">
            <div class="cq-otomotif-advantages-content">
                <!-- Spotlight Badge (Maksimal 2 Kata) -->
                <span class="cq-spotlight-badge">Keunggulan Pabrik</span>
                <h2 class="cq-otomotif-adv-title">Mengapa Memilih Cleanique Lab Otomotif?</h2>
                <p class="cq-otomotif-adv-desc">
                    Bisnis cuci mobil, bengkel, dan salon detailing membutuhkan formula stabil langsung dari produsen untuk efisiensi modal dan kepuasan pelanggan.
                </p>

                <div class="cq-otomotif-adv-list">
                    <div class="cq-otomotif-adv-item">
                        <div class="cq-adv-bullet">✓</div>
                        <div>
                            <strong>Harga Tangan Pertama Dari Produsen</strong>
                            <p>Diproduksi langsung oleh PT Indotech Berkah Abadi, memberikan margin keuntungan terbaik untuk bisnis salon detailing dan car wash.</p>
                        </div>
                    </div>
                    <div class="cq-otomotif-adv-item">
                        <div class="cq-adv-bullet">✓</div>
                        <div>
                            <strong>Formula Teruji Aman &amp; Efektif</strong>
                            <p>Telah terbukti membersihkan kerak oli mesin, mengangkat jamur kaca, dan menghitamkan trim plastik tanpa merusak pernis cat.</p>
                        </div>
                    </div>
                    <div class="cq-otomotif-adv-item">
                        <div class="cq-adv-bullet">✓</div>
                        <div>
                            <strong>Pasokan Fleksibel Retail &amp; Curah</strong>
                            <p>Tersedia botol trigger siap pakai 100ml &ndash; 1L hingga jerigen curah 5L &ndash; drum 200L untuk kebutuhan operasional bengkel.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Konsultasi Card (Maksimal 2 Kata untuk Judul & Tombol) -->
            <div id="sampel" class="cq-otomotif-adv-card">
                <h3>Sampel Formula</h3>
                <p>Ingin mencoba langsung kualitas formula pembersih mesin, semir ban, atau penghitam bodi di workshop Anda?</p>
                
                <ul class="cq-otomotif-sample-points">
                    <li>Paket Sample Tester Produk Kimia</li>
                    <li>Konsultasi Teknis Aplikasi &amp; Pengerjaan</li>
                    <li>Pengiriman Kargo Cepat Seluruh Indonesia</li>
                </ul>

                <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya pemilik usaha dan ingin memesan sampel formula kimia otomotif.')); ?>" target="_blank" rel="noopener" class="cq-btn-primary cq-otomotif-sample-btn" style="width: 100%; text-align: center; justify-content: center;">
                    Minta Sampel
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* Navbar & Button Anti-Deformasi Mobile */
.cq-otomotif-nav-btn {
    white-space: nowrap !important;
    flex-shrink: 0 !important;
    line-height: 1 !important;
}
@media (max-width: 768px) {
    .cq-otomotif-nav-inner {
        padding: 10px 14px !important;
        gap: 8px !important;
    }
    .cq-otomotif-brand {
        gap: 8px !important;
        min-width: 0 !important;
        flex-shrink: 1 !important;
    }
    .cq-otomotif-brand img {
        width: 28px !important;
        height: 28px !important;
        flex-shrink: 0 !important;
    }
    .cq-otomotif-brand-text {
        font-size: 14.5px !important;
        gap: 6px !important;
        white-space: nowrap !important;
    }
    .cq-otomotif-brand-pill {
        font-size: 8.5px !important;
        padding: 2px 6px !important;
        flex-shrink: 0 !important;
    }
    .cq-otomotif-nav-btn {
        padding: 7px 12px !important;
        font-size: 11.5px !important;
        gap: 5px !important;
        min-height: 32px !important;
        white-space: nowrap !important;
        flex-shrink: 0 !important;
        letter-spacing: 0.3px !important;
    }
    .cq-otomotif-nav-btn svg {
        width: 14px !important;
        height: 14px !important;
    }
    .cq-hero-actions {
        display: flex !important;
        flex-direction: column !important;
        width: 100% !important;
        max-width: 340px !important;
        margin: 0 auto 24px !important;
        gap: 10px !important;
    }
    .cq-otomotif-btn-cta,
    .cq-otomotif-btn-outline {
        width: 100% !important;
        padding: 12px 18px !important;
        font-size: 13.5px !important;
        letter-spacing: 0.4px !important;
        min-height: 42px !important;
        text-align: center !important;
        justify-content: center !important;
        white-space: nowrap !important;
        border-radius: 50px !important;
        box-sizing: border-box !important;
    }
    .cq-otomotif-card-footer {
        display: flex !important;
        flex-direction: column !important;
        gap: 6px !important;
        padding-top: 10px !important;
        width: 100% !important;
    }
    .cq-btn-otomotif-detail {
        width: 100% !important;
        padding: 8px 6px !important;
        font-size: 11px !important;
        font-weight: 700 !important;
        letter-spacing: 0.2px !important;
        min-height: 34px !important;
        justify-content: center !important;
        text-align: center !important;
        white-space: nowrap !important;
        border-radius: 50px !important;
        box-sizing: border-box !important;
        text-transform: none !important;
    }
    .cq-btn-otomotif-wa {
        width: 100% !important;
        padding: 7px 6px !important;
        font-size: 11px !important;
        font-weight: 700 !important;
        letter-spacing: 0.2px !important;
        min-height: 32px !important;
        justify-content: center !important;
        text-align: center !important;
        white-space: nowrap !important;
        border-radius: 50px !important;
        box-sizing: border-box !important;
        text-transform: none !important;
    }
    .cq-otomotif-landing-page .cq-otomotif-sample-btn {
        padding: 11px 18px !important;
        font-size: 13.5px !important;
        letter-spacing: 0.5px !important;
        min-height: 40px !important;
    }
    .cq-otomotif-floating-wa {
        bottom: 18px !important;
        right: 18px !important;
        width: 48px !important;
        height: 48px !important;
        z-index: 9999 !important;
    }
}
@media (max-width: 380px) {
    .cq-otomotif-brand-pill {
        display: none !important;
    }
    .cq-otomotif-brand-text {
        font-size: 13.5px !important;
    }
    .cq-otomotif-nav-btn {
        padding: 6px 10px !important;
        font-size: 11px !important;
    }
}

/* Anti-Penyet & Mobile Responsive Guarantees for Otomotif Layer */
.cq-gallery-main-viewport {
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    overflow: hidden !important;
}
.cq-gallery-main-img {
    width: 100% !important;
    height: 100% !important;
    max-width: 100% !important;
    max-height: 100% !important;
    object-fit: contain !important;
}
@media (max-width: 768px) {
    .cq-full-layer-header-inner {
        flex-wrap: nowrap !important;
        gap: 8px !important;
    }
    .cq-full-layer-header-left {
        flex-wrap: nowrap !important;
        gap: 8px !important;
    }
    .cq-full-layer-badges {
        display: none !important;
    }
    .cq-full-layer-back-btn {
        padding: 7px 14px !important;
        font-size: 12.5px !important;
        white-space: nowrap !important;
    }
    .cq-full-layer-top-wa {
        padding: 7px 14px !important;
        font-size: 12px !important;
        border-radius: 50px !important;
        width: auto !important;
        height: auto !important;
    }
    .cq-full-layer-top-wa span {
        display: inline !important;
    }
    .cq-gallery-main-viewport {
        height: 340px !important;
        max-height: 52vh !important;
        padding: 16px !important;
    }
    .cq-gallery-thumbs-header {
        margin: 14px 0 8px !important;
    }
    .cq-gallery-thumbs-grid {
        display: flex !important;
        flex-wrap: nowrap !important;
        overflow-x: auto !important;
        -webkit-overflow-scrolling: touch !important;
        gap: 10px !important;
        padding: 4px 2px 10px !important;
        scrollbar-width: thin !important;
    }
    .cq-thumb-item {
        flex: 0 0 86px !important;
        width: 86px !important;
        min-width: 86px !important;
        padding: 6px !important;
    }
    .cq-thumb-item img {
        width: 100% !important;
        height: 52px !important;
        object-fit: contain !important;
    }
    .cq-thumb-label {
        font-size: 10px !important;
    }
}
</style>

<!-- 6. INTERACTIVE FULL-SCREEN PRODUCT DETAIL LAYER ("LAYER PENUH") -->
<div id="cq-product-layering" class="cq-full-layer-overlay" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="layering-product-title">
    
    <!-- Top Sticky Header Bar -->
    <header class="cq-full-layer-header">
        <div class="cq-container cq-full-layer-header-inner">
            <div class="cq-full-layer-header-left">
                <button type="button" class="cq-full-layer-back-btn" onclick="window.cqCloseOtomotifLayering()" aria-label="Kembali ke Katalog">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                    <span>Kembali ke Katalog</span>
                </button>
                <div class="cq-full-layer-badges">
                    <span id="layering-product-cat" class="cq-layering-badge-cat">Kategori</span>
                    <span id="layering-product-badge" class="cq-layering-badge-highlight">Highlight</span>
                </div>
            </div>

            <div class="cq-full-layer-header-right">
                <a id="layering-top-wa-btn" href="#" target="_blank" rel="noopener" class="cq-btn-primary cq-full-layer-top-wa">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                    <span>Order via WA</span>
                </a>
                <button type="button" class="cq-full-layer-close-btn" onclick="window.cqCloseOtomotifLayering()" aria-label="Tutup Detail" title="Tutup Detail (Esc)">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Scrollable Full Layer Content Container -->
    <div class="cq-full-layer-scroll">
        <div class="cq-container cq-full-layer-content-grid">
            
            <!-- LEFT COLUMN: PRODUCT IMAGES GALLERY (SEMUA GAMBAR PRODUK TAMPIL DI SINI) -->
            <div class="cq-full-layer-gallery-col">
                <div class="cq-gallery-sticky-wrap">
                    <!-- Main Big Feature Photo Showcase -->
                    <div class="cq-gallery-main-viewport">
                        <img id="layering-product-image" src="" alt="Kemasan Produk" class="cq-gallery-main-img">
                        <span id="layering-active-img-badge" class="cq-gallery-main-badge">Lini Lengkap</span>
                        
                        <!-- Nav Prev/Next Buttons -->
                        <button type="button" class="cq-gallery-arrow cq-gallery-arrow-prev" onclick="window.cqGalleryPrev()" aria-label="Foto Sebelumnya" title="Foto Sebelumnya">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                        </button>
                        <button type="button" class="cq-gallery-arrow cq-gallery-arrow-next" onclick="window.cqGalleryNext()" aria-label="Foto Selanjutnya" title="Foto Selanjutnya">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                        </button>
                    </div>

                    <!-- Gallery Thumbnails Header -->
                    <div class="cq-gallery-thumbs-header">
                        <span class="cq-gallery-thumbs-label">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"/><circle cx="9" cy="9" r="2"/><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/></svg>
                            Semua Foto Kemasan (<span id="layering-img-count">0</span>):
                        </span>
                        <span class="cq-gallery-thumbs-hint">Klik foto untuk ganti tampilan</span>
                    </div>

                    <!-- Thumbnails List (Semua Image Ditampilkan!) -->
                    <div id="layering-gallery-thumbs" class="cq-gallery-thumbs-grid">
                        <!-- Populated dynamically via JS -->
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: FULL PRODUCT DETAILS & SPECIFICATIONS -->
            <div class="cq-full-layer-details-col">
                
                <!-- Product Overview Card -->
                <div class="cq-layer-card cq-layer-hero">
                    <div class="cq-layer-hero-info">
                        <div class="cq-layer-header-meta">
                            <span id="layering-product-cat-pill" class="cq-otomotif-cat-badge">Kategori</span>
                            <span id="layering-product-price-est" class="cq-layer-price-badge"></span>
                        </div>
                        <h1 id="layering-product-title" class="cq-full-layer-title">Nama Produk</h1>
                        <p id="layering-product-tagline" class="cq-full-layer-tagline"></p>
                        <p id="layering-product-summary" class="cq-full-layer-summary">Ringkasan produk...</p>
                    </div>
                </div>

                <!-- Layer 2: Section Rasio Pengenceran -->
                <div class="cq-layer-card cq-layer-section">
                    <div class="cq-layer-sec-header">
                        <div class="cq-layer-sec-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                        </div>
                        <h4 class="cq-layer-sec-title">Rasio Pengenceran</h4>
                    </div>
                    <div class="cq-layer-table-wrap">
                        <table class="cq-layer-table">
                            <thead>
                                <tr>
                                    <th>Metode Aplikasi</th>
                                    <th>Rasio Takaran</th>
                                </tr>
                            </thead>
                            <tbody id="layering-product-dilution-body">
                                <!-- Dynamic Dilution Rows -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Layer 3: Section Petunjuk Pemakaian -->
                <div class="cq-layer-card cq-layer-section">
                    <div class="cq-layer-sec-header">
                        <div class="cq-layer-sec-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
                        </div>
                        <h4 class="cq-layer-sec-title">Cara Pakai</h4>
                    </div>
                    <ol id="layering-product-steps-list" class="cq-layer-steps-list">
                        <!-- Dynamic Steps List -->
                    </ol>
                </div>

                <!-- Layer 3b: Section Peringatan Produk -->
                <div class="cq-layer-card cq-layer-warning-card" id="layering-warning-card" style="display: none;">
                    <div class="cq-layer-sec-header">
                        <div class="cq-layer-sec-icon" style="background: rgba(239, 68, 68, 0.15); color: #ef4444;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                        </div>
                        <h4 class="cq-layer-sec-title">Peringatan Produk</h4>
                    </div>
                    <ul id="layering-product-warnings-list" class="cq-layer-warnings-list">
                        <!-- Dynamic Warnings List -->
                    </ul>
                </div>

                <!-- Layer 4: Section Spesifikasi Formula -->
                <div class="cq-layer-card cq-layer-section">
                    <div class="cq-layer-sec-header">
                        <div class="cq-layer-sec-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
                        </div>
                        <h4 class="cq-layer-sec-title">Spesifikasi Formula</h4>
                    </div>
                    <div id="layering-product-specs-grid" class="cq-layer-specs-grid">
                        <!-- Dynamic Specs Items -->
                    </div>
                </div>

                <!-- Action Bar Inside Detail -->
                <div class="cq-full-layer-actions-bar">
                    <a id="layering-product-wa-btn" href="#" target="_blank" rel="noopener" class="cq-btn-primary cq-layering-cta-btn">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                        <span>Order via WhatsApp</span>
                    </a>
                    <button type="button" class="cq-btn-outline cq-btn-outline-dark cq-layering-close-alt" onclick="window.cqCloseOtomotifLayering()">
                        <span>Kembali ke Katalog</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- 7. DEDICATED STANDALONE FOOTER (TEMA HITAM BIRU) -->
<footer class="cq-otomotif-footer">
    <div class="cq-container">
        <div class="cq-otomotif-footer-inner">
            <div class="cq-otomotif-footer-brand">
                <a href="<?php echo esc_url(home_url('/otomotif/')); ?>" class="cq-otomotif-brand">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>" alt="Cleanique Lab Logo" width="32" height="32">
                    <span class="cq-otomotif-brand-text">
                        CLEANIQUE<strong>LAB</strong>
                        <span class="cq-otomotif-brand-pill">OTOMOTIF</span>
                    </span>
                </a>
                <p>
                    Lini formulasi kimia pembersih dan perawatan kendaraan profesional dari PT Indotech Berkah Abadi. Melayani pesanan botol eceran, jerigen 5L, hingga drum 200L ke seluruh wilayah Indonesia.
                </p>
            </div>
            <div class="cq-otomotif-footer-info">
                <div class="cq-otomotif-footer-badge">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 18H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h3.19M15 6h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-3.19"/><circle cx="7" cy="18" r="2"/><circle cx="17" cy="18" r="2"/><path d="M9 18h6"/></svg>
                    <span>Kirim Kargo 38 Provinsi</span>
                </div>
                <div class="cq-otomotif-footer-badge">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    <a href="https://wa.me/6287848120088" target="_blank" rel="noopener">0878-4812-0088</a>
                </div>
            </div>
        </div>
        <div class="cq-otomotif-footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Cleanique Lab Otomotif. Hak Cipta Dilindungi.</p>
            <div class="cq-otomotif-footer-links">
                <a href="#katalog-otomotif">Katalog Produk</a>
                <a href="#aksesoris">Paket Aplikator</a>
                <a href="#keunggulan">Keunggulan Pabrik</a>
                <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab')); ?>" target="_blank" rel="noopener">Konsultasi WA</a>
            </div>
        </div>
    </div>
</footer>

<!-- Floating WhatsApp Direct Button -->
<a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya ingin info produk otomotif.')); ?>" class="cq-otomotif-floating-wa" target="_blank" rel="noopener" aria-label="Chat WhatsApp" title="Chat WhatsApp Customer Care">
    <svg width="28" height="28" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
</a>

<!-- JSON DATA EMBED FOR CLIENT-SIDE LAYERING -->
<script>
window.cqThemeUrl = '<?php echo esc_js(get_template_directory_uri()); ?>';
window.cqOtomotifData = <?php echo json_encode($otomotif_products, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>;

// Filter Kategori Functionality
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.cq-otomotif-filter-btn');
    const cards = document.querySelectorAll('.cq-otomotif-card');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const filterVal = this.getAttribute('data-filter');

            cards.forEach(card => {
                if (filterVal === 'all' || card.getAttribute('data-category') === filterVal) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});

// Card Click Helper (membuka layering saat kartu diklik)
window.cqCardClick = function(event, productId) {
    if (event.target.closest('.cq-btn-otomotif-wa')) {
        return;
    }
    window.cqOpenOtomotifLayering(productId);
};

// State Galeri Foto Produk Aktif
window.cqCurrentGallery = [];
window.cqCurrentGalleryIndex = 0;

window.cqSetGalleryImage = function(index) {
    if (!window.cqCurrentGallery || !window.cqCurrentGallery.length) return;
    if (index < 0) index = window.cqCurrentGallery.length - 1;
    if (index >= window.cqCurrentGallery.length) index = 0;
    
    window.cqCurrentGalleryIndex = index;
    const item = window.cqCurrentGallery[index];
    const layerImg = document.getElementById('layering-product-image');
    const badgeEl = document.getElementById('layering-active-img-badge');

    if (layerImg && item) {
        const imgSrc = (item.url.indexOf('http') === 0) ? item.url : window.cqThemeUrl + item.url;
        layerImg.style.opacity = '0.6';
        layerImg.src = imgSrc;
        layerImg.onload = function() {
            layerImg.style.opacity = '1';
        };
        layerImg.onerror = function() {
            if (item.png) {
                layerImg.src = (item.png.indexOf('http') === 0) ? item.png : window.cqThemeUrl + item.png;
            }
            layerImg.style.opacity = '1';
        };
    }

    if (badgeEl && item) {
        badgeEl.innerText = item.label || 'Foto Produk';
    }

    // Update active state di daftar thumbnail
    const thumbBtns = document.querySelectorAll('#layering-gallery-thumbs .cq-thumb-item');
    thumbBtns.forEach((btn, idx) => {
        if (idx === index) {
            btn.classList.add('active');
            btn.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
        } else {
            btn.classList.remove('active');
        }
    });
};

window.cqGalleryPrev = function() {
    window.cqSetGalleryImage(window.cqCurrentGalleryIndex - 1);
};

window.cqGalleryNext = function() {
    window.cqSetGalleryImage(window.cqCurrentGalleryIndex + 1);
};

// Interactive Full Layer Controller ("Layer Penuh")
window.cqOpenOtomotifLayering = function(productId) {
    if (!window.cqOtomotifData || !window.cqOtomotifData[productId]) return;

    const data = window.cqOtomotifData[productId];
    const layering = document.getElementById('cq-product-layering');
    if (!layering) return;

    // 1. Set Identitas Produk
    const titleEls = [document.getElementById('layering-product-title'), document.getElementById('layering-header-title')];
    titleEls.forEach(el => { if (el) el.innerText = data.title; });

    const catEl = document.getElementById('layering-product-cat');
    if (catEl) catEl.innerText = data.cat_name || 'Otomotif';

    const catPillEl = document.getElementById('layering-product-cat-pill');
    if (catPillEl) catPillEl.innerText = data.cat_name || 'Otomotif';

    const badgeEl = document.getElementById('layering-product-badge');
    if (badgeEl) {
        badgeEl.innerText = data.badge || '';
        badgeEl.style.display = data.badge ? 'inline-block' : 'none';
    }

    const priceEl = document.getElementById('layering-product-price-est');
    if (priceEl) {
        priceEl.innerText = data.price_est ? data.price_est : 'Tersedia Eceran & Curah';
    }

    const summaryEl = document.getElementById('layering-product-summary');
    if (summaryEl) summaryEl.innerText = data.summary;

    const taglineEl = document.getElementById('layering-product-tagline');
    if (taglineEl) {
        taglineEl.innerText = data.tagline ? '“' + data.tagline + '”' : '';
    }

    // 2. Setup Galeri Foto Lengkap (Semua Foto Kemasan Produk)
    let galleryItems = [];
    if (data.gallery && Array.isArray(data.gallery) && data.gallery.length > 0) {
        galleryItems = [...data.gallery];
    } else if (data.image) {
        galleryItems = [{
            slug: 'main',
            label: 'Foto Produk',
            url: data.image,
            png: data.image
        }];
    }

    window.cqCurrentGallery = galleryItems;

    // Render Thumbnail Grid
    const thumbsContainer = document.getElementById('layering-gallery-thumbs');
    const countEl = document.getElementById('layering-img-count');
    if (countEl) countEl.innerText = galleryItems.length;

    if (thumbsContainer) {
        thumbsContainer.innerHTML = '';
        galleryItems.forEach((item, idx) => {
            const btn = document.createElement('button');
            btn.type = 'button';
            btn.className = 'cq-thumb-item' + (idx === 0 ? ' active' : '');
            btn.title = item.label;
            btn.onclick = function() { window.cqSetGalleryImage(idx); };

            const imgSrc = (item.url.indexOf('http') === 0) ? item.url : window.cqThemeUrl + item.url;
            const img = document.createElement('img');
            img.src = imgSrc;
            img.alt = item.label;
            img.loading = 'lazy';
            img.onerror = function() {
                if (item.png) {
                    img.src = (item.png.indexOf('http') === 0) ? item.png : window.cqThemeUrl + item.png;
                }
            };

            const lbl = document.createElement('span');
            lbl.className = 'cq-thumb-label';
            lbl.innerText = item.label;

            btn.appendChild(img);
            btn.appendChild(lbl);
            thumbsContainer.appendChild(btn);
        });
    }

    // Tampilkan foto pertama
    window.cqSetGalleryImage(0);

    // 3. Dilution Ratio Table
    const dilutionBody = document.getElementById('layering-product-dilution-body');
    if (dilutionBody) {
        dilutionBody.innerHTML = '';
        if (data.dilution) {
            for (const [method, ratio] of Object.entries(data.dilution)) {
                const tr = document.createElement('tr');
                tr.innerHTML = `<td><strong>${method}</strong></td><td><span class="cq-ratio-pill">${ratio}</span></td>`;
                dilutionBody.appendChild(tr);
            }
        }
    }

    // 4. Application Steps
    const stepsList = document.getElementById('layering-product-steps-list');
    if (stepsList) {
        stepsList.innerHTML = '';
        if (data.steps && Array.isArray(data.steps)) {
            data.steps.forEach(step => {
                const li = document.createElement('li');
                li.innerHTML = step;
                stepsList.appendChild(li);
            });
        }
    }

    // 4b. Warnings List
    const warnCard = document.getElementById('layering-warning-card');
    const warnList = document.getElementById('layering-product-warnings-list');
    if (warnCard && warnList) {
        warnList.innerHTML = '';
        if (data.warnings && Array.isArray(data.warnings) && data.warnings.length > 0) {
            data.warnings.forEach(w => {
                const li = document.createElement('li');
                li.innerText = w;
                warnList.appendChild(li);
            });
            warnCard.style.display = 'block';
        } else {
            warnCard.style.display = 'none';
        }
    }

    // 5. Technical Specs
    const specsGrid = document.getElementById('layering-product-specs-grid');
    if (specsGrid) {
        specsGrid.innerHTML = '';
        if (data.specs) {
            for (const [key, val] of Object.entries(data.specs)) {
                const item = document.createElement('div');
                item.className = 'cq-spec-item';
                item.innerHTML = `<span class="cq-spec-key">${key}</span><span class="cq-spec-val">${val}</span>`;
                specsGrid.appendChild(item);
            }
        }
    }

    // 6. Dynamic WhatsApp CTA Links (Header & Body)
    const waPhone = '6287848120088';
    const waMsg = `Halo Cleanique Lab, saya berminat order produk otomotif: *${data.title}*.\nMohon info harga grosir dan ketentuan pengiriman. Terima kasih.`;
    const waUrl = `https://wa.me/${waPhone}?text=${encodeURIComponent(waMsg)}`;
    
    const waBtn = document.getElementById('layering-product-wa-btn');
    if (waBtn) waBtn.setAttribute('href', waUrl);

    const topWaBtn = document.getElementById('layering-top-wa-btn');
    if (topWaBtn) topWaBtn.setAttribute('href', waUrl);

    // Aktifkan Layer Penuh
    layering.classList.add('cq-full-layer-active');
    layering.setAttribute('aria-hidden', 'false');
    document.body.classList.add('cq-layering-locked');
};

// Close Layering Controller
window.cqCloseOtomotifLayering = function() {
    const layering = document.getElementById('cq-product-layering');
    if (layering) {
        layering.classList.remove('cq-full-layer-active');
        layering.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('cq-layering-locked');
    }
};

// Backward-compatibility alias
window.cqOpenOtomotifModal = window.cqOpenOtomotifLayering;
window.cqCloseOtomotifModal = window.cqCloseOtomotifLayering;

// Keyboard navigation (Esc to close, Left/Right arrow for gallery)
document.addEventListener('keydown', function(e) {
    const layering = document.getElementById('cq-product-layering');
    if (!layering || !layering.classList.contains('cq-full-layer-active')) return;

    if (e.key === 'Escape') {
        window.cqCloseOtomotifLayering();
    } else if (e.key === 'ArrowLeft') {
        window.cqGalleryPrev();
    } else if (e.key === 'ArrowRight') {
        window.cqGalleryNext();
    }
});
</script>

<?php wp_footer(); ?>
</body>
</html>
