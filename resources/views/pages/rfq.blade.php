<x-layouts.app
    title="Request a Quote (RFQ) — Permintaan Penawaran B2B"
    description="Formulir pengajuan penawaran harga (RFQ) pemesinan CNC 5-Axis, CNC Turning, dan fabrikasi logam B2B beserta konsultasi gambar kerja."
>
    <!-- Header -->
    <section class="py-14 border-b border-[var(--color-hairline)] blueprint-grid-bg">
        <div class="swiss-container">
            <div class="max-w-3xl space-y-3">
                <div class="text-xs font-mono text-[var(--color-accent)]">
                    B2B PROCUREMENT PORTAL // SLA RESPON 1×24 JAM
                </div>
                <h1 class="font-display font-bold text-4xl sm:text-5xl text-[var(--color-ink)]">
                    Request for Quotation (RFQ)
                </h1>
                <p class="text-base text-[var(--color-ink-secondary)]">
                    Lengkapi parameter kebutuhan komponen Anda di bawah ini. Setelah dikirim, sistem akan menerbitkan Nomor Referensi RFQ resmi dan tautan pengiriman file CAD langsung ke tim Sales Engineering.
                </p>
            </div>
        </div>
    </section>

    <section class="py-16 bg-[var(--color-canvas)]">
        <div class="swiss-container">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
                <!-- Left: Comprehensive RFQ Form (8 Cols) -->
                <div class="lg:col-span-8">
                    <form
                        action="{{ route('rfq.store') }}"
                        method="POST"
                        class="border border-[var(--color-hairline)] bg-[var(--color-surface)] p-6 sm:p-10 space-y-6"
                    >
                        @csrf

                        <!-- Honeypot Spam Protection -->
                        <div class="hidden" aria-hidden="true">
                            <label for="industrial_hp_check">Jangan diisi jika Anda manusia</label>
                            <input type="text" id="industrial_hp_check" name="industrial_hp_check" tabindex="-1" autocomplete="off">
                        </div>

                        @if ($errors->any())
                            <div role="alert" class="p-4 border border-[var(--color-danger)] bg-[var(--color-canvas)] text-sm text-[var(--color-ink)]">
                                <div class="font-semibold text-[var(--color-danger)] mb-1">Mohon periksa kembali data isian Anda:</div>
                                <ul class="list-disc list-inside text-xs space-y-1">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="border-b border-[var(--color-hairline)] pb-3">
                            <h2 class="font-display font-bold text-xl text-[var(--color-ink)]">
                                1. Identitas Perusahaan &amp; PIC Pengadaan
                            </h2>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="company_name" class="block text-xs font-mono text-[var(--color-ink-secondary)] mb-2">
                                    Nama Perusahaan / Instansi *
                                </label>
                                <input
                                    id="company_name"
                                    type="text"
                                    name="company_name"
                                    value="{{ old('company_name') }}"
                                    required
                                    placeholder="PT Manufaktur Nusantara Tbk"
                                    class="input-technical"
                                >
                            </div>

                            <div>
                                <label for="contact_name" class="block text-xs font-mono text-[var(--color-ink-secondary)] mb-2">
                                    Nama Lengkap PIC *
                                </label>
                                <input
                                    id="contact_name"
                                    type="text"
                                    name="contact_name"
                                    value="{{ old('contact_name') }}"
                                    required
                                    placeholder="Ir. Hendra Wijaya"
                                    class="input-technical"
                                >
                            </div>

                            <div>
                                <label for="job_title" class="block text-xs font-mono text-[var(--color-ink-secondary)] mb-2">
                                    Jabatan / Divisi
                                </label>
                                <input
                                    id="job_title"
                                    type="text"
                                    name="job_title"
                                    value="{{ old('job_title') }}"
                                    placeholder="Procurement Manager / R&D Engineer"
                                    class="input-technical"
                                >
                            </div>

                            <div>
                                <label for="email" class="block text-xs font-mono text-[var(--color-ink-secondary)] mb-2">
                                    Email Korporat *
                                </label>
                                <input
                                    id="email"
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    placeholder="procurement@perusahaan.co.id"
                                    class="input-technical"
                                >
                            </div>

                            <div>
                                <label for="whatsapp" class="block text-xs font-mono text-[var(--color-ink-secondary)] mb-2">
                                    Nomor Telepon / WhatsApp Aktif *
                                </label>
                                <input
                                    id="whatsapp"
                                    type="text"
                                    name="whatsapp"
                                    value="{{ old('whatsapp') }}"
                                    required
                                    placeholder="081234567890"
                                    class="input-technical font-mono"
                                >
                            </div>

                            <div>
                                <label for="delivery_location" class="block text-xs font-mono text-[var(--color-ink-secondary)] mb-2">
                                    Kota / Kawasan Industri Tujuan Kirim *
                                </label>
                                <input
                                    id="delivery_location"
                                    type="text"
                                    name="delivery_location"
                                    value="{{ old('delivery_location') }}"
                                    required
                                    placeholder="Kawasan Industri MM2100 Cikarang / Karawang"
                                    class="input-technical"
                                >
                            </div>
                        </div>

                        <div class="border-b border-[var(--color-hairline)] pb-3 pt-4">
                            <h2 class="font-display font-bold text-xl text-[var(--color-ink)]">
                                2. Spesifikasi Komponen &amp; Skala Produksi
                            </h2>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="product_service" class="block text-xs font-mono text-[var(--color-ink-secondary)] mb-2">
                                    Layanan / Jenis Komponen *
                                </label>
                                <input
                                    id="product_service"
                                    type="text"
                                    name="product_service"
                                    list="product-suggestions"
                                    value="{{ old('product_service', $selectedProduct) }}"
                                    required
                                    placeholder="Pilih atau ketik jenis komponen..."
                                    class="input-technical"
                                >
                                <datalist id="product-suggestions">
                                    <option value="CNC 5-Axis Milling Custom Part"></option>
                                    <option value="CNC Swiss Turning Shaft / Pin"></option>
                                    <option value="Sheet Metal Laser Cutting & Bending"></option>
                                    <option value="Checking Fixture & Welding Jig"></option>
                                    @foreach ($products as $p)
                                        <option value="{{ $p->name }} ({{ $p->sku_code }})"></option>
                                    @endforeach
                                </datalist>
                            </div>

                            <div>
                                <label for="material_grade" class="block text-xs font-mono text-[var(--color-ink-secondary)] mb-2">
                                    Spesifikasi Grade Material *
                                </label>
                                <input
                                    id="material_grade"
                                    type="text"
                                    name="material_grade"
                                    value="{{ old('material_grade', $selectedMaterial) }}"
                                    required
                                    placeholder="Mis. SUS316L, Al 6061-T6, S45C, SKD11"
                                    class="input-technical"
                                >
                            </div>

                            <div>
                                <label for="estimated_quantity" class="block text-xs font-mono text-[var(--color-ink-secondary)] mb-2">
                                    Estimasi Kuantitas / Skala Batch *
                                </label>
                                <select
                                    id="estimated_quantity"
                                    name="estimated_quantity"
                                    required
                                    class="input-technical"
                                >
                                    <option value="">-- Pilih Skala Kuantitas --</option>
                                    <option value="Prototype / First Article (1 - 10 Unit)" @selected(old('estimated_quantity') === 'Prototype / First Article (1 - 10 Unit)')>Prototype / First Article (1 - 10 Unit)</option>
                                    <option value="Small Batch (11 - 100 Unit)" @selected(old('estimated_quantity') === 'Small Batch (11 - 100 Unit)')>Small Batch (11 - 100 Unit)</option>
                                    <option value="Medium Production (101 - 1.000 Unit)" @selected(old('estimated_quantity') === 'Medium Production (101 - 1.000 Unit)')>Medium Production (101 - 1.000 Unit)</option>
                                    <option value="Mass Contract (1.000+ Unit / Bulan)" @selected(old('estimated_quantity') === 'Mass Contract (1.000+ Unit / Bulan)')>Mass Contract (1.000+ Unit / Bulan)</option>
                                </select>
                            </div>

                            <div>
                                <label for="tolerance_requirement" class="block text-xs font-mono text-[var(--color-ink-secondary)] mb-2">
                                    Target Toleransi &amp; Surface Finish
                                </label>
                                <input
                                    id="tolerance_requirement"
                                    type="text"
                                    name="tolerance_requirement"
                                    value="{{ old('tolerance_requirement') }}"
                                    placeholder="Mis. ±0.01 mm · Hard Anodized Black"
                                    class="input-technical font-mono"
                                >
                            </div>

                            <div class="sm:col-span-2">
                                <label for="target_deadline" class="block text-xs font-mono text-[var(--color-ink-secondary)] mb-2">
                                    Target Jadwal Pengiriman / Lead Time yang Diharapkan
                                </label>
                                <input
                                    id="target_deadline"
                                    type="text"
                                    name="target_deadline"
                                    value="{{ old('target_deadline') }}"
                                    placeholder="Mis. 14 Hari Kerja setelah PO / Urgent लाइन Stop"
                                    class="input-technical"
                                >
                            </div>

                            <div class="sm:col-span-2">
                                <label for="drawing_link_or_notes" class="block text-xs font-mono text-[var(--color-ink-secondary)] mb-2">
                                    Tautan File Gambar Kerja (Google Drive / OneDrive STEP, DWG, PDF) &amp; Catatan Teknis
                                </label>
                                <textarea
                                    id="drawing_link_or_notes"
                                    name="drawing_link_or_notes"
                                    rows="4"
                                    placeholder="Cantumkan link folder gambar kerja 3D/2D atau tulis rincian dimensi, perlakuan panas (HRC), dan kebutuhan sertifikat MTC 3.1..."
                                    class="input-technical"
                                >{{ old('drawing_link_or_notes') }}</textarea>
                            </div>

                            <div class="sm:col-span-2 pt-2">
                                <label class="flex items-start gap-3 cursor-pointer">
                                    <input
                                        type="checkbox"
                                        name="nda_requested"
                                        value="1"
                                        @checked(old('nda_requested'))
                                        class="mt-1 w-4 h-4 accent-[var(--color-accent)]"
                                    >
                                    <span class="text-xs sm:text-sm text-[var(--color-ink-secondary)]">
                                        Kami meminta pengiriman draf <strong class="text-[var(--color-ink)]">Mutual Non-Disclosure Agreement (NDA)</strong> untuk perlindungan kerahasiaan gambar kerja proyek ini.
                                    </span>
                                </label>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-[var(--color-hairline)] flex flex-col sm:flex-row items-center justify-between gap-4">
                            <span class="text-xs font-mono text-[var(--color-ink-muted)]">
                                Data dienkripsi &amp; hanya diakses oleh tim Estimator CNC.
                            </span>
                            <button type="submit" data-magnetic class="btn-technical-primary w-full sm:w-auto">
                                <i data-lucide="file-check" class="w-4 h-4" aria-hidden="true"></i>
                                <span>Kirim Permintaan Penawaran (RFQ)</span>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Right Sidebar: Direct Engineering Specs & Checklist (4 Cols) -->
                <div class="lg:col-span-4 space-y-6">
                    <div data-tilt-3d class="border border-[var(--color-hairline-strong)] bg-[var(--color-surface)] p-6 space-y-4">
                        <div class="tilt-glare" aria-hidden="true"></div>
                        <h3 class="font-display font-bold text-xl text-[var(--color-ink)]">
                            Panduan Kelengkapan Drawing
                        </h3>
                        <p class="text-sm text-[var(--color-ink-muted)] leading-relaxed">
                            Agar kalkulasi harga dan waktu siklus CNC presisi, pastikan informasi berikut tercantum:
                        </p>
                        <ul class="space-y-2.5 text-xs font-mono text-[var(--color-ink-secondary)]">
                            <li>1. File 3D CAD (.STEP / .IGES) untuk geometri kontur.</li>
                            <li>2. File 2D (.PDF) untuk toleransi lubang H7, ulir, dan kekasaran Ra.</li>
                            <li>3. Spesifikasi perlakukan panas (HRC) atau anodizing/plating.</li>
                            <li>4. Rencana volume batch atau jadwal rilis pengiriman bulanan.</li>
                        </ul>
                    </div>

                    <div class="border border-[var(--color-hairline)] bg-[var(--color-surface)] p-6 space-y-3">
                        <h3 class="font-display font-bold text-lg text-[var(--color-ink)]">
                            Jalur Cepat WhatsApp Engineering
                        </h3>
                        <p class="text-xs text-[var(--color-ink-muted)] leading-relaxed">
                            Ingin mengirim file PDF drawing langsung melalui chat WhatsApp kepada Senior Estimator kami?
                        </p>
                        <a
                            href="https://wa.me/{{ config('site.whatsapp') }}"
                            target="_blank"
                            rel="noopener"
                            class="btn-technical-outline w-full text-xs"
                        >
                            <i data-lucide="phone-call" class="w-4 h-4 text-[var(--color-accent)]" aria-hidden="true"></i>
                            <span>Chat Estimator ({{ config('site.phone') }})</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
