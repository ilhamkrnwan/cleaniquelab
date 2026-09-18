<?php
/**
 * Modul Manajemen Admin: Katalog Produk Kimia & Perawatan Otomotif
 *
 * Mengelola data produk otomotif langsung dari WP Admin Dashboard
 * (Judul, Kategori, Harga, Badge, Kemasan, Rasio Dilusi, Langkah Pemakaian, Spesifikasi Teknis, Peringatan & Aset Gambar).
 *
 * @package CleaniqueLab
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Daftar Data Produk Otomotif Default Pabrik (8 Varian Asli Sesuai Label Resmi)
 *
 * @return array
 */
function cleaniquelab_get_default_otomotif_products() {
    return [
        'engine-degreaser' => [
            'id'          => 'engine-degreaser',
            'title'       => 'Pembersih Mesin (Engine Degreaser)',
            'category'    => 'mesin',
            'cat_name'    => 'Perawatan Mesin',
            'badge'       => 'Degreaser Logam',
            'badge_color' => '#38bdf8',
            'price_est'   => 'Rp 35.000 / 250ml',
            'image'       => '/assets/images/otomotif/pembrsih_mesin.png',
            'tagline'     => 'Mesin Bersih, Tampak Baru',
            'icon'        => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m14 12-8.5 8.5a2.12 2.12 0 1 1-3-3L11 9"/><path d="M15 13 9 7l4-4 6 6h3l-3 3v3l-4 4"/></svg>',
            'summary'     => 'Membersihkan oli, debu dan kerak pada mesin serta menjaga tampilan mesin tetap mengkilap seperti baru.',
            'tags'        => ['Pembersih Oli', 'Anti Kerak', 'Mesin Mengkilap', 'Logam Mesin'],
            'pack_sizes'  => ['100 ml', '250 ml', '1 Liter', 'Curah 5L &ndash; 200L'],
            'dilution'    => [
                'Kerak Tebal'     => 'Siap Pakai Murni',
                'Kerak Sedang'    => '1 : 1 dengan air bersih',
                'Perawatan Rutin' => '1 : 3 dengan air bersih'
            ],
            'specs'       => [
                'Fungsi Utama'   => 'Membersihkan Oli, Debu & Kerak Mesin',
                'Area Aplikasi'  => 'Bagian Logam Mesin Kendaraan',
                'Sifat Formula'  => 'Water-Based Non-Korosif',
                'Kode Produksi'  => 'ED 03 F 0825',
                'Produsen'       => 'PT Indotech Berkah Abadi'
            ],
            'steps'       => [
                'Siapkan pembersih mesin, kuas, sarung tangan, dan air bersih.',
                'Siram mesin yang mau dibersihkan.',
                'Pakailah sarung tangan sebelum menggunakan pembersih mesin.',
                'Kocok pembersih mesin sebelum digunakan.',
                'Semprot bagian mesin yang sudah disiram air.',
                'Ratakan dan gosok menggunakan kuas.',
                'Siram menggunakan air bersih.'
            ],
            'warnings'    => [
                'Gunakan hanya pada bagian mesin (logam) kendaraan.',
                'Jangan digunakan saat mesin panas.',
                'Simpan rapat, jauh dari jangkauan anak-anak.'
            ]
        ],
        'penghitam-body' => [
            'id'          => 'penghitam-body',
            'title'       => 'Penghitam Body (Motor Body Blackener)',
            'category'    => 'eksterior',
            'cat_name'    => 'Restorasi Eksterior',
            'badge'       => 'Trim Restorer',
            'badge_color' => '#00d2ff',
            'price_est'   => 'Rp 45.000 / 250ml',
            'image'       => '/assets/images/otomotif/pnghitam_body.png',
            'tagline'     => 'Kembalikan Kilau Hitam Sempurna',
            'icon'        => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m19 11-8-8-8.6 8.6a2 2 0 0 0 0 2.8l5.2 5.2c.8.8 2 .8 2.8 0L19 11Z"/><path d="m5 2 5 5"/><path d="M2 13h15"/><path d="M22 20a2 2 0 1 1-4 0c0-1.6 1.7-2.4 2-4 .3 1.6 2 2.4 2 4Z"/></svg>',
            'summary'     => 'Menghitamkan kembali warna hitam yang pudar akibat terpapar sinar UV pada trim plastik kasar kendaraan.',
            'tags'        => ['Hitam Sempurna', 'Anti UV', 'Plastik Kasar', 'Tahan Lama'],
            'pack_sizes'  => ['100 ml', '250 ml', '1 Liter', 'Curah 5L &ndash; 200L'],
            'dilution'    => [
                'Aplikasi Body' => 'Siap Pakai Langsung (Tanpa Air)'
            ],
            'specs'       => [
                'Fungsi Utama'   => 'Menghitamkan Trim Plastik Kasar Pudar UV',
                'Media Aplikasi' => 'Spons Busa Lembut',
                'Daya Tahan'     => 'Hingga Berbulan-bulan',
                'Kode Produksi'  => 'BB 03 F 0825',
                'Produsen'       => 'PT Indotech Berkah Abadi'
            ],
            'steps'       => [
                'Cuci bersih body/trim yang ingin dihitamkan.',
                'Keringkan dengan lap microfiber.',
                'Kocok penghitam body sebelum digunakan.',
                'Tuangkan penghitam body pada spon.',
                'Oleskan penghitam body secara merata.',
                'Diamkan beberapa menit sampai kering.',
                'Apabila kurang hitam, ulangi langkah 4 sampai 6 hingga mencapai warna hitam yang diinginkan.'
            ],
            'warnings'    => [
                'Hanya untuk body kasar pada kendaraan.',
                'Hindari kontak dengan mata & kulit sensitif.',
                'Jauhkan dari jangkauan anak-anak.'
            ]
        ],
        'pembersih-kaca' => [
            'id'          => 'pembersih-kaca',
            'title'       => 'Pembersih Kaca Mobil (Car Glass Cleaner)',
            'category'    => 'kaca',
            'cat_name'    => 'Perawatan Kaca',
            'badge'       => 'Bening Kristal',
            'badge_color' => '#38bdf8',
            'price_est'   => 'Rp 35.000 / 250ml',
            'image'       => '/assets/images/otomotif/pembersih_kaca.png',
            'tagline'     => 'Kebersihan Kaca Kenyamanan Berkendara',
            'icon'        => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12h20"/><path d="M20 12v8H4v-8"/><path d="m4 12 4-8h8l4 8"/></svg>',
            'summary'     => 'Membersihkan kaca mobil dari jamur, bintik air (water spot), mineral, debu dan noda organik tanpa meninggalkan bekas.',
            'tags'        => ['Anti Jamur', 'Water Spot', 'Kaca Jernih', 'Bebas Silau'],
            'pack_sizes'  => ['100 ml', '250 ml', '1 Liter', 'Curah 5L &ndash; 200L'],
            'dilution'    => [
                'Aplikasi Kaca' => 'Siap Pakai Langsung'
            ],
            'specs'       => [
                'Fungsi Utama'   => 'Membersihkan Jamur, Water Spot & Mineral Kaca',
                'Keamanan'       => 'Aman Garis Defogger & Kaca Film',
                'Media Lap'      => 'Kain Microfiber Bersih',
                'Kode Produksi'  => 'GC 03 F 0825',
                'Produsen'       => 'PT Indotech Berkah Abadi'
            ],
            'steps'       => [
                'Cuci bersih kaca mobil yang ingin dibersihkan.',
                'Keringkan dengan lap microfiber.',
                'Kocok pembersih kaca sebelum digunakan.',
                'Semprotkan pembersih kaca secara merata pada kaca mobil yang mau dibersihkan.',
                'Lap dengan microfiber sampai kering.'
            ],
            'warnings'    => [
                'Hindari kontak dengan mata & mulut.',
                'Jauhkan dari jangkauan anak-anak.',
                'Simpan di tempat sejuk, tertutup rapat setelah digunakan.'
            ]
        ],
        'semir-ban' => [
            'id'          => 'semir-ban',
            'title'       => 'Semir Ban (Tire Polish)',
            'category'    => 'ban-velg',
            'cat_name'    => 'Perawatan Roda',
            'badge'       => 'Wet Look',
            'badge_color' => '#109733',
            'price_est'   => 'Rp 38.000 / 250ml',
            'image'       => '/assets/images/otomotif/semir_ban.png',
            'tagline'     => 'Kilap Awet Ban Tampak Baru',
            'icon'        => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="4"/><line x1="4.93" y1="4.93" x2="9.17" y2="9.17"/><line x1="14.83" y1="14.83" x2="19.07" y2="19.07"/><line x1="14.83" y1="9.17" x2="19.07" y2="4.93"/><line x1="4.93" y1="19.07" x2="9.17" y2="14.83"/></svg>',
            'summary'     => 'Mengembalikan kembali warna hitam pada ban kendaraan, praktis menjaga tampilan ban tetap bersih dan kilap awet basah.',
            'tags'        => ['Wet Look', 'Kilap Awet', 'Hitam Pekat', 'Anti Retak'],
            'pack_sizes'  => ['100 ml', '250 ml', '1 Liter', 'Curah 5L &ndash; 200L'],
            'dilution'    => [
                'Hasil Wet Look' => 'Siap Pakai Tanpa Air',
                'Hasil Satin'    => '1 : 1 dengan air bersih'
            ],
            'specs'       => [
                'Fungsi Utama'   => 'Menghitamkan & Mengilapkan Ban Luar',
                'Efek Permukaan' => 'Wet Look Glossy & Tahan Debu',
                'Media Aplikasi' => 'Spons Busa Semir',
                'Kode Produksi'  => 'TP 03 F 0825',
                'Produsen'       => 'PT Indotech Berkah Abadi'
            ],
            'steps'       => [
                'Cuci bersih ban yang mau di semir.',
                'Tunggu sampai kering.',
                'Tuangkan semir ban pada spon.',
                'Oleskan semir ban secara merata.',
                'Diamkan beberapa menit sampai kering.'
            ],
            'warnings'    => [
                'Hanya untuk pemakaian luar ban kendaraan.',
                'Simpan di tempat sejuk & terhindar dari panas.',
                'Hindari kontak dengan mata.'
            ]
        ],
        'pengkilap-body' => [
            'id'          => 'pengkilap-body',
            'title'       => 'Pengkilap Body (Body Polish)',
            'category'    => 'eksterior',
            'cat_name'    => 'Perawatan Body',
            'badge'       => 'Kilap Halus',
            'badge_color' => '#3a7bd5',
            'price_est'   => 'Rp 40.000 / 250ml',
            'image'       => '/assets/images/otomotif/pengkilap_body.png',
            'tagline'     => 'Kilap Awet Tampak Seperti Baru',
            'icon'        => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
            'summary'     => 'Memberikan tampilan mengkilap dan bersih, membuat bodi kendaraan tampak bersih bersinar dan mengilap seperti baru.',
            'tags'        => ['Kilap Awet', 'Bodi Mengkilap', 'Anti Debu', 'Efek Licin'],
            'pack_sizes'  => ['100 ml', '250 ml', '1 Liter', 'Curah 5L &ndash; 200L'],
            'dilution'    => [
                'Finishing Kilap' => 'Siap Pakai Langsung (Semprot & Lap)'
            ],
            'specs'       => [
                'Fungsi Utama'   => 'Membuat Bodi Mengkilap Seperti Baru',
                'Tipe Aplikasi'  => 'Spray & Wipe Quick Polish',
                'Media Lap'      => 'Kain Microfiber Bersih',
                'Kode Produksi'  => 'BP 03 F 0825',
                'Produsen'       => 'PT Indotech Berkah Abadi'
            ],
            'steps'       => [
                'Cuci bersih body yang ingin dikilapkan.',
                'Keringkan dengan lap microfiber.',
                'Kocok pengkilap body sebelum digunakan.',
                'Semprot body yang ingin dikilapkan.',
                'Gosok body yang sudah disemprot menggunakan microfiber.',
                'Diamkan beberapa menit sampai kering.'
            ],
            'warnings'    => [
                'Gunakan hanya pada permukaan body kendaraan.',
                'Hindari kontak dengan mata.',
                'Simpan di tempat sejuk dan terhindar dari sinar matahari langsung.'
            ]
        ],
        'pembersih-interior' => [
            'id'          => 'pembersih-interior',
            'title'       => 'Pembersih Interior (Car Interior Cleaner)',
            'category'    => 'interior',
            'cat_name'    => 'Perawatan Interior',
            'badge'       => 'Kabin Bersih',
            'badge_color' => '#a855f7',
            'price_est'   => 'Rp 38.000 / 250ml',
            'image'       => '/assets/images/otomotif/pembersih_interior.png',
            'tagline'     => 'Pembersih Interior Praktis',
            'icon'        => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 9V6a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v3"/><path d="M3 11v5a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2Z"/><path d="M5 18v2"/><path d="M19 18v2"/></svg>',
            'summary'     => 'Formula pembersih interior kendaraan yang efektif mengangkat debu, noda dan kotoran dengan cepat tanpa ribet.',
            'tags'        => ['Kabin Bersih', 'Angkat Noda', 'Aman Jok', 'Tanpa Ribet'],
            'pack_sizes'  => ['100 ml', '250 ml', '1 Liter', 'Curah 5L &ndash; 200L'],
            'dilution'    => [
                'Noda Membandel'    => 'Siap Pakai Murni',
                'Pembersihan Rutin' => '1 : 1 dengan air bersih'
            ],
            'specs'       => [
                'Fungsi Utama'   => 'Mengangkat Debu, Noda & Kotoran Kabin',
                'Area Pakai'     => 'Dashboard, Doortrim, Jok, Plafon',
                'Keamanan'       => 'Tidak Merusak Bahan Kulit & Plastik',
                'Kode Produksi'  => 'IC 03 F 0825',
                'Produsen'       => 'PT Indotech Berkah Abadi'
            ],
            'steps'       => [
                'Kocok pembersih interior sebelum digunakan.',
                'Semprot pembersih interior pada bagian yang ingin dibersihkan.',
                'Lap dan gosok bagian yang sudah disemprot menggunakan microfiber.',
                'Diamkan beberapa menit sampai kering.'
            ],
            'warnings'    => [
                'Hindari kontak langsung dengan mata.',
                'Jangan ditelan. Jauhkan dari jangkauan anak-anak.'
            ]
        ],
        'pengusir-tikus' => [
            'id'          => 'pengusir-tikus',
            'title'       => 'Pengusir Tikus (Rat Repellent Liquid)',
            'category'    => 'mesin',
            'cat_name'    => 'Proteksi Mesin',
            'badge'       => 'Anti Tikus',
            'badge_color' => '#ef4444',
            'price_est'   => 'Rp 42.000 / 250ml',
            'image'       => '/assets/images/otomotif/pngusir_tikus.png',
            'tagline'     => 'Perlindungan Maksimal Dari Ancaman Tikus',
            'icon'        => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
            'summary'     => 'Semprotan formula khusus beraroma tidak disukai tikus untuk melindungi kabel, selang, dan ruang mesin dari gigitan tikus.',
            'tags'        => ['Proteksi Kabel', 'Aroma Khusus', 'Mesin Dingin', 'Tahan Lama'],
            'pack_sizes'  => ['100 ml', '250 ml', '1 Liter', 'Curah 5L &ndash; 200L'],
            'dilution'    => [
                'Ruang Mesin' => 'Siap Pakai Langsung (Tanpa Dibilas)'
            ],
            'specs'       => [
                'Fungsi Utama'   => 'Melindungi Selang & Kabel Mesin Dari Tikus',
                'Sasaran Semprot'=> 'Kabel, Selang Karet, Dinding Ruang Mesin',
                'Durasi Efek'    => '5 &ndash; 7 Hari Sekali',
                'Kode Produksi'  => 'RR 03 F 0825',
                'Produsen'       => 'PT Indotech Berkah Abadi'
            ],
            'steps'       => [
                'Pastikan mesin kendaraan dalam kondisi mati dan dingin sebelum penyemprotan.',
                'Kocok botol terlebih dahulu agar cairan tercampur merata.',
                'Semprotkan secara merata pada area mesin seperti: kabel & selang karet, sudut-sudut mesin, dekat dinding ruang mesin.',
                'Hindari penyemprotan langsung pada bagian filter udara dan komponen listrik terbuka.',
                'Biarkan cairan bekerja, tidak perlu dibilas.',
                'Ulangi penggunaan setiap 5-7 hari sekali atau bila bau cairan mulai hilang.'
            ],
            'warnings'    => [
                'Gunakan hanya pada mesin mati & dingin.',
                'Jangan semprot ke filter udara, komponen listrik terbuka.',
                'Hindari kontak dengan mata.',
                'Simpan jauh dari jangkauan anak-anak.'
            ]
        ],
        'compound-body' => [
            'id'          => 'compound-body',
            'title'       => 'Compound Body (Scratch Remover)',
            'category'    => 'eksterior',
            'cat_name'    => 'Poles Baret',
            'badge'       => 'Hilang Baret',
            'badge_color' => '#f59e0b',
            'price_est'   => 'Rp 30.000 / 100gr',
            'image'       => '/assets/images/otomotif/compound_body.png',
            'tagline'     => 'Menghilangkan Baret Tipis & Mengkilapkan',
            'icon'        => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m4.93 4.93 14.14 14.14"/></svg>',
            'summary'     => 'Pasta compound khusus untuk menghilangkan baret tipis, kusam pada body kendaraan dan mengembalikan kilau cat.',
            'tags'        => ['Baret Tipis', 'Cat Kusam', 'Swirl Mark', 'Poles Kilap'],
            'pack_sizes'  => ['Netto 100 Gram', 'Pot 250 Gram', 'Pail Curah'],
            'dilution'    => [
                'Poles Baret' => 'Siap Pakai Langsung (Gunakan Lap Kering)'
            ],
            'specs'       => [
                'Fungsi Utama'   => 'Menghilangkan Baret Tipis & Mengkilapkan Cat',
                'Wujud Fisik'    => 'Pasta Halus Scratch Remover',
                'Kemasan'        => 'Jar Putar Segel Rapat 100gr',
                'Kode Produksi'  => 'CSR 03 F 0825',
                'Produsen'       => 'PT Indotech Berkah Abadi'
            ],
            'steps'       => [
                'Siapkan scratch remover, sarung tangan dan kain.',
                'Pakai sarung tangan sebelum menggunakan scratch remover.',
                'Ambil sedikit scratch remover.',
                'Oleskan scratch remover pada bagian yang tergores secara merata.',
                'Gosok dengan sedikit tekanan secara perlahan.',
                'Lap menggunakan kain kering.'
            ],
            'warnings'    => [
                'Gunakan hanya pada body kendaraan.',
                'Jangan digunakan pada kaca, plastik, atau karet.',
                'Hindari kontak dengan mata.',
                'Simpan rapat, jauhkan dari anak-anak & panas matahari.'
            ]
        ]
    ];
}

/**
 * Daftar Galeri Foto Lengkap Kemasan Setiap Produk Otomotif
 *
 * @return array
 */
function cleaniquelab_get_otomotif_galleries() {
    return [
        'engine-degreaser' => [
            ['slug' => 'lineup', 'label' => 'Lini Lengkap', 'url' => '/assets/images/otomotif/gallery/engine-degreaser/lineup.webp', 'png' => '/assets/images/otomotif/gallery/engine-degreaser/lineup.png'],
            ['slug' => '250ml-front', 'label' => 'Botol 250ml Depan', 'url' => '/assets/images/otomotif/gallery/engine-degreaser/250ml-front.webp', 'png' => '/assets/images/otomotif/gallery/engine-degreaser/250ml-front.png'],
            ['slug' => '250ml-back', 'label' => 'Botol 250ml Belakang', 'url' => '/assets/images/otomotif/gallery/engine-degreaser/250ml-back.webp', 'png' => '/assets/images/otomotif/gallery/engine-degreaser/250ml-back.png'],
            ['slug' => '100ml-front', 'label' => 'Botol 100ml Depan', 'url' => '/assets/images/otomotif/gallery/engine-degreaser/100ml-front.webp', 'png' => '/assets/images/otomotif/gallery/engine-degreaser/100ml-front.png'],
            ['slug' => '100ml-back', 'label' => 'Botol 100ml Belakang', 'url' => '/assets/images/otomotif/gallery/engine-degreaser/100ml-back.webp', 'png' => '/assets/images/otomotif/gallery/engine-degreaser/100ml-back.png'],
            ['slug' => '1l', 'label' => 'Jerigen 1 Liter', 'url' => '/assets/images/otomotif/gallery/engine-degreaser/1l.webp', 'png' => '/assets/images/otomotif/gallery/engine-degreaser/1l.png'],
        ],
        'penghitam-body' => [
            ['slug' => 'lineup', 'label' => 'Lini Lengkap', 'url' => '/assets/images/otomotif/gallery/penghitam-body/lineup.webp', 'png' => '/assets/images/otomotif/gallery/penghitam-body/lineup.png'],
            ['slug' => '250ml-front', 'label' => 'Botol 250ml Depan', 'url' => '/assets/images/otomotif/gallery/penghitam-body/250ml-front.webp', 'png' => '/assets/images/otomotif/gallery/penghitam-body/250ml-front.png'],
            ['slug' => '250ml-back', 'label' => 'Botol 250ml Belakang', 'url' => '/assets/images/otomotif/gallery/penghitam-body/250ml-back.webp', 'png' => '/assets/images/otomotif/gallery/penghitam-body/250ml-back.png'],
            ['slug' => '100ml-front', 'label' => 'Botol 100ml Depan', 'url' => '/assets/images/otomotif/gallery/penghitam-body/100ml-front.webp', 'png' => '/assets/images/otomotif/gallery/penghitam-body/100ml-front.png'],
            ['slug' => '100ml-back', 'label' => 'Botol 100ml Belakang', 'url' => '/assets/images/otomotif/gallery/penghitam-body/100ml-back.webp', 'png' => '/assets/images/otomotif/gallery/penghitam-body/100ml-back.png'],
            ['slug' => '1l', 'label' => 'Jerigen 1 Liter', 'url' => '/assets/images/otomotif/gallery/penghitam-body/1l.webp', 'png' => '/assets/images/otomotif/gallery/penghitam-body/1l.png'],
        ],
        'pembersih-kaca' => [
            ['slug' => 'lineup', 'label' => 'Lini Lengkap', 'url' => '/assets/images/otomotif/gallery/pembersih-kaca/lineup.webp', 'png' => '/assets/images/otomotif/gallery/pembersih-kaca/lineup.png'],
            ['slug' => '250ml-front', 'label' => 'Botol 250ml Depan', 'url' => '/assets/images/otomotif/gallery/pembersih-kaca/250ml-front.webp', 'png' => '/assets/images/otomotif/gallery/pembersih-kaca/250ml-front.png'],
            ['slug' => '250ml-back', 'label' => 'Botol 250ml Belakang', 'url' => '/assets/images/otomotif/gallery/pembersih-kaca/250ml-back.webp', 'png' => '/assets/images/otomotif/gallery/pembersih-kaca/250ml-back.png'],
            ['slug' => '100ml-front', 'label' => 'Botol 100ml Depan', 'url' => '/assets/images/otomotif/gallery/pembersih-kaca/100ml-front.webp', 'png' => '/assets/images/otomotif/gallery/pembersih-kaca/100ml-front.png'],
            ['slug' => '100ml-back', 'label' => 'Botol 100ml Belakang', 'url' => '/assets/images/otomotif/gallery/pembersih-kaca/100ml-back.webp', 'png' => '/assets/images/otomotif/gallery/pembersih-kaca/100ml-back.png'],
            ['slug' => '1l', 'label' => 'Jerigen 1 Liter', 'url' => '/assets/images/otomotif/gallery/pembersih-kaca/1l.webp', 'png' => '/assets/images/otomotif/gallery/pembersih-kaca/1l.png'],
        ],
        'semir-ban' => [
            ['slug' => 'lineup', 'label' => 'Lini Lengkap', 'url' => '/assets/images/otomotif/gallery/semir-ban/lineup.webp', 'png' => '/assets/images/otomotif/gallery/semir-ban/lineup.png'],
            ['slug' => '250ml-front', 'label' => 'Botol 250ml Depan', 'url' => '/assets/images/otomotif/gallery/semir-ban/250ml-front.webp', 'png' => '/assets/images/otomotif/gallery/semir-ban/250ml-front.png'],
            ['slug' => '250ml-back', 'label' => 'Botol 250ml Belakang', 'url' => '/assets/images/otomotif/gallery/semir-ban/250ml-back.webp', 'png' => '/assets/images/otomotif/gallery/semir-ban/250ml-back.png'],
            ['slug' => '100ml-front', 'label' => 'Botol 100ml Depan', 'url' => '/assets/images/otomotif/gallery/semir-ban/100ml-front.webp', 'png' => '/assets/images/otomotif/gallery/semir-ban/100ml-front.png'],
            ['slug' => '100ml-back', 'label' => 'Botol 100ml Belakang', 'url' => '/assets/images/otomotif/gallery/semir-ban/100ml-back.webp', 'png' => '/assets/images/otomotif/gallery/semir-ban/100ml-back.png'],
            ['slug' => '1l', 'label' => 'Jerigen 1 Liter', 'url' => '/assets/images/otomotif/gallery/semir-ban/1l.webp', 'png' => '/assets/images/otomotif/gallery/semir-ban/1l.png'],
        ],
        'pengkilap-body' => [
            ['slug' => 'lineup', 'label' => 'Lini Lengkap', 'url' => '/assets/images/otomotif/gallery/pengkilap-body/lineup.webp', 'png' => '/assets/images/otomotif/gallery/pengkilap-body/lineup.png'],
            ['slug' => '250ml-front', 'label' => 'Botol 250ml Depan', 'url' => '/assets/images/otomotif/gallery/pengkilap-body/250ml-front.webp', 'png' => '/assets/images/otomotif/gallery/pengkilap-body/250ml-front.png'],
            ['slug' => '250ml-back', 'label' => 'Botol 250ml Belakang', 'url' => '/assets/images/otomotif/gallery/pengkilap-body/250ml-back.webp', 'png' => '/assets/images/otomotif/gallery/pengkilap-body/250ml-back.png'],
            ['slug' => '100ml-front', 'label' => 'Botol 100ml Depan', 'url' => '/assets/images/otomotif/gallery/pengkilap-body/100ml-front.webp', 'png' => '/assets/images/otomotif/gallery/pengkilap-body/100ml-front.png'],
            ['slug' => '100ml-back', 'label' => 'Botol 100ml Belakang', 'url' => '/assets/images/otomotif/gallery/pengkilap-body/100ml-back.webp', 'png' => '/assets/images/otomotif/gallery/pengkilap-body/100ml-back.png'],
            ['slug' => '1l', 'label' => 'Jerigen 1 Liter', 'url' => '/assets/images/otomotif/gallery/pengkilap-body/1l.webp', 'png' => '/assets/images/otomotif/gallery/pengkilap-body/1l.png'],
        ],
        'pembersih-interior' => [
            ['slug' => 'lineup', 'label' => 'Lini Lengkap', 'url' => '/assets/images/otomotif/gallery/pembersih-interior/lineup.webp', 'png' => '/assets/images/otomotif/gallery/pembersih-interior/lineup.png'],
            ['slug' => '250ml-front', 'label' => 'Botol 250ml Depan', 'url' => '/assets/images/otomotif/gallery/pembersih-interior/250ml-front.webp', 'png' => '/assets/images/otomotif/gallery/pembersih-interior/250ml-front.png'],
            ['slug' => '250ml-back', 'label' => 'Botol 250ml Belakang', 'url' => '/assets/images/otomotif/gallery/pembersih-interior/250ml-back.webp', 'png' => '/assets/images/otomotif/gallery/pembersih-interior/250ml-back.png'],
            ['slug' => '100ml-front', 'label' => 'Botol 100ml Depan', 'url' => '/assets/images/otomotif/gallery/pembersih-interior/100ml-front.webp', 'png' => '/assets/images/otomotif/gallery/pembersih-interior/100ml-front.png'],
            ['slug' => '100ml-back', 'label' => 'Botol 100ml Belakang', 'url' => '/assets/images/otomotif/gallery/pembersih-interior/100ml-back.webp', 'png' => '/assets/images/otomotif/gallery/pembersih-interior/100ml-back.png'],
            ['slug' => '1l', 'label' => 'Jerigen 1 Liter', 'url' => '/assets/images/otomotif/gallery/pembersih-interior/1l.webp', 'png' => '/assets/images/otomotif/gallery/pembersih-interior/1l.png'],
        ],
        'compound-body' => [
            ['slug' => 'lineup', 'label' => 'Lini Lengkap', 'url' => '/assets/images/otomotif/gallery/compound/lineup.webp', 'png' => '/assets/images/otomotif/gallery/compound/lineup.png'],
            ['slug' => 'detail-1', 'label' => 'Kemasan Compound', 'url' => '/assets/images/otomotif/gallery/compound/detail-1.webp', 'png' => '/assets/images/otomotif/gallery/compound/detail-1.png'],
            ['slug' => 'detail-2', 'label' => 'Aplikasi Compound', 'url' => '/assets/images/otomotif/gallery/compound/detail-2.webp', 'png' => '/assets/images/otomotif/gallery/compound/detail-2.png'],
        ],
        'pengusir-tikus' => [
            ['slug' => 'lineup', 'label' => 'Lini Lengkap', 'url' => '/assets/images/otomotif/gallery/pengusir-tikus/lineup.webp', 'png' => '/assets/images/otomotif/gallery/pengusir-tikus/lineup.png'],
            ['slug' => '250ml-front', 'label' => 'Botol 250ml Depan', 'url' => '/assets/images/otomotif/gallery/pengusir-tikus/250ml-front.webp', 'png' => '/assets/images/otomotif/gallery/pengusir-tikus/250ml-front.png'],
            ['slug' => '250ml-back', 'label' => 'Botol 250ml Belakang', 'url' => '/assets/images/otomotif/gallery/pengusir-tikus/250ml-back.webp', 'png' => '/assets/images/otomotif/gallery/pengusir-tikus/250ml-back.png'],
            ['slug' => '100ml-front', 'label' => 'Botol 100ml Depan', 'url' => '/assets/images/otomotif/gallery/pengusir-tikus/100ml-front.webp', 'png' => '/assets/images/otomotif/gallery/pengusir-tikus/100ml-front.png'],
            ['slug' => '100ml-back', 'label' => 'Botol 100ml Belakang', 'url' => '/assets/images/otomotif/gallery/pengusir-tikus/100ml-back.webp', 'png' => '/assets/images/otomotif/gallery/pengusir-tikus/100ml-back.png'],
            ['slug' => '1l', 'label' => 'Jerigen 1 Liter', 'url' => '/assets/images/otomotif/gallery/pengusir-tikus/1l.webp', 'png' => '/assets/images/otomotif/gallery/pengusir-tikus/1l.png'],
        ],
    ];
}

/**
 * Mengambil Data Produk Otomotif Aktif (Database / Default Fallback)
 *
 * @return array
 */
function cleaniquelab_get_otomotif_products() {
    $products = get_option('cleaniquelab_otomotif_products');
    if (!is_array($products) || empty($products)) {
        $products = cleaniquelab_get_default_otomotif_products();
    }

    // Pastikan seluruh varian foto/gambar kemasan (gallery) selalu tersedia
    $galleries = cleaniquelab_get_otomotif_galleries();
    foreach ($products as $id => &$p) {
        if (empty($p['gallery']) && isset($galleries[$id])) {
            $p['gallery'] = $galleries[$id];
        }
    }
    unset($p);

    return $products;
}

/**
 * Pendaftaran Menu di Sidebar Admin WordPress
 */
function cleaniquelab_register_otomotif_admin_menu() {
    add_menu_page(
        'Katalog Otomotif Cleanique Lab',
        'Katalog Otomotif',
        'manage_options',
        'cleaniquelab-otomotif',
        'cleaniquelab_render_otomotif_admin_page',
        'dashicons-car',
        26
    );
}
add_action('admin_menu', 'cleaniquelab_register_otomotif_admin_menu');

/**
 * Pemrosesan Form POST Simpan / Reset Data Produk Otomotif
 */
function cleaniquelab_handle_otomotif_admin_save() {
    if (!isset($_POST['cleaniquelab_otomotif_action'])) {
        return;
    }

    if (!current_user_can('manage_options')) {
        wp_die(__('Akses ditolak. Anda tidak memiliki hak akses administrator.', 'cleaniquelab'));
    }

    check_admin_referer('cleaniquelab_otomotif_save_action', 'cleaniquelab_otomotif_nonce');

    // 1. Aksi Reset ke Default
    if ($_POST['cleaniquelab_otomotif_action'] === 'reset') {
        $defaults = cleaniquelab_get_default_otomotif_products();
        update_option('cleaniquelab_otomotif_products', $defaults);
        wp_safe_redirect(admin_url('admin.php?page=cleaniquelab-otomotif&status=reset'));
        exit;
    }

    // 2. Aksi Simpan Perubahan Produk
    if ($_POST['cleaniquelab_otomotif_action'] === 'save' && isset($_POST['products']) && is_array($_POST['products'])) {
        $category_labels = [
            'eksterior' => 'Cuci Eksterior',
            'ban-velg'  => 'Ban Velg',
            'mesin'     => 'Ruang Mesin',
            'kaca'      => 'Kaca Mobil',
            'interior'  => 'Perawatan Interior',
        ];

        $default_icons = [
            'eksterior' => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"/><path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"/></svg>',
            'ban-velg'  => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="4"/><line x1="4.93" y1="4.93" x2="9.17" y2="9.17"/><line x1="14.83" y1="14.83" x2="19.07" y2="19.07"/><line x1="14.83" y1="9.17" x2="19.07" y2="4.93"/><line x1="4.93" y1="19.07" x2="9.17" y2="14.83"/></svg>',
            'mesin'     => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m14 12-8.5 8.5a2.12 2.12 0 1 1-3-3L11 9"/><path d="M15 13 9 7l4-4 6 6h3l-3 3v3l-4 4"/></svg>',
            'kaca'      => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12h20"/><path d="M20 12v8H4v-8"/><path d="m4 12 4-8h8l4 8"/></svg>',
            'interior'  => '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 9V6a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v3"/><path d="M3 11v5a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2Z"/><path d="M5 18v2"/><path d="M19 18v2"/></svg>',
        ];

        $existing = cleaniquelab_get_otomotif_products();
        $sanitized_products = [];

        foreach ($_POST['products'] as $item) {
            $raw_title = isset($item['title']) ? trim($item['title']) : '';
            if (empty($raw_title)) {
                continue;
            }

            $id = !empty($item['id']) ? sanitize_title($item['id']) : sanitize_title($raw_title);
            $category = isset($item['category']) ? sanitize_text_field($item['category']) : 'eksterior';
            $cat_name = isset($category_labels[$category]) ? $category_labels[$category] : ucfirst($category);

            // Tags
            $tags = [];
            if (!empty($item['tags'])) {
                $raw_tags = explode(',', str_replace(["\r\n", "\n"], ',', $item['tags']));
                foreach ($raw_tags as $t) {
                    $t = trim(sanitize_text_field($t));
                    if (!empty($t)) {
                        $tags[] = $t;
                    }
                }
            }

            // Kemasan (Pack sizes)
            $pack_sizes = [];
            if (!empty($item['pack_sizes'])) {
                $raw_packs = explode(',', str_replace(["\r\n", "\n"], ',', $item['pack_sizes']));
                foreach ($raw_packs as $p) {
                    $p = trim(sanitize_text_field($p));
                    if (!empty($p)) {
                        $pack_sizes[] = $p;
                    }
                }
            }

            // Rasio Dilusi
            $dilution = [];
            if (!empty($item['dilution_text'])) {
                $lines = explode("\n", str_replace("\r", "", $item['dilution_text']));
                foreach ($lines as $line) {
                    $line = trim($line);
                    if (empty($line)) continue;
                    if (strpos($line, ':') !== false) {
                        list($d_method, $d_ratio) = explode(':', $line, 2);
                        $dilution[trim(sanitize_text_field($d_method))] = trim(sanitize_text_field($d_ratio));
                    } else {
                        $dilution[trim(sanitize_text_field($line))] = 'Sesuai Kebutuhan';
                    }
                }
            }

            // Langkah Pemakaian (Steps)
            $steps = [];
            if (!empty($item['steps_text'])) {
                $lines = explode("\n", str_replace("\r", "", $item['steps_text']));
                foreach ($lines as $line) {
                    $line = trim($line);
                    if (!empty($line)) {
                        $steps[] = sanitize_text_field($line);
                    }
                }
            }

            // Peringatan Keamanan (Warnings)
            $warnings = [];
            if (!empty($item['warnings_text'])) {
                $lines = explode("\n", str_replace("\r", "", $item['warnings_text']));
                foreach ($lines as $line) {
                    $line = trim($line);
                    if (!empty($line)) {
                        $warnings[] = sanitize_text_field($line);
                    }
                }
            }

            // Spesifikasi Teknis
            $specs = [];
            if (!empty($item['specs_text'])) {
                $lines = explode("\n", str_replace("\r", "", $item['specs_text']));
                foreach ($lines as $line) {
                    $line = trim($line);
                    if (empty($line)) continue;
                    if (strpos($line, ':') !== false) {
                        list($s_key, $s_val) = explode(':', $line, 2);
                        $specs[trim(sanitize_text_field($s_key))] = trim(sanitize_text_field($s_val));
                    } else {
                        $specs[trim(sanitize_text_field($line))] = '-';
                    }
                }
            }

            // Pertahankan icon SVG sebelumnya jika ada
            $icon = isset($existing[$id]['icon']) ? $existing[$id]['icon'] : (isset($default_icons[$category]) ? $default_icons[$category] : $default_icons['eksterior']);

            $sanitized_products[$id] = [
                'id'          => $id,
                'title'       => sanitize_text_field($raw_title),
                'category'    => $category,
                'cat_name'    => $cat_name,
                'badge'       => isset($item['badge']) ? sanitize_text_field($item['badge']) : '',
                'badge_color' => isset($item['badge_color']) ? sanitize_hex_color($item['badge_color']) : '#3a7bd5',
                'price_est'   => isset($item['price_est']) ? sanitize_text_field($item['price_est']) : '',
                'image'       => isset($item['image']) ? sanitize_text_field($item['image']) : '',
                'tagline'     => isset($item['tagline']) ? sanitize_text_field($item['tagline']) : '',
                'icon'        => $icon,
                'summary'     => isset($item['summary']) ? sanitize_textarea_field($item['summary']) : '',
                'tags'        => $tags,
                'pack_sizes'  => $pack_sizes,
                'dilution'    => $dilution,
                'specs'       => $specs,
                'steps'       => $steps,
                'warnings'    => $warnings,
            ];
        }

        update_option('cleaniquelab_otomotif_products', $sanitized_products);
        wp_safe_redirect(admin_url('admin.php?page=cleaniquelab-otomotif&status=saved'));
        exit;
    }
}
add_action('admin_init', 'cleaniquelab_handle_otomotif_admin_save');

/**
 * Render Antarmuka Halaman Admin: Manajemen Katalog Otomotif
 */
function cleaniquelab_render_otomotif_admin_page() {
    $products = cleaniquelab_get_otomotif_products();
    $status = isset($_GET['status']) ? sanitize_text_field($_GET['status']) : '';
    $site_otomotif_url = home_url('/otomotif/');
    ?>
    <div class="wrap cq-admin-wrap" style="max-width: 1200px; margin-top: 20px;">
        <!-- Cleanique Lab Header -->
        <div style="background: linear-gradient(135deg, #00d2ff 0%, #3a7bd5 100%); padding: 24px 30px; border-radius: 16px; color: #fff; margin-bottom: 24px; box-shadow: 0 10px 25px rgba(58, 123, 213, 0.2);">
            <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
                <div>
                    <span style="display: inline-block; background: #aef711; color: #23232d; font-weight: 800; font-size: 11px; padding: 4px 12px; border-radius: 50px; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">
                        CLEANIQUE LAB DASHBOARD
                    </span>
                    <h1 style="color: #fff; margin: 0; font-size: 26px; font-weight: 800; letter-spacing: -0.5px;">
                        Manajemen Katalog Produk Otomotif
                    </h1>
                    <p style="color: rgba(255, 255, 255, 0.9); margin: 6px 0 0; font-size: 14px;">
                        Kelola 8 produk kimia otomotif asli Cleanique Lab, gambar kemasan botol resmi, instruksi pemakaian, dan peringatan label dari <strong>cleaniquelab.com/otomotif</strong>.
                    </p>
                </div>
                <div>
                    <a href="<?php echo esc_url($site_otomotif_url); ?>" target="_blank" class="button" style="background: #fff; color: #3a7bd5; border: none; font-weight: 700; border-radius: 50px; padding: 6px 20px; font-size: 13px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); display: inline-flex; align-items: center; gap: 6px;">
                        <span class="dashicons dashicons-external" style="margin-top: 2px;"></span> Lihat Halaman Web
                    </a>
                </div>
            </div>
        </div>

        <!-- Notifikasi Status -->
        <?php if ($status === 'saved'): ?>
            <div class="notice notice-success is-dismissible" style="border-left-color: #109733; padding: 12px 18px; border-radius: 8px; font-size: 14px; font-weight: 600;">
                <p>✓ Berhasil! Seluruh data katalog produk otomotif telah disimpan dan langsung aktif di halaman website.</p>
            </div>
        <?php elseif ($status === 'reset'): ?>
            <div class="notice notice-info is-dismissible" style="border-left-color: #00d2ff; padding: 12px 18px; border-radius: 8px; font-size: 14px; font-weight: 600;">
                <p>✓ Berhasil! Data katalog produk telah di-reset kembali ke 8 formula standar resmi pabrik PT Indotech Berkah Abadi.</p>
            </div>
        <?php endif; ?>

        <!-- Form Utama -->
        <form method="post" action="" id="cq-otomotif-form">
            <?php wp_nonce_field('cleaniquelab_otomotif_save_action', 'cleaniquelab_otomotif_nonce'); ?>
            <input type="hidden" name="cleaniquelab_otomotif_action" id="cq-action-input" value="save">

            <!-- Bar Aksi Atas -->
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 18px; flex-wrap: wrap; gap: 12px; background: #fff; padding: 14px 20px; border-radius: 12px; border: 1px solid #e2e8f0;">
                <div>
                    <strong>Total Produk:</strong> <span id="cq-product-count" style="background: #e2e8f0; padding: 3px 10px; border-radius: 20px; font-weight: 700;"><?php echo count($products); ?></span> Produk Aktif
                </div>
                <div style="display: flex; gap: 10px;">
                    <button type="button" class="button button-secondary" onclick="cqAddNewProduct()" style="font-weight: 700; border-radius: 8px;">
                        + Tambah Produk Baru
                    </button>
                    <button type="submit" class="button button-primary" style="background: #ea501f; border-color: #ea501f; font-weight: 700; border-radius: 8px; padding: 4px 20px;">
                        Simpan Semua Perubahan
                    </button>
                </div>
            </div>

            <!-- List Accordion Produk -->
            <div id="cq-products-accordion-list" style="display: flex; flex-direction: column; gap: 14px;">
                <?php
                foreach ($products as $index => $p):
                    $id          = isset($p['id']) ? $p['id'] : $index;
                    $title       = isset($p['title']) ? $p['title'] : '';
                    $category    = isset($p['category']) ? $p['category'] : 'eksterior';
                    $badge       = isset($p['badge']) ? $p['badge'] : '';
                    $badge_color = isset($p['badge_color']) ? $p['badge_color'] : '#3a7bd5';
                    $price_est   = isset($p['price_est']) ? $p['price_est'] : '';
                    $image       = isset($p['image']) ? $p['image'] : '';
                    $tagline     = isset($p['tagline']) ? $p['tagline'] : '';
                    $summary     = isset($p['summary']) ? $p['summary'] : '';
                    $tags_str    = (!empty($p['tags']) && is_array($p['tags'])) ? implode(', ', $p['tags']) : '';
                    $packs_str   = (!empty($p['pack_sizes']) && is_array($p['pack_sizes'])) ? implode(', ', $p['pack_sizes']) : '';

                    // Format Dilution per baris
                    $dilution_str = '';
                    if (!empty($p['dilution']) && is_array($p['dilution'])) {
                        $lines = [];
                        foreach ($p['dilution'] as $k => $v) {
                            $lines[] = $k . ' : ' . $v;
                        }
                        $dilution_str = implode("\n", $lines);
                    }

                    // Format Steps per baris
                    $steps_str = '';
                    if (!empty($p['steps']) && is_array($p['steps'])) {
                        $steps_str = implode("\n", $p['steps']);
                    }

                    // Format Warnings per baris
                    $warnings_str = '';
                    if (!empty($p['warnings']) && is_array($p['warnings'])) {
                        $warnings_str = implode("\n", $p['warnings']);
                    }

                    // Format Specs per baris
                    $specs_str = '';
                    if (!empty($p['specs']) && is_array($p['specs'])) {
                        $lines = [];
                        foreach ($p['specs'] as $k => $v) {
                            $lines[] = $k . ' : ' . $v;
                        }
                        $specs_str = implode("\n", $lines);
                    }
                ?>
                    <div class="postbox cq-product-card" id="card-<?php echo esc_attr($index); ?>" style="border-radius: 12px; border: 1px solid #cbd5e1; margin-bottom: 0; box-shadow: 0 2px 8px rgba(0,0,0,0.03); overflow: hidden;">
                        <!-- Accordion Header -->
                        <div class="cq-card-header" onclick="cqToggleCard('card-<?php echo esc_attr($index); ?>')" style="cursor: pointer; padding: 14px 20px; background: #f8fafc; border-bottom: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center; user-select: none;">
                            <div style="display: flex; align-items: center; gap: 12px; flex-wrap: wrap;">
                                <span class="cq-card-order" style="background: #3a7bd5; color: #fff; width: 26px; height: 26px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-size: 12px; font-weight: 800;">
                                    <?php echo esc_html($index); ?>
                                </span>
                                <strong class="cq-card-header-title" style="font-size: 15px; color: #1e293b;">
                                    <?php echo esc_html($title); ?>
                                </strong>
                                <span class="cq-card-header-badge" style="background: <?php echo esc_attr($badge_color); ?>; color: #fff; padding: 2px 10px; border-radius: 50px; font-size: 11px; font-weight: 700;">
                                    <?php echo esc_html($badge ?: 'Produk Otomotif'); ?>
                                </span>
                                <span style="color: #64748b; font-size: 12px; background: #e2e8f0; padding: 2px 8px; border-radius: 6px;">
                                    <?php echo esc_html($category); ?>
                                </span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 14px;">
                                <strong style="color: #ea501f; font-size: 13px;">
                                    <?php echo esc_html($price_est); ?>
                                </strong>
                                <span class="dashicons dashicons-arrow-down-alt2 cq-card-toggle-icon" style="transition: transform 0.2s;"></span>
                            </div>
                        </div>

                        <!-- Accordion Body Fields -->
                        <div class="cq-card-body" style="padding: 20px; display: none; background: #fff;">
                            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 16px; margin-bottom: 16px;">
                                <!-- ID Produk (Slug) -->
                                <div>
                                    <label style="display: block; font-weight: 600; font-size: 12px; color: #475569; margin-bottom: 4px;">ID Unik (Slug):</label>
                                    <input type="text" name="products[<?php echo esc_attr($index); ?>][id]" value="<?php echo esc_attr($id); ?>" style="width: 100%; border-radius: 6px;" required>
                                </div>

                                <!-- Nama Produk -->
                                <div style="grid-column: span 2;">
                                    <label style="display: block; font-weight: 600; font-size: 12px; color: #475569; margin-bottom: 4px;">Nama Lengkap Produk:</label>
                                    <input type="text" name="products[<?php echo esc_attr($index); ?>][title]" value="<?php echo esc_attr($title); ?>" class="cq-input-title" onkeyup="cqUpdateCardTitle(this, 'card-<?php echo esc_attr($index); ?>')" style="width: 100%; border-radius: 6px; font-weight: 600;" required>
                                </div>
                            </div>

                            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px; margin-bottom: 16px;">
                                <!-- Kategori Produk -->
                                <div>
                                    <label style="display: block; font-weight: 600; font-size: 12px; color: #475569; margin-bottom: 4px;">Kategori Produk:</label>
                                    <select name="products[<?php echo esc_attr($index); ?>][category]" style="width: 100%; border-radius: 6px;">
                                        <option value="eksterior" <?php selected($category, 'eksterior'); ?>>Cuci Eksterior</option>
                                        <option value="ban-velg" <?php selected($category, 'ban-velg'); ?>>Ban Velg</option>
                                        <option value="mesin" <?php selected($category, 'mesin'); ?>>Ruang Mesin</option>
                                        <option value="kaca" <?php selected($category, 'kaca'); ?>>Kaca Mobil</option>
                                        <option value="interior" <?php selected($category, 'interior'); ?>>Perawatan Interior</option>
                                    </select>
                                </div>

                                <!-- Label Sorotan (Badge) -->
                                <div>
                                    <label style="display: block; font-weight: 600; font-size: 12px; color: #475569; margin-bottom: 4px;">Label Sorotan (Maks 2 kata):</label>
                                    <input type="text" name="products[<?php echo esc_attr($index); ?>][badge]" value="<?php echo esc_attr($badge); ?>" placeholder="Contoh: Degreaser Logam, Wet Look" style="width: 100%; border-radius: 6px;">
                                </div>

                                <!-- Warna Badge -->
                                <div>
                                    <label style="display: block; font-weight: 600; font-size: 12px; color: #475569; margin-bottom: 4px;">Warna Badge:</label>
                                    <input type="color" name="products[<?php echo esc_attr($index); ?>][badge_color]" value="<?php echo esc_attr($badge_color); ?>" style="height: 34px; width: 100%; padding: 2px; border-radius: 6px;">
                                </div>

                                <!-- Estimasi Harga Grosir -->
                                <div>
                                    <label style="display: block; font-weight: 600; font-size: 12px; color: #475569; margin-bottom: 4px;">Estimasi Harga Retail / Curah:</label>
                                    <input type="text" name="products[<?php echo esc_attr($index); ?>][price_est]" value="<?php echo esc_attr($price_est); ?>" placeholder="Contoh: Rp 35.000 / 250ml" style="width: 100%; border-radius: 6px;">
                                </div>
                            </div>

                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
                                <!-- Gambar Botol / Kemasan -->
                                <div>
                                    <label style="display: block; font-weight: 600; font-size: 12px; color: #475569; margin-bottom: 4px;">Aset Gambar Produk (Path/URL):</label>
                                    <input type="text" name="products[<?php echo esc_attr($index); ?>][image]" value="<?php echo esc_attr($image); ?>" placeholder="/assets/images/otomotif/pembrsih_mesin.png" style="width: 100%; border-radius: 6px;">
                                </div>

                                <!-- Tagline Kemasan Resmi -->
                                <div>
                                    <label style="display: block; font-weight: 600; font-size: 12px; color: #475569; margin-bottom: 4px;">Tagline Kemasan Resmi:</label>
                                    <input type="text" name="products[<?php echo esc_attr($index); ?>][tagline]" value="<?php echo esc_attr($tagline); ?>" placeholder="Contoh: Mesin Bersih, Tampak Baru" style="width: 100%; border-radius: 6px;">
                                </div>
                            </div>

                            <!-- Ringkasan Produk -->
                            <div style="margin-bottom: 16px;">
                                <label style="display: block; font-weight: 600; font-size: 12px; color: #475569; margin-bottom: 4px;">Ringkasan Produk (Tampil di Kartu):</label>
                                <textarea name="products[<?php echo esc_attr($index); ?>][summary]" rows="2" style="width: 100%; border-radius: 6px;"><?php echo esc_textarea($summary); ?></textarea>
                            </div>

                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
                                <!-- Tag Keunggulan -->
                                <div>
                                    <label style="display: block; font-weight: 600; font-size: 12px; color: #475569; margin-bottom: 4px;">Tag Keunggulan (Pisahkan dengan koma):</label>
                                    <input type="text" name="products[<?php echo esc_attr($index); ?>][tags]" value="<?php echo esc_attr($tags_str); ?>" placeholder="Contoh: Pembersih Oli, Anti Kerak, Mesin Mengkilap" style="width: 100%; border-radius: 6px;">
                                </div>

                                <!-- Pilihan Kemasan -->
                                <div>
                                    <label style="display: block; font-weight: 600; font-size: 12px; color: #475569; margin-bottom: 4px;">Pilihan Kemasan (Pisahkan dengan koma):</label>
                                    <input type="text" name="products[<?php echo esc_attr($index); ?>][pack_sizes]" value="<?php echo esc_attr($packs_str); ?>" placeholder="Contoh: 100 ml, 250 ml, 1 Liter, Curah 5L" style="width: 100%; border-radius: 6px;">
                                </div>
                            </div>

                            <!-- Petunjuk Penggunaan (Steps) -->
                            <div style="margin-bottom: 16px;">
                                <label style="display: block; font-weight: 600; font-size: 12px; color: #475569; margin-bottom: 4px;">
                                    Cara Penggunaan (Tulis 1 langkah per baris):
                                </label>
                                <textarea name="products[<?php echo esc_attr($index); ?>][steps_text]" rows="5" style="width: 100%; font-family: monospace; font-size: 13px; border-radius: 6px;"><?php echo esc_textarea($steps_str); ?></textarea>
                            </div>

                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
                                <!-- Peringatan Keamanan (Warnings) -->
                                <div>
                                    <label style="display: block; font-weight: 600; font-size: 12px; color: #c61111; margin-bottom: 4px;">
                                        Peringatan &amp; Keamanan (1 baris per poin):
                                    </label>
                                    <textarea name="products[<?php echo esc_attr($index); ?>][warnings_text]" rows="4" style="width: 100%; font-family: monospace; font-size: 13px; border-radius: 6px;"><?php echo esc_textarea($warnings_str); ?></textarea>
                                </div>

                                <!-- Rasio Pengenceran -->
                                <div>
                                    <label style="display: block; font-weight: 600; font-size: 12px; color: #475569; margin-bottom: 4px;">
                                        Rasio Pengenceran (Format: <code>Metode : Takaran</code>):
                                    </label>
                                    <textarea name="products[<?php echo esc_attr($index); ?>][dilution_text]" rows="4" style="width: 100%; font-family: monospace; font-size: 13px; border-radius: 6px;"><?php echo esc_textarea($dilution_str); ?></textarea>
                                </div>
                            </div>

                            <!-- Spesifikasi Teknis -->
                            <div style="margin-bottom: 16px;">
                                <label style="display: block; font-weight: 600; font-size: 12px; color: #475569; margin-bottom: 4px;">
                                    Spesifikasi Formula (Format: <code>Label : Nilai</code> per baris):
                                </label>
                                <textarea name="products[<?php echo esc_attr($index); ?>][specs_text]" rows="4" style="width: 100%; font-family: monospace; font-size: 13px; border-radius: 6px;"><?php echo esc_textarea($specs_str); ?></textarea>
                            </div>

                            <!-- Tombol Hapus Produk -->
                            <div style="text-align: right; border-top: 1px solid #f1f5f9; padding-top: 14px;">
                                <button type="button" class="button" onclick="cqDeleteProduct('card-<?php echo esc_attr($index); ?>')" style="color: #c61111; border-color: #fca5a5;">
                                    <span class="dashicons dashicons-trash" style="vertical-align: middle; margin-top: -2px;"></span> Hapus Produk Ini
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Bar Aksi Bawah & Reset -->
            <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 24px; padding: 18px 24px; background: #fff; border-radius: 12px; border: 1px solid #e2e8f0;">
                <div>
                    <button type="button" class="button" onclick="cqConfirmReset()" style="color: #64748b;">
                        Reset ke Standar Pabrik (8 Produk)
                    </button>
                </div>
                <div style="display: flex; gap: 10px;">
                    <button type="button" class="button button-secondary" onclick="cqAddNewProduct()" style="font-weight: 700; border-radius: 8px;">
                        + Tambah Produk Baru
                    </button>
                    <button type="submit" class="button button-primary" style="background: #ea501f; border-color: #ea501f; font-weight: 700; border-radius: 8px; padding: 4px 24px; font-size: 14px;">
                        Simpan Semua Perubahan
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Script Interaktif Accordion & Manipulasi DOM Admin -->
    <script>
    function cqToggleCard(cardId) {
        const card = document.getElementById(cardId);
        if (!card) return;
        const body = card.querySelector('.cq-card-body');
        const icon = card.querySelector('.cq-card-toggle-icon');
        if (body.style.display === 'none' || body.style.display === '') {
            body.style.display = 'block';
            if (icon) icon.style.transform = 'rotate(180deg)';
        } else {
            body.style.display = 'none';
            if (icon) icon.style.transform = 'rotate(0deg)';
        }
    }

    function cqUpdateCardTitle(input, cardId) {
        const card = document.getElementById(cardId);
        if (!card) return;
        const headerTitle = card.querySelector('.cq-card-header-title');
        if (headerTitle) {
            headerTitle.innerText = input.value || 'Produk Baru Tanpa Nama';
        }
    }

    function cqDeleteProduct(cardId) {
        if (confirm('Apakah Anda yakin ingin menghapus produk ini dari katalog? Perubahan akan tersimpan permanen setelah klik "Simpan Semua Perubahan".')) {
            const card = document.getElementById(cardId);
            if (card) {
                card.remove();
                cqUpdateCount();
            }
        }
    }

    function cqUpdateCount() {
        const cards = document.querySelectorAll('.cq-product-card');
        const countEl = document.getElementById('cq-product-count');
        if (countEl) countEl.innerText = cards.length;
    }

    function cqConfirmReset() {
        if (confirm('PERINGATAN: Seluruh penyesuaian produk saat ini akan diganti kembali ke 8 formula standar resmi pabrik Cleanique Lab. Apakah Anda ingin melanjutkan?')) {
            const form = document.getElementById('cq-otomotif-form');
            const actionInput = document.getElementById('cq-action-input');
            if (form && actionInput) {
                actionInput.value = 'reset';
                form.submit();
            }
        }
    }

    function cqAddNewProduct() {
        const list = document.getElementById('cq-products-accordion-list');
        const newIndex = 'prod_' + Date.now();
        const html = `
            <div class="postbox cq-product-card" id="card-${newIndex}" style="border-radius: 12px; border: 2px dashed #3a7bd5; margin-bottom: 0; background: #fff; overflow: hidden;">
                <div class="cq-card-header" onclick="cqToggleCard('card-${newIndex}')" style="cursor: pointer; padding: 14px 20px; background: #eff6ff; border-bottom: 1px solid #bfdbfe; display: flex; justify-content: space-between; align-items: center;">
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <span class="cq-card-order" style="background: #109733; color: #fff; width: 26px; height: 26px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-size: 12px; font-weight: 800;">+</span>
                        <strong class="cq-card-header-title" style="font-size: 15px; color: #1e293b;">Produk Otomotif Baru</strong>
                        <span style="background: #3a7bd5; color: #fff; padding: 2px 10px; border-radius: 50px; font-size: 11px; font-weight: 700;">Baru</span>
                    </div>
                    <span class="dashicons dashicons-arrow-down-alt2 cq-card-toggle-icon" style="transform: rotate(180deg);"></span>
                </div>
                <div class="cq-card-body" style="padding: 20px; display: block; background: #fff;">
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 16px; margin-bottom: 16px;">
                        <div>
                            <label style="display: block; font-weight: 600; font-size: 12px; color: #475569; margin-bottom: 4px;">ID Unik (Slug):</label>
                            <input type="text" name="products[${newIndex}][id]" value="${newIndex}" style="width: 100%; border-radius: 6px;" required>
                        </div>
                        <div style="grid-column: span 2;">
                            <label style="display: block; font-weight: 600; font-size: 12px; color: #475569; margin-bottom: 4px;">Nama Lengkap Produk:</label>
                            <input type="text" name="products[${newIndex}][title]" value="Produk Otomotif Baru" class="cq-input-title" onkeyup="cqUpdateCardTitle(this, 'card-${newIndex}')" style="width: 100%; border-radius: 6px; font-weight: 600;" required>
                        </div>
                    </div>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px; margin-bottom: 16px;">
                        <div>
                            <label style="display: block; font-weight: 600; font-size: 12px; color: #475569; margin-bottom: 4px;">Kategori Produk:</label>
                            <select name="products[${newIndex}][category]" style="width: 100%; border-radius: 6px;">
                                <option value="eksterior">Cuci Eksterior</option>
                                <option value="ban-velg">Ban Velg</option>
                                <option value="mesin">Ruang Mesin</option>
                                <option value="kaca">Kaca Mobil</option>
                                <option value="interior">Perawatan Interior</option>
                            </select>
                        </div>
                        <div>
                            <label style="display: block; font-weight: 600; font-size: 12px; color: #475569; margin-bottom: 4px;">Label Sorotan (Maks 2 kata):</label>
                            <input type="text" name="products[${newIndex}][badge]" value="Formula Baru" style="width: 100%; border-radius: 6px;">
                        </div>
                        <div>
                            <label style="display: block; font-weight: 600; font-size: 12px; color: #475569; margin-bottom: 4px;">Warna Badge:</label>
                            <input type="color" name="products[${newIndex}][badge_color]" value="#3a7bd5" style="height: 34px; width: 100%; padding: 2px; border-radius: 6px;">
                        </div>
                        <div>
                            <label style="display: block; font-weight: 600; font-size: 12px; color: #475569; margin-bottom: 4px;">Estimasi Harga Retail / Curah:</label>
                            <input type="text" name="products[${newIndex}][price_est]" value="Rp 35.000 / 250ml" style="width: 100%; border-radius: 6px;">
                        </div>
                    </div>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
                        <div>
                            <label style="display: block; font-weight: 600; font-size: 12px; color: #475569; margin-bottom: 4px;">Aset Gambar Produk (Path/URL):</label>
                            <input type="text" name="products[${newIndex}][image]" value="/assets/images/otomotif/pembrsih_mesin.png" style="width: 100%; border-radius: 6px;">
                        </div>
                        <div>
                            <label style="display: block; font-weight: 600; font-size: 12px; color: #475569; margin-bottom: 4px;">Tagline Kemasan Resmi:</label>
                            <input type="text" name="products[${newIndex}][tagline]" value="Formula Perawatan Kendaraan" style="width: 100%; border-radius: 6px;">
                        </div>
                    </div>
                    <div style="margin-bottom: 16px;">
                        <label style="display: block; font-weight: 600; font-size: 12px; color: #475569; margin-bottom: 4px;">Ringkasan Produk (Tampil di Kartu):</label>
                        <textarea name="products[${newIndex}][summary]" rows="2" style="width: 100%; border-radius: 6px;">Deskripsi formula perawatan otomotif berkualitas tinggi langsung dari pabrik.</textarea>
                    </div>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
                        <div>
                            <label style="display: block; font-weight: 600; font-size: 12px; color: #475569; margin-bottom: 4px;">Tag Keunggulan (Pisahkan dengan koma):</label>
                            <input type="text" name="products[${newIndex}][tags]" value="Formula Pabrik, Ramah Lingkungan" style="width: 100%; border-radius: 6px;">
                        </div>
                        <div>
                            <label style="display: block; font-weight: 600; font-size: 12px; color: #475569; margin-bottom: 4px;">Pilihan Kemasan (Pisahkan dengan koma):</label>
                            <input type="text" name="products[${newIndex}][pack_sizes]" value="100 ml, 250 ml, 1 Liter, Curah 5L" style="width: 100%; border-radius: 6px;">
                        </div>
                    </div>
                    <div style="margin-bottom: 16px;">
                        <label style="display: block; font-weight: 600; font-size: 12px; color: #475569; margin-bottom: 4px;">Cara Penggunaan (1 langkah per baris):</label>
                        <textarea name="products[${newIndex}][steps_text]" rows="4" style="width: 100%; font-family: monospace; font-size: 13px; border-radius: 6px;">Kocok sebelum digunakan.&#10;Semprotkan pada permukaan yang ingin dibersihkan.&#10;Lap merata dengan microfiber sampai kering bersih.</textarea>
                    </div>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
                        <div>
                            <label style="display: block; font-weight: 600; font-size: 12px; color: #c61111; margin-bottom: 4px;">Peringatan &amp; Keamanan (1 baris per poin):</label>
                            <textarea name="products[${newIndex}][warnings_text]" rows="3" style="width: 100%; font-family: monospace; font-size: 13px; border-radius: 6px;">Jauhkan dari jangkauan anak-anak.&#10;Hindari kontak langsung dengan mata.</textarea>
                        </div>
                        <div>
                            <label style="display: block; font-weight: 600; font-size: 12px; color: #475569; margin-bottom: 4px;">Rasio Pengenceran (Format: Metode : Takaran):</label>
                            <textarea name="products[${newIndex}][dilution_text]" rows="3" style="width: 100%; font-family: monospace; font-size: 13px; border-radius: 6px;">Aplikasi Standar : Siap Pakai Langsung</textarea>
                        </div>
                    </div>
                    <div style="margin-bottom: 16px;">
                        <label style="display: block; font-weight: 600; font-size: 12px; color: #475569; margin-bottom: 4px;">Spesifikasi Formula (Format: Label : Nilai per baris):</label>
                        <textarea name="products[${newIndex}][specs_text]" rows="3" style="width: 100%; font-family: monospace; font-size: 13px; border-radius: 6px;">Wujud Fisik : Cairan Bening Berkilau&#10;Produsen : PT Indotech Berkah Abadi</textarea>
                    </div>
                    <div style="text-align: right; border-top: 1px solid #f1f5f9; padding-top: 14px;">
                        <button type="button" class="button" onclick="cqDeleteProduct('card-${newIndex}')" style="color: #c61111; border-color: #fca5a5;">
                            <span class="dashicons dashicons-trash" style="vertical-align: middle; margin-top: -2px;"></span> Hapus Produk Ini
                        </button>
                    </div>
                </div>
            </div>
        `;
        list.insertAdjacentHTML('beforeend', html);
        cqUpdateCount();
        const newCard = document.getElementById('card-' + newIndex);
        if (newCard) {
            newCard.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    }
    </script>
    <?php
}
