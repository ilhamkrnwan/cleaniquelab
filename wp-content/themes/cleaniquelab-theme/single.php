<?php
/**
 * Single Post Template (Rich Article Experience)
 *
 * @package CleaniqueLab
 */

get_header();
?>

<?php while (have_posts()) : the_post(); 
    $post_id        = get_the_ID();
    $permalink      = get_permalink();
    $title          = get_the_title();
    $categories     = get_the_category();
    $primary_cat    = !empty($categories) ? $categories[0] : null;
    $reading_time   = function_exists('cleaniquelab_get_reading_time') ? cleaniquelab_get_reading_time($post_id) : 3;
    $author_name    = get_the_author();
    $publish_date   = get_the_date('d F Y');
    $share_text     = urlencode($title . ' - Cleanique Lab: ' . $permalink);
    $share_url_wa   = 'https://api.whatsapp.com/send?text=' . $share_text;
    $share_url_fb   = 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($permalink);
    $share_url_x    = 'https://twitter.com/intent/tweet?url=' . urlencode($permalink) . '&text=' . urlencode($title);
    $share_url_in   = 'https://www.linkedin.com/sharing/share-offsite/?url=' . urlencode($permalink);
?>

    <!-- 1. HERO HEADER ARTIKEL & BREADCRUMB -->
    <section class="cq-hero cq-single-hero" style="padding-top: 50px; padding-bottom: 160px;">
        <div class="cq-container" style="max-width: 900px;">
            <!-- Breadcrumb Navigation -->
            <nav class="cq-breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>">Beranda</a>
                <span class="cq-breadcrumb-sep">/</span>
                <a href="<?php echo esc_url(home_url('/blog/')); ?>">Artikel & Edukasi</a>
                <?php if ($primary_cat) : ?>
                    <span class="cq-breadcrumb-sep">/</span>
                    <a href="<?php echo esc_url(get_category_link($primary_cat->term_id)); ?>"><?php echo esc_html($primary_cat->name); ?></a>
                <?php endif; ?>
            </nav>

            <!-- Kategori Badge -->
            <div style="margin-bottom: 16px;">
                <span class="cq-tag cq-tag-blue" style="background: rgba(255,255,255,0.2); color: #ffffff; border: 1px solid rgba(255,255,255,0.35); font-size: 13px; padding: 6px 18px; border-radius: 30px; letter-spacing: 0.5px;">
                    <?php echo $primary_cat ? esc_html($primary_cat->name) : 'Edukasi & Formulasi Sabun'; ?>
                </span>
            </div>

            <!-- Judul Utama Artikel -->
            <h1 class="cq-single-title">
                <?php the_title(); ?>
            </h1>

            <!-- Meta Penulis, Tanggal, & Estimasi Waktu Baca -->
            <div class="cq-single-meta">
                <div class="cq-meta-item">
                    <div class="cq-author-avatar-sm">
                        <?php echo strtoupper(substr($author_name, 0, 1)); ?>
                    </div>
                    <span>Oleh <strong><?php echo esc_html($author_name); ?></strong></span>
                </div>
                <span class="cq-meta-sep">•</span>
                <div class="cq-meta-item">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/></svg>
                    <span><?php echo esc_html($publish_date); ?></span>
                </div>
                <span class="cq-meta-sep">•</span>
                <div class="cq-meta-item">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    <span><?php echo esc_html($reading_time); ?> Menit Baca</span>
                </div>
                <span class="cq-meta-sep">•</span>
                <div class="cq-meta-item cq-meta-badge">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
                    <span>Terverifikasi Lab</span>
                </div>
            </div>
        </div>

        <div class="cq-wave-divider">
            <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
                <path fill="#ffffff" d="M0,160L48,176C96,192,192,224,288,213.3C384,203,480,149,576,144C672,139,768,181,864,197.3C960,213,1056,203,1152,181.3C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>
    </section>

    <!-- 2. KONTEN UTAMA & SIDEBAR INTERAKTIF -->
    <article class="cq-section" style="background-color: #ffffff; padding-top: 10px; padding-bottom: 80px;">
        <div class="cq-container" style="max-width: 860px;">
            
            <!-- Featured Image Utama -->
            <?php if (has_post_thumbnail()) : ?>
                <div class="cq-single-featured-img">
                    <?php the_post_thumbnail('full', ['class' => 'cq-featured-img-tag', 'alt' => get_the_title()]); ?>
                </div>
            <?php endif; ?>

            <!-- Social Share Bar (Bagian Atas) -->
            <div class="cq-share-bar">
                <div class="cq-share-label">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" x2="15.42" y1="13.51" y2="17.49"/><line x1="15.41" x2="8.59" y1="6.51" y2="10.49"/></svg>
                    <span>Bagikan Artikel:</span>
                </div>
                <div class="cq-share-buttons">
                    <!-- WhatsApp -->
                    <a href="<?php echo esc_url($share_url_wa); ?>" target="_blank" rel="noopener" class="cq-share-btn cq-share-wa" title="Bagikan ke WhatsApp">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                        <span>WhatsApp</span>
                    </a>
                    <!-- Facebook -->
                    <a href="<?php echo esc_url($share_url_fb); ?>" target="_blank" rel="noopener" class="cq-share-btn cq-share-fb" title="Bagikan ke Facebook">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        <span>Facebook</span>
                    </a>
                    <!-- Twitter/X -->
                    <a href="<?php echo esc_url($share_url_x); ?>" target="_blank" rel="noopener" class="cq-share-btn cq-share-x" title="Bagikan ke X">
                        <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        <span>X (Twitter)</span>
                    </a>
                    <!-- LinkedIn -->
                    <a href="<?php echo esc_url($share_url_in); ?>" target="_blank" rel="noopener" class="cq-share-btn cq-share-in" title="Bagikan ke LinkedIn">
                        <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        <span>LinkedIn</span>
                    </a>
                    <!-- Copy Link -->
                    <button type="button" class="cq-share-btn cq-share-copy" onclick="window.cleaniqueCopyArticleLink(this, '<?php echo esc_url($permalink); ?>');" title="Salin Tautan Artikel">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
                        <span>Salin Link</span>
                    </button>
                </div>
            </div>

            <!-- Poin Penting / Ringkasan Cepat Formulator -->
            <div class="cq-article-highlights">
                <div class="cq-highlights-header">
                    <div class="cq-highlights-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" x2="8" y1="13" y2="13"/><line x1="16" x2="8" y1="17" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                    </div>
                    <strong>Poin Utama & Catatan Formulasi:</strong>
                </div>
                <ul class="cq-highlights-list">
                    <li>Rangkuman panduan praktis dan standar mutu higienitas dari tim ahli Cleanique Lab.</li>
                    <li>Tips efisiensi takaran bahan pembersih agar hemat biaya operasional tanpa mengurangi daya bersih.</li>
                    <li>SOP penggunaan yang aman bagi serat pakaian, perabot dapur, lantai, maupun kulit pengguna.</li>
                </ul>
            </div>

            <!-- Isi Artikel Lengkap -->
            <div class="cq-article-body">
                <?php the_content(); ?>
            </div>

            <!-- Tag / Topik Bahasan -->
            <?php
            $post_tags = get_the_tags();
            if (!empty($post_tags)) :
            ?>
                <div class="cq-single-tags">
                    <div class="cq-tags-label">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2H2v10l9.29 9.29c.94.94 2.48.94 3.42 0l6.58-6.58c.94-.94.94-2.48 0-3.42L12 2Z"/><circle cx="7" cy="7" r=".5"/></svg>
                        <span>Topik Terkait:</span>
                    </div>
                    <div class="cq-tags-list">
                        <?php foreach ($post_tags as $tag) : ?>
                            <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="cq-tag-item">
                                #<?php echo esc_html($tag->name); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Social Share Bar (Bagian Bawah) -->
            <div class="cq-share-bar cq-share-bar-bottom">
                <div class="cq-share-label">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"/><polyline points="16 6 12 2 8 6"/><line x1="12" x2="12" y1="2" y2="15"/></svg>
                    <span>Suka artikel ini? Bagikan ke rekan Anda:</span>
                </div>
                <div class="cq-share-buttons">
                    <a href="<?php echo esc_url($share_url_wa); ?>" target="_blank" rel="noopener" class="cq-share-btn cq-share-wa">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                        <span>WhatsApp</span>
                    </a>
                    <a href="<?php echo esc_url($share_url_fb); ?>" target="_blank" rel="noopener" class="cq-share-btn cq-share-fb">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        <span>Facebook</span>
                    </a>
                    <a href="<?php echo esc_url($share_url_x); ?>" target="_blank" rel="noopener" class="cq-share-btn cq-share-x">
                        <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        <span>X (Twitter)</span>
                    </a>
                    <button type="button" class="cq-share-btn cq-share-copy" onclick="window.cleaniqueCopyArticleLink(this, '<?php echo esc_url($permalink); ?>');">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
                        <span>Salin Link</span>
                    </button>
                </div>
            </div>

            <!-- Author Bio Box -->
            <div class="cq-author-box">
                <div class="cq-author-avatar-lg">
                    <?php echo strtoupper(substr($author_name, 0, 1)); ?>
                </div>
                <div class="cq-author-info">
                    <span class="cq-author-tag">Tim Penulis & Formulator</span>
                    <h4 class="cq-author-name"><?php echo esc_html($author_name); ?></h4>
                    <p class="cq-author-desc">
                        Praktisi dan tim riset formulasi kimia <strong>Cleanique Lab</strong>. Berfokus pada inovasi sabun konsentrat ramah lingkungan, efisiensi operasional industri laundry & hotel, serta standarisasi kebersihan komersial.
                    </p>
                    <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Tim Formulator Cleanique Lab, saya ingin konsultasi seputar artikel "' . $title . '"')); ?>" target="_blank" rel="noopener" class="cq-author-link">
                        Tanya Formulator via WhatsApp &rarr;
                    </a>
                </div>
            </div>

            <!-- Navigasi Artikel Sebelumnya & Selanjutnya -->
            <div class="cq-post-nav">
                <?php
                $prev_post = get_previous_post();
                $next_post = get_next_post();
                ?>
                <div class="cq-nav-col cq-nav-prev">
                    <?php if ($prev_post) : ?>
                        <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>" class="cq-nav-card">
                            <span class="cq-nav-direction">&larr; Artikel Sebelumnya</span>
                            <strong class="cq-nav-title"><?php echo esc_html(get_the_title($prev_post->ID)); ?></strong>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="cq-nav-col cq-nav-next">
                    <?php if ($next_post) : ?>
                        <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>" class="cq-nav-card" style="text-align: right;">
                            <span class="cq-nav-direction">Artikel Selanjutnya &rarr;</span>
                            <strong class="cq-nav-title"><?php echo esc_html(get_the_title($next_post->ID)); ?></strong>
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Box CTA Konsultasi & Pemesanan Sabun di Bawah Artikel -->
            <div class="cq-single-cta">
                <div class="cq-single-cta-content">
                    <span class="cq-single-cta-eyebrow">Pasokan Langsung Pabrik</span>
                    <h3 class="cq-single-cta-h3">
                        Butuh Suplai Sabun Berkualitas atau Ingin Jadi Agen Kemitraan?
                    </h3>
                    <p class="cq-single-cta-p">
                        Dapatkan harga spesial langsung produsen untuk deterjen laundry, sabun cuci piring, hand soap, karbol wangi, maupun paket biang konsentrat hemat ongkir se-Indonesia.
                    </p>
                    <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                        <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya membaca artikel "' . $title . '" dan ingin order / kemitraan')); ?>" 
                           target="_blank" 
                           rel="noopener" 
                           class="cq-btn-primary">
                            <svg class="cq-icon" width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                            Hubungi WhatsApp Pabrik
                        </a>
                        <a href="<?php echo esc_url(home_url('/pricelist/')); ?>" class="cq-btn-outline cq-btn-outline-dark">
                            Buka Daftar Harga
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </article>

    <!-- 3. ARTIKEL TERKAIT (RELATED ARTICLES GRID) -->
    <section class="cq-section" style="background-color: var(--cq-bg-soft); padding-top: 60px; padding-bottom: 70px;">
        <div class="cq-container">
            <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 36px; flex-wrap: wrap; gap: 14px;">
                <div>
                    <span style="font-family: var(--cq-font-body); font-size: 14px; font-weight: 800; color: var(--cq-royal-blue); text-transform: uppercase; letter-spacing: 1.5px; display: block; margin-bottom: 6px;">
                        Rekomendasi Bacaan
                    </span>
                    <h2 style="font-size: clamp(24px, 3.5vw, 34px); color: var(--cq-text-dark); margin: 0;">
                        Artikel & Edukasi Terkait
                    </h2>
                </div>
                <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="cq-btn-outline cq-btn-outline-dark cq-btn-sm">
                    Lihat Semua Artikel &rarr;
                </a>
            </div>

            <div class="cq-blog-grid">
                <?php
                $related_args = [
                    'post_type'      => 'post',
                    'posts_per_page' => 3,
                    'post__not_in'   => [$post_id],
                    'orderby'        => 'rand',
                ];
                if ($primary_cat) {
                    $related_args['cat'] = $primary_cat->term_id;
                }
                $related_query = new WP_Query($related_args);

                if ($related_query->have_posts()) :
                    while ($related_query->have_posts()) : $related_query->the_post();
                        $r_cats = get_the_category();
                        $r_cat_name = !empty($r_cats) ? $r_cats[0]->name : 'Edukasi';
                        ?>
                        <article class="cq-article-card">
                            <div class="cq-article-thumb">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium_large'); ?>
                                <?php else : ?>
                                    <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%); color: var(--cq-royal-blue);">
                                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" x2="8" y1="13" y2="13"/><line x1="16" x2="8" y1="17" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="cq-article-content">
                                <div class="cq-article-meta">
                                    <span class="cq-tag cq-tag-blue" style="font-size: 11px; padding: 2px 8px;"><?php echo esc_html($r_cat_name); ?></span>
                                    <span>•</span>
                                    <span><?php echo get_the_date('d M Y'); ?></span>
                                </div>
                                <h3 class="cq-article-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <p class="cq-article-excerpt">
                                    <?php echo wp_trim_words(get_the_excerpt(), 14, '...'); ?>
                                </p>
                                <a href="<?php the_permalink(); ?>" class="cq-article-link">
                                    Baca Selengkapnya &rarr;
                                </a>
                            </div>
                        </article>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <!-- Fallback Cards jika belum ada artikel lain -->
                    <article class="cq-article-card">
                        <div class="cq-article-thumb">
                            <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%); color: var(--cq-green-deep);">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M10 2v7.31M14 9.3V1.99M8.5 2h7M14 9.3a6.5 6.5 0 1 1-4 0"/></svg>
                            </div>
                        </div>
                        <div class="cq-article-content">
                            <div class="cq-article-meta">
                                <span class="cq-tag cq-tag-green" style="font-size: 11px; padding: 2px 8px;">Tips Laundry</span>
                            </div>
                            <h3 class="cq-article-title">
                                <a href="<?php echo esc_url(home_url('/pricelist/#laundry')); ?>">Formula Deterjen Rendah Busa untuk Mesin Cuci Laundry Matic</a>
                            </h3>
                            <p class="cq-article-excerpt">
                                Menjaga motor mesin cuci tetap awet dan pakaian bebas dari residu sabun membandel.
                            </p>
                            <a href="<?php echo esc_url(home_url('/pricelist/#laundry')); ?>" class="cq-article-link">
                                Cek Katalog Deterjen &rarr;
                            </a>
                        </div>
                    </article>

                    <article class="cq-article-card">
                        <div class="cq-article-thumb">
                            <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%); color: var(--cq-royal-blue);">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg>
                            </div>
                        </div>
                        <div class="cq-article-content">
                            <div class="cq-article-meta">
                                <span class="cq-tag cq-tag-blue" style="font-size: 11px; padding: 2px 8px;">Peluang Usaha</span>
                            </div>
                            <h3 class="cq-article-title">
                                <a href="<?php echo esc_url(home_url('/pricelist/#biang')); ?>">Panduan Membuka Usaha Depo Sabun Curah dengan Modal Minim</a>
                            </h3>
                            <p class="cq-article-excerpt">
                                Strategi memulai bisnis reseller sabun cair dengan paket biang sabun konsentrat hemat ongkir.
                            </p>
                            <a href="<?php echo esc_url(home_url('/pricelist/#biang')); ?>" class="cq-article-link">
                                Cek Paket Kemitraan &rarr;
                            </a>
                        </div>
                    </article>

                    <article class="cq-article-card">
                        <div class="cq-article-thumb">
                            <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #fbf0fc 0%, #f3d4f5 100%); color: var(--cq-purple-bright);">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
                            </div>
                        </div>
                        <div class="cq-article-content">
                            <div class="cq-article-meta">
                                <span class="cq-tag cq-tag-purple" style="font-size: 11px; padding: 2px 8px;">Higienitas</span>
                            </div>
                            <h3 class="cq-article-title">
                                <a href="<?php echo esc_url(home_url('/pricelist/#bodycare')); ?>">Pentingnya Moisturizer pada Hand Soap Cair untuk Penggunaan Rutin</a>
                            </h3>
                            <p class="cq-article-excerpt">
                                Menjaga kulit tangan tetap lembut dan bebas bakteri meski dicuci berkali-kali setiap hari.
                            </p>
                            <a href="<?php echo esc_url(home_url('/pricelist/#bodycare')); ?>" class="cq-article-link">
                                Cek Hand Soap Premium &rarr;
                            </a>
                        </div>
                    </article>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php endwhile; ?>

<?php
get_footer();
