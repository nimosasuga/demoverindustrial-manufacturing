# PT Presisi Metalindo Teknik — EXPROSA Sektor 05 (Industrial & Manufacturing)

Website B2B manufaktur komponen presisi, pemesinan **CNC 5-Axis Milling**, **CNC Swiss Turning**, fabrikasi **Sheet Metal Fiber Laser 6kW**, pembuatan **Dies/Jig Fixture**, dan laboratorium inspeksi **3D CMM Mitutoyo**.

Dibangun di atas fondasi **EXPROSA Laravel Starter** dengan standar visual **Swiss Technical & Industrial Editorial**, **Hallmark v2.0.0 (The Floor)**, **UI/UX ProMax Motion**, dan **PRD Addendum Premium Adaptive 3D v1.1**.

---

## Fitur Utama (IM-01 s/d IM-09)

- **Interactive 3D CAD / CNC Metrology Stage**: Hero stage 3D responsif 60fps dengan Lerp pointer physics, rotating vernier calibration ring, dynamic spotlight glare, dan switcher sampel komponen (`PMT-5X-0104`, `PMT-5X-0209`, `PMT-ST-0312`).
- **Adaptive Metallic Spark & Laser Dust Particles (`#hero-particle-canvas`)**: Sistem partikel kanvas adaptif (Desktop/Tablet/Mobile) dengan penghentian otomatis berbasis `IntersectionObserver` dan `visibilitychange`.
- **Katalog Komponen & Kemampuan Manufaktur (`/produk` & `/produk/{slug}`)**: Filter kategori text-only instan, pencarian kode SKU/material, datasheet teknis lengkap, serta **Kalkulator Estimasi Lead Time Batch** interaktif.
- **Inventaris Mesin & Laboratorium 3D CMM (`/fasilitas-mesin`)**: Tabel spesifikasi mesin produksi aktual dengan sticky headers dan container query responsif (`@container (width < 600px)`).
- **Alur Kerja Rekayasa & QC SOP 5-Tahap (`/alur-kerja`)**: Protokol *Design for Manufacturing* (DFM), *First Article Inspection* (FAI), hingga tabel referensi toleransi linear **ISO 2768-1**.
- **Portofolio Batch Produksi B2B (`/portofolio`)**: Studi kasus terverifikasi lintas sektor industri (Otomotif Tier-2, Otomasi Pabrik, Pengolahan Pangan, Hidrolik, Telekomunikasi).
- **Portal Request a Quote — RFQ (`/request-quote`)**: Formulir penawaran B2B dengan proteksi spam honeypot (`industrial_hp_check`), opsi permintaan dokumen **Mutual NDA**, generator nomor tiket otomatis (`RFQ-YYYYMMDD-XXXX`), dan kompilator pesan WhatsApp Sales Engineering.
- **Lembar Vendor Registration / Unduh Katalog (`/unduh-katalog`)**: Ringkasan datasheet kapabilitas perusahaan siap cetak / simpan sebagai PDF.

---

## Tech Stack

- **Backend**: Laravel 12/13 (PHP 8.4)
- **Database**: MySQL / MariaDB (`exprosa_industrial_demo` — terisolasi per klien) & SQLite in-memory untuk automated testing
- **Frontend**: Laravel Blade, Tailwind CSS v4 (`@tailwindcss/vite`), Alpine.js, Lucide Icons
- **Motion & 3D**: GSAP + ScrollTrigger, Lenis Smooth Scroll, CSS 3D Transforms, HTML5 Canvas

---

## Instalasi Lokal (Laragon / Lingkungan Development)

```bash
# 1. Install dependensi PHP & Node
composer install
npm install

# 2. Salin konfigurasi environment
cp .env.example .env
php artisan key:generate

# 3. Jalankan migrasi & seeder data manufaktur
php artisan migrate:fresh --seed

# 4. Build aset produksi Vite
npm run build

# 5. Jalankan automated test suite (PHPUnit)
php artisan test --filter=IndustrialDemoTest
```

---

## Konfigurasi Identitas Bisnis (`config/site.php`)

Seluruh informasi kontak, nomor WhatsApp Sales Engineering, alamat kawasan industri, jam operasional pabrik vs kantor, dan sertifikasi ISO dikelola terpusat melalui variabel `SITE_*` di `.env` yang dibaca oleh `config/site.php`.
