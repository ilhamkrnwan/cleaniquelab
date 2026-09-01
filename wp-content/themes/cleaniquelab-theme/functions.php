<?php
/**
 * Cleanique Lab Theme Functions & Setup
 *
 * @package CleaniqueLab
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

define('CLEANIQUELAB_VERSION', '1.3.6');

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function cleaniquelab_theme_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(800, 500, true);
    add_image_size('cleaniquelab-card', 600, 380, true);

    // Register Navigation Menus
    register_nav_menus([
        'primary' => __('Menu Utama (Header)', 'cleaniquelab'),
        'footer'  => __('Menu Footer', 'cleaniquelab'),
    ]);

    // Switch default core markup for search form, comment form, and comments to output valid HTML5.
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);

    // Custom Logo Support
    add_theme_support('custom-logo', [
        'height'      => 80,
        'width'       => 280,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    // Responsive embedded content
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'cleaniquelab_theme_setup');

/**
 * Enqueue scripts and styles.
 */
function cleaniquelab_scripts() {
    // Main Theme Stylesheet
    wp_enqueue_style(
        'cleaniquelab-style',
        get_stylesheet_uri(),
        [],
        CLEANIQUELAB_VERSION
    );

    // Main Interactive JavaScript
    wp_enqueue_script(
        'cleaniquelab-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        CLEANIQUELAB_VERSION,
        true
    );

    // Pass dynamic WhatsApp number and site data to script
    wp_localize_script('cleaniquelab-main', 'cleaniqueData', [
        'whatsappNumber' => '6281234567890', // Nomor WhatsApp Customer Care
        'siteUrl'        => home_url('/'),
    ]);
}
add_action('wp_enqueue_scripts', 'cleaniquelab_scripts');

/**
 * Helper: Generate WhatsApp Order / Chat Link
 *
 * @param string $message
 * @return string
 */
function cleaniquelab_get_whatsapp_url($message = '') {
    $phone = '6281234567890';
    if (empty($message)) {
        $message = "Halo Cleanique Lab, saya tertarik untuk konsultasi dan order produk kebersihan / paket sabun.";
    }
    return 'https://wa.me/' . $phone . '?text=' . urlencode($message);
}

/**
 * Helper: Calculate estimated reading time in minutes
 *
 * @param int|null $post_id
 * @return int
 */
function cleaniquelab_get_reading_time($post_id = null) {
    $post = get_post($post_id);
    if (!$post) return 3;
    $words = str_word_count(strip_tags($post->post_content));
    $minutes = ceil($words / 200);
    return max(1, $minutes);
}

/**
 * SEO & GEO Structured Data (JSON-LD Schema Markup)
 */
function cleaniquelab_seo_schema_markup() {
    $site_url = home_url('/');
    $logo_url = get_template_directory_uri() . '/assets/images/hero-products.jpg';

    // 1. Organization & LocalBusiness Manufacturer Schema
    $business_schema = [
        '@context' => 'https://schema.org',
        '@type'    => ['Organization', 'LocalBusiness', 'Manufacturer'],
        'name'     => 'Cleanique Lab',
        'alternateName' => 'CleaniqueLab.com',
        'url'      => $site_url,
        'logo'     => $logo_url,
        'description' => 'Pusat produsen dan pabrik aneka sabun curah, deterjen laundry, sabun cuci piring, hand soap, karbol wangi, dan paket biang konsentrat di Indonesia.',
        'telephone' => '+62-812-3456-7890',
        'email'     => 'admin@cleaniquelab.com',
        'priceRange'=> 'Rp 30.000 - Rp 5.000.000',
        'address'   => [
            '@type'           => 'PostalAddress',
            'addressCountry'  => 'ID',
            'addressRegion'   => 'Indonesia',
        ],
        'geo' => [
            '@type'     => 'GeoCoordinates',
            'latitude'  => '-6.200000',
            'longitude' => '106.816666',
        ],
        'areaServed' => [
            ['@type' => 'Country', 'name' => 'Indonesia'],
            ['@type' => 'State', 'name' => 'DKI Jakarta'],
            ['@type' => 'State', 'name' => 'Jawa Barat'],
            ['@type' => 'State', 'name' => 'Jawa Tengah'],
            ['@type' => 'State', 'name' => 'Jawa Timur'],
            ['@type' => 'State', 'name' => 'Banten'],
            ['@type' => 'State', 'name' => 'DI Yogyakarta'],
            ['@type' => 'State', 'name' => 'Sumatera Utara'],
            ['@type' => 'State', 'name' => 'Sumatera Selatan'],
            ['@type' => 'State', 'name' => 'Riau'],
            ['@type' => 'State', 'name' => 'Lampung'],
            ['@type' => 'State', 'name' => 'Kalimantan Timur'],
            ['@type' => 'State', 'name' => 'Kalimantan Barat'],
            ['@type' => 'State', 'name' => 'Kalimantan Selatan'],
            ['@type' => 'State', 'name' => 'Sulawesi Selatan'],
            ['@type' => 'State', 'name' => 'Sulawesi Utara'],
            ['@type' => 'State', 'name' => 'Bali'],
            ['@type' => 'State', 'name' => 'Nusa Tenggara Barat'],
            ['@type' => 'State', 'name' => 'Papua'],
        ],
        'hasOfferCatalog' => [
            '@type' => 'OfferCatalog',
            'name'  => 'Katalog Sabun & Produk Kebersihan Cleanique Lab',
            'itemListElement' => [
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Product',
                        'name'  => 'Sabun Cuci Piring Cair (Dishwashing Liquid 5L)',
                        'description' => 'Sabun cuci piring ekstrak jeruk nipis asli ampuh rontokkan lemak dan kesat seketika.',
                    ]
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Product',
                        'name'  => 'Deterjen Cair Laundry Konsentrat (Liquid Laundry Detergent 5L)',
                        'description' => 'Deterjen cair rendah busa khusus mesin cuci laundry matic, anti apek, dan melembutkan serat kain.',
                    ]
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Product',
                        'name'  => 'Hand Soap Premium Antiseptik (5L)',
                        'description' => 'Sabun cuci tangan berpelembap aloe vera dengan formula anti-bakteri 99.9%.',
                    ]
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Product',
                        'name'  => 'Karbol Wangi Sereh & Pinus (Floor Disinfectant 5L)',
                        'description' => 'Karbol lantai desinfektan alami pengusir serangga dan bakteri di lantai dan toilet.',
                    ]
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Product',
                        'name'  => 'Paket Biang Sabun Konsentrat Super Hemat',
                        'description' => 'Formula biang sabun konsentrat hemat ongkir ke seluruh pelosok Indonesia.',
                    ]
                ],
            ]
        ]
    ];

    echo '<script type="application/ld+json">' . json_encode($business_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";

    // 2. FAQ Schema for Front Page
    if (is_front_page()) {
        $faq_schema = [
            '@context'   => 'https://schema.org',
            '@type'      => 'FAQPage',
            'mainEntity' => [
                [
                    '@type'          => 'Question',
                    'name'           => 'Apakah melayani pengiriman sabun cair dan biang ke luar pulau Jawa?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Ya, Cleanique Lab melayani pengiriman ke seluruh 38 provinsi di Indonesia menggunakan ekspedisi kargo resmi spesialis cairan (J&T Cargo, Indah Logistik, Dakota, dll.) dengan segel tutup ganda anti-bocor.'
                    ]
                ],
                [
                    '@type'          => 'Question',
                    'name'           => 'Apa keuntungan membeli paket biang sabun konsentrat Cleanique Lab?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Paket biang sabun konsentrat menghemat ongkos kirim hingga 80% karena dikirim tanpa air. Cukup campurkan air bersih sesuai takaran resmi untuk menghasilkan sabun kental berkualitas pabrik.'
                    ]
                ],
                [
                    '@type'          => 'Question',
                    'name'           => 'Apakah Cleanique Lab melayani maklon atau private label merek sendiri?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Ya, kami melayani jasa maklon (OEM) dan private label untuk pembuatan sabun cair, deterjen, dan pembersih lantai dengan merek, aroma, warna, dan formula kustom Anda sendiri.'
                    ]
                ],
                [
                    '@type'          => 'Question',
                    'name'           => 'Berapa Minimum Order Quantity (MOQ) untuk pembelian grosir jerigen atau drum?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text'  => 'Pembelian jerigen 5 Liter tidak memiliki batas minimum ketat, sedangkan untuk pasokan drum 200L atau pesanan formula kustom berlaku MOQ khusus dengan harga grosir pabrik yang sangat kompetitif.'
                    ]
                ]
            ]
        ];
        echo '<script type="application/ld+json">' . json_encode($faq_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
    }

    // 3. BlogPosting Schema for Single Post
    if (is_singular('post')) {
        global $post;
        $author_name = get_the_author_meta('display_name', $post->post_author) ?: 'Tim Formulator Cleanique Lab';
        $thumb_url = has_post_thumbnail($post->ID) ? get_the_post_thumbnail_url($post->ID, 'full') : $logo_url;

        $article_schema = [
            '@context'         => 'https://schema.org',
            '@type'            => 'BlogPosting',
            'headline'         => get_the_title($post->ID),
            'description'      => wp_strip_all_tags(get_the_excerpt($post->ID)),
            'image'            => $thumb_url,
            'datePublished'    => get_the_date('c', $post->ID),
            'dateModified'     => get_the_modified_date('c', $post->ID),
            'author'           => [
                '@type' => 'Person',
                'name'  => $author_name,
            ],
            'publisher'        => [
                '@type' => 'Organization',
                'name'  => 'Cleanique Lab',
                'logo'  => [
                    '@type' => 'ImageObject',
                    'url'   => $logo_url
                ]
            ],
            'mainEntityOfPage' => [
                '@type' => 'WebPage',
                '@id'   => get_permalink($post->ID)
            ]
        ];
        echo '<script type="application/ld+json">' . json_encode($article_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
    }
}
add_action('wp_head', 'cleaniquelab_seo_schema_markup');
