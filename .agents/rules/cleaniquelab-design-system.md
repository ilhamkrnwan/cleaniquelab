# Cleanique Lab Design System & Style Guidelines

This document outlines the official visual identity, design tokens, component architecture, and styling rules for **Cleanique Lab** (`cleaniquelab.com`). All frontend code (HTML, CSS, Tailwind, Blade, JavaScript, Vue/React) must adhere strictly to these rules.

---

## 1. Brand Identity & Design Philosophy

- **Brand Essence**: Modern, energetic, clean, scientific yet accessible. Cleanique Lab manufactures cleaning chemicals, detergents, and hygiene solutions for industrial, educational, healthcare, and household needs.
- **Visual Aesthetic**:
  - Fresh water & chemical hygiene themes with vibrant energetic gradients.
  - High-contrast visual hierarchy (Bright Cyan/Royal Blue backgrounds paired with Neon Lime accents and crisp white typography).
  - Organic smooth wave/bubble shape dividers that seamlessly transition between light, vibrant, and dark sections.
  - Tactile, rounded UI elements (pill buttons with scale transforms, glowing borders, floating cards).
  - Clean floating sticky headers with subtle shadow elevation.

---

## 2. Color System & Design Tokens

### Primary Brand Colors
```css
:root {
  /* Brand Blue Gradients (Freshness, Water, Laboratory) */
  --cq-blue-cyan: #00d2ff;
  --cq-blue-royal: #3a7bd5;
  --cq-blue-electric: #396afc;
  --cq-blue-deep: #0055d6;
  --cq-blue-dark: #0a2563;
  --cq-blue-gradient: linear-gradient(135deg, #00d2ff 0%, #3a7bd5 100%);
  --cq-hero-radial: radial-gradient(circle farthest-side, #00d2ff 35px, #3a7bd5);

  /* Neon Lime & Fresh Green Accents (Eco, Active, Highlighting) */
  --cq-lime-neon: #aef711;
  --cq-lime-soft: #b4fc6c;
  --cq-green-vibrant: #7edb0d;
  --cq-green-deep: #109733;
  --cq-green-dark: #107526;
  --cq-green-gradient: linear-gradient(135deg, #109733 0%, #7edb0d 100%);

  /* Coral & Warm CTA Accents (High-Conversion Buttons) */
  --cq-orange-cta: #ea501f;
  --cq-orange-bright: #ff6900;
  --cq-orange-gradient: linear-gradient(120deg, #ea501f 0%, #ff6900 100%);

  /* Magenta / Berry Accents (Special Packages / Promotional Badges) */
  --cq-magenta-bright: #e96199;
  --cq-magenta-dark: #e9435a;
  --cq-purple-deep: #6d0a6c;
  --cq-purple-bright: #a51da3;
  --cq-magenta-gradient: linear-gradient(120deg, #e96199 0%, #e9435a 100%);

  /* Warning / Danger Red Gradients (Heavy Industrial / Strong Detergents) */
  --cq-red-deep: #c61111;
  --cq-red-bright: #f71b1b;
  --cq-red-dark: #720000;
  --cq-red-gradient: linear-gradient(135deg, #c61111 0%, #f71b1b 100%);

  /* Neutral Dark Slate & Charcoal (Footers, High Contrast) */
  --cq-slate-dark: #2b2b33;
  --cq-slate-deeper: #23232d;
  --cq-slate-border: #3e3e4b;
  --cq-text-dark: #404040;
  --cq-text-muted: #576677;

  /* Neutral Light & Whites */
  --cq-white: #ffffff;
  --cq-bg-light: #f9f9f9;
  --cq-bg-soft: #eff3f7;
  --cq-border-light: #e8e6f2;
}
```

---

## 3. Typography & Hierarchy

### Font Families
- **Primary Body Font**: `'Open Sans'`, system-ui, -apple-system, sans-serif
- **Headings & Display**: `'Source Sans 3'`, `'Open Sans'` (Heavy weights: 700, 800, 900)
- **Badges, Feature Labels & Monospace**: `'Ubuntu'`, `'Inter'`

### Type Scale Rules
| Element | Font Family | Size (Desktop) | Size (Mobile) | Weight | Color / Style |
| :--- | :--- | :--- | :--- | :--- | :--- |
| **Hero Massive Title** | `Open Sans` | 180px – 240px | 72px – 80px | 900 (Black) | `#ffffff`, line-height: 1 |
| **Subheading / Eyebrow** | `Open Sans` | 24px – 30px | 18px – 20px | 900 (Black) | `#b4fc6c` / `#e96199`, uppercase, letter-spacing: 2px–4px |
| **Section Heading (H2)** | `Source Sans 3` | 48px – 70px | 36px – 45px | 800 (Bold) | `#23232d` on light, `#ffffff` on dark/gradients |
| **Card / Feature Heading (H3)** | `Source Sans 3` | 24px – 36px | 20px – 24px | 700 | Primary color or `#23232d` |
| **Body Lead / Big Text** | `Open Sans` | 20px – 30px | 16px – 18px | 400 – 500 | `#52565a` on light, `#ffffff` on dark, max-width: 720px |
| **Standard Body Text** | `Open Sans` | 16px – 18px | 15px – 16px | 400 | `#404040` (Light bg), line-height: 1.6 |
| **Badge / Button Label** | `Ubuntu` / `Open Sans` | 14px – 18px | 13px – 15px | 800 – 900 | Uppercase, letter-spacing: 0.125em – 2px |

---

## 4. Layout, Spacing & Breakpoints

- **Max Container Width**: `1120px` (standard container), `1280px` (wide container)
- **Section Padding**:
  - Desktop: `padding-top: 100px; padding-bottom: 200px;` (when wave dividers overlap) or `75px 20px`
  - Tablet: `padding-top: 60px; padding-bottom: 120px;`
  - Mobile: `padding-top: 40px; padding-bottom: 60px;`
- **Breakpoints**:
  - `Desktop Extra`: `> 1120px`
  - `Desktop / Laptop`: `992px – 1120px`
  - `Tablet`: `768px – 991px`
  - `Mobile Landscape`: `480px – 767px`
  - `Mobile Portrait`: `< 479px`

---

## 5. Signature Components & Patterns

### 1. Floating Sticky Header
- **Desktop**: White background `#ffffff`, sticky at top, `box-shadow: 0px 20px 25px 5px rgba(0, 0, 0, 0.08)`
- **Nav Links**: Uppercase, font-size: `11px`, font-weight: `900`, letter-spacing: `0.125em`, color: `rgba(94, 94, 94, 0.89)`
- **Hover State**: Background: `#efefef`, border-bottom: `2px solid var(--cq-blue-royal)`

### 2. High-Impact Hero Section
- **Background**: `radial-gradient(circle farthest-side, #00d2ff 35px, #3a7bd5)` with `#0055d6` fallback.
- **Eyebrow**: Uppercase bold lime `#b4fc6c`.
- **Title**: Huge white display typography (`Aneka Sabun`).
- **Product Graphics**: Centered product hero with floating promotional package badges (left and right with soft drop shadow).
- **Divider**: Bottom organic SVG Yin-Yang wave divider (`fill: #ffffff` or section background).

### 3. Pill & Gradient Action Buttons
```css
/* Coral Conversion Button (WhatsApp / Order / Katalog) */
.cq-btn-primary {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 12px;
  background: var(--cq-orange-gradient);
  color: #ffffff;
  font-family: 'Open Sans', sans-serif;
  font-size: 18px;
  font-weight: 800;
  letter-spacing: 2px;
  text-transform: uppercase;
  padding: 16px 36px;
  border-radius: 50px;
  border: none;
  text-decoration: none;
  box-shadow: 0 15px 30px rgba(234, 80, 31, 0.35);
  transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  cursor: pointer;
}

.cq-btn-primary:hover {
  transform: scale(1.06);
  box-shadow: 0 20px 40px rgba(234, 80, 31, 0.5);
  color: #ffffff;
}

/* Outline Pill Button */
.cq-btn-outline {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 18px 42px;
  border: 2px solid #ffffff;
  border-radius: 1000px;
  color: #ffffff;
  font-size: 18px;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.125em;
  background: transparent;
  transition: all 0.3s ease;
}

.cq-btn-outline:hover {
  background-color: var(--cq-magenta-bright);
  border-color: var(--cq-magenta-bright);
  transform: scale(1.05);
}
```

### 4. Product / Package Pricing Cards (Color-Coded Gradients)
- **Grid Layout**: 4 columns (Desktop) $\to$ 2 columns (Tablet) $\to$ 1 column (Mobile).
- **Themes**:
  1. *Eco / Herbal / Cair*: Green gradient (`#109733` to `#7edb0d`)
  2. *Parfum / Luxury / Laundry*: Purple gradient (`#6d0a6c` to `#a51da3`)
  3. *Sabun Cuci / Dishwash / Hand Soap*: Blue gradient (`#3a7bd5` to `#00d2ff`)
  4. *Karbol / Disinfektan / Heavy Industrial*: Red gradient (`#c61111` to `#f71b1b`)
- **Card Features**:
  - Top Badge: Pill badge with darker solid background (`border-radius: 25px`, padding `10px 20px`, white text).
  - Price Display: Bold display text (`40px - 60px`, weight 900).
  - Bullet Points: White text (`18px`) with Gold bullet icons (`#ffc700`).
  - Card CTA: Full width pill button at bottom.

### 5. Slate Dark Footer (`#2b2b33`)
- **Background**: `#2b2b33` with subtle top border `#3e3e4b`.
- **Headings**: `'Source Sans 3'`, uppercase, 18px-20px, weight: 500-900, `#ffffff`.
- **Links**: Open Sans, 14px-16px, pastel cyan `#74d8c2` or sky blue `#7596d8`, hover to `#41c3e5`.
- **Social Buttons**: Circular buttons `#1f9edd` with white icons, hover to `#006fef`.

---

## 6. Concrete Rules for Agents & Developers

1. **Never use bland generic grey/white AI templates**: All marketing and landing pages must feature Cleanique Lab's signature cyan-to-royal-blue gradients, lime accents, and vibrant color coding.
2. **Organic Section Transitions**: Use SVG wave shape dividers (`.oxy-shape-divider` / curved SVG masks) between contrasting sections rather than harsh straight cuts.
3. **Micro-Interactions**: All clickable elements (buttons, logos, product cards) must have scale and glow transitions (`transform: scale(1.05)`, smooth ease transition).
4. **Copywriting Tone**: Clear, benefit-driven Indonesian copy catering to business owners, resellers, schools, hospitals, and households (e.g., *"Paket Usaha Sabun"*, *"Produsen Aneka Sabun"*, *"Formula Siap Pakai & Biang Ekonomis"*).
