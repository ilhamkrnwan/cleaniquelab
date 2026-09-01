---
name: cleaniquelab-design-system
description: Design system and frontend UI generator for Cleanique Lab (cleaniquelab.com). Use when building landing pages, components, stylesheets, buttons, banners, or marketing sections for Cleanique Lab products.
---

# Cleanique Lab Design System Skill

Use this skill whenever you are tasked with creating, modifying, or refactoring UI components, landing pages, banners, or styles for Cleanique Lab.

## Core Visual DNA
- **Theme**: Chemical hygiene, liquid soap manufacturing, freshness, bulk & retail packaging.
- **Hero Palette**: Radial cyan-to-royal-blue (`#00d2ff` to `#3a7bd5`), crisp white headlines, and neon lime subheadings (`#b4fc6c` / `#aef711`).
- **Signature CTA**: Coral pill button (`#ea501f` $\to$ `#ff6900`), `border-radius: 50px`, hover scale `1.06`.
- **Card Tiers**: Color-coded linear gradients for packages (Green, Purple, Blue, Red).
- **Dividers**: Organic SVG wave / bubble dividers between sections.

## Step-by-Step UI Construction Workflow

### Step 1: Establish Typography & Base Tokens
Include the official Google Fonts:
```html
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&family=Open+Sans:wght@400;500;700;800;900&family=Source+Sans+3:wght@400;600;700;800;900&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
```

### Step 2: Hero Section Template
```html
<section class="cq-hero-section">
  <div class="cq-container">
    <span class="cq-eyebrow">Produsen Aneka Sabun</span>
    <h1 class="cq-hero-title">Bersih Maksimal<br><span class="cq-text-gradient">Hemat Modal</span></h1>
    <p class="cq-hero-lead">
      Cleanique Lab menyediakan aneka produk kebersihan dan sabun curah berkualitas tinggi untuk kebutuhan rumah tangga, laundry, industri, dan paket kemitraan usaha.
    </p>
    <div class="cq-hero-actions">
      <a href="https://wa.me/628123456789" class="cq-btn-primary">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><!-- WhatsApp / Cart Icon --></svg>
        Konsultasi & Order
      </a>
      <a href="/pricelist" class="cq-btn-outline">Lihat Daftar Harga</a>
    </div>
  </div>
  <!-- Organic Wave Divider -->
  <div class="cq-shape-divider">
    <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
      <path fill="#ffffff" d="M0,160L48,176C96,192,192,224,288,213.3C384,203,480,149,576,144C672,139,768,181,864,197.3C960,213,1056,203,1152,181.3C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
  </div>
</section>
```

### Step 3: Product Package Grid Template
```html
<div class="cq-product-grid">
  <!-- Eco / Dishwash (Green) -->
  <div class="cq-card cq-card-green">
    <div class="cq-card-badge">Paket Cuci Piring</div>
    <div class="cq-card-price">Rp 45.000 <span class="cq-unit">/ 5 Liter</span></div>
    <ul class="cq-card-features">
      <li><span class="cq-bullet">★</span> Busa Melimpah & Kesat</li>
      <li><span class="cq-bullet">★</span> Ekstrak Jeruk Nipis Asli</li>
      <li><span class="cq-bullet">★</span> Lembut di Tangan</li>
    </ul>
    <a href="#order" class="cq-card-btn">Pesan Sekarang</a>
  </div>

  <!-- Laundry / Parfum (Purple) -->
  <div class="cq-card cq-card-purple">
    <div class="cq-card-badge">Deterjen Laundry</div>
    <div class="cq-card-price">Rp 55.000 <span class="cq-unit">/ 5 Liter</span></div>
    <ul class="cq-card-features">
      <li><span class="cq-bullet">★</span> Formula Rendah Busa (Mesin)</li>
      <li><span class="cq-bullet">★</span> Wangi Tahan Lama (Floral/Downy)</li>
      <li><span class="cq-bullet">★</span> Mencegah Apek & Anti Bakteri</li>
    </ul>
    <a href="#order" class="cq-card-btn">Pesan Sekarang</a>
  </div>

  <!-- Hand Soap & Body (Blue) -->
  <div class="cq-card cq-card-blue">
    <div class="cq-card-badge">Hand Soap Premium</div>
    <div class="cq-card-price">Rp 40.000 <span class="cq-unit">/ 5 Liter</span></div>
    <ul class="cq-card-features">
      <li><span class="cq-bullet">★</span> pH Seimbang & Moisturizer</li>
      <li><span class="cq-bullet">★</span> Aroma Segar Stroberi & Apel</li>
      <li><span class="cq-bullet">★</span> Standar Restoran & Rumah Sakit</li>
    </ul>
    <a href="#order" class="cq-card-btn">Pesan Sekarang</a>
  </div>

  <!-- Karbol / Disinfektan (Red) -->
  <div class="cq-card cq-card-red">
    <div class="cq-card-badge">Karbol Sereh & Pinus</div>
    <div class="cq-card-price">Rp 50.000 <span class="cq-unit">/ 5 Liter</span></div>
    <ul class="cq-card-features">
      <li><span class="cq-bullet">★</span> Ekstrak Minyak Sereh Alami</li>
      <li><span class="cq-bullet">★</span> Mengusir Nyamuk & Serangga</li>
      <li><span class="cq-bullet">★</span> Daya Bunuh Kuman 99.9%</li>
    </ul>
    <a href="#order" class="cq-card-btn">Pesan Sekarang</a>
  </div>
</div>
```

### Step 4: Standalone CSS Tokens & Utilities File
Developers can reference [cleaniquelab-design-system.md](file:///c:/laragon/www/cleaniquelab/.agents/rules/cleaniquelab-design-system.md) or import standard Cleanique Lab classes into any layout.
