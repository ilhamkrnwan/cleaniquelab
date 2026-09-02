<?php
/**
 * Template Name: Koleksi Template Halaman Web Cleanique Lab
 * Description: Katalog dan showcase visual halaman web / layout template yang tersedia di Cleanique Lab.
 *
 * @package CleaniqueLab
 */

get_header();
?>

<!-- HERO SECTION TEMPLATE GALLERY -->
<section class="cq-page-header" style="background: linear-gradient(135deg, #00d2ff 0%, #3a7bd5 100%); padding: 100px 0 80px 0; color: #ffffff; text-align: center; position: relative; overflow: hidden;">
    <div class="cq-container" style="position: relative; z-index: 2;">
        <span class="cq-hero-eyebrow" style="background: rgba(255, 255, 255, 0.2); color: #ffffff; padding: 6px 16px; border-radius: 50px; font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; display: inline-block; margin-bottom: 16px;">
            Katalog Layout & Template Web
        </span>
        <h1 style="font-size: clamp(32px, 5vw, 56px); font-weight: 900; line-height: 1.15; margin-bottom: 20px;">
            Koleksi Template Halaman Web<br><span style="color: #b4fc6c;">Cleanique Lab</span>
        </h1>
        <p style="font-size: 18px; max-width: 800px; margin: 0 auto 30px auto; opacity: 0.95; line-height: 1.6;">
            Jelajahi berbagai variasi rancangan template halaman web profesional, siap pakai, teroptimasi SEO, dan terhubung langsung dengan sistem pemesanan grosir WhatsApp B2B.
        </p>
        <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
            <a href="#katalog-template" class="cq-btn-primary" style="background: linear-gradient(135deg, #ea501f, #ff6900); border: none; padding: 14px 32px; border-radius: 50px; color: #fff; font-weight: 800; font-size: 16px; text-decoration: none; box-shadow: 0 10px 25px rgba(234, 80, 31, 0.4);">
                Jelajahi Template
            </a>
            <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya berminat memesan website / kustomisasi template halaman.')); ?>" target="_blank" rel="noopener" class="cq-btn-outline" style="border: 2px solid #ffffff; padding: 14px 28px; border-radius: 50px; color: #fff; font-weight: 700; font-size: 16px; text-decoration: none;">
                Konsultasi Layout
            </a>
        </div>
    </div>

    <!-- Wave divider -->
    <div class="cq-wave-divider" style="position: absolute; bottom: 0; left: 0; width: 100%; overflow: hidden; line-height: 0;">
        <svg viewBox="0 0 1440 320" preserveAspectRatio="none" style="position: relative; display: block; width: 100%; height: 60px;">
            <path fill="#f8fafc" d="M0,160L48,176C96,192,192,224,288,213.3C384,203,480,149,576,144C672,139,768,181,864,197.3C960,213,1056,203,1152,181.3C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
</section>

<!-- MAIN TEMPLATE CATALOG GRID -->
<section id="katalog-template" class="cq-section" style="background-color: #f8fafc; padding: 80px 0;">
    <div class="cq-container">
        
        <div style="text-align: center; max-width: 750px; margin: 0 auto 60px auto;">
            <span style="font-size: 14px; font-weight: 800; color: #3a7bd5; text-transform: uppercase; letter-spacing: 2px; display: block; margin-bottom: 8px;">
                Standardized Digital Architecture
            </span>
            <h2 style="font-size: clamp(26px, 4vw, 38px); font-weight: 800; color: #2b2b33; margin-bottom: 12px;">
                Daftar Template Halaman Siap Digunakan
            </h2>
            <p style="font-size: 16px; color: #64748b; line-height: 1.6;">
                Setiap template dirancang khusus sesuai kaidah Cleanique Lab Design System, mendukung performa kecepatan tinggi, SEO terstruktur, serta navigasi responsif.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 32px;">

            <!-- TEMPLATE 1: BERANDA B2B LANDING PAGE -->
            <div class="cq-card" style="background: #ffffff; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.06); border: 1px solid #e2e8f0; display: flex; flex-direction: column; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <div style="position: relative; background: radial-gradient(circle farthest-side, #00d2ff, #3a7bd5); padding: 30px 24px; color: #fff; height: 180px; display: flex; flex-direction: column; justify-content: space-between;">
                    <span style="position: absolute; top: 16px; right: 16px; background: #aef711; color: #1a3a00; font-size: 11px; font-weight: 800; padding: 4px 10px; border-radius: 20px; text-transform: uppercase;">
                        Utama / High Conversion
                    </span>
                    <div>
                        <h3 style="font-size: 22px; font-weight: 800; margin-bottom: 6px;">Template Beranda (Landing Page B2B)</h3>
                        <span style="font-size: 13px; opacity: 0.9;">File: <code>front-page.php</code></span>
                    </div>
                    <div style="display: flex; gap: 8px; flex-wrap: wrap;">
                        <span style="background: rgba(255,255,255,0.25); padding: 3px 8px; border-radius: 4px; font-size: 11px; font-weight: 600;">Hero Showcase</span>
                        <span style="background: rgba(255,255,255,0.25); padding: 3px 8px; border-radius: 4px; font-size: 11px; font-weight: 600;">Embed Video 16:9</span>
                        <span style="background: rgba(255,255,255,0.25); padding: 3px 8px; border-radius: 4px; font-size: 11px; font-weight: 600;">CTA WhatsApp</span>
                    </div>
                </div>
                <div style="padding: 24px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                    <p style="font-size: 14px; color: #475569; line-height: 1.6; margin-bottom: 20px;">
                        Rancangan landing page lengkap dengan hero banner produk, badge garansi kargo, video profil pabrik, matriks sektor industri B2B, dan FAQ otomatis JSON-LD.
                    </p>
                    <div style="display: flex; gap: 12px; align-items: center;">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="cq-btn-primary" style="flex: 1; text-align: center; padding: 10px 16px; border-radius: 50px; background: #3a7bd5; color: #fff; font-weight: 700; font-size: 14px; text-decoration: none;">
                            Lihat Demo
                        </a>
                    </div>
                </div>
            </div>

            <!-- TEMPLATE 2: DAFTAR HARGA & KATALOG GROSIR -->
            <div class="cq-card" style="background: #ffffff; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.06); border: 1px solid #e2e8f0; display: flex; flex-direction: column; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <div style="position: relative; background: linear-gradient(135deg, #109733, #7edb0d); padding: 30px 24px; color: #fff; height: 180px; display: flex; flex-direction: column; justify-content: space-between;">
                    <span style="position: absolute; top: 16px; right: 16px; background: #ffffff; color: #109733; font-size: 11px; font-weight: 800; padding: 4px 10px; border-radius: 20px; text-transform: uppercase;">
                        Katalog Price Matrix
                    </span>
                    <div>
                        <h3 style="font-size: 22px; font-weight: 800; margin-bottom: 6px;">Template Daftar Harga Grosir</h3>
                        <span style="font-size: 13px; opacity: 0.9;">File: <code>page-pricelist.php</code></span>
                    </div>
                    <div style="display: flex; gap: 8px; flex-wrap: wrap;">
                        <span style="background: rgba(255,255,255,0.25); padding: 3px 8px; border-radius: 4px; font-size: 11px; font-weight: 600;">Kemasan 5L / 20L / Biang</span>
                        <span style="background: rgba(255,255,255,0.25); padding: 3px 8px; border-radius: 4px; font-size: 11px; font-weight: 600;">Diskon Kuantitas</span>
                    </div>
                </div>
                <div style="padding: 24px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                    <p style="font-size: 14px; color: #475569; line-height: 1.6; margin-bottom: 20px;">
                        Tabel matriks harga transparan untuk sabun cuci piring, deterjen laundry, hand soap, dan karbol wangi lengkap dengan filter kategori & simulasi hemat ongkir biang konsentrat.
                    </p>
                    <div style="display: flex; gap: 12px; align-items: center;">
                        <a href="<?php echo esc_url(home_url('/daftar-harga/')); ?>" class="cq-btn-primary" style="flex: 1; text-align: center; padding: 10px 16px; border-radius: 50px; background: #109733; color: #fff; font-weight: 700; font-size: 14px; text-decoration: none;">
                            Lihat Demo
                        </a>
                    </div>
                </div>
            </div>

            <!-- TEMPLATE 3: PROFIL KAMI & PABRIK -->
            <div class="cq-card" style="background: #ffffff; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.06); border: 1px solid #e2e8f0; display: flex; flex-direction: column; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <div style="position: relative; background: linear-gradient(135deg, #6d0a6c, #a51da3); padding: 30px 24px; color: #fff; height: 180px; display: flex; flex-direction: column; justify-content: space-between;">
                    <span style="position: absolute; top: 16px; right: 16px; background: #ffffff; color: #6d0a6c; font-size: 11px; font-weight: 800; padding: 4px 10px; border-radius: 20px; text-transform: uppercase;">
                        Company Profile
                    </span>
                    <div>
                        <h3 style="font-size: 22px; font-weight: 800; margin-bottom: 6px;">Template Tentang & Profil Pabrik</h3>
                        <span style="font-size: 13px; opacity: 0.9;">File: <code>page-about.php</code></span>
                    </div>
                    <div style="display: flex; gap: 8px; flex-wrap: wrap;">
                        <span style="background: rgba(255,255,255,0.25); padding: 3px 8px; border-radius: 4px; font-size: 11px; font-weight: 600;">Sertifikasi ISO</span>
                        <span style="background: rgba(255,255,255,0.25); padding: 3px 8px; border-radius: 4px; font-size: 11px; font-weight: 600;">Kapasitas Produksi</span>
                    </div>
                </div>
                <div style="padding: 24px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                    <p style="font-size: 14px; color: #475569; line-height: 1.6; margin-bottom: 20px;">
                        Halaman pengenalan profil fasilitas produksi Cleanique Lab, tim formulator kimia, standar pengujian laboratorium, dan pilar keunggulan bahan baku ramah lingkungan.
                    </p>
                    <div style="display: flex; gap: 12px; align-items: center;">
                        <a href="<?php echo esc_url(home_url('/tentang-kami/')); ?>" class="cq-btn-primary" style="flex: 1; text-align: center; padding: 10px 16px; border-radius: 50px; background: #6d0a6c; color: #fff; font-weight: 700; font-size: 14px; text-decoration: none;">
                            Lihat Demo
                        </a>
                    </div>
                </div>
            </div>

            <!-- TEMPLATE 4: HUBUNGI KAMI & LEAD FORM B2B -->
            <div class="cq-card" style="background: #ffffff; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.06); border: 1px solid #e2e8f0; display: flex; flex-direction: column; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <div style="position: relative; background: linear-gradient(135deg, #ea501f, #ff6900); padding: 30px 24px; color: #fff; height: 180px; display: flex; flex-direction: column; justify-content: space-between;">
                    <span style="position: absolute; top: 16px; right: 16px; background: #ffffff; color: #ea501f; font-size: 11px; font-weight: 800; padding: 4px 10px; border-radius: 20px; text-transform: uppercase;">
                        Contact & Lead Gen
                    </span>
                    <div>
                        <h3 style="font-size: 22px; font-weight: 800; margin-bottom: 6px;">Template Hubungi Kami & B2B Form</h3>
                        <span style="font-size: 13px; opacity: 0.9;">File: <code>page-contact.php</code></span>
                    </div>
                    <div style="display: flex; gap: 8px; flex-wrap: wrap;">
                        <span style="background: rgba(255,255,255,0.25); padding: 3px 8px; border-radius: 4px; font-size: 11px; font-weight: 600;">Form Konsultasi</span>
                        <span style="background: rgba(255,255,255,0.25); padding: 3px 8px; border-radius: 4px; font-size: 11px; font-weight: 600;">WhatsApp Direct</span>
                    </div>
                </div>
                <div style="padding: 24px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                    <p style="font-size: 14px; color: #475569; line-height: 1.6; margin-bottom: 20px;">
                        Layout kontak terintegrasi dengan tombol konsultasi WhatsApp seketika, form pengajuan penawaran harga grosir, serta peta alamat pabrik & jam operasional customer service.
                    </p>
                    <div style="display: flex; gap: 12px; align-items: center;">
                        <a href="<?php echo esc_url(home_url('/hubungi-kami/')); ?>" class="cq-btn-primary" style="flex: 1; text-align: center; padding: 10px 16px; border-radius: 50px; background: #ea501f; color: #fff; font-weight: 700; font-size: 14px; text-decoration: none;">
                            Lihat Demo
                        </a>
                    </div>
                </div>
            </div>

            <!-- TEMPLATE 5: PUSAT EDUKASI & BLOG ARTICLES -->
            <div class="cq-card" style="background: #ffffff; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.06); border: 1px solid #e2e8f0; display: flex; flex-direction: column; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <div style="position: relative; background: linear-gradient(135deg, #0284c7, #38bdf8); padding: 30px 24px; color: #fff; height: 180px; display: flex; flex-direction: column; justify-content: space-between;">
                    <span style="position: absolute; top: 16px; right: 16px; background: #ffffff; color: #0284c7; font-size: 11px; font-weight: 800; padding: 4px 10px; border-radius: 20px; text-transform: uppercase;">
                        Blog & Education
                    </span>
                    <div>
                        <h3 style="font-size: 22px; font-weight: 800; margin-bottom: 6px;">Template Artikel & Panduan Sabun</h3>
                        <span style="font-size: 13px; opacity: 0.9;">Files: <code>home.php</code> & <code>single.php</code></span>
                    </div>
                    <div style="display: flex; gap: 8px; flex-wrap: wrap;">
                        <span style="background: rgba(255,255,255,0.25); padding: 3px 8px; border-radius: 4px; font-size: 11px; font-weight: 600;">Reading Time</span>
                        <span style="background: rgba(255,255,255,0.25); padding: 3px 8px; border-radius: 4px; font-size: 11px; font-weight: 600;">SEO Article Schema</span>
                    </div>
                </div>
                <div style="padding: 24px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                    <p style="font-size: 14px; color: #475569; line-height: 1.6; margin-bottom: 20px;">
                        Layout artikel edukatif seputar cara hemat operasional laundry, tips racik biang sabun, standar kebersihan HACCP restoran, dan pengetahuan formulasi bahan kimia aman.
                    </p>
                    <div style="display: flex; gap: 12px; align-items: center;">
                        <a href="<?php echo esc_url(get_post_type_archive_link('post') ?: home_url('/')); ?>" class="cq-btn-primary" style="flex: 1; text-align: center; padding: 10px 16px; border-radius: 50px; background: #0284c7; color: #fff; font-weight: 700; font-size: 14px; text-decoration: none;">
                            Lihat Demo
                        </a>
                    </div>
                </div>
            </div>

            <!-- TEMPLATE 6: HALAMAN LEGALITAS & PRIVASI -->
            <div class="cq-card" style="background: #ffffff; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.06); border: 1px solid #e2e8f0; display: flex; flex-direction: column; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <div style="position: relative; background: linear-gradient(135deg, #475569, #64748b); padding: 30px 24px; color: #fff; height: 180px; display: flex; flex-direction: column; justify-content: space-between;">
                    <span style="position: absolute; top: 16px; right: 16px; background: #ffffff; color: #475569; font-size: 11px; font-weight: 800; padding: 4px 10px; border-radius: 20px; text-transform: uppercase;">
                        Legal Compliance
                    </span>
                    <div>
                        <h3 style="font-size: 22px; font-weight: 800; margin-bottom: 6px;">Template Policy & Kebijakan Legal</h3>
                        <span style="font-size: 13px; opacity: 0.9;">Files: <code>page-terms.php</code> & <code>page-privacy-policy.php</code></span>
                    </div>
                    <div style="display: flex; gap: 8px; flex-wrap: wrap;">
                        <span style="background: rgba(255,255,255,0.25); padding: 3px 8px; border-radius: 4px; font-size: 11px; font-weight: 600;">Garansi Kargo</span>
                        <span style="background: rgba(255,255,255,0.25); padding: 3px 8px; border-radius: 4px; font-size: 11px; font-weight: 600;">SLA Mutu Sabun</span>
                    </div>
                </div>
                <div style="padding: 24px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                    <p style="font-size: 14px; color: #475569; line-height: 1.6; margin-bottom: 20px;">
                        Template standar hukum dan syarat layanan mencakup garansi penggantian barang rusak saat pengiriman kargo, kebijakan kerahasiaan data pembeli, dan sertifikasi produk.
                    </p>
                    <div style="display: flex; gap: 12px; align-items: center;">
                        <a href="<?php echo esc_url(home_url('/syarat-dan-ketentuan/')); ?>" class="cq-btn-primary" style="flex: 1; text-align: center; padding: 10px 16px; border-radius: 50px; background: #475569; color: #fff; font-weight: 700; font-size: 14px; text-decoration: none;">
                            Lihat Demo
                        </a>
                    </div>
                </div>
            </div>

            <!-- TEMPLATE 7: BIANG SABUN KONSENTRAT -->
            <div class="cq-card" style="background: #ffffff; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.06); border: 1px solid #e2e8f0; display: flex; flex-direction: column; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <div style="position: relative; background: linear-gradient(135deg, #0d9488, #14b8a6); padding: 30px 24px; color: #fff; height: 180px; display: flex; flex-direction: column; justify-content: space-between;">
                    <span style="position: absolute; top: 16px; right: 16px; background: #ffffff; color: #0d9488; font-size: 11px; font-weight: 800; padding: 4px 10px; border-radius: 20px; text-transform: uppercase;">
                        Super Saver Formula
                    </span>
                    <div>
                        <h3 style="font-size: 22px; font-weight: 800; margin-bottom: 6px;">Template Biang Sabun Konsentrat</h3>
                        <span style="font-size: 13px; opacity: 0.9;">Slug: <code>/biang-sabun/</code></span>
                    </div>
                    <div style="display: flex; gap: 8px; flex-wrap: wrap;">
                        <span style="background: rgba(255,255,255,0.25); padding: 3px 8px; border-radius: 4px; font-size: 11px; font-weight: 600;">Hemat Ongkir 80%</span>
                        <span style="background: rgba(255,255,255,0.25); padding: 3px 8px; border-radius: 4px; font-size: 11px; font-weight: 600;">Siap Seduh Air</span>
                    </div>
                </div>
                <div style="padding: 24px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                    <p style="font-size: 14px; color: #475569; line-height: 1.6; margin-bottom: 20px;">
                        Template penawaran biang konsentrat sabun murni yang dirancang untuk pengiriman murah luar pulau Jawa tanpa membawa bobot air berlebih.
                    </p>
                    <div style="display: flex; gap: 12px; align-items: center;">
                        <a href="<?php echo esc_url(home_url('/biang-sabun/')); ?>" class="cq-btn-primary" style="flex: 1; text-align: center; padding: 10px 16px; border-radius: 50px; background: #0d9488; color: #fff; font-weight: 700; font-size: 14px; text-decoration: none;">
                            Lihat Demo
                        </a>
                    </div>
                </div>
            </div>

            <!-- TEMPLATE 8: MAKLON SABUN & OEM -->
            <div class="cq-card" style="background: #ffffff; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.06); border: 1px solid #e2e8f0; display: flex; flex-direction: column; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <div style="position: relative; background: linear-gradient(135deg, #b91c1c, #ef4444); padding: 30px 24px; color: #fff; height: 180px; display: flex; flex-direction: column; justify-content: space-between;">
                    <span style="position: absolute; top: 16px; right: 16px; background: #ffffff; color: #b91c1c; font-size: 11px; font-weight: 800; padding: 4px 10px; border-radius: 20px; text-transform: uppercase;">
                        Private Label B2B
                    </span>
                    <div>
                        <h3 style="font-size: 22px; font-weight: 800; margin-bottom: 6px;">Template Maklon Sabun & OEM</h3>
                        <span style="font-size: 13px; opacity: 0.9;">Slug: <code>/maklon-sabun/</code></span>
                    </div>
                    <div style="display: flex; gap: 8px; flex-wrap: wrap;">
                        <span style="background: rgba(255,255,255,0.25); padding: 3px 8px; border-radius: 4px; font-size: 11px; font-weight: 600;">Custom Formula</span>
                        <span style="background: rgba(255,255,255,0.25); padding: 3px 8px; border-radius: 4px; font-size: 11px; font-weight: 600;">Merek Sendiri</span>
                    </div>
                </div>
                <div style="padding: 24px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                    <p style="font-size: 14px; color: #475569; line-height: 1.6; margin-bottom: 20px;">
                        Template khusus promosi jasa manufaktur sabun maklon, private label, kustomisasi aroma, warna, viskositas, dan kemasan siap jual.
                    </p>
                    <div style="display: flex; gap: 12px; align-items: center;">
                        <a href="<?php echo esc_url(home_url('/maklon-sabun/')); ?>" class="cq-btn-primary" style="flex: 1; text-align: center; padding: 10px 16px; border-radius: 50px; background: #b91c1c; color: #fff; font-weight: 700; font-size: 14px; text-decoration: none;">
                            Lihat Demo
                        </a>
                    </div>
                </div>
            </div>

            <!-- TEMPLATE 9: KEMITRAAN AGEN & DISTRIBUTOR -->
            <div class="cq-card" style="background: #ffffff; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.06); border: 1px solid #e2e8f0; display: flex; flex-direction: column; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <div style="position: relative; background: linear-gradient(135deg, #d97706, #f59e0b); padding: 30px 24px; color: #fff; height: 180px; display: flex; flex-direction: column; justify-content: space-between;">
                    <span style="position: absolute; top: 16px; right: 16px; background: #ffffff; color: #d97706; font-size: 11px; font-weight: 800; padding: 4px 10px; border-radius: 20px; text-transform: uppercase;">
                        Partnership Opportunity
                    </span>
                    <div>
                        <h3 style="font-size: 22px; font-weight: 800; margin-bottom: 6px;">Template Kemitraan Agen & Reseller</h3>
                        <span style="font-size: 13px; opacity: 0.9;">Slug: <code>/kemitraan-agen/</code></span>
                    </div>
                    <div style="display: flex; gap: 8px; flex-wrap: wrap;">
                        <span style="background: rgba(255,255,255,0.25); padding: 3px 8px; border-radius: 4px; font-size: 11px; font-weight: 600;">Margin Menjanjikan</span>
                        <span style="background: rgba(255,255,255,0.25); padding: 3px 8px; border-radius: 4px; font-size: 11px; font-weight: 600;">Support Spanduk & Spanduk</span>
                    </div>
                </div>
                <div style="padding: 24px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                    <p style="font-size: 14px; color: #475569; line-height: 1.6; margin-bottom: 20px;">
                        Template pendaftaran agen dan keagenan depo sabun curah daerah dengan skema diskon bertingkat dan fasilitasi materi promosi.
                    </p>
                    <div style="display: flex; gap: 12px; align-items: center;">
                        <a href="<?php echo esc_url(home_url('/kemitraan-agen/')); ?>" class="cq-btn-primary" style="flex: 1; text-align: center; padding: 10px 16px; border-radius: 50px; background: #d97706; color: #fff; font-weight: 700; font-size: 14px; text-decoration: none;">
                            Lihat Demo
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- CTA SECTION -->
<section style="background: linear-gradient(135deg, #2b2b33, #23232d); padding: 80px 0; color: #ffffff; text-align: center;">
    <div class="cq-container">
        <h2 style="font-size: clamp(28px, 4vw, 40px); font-weight: 900; margin-bottom: 16px;">
            Butuh Template Kustom untuk Usaha Anda?
        </h2>
        <p style="font-size: 18px; color: #cbd5e1; max-width: 720px; margin: 0 auto 30px auto; line-height: 1.6;">
            Tim teknis Cleanique Lab siap membantu pembuatan landing page kustom, integrasi katalog reseller, hingga sistem pemesanan sabun sesuai kebutuhan spesifik Anda.
        </p>
        <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya berminat membuat template kustom / penyesuaian halaman web.')); ?>" target="_blank" rel="noopener" class="cq-btn-primary" style="background: linear-gradient(135deg, #ea501f, #ff6900); border: none; padding: 16px 36px; border-radius: 50px; color: #fff; font-weight: 800; font-size: 16px; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; box-shadow: 0 10px 25px rgba(234, 80, 31, 0.4);">
            <svg width="22" height="22" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
            Konsultasi WA
        </a>
    </div>
</section>

<?php
get_footer();
