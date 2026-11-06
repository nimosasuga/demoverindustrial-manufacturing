<x-layouts.app
    title="Alur Kerja SOP Produksi & Standar Toleransi ISO 2768"
    description="Tahapan SOP produksi komponen B2B mulai dari review DFM, pembuatan prototipe First Article Inspection (FAI), pemesinan CNC, hingga inspeksi 3D CMM."
>
    <!-- Header -->
    <section class="py-16 border-b border-[var(--color-hairline)] blueprint-grid-bg relative overflow-hidden">
        <div
            data-parallax="0.16"
            aria-hidden="true"
            class="hidden lg:block absolute right-10 top-10 font-mono text-xs text-[var(--color-ink-muted)]/40 text-right select-none pointer-events-none"
        >
            <div>SOP // ISO-9001:2015</div>
            <div>TOLERANCE // ISO-2768-1</div>
        </div>
        <div class="swiss-container relative z-10">
            <div class="max-w-3xl space-y-3">
                <div class="text-xs font-mono text-[var(--color-accent)]">
                    STANDARD OPERATING PROCEDURE // QUALITY ASSURANCE
                </div>
                <h1 class="font-display font-bold text-4xl sm:text-5xl text-[var(--color-ink)]">
                    Alur Kerja Rekayasa &amp; QC SOP
                </h1>
                <p class="text-base text-[var(--color-ink-secondary)]">
                    Transparansi proses dari penerimaan gambar kerja CAD hingga serah terima komponen bebas cacat di gudang perakitan Anda.
                </p>
            </div>
        </div>
    </section>

    <!-- 5-Stage Detailed Engineering SOP with 21st.dev Scroll-Linked Vertical Timeline Beam -->
    <section class="py-20 border-b border-[var(--color-hairline)] bg-[var(--color-canvas)]">
        <div class="swiss-container">
            <div data-timeline-container class="relative pl-8 sm:pl-14 space-y-8">
                <!-- Scroll-Driven Vertical Laser Beam -->
                <div aria-hidden="true" class="timeline-beam-track absolute left-3.5 sm:left-5 top-3 bottom-3">
                    <div class="timeline-beam-fill"></div>
                </div>

                @php
                    $sopStages = [
                        [
                            'num' => '01',
                            'title' => 'Verifikasi Gambar Kerja (DFM) & NDA',
                            'lead' => 'SLA: 1×24 Jam Kerja',
                            'detail' => 'Tim Application Engineer memeriksa geometri 3D (STEP/IGES) dan toleransi GD&T pada gambar 2D PDF. Jika terdapat potensi penghematan biaya pemesinan atau risiko distorsi dinding tipis, kami melampirkan laporan Design for Manufacturing (DFM) sebelum harga dikunci.',
                            'deliverable' => 'Dokumen Penawaran Resmi + Perjanjian Kerahasiaan (NDA) + Rekomendasi DFM',
                        ],
                        [
                            'num' => '02',
                            'title' => 'Pemrograman CAM & First Article Inspection (FAI)',
                            'lead' => 'SLA: 3–5 Hari Kerja (Sampel Awal)',
                            'detail' => 'Penyusunan strategi toolpath 5-Axis menggunakan Mastercam/HyperMILL dengan simulasi tumbukan penuh. Untuk pesanan kontrak/massal, kami memproduksi 1–5 unit sampel awal (First Article) dan mengukur seluruh dimensi kritis sebelum produksi batch dimulai.',
                            'deliverable' => 'Sampel Fisik FAI + Lembar Pengukuran Dimensi Awal',
                        ],
                        [
                            'num' => '03',
                            'title' => 'Pengadaan Material Bersertifikat & Eksekusi CNC',
                            'lead' => 'In-Process QC Setiap 25 Unit',
                            'detail' => 'Bahan baku logam maupun engineering plastic dipasok dengan Mill Test Certificate (MTC EN 10204 3.1). Selama proses CNC Milling, Turning, atau Laser Cutting berlangsung, operator QC lini mencatat dimensi kunci pada grafik Statistical Process Control (SPC).',
                            'deliverable' => 'Salinan Sertifikat Material (MTC 3.1) + Log In-Process Inspection',
                        ],
                        [
                            'num' => '04',
                            'title' => 'Perlakuan Panas, Pelapisan Permukaan & CMM',
                            'lead' => 'Ruang Metrologi 20°C ±1°C',
                            'detail' => 'Komponen menjalani tahapan lanjutan sesuai spesifikasi: Vacuum Heat Treatment, Carburizing, Hard Anodizing Type III, Electropolishing, atau Powder Coating. Setelah selesai, dimensi akhir diverifikasi kembali menggunakan 3D CMM Mitutoyo.',
                            'deliverable' => 'Sertifikat Kekerasan (HRC) / Ketebalan Coating + Laporan PDF 3D CMM',
                        ],
                        [
                            'num' => '05',
                            'title' => 'Pembersihan Ultrasonik & Pengemasan VCI',
                            'lead' => 'Pengiriman Terjadwal Jabodetabek & Nasional',
                            'detail' => 'Seluruh komponen dicuci ultrasonik bebas sisa gram dan cairan pendingin. Komponen baja karbon dibungkus plastik VCI (Vapor Corrosion Inhibitor) dan partisi busa EPE kustom agar ulir maupun permukaan Ra 0.2 µm tidak tergores selama perjalanan.',
                            'deliverable' => 'Surat Jalan + Barcode Batch Lot + Berita Acara Serah Terima (BAST)',
                        ],
                    ];
                @endphp

                @foreach ($sopStages as $stage)
                    <article
                        data-tilt-3d
                        class="css-scroll-entry corner-crosshair relative border border-[var(--color-hairline)] bg-[var(--color-surface)] p-6 sm:p-8 grid grid-cols-1 lg:grid-cols-12 gap-6 items-start hover:border-[var(--color-accent)]"
                    >
                        <div class="tilt-glare" aria-hidden="true"></div>

                        <!-- Square Technical Timeline Node -->
                        <div
                            aria-hidden="true"
                            class="timeline-node-square absolute -left-8 sm:-left-13 top-7"
                        >
                            {{ $stage['num'] }}
                        </div>

                        <div class="lg:col-span-3 space-y-1">
                            <div class="font-mono font-bold text-2xl sm:text-3xl text-[var(--color-accent)] tabular-nums">
                                TAHAP {{ $stage['num'] }}
                            </div>
                            <div class="font-mono text-xs text-[var(--color-ink-muted)]">
                                {{ $stage['lead'] }}
                            </div>
                        </div>
                        <div class="lg:col-span-6 space-y-2">
                            <h2 class="font-display font-bold text-xl sm:text-2xl text-[var(--color-ink)]">
                                {{ $stage['title'] }}
                            </h2>
                            <p class="text-sm sm:text-base text-[var(--color-ink-secondary)] leading-relaxed">
                                {{ $stage['detail'] }}
                            </p>
                        </div>
                        <div class="lg:col-span-3 p-4 border border-[var(--color-hairline)] bg-[var(--color-canvas)] text-xs font-mono">
                            <span class="text-[var(--color-ink-muted)] block mb-1">Output Dokumen / Fisik:</span>
                            <span class="text-[var(--color-ink)]">{{ $stage['deliverable'] }}</span>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ISO 2768 Linear Tolerance Reference Table with 3D Container Scroll -->
    <section data-container-scroll class="py-20 bg-[var(--color-surface)] blueprint-subgrid-bg">
        <div class="swiss-container container-scroll-perspective space-y-6">
            <div data-container-scroll-header>
                <h2 id="iso-table-heading" class="font-display font-bold text-2xl sm:text-3xl text-[var(--color-ink)]">
                    Tabel Referensi Toleransi Umum ISO 2768-1 (Linear Dimensions)
                </h2>
                <p class="text-sm text-[var(--color-ink-muted)] mt-1">
                    Jika gambar kerja tidak mencantumkan toleransi khusus pada dimensi non-kritis, standar workshop kami mengacu pada kelas Fine (f) dan Medium (m).
                </p>
            </div>

            <div
                data-container-scroll-card
                tabindex="0"
                role="region"
                aria-labelledby="iso-table-heading"
                class="table-wrapper container-scroll-card corner-crosshair"
            >
                <table>
                    <caption class="sr-only">Tabel batas penyimpangan dimensi linear menurut standar ISO 2768-1</caption>
                    <thead>
                        <tr class="border-b border-[var(--color-hairline)] text-left text-xs font-mono text-[var(--color-ink-secondary)]">
                            <th scope="col" class="py-3 px-4">Kelas Presisi</th>
                            <th scope="col" class="py-3 px-4">0.5 – 3 mm</th>
                            <th scope="col" class="py-3 px-4">&gt;3 – 6 mm</th>
                            <th scope="col" class="py-3 px-4">&gt;6 – 30 mm</th>
                            <th scope="col" class="py-3 px-4">&gt;30 – 120 mm</th>
                            <th scope="col" class="py-3 px-4">&gt;120 – 400 mm</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[var(--color-hairline)] text-sm font-mono tabular-nums">
                        <tr>
                            <th scope="row" class="py-3.5 px-4 text-left text-[var(--color-accent)]">f (Fine / Halus)</th>
                            <td data-label="0.5 - 3 mm" class="py-3.5 px-4">±0.05 mm</td>
                            <td data-label=">3 - 6 mm" class="py-3.5 px-4">±0.05 mm</td>
                            <td data-label=">6 - 30 mm" class="py-3.5 px-4">±0.10 mm</td>
                            <td data-label=">30 - 120 mm" class="py-3.5 px-4">±0.15 mm</td>
                            <td data-label=">120 - 400 mm" class="py-3.5 px-4">±0.20 mm</td>
                        </tr>
                        <tr>
                            <th scope="row" class="py-3.5 px-4 text-left text-[var(--color-ink)]">m (Medium / Standar)</th>
                            <td data-label="0.5 - 3 mm" class="py-3.5 px-4">±0.10 mm</td>
                            <td data-label=">3 - 6 mm" class="py-3.5 px-4">±0.10 mm</td>
                            <td data-label=">6 - 30 mm" class="py-3.5 px-4">±0.20 mm</td>
                            <td data-label=">30 - 120 mm" class="py-3.5 px-4">±0.30 mm</td>
                            <td data-label=">120 - 400 mm" class="py-3.5 px-4">±0.50 mm</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-layouts.app>
