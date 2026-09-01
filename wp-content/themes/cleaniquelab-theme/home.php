<?php
/**
 * Blog / Articles Listing Template with Featured Spotlight
 *
 * @package CleaniqueLab
 */

get_header();
?>

<!-- HERO SECTION ARTIKEL -->
<section class="cq-hero" style="padding-top: 70px; padding-bottom: 180px;">
    <div class="cq-container">
        <span class="cq-hero-eyebrow">Pusat Edukasi & Informasi</span>
        <h1 class="cq-hero-h1" style="font-size: clamp(40px, 6.5vw, 84px);">Tips, Panduan & Wawasan Sabun</h1>
        <p class="cq-hero-lead">
            Kumpulan artikel teknis seputar formulasi sabun, tips kebersihan industri & komersial, strategi efisiensi biaya laundry, dan panduan kemitraan usaha sabun curah.
        </p>
    </div>

    <div class="cq-wave-divider">
        <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="#ffffff" d="M0,160L48,176C96,192,192,224,288,213.3C384,203,480,149,576,144C672,139,768,181,864,197.3C960,213,1056,203,1152,181.3C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
</section>

<!-- MAIN ARTICLES SECTION DENGAN SOROTAN UTAMA -->
<section class="cq-section" style="background-color: #ffffff;">
    <div class="cq-container">

        <?php if (have_posts()) : ?>
            
            <?php 
            // 1. Ambil Post Pertama Sebagai Sorotan Utama (Featured Spotlight)
            the_post(); 
            ?>
            <div class="cq-spotlight-card">
                <div class="cq-spotlight-inner">
                    <div>
                        <div class="cq-spotlight-badge">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            Sorotan Artikel Utama
                        </div>
                        <h2 class="cq-spotlight-title">
                            <a href="<?php the_permalink(); ?>" style="color: var(--cq-text-dark); text-decoration: none;"><?php the_title(); ?></a>
                        </h2>
                        <div class="cq-article-meta" style="margin-bottom: 16px;">
                            <span style="display: inline-flex; align-items: center; gap: 4px;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="3" y1="10" y2="10"/></svg>
                                <?php echo get_the_date('d F Y'); ?>
                            </span>
                            <span style="display: inline-flex; align-items: center; gap: 4px;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                                Ditulis oleh <?php the_author(); ?>
                            </span>
                        </div>
                        <p class="cq-spotlight-desc">
                            <?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="cq-btn-primary cq-btn-sm" style="display: inline-flex;">
                            Baca Panduan Lengkap &rarr;
                        </a>
                    </div>

                    <div class="cq-spotlight-visual">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large'); ?>
                        <?php else : ?>
                            <div style="width: 100%; height: 100%; min-height: 240px; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #00d2ff, #3a7bd5); color: #fff;">
                                <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" x2="8" y1="13" y2="13"/><line x1="16" x2="8" y1="17" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- 2. Grid Artikel Berikutnya -->
            <?php if (have_posts()) : ?>
                <div style="margin-top: 50px; margin-bottom: 24px;">
                    <h3 style="font-size: 24px; font-weight: 800; color: var(--cq-text-dark);">Artikel & Panduan Lainnya</h3>
                </div>

                <div class="cq-blog-grid">
                    <?php while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('cq-article-card'); ?>>
                            <div class="cq-article-thumb">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('cleaniquelab-card'); ?>
                                <?php else : ?>
                                    <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #00d2ff, #3a7bd5); color: #fff;">
                                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"/><path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"/></svg>
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

                                <h2 class="cq-article-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>

                                <div class="cq-article-excerpt">
                                    <?php echo wp_trim_words(get_the_excerpt(), 18, '...'); ?>
                                </div>

                                <a href="<?php the_permalink(); ?>" class="cq-article-link">
                                    Baca Selengkapnya &rarr;
                                </a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <!-- Pagination -->
                <div style="margin-top: 50px; text-align: center;">
                    <?php
                    the_posts_pagination([
                        'mid_size'  => 2,
                        'prev_text' => '&larr; Sebelumnya',
                        'next_text' => 'Selanjutnya &rarr;',
                    ]);
                    ?>
                </div>
            <?php endif; ?>

        <?php else : ?>
            
            <!-- FALLBACK EDITORIAL SPOTLIGHT + GRID -->
            <div class="cq-spotlight-card">
                <div class="cq-spotlight-inner">
                    <div>
                        <div class="cq-spotlight-badge">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            Sorotan Panduan Utama
                        </div>
                        <h2 class="cq-spotlight-title">
                            Panduan Lengkap Standar Mutu Formulasi Sabun & Peluang Kemitraan Curah 2026
                        </h2>
                        <div class="cq-article-meta" style="margin-bottom: 16px;">
                            <span>Tim Formulator Cleanique Lab</span> &bull; <span>Waktu Baca: 5 Menit</span>
                        </div>
                        <p class="cq-spotlight-desc">
                            Pelajari bagaimana memilih bahan pembersih dengan surfaktan biodegradable, menjaga keseimbangan pH 6.5 - 7.5 agar ramah kulit, dan strategi membangun usaha distributor sabun curah dengan margin keuntungan tinggi.
                        </p>
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="cq-btn-primary cq-btn-sm" style="display: inline-flex;">
                            Konsultasi Formula & Bisnis &rarr;
                        </a>
                    </div>

                    <div class="cq-spotlight-visual">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hero-products.jpg'); ?>" alt="Sorotan Formulasi Sabun Cleanique Lab" onerror="this.src='https://cdn.cleaniquelab.com/wp-content/uploads/2025/02/Aneka-Sabun-Cleanique-Lab.webp';">
                    </div>
                </div>
            </div>

            <div style="margin-top: 50px; margin-bottom: 24px;">
                <h3 style="font-size: 24px; font-weight: 800; color: var(--cq-text-dark);">Artikel & Panduan Pilihan</h3>
            </div>

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
                        <h2 class="cq-article-title">
                            <a href="<?php echo esc_url(home_url('/pricelist/')); ?>">Cara Memulai Usaha Sabun Cuci Piring Curah dengan Modal Minim</a>
                        </h2>
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
                        <h2 class="cq-article-title">
                            <a href="<?php echo esc_url(home_url('/pricelist/')); ?>">Kenapa Usaha Laundry Wajib Menggunakan Deterjen Cair Rendah Busa?</a>
                        </h2>
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
                        <h2 class="cq-article-title">
                            <a href="<?php echo esc_url(home_url('/about/')); ?>">Standar pH Netral pada Hand Soap: Mengapa Aman Tanpa Bikin Kulit Kering?</a>
                        </h2>
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

<?php
get_footer();
