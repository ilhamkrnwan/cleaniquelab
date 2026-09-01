<?php
/**
 * Template Name: Tentang Kami
 *
 * @package CleaniqueLab
 */

get_header();
?>

<!-- HERO SECTION TENTANG KAMI -->
<section class="cq-hero" style="padding-top: 70px; padding-bottom: 180px;">
    <div class="cq-container">
        <span class="cq-hero-eyebrow">Profil Produsen</span>
        <h1 class="cq-hero-h1" style="font-size: clamp(40px, 6.5vw, 84px);">Tentang Cleanique Lab</h1>
        <p class="cq-hero-lead">
            Mitra produsen aneka sabun dan formulasi kimia kebersihan terpercaya untuk kebutuhan komersial, industri, institusi, dan rumah tangga di seluruh Indonesia.
        </p>
    </div>

    <div class="cq-wave-divider">
        <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="#ffffff" d="M0,160L48,176C96,192,192,224,288,213.3C384,203,480,149,576,144C672,139,768,181,864,197.3C960,213,1056,203,1152,181.3C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
</section>

<!-- KONTEN PROFIL -->
<section class="cq-section" style="background-color: #ffffff;">
    <div class="cq-container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center;">
            <div>
                <span style="font-family: var(--cq-font-body); font-size: 16px; font-weight: 800; color: var(--cq-royal-blue); text-transform: uppercase; letter-spacing: 2px;">
                    Dedikasi & Inovasi Formulasi
                </span>
                <h2 style="font-size: clamp(28px, 4vw, 40px); margin-top: 10px; margin-bottom: 20px; color: var(--cq-text-dark);">
                    Menghadirkan Solusi Kebersihan Berkualitas dengan Harga Rasional
                </h2>
                <p style="font-size: 16px; color: var(--cq-text-muted); line-height: 1.7; margin-bottom: 18px;">
                    <strong>Cleanique Lab</strong> lahir dari komitmen untuk menyediakan produk sabun dan cairan pembersih yang tidak hanya memiliki daya bersih maksimal, tetapi juga aman bagi pengguna dan ramah lingkungan.
                </p>
                <p style="font-size: 16px; color: var(--cq-text-muted); line-height: 1.7; margin-bottom: 24px;">
                    Didukung oleh riset formulasi teruji, kami memproduksi berbagai varian pembersih mulai dari deterjen cair laundry konsentrat, sabun cuci piring kesat cepat, pembersih lantai & karbol sereh/pinus, hingga hand soap berpelembap tinggi. Kami melayani pembelian eceran, grosir jerigen, pasokan drum industri, dan paket biang sabun.
                </p>
                <div style="display: flex; gap: 16px;">
                    <a href="<?php echo esc_url(home_url('/pricelist/')); ?>" class="cq-btn-primary cq-btn-sm">
                        Lihat Produk & Harga
                    </a>
                </div>
            </div>
            <div>
                <div style="background: var(--cq-bg-soft); border: 2px dashed var(--cq-royal-blue); border-radius: 24px; padding: 40px; text-align: center;">
                    <div style="width: 72px; height: 72px; border-radius: 50%; background: #e8f3ff; margin: 0 auto 16px auto; display: flex; align-items: center; justify-content: center; color: var(--cq-royal-blue);">
                        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8l-7 5V8l-7 5V4a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"/><path d="M18 16h2"/><path d="M18 12h2"/><path d="M14 16h2"/><path d="M14 12h2"/></svg>
                    </div>
                    <h3 style="font-size: 24px; font-weight: 800; margin-bottom: 10px; color: var(--cq-text-dark);">Kapasitas Produksi Pabrik</h3>
                    <p style="font-size: 15px; color: var(--cq-text-muted); line-height: 1.6;">
                        Mampu memenuhi kebutuhan suplai rutin ribuan liter per hari untuk jaringan hotel, restoran, rumah sakit, laundry kiloan, dan distributor se-Indonesia.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- NILAI & STANDAR PRODUKSI (3 KOLOM DENGAN LUCIDE ICONS) -->
<section class="cq-section" style="background-color: var(--cq-bg-soft);">
    <div class="cq-container">
        <div style="text-align: center; max-width: 700px; margin: 0 auto 50px auto;">
            <span style="font-family: var(--cq-font-body); font-size: 16px; font-weight: 800; color: var(--cq-green-deep); text-transform: uppercase; letter-spacing: 2px;">
                Komitmen Kami
            </span>
            <h2 style="font-size: clamp(28px, 4vw, 40px); margin-top: 8px; color: var(--cq-text-dark);">
                4 Standar Kualitas Cleanique Lab
            </h2>
        </div>

        <div class="cq-step-grid" style="grid-template-columns: repeat(3, 1fr);">
            <div class="cq-step-card">
                <div style="width: 48px; height: 48px; border-radius: 50%; background: #eafaf1; color: var(--cq-green-deep); display: flex; align-items: center; justify-content: center; margin: 0 auto 16px auto;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 2v7.31M14 9.3V1.99M8.5 2h7M14 9.3a6.5 6.5 0 1 1-4 0"/></svg>
                </div>
                <h3 style="font-size: 18px; font-weight: 800; margin-bottom: 8px;">Formulasi Tepat & Teruji</h3>
                <p style="font-size: 14px; color: var(--cq-text-muted);">Komposisi bahan aktif yang pas memastikan noda terangkat sempurna tanpa merusak serat pakaian atau membuat tangan terasa kering.</p>
            </div>

            <div class="cq-step-card">
                <div style="width: 48px; height: 48px; border-radius: 50%; background: #eff6ff; color: var(--cq-royal-blue); display: flex; align-items: center; justify-content: center; margin: 0 auto 16px auto;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"/><path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"/></svg>
                </div>
                <h3 style="font-size: 18px; font-weight: 800; margin-bottom: 8px;">Hemat Air & Cepat Bilas</h3>
                <p style="font-size: 14px; color: var(--cq-text-muted);">Formula modern mudah dibilas sehingga menghemat biaya operasional air dan listrik mesin cuci bisnis laundry Anda.</p>
            </div>

            <div class="cq-step-card">
                <div style="width: 48px; height: 48px; border-radius: 50%; background: #fff2ea; color: var(--cq-orange-cta); display: flex; align-items: center; justify-content: center; margin: 0 auto 16px auto;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
                </div>
                <h3 style="font-size: 18px; font-weight: 800; margin-bottom: 8px;">Higienitas Terjamin</h3>
                <p style="font-size: 14px; color: var(--cq-text-muted);">Proses produksi terstandarisasi dengan kontrol kualitas ketat untuk memastikan konsistensi aroma, kekentalan, dan kejernihan cairan.</p>
            </div>
        </div>
    </div>
</section>

<!-- JARINGAN EKOSISTEM BISNIS & MITRA STRATEGIS (SEO BACKLINK SECTION) -->
<section class="cq-section" style="background-color: #ffffff;">
    <div class="cq-container">
        <div style="text-align: center; max-width: 760px; margin: 0 auto 40px auto;">
            <span style="font-family: var(--cq-font-body); font-size: 16px; font-weight: 800; color: var(--cq-royal-blue); text-transform: uppercase; letter-spacing: 2px;">
                Sinergi & Kolaborasi
            </span>
            <h2 style="font-size: clamp(26px, 4vw, 38px); margin-top: 8px; color: var(--cq-text-dark);">
                Jaringan Ekosistem & Mitra Bisnis
            </h2>
            <p style="font-size: 15px; color: var(--cq-text-muted); margin-top: 8px;">
                Cleanique Lab merupakan bagian dari ekosistem usaha terintegrasi yang bergerak di bidang produksi bahan kimia, pelatihan kebersihan, distribusi, dan solusi industri.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
            <!-- 1. Indotech Berkah Abadi -->
            <a href="https://indotech.id/" target="_blank" rel="noopener" class="cq-channel-card" style="padding: 24px 16px; text-align: left; align-items: flex-start;">
                <strong style="font-size: 16px; color: var(--cq-royal-blue); margin-bottom: 4px;">Indotech Berkah Abadi</strong>
                <span style="font-size: 13px; color: var(--cq-text-muted); line-height: 1.4;">Solusi teknologi industri, otomasi, dan permesinan modern.</span>
                <span style="margin-top: 12px; font-size: 12px; font-weight: 800; color: var(--cq-green-deep);">indotech.id &rarr;</span>
            </a>

            <!-- 2. Orchid Brand -->
            <a href="https://orchidbrand.id/" target="_blank" rel="noopener" class="cq-channel-card" style="padding: 24px 16px; text-align: left; align-items: flex-start;">
                <strong style="font-size: 16px; color: var(--cq-royal-blue); margin-bottom: 4px;">Orchid Brand</strong>
                <span style="font-size: 13px; color: var(--cq-text-muted); line-height: 1.4;">Brand resmi produk sabun, parfum laundry & hygiene.</span>
                <span style="margin-top: 12px; font-size: 12px; font-weight: 800; color: var(--cq-green-deep);">orchidbrand.id &rarr;</span>
            </a>

            <!-- 3. Depo Cleanique -->
            <a href="https://depocleanique.co.id/" target="_blank" rel="noopener" class="cq-channel-card" style="padding: 24px 16px; text-align: left; align-items: flex-start;">
                <strong style="font-size: 16px; color: var(--cq-royal-blue); margin-bottom: 4px;">Depo Cleanique</strong>
                <span style="font-size: 13px; color: var(--cq-text-muted); line-height: 1.4;">Pusat distribusi grosir sabun curah & kebutuhan laundry.</span>
                <span style="margin-top: 12px; font-size: 12px; font-weight: 800; color: var(--cq-green-deep);">depocleanique.co.id &rarr;</span>
            </a>

            <!-- 4. Malabeez -->
            <a href="http://malabeez.co.id/" target="_blank" rel="noopener" class="cq-channel-card" style="padding: 24px 16px; text-align: left; align-items: flex-start;">
                <strong style="font-size: 16px; color: var(--cq-royal-blue); margin-bottom: 4px;">Malabeez</strong>
                <span style="font-size: 13px; color: var(--cq-text-muted); line-height: 1.4;">Peralatan, kimia khusus, dan suplai kebersihan profesional.</span>
                <span style="margin-top: 12px; font-size: 12px; font-weight: 800; color: var(--cq-green-deep);">malabeez.co.id &rarr;</span>
            </a>

            <!-- 5. Cleanique Lab -->
            <a href="https://cleaniquelab.com/" target="_blank" rel="noopener" class="cq-channel-card" style="padding: 24px 16px; text-align: left; align-items: flex-start;">
                <strong style="font-size: 16px; color: var(--cq-royal-blue); margin-bottom: 4px;">Cleanique Lab</strong>
                <span style="font-size: 13px; color: var(--cq-text-muted); line-height: 1.4;">Pusat riset, laboratorium formula, dan pabrik sabun nasional.</span>
                <span style="margin-top: 12px; font-size: 12px; font-weight: 800; color: var(--cq-green-deep);">cleaniquelab.com &rarr;</span>
            </a>

            <!-- 6. Cleanique Academy -->
            <a href="https://cleaniqueacademy.com/" target="_blank" rel="noopener" class="cq-channel-card" style="padding: 24px 16px; text-align: left; align-items: flex-start;">
                <strong style="font-size: 16px; color: var(--cq-royal-blue); margin-bottom: 4px;">Cleanique Academy</strong>
                <span style="font-size: 13px; color: var(--cq-text-muted); line-height: 1.4;">Pelatihan pembuatan sabun, SOP laundry & sertifikasi kebersihan.</span>
                <span style="margin-top: 12px; font-size: 12px; font-weight: 800; color: var(--cq-green-deep);">cleaniqueacademy.com &rarr;</span>
            </a>

            <!-- 7. Cleanique Mart -->
            <a href="https://cleaniquemart.com/" target="_blank" rel="noopener" class="cq-channel-card" style="padding: 24px 16px; text-align: left; align-items: flex-start;">
                <strong style="font-size: 16px; color: var(--cq-royal-blue); margin-bottom: 4px;">Cleanique Mart</strong>
                <span style="font-size: 13px; color: var(--cq-text-muted); line-height: 1.4;">Retail marketplace & toko online resmi produk Cleanique.</span>
                <span style="margin-top: 12px; font-size: 12px; font-weight: 800; color: var(--cq-green-deep);">cleaniquemart.com &rarr;</span>
            </a>

            <!-- 8. Prokopi -->
            <a href="https://prokopi.id/" target="_blank" rel="noopener" class="cq-channel-card" style="padding: 24px 16px; text-align: left; align-items: flex-start;">
                <strong style="font-size: 16px; color: var(--cq-royal-blue); margin-bottom: 4px;">Prokopi</strong>
                <span style="font-size: 13px; color: var(--cq-text-muted); line-height: 1.4;">Solusi pengolahan komoditas kopi dan ekosistem agribisnis.</span>
                <span style="margin-top: 12px; font-size: 12px; font-weight: 800; color: var(--cq-green-deep);">prokopi.id &rarr;</span>
            </a>
        </div>
    </div>
</section>

<!-- CTA KONTAK PABRIK -->
<section class="cq-section" style="background-color: #2b2b33; color: #ffffff;">
    <div class="cq-container">
        <div class="cq-cta-box" style="background: var(--cq-gradient-blue);">
            <h2>Konsultasikan Kebutuhan Sabun Bisnis Anda</h2>
            <p>
                Tim kami siap membantu merekomendasikan produk yang paling tepat untuk skala operasional maupun peluang kemitraan usaha Anda.
            </p>
            <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya ingin konsultasi kebutuhan produk sabun.')); ?>" 
               target="_blank" 
               rel="noopener" 
               class="cq-btn-primary">
                <svg class="cq-icon" width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                Hubungi Kami Sekarang
            </a>
        </div>
    </div>
</section>

<?php
get_footer();
