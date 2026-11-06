---
name: laravel-blade-starter
description: >-
  Architectural guidelines, security rules, and code patterns for EXPROSA Laravel Starter (Laravel 12/13, PHP 8.4, Blade, Tailwind CSS, Alpine.js, cPanel deployment).
  Use whenever creating or modifying Laravel codebase, Blade components, configs, routes, migrations, or deployment scripts for EXPROSA.
---

# EXPROSA Laravel Blade Starter Skill

Guidelines and standards for building high-quality, production-ready website code on the EXPROSA Laravel Starter foundation.

## Tech Stack
- **Framework**: Laravel 12.x / 13.x (PHP 8.4 target)
- **Frontend**: Laravel Blade + Tailwind CSS + Alpine.js / Vanilla JS
- **Icons**: Lucide Icons or Tabler Icons (strict consistency)
- **Motion**: CSS transitions for micro-interactions; GSAP + ScrollTrigger for organic storytelling; `prefers-reduced-motion` compliance mandatory.
- **Database**: MySQL / MariaDB (isolated per client, NO shared multi-tenant database)
- **Server**: cPanel Apache / LiteSpeed, document root pointing exclusively to `public/`.

## Strict UI/UX Anti-AI Slop Rules (Mandatory)
1. **Banned AI Clichés**:
   - NO pill badges or status dots above headings (`rounded-full` tags with dots).
   - NO mid-sentence color changes in headings (H1/H2 solid off-white/cream).
   - NO generic centered sub-page banners ([Eyebrow + Centered H1 + Gray Subtext on box]).
   - NO SaaS card framing for hero images (no `rounded-2xl` dark cards with thin borders around photography).
   - NO glowing radial blur gradients behind text/cards.
   - NO floating pill-shaped filter buttons.
2. **Editorial Hospitality Direction**:
   - Layout: Asymmetric 12-column Swiss/Editorial grid with generous negative space and visible hairline dividers (`1px solid rgba(255,255,255,0.08)`).
   - Hero: Full-bleed atmospheric photography with bottom-up dark vignette and bottom-aligned typography, or asymmetric split with raw, unframed vertical imagery and oversized serif (`leading-[0.95]`).
   - Corners: Sharp or micro-rounded (`rounded-none` or `rounded-sm` max 2px) for buttons, inputs, cards, and images like luxury print menus.
   - Filters: Minimal text-only tabs separated by hairline dividers or animated underline indicators (`border-b`).
   - Color: Muted warm bronze/aged brass (`#C5A059`), dark espresso (`#0F0D0B`), warm alabaster (`#F4F1EA`), deep charcoal (`#161412`). NO saturated tech-orange (`#F59E0B`/`#EA580C`).
   - Copy: Grounded, sensory culinary Bahasa Indonesia. NO tech/marketing buzzwords.

## Architecture & Conventions
1. **Isolated Client Deployment**:
   - One Laravel codebase per client in `/home/CPANEL_USER/clients/client-name/`.
   - Separate `.env`, separate MySQL database & user per client.
   - Core Laravel application files must remain outside public web root; only `public/` is exposed.
2. **Business Identity Config**:
   - All client contact, phone, WhatsApp, address, social, and metadata live in `config/site.php` (read from `.env`), NEVER hardcoded in Blade templates.
3. **Security Standards**:
   - `APP_ENV=production`, `APP_DEBUG=false`.
   - Strict CSRF protection, input validation, and secure header configuration.
   - Server-side validation and honeypot/spam protection on contact forms.
4. **Performance & Core Web Vitals**:
   - Target: LCP <= 2.5s, INP <= 200ms, CLS <= 0.1.
   - Responsive images with WebP format and explicit dimensions.
   - Never lazy-load the above-the-fold hero image.
