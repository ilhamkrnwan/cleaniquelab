<?php
/**
 * Header template for Cleanique Lab Theme
 *
 * @package CleaniqueLab
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- 1. TOP ANNOUNCEMENT BAR WITH SOCIAL & MARKETPLACE SHORTCUTS -->
<div class="cq-topbar">
    <div class="cq-container cq-topbar-inner">
        <div class="cq-topbar-left">
            <span class="cq-topbar-item">
                <svg class="cq-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8l-7 5V8l-7 5V4a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"/><path d="M18 16h2"/><path d="M18 12h2"/><path d="M14 16h2"/><path d="M14 12h2"/></svg>
                <strong>Pusat Produksi & Formula Sabun</strong> | Pasokan Jerigen, Drum & Paket Biang
            </span>
        </div>
        <div class="cq-topbar-right">
            <!-- Official Store Channels -->
            <span class="cq-topbar-item" style="gap: 8px;">
                <a href="https://instagram.com/cleaniquelab" target="_blank" rel="noopener" title="Instagram @cleaniquelab" style="color: #ffffff; opacity: 0.85; transition: opacity 0.2s;" onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.85">
                    <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
                </a>
                <a href="https://shopee.co.id/cleaniquelab" target="_blank" rel="noopener" title="Shopee Official Cleanique Lab" style="color: #ffffff; opacity: 0.85; transition: opacity 0.2s;" onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.85">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M19.5 7.5h-2.25V6.25a5.25 5.25 0 0 0-10.5 0V7.5H4.5A1.5 1.5 0 0 0 3 9l1.4 11.2a2.5 2.5 0 0 0 2.48 2.3h10.24a2.5 2.5 0 0 0 2.48-2.3L21 9a1.5 1.5 0 0 0-1.5-1.5zm-10.75-1.25a3.25 3.25 0 0 1 6.5 0V7.5h-6.5V6.25zm2.33 11.45c-1.3-.23-1.84-.8-1.84-1.72 0-1.1.95-1.76 2.32-1.9l1.34-.14c.64-.07.96-.28.96-.66 0-.47-.46-.76-1.2-.76-.8 0-1.37.31-1.55.83l-1.33-.39c.34-.94 1.37-1.58 2.83-1.58 1.63 0 2.63.74 2.63 1.85 0 1.04-.77 1.63-2.15 1.78l-1.4.15c-.72.08-1.08.31-1.08.72 0 .51.52.83 1.34.83.89 0 1.58-.38 1.77-.92l1.3.43c-.39 1.08-1.53 1.7-3.08 1.58z"/></svg>
                </a>
                <a href="https://tiktok.com/@cleaniquelab" target="_blank" rel="noopener" title="TikTok Shop Cleanique Lab" style="color: #ffffff; opacity: 0.85; transition: opacity 0.2s;" onmouseover="this.style.opacity=1" onmouseout="this.style.opacity=0.85">
                    <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64c.298-.002.595.042.88.13V9.4a6.33 6.33 0 0 0-1-.08A6.34 6.34 0 0 0 3 15.66a6.34 6.34 0 0 0 10.81 4.48 6.26 6.26 0 0 0 1.87-4.47V8.71a8.18 8.18 0 0 0 4.91 1.65V6.91a4.86 4.86 0 0 1-1-.22z"/></svg>
                </a>
            </span>
            <span class="cq-topbar-item" style="border-left: 1px solid rgba(255,255,255,0.2); padding-left: 12px;">
                <svg class="cq-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                <a href="tel:081234567890">0812-3456-7890</a>
            </span>
            <span class="cq-topbar-badge">
                <svg class="cq-icon" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 18H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h3.19M15 6h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-3.19"/><circle cx="7" cy="18" r="2"/><circle cx="17" cy="18" r="2"/><path d="M9 18h6"/></svg>
                Kirim 38 Provinsi
            </span>
        </div>
    </div>
</div>

<!-- 2. MAIN STICKY NAVBAR -->
<header id="site-header" class="cq-header">
    <div class="cq-container cq-header-inner">
        <!-- Logo -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="cq-logo" rel="home">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                echo 'CLEANIQUE<span>LAB</span>';
            }
            ?>
        </a>

        <!-- Desktop Navigation Menu -->
        <nav id="site-navigation" class="cq-desktop-nav" aria-label="<?php esc_attr_e('Menu Utama', 'cleaniquelab'); ?>">
            <?php
            if (has_nav_menu('primary')) {
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'cq-nav-menu',
                    'fallback_cb'    => false,
                ]);
            } else {
                ?>
                <ul class="cq-nav-menu">
                    <li class="<?php echo is_front_page() ? 'current-menu-item' : ''; ?>">
                        <a href="<?php echo esc_url(home_url('/')); ?>">Beranda</a>
                    </li>
                    <li class="<?php echo is_page('about') || is_page('tentang-kami') ? 'current-menu-item' : ''; ?>">
                        <a href="<?php echo esc_url(home_url('/about/')); ?>">Tentang Kami</a>
                    </li>
                    <li class="<?php echo is_page('pricelist') || is_page('daftar-harga') ? 'current-menu-item' : ''; ?>">
                        <a href="<?php echo esc_url(home_url('/pricelist/')); ?>">Daftar Harga</a>
                    </li>
                    <li class="<?php echo is_home() || is_singular('post') ? 'current-menu-item' : ''; ?>">
                        <a href="<?php echo esc_url(home_url('/blog/')); ?>">Artikel</a>
                    </li>
                    <li class="<?php echo is_page('contact') || is_page('kontak') ? 'current-menu-item' : ''; ?>">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>">Hubungi Kami</a>
                    </li>
                </ul>
                <?php
            }
            ?>
        </nav>

        <!-- Right CTA Button & Mobile Toggle -->
        <div class="cq-header-actions">
            <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya ingin info katalog produk dan harga')); ?>" target="_blank" rel="noopener" class="cq-btn-primary cq-btn-sm cq-hide-mobile">
                <svg class="cq-icon" width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                Konsultasi WA
            </a>
            <button id="nav-toggle" class="cq-nav-toggle" aria-label="<?php esc_attr_e('Buka Menu Navigasi', 'cleaniquelab'); ?>" aria-expanded="false" aria-controls="mobile-drawer">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>

<!-- 3. MOBILE SLIDE DRAWER & BACKDROP -->
<div id="drawer-backdrop" class="cq-drawer-backdrop" aria-hidden="true"></div>

<aside id="mobile-drawer" class="cq-mobile-drawer" aria-hidden="true">
    <div class="cq-drawer-header">
        <span class="cq-logo">CLEANIQUE<span>LAB</span></span>
        <button id="drawer-close" class="cq-drawer-close" aria-label="<?php esc_attr_e('Tutup Menu', 'cleaniquelab'); ?>">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
        </button>
    </div>

    <div class="cq-drawer-body">
        <ul class="cq-drawer-menu">
            <li><a href="<?php echo esc_url(home_url('/')); ?>">Beranda</a></li>
            <li><a href="<?php echo esc_url(home_url('/about/')); ?>">Tentang Kami</a></li>
            <li><a href="<?php echo esc_url(home_url('/pricelist/')); ?>">Daftar Harga</a></li>
            <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">Artikel</a></li>
            <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Hubungi Kami</a></li>
        </ul>

        <!-- Official Channels on Mobile -->
        <div style="margin-bottom: 24px; padding: 16px; background: var(--cq-bg-soft); border-radius: 12px;">
            <strong style="display: block; font-size: 13px; color: var(--cq-text-dark); margin-bottom: 10px; text-transform: uppercase; letter-spacing: 0.5px;">Toko Resmi & Sosmed:</strong>
            <div style="display: flex; gap: 10px;">
                <a href="https://instagram.com/cleaniquelab" target="_blank" rel="noopener" class="cq-social-btn cq-social-ig" title="Instagram">
                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
                </a>
                <a href="https://shopee.co.id/cleaniquelab" target="_blank" rel="noopener" class="cq-social-btn cq-social-shopee" title="Shopee">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M19.5 7.5h-2.25V6.25a5.25 5.25 0 0 0-10.5 0V7.5H4.5A1.5 1.5 0 0 0 3 9l1.4 11.2a2.5 2.5 0 0 0 2.48 2.3h10.24a2.5 2.5 0 0 0 2.48-2.3L21 9a1.5 1.5 0 0 0-1.5-1.5zm-10.75-1.25a3.25 3.25 0 0 1 6.5 0V7.5h-6.5V6.25zm2.33 11.45c-1.3-.23-1.84-.8-1.84-1.72 0-1.1.95-1.76 2.32-1.9l1.34-.14c.64-.07.96-.28.96-.66 0-.47-.46-.76-1.2-.76-.8 0-1.37.31-1.55.83l-1.33-.39c.34-.94 1.37-1.58 2.83-1.58 1.63 0 2.63.74 2.63 1.85 0 1.04-.77 1.63-2.15 1.78l-1.4.15c-.72.08-1.08.31-1.08.72 0 .51.52.83 1.34.83.89 0 1.58-.38 1.77-.92l1.3.43c-.39 1.08-1.53 1.7-3.08 1.58z"/></svg>
                </a>
                <a href="https://tiktok.com/@cleaniquelab" target="_blank" rel="noopener" class="cq-social-btn cq-social-tiktok" title="TikTok Shop">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64c.298-.002.595.042.88.13V9.4a6.33 6.33 0 0 0-1-.08A6.34 6.34 0 0 0 3 15.66a6.34 6.34 0 0 0 10.81 4.48 6.26 6.26 0 0 0 1.87-4.47V8.71a8.18 8.18 0 0 0 4.91 1.65V6.91a4.86 4.86 0 0 1-1-.22z"/></svg>
                </a>
                <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab')); ?>" target="_blank" rel="noopener" class="cq-social-btn cq-social-wa" title="WhatsApp">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                </a>
            </div>
        </div>

        <div class="cq-drawer-footer">
            <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab')); ?>" target="_blank" rel="noopener" class="cq-btn-primary" style="width: 100%;">
                Konsultasi WhatsApp
            </a>
        </div>
    </div>
</aside>

<main id="primary" class="cq-main">
