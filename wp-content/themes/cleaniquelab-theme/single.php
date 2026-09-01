<?php
/**
 * Single Post Template
 *
 * @package CleaniqueLab
 */

get_header();
?>

<?php while (have_posts()) : the_post(); ?>
    <!-- HERO HEADER ARTIKEL -->
    <section class="cq-hero" style="padding-top: 60px; padding-bottom: 160px;">
        <div class="cq-container" style="max-width: 860px;">
            <div style="margin-bottom: 14px;">
                <span class="cq-tag cq-tag-blue" style="background: rgba(255,255,255,0.25); color: #fff; font-size: 14px; padding: 6px 16px;">
                    <?php
                    $categories = get_the_category();
                    if (!empty($categories)) {
                        echo esc_html($categories[0]->name);
                    } else {
                        echo 'Artikel & Edukasi';
                    }
                    ?>
                </span>
            </div>
            <h1 style="font-size: clamp(32px, 5vw, 56px); color: #ffffff; margin-bottom: 16px; line-height: 1.2;">
                <?php the_title(); ?>
            </h1>
            <div style="font-size: 15px; color: #e8f3ff; display: flex; align-items: center; justify-content: center; gap: 16px;">
                <span>Ditulis oleh: <strong><?php the_author(); ?></strong></span>
                <span>•</span>
                <span><?php echo get_the_date('d F Y'); ?></span>
            </div>
        </div>

        <div class="cq-wave-divider">
            <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
                <path fill="#ffffff" d="M0,160L48,176C96,192,192,224,288,213.3C384,203,480,149,576,144C672,139,768,181,864,197.3C960,213,1056,203,1152,181.3C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>
    </section>

    <!-- ISI ARTIKEL -->
    <article class="cq-section" style="background-color: #ffffff; padding-top: 20px;">
        <div class="cq-container" style="max-width: 820px;">
            <?php if (has_post_thumbnail()) : ?>
                <div style="border-radius: 20px; overflow: hidden; margin-bottom: 40px; box-shadow: 0 15px 40px rgba(0,0,0,0.08);">
                    <?php the_post_thumbnail('full'); ?>
                </div>
            <?php endif; ?>

            <div class="cq-article-body" style="font-size: 18px; line-height: 1.8; color: var(--cq-text-body);">
                <?php the_content(); ?>
            </div>

            <!-- Box CTA Konsultasi Sabun di Bawah Artikel -->
            <div style="margin-top: 60px; padding: 40px; background: var(--cq-bg-soft); border-left: 5px solid var(--cq-royal-blue); border-radius: 16px;">
                <h3 style="font-size: 22px; margin-bottom: 10px; color: var(--cq-text-dark);">
                    Tertarik dengan Produk atau Peluang Usaha Sabun Cleanique Lab?
                </h3>
                <p style="font-size: 16px; color: var(--cq-text-muted); margin-bottom: 20px;">
                    Dapatkan harga langsung pabrik untuk kebutuhan laundry, restoran, hotel, ataupun paket kemitraan agen sabun curah.
                </p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya membaca artikel "' . get_the_title() . '" dan ingin konsultasi produk')); ?>" 
                       target="_blank" 
                       rel="noopener" 
                       class="cq-btn-primary cq-btn-sm">
                        Konsultasi via WhatsApp &rarr;
                    </a>
                    <a href="<?php echo esc_url(home_url('/pricelist/')); ?>" class="cq-btn-outline cq-btn-outline-dark cq-btn-sm">
                        Cek Daftar Harga
                    </a>
                </div>
            </div>
        </div>
    </article>
<?php endwhile; ?>

<?php
get_footer();
