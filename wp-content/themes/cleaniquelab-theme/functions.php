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

    // Enforce SEO %postname% permalink structure & flush rewrite rules
    if (get_option('permalink_structure') !== '/%postname%/') {
        update_option('permalink_structure', '/%postname%/');
        flush_rewrite_rules();
    }
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
        'whatsappNumber' => '6287848120088', // Nomor WhatsApp Customer Care Resmi
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
    $phone = '6287848120088';
    if (empty($message)) {
        $message = "Halo Cleanique Lab, saya ingin konsultasi dan pemesanan produk sabun kebersihan.";
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

/**
 * Auto-publish essential Cleanique Lab Pages and assign custom page templates
 */
function cleaniquelab_auto_publish_pages() {
    $pages_to_create = [
        // 1. Katalog & Daftar Harga
        'daftar-harga' => [
            'title'    => 'Daftar Harga & Katalog Grosir Pabrik',
            'content'  => 'Halaman resmi daftar harga grosir produk sabun cair curah, deterjen laundry, dan biang konsentrat Cleanique Lab.',
            'template' => 'page-pricelist.php'
        ],
        'pricelist' => [
            'title'    => 'Pricelist & Bulk Soap Wholesale Catalog',
            'content'  => 'Transparent pricing matrix for liquid soap, laundry detergent, and concentrated formula.',
            'template' => 'page-pricelist.php'
        ],
        'katalog-produk' => [
            'title'    => 'Katalog Produk Sabun Curah Jerigen 5L & Drum',
            'content'  => 'Katalog lengkap aneka produk sabun cuci piring, deterjen, hand soap, dan karbol desinfektan.',
            'template' => 'page-pricelist.php'
        ],
        'biang-sabun' => [
            'title'    => 'Paket Biang Sabun Konsentrat Super Hemat',
            'content'  => 'Formula biang sabun murni konsentrat tinggi hemat ongkos kirim ke seluruh 38 provinsi di Indonesia.',
            'template' => 'page-pricelist.php'
        ],

        // 2. Profil & Tentang Kami
        'tentang-kami' => [
            'title'    => 'Tentang Cleanique Lab & Profil Pabrik',
            'content'  => 'Profil lengkap pabrik produsen sabun, standar laboratorium, dan garansi mutu Cleanique Lab.',
            'template' => 'page-about.php'
        ],
        'about' => [
            'title'    => 'About Cleanique Lab & Manufacturing Facility',
            'content'  => 'Company profile, ISO manufacturing standards, eco-friendly formulation lab, and production capacity.',
            'template' => 'page-about.php'
        ],
        'maklon-sabun' => [
            'title'    => 'Layanan Maklon Sabun & OEM Private Label',
            'content'  => 'Jasa maklon produksi sabun cair, deterjen, dan pembersih dengan brand dan formulasi kustom Anda sendiri.',
            'template' => 'page-about.php'
        ],

        // 3. Kontak & Kemitraan
        'hubungi-kami' => [
            'title'    => 'Hubungi Kami & Pemesanan B2B',
            'content'  => 'Layanan konsultasi kebutuhan sabun industri, restoran, hotel, serta kemitraan distributor.',
            'template' => 'page-contact.php'
        ],
        'contact' => [
            'title'    => 'Contact Us & B2B Customer Care',
            'content'  => 'Direct WhatsApp consultation, wholesale price inquiry, and workshop facility address.',
            'template' => 'page-contact.php'
        ],
        'kontak' => [
            'title'    => 'Kontak Customer Care & Layanan Order',
            'content'  => 'Pusat bantuan dan saluran komunikasi cepat Cleanique Lab.',
            'template' => 'page-contact.php'
        ],
        'kemitraan-agen' => [
            'title'    => 'Peluang Kemitraan Distributor & Agen Sabun',
            'content'  => 'Program keagenan dan reseller sabun curah dengan margin keuntungan menarik di seluruh daerah.',
            'template' => 'page-contact.php'
        ],

        // 4. Koleksi & Katalog Template
        'koleksi-template' => [
            'title'    => 'Koleksi Template Halaman Web Cleanique Lab',
            'content'  => 'Galeri dan katalog lengkap template halaman web Cleanique Lab untuk B2B, landing page, dan e-commerce.',
            'template' => 'page-templates.php'
        ],
        'templates' => [
            'title'    => 'Cleanique Lab Web Page Templates Showcase',
            'content'  => 'Standardized digital architecture templates for Cleanique Lab web pages and landing layouts.',
            'template' => 'page-templates.php'
        ],

        // 5. Legal & Kebijakan
        'kebijakan-privasi' => [
            'title'    => 'Kebijakan Privasi Cleanique Lab',
            'content'  => 'Kebijakan privasi dan keamanan data pelanggan Cleanique Lab.',
            'template' => 'page-privacy-policy.php'
        ],
        'privacy-policy' => [
            'title'    => 'Privacy Policy & Data Security Statement',
            'content'  => 'Official privacy policy and security protocols for Cleanique Lab customers.',
            'template' => 'page-privacy-policy.php'
        ],
        'syarat-dan-ketentuan' => [
            'title'    => 'Syarat & Ketentuan Layanan',
            'content'  => 'Syarat dan ketentuan pembelian grosir, garansi pengiriman kargo, dan maklon sabun.',
            'template' => 'page-terms.php'
        ],
        'terms' => [
            'title'    => 'Terms of Service & SLA Delivery Guarantee',
            'content'  => 'Terms of service, liquid cargo packaging safety, and wholesale return policies.',
            'template' => 'page-terms.php'
        ],
        'kebijakan-cookie' => [
            'title'    => 'Kebijakan Cookie & Data Hygiene',
            'content'  => 'Penggunaan cookie dan analisis pengalaman pengguna di platform Cleanique Lab.',
            'template' => 'page-cookie-policy.php'
        ],
        'cookie-policy' => [
            'title'    => 'Cookie Policy & User Preference Settings',
            'content'  => 'Cookie usage terms and browser session policies.',
            'template' => 'page-cookie-policy.php'
        ],

        // 6. Blog & Artikel Archive
        'blog' => [
            'title'    => 'Artikel & Edukasi Sabun Cleanique Lab',
            'content'  => 'Pusat informasi, tips kebersihan industri, panduan laundry, dan riset formulasi sabun.',
            'template' => 'home.php'
        ],
        'artikel' => [
            'title'    => 'Pusat Berita & Artikel Teknis Sabun',
            'content'  => 'Kumpulan artikel dan panduan teknis formulasi pembersih komersial.',
            'template' => 'home.php'
        ]
    ];

    foreach ($pages_to_create as $slug => $page_data) {
        $existing_page = get_page_by_path($slug, OBJECT, 'page');
        if (!$existing_page) {
            $page_id = wp_insert_post([
                'post_title'     => $page_data['title'],
                'post_name'      => $slug,
                'post_content'   => $page_data['content'],
                'post_status'    => 'publish',
                'post_type'      => 'page',
                'post_author'    => 1,
                'comment_status' => 'closed',
            ]);
            if ($page_id && !is_wp_error($page_id)) {
                update_post_meta($page_id, '_wp_page_template', $page_data['template']);
            }
        } else {
            // Ensure status is published and template assigned
            if ($existing_page->post_status !== 'publish') {
                wp_update_post([
                    'ID'          => $existing_page->ID,
                    'post_status' => 'publish'
                ]);
            }
            update_post_meta($existing_page->ID, '_wp_page_template', $page_data['template']);
        }
    }

    $blog_page = get_page_by_path('blog', OBJECT, 'page');
    if ($blog_page) {
        update_option('page_for_posts', $blog_page->ID);
    }
}
add_action('after_setup_theme', 'cleaniquelab_auto_publish_pages');

/**
 * Auto-publish rich sample Blog Posts for Cleanique Lab
 */
function cleaniquelab_auto_publish_blog_posts() {
    $blog_posts = [
        'panduan-lengkap-formulasi-sabun-2026' => [
            'title'    => 'Panduan Lengkap Standar Mutu Formulasi Sabun & Peluang Kemitraan Curah 2026',
            'excerpt'  => 'Pelajari bagaimana memilih bahan pembersih dengan surfaktan biodegradable, menjaga keseimbangan pH 6.5 - 7.5 agar ramah kulit, dan strategi membangun usaha distributor sabun curah dengan margin keuntungan tinggi.',
            'category' => 'Formulasi Kimia',
            'tags'     => ['Formulasi Sabun', 'Biang Sabun', 'Peluang Usaha'],
            'content'  => '<h2>Standar Kualitas Formulasi Sabun Industri</h2><p>Industri pembuatan sabun dan pembersih komersial menuntut presisi tinggi dalam penentuan kadar surfaktan aktif, agen penyeimbang pH, serta pengstabil busa. Cleanique Lab memproduksi seluruh varian sabun cair dan biang konsentrat berdasarkan riset laboratorium ketat.</p><h3>1. Konsentrasi Surfaktan Aktif Biodegradable</h3><p>Penggunaan surfaktan ramah lingkungan memastikan limbah sabun dapat terurai secara alami oleh mikroorganisme perairan tanpa merusak ekosistem atau menyumbat instalasi pengolahan air limbah (IPAL).</p><h3>2. Keseimbangan pH dan Pelembap Kulit</h3><p>Nilai pH ideal untuk sabun cuci tangan dan pembersih harian berada pada kisaran 6.5 hingga 7.5, yang dilengkapi pelembap alami Aloe Vera untuk mencegah iritasi kulit.</p>'
        ],
        '5-cara-menghemat-biaya-deterjen-laundry' => [
            'title'    => '5 Cara Menghemat Biaya Operasional Deterjen untuk Usaha Laundry Kiloan & Hotel',
            'excerpt'  => 'Strategi menekan pengeluaran deterjen cair hingga 35% tanpa mengurangi daya bersih dan keharuman pakaian pelanggan laundry Anda.',
            'category' => 'Tips Laundry',
            'tags'     => ['Deterjen Laundry', 'Laundry Kiloan', 'Efisiensi Biaya'],
            'content'  => '<h2>Efisiensi Operasional Laundry Komersial</h2><p>Pengeluaran untuk deterjen cair dan pewangi laundry merupakan komponen biaya terbesar kedua setelah listrik dan air pada bisnis laundry kiloan. Berikut adalah panduan praktis dari Cleanique Lab untuk mengoptimalkan takaran deterjen tanpa mengorbankan kepuasan pelanggan.</p><h3>1. Gunakan Formulasi Low-Foam Khusus Mesin Front-Loading</h3><p>Deterjen tinggi busa dapat merusak modul elektronik mesin cuci pintu depan dan menyisakan kerak. Gunakan deterjen cair rendah busa Cleanique Lab yang mudah dibilas dan hemat air.</p>'
        ],
        'cara-tepat-melarutkan-biang-sabun-konsentrat' => [
            'title'    => 'Cara Tepat Melarutkan Biang Sabun Konsentrat Agar Kental & Berbusa Melimpah',
            'excerpt'  => 'Langkah demi langkah mencampurkan biang sabun konsentrat Cleanique Lab dengan air bersih untuk hasil yang sempurna dan stabil.',
            'category' => 'Panduan Biang Sabun',
            'tags'     => ['Biang Sabun', 'Tutorial Pencampuran', 'Hemat Ongkir'],
            'content'  => '<h2>Panduan Pencampuran Biang Sabun Konsentrat</h2><p>Paket biang sabun konsentrat Cleanique Lab dirancang khusus untuk memangkas biaya pengiriman luar pulau Jawa hingga 80%. Satu paket biang 1 kg dapat dicampur air bersih menjadi 5 liter sabun kental siap pakai.</p><h3>Langkah-Langkah Pencampuran:</h3><ol><li>Siapkan wadah ember bersih berkapasitas minimal 10 liter.</li><li>Tuangkan 4 liter air bersih (air isi ulang/PAM) ke dalam wadah.</li><li>Masukkan biang konsentrat Cleanique Lab secara perlahan sambil diaduk searah jarum jam.</li><li>Aduk terus selama 5–10 menit hingga seluruh butiran biang larut sempurna dan larutan mengental.</li><li>Diamkan larutan selama 2-3 jam hingga busa permukaan menyusut, lalu kemas ke dalam jerigen 5 Liter.</li></ol>'
        ],
        'standar-kebersihan-haccp-restoran-sabun' => [
            'title'    => 'Standar Kebersihan HACCP Restoran: Pentingnya Hand Soap Antiseptik & Dishwashing Liquid',
            'excerpt'  => 'Mengapa restoran dan dapur komersial wajib menggunakan sabun cuci piring berformula grease-cutter dan hand soap anti-bakteri standar laboratorium.',
            'category' => 'Standar Hygiene',
            'tags'     => ['HACCP Dapur', 'Sabun Cuci Piring', 'Hand Soap Restoran'],
            'content'  => '<h2>Manajemen Kebersihan Dapur Komersial & Restoran</h2><p>Standar Hazard Analysis Critical Control Point (HACCP) mewajibkan seluruh fasilitas F&B menjaga kebersihan peralatan masak dan higienitas staf dapur. Cleanique Lab menyediakan sabun cuci piring ekstrak jeruk nipis dengan konsentrasi tinggi pelarut lemak.</p>'
        ],
        'mengenal-karbol-sereh-alami-disinfektan' => [
            'title'    => 'Mengenal Karbol Sereh Alami: Pengusir Serangga & Desinfektan Lantai Rumah Sakit',
            'excerpt'  => 'Keunggulan minyak sereh alami (citronella oil) dalam membunuh 99.9% kuman sekaligus menjaga ruangan bebas dari nyamuk dan lalat.',
            'category' => 'Disinfektan Lantai',
            'tags'     => ['Karbol Sereh', 'Disinfektan Lantai', 'Minyak Sereh'],
            'content'  => '<h2>Manfaat Karbol Sereh Alami untuk Kebersihan Ruangan</h2><p>Karbol wangi sereh buatan Cleanique Lab memanfaatkan kestabilan ekstrak minyak sereh (citronella oil) alami yang terbukti efektif mengusir nyamuk, lalat, dan kecoa tanpa menggunakan bahan kimia sintetis yang berbahaya.</p>'
        ],
        'strategi-membuka-depo-sabun-curah-modal-1-8-jt' => [
            'title'    => 'Strategi Membuka Depo Sabun Curah Modal 1,8 Juta Beromzet Jutaan Rupiah',
            'excerpt'  => 'Panduan praktis bagi pemula untuk memulai usaha penjualan sabun isi ulang rumah tangga dengan modal terjangkau dan garansi pasokan pabrik.',
            'category' => 'Peluang Bisnis',
            'tags'     => ['Keagenan Sabun', 'Depo Sabun Curah', 'Kemitraan Usaha'],
            'content'  => '<h2>Peluang Usaha Agen & Depo Sabun Curah</h2><p>Kebutuhan sabun cuci piring, deterjen, dan pembersih lantai merupakan kebutuhan pokok harian yang selalu dicari konsumen. Dengan modal awal Rp 1.800.000, Anda sudah bisa mendapatkan paket perdana keagenan Cleanique Lab lengkap dengan spanduk promosi, jerigen display, dan stok sabun siap jual.</p>'
        ]
    ];

    foreach ($blog_posts as $slug => $post_data) {
        $existing_post = get_page_by_path($slug, OBJECT, 'post');
        if (!$existing_post) {
            $post_id = wp_insert_post([
                'post_title'   => $post_data['title'],
                'post_name'    => $slug,
                'post_excerpt' => $post_data['excerpt'],
                'post_content' => $post_data['content'],
                'post_status'  => 'publish',
                'post_type'    => 'post',
                'post_author'  => 1,
            ]);
            if ($post_id && !is_wp_error($post_id)) {
                if (!function_exists('wp_create_category')) {
                    require_once ABSPATH . 'wp-admin/includes/taxonomy.php';
                }
                $cat_id = wp_create_category($post_data['category']);
                if ($cat_id && !is_wp_error($cat_id)) {
                    wp_set_post_categories($post_id, [$cat_id]);
                }
                wp_set_post_tags($post_id, $post_data['tags']);
            }
        }
    }
}
add_action('after_setup_theme', 'cleaniquelab_auto_publish_blog_posts');


