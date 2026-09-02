<?php
/**
 * Template Name: Hubungi Kami
 *
 * @package CleaniqueLab
 */

get_header();
?>

<!-- HERO SECTION KONTAK -->
<section class="cq-hero" style="padding-top: 70px; padding-bottom: 180px;">
    <div class="cq-container">
        <span class="cq-hero-eyebrow">Layanan & Saluran Resmi</span>
        <h1 class="cq-hero-h1" style="font-size: clamp(40px, 6.5vw, 84px);">Konsultasi & Kontak Pabrik</h1>
        <p class="cq-hero-lead">
            Punya pertanyaan seputar formula, pesanan drum skala besar, paket kemitraan agen, atau pembelian via marketplace resmi? Tim kami siap melayani Anda.
        </p>
    </div>

    <div class="cq-wave-divider">
        <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="#ffffff" d="M0,160L48,176C96,192,192,224,288,213.3C384,203,480,149,576,144C672,139,768,181,864,197.3C960,213,1056,203,1152,181.3C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
</section>

<!-- SECTION KONTEN & FORMULIR DENGAN LUCIDE ICONS & MARKETPLACE CHANNELS -->
<section class="cq-section" style="background-color: #ffffff; padding-bottom: 40px;">
    <div class="cq-container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: flex-start;">
            <!-- Kolom Kiri: Info Kontak & Marketplace -->
            <div>
                <h2 style="font-size: clamp(26px, 4vw, 36px); margin-bottom: 16px; color: var(--cq-text-dark);">
                    Saluran Komunikasi Resmi
                </h2>
                <p style="font-size: 15px; color: var(--cq-text-muted); line-height: 1.6; margin-bottom: 24px;">
                    Hubungi tim kami via WhatsApp atau kunjungi etalase resmi kami di Instagram, Shopee, dan TikTok Shop:
                </p>

                <div style="display: flex; flex-direction: column; gap: 16px;">
                    <!-- Item 1: WhatsApp Customer Care -->
                    <div style="display: flex; gap: 16px; align-items: flex-start; padding: 18px 20px; background: #f0f9f2; border-radius: 16px; border: 1px solid #d1f2d9;">
                        <div style="width: 44px; height: 44px; background: #25d366; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <svg width="22" height="22" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                        </div>
                        <div>
                            <strong style="font-size: 16px; color: var(--cq-text-dark); display: block;">WhatsApp Hotline & Konsultasi</strong>
                            <span style="font-size: 14px; color: #2e7d32;">0878-4812-0088 (Respon Cepat)</span>
                            <div style="margin-top: 4px;">
                                <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya ingin chat dengan customer care.')); ?>" target="_blank" rel="noopener" style="font-weight: 700; color: #1b5e20; text-decoration: underline; font-size: 13px;">
                                    Klik Chat WhatsApp Langsung &rarr;
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2: Sosmed & Marketplace Strip -->
                    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px;">
                        <!-- Instagram Card -->
                        <a href="https://instagram.com/cleaniquelab" target="_blank" rel="noopener" class="cq-channel-card cq-channel-ig" title="Instagram @cleaniquelab">
                            <div class="cq-channel-icon" style="background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);">
                                <svg width="20" height="20" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
                            </div>
                            <strong>Instagram</strong>
                            <span>@cleaniquelab</span>
                        </a>

                        <!-- Shopee Card (Crisp Official Shopee Vector) -->
                        <a href="https://id.shp.ee/6dkm3Liy" target="_blank" rel="noopener" class="cq-channel-card cq-channel-shopee" title="Shopee Official Cleanique Lab">
                            <div class="cq-channel-icon" style="background: #ee4d2d;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="#ffffff"><path d="M19.5 7.5h-2.25V6.25a5.25 5.25 0 0 0-10.5 0V7.5H4.5A1.5 1.5 0 0 0 3 9l1.4 11.2a2.5 2.5 0 0 0 2.48 2.3h10.24a2.5 2.5 0 0 0 2.48-2.3L21 9a1.5 1.5 0 0 0-1.5-1.5zm-10.75-1.25a3.25 3.25 0 0 1 6.5 0V7.5h-6.5V6.25zm2.33 11.45c-1.3-.23-1.84-.8-1.84-1.72 0-1.1.95-1.76 2.32-1.9l1.34-.14c.64-.07.96-.28.96-.66 0-.47-.46-.76-1.2-.76-.8 0-1.37.31-1.55.83l-1.33-.39c.34-.94 1.37-1.58 2.83-1.58 1.63 0 2.63.74 2.63 1.85 0 1.04-.77 1.63-2.15 1.78l-1.4.15c-.72.08-1.08.31-1.08.72 0 .51.52.83 1.34.83.89 0 1.58-.38 1.77-.92l1.3.43c-.39 1.08-1.53 1.7-3.08 1.58z"/></svg>
                            </div>
                            <strong>Shopee</strong>
                            <span>Toko Resmi</span>
                        </a>

                        <!-- TikTok Shop Card -->
                        <a href="https://www.tiktok.com/@orchidcareofficial?_r=1" target="_blank" rel="noopener" class="cq-channel-card cq-channel-tiktok" title="TikTok Shop @orchidcareofficial">
                            <div class="cq-channel-icon" style="background: #010101;">
                                <svg width="20" height="20" fill="#fff" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64c.298-.002.595.042.88.13V9.4a6.33 6.33 0 0 0-1-.08A6.34 6.34 0 0 0 3 15.66a6.34 6.34 0 0 0 10.81 4.48 6.26 6.26 0 0 0 1.87-4.47V8.71a8.18 8.18 0 0 0 4.91 1.65V6.91a4.86 4.86 0 0 1-1-.22z"/></svg>
                            </div>
                            <strong>TikTok</strong>
                            <span>@cleaniquelab</span>
                        </a>
                    </div>

                    <!-- Item 3: Workshop & Jangkauan Pengiriman -->
                    <div style="display: flex; gap: 16px; align-items: flex-start; padding: 18px 20px; background: var(--cq-bg-soft); border-radius: 16px; border: 1px solid var(--cq-border-light);">
                        <div style="width: 44px; height: 44px; background: var(--cq-royal-blue); color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <div>
                            <strong style="font-size: 16px; color: var(--cq-text-dark); display: block;">Workshop & Pengiriman Nasional</strong>
                            <p style="font-size: 13px; color: var(--cq-text-muted); margin-top: 4px; line-height: 1.5;">
                                Cleanique Lab Sabun & Kimia Pembersih, Indonesia. Melayani kirim ke 38 provinsi via ekspedisi kargo darat, laut, dan udara.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan: Formulir Cepat WhatsApp -->
            <div style="background: #ffffff; border: 1px solid var(--cq-border-light); border-radius: 24px; padding: 36px; box-shadow: 0 15px 40px rgba(0,0,0,0.06);">
                <h3 style="font-size: 22px; font-weight: 800; margin-bottom: 8px; color: var(--cq-text-dark);">
                    Formulir Konsultasi Cepat
                </h3>
                <p style="font-size: 14px; color: var(--cq-text-muted); margin-bottom: 24px;">
                    Isi detail singkat di bawah ini untuk memulai chat WhatsApp yang sudah terformat otomatis:
                </p>

                <form id="cq-contact-form" onsubmit="event.preventDefault(); window.cleaniqueSendContactWA();">
                    <div style="margin-bottom: 18px;">
                        <label for="contact-name" style="display: block; font-size: 14px; font-weight: 700; margin-bottom: 6px;">Nama Lengkap / Usaha:</label>
                        <input type="text" id="contact-name" required placeholder="Contoh: Budi Santoso / Laundry Berkah" style="width: 100%; padding: 12px 16px; border: 1px solid var(--cq-border-light); border-radius: 10px; font-size: 15px; outline: none; font-family: inherit;">
                    </div>

                    <div style="margin-bottom: 18px;">
                        <label for="contact-interest" style="display: block; font-size: 14px; font-weight: 700; margin-bottom: 6px;">Minat Kebutuhan:</label>
                        <select id="contact-interest" style="width: 100%; padding: 12px 16px; border: 1px solid var(--cq-border-light); border-radius: 10px; font-size: 15px; outline: none; font-family: inherit;">
                            <option value="Paket Kemitraan Reseller / Agen">Peluang Usaha & Kemitraan Agen Sabun</option>
                            <option value="Suplai Rutin Usaha Laundry / Hotel / Resto">Suplai Rutin Laundry / Hotel / Restoran</option>
                            <option value="Pembelian Sabun Jerigen Siap Pakai 5L">Pembelian Eceran / Jerigen 5L Siap Pakai</option>
                            <option value="Paket Biang Sabun Konsentrat">Paket Biang Sabun Konsentrat Hemat Ongkir</option>
                            <option value="Maklon / Private Label Merek Sendiri">Maklon Sabun Merek Sendiri</option>
                        </select>
                    </div>

                    <div style="margin-bottom: 24px;">
                        <label for="contact-message" style="display: block; font-size: 14px; font-weight: 700; margin-bottom: 6px;">Pesan / Pertanyaan Tambahan:</label>
                        <textarea id="contact-message" rows="4" placeholder="Tuliskan kota Anda dan pertanyaan yang ingin diajukan..." style="width: 100%; padding: 12px 16px; border: 1px solid var(--cq-border-light); border-radius: 10px; font-size: 15px; outline: none; font-family: inherit; resize: vertical;"></textarea>
                    </div>

                    <button type="submit" class="cq-btn-primary" style="width: 100%;">
                        Kirim WA &rarr;
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- SECTION PETA & ALAMAT WORKSHOP (INTERACTIVE GOOGLE MAPS) -->
<section class="cq-section" style="background-color: var(--cq-bg-soft); padding-top: 40px; padding-bottom: 80px;">
    <div class="cq-container">
        <div style="text-align: center; max-width: 760px; margin: 0 auto 36px auto;">
            <span class="cq-spotlight-badge">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                Peta & Titik Lokasi
            </span>
            <h2 style="font-size: clamp(24px, 3.5vw, 36px); font-weight: 900; color: var(--cq-text-dark); margin-bottom: 12px;">
                Lokasi Pabrik & Workshop Cleanique Lab
            </h2>
            <p style="font-size: 15px; color: var(--cq-text-muted); line-height: 1.6;">
                Kunjungi workshop produksi kami untuk konsultasi sampel produk, uji coba formula, atau pengambilan pesanan langsung (self-pickup) dengan konfirmasi sebelumnya.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: 1.3fr 0.9fr; gap: 30px; align-items: stretch;">
            <!-- Embedded Interactive Map Card -->
            <div style="background: #ffffff; border-radius: 20px; overflow: hidden; border: 1px solid var(--cq-border-light); box-shadow: 0 10px 30px rgba(0,0,0,0.06); display: flex; flex-direction: column; min-height: 420px;">
                <div style="padding: 16px 20px; background: #ffffff; border-bottom: 1px solid var(--cq-border-light); display: flex; align-items: center; justify-content: space-between;">
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <span style="display: inline-block; width: 10px; height: 10px; background: #25d366; border-radius: 50%;"></span>
                        <strong style="font-size: 14px; color: var(--cq-text-dark);">Google Maps &bull; PT Indotech Berkah Abadi</strong>
                    </div>
                    <a href="https://maps.app.goo.gl/cNvQcYrS57BvLqrc6" target="_blank" rel="noopener" style="font-size: 13px; font-weight: 700; color: var(--cq-royal-blue); text-decoration: underline;">
                        Buka Maps &rarr;
                    </a>
                </div>
                <div style="flex-grow: 1; position: relative; width: 100%; height: 100%; min-height: 380px;">
                    <iframe 
                        title="Peta Lokasi Pabrik PT Indotech Berkah Abadi - Cleanique Lab"
                        src="https://maps.google.com/maps?q=-7.7320403,110.3679988&t=&z=16&ie=UTF8&iwloc=&output=embed" 
                        width="100%" 
                        height="100%" 
                        style="border:0; position: absolute; top: 0; left: 0; width: 100%; height: 100%;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <!-- Detail Alamat & Akses Kargo Card -->
            <div style="background: #ffffff; border-radius: 20px; padding: 32px; border: 1px solid var(--cq-border-light); box-shadow: 0 10px 30px rgba(0,0,0,0.06); display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <h3 style="font-size: 20px; font-weight: 800; color: var(--cq-text-dark); margin-bottom: 18px; display: flex; align-items: center; gap: 10px;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--cq-royal-blue)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                        Alamat Pabrik & Gudang
                    </h3>

                    <div style="display: flex; flex-direction: column; gap: 16px; margin-bottom: 24px;">
                        <div>
                            <span style="display: block; font-size: 12px; font-weight: 800; text-transform: uppercase; color: var(--cq-text-muted); margin-bottom: 4px;">Alamat Operasional:</span>
                            <p style="font-size: 15px; color: var(--cq-text-dark); line-height: 1.5; font-weight: 600;">
                                PT Indotech Berkah Abadi (Cleanique Lab)<br>
                                Jongke Tengah No. 30, RT.01/RW.23, Sendangadi, Kec. Mlati, Kabupaten Sleman, D.I. Yogyakarta 55285
                            </p>
                        </div>

                        <div>
                            <span style="display: block; font-size: 12px; font-weight: 800; text-transform: uppercase; color: var(--cq-text-muted); margin-bottom: 4px;">Jam Operasional Workshop:</span>
                            <p style="font-size: 14px; color: var(--cq-text-dark); line-height: 1.5;">
                                <strong>Senin – Jumat:</strong> 08.00 – 17.00 WIB<br>
                                <strong>Sabtu:</strong> 08.00 – 15.00 WIB<br>
                                <span style="color: #c61111; font-size: 13px;">Minggu & Tanggal Merah: Libur (Pemesanan WA tetap dilayani)</span>
                            </p>
                        </div>

                        <div>
                            <span style="display: block; font-size: 12px; font-weight: 800; text-transform: uppercase; color: var(--cq-text-muted); margin-bottom: 4px;">Akses Kendaraan & Muatan:</span>
                            <p style="font-size: 13px; color: var(--cq-text-muted); line-height: 1.5;">
                                Akses jalan muatan truk CDD, Fuso, dan kontainer 20ft/40ft untuk loading sabun curah jerigen dan drum.
                            </p>
                        </div>
                    </div>
                </div>

                <div style="display: flex; flex-direction: column; gap: 10px; padding-top: 20px; border-top: 1px solid var(--cq-border-light);">
                    <a href="https://maps.app.goo.gl/cNvQcYrS57BvLqrc6" target="_blank" rel="noopener" class="cq-btn-primary" style="width: 100%; text-align: center;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="3 11 22 2 13 21 11 13 3 11"/></svg>
                        Petunjuk Arah
                    </a>
                    <a href="<?php echo esc_url(cleaniquelab_get_whatsapp_url('Halo Cleanique Lab, saya ingin buat janji temu / kunjungan ke workshop PT Indotech Berkah Abadi.')); ?>" target="_blank" rel="noopener" class="cq-btn-outline cq-btn-outline-dark" style="width: 100%; text-align: center;">
                        Janji Kunjungan
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
