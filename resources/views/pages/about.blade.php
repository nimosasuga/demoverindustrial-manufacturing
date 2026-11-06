<x-layouts.app
    title="Profil Perusahaan, Kebijakan NDA & FAQ Pengadaan"
    description="Profil PT Presisi Metalindo Teknik, komitmen manajemen mutu ISO 9001:2015, perlindungan HAKI/NDA gambar kerja klien, dan FAQ pengadaan B2B."
>
    <!-- Header -->
    <section class="py-16 border-b border-[var(--color-hairline)] blueprint-grid-bg relative overflow-hidden">
        <div
            data-parallax="0.14"
            aria-hidden="true"
            class="hidden lg:block absolute right-10 top-10 font-mono text-xs text-[var(--color-ink-muted)]/40 text-right select-none pointer-events-none"
        >
            <div>CORP // PT PRESISI METALINDO TEKNIK</div>
            <div>POLICY // MUTUAL NDA PROTECTION</div>
        </div>
        <div class="swiss-container relative z-10">
            <div class="max-w-3xl space-y-3">
                <div class="text-xs font-mono text-[var(--color-accent)]">
                    PROFIL KORPORAT // CIKARANG INDUSTRIAL ESTATE
                </div>
                <h1 class="font-display font-bold text-4xl sm:text-5xl text-[var(--color-ink)]">
                    Rekayasa Presisi &amp; Integritas Pengadaan
                </h1>
                <p class="text-base text-[var(--color-ink-secondary)]">
                    Beroperasi di Kawasan Industri Jababeka II dengan fokus tunggal pada ketepatan toleransi mikron, keterlacakan material, dan kepastian jadwal pengiriman B2B.
                </p>
            </div>
        </div>
    </section>

    <!-- Corporate Profile & NDA Protection -->
    <section class="py-20 border-b border-[var(--color-hairline)] bg-[var(--color-canvas)]">
        <div class="swiss-container">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
                <div class="lg:col-span-7 space-y-5 text-base text-[var(--color-ink-secondary)] leading-relaxed">
                    <h2 class="font-display font-bold text-2xl sm:text-3xl text-[var(--color-ink)]">
                        Mitra Manufaktur Kontrak (OEM / Make-to-Print)
                    </h2>
                    <p>
                        {{ config('site.name') }} didirikan untuk menjembatani kebutuhan industri nasional akan komponen mekanis presisi tinggi yang sebelumnya harus diimpor dengan waktu tunggu berminggu-minggu.
                    </p>
                    <p>
                        Dengan mengintegrasikan pusat pemesinan CNC 5-Axis simultan, CNC Swiss-Type Sliding Headstock Lathe, dan pemotongan Fiber Laser 6kW di bawah satu manajemen kualitas ISO 9001:2015, kami melayani pemesanan mulai dari prototipe R&amp;D (5 unit) hingga kontrak pasokan tahunan puluhan ribu unit.
                    </p>

                    <div class="corner-crosshair grid grid-cols-3 border border-[var(--color-hairline)] bg-[var(--color-surface)] divide-x divide-[var(--color-hairline)] pt-0">
                        <div class="p-4">
                            <div
                                data-counter="{{ $machineCount }}"
                                data-suffix=" Unit"
                                class="font-mono font-bold text-2xl text-[var(--color-accent)] tabular-nums"
                            >
                                {{ $machineCount }} Unit
                            </div>
                            <div class="text-xs text-[var(--color-ink-muted)] mt-1">Mesin Produksi &amp; QC</div>
                        </div>
                        <div class="p-4">
                            <div
                                data-counter="{{ $productCount }}"
                                data-suffix=" Lini"
                                class="font-mono font-bold text-2xl text-[var(--color-ink)] tabular-nums"
                            >
                                {{ $productCount }} Lini
                            </div>
                            <div class="text-xs text-[var(--color-ink-muted)] mt-1">Spesialisasi Komponen</div>
                        </div>
                        <div class="p-4">
                            <div
                                data-counter="100"
                                data-suffix="%"
                                class="font-mono font-bold text-2xl text-[var(--color-ink)] tabular-nums"
                            >
                                100%
                            </div>
                            <div class="text-xs text-[var(--color-ink-muted)] mt-1">Proteksi Dokumen NDA</div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5 space-y-4">
                    <div data-tilt-3d class="corner-crosshair border border-[var(--color-hairline-strong)] bg-[var(--color-surface)] p-6 sm:p-8 space-y-4">
                        <div class="tilt-glare" aria-hidden="true"></div>
                        <h3 class="font-display font-bold text-xl text-[var(--color-ink)]">
                            Kebijakan Kerahasiaan Gambar Kerja (NDA)
                        </h3>
                        <p class="text-sm text-[var(--color-ink-muted)] leading-relaxed">
                            Seluruh file CAD 3D (STEP/IGES), gambar 2D PDF, dan parameter perakitan milik klien disimpan di dalam server internal terenkripsi dengan akses terbatas hanya untuk tim CAM &amp; QC terkait.
                        </p>
                        <ul class="space-y-2 text-xs font-mono text-[var(--color-ink-secondary)]">
                            <li>1. Penandatanganan Mutual NDA sebelum pengiriman drawing.</li>
                            <li>2. Dilarang mempublikasikan foto komponen khusus klien tanpa izin tertulis.</li>
                            <li>3. Penyimpanan cetakan (dies/jig) khusus klien dengan asuransi penuh.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Procurement & Engineering FAQ Accordion -->
    <section
        x-data="{ openFaq: 0 }"
        class="py-20 bg-[var(--color-surface)]"
    >
        <div class="swiss-container">
            <div class="max-w-3xl pb-10">
                <h2 class="font-display font-bold text-3xl text-[var(--color-ink)]">
                    Pertanyaan Umum Pengadaan B2B (FAQ)
                </h2>
                <p class="text-sm text-[var(--color-ink-muted)] mt-2">
                    Jawaban teknis bagi tim Purchasing, Procurement, dan Engineer sebelum mengajukan RFQ.
                </p>
            </div>

            @php
                $faqs = [
                    [
                        'q' => 'Format file gambar kerja apa saja yang diterima untuk perhitungan penawaran (RFQ)?',
                        'a' => 'Untuk akurasi perhitungan waktu siklus mesin CNC 3D, kami menyarankan pengiriman model 3D dalam format STEP (.stp/.step), IGES (.igs), atau Parasolid (.x_t) yang didampingi gambar kerja 2D (.PDF/.DWG) untuk melihat spesifikasi toleransi GD&T, ulir, dan kekasaran permukaan.',
                    ],
                    [
                        'q' => 'Berapa Minimum Order Quantity (MOQ) dan apakah melayani pembuatan sampel prototipe?',
                        'a' => 'Kami melayani pembuatan prototipe rekayasa (R&D / First Article) mulai dari 1 hingga 5 unit tergantung jenis proses. Untuk produksi reguler CNC Swiss Turning, MOQ ekonomis berada pada 100–250 unit karena waktu setup bar feeder.',
                    ],
                    [
                        'q' => 'Apakah setiap pengiriman dilengkapi Sertifikat Material (MTC) dan Laporan Inspeksi QC?',
                        'a' => 'Ya. Setiap pengiriman batch produksi disertai Mill Test Certificate (MTC EN 10204 3.1) dari distributor baja/aluminium resmi serta Lembar Inspeksi Dimensi (Dimensional Inspection Report) dari laboratorium 3D CMM kami.',
                    ],
                    [
                        'q' => 'Bagaimana termin pembayaran (TOP) untuk perusahaan korporat B2B?',
                        'a' => 'Untuk pesanan perdana berlaku skema DP 50% saat PO diterbitkan dan pelunasan 50% setelah laporan QC FAI/Batch disetujui sebelum pengiriman. Bagi mitra kontrak rutin yang telah melewati verifikasi kredit, tersedia fasilitas TOP 30 hari dengan Faktur Pajak PPN resmi.',
                    ],
                ];
            @endphp

            <div class="corner-crosshair divide-y divide-[var(--color-hairline)] border border-[var(--color-hairline)] bg-[var(--color-canvas)]">
                @foreach ($faqs as $idx => $faq)
                    <div>
                        <button
                            type="button"
                            @click="openFaq = openFaq === {{ $idx }} ? -1 : {{ $idx }}"
                            :aria-expanded="(openFaq === {{ $idx }}).toString()"
                            class="w-full p-5 sm:p-6 text-left flex items-center justify-between gap-4 hover:bg-[var(--color-surface-elevated)] transition-colors cursor-pointer"
                        >
                            <span class="font-display font-semibold text-base sm:text-lg text-[var(--color-ink)]">
                                {{ $faq['q'] }}
                            </span>
                            <span class="font-mono text-sm text-[var(--color-accent)] shrink-0" x-text="openFaq === {{ $idx }} ? '−' : '+'">+</span>
                        </button>
                        <div
                            x-show="openFaq === {{ $idx }}"
                            class="px-5 sm:px-6 pb-6 text-sm text-[var(--color-ink-secondary)] leading-relaxed border-t border-[var(--color-hairline)] pt-4"
                        >
                            {{ $faq['a'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layouts.app>
