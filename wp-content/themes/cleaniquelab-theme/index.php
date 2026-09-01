<?php
/**
 * Main index fallback template
 *
 * @package CleaniqueLab
 */

get_header();
?>

<section class="cq-hero" style="padding-top: 60px; padding-bottom: 160px;">
    <div class="cq-container">
        <h1 class="cq-hero-h1" style="font-size: clamp(36px, 6vw, 68px);">
            <?php
            if (is_archive()) {
                the_archive_title();
            } elseif (is_search()) {
                printf(esc_html__('Hasil Pencarian: %s', 'cleaniquelab'), '<span>' . get_search_query() . '</span>');
            } else {
                echo 'Cleanique Lab';
            }
            ?>
        </h1>
    </div>

    <div class="cq-wave-divider">
        <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="#ffffff" d="M0,160L48,176C96,192,192,224,288,213.3C384,203,480,149,576,144C672,139,768,181,864,197.3C960,213,1056,203,1152,181.3C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
</section>

<div class="cq-section" style="background-color: #ffffff;">
    <div class="cq-container">
        <?php if (have_posts()) : ?>
            <div class="cq-blog-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('cq-article-card'); ?>>
                        <div class="cq-article-thumb">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('cleaniquelab-card'); ?>
                            <?php else : ?>
                                <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; background: var(--cq-gradient-blue); color: #fff; font-size: 40px;">
                                    ✨
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="cq-article-content">
                            <h2 class="cq-article-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <div class="cq-article-excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" style="font-weight: 800; font-size: 14px; text-transform: uppercase; color: var(--cq-royal-blue); margin-top: auto;">
                                Baca Selengkapnya &rarr;
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            <div style="margin-top: 50px; text-align: center;">
                <?php the_posts_pagination(); ?>
            </div>
        <?php else : ?>
            <p style="text-align: center; font-size: 18px; color: var(--cq-text-muted);">
                Belum ada konten yang ditemukan.
            </p>
        <?php endif; ?>
    </div>
</div>

<?php
get_footer();
