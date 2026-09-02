<?php
/**
 * Blog / Articles Listing Template with Search, Sorting & Pagination
 *
 * @package CleaniqueLab
 */

get_header();

// Fetch search and sorting parameters
$search_query = isset($_GET['s']) ? sanitize_text_field($_GET['s']) : '';
$sort = isset($_GET['sort']) ? sanitize_text_field($_GET['sort']) : 'date-desc';

$orderby = 'date';
$order = 'DESC';

switch ($sort) {
    case 'date-asc':
        $orderby = 'date';
        $order = 'ASC';
        break;
    case 'title-asc':
        $orderby = 'title';
        $order = 'ASC';
        break;
    case 'title-desc':
        $orderby = 'title';
        $order = 'DESC';
        break;
    default:
        $orderby = 'date';
        $order = 'DESC';
        break;
}

$paged = (get_query_var('paged')) ? get_query_var('paged') : (get_query_var('page') ? get_query_var('page') : 1);

$query_args = [
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 9,
    'paged'          => $paged,
    'orderby'        => $orderby,
    'order'          => $order,
];

if (!empty($search_query)) {
    $query_args['s'] = $search_query;
}

$blog_query = new WP_Query($query_args);
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

<!-- MAIN ARTICLES SECTION WITH SEARCH, SORTING & PAGINATION -->
<section class="cq-section" style="background-color: #ffffff; padding-top: 40px;">
    <div class="cq-container">

        <!-- SEARCH BAR & SORTING CONTROL BAR -->
        <div style="background: var(--cq-bg-soft); border-radius: 20px; padding: 20px 24px; margin-bottom: 40px; border: 1px solid var(--cq-border-light); box-shadow: 0 4px 20px rgba(0,0,0,0.03);">
            <form method="GET" action="<?php echo esc_url(home_url('/blog/')); ?>" style="display: flex; flex-wrap: wrap; gap: 16px; align-items: center; justify-content: space-between;">
                
                <!-- Search Input Group -->
                <div style="display: flex; align-items: center; gap: 10px; flex-grow: 1; min-width: 280px; position: relative;">
                    <div style="position: absolute; left: 16px; top: 50%; transform: translateY(-50%); color: var(--cq-text-muted); display: flex; align-items: center; pointer-events: none;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    </div>
                    <input 
                        type="text" 
                        name="s" 
                        value="<?php echo esc_attr($search_query); ?>" 
                        placeholder="Cari tips, panduan & artikel..." 
                        style="width: 100%; padding: 12px 16px 12px 44px; border-radius: 50px; border: 1px solid var(--cq-border-light); font-size: 15px; background: #ffffff; color: var(--cq-text-dark); outline: none; transition: border-color 0.2s;"
                        onfocus="this.style.borderColor='var(--cq-royal-blue)';"
                        onblur="this.style.borderColor='var(--cq-border-light)';"
                    >
                    <button type="submit" class="cq-btn-primary" style="padding: 12px 24px; font-size: 14px; white-space: nowrap; flex-shrink: 0;">
                        Cari Artikel
                    </button>
                    <?php if (!empty($search_query) || $sort !== 'date-desc') : ?>
                        <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="cq-btn-outline cq-btn-outline-dark" style="padding: 12px 18px; font-size: 14px; white-space: nowrap;">
                            Reset
                        </a>
                    <?php endif; ?>
                </div>

                <!-- Sorting Dropdown Group -->
                <div style="display: flex; align-items: center; gap: 8px; flex-shrink: 0;">
                    <label for="sort-select" style="font-size: 14px; font-weight: 700; color: var(--cq-text-dark); white-space: nowrap;">
                        Urutkan:
                    </label>
                    <select 
                        id="sort-select" 
                        name="sort" 
                        onchange="this.form.submit();" 
                        style="padding: 12px 18px; border-radius: 50px; border: 1px solid var(--cq-border-light); font-size: 14px; font-weight: 600; background: #ffffff; color: var(--cq-text-dark); cursor: pointer; outline: none;"
                    >
                        <option value="date-desc" <?php selected($sort, 'date-desc'); ?>>Terbaru</option>
                        <option value="date-asc" <?php selected($sort, 'date-asc'); ?>>Terlama</option>
                        <option value="title-asc" <?php selected($sort, 'title-asc'); ?>>Abjad (A - Z)</option>
                        <option value="title-desc" <?php selected($sort, 'title-desc'); ?>>Abjad (Z - A)</option>
                    </select>
                </div>

            </form>

            <?php if (!empty($search_query)) : ?>
                <div style="margin-top: 14px; font-size: 14px; color: var(--cq-text-dark); display: flex; align-items: center; gap: 8px;">
                    <span style="font-weight: 700; color: var(--cq-royal-blue);">Hasil Pencarian:</span>
                    <span>Menampilkan artikel untuk kata kunci <strong>"<?php echo esc_html($search_query); ?>"</strong> (<?php echo esc_html($blog_query->found_posts); ?> artikel ditemukan)</span>
                </div>
            <?php endif; ?>
        </div>

        <?php if ($blog_query->have_posts()) : ?>
            
            <?php 
            // 1. Ambil Post Pertama Sebagai Sorotan Utama (Hanya jika di halaman 1 dan tanpa pencarian spesifik)
            if ($paged == 1 && empty($search_query)) :
                $blog_query->the_post(); 
                ?>
                <div class="cq-spotlight-flat-wrap">
                    <div>
                        <div class="cq-spotlight-badge" style="margin-bottom: 14px;">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            Sorotan Artikel Utama
                        </div>
                        <h2 class="cq-spotlight-title" style="font-size: clamp(26px, 3.5vw, 36px); margin-bottom: 14px;">
                            <a href="<?php the_permalink(); ?>" style="color: var(--cq-text-dark); text-decoration: none;"><?php the_title(); ?></a>
                        </h2>
                        <p class="cq-spotlight-desc" style="font-size: 16px; color: #64748b; line-height: 1.65; margin-bottom: 22px;">
                            <?php echo wp_trim_words(get_the_excerpt(), 32, '...'); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="cq-btn-primary cq-btn-md" style="display: inline-flex; border-radius: 30px;">
                            Baca Selengkapnya &rarr;
                        </a>
                    </div>

                    <div class="cq-spotlight-flat-visual">
                        <span class="cq-flat-date-badge"><?php echo get_the_date('M j, Y'); ?></span>
                        <a href="<?php the_permalink(); ?>" style="display: block; width: 100%; height: 100%;">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large'); ?>
                            <?php else : ?>
                                <div style="width: 100%; height: 100%; min-height: 280px; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #00d2ff, #3a7bd5); color: #fff;">
                                    <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" x2="8" y1="13" y2="13"/><line x1="16" x2="8" y1="17" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                                </div>
                            <?php endif; ?>
                        </a>
                    </div>
                </div>
            <?php endif; ?>

            <!-- 2. Grid Artikel Berikutnya (Flat Uncarded 1:1 Aspect Ratio) -->
            <?php if ($blog_query->have_posts()) : ?>
                <div style="margin-top: 40px; margin-bottom: 28px;">
                    <h3 style="font-size: 26px; font-weight: 800; color: var(--cq-text-dark);">
                        <?php echo !empty($search_query) ? 'Daftar Artikel Hasil Pencarian' : 'Artikel & Panduan Terkini'; ?>
                    </h3>
                </div>

                <div class="cq-flat-blog-grid">
                    <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('cq-flat-post-item'); ?>>
                            <div class="cq-flat-post-thumb">
                                <span class="cq-flat-date-badge"><?php echo get_the_date('M j, Y'); ?></span>
                                <a href="<?php the_permalink(); ?>" style="display: block; width: 100%; height: 100%;">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('cleaniquelab-card'); ?>
                                    <?php else : ?>
                                        <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #00d2ff, #3a7bd5); color: #fff;">
                                            <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"/><path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"/></svg>
                                        </div>
                                    <?php endif; ?>
                                </a>
                            </div>

                            <div class="cq-flat-post-content">
                                <h3 class="cq-flat-post-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>

                                <p class="cq-flat-post-excerpt">
                                    <?php echo wp_trim_words(get_the_excerpt(), 18, '...'); ?>
                                </p>

                                <a href="<?php the_permalink(); ?>" class="cq-btn-primary cq-btn-sm" style="display: inline-flex; width: fit-content; border-radius: 30px; font-size: 13px; padding: 8px 18px;">
                                    Baca Selengkapnya &rarr;
                                </a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <!-- Pagination dengan Styling Modern -->
                <div class="cq-pagination-wrap" style="margin-top: 60px; text-align: center;">
                    <?php
                    $add_args = [];
                    if (!empty($search_query)) {
                        $add_args['s'] = $search_query;
                    }
                    if (!empty($sort) && $sort !== 'date-desc') {
                        $add_args['sort'] = $sort;
                    }

                    echo paginate_links([
                        'total'     => $blog_query->max_num_pages,
                        'current'   => $paged,
                        'prev_text' => '&larr; Sebelumnya',
                        'next_text' => 'Selanjutnya &rarr;',
                        'add_args'  => $add_args,
                    ]);
                    ?>
                </div>
            <?php endif; ?>

            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <div style="text-align: center; padding: 60px 0;">
                <h2 style="font-size: 24px; color: var(--cq-text-dark); font-weight: 800;">
                    <?php echo !empty($search_query) ? 'Artikel Tidak Ditemukan' : 'Belum Ada Artikel Diterbitkan'; ?>
                </h2>
                <p style="font-size: 16px; color: #64748b; margin-top: 10px;">
                    <?php echo !empty($search_query) ? 'Coba gunakan kata kunci pencarian yang lain atau reset filter.' : 'Artikel dan panduan terbaru Cleanique Lab akan segera hadir di sini.'; ?>
                </p>
                <?php if (!empty($search_query)) : ?>
                    <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="cq-btn-primary" style="margin-top: 20px;">
                        Lihat Semua Artikel
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>

    </div>
</section>

<?php
get_footer();
