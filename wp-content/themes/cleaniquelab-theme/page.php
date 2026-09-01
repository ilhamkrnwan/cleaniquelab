<?php
/**
 * Standard Page Template
 *
 * @package CleaniqueLab
 */

get_header();
?>

<?php while (have_posts()) : the_post(); ?>
    <section class="cq-hero" style="padding-top: 60px; padding-bottom: 160px;">
        <div class="cq-container">
            <h1 class="cq-hero-h1" style="font-size: clamp(36px, 6vw, 68px);">
                <?php the_title(); ?>
            </h1>
        </div>

        <div class="cq-wave-divider">
            <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
                <path fill="#ffffff" d="M0,160L48,176C96,192,192,224,288,213.3C384,203,480,149,576,144C672,139,768,181,864,197.3C960,213,1056,203,1152,181.3C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>
    </section>

    <div class="cq-section" style="background-color: #ffffff; padding-top: 20px;">
        <div class="cq-container" style="max-width: 900px;">
            <div class="cq-page-content" style="font-size: 17px; line-height: 1.7; color: var(--cq-text-body);">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
<?php endwhile; ?>

<?php
get_footer();
