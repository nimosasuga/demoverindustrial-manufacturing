# EXPROSA Workspace Rules & Automated Protocols

## 1. Automated Mode: Caveman Style (Always On)
- **Terse & High Density**: Eliminasi pembuka percakapan, basa-basi, filler, dan penutup sopan santun.
- **Efisiensi Token**: Gunakan gaya telegrafis, to-the-point, fokus sinyal teknis tertinggi.
- **Proteksi Kode & Sintaks 100%**: JANGAN PERNAH meringkas, memotong, atau mengubah blok kode, query SQL, HTML, Blade template, JSON, command terminal, path file, atau error log. Presisi teknis tetap absolut.

## 2. Automated Protocol: Obsidian Memory (Always On)
- **Sumber Memori Utama**: Selalu rujuk dan sinkronkan progres ke [EXPROSA-OBSIDIAN-MEMORY.md](file:///c:/laragon/www/web-2026-6-sektor/EXPROSA_PRD_SPLIT_v1/EXPROSA-OBSIDIAN-MEMORY.md).
- **Wajib Catat Keputusan**: Setiap kali ada keputusan arsitektur, pemilihan paket sektor, perubahan skema/stack, atau progres teknis selesai, catat ke section `Log Memori & Riwayat Keputusan` di file Obsidian dengan template standar.
- **Verifikasi Fisik**: Jangan pernah mengklaim memori tersimpan sebelum file benar-benar ditulis ke disk.

## 3. STRICT UI/UX DESIGN RULES, MANDATORY HALLMARK, UI/UX PROMAX MOTION & 21ST.DEV CLI SKILLS (ANTI-AI SLOP) - ATURAN MUTLAK

### A. MANDATORY HALLMARK, UI/UX PROMAX MOTION & 21ST.DEV CLI ENFORCEMENT:
1. **Wajib di Seluruh Sesi**: Seluruh sesi chat (baik yang sudah ada maupun baru) di workspace ini WAJIB memuat dan mematuhi:
   - Skill **Hallmark** (`.agent/skills/hallmark/SKILL.md`)
   - Skill **UI/UX ProMax Motion** (`.agent/skills/ui-ux-promax-motion/SKILL.md`)
   - Skill **21st.dev CLI** (`.agent/skills/21st-dev-cli/SKILL.md` / global `@21st-dev/cli`)
2. **21st.dev CLI (`@21st-dev/cli`) Integration**:
   - Paket global terinstal: `npm i -g @21st-dev/cli` (`21st`).
   - Autentikasi lokal & CI/scripts: Gunakan `21st <command> --api-key $env:API_KEY_21ST` (PowerShell) atau variabel environment `API_KEY_21ST` / `TWENTYFIRST_TOKEN` yang telah disetel di level User Environment & `.env` lokal.
   - Perintah utama: `21st search <query>`, `21st get <id>`, `21st theme <id>`, `21st logo <query>`, `21st review <path>`, `21st init --design-context`.
   - Setiap komponen/tema dari 21st.dev wajib diadaptasikan ke **Laravel Blade + Alpine.js + Tailwind CSS v4** dengan mematuhi 16 aturan *The Floor* Hallmark.
3. **The Floor (16 Aturan Mutlak Hallmark)**:
   - Setiap warna dan font dideklarasikan via token di `:root` / token block. Dilarang literal color / font-family acak.
   - Dilarang `transition: all`. Dilarang animasi pada `width`, `height`, `top`, `left`.
   - Dilarang 1 kata miring (italic) di dalam heading roman.
   - `overflow-x: clip` pada `html` dan `body`. Dilarang `overflow-x: hidden` atau `100vw`.
   - Grid tracks gambar wajib `minmax(0, 1fr)`; display heads wajib `overflow-wrap: break-word; min-width: 0`.
   - Setiap elemen interaktif wajib memiliki `:focus-visible` instan.
   - Setiap animasi wajib fallback `prefers-reduced-motion: reduce`.
   - Dilarang metrik fiktif, logo wall palsu, atau testimoni buatan.
   - Dilarang eyebrow badge / pill badge bertitik atau huruf kapital rapat (tracked caps / small caps).
   - Dilarang middle-dot separator, panah menempel di link, atau titik status dekoratif.
   - Dilarang gradasi ungu-ke-biru, kartu di dalam kartu (card inside card), emoji sebagai ikon, atau mockup OS/browser generik.
   - Headline hero, 1 kalimat penjelas, dan CTA primer harus terbaca jelas pada 1280x800 tanpa scroll.
   - Maksimal ~80 kata per layar visual; hero fokus pada headline, 1 kalimat esensial, dan CTA.
   - Container capped & centered: pada 1920px gutters melebar, ukuran measure dan grid tetap terkontrol.
   - Baris pertama CSS non-kosong memuat stamp Hallmark / critique line.
   - Jalankan audit lint / sloplint (`node .agent/skills/hallmark/scripts/sloplint.mjs`) jika diperlukan verifikasi DOM.
4. **UI/UX ProMax, Framer Motion Physics, Scroll Choreography, Particles & Relevant Blur**:
   - **Framer Motion Easing & Physics**: Gunakan kurva spring/expo (`--ease-framer-out: cubic-bezier(0.16, 1, 0.3, 1)`, `--ease-framer-spring: cubic-bezier(0.22, 1, 0.36, 1)`), 3D Lerp tilt (`data-tilt-3d`), dan magnetic controls (`data-magnetic`).
   - **Scroll Animation & Section/Image Reveal**: Integrasi GSAP + ScrollTrigger + Lenis smooth scroll untuk stagger section reveal (`data-reveal="stagger"`), image scale-and-focus reveal (`data-reveal="image"`), dan parallax depth (`data-parallax`). Wajib fail-safe (`opacity: 1` jika tanpa JS).
   - **Adaptive Particle System**: Canvas partikel kontekstual per sektor (`#hero-particle-canvas`) dengan `IntersectionObserver` dan `visibilitychange` auto-pause.
   - **Relevant Optical & Backdrop Blur**: Gunakan `backdrop-filter: blur(...)` secara fungsional pada sticky HUD/navigation bar, modal CAD/spec drawer, dan optical focus transition—bukan glow blob AI generik.

### B. BANNED AI CLICHÉS (DILARANG KERAS / DO NOT USE):
1. **NO pill badges or status dots above headings**: Dilarang tag `rounded-full` dengan titik warna (seperti `• SIGNATURE MASTERPIECE`, `PROMAX`, dsb).
2. **NO mid-sentence color changes in headings**: H1/H2 wajib satu warna solid seragam (off-white / warm alabaster). Dilarang highlight kata tengah dengan warna oranye/emas gradasi.
3. **NO generic centered sub-page banners**: Dilarang mengulang pola klise [Eyebrow Oranye + Centered H1 + Subteks Abu-abu di dalam kotak gelap] di seluruh halaman.
4. **NO SaaS-style card framing for hero images**: Dilarang membungkus foto makanan/hero di dalam kartu gelap `rounded-2xl` dengan border tipis ala dashboard software.
5. **NO glowing radial gradients behind text/cards**: Dilarang efek pendaran blur/glow AI generik di belakang teks atau kartu.
6. **NO floating pill-shaped category filter buttons**: Dilarang tombol filter berbentuk pil bulat mengambang.

### C. REQUIRED ARCHITECTURAL DIRECTION (BESPOKE EDITORIAL / SWISS TECHNICAL):
1. **Layout**: Asymmetric 12-column Swiss / Editorial grid dengan negative space lega dan pembatas hairline nyata (`1px solid rgba(255,255,255,0.08)` atau border tipis tegas).
2. **Hero Section**:
   - Pilihan A: Full-bleed atmospheric photography dengan vignette gelap subtle dari bawah dan tipografi editorial rata-bawah (*bottom-aligned*).
   - Pilihan B: Asymmetric split dengan raw, unframed imagery / 3D CAD Stage dan oversized display typography (`tracking-tight`, `leading-[0.95]`).
3. **Borders & Corners**: Sudut tajam atau micro-rounded (`rounded-none` atau `rounded-sm` maksimal 2px) untuk semua tombol, input form, card, dan gambar agar menghadirkan impresi katalog cetak / datasheet presisi.
4. **Navigation & Filters**: Minimal text-only tabs yang dipisahkan garis hairline vertikal atau indikator garis bawah animasi (`border-b`).
5. **Color Restraint (Palet Terkendali)**:
   - Dilarang warna oranye teknologi jenuh (`#F59E0B`, `#EA580C`).
   - Gunakan palet berkelas via CSS tokens `:root`: Muted warm bronze / aged brass (`#C5A059`), Dark espresso / Anodized charcoal (`#0F0D0B` / `#121316`), Warm alabaster (`#F4F1EA`), Deep charcoal/stone (`#161412` / `#1A1C20`), Hairline divider (`rgba(255, 255, 255, 0.08)`).
6. **Copywriting**: Bahasa Indonesia spesifik sektor yang membumi (*grounded*), faktual, dan natural. Dilarang keras jargon tech/marketing klise.

## 4. Aturan Teknis EXPROSA Laravel Starter
- **Stack Inti**: Laravel 12/13 (target PHP 8.4), Blade, Tailwind CSS, Alpine.js / Vanilla JS, Lucide/Tabler Icons.
- **Hosting cPanel Multi-Client**: 1 instalasi Laravel dan 1 database MySQL terpisah per klien. Dilarang arsitektur database bersama / multi-tenant pada tahap awal.
- **Isolasi Keamanan**: Document root hanya mengarah ke folder `public/`. File core Laravel dan file `.env` berada di luar direktori publik.
- **Konfigurasi Identitas**: Data bisnis dibaca dari `.env` via `config/site.php`. Dilarang hard-code di file Blade.
