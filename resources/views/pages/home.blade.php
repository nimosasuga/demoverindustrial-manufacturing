<x-layouts.app
    title="Pemesinan CNC 5-Axis & Fabrikasi Logam Presisi B2B"
    description="Mitra manufaktur komponen CNC 5-Axis, CNC Swiss Turning, dan fabrikasi sheet metal laser untuk pengadaan industri B2B dengan akurasi mikron ±0.005 mm."
>
    <!-- 1. HERO SECTION: SWISS TECHNICAL SPLIT + 3D INTERACTIVE CAD/CNC STAGE -->
    <section
        x-data="{
            activePart: 0,
            parts: [
                {
                    code: 'PMT-5X-0104',
                    name: 'Impeller Turbin Kompresor 5-Axis',
                    material: 'Aluminium Billet 7075-T6 · Hard Anodized',
                    tolerance: '±0.005 mm',
                    roughness: 'Ra 0.4 µm',
                    cycle: '42 Menit / Unit (DMG MORI DMU 50)',
                    axis: '5-Axis Simultaneous Contouring',
                    image: 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=1000&q=80'
                },
                {
                    code: 'PMT-5X-0209',
                    name: 'Blok Manifold Hidrolik 350 Bar',
                    material: 'Carbon Steel S45C · Electroless Nickel',
                    tolerance: '±0.008 mm',
                    roughness: 'Ra 0.8 µm',
                    cycle: '65 Menit / Unit (5-Axis Deep Bore)',
                    axis: 'Multi-Cavity High-Pressure Drilling',
                    image: 'https://images.unsplash.com/photo-1565043589221-1a6fd9ae45c7?auto=format&fit=crop&w=1000&q=80'
                },
                {
                    code: 'PMT-ST-0312',
                    name: 'Poros Transmisi & Pinion Gear',
                    material: 'Alloy Steel SCM440 · HRC 60 Case Hardened',
                    tolerance: '±0.005 mm',
                    roughness: 'Ra 0.2 µm',
                    cycle: '18 Menit / Unit (Citizen Swiss Lathe)',
                    axis: 'Swiss Sliding Headstock + Live Tooling',
                    image: 'https://images.unsplash.com/photo-1537462715879-360eeb61a0ad?auto=format&fit=crop&w=1000&q=80'
                }
            ]
        }"
        class="relative min-h-[calc(100svh-4.5rem)] flex items-center border-b border-[var(--color-hairline)] blueprint-grid-bg overflow-hidden py-10 lg:py-16"
    >
        <!-- Adaptive Metallic Spark & Laser Dust Canvas (Paused automatically off-screen) -->
        <canvas
            id="hero-particle-canvas"
            aria-hidden="true"
            class="absolute inset-0 w-full h-full pointer-events-none z-0"
        ></canvas>

        <!-- Parallax Architectural Blueprint Coordinate Watermark -->
        <div
            data-parallax="0.18"
            aria-hidden="true"
            class="hidden lg:block absolute right-8 top-8 font-mono text-[11px] text-[var(--color-ink-muted)]/40 select-none pointer-events-none text-right space-y-1"
        >
            <div>GRID // ISO-2768-FINE</div>
            <div>PLANT // CIKARANG JABABEKA II</div>
            <div>LAB // 20.0°C ±1.0°C</div>
        </div>

        <div class="swiss-container relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                <!-- Left Column: Headline (<=7 words), 1 Sentence (<=12 words), Primary & Secondary Actions (Cols 1-6) -->
                <div class="lg:col-span-6 space-y-6">
                    <div class="inline-flex items-center gap-3 px-3.5 py-1.5 border border-[var(--color-hairline-strong)] bg-[var(--color-surface)] text-xs font-mono text-[var(--color-ink-secondary)]">
                        <span class="text-[var(--color-accent)]">DOC-05</span>
                        <span class="text-[var(--color-hairline-strong)]">|</span>
                        <span>ISO 9001:2015</span>
                        <span class="text-[var(--color-hairline-strong)]">|</span>
                        <span>Toleransi ±0.005 mm</span>
                    </div>

                    <h1 class="font-display font-bold text-4xl sm:text-5xl xl:text-[3.65rem] leading-[1.02] tracking-tight text-[var(--color-ink)]">
                        Manufaktur Presisi Komponen Industri B2B.
                    </h1>

                    <p class="text-base sm:text-lg text-[var(--color-ink-secondary)] max-w-xl leading-relaxed">
                        Pemesinan CNC 5-Axis dan fabrikasi logam terukur sesuai gambar kerja Anda.
                    </p>

                    <div class="flex flex-wrap items-center gap-4 pt-2">
                        <a
                            href="{{ route('rfq') }}"
                            data-magnetic
                            class="btn-technical-primary"
                        >
                            <i data-lucide="file-check-2" class="w-4 h-4" aria-hidden="true"></i>
                            <span>Ajukan Penawaran RFQ</span>
                        </a>

                        <a
                            href="{{ route('products') }}"
                            data-magnetic
                            class="btn-technical-outline"
                        >
                            <i data-lucide="layers" class="w-4 h-4 text-[var(--color-accent)]" aria-hidden="true"></i>
                            <span>Lihat Katalog Spesifikasi</span>
                        </a>
                    </div>

                    <!-- Key Verifiable Metrology Figures with Scroll-Triggered Tabular Counters -->
                    <div class="corner-crosshair grid grid-cols-3 border border-[var(--color-hairline)] bg-[var(--color-surface)] divide-x divide-[var(--color-hairline)] pt-0">
                        <div class="p-3.5 sm:p-4">
                            <div
                                data-counter="18"
                                data-suffix=" Unit"
                                class="font-mono font-semibold text-xl sm:text-2xl text-[var(--color-ink)] tabular-nums"
                            >
                                18 Unit
                            </div>
                            <div class="text-xs text-[var(--color-ink-muted)] mt-0.5">Mesin CNC &amp; CMM</div>
                        </div>
                        <div class="p-3.5 sm:p-4">
                            <div
                                data-counter="0.005"
                                data-decimals="3"
                                data-prefix="±"
                                data-suffix=" mm"
                                class="font-mono font-semibold text-xl sm:text-2xl text-[var(--color-accent)] tabular-nums"
                            >
                                ±0.005 mm
                            </div>
                            <div class="text-xs text-[var(--color-ink-muted)] mt-0.5">Akurasi Posisi</div>
                        </div>
                        <div class="p-3.5 sm:p-4">
                            <div
                                data-counter="100"
                                data-suffix="% FAI"
                                class="font-mono font-semibold text-xl sm:text-2xl text-[var(--color-ink)] tabular-nums"
                            >
                                100% FAI
                            </div>
                            <div class="text-xs text-[var(--color-ink-muted)] mt-0.5">Laporan 3D CMM</div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Interactive 3D CAD / CNC Metrology Stage (Cols 7-12) -->
                <div class="lg:col-span-6">
                    <div id="hero-3d-stage-wrapper" class="stage-3d-perspective relative">
                        <div
                            id="hero-3d-stage-card"
                            class="stage-3d-card corner-crosshair relative border border-[var(--color-hairline-strong)] bg-[var(--color-surface)] p-4 sm:p-6"
                        >
                            <!-- Specular Dynamic Glare -->
                            <div id="hero-stage-spotlight" class="tilt-glare" aria-hidden="true"></div>

                            <!-- Rotating Brass Vernier Calibration Ring (Background Z-Layer) -->
                            <svg
                                aria-hidden="true"
                                class="vernier-ring-spin absolute -top-10 -right-10 w-44 h-44 text-[var(--color-accent)] opacity-20 pointer-events-none"
                                viewBox="0 0 200 200"
                                fill="none"
                            >
                                <circle cx="100" cy="100" r="88" stroke="currentColor" stroke-width="1" stroke-dasharray="4 6" />
                                <circle cx="100" cy="100" r="72" stroke="currentColor" stroke-width="1" />
                                <line x1="100" y1="4" x2="100" y2="24" stroke="currentColor" stroke-width="1.5" />
                                <line x1="100" y1="176" x2="100" y2="196" stroke="currentColor" stroke-width="1.5" />
                                <line x1="4" y1="100" x2="24" y2="100" stroke="currentColor" stroke-width="1.5" />
                                <line x1="176" y1="100" x2="196" y2="100" stroke="currentColor" stroke-width="1.5" />
                            </svg>

                            <!-- Stage Header Bar -->
                            <div class="flex items-center justify-between pb-3 mb-4 border-b border-[var(--color-hairline)] text-xs font-mono">
                                <span class="text-[var(--color-accent)]" x-text="'CAD-SPEC // ' + parts[activePart].code">CAD-SPEC // PMT-5X-0104</span>
                                <span class="text-[var(--color-ink-muted)]" x-text="parts[activePart].cycle">42 Menit / Unit (DMG MORI DMU 50)</span>
                            </div>

                            <!-- Primary Component Image Slot (LCP Optimized with fetchpriority="high" on initial slide) -->
                            <div class="relative aspect-[16/10] overflow-hidden border border-[var(--color-hairline)] bg-[var(--color-canvas)]" data-stage-depth="35">
                                <template x-for="(part, idx) in parts" :key="part.code">
                                    <img
                                        x-show="activePart === idx"
                                        :src="part.image"
                                        :alt="part.name"
                                        :fetchpriority="idx === 0 ? 'high' : 'low'"
                                        :loading="idx === 0 ? 'eager' : 'lazy'"
                                        width="800"
                                        height="500"
                                        class="w-full h-full object-cover"
                                    >
                                </template>

                                <!-- Floating Z-Depth Telemetry Overlay -->
                                <div
                                    data-stage-depth="65"
                                    class="absolute bottom-3 left-3 right-3 p-3.5 border border-[var(--color-hairline-strong)] hud-blur-bar flex flex-col sm:flex-row sm:items-center justify-between gap-2"
                                >
                                    <div>
                                        <div class="font-display font-semibold text-sm text-[var(--color-ink)]" x-text="parts[activePart].name">
                                            Impeller Turbin Kompresor 5-Axis
                                        </div>
                                        <div class="font-mono text-xs text-[var(--color-ink-secondary)]" x-text="parts[activePart].material">
                                            Aluminium Billet 7075-T6 · Hard Anodized
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2 font-mono text-xs shrink-0">
                                        <span class="px-2 py-1 bg-[var(--color-canvas)] border border-[var(--color-accent)] text-[var(--color-accent)] tabular-nums" x-text="parts[activePart].tolerance">
                                            ±0.005 mm
                                        </span>
                                        <span class="px-2 py-1 bg-[var(--color-canvas)] border border-[var(--color-hairline)] text-[var(--color-ink)] tabular-nums" x-text="parts[activePart].roughness">
                                            Ra 0.4 µm
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Text-Only Component Stage Switcher (No Floating Pill Clichés) -->
                            <div class="mt-4 pt-3 border-t border-[var(--color-hairline)] flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                                <span class="text-xs font-mono text-[var(--color-ink-muted)]">Pilih Sampel Komponen:</span>
                                <div class="flex items-center divide-x divide-[var(--color-hairline)] border border-[var(--color-hairline)] bg-[var(--color-canvas)]">
                                    <template x-for="(part, idx) in parts" :key="part.code">
                                        <button
                                            type="button"
                                            @click="activePart = idx"
                                            class="px-3 py-1.5 text-xs font-mono transition-colors cursor-pointer"
                                            :class="activePart === idx ? 'bg-[var(--color-accent)] text-[var(--color-accent-ink)] font-semibold' : 'text-[var(--color-ink-secondary)] hover:text-[var(--color-ink)]'"
                                            x-text="part.code"
                                        ></button>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- KINETIC TECHNICAL SPECIFICATION RIBBON (Pauses on hover/focus or reduced-motion) -->
    <div class="border-b border-[var(--color-hairline)] bg-[var(--color-surface)] overflow-hidden py-3" aria-label="Standar Metrologi dan Kapabilitas Pabrik">
        <div class="velocity-marquee-track flex items-center gap-10 font-mono text-xs text-[var(--color-ink-secondary)]">
            @for ($loopIdx = 0; $loopIdx < 2; $loopIdx++)
                <div class="flex items-center gap-10 shrink-0 px-4">
                    <span class="inline-flex items-center gap-2">
                        <span class="text-[var(--color-accent)]">[01]</span>
                        <span>ISO 9001:2015 QUALITY MANAGEMENT</span>
                    </span>
                    <span class="inline-flex items-center gap-2">
                        <span class="text-[var(--color-accent)]">[02]</span>
                        <span>DMG MORI 5-AXIS SIMULTANEOUS MILLING</span>
                    </span>
                    <span class="inline-flex items-center gap-2">
                        <span class="text-[var(--color-accent)]">[03]</span>
                        <span>CITIZEN CINCOM SWISS SLIDING HEADSTOCK</span>
                    </span>
                    <span class="inline-flex items-center gap-2">
                        <span class="text-[var(--color-accent)]">[04]</span>
                        <span>TRUMPF 6KW FIBER LASER SHEET METAL</span>
                    </span>
                    <span class="inline-flex items-center gap-2">
                        <span class="text-[var(--color-accent)]">[05]</span>
                        <span>MITUTOYO CRYSTA-APEX 3D CMM LAB (20°C ±1°C)</span>
                    </span>
                    <span class="inline-flex items-center gap-2">
                        <span class="text-[var(--color-accent)]">[06]</span>
                        <span>MILL TEST CERTIFICATE EN 10204 3.1</span>
                    </span>
                </div>
            @endfor
        </div>
    </div>

    <!-- 2. PINNED SCROLLYTELLING ARCHITECTURE + 21ST.DEV 3D CONTAINER SCROLL STAGE -->
    <section
        data-container-scroll
        x-data="{
            activeCap: 0,
            caps: [
                {
                    code: 'CAP-01',
                    title: 'CNC 5-Axis Milling',
                    machine: 'DMG MORI DMU 50 & Mazak VTC-300C',
                    spec: 'Work Envelope 650×520×475 mm · ±0.004 mm',
                    roughness: 'Ra 0.4 µm',
                    desc: 'Pemesinan kontur simultan 5-sumbu untuk impeller, housing aerodinamis, dan blok manifold tanpa kesalahan pindah cekam.',
                    deliverable: 'Komponen Billet Presisi + Laporan Koordinat 3D CMM',
                    image: 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=900&q=80'
                },
                {
                    code: 'CAP-02',
                    title: 'CNC Swiss Turning',
                    machine: 'Citizen Cincom L20-XII (7-Axis)',
                    spec: 'Diameter Ø 4 mm – Ø 42 mm · Live Tooling',
                    roughness: 'Ra 0.2 µm',
                    desc: 'Pembubutan otomatis berkecepatan tinggi dengan bar feeder 24 jam untuk poros presisi, pin konektor, dan fitting ulir.',
                    deliverable: 'Batch Volume 250–50.000 Pcs + Grafik Kontrol SPC',
                    image: 'https://images.unsplash.com/photo-1537462715879-360eeb61a0ad?auto=format&fit=crop&w=900&q=80'
                },
                {
                    code: 'CAP-03',
                    title: 'Sheet Metal & Laser 6kW',
                    machine: 'Trumpf TruLaser 3030 & Amada Press Brake',
                    spec: 'Meja 3.000×1.500 mm · Bending 80 Ton',
                    roughness: 'Burr-Free Edge ±0.08 mm',
                    desc: 'Pemotongan laser serat optik dan penekukan CNC presisi untuk kabinet panel kontrol, chassis server, dan hopper stainless.',
                    deliverable: 'Enclosure IP65 Welding TIG + Powder Coating',
                    image: 'https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?auto=format&fit=crop&w=900&q=80'
                },
                {
                    code: 'CAP-04',
                    title: 'Dies, Jig & Wire EDM',
                    machine: 'Sodick ALN600G Linear Motor Wire EDM',
                    spec: 'Sodick Linear EDM · Akurasi ±0.002 mm',
                    roughness: 'Ra 0.15 µm Mirror Finish',
                    desc: 'Rancang bangun progressive stamping dies, welding jig otomotif, dan checking fixture terkalibrasi 3D CMM.',
                    deliverable: 'Tooling SKD11 HRC 60 + Sertifikat Kalibrasi Datum',
                    image: 'https://images.unsplash.com/photo-1581092335397-9583fe92d232?auto=format&fit=crop&w=900&q=80'
                }
            ]
        }"
        @scrolly-step-active.window="activeCap = $event.detail.index"
        class="py-24 border-b border-[var(--color-hairline)] bg-[var(--color-canvas)] relative"
    >
        <div class="swiss-container">
            <!-- Section Header with Container Scroll Translation -->
            <div data-container-scroll-header class="grid grid-cols-1 lg:grid-cols-12 gap-8 pb-12 border-b border-[var(--color-hairline)] items-end">
                <div class="lg:col-span-7 space-y-2">
                    <div class="text-xs font-mono text-[var(--color-accent)]">
                        ARSITEKTUR MANUFAKTUR // SCROLLYTELLING TELEMETRY
                    </div>
                    <h2 class="font-display font-bold text-3xl sm:text-4xl lg:text-5xl text-[var(--color-ink)]">
                        Empat Lini Rekayasa Manufaktur Terintegrasi
                    </h2>
                </div>
                <div class="lg:col-span-5">
                    <p class="text-sm sm:text-base text-[var(--color-ink-muted)] leading-relaxed">
                        Seluruh proses pemotongan, pembubutan, pembentukan lembaran logam, hingga kalibrasi dimensi dikerjakan satu atap di fasilitas Cikarang. Gulir ke bawah untuk menginspeksi parameter tiap lini.
                    </p>
                </div>
            </div>

            <!-- Scrollytelling Two-Column Layout: Sticky 3D Container Scroll Telemetry Stage (Left) + Scrolling Capability Dossiers (Right) -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 pt-12 items-start">
                <!-- Left Sticky 3D Container Scroll Stage (Cols 1-6) -->
                <div class="lg:col-span-6 lg:sticky lg:top-24 container-scroll-perspective">
                    <div
                        data-container-scroll-card
                        class="container-scroll-card corner-crosshair border border-[var(--color-hairline-strong)] bg-[var(--color-surface)] p-5 sm:p-7"
                    >
                        <!-- Telemetry Header -->
                        <div class="flex items-center justify-between pb-4 mb-4 border-b border-[var(--color-hairline)] font-mono text-xs">
                            <span class="text-[var(--color-accent)] font-semibold" x-text="'ACTIVE LINE // ' + caps[activeCap].code">ACTIVE LINE // CAP-01</span>
                            <span class="text-[var(--color-ink-secondary)]" x-text="caps[activeCap].roughness">Ra 0.4 µm</span>
                        </div>

                        <!-- Live Synchronized Visual Frame -->
                        <div class="relative aspect-[16/10] overflow-hidden border border-[var(--color-hairline)] bg-[var(--color-canvas)] mb-5">
                            <template x-for="(cap, cIdx) in caps" :key="cap.code">
                                <img
                                    x-show="activeCap === cIdx"
                                    :src="cap.image"
                                    :alt="cap.title"
                                    loading="lazy"
                                    width="720"
                                    height="450"
                                    class="w-full h-full object-cover transition-transform duration-700"
                                >
                            </template>

                            <div class="absolute top-3 left-3 px-2.5 py-1 border border-[var(--color-hairline)] hud-blur-bar font-mono text-[11px] text-[var(--color-ink)]" x-text="caps[activeCap].machine">
                                DMG MORI DMU 50 &amp; Mazak VTC-300C
                            </div>
                        </div>

                        <!-- Live Synchronized Readout -->
                        <div class="space-y-3">
                            <div class="flex items-center justify-between gap-2">
                                <h3 class="font-display font-bold text-2xl text-[var(--color-ink)]" x-text="caps[activeCap].title">
                                    CNC 5-Axis Milling
                                </h3>
                                <span class="font-mono text-xs text-[var(--color-accent)]" x-text="'0' + (activeCap + 1) + ' / 04'">01 / 04</span>
                            </div>

                            <div class="p-3 border border-[var(--color-hairline)] bg-[var(--color-canvas)] font-mono text-xs text-[var(--color-ink-secondary)]" x-text="caps[activeCap].spec">
                                Work Envelope 650×520×475 mm · ±0.004 mm
                            </div>

                            <!-- Interactive Step Selector Bar -->
                            <div class="grid grid-cols-4 border border-[var(--color-hairline)] divide-x divide-[var(--color-hairline)] bg-[var(--color-canvas)] pt-0">
                                <template x-for="(cap, cIdx) in caps" :key="cap.code">
                                    <button
                                        type="button"
                                        @click="activeCap = cIdx"
                                        class="py-2 px-2 font-mono text-xs text-center transition-colors cursor-pointer"
                                        :class="activeCap === cIdx ? 'bg-[var(--color-accent)] text-[var(--color-accent-ink)] font-semibold' : 'text-[var(--color-ink-muted)] hover:text-[var(--color-ink)]'"
                                        x-text="cap.code"
                                    ></button>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Scrolling Engineering Dossiers (Cols 7-12) -->
                <div class="lg:col-span-6 space-y-8">
                    @php
                        $capabilities = [
                            [
                                'code' => 'CAP-01',
                                'title' => 'CNC 5-Axis Milling',
                                'machine' => 'DMG MORI DMU 50 & Mazak VTC-300C',
                                'spec' => 'Work Envelope 650×520×475 mm · ±0.004 mm',
                                'desc' => 'Pemesinan kontur simultan 5-sumbu untuk impeller, housing aerodinamis, dan blok manifold tanpa kesalahan pindah cekam.',
                                'deliverable' => 'Komponen Billet Presisi + Laporan Koordinat 3D CMM',
                                'icon' => 'cpu',
                            ],
                            [
                                'code' => 'CAP-02',
                                'title' => 'CNC Swiss Turning',
                                'machine' => 'Citizen Cincom L20-XII (7-Axis)',
                                'spec' => 'Diameter Ø 4 mm – Ø 42 mm · Live Tooling',
                                'desc' => 'Pembubutan otomatis berkecepatan tinggi dengan bar feeder 24 jam untuk poros presisi, pin konektor, dan fitting ulir.',
                                'deliverable' => 'Batch Volume 250–50.000 Pcs + Grafik Kontrol SPC',
                                'icon' => 'disc',
                            ],
                            [
                                'code' => 'CAP-03',
                                'title' => 'Sheet Metal & Laser 6kW',
                                'machine' => 'Trumpf TruLaser 3030 & Amada Press Brake',
                                'spec' => 'Meja 3.000×1.500 mm · Bending 80 Ton',
                                'desc' => 'Pemotongan laser serat optik dan penekukan CNC presisi untuk kabinet panel kontrol, chassis server, dan hopper stainless.',
                                'deliverable' => 'Enclosure IP65 Welding TIG + Powder Coating',
                                'icon' => 'box',
                            ],
                            [
                                'code' => 'CAP-04',
                                'title' => 'Dies, Jig & Wire EDM',
                                'machine' => 'Sodick ALN600G Linear Motor Wire EDM',
                                'spec' => 'Sodick Linear EDM · Akurasi ±0.002 mm',
                                'desc' => 'Rancang bangun progressive stamping dies, welding jig otomotif, dan checking fixture terkalibrasi 3D CMM.',
                                'deliverable' => 'Tooling SKD11 HRC 60 + Sertifikat Kalibrasi Datum',
                                'icon' => 'compass',
                            ],
                        ];
                    @endphp

                    @foreach ($capabilities as $idx => $cap)
                        <article
                            data-scrolly-step="{{ $idx }}"
                            @mouseenter="activeCap = {{ $idx }}"
                            class="css-scroll-entry border bg-[var(--color-surface)] p-6 sm:p-8 transition-colors"
                            :class="activeCap === {{ $idx }} ? 'border-[var(--color-accent)] bg-[var(--color-surface-elevated)]' : 'border-[var(--color-hairline)]'"
                        >
                            <div class="flex items-center justify-between font-mono text-xs text-[var(--color-accent)] pb-4 mb-4 border-b border-[var(--color-hairline)]">
                                <span>{{ $cap['code'] }} // {{ $cap['machine'] }}</span>
                                <i data-lucide="{{ $cap['icon'] }}" class="w-5 h-5" aria-hidden="true"></i>
                            </div>

                            <h3 class="font-display font-bold text-2xl text-[var(--color-ink)] mb-2">
                                {{ $cap['title'] }}
                            </h3>

                            <div class="font-mono text-xs text-[var(--color-ink-secondary)] pb-4 mb-4 border-b border-[var(--color-hairline)]">
                                {{ $cap['spec'] }}
                            </div>

                            <p class="text-sm sm:text-base text-[var(--color-ink-muted)] leading-relaxed mb-6">
                                {{ $cap['desc'] }}
                            </p>

                            <div class="p-3.5 border border-[var(--color-hairline)] bg-[var(--color-canvas)] flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                                <div class="font-mono text-xs">
                                    <span class="text-[var(--color-ink-muted)]">Output Standar: </span>
                                    <span class="text-[var(--color-ink)]">{{ $cap['deliverable'] }}</span>
                                </div>
                                <a
                                    href="{{ route('products', ['kategori' => $cap['title']]) }}"
                                    class="inline-flex items-center gap-1.5 text-xs font-mono text-[var(--color-accent)] hover:underline shrink-0"
                                >
                                    <span>Buka Katalog Lini</span>
                                    <i data-lucide="chevron-right" class="w-3.5 h-3.5" aria-hidden="true"></i>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- 3. KATALOG KOMPONEN & PRODUK MANUFAKTUR UNGGULAN (Mathematically Locked Vertical Rhythm + Scroll Entry) -->
    <section class="py-24 border-b border-[var(--color-hairline)] bg-[var(--color-surface)] relative overflow-hidden">
        <!-- Parallax Background Watermark -->
        <div
            data-parallax="-0.15"
            aria-hidden="true"
            class="hidden xl:block absolute -left-6 bottom-10 font-mono font-bold text-[7rem] leading-none text-[var(--color-ink)]/[0.025] select-none pointer-events-none"
        >
            MAKE-TO-PRINT
        </div>

        <div class="swiss-container relative z-10">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-12 border-b border-[var(--color-hairline)]">
                <div class="space-y-2">
                    <div class="text-xs font-mono text-[var(--color-accent)]">
                        SPESIFIKASI PRODUK // OEM &amp; CUSTOM DRAWING
                    </div>
                    <h2 class="font-display font-bold text-3xl sm:text-4xl lg:text-5xl text-[var(--color-ink)]">
                        Katalog Komponen &amp; Kapabilitas Produksi
                    </h2>
                    <p class="text-sm sm:text-base text-[var(--color-ink-muted)] max-w-2xl">
                        Setiap komponen diproduksi berdasarkan gambar teknis pelanggan (Make-to-Print / OEM) dengan sertifikat material (MTC 3.1) dan lembar inspeksi QC.
                    </p>
                </div>
                <a href="{{ route('products') }}" data-magnetic class="btn-technical-outline shrink-0">
                    <span>Semua Katalog ({{ $featuredProducts->count() }}+)</span>
                </a>
            </div>

            <div data-reveal="stagger" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 pt-12">
                @foreach ($featuredProducts as $product)
                    <article
                        data-tilt-3d
                        class="css-scroll-entry corner-crosshair h-full flex flex-col justify-between border border-[var(--color-hairline)] bg-[var(--color-canvas)] p-6 hover:border-[var(--color-accent)]"
                    >
                        <div class="tilt-glare" aria-hidden="true"></div>

                        <div>
                            <!-- Top SKU & Category Row -->
                            <div class="flex items-center justify-between gap-2 pb-3 mb-4 border-b border-[var(--color-hairline)] text-xs font-mono">
                                <span class="text-[var(--color-accent)]">{{ $product->sku_code }}</span>
                                <span class="text-[var(--color-ink-muted)]">{{ $product->category }}</span>
                            </div>

                            <!-- Image Slot (minmax(0,1fr) safe, lazy loaded below fold) -->
                            <div data-reveal="curtain" class="industrial-image-frame aspect-[16/10] mb-5 border border-[var(--color-hairline)]">
                                <img
                                    src="{{ $product->image_url }}"
                                    alt="{{ $product->name }}"
                                    loading="lazy"
                                    width="600"
                                    height="375"
                                    class="w-full h-full object-cover"
                                >
                            </div>

                            <!-- Mathematically Locked Title (h-14 line-clamp-2) -->
                            <h3 class="font-display font-bold text-xl text-[var(--color-ink)] h-14 line-clamp-2 leading-snug flex items-start mb-2">
                                <a href="{{ route('products.show', $product->slug) }}" class="hover:text-[var(--color-accent)] transition-colors">
                                    {{ $product->name }}
                                </a>
                            </h3>

                            <!-- Mathematically Locked Description (h-[4.25rem] line-clamp-3) -->
                            <p class="text-sm text-[var(--color-ink-muted)] h-[4.25rem] line-clamp-3 overflow-hidden mb-4">
                                {{ $product->short_description }}
                            </p>

                            <!-- Technical Parameter Strip -->
                            <dl class="grid grid-cols-2 gap-2 p-3 border border-[var(--color-hairline)] bg-[var(--color-surface)] text-xs font-mono mb-4">
                                <div>
                                    <dt class="text-[var(--color-ink-muted)]">Material</dt>
                                    <dd class="text-[var(--color-ink)] truncate mt-0.5">{{ $product->material_grade }}</dd>
                                </div>
                                <div>
                                    <dt class="text-[var(--color-ink-muted)]">Toleransi</dt>
                                    <dd class="text-[var(--color-accent)] mt-0.5 tabular-nums">{{ $product->tolerance }}</dd>
                                </div>
                            </dl>
                        </div>

                        <!-- Locked Footer Action Row -->
                        <div class="mt-auto pt-4 border-t border-[var(--color-hairline)] shrink-0 flex items-center justify-between gap-3">
                            <a
                                href="{{ route('products.show', $product->slug) }}"
                                class="text-xs font-mono text-[var(--color-ink-secondary)] hover:text-[var(--color-accent)] inline-flex items-center gap-1.5"
                            >
                                <i data-lucide="sliders" class="w-3.5 h-3.5" aria-hidden="true"></i>
                                <span>Datasheet Detail</span>
                            </a>

                            <a
                                href="{{ route('rfq', ['produk' => $product->name, 'material' => $product->material_grade]) }}"
                                class="px-3 py-2 bg-[var(--color-surface-elevated)] border border-[var(--color-hairline)] text-xs font-semibold text-[var(--color-ink)] hover:border-[var(--color-accent)] hover:text-[var(--color-accent)] transition-colors"
                            >
                                Minta Quote
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 4. INVENTARIS MESIN PRODUKSI & METROLOGI CMM (Responsive Sticky Table per modern-web-guidance) -->
    <section class="py-24 border-b border-[var(--color-hairline)] bg-[var(--color-canvas)]">
        <div class="swiss-container">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 pb-10 items-end">
                <div class="lg:col-span-8 space-y-2">
                    <div class="text-xs font-mono text-[var(--color-accent)]">
                        VERIFIED WORKSHOP FLEET // CIKARANG PLANT
                    </div>
                    <h2 id="machine-matrix-heading" class="font-display font-bold text-3xl sm:text-4xl lg:text-5xl text-[var(--color-ink)]">
                        Daftar Mesin Produksi &amp; Kalibrasi Metrologi
                    </h2>
                    <p class="text-sm sm:text-base text-[var(--color-ink-muted)]">
                        Seluruh parameter kapasitas kerja, akurasi posisi linear, dan jumlah unit mesin dapat diverifikasi langsung saat audit kunjungan pabrik.
                    </p>
                </div>
                <div class="lg:col-span-4 flex lg:justify-end">
                    <a href="{{ route('facilities') }}" data-magnetic class="btn-technical-outline">
                        <span>Inspeksi Fasilitas Lengkap</span>
                    </a>
                </div>
            </div>

            <div
                tabindex="0"
                role="region"
                aria-labelledby="machine-matrix-heading"
                class="table-wrapper corner-crosshair"
            >
                <table>
                    <caption class="sr-only">Tabel spesifikasi mesin CNC dan alat ukur CMM PT Presisi Metalindo Teknik</caption>
                    <thead>
                        <tr class="border-b border-[var(--color-hairline)] text-left text-xs font-mono text-[var(--color-ink-secondary)]">
                            <th scope="col" class="py-3.5 px-4">Kode &amp; Unit Mesin</th>
                            <th scope="col" class="py-3.5 px-4">Kategori</th>
                            <th scope="col" class="py-3.5 px-4">Rentang Meja Kerja</th>
                            <th scope="col" class="py-3.5 px-4">Akurasi Posisi</th>
                            <th scope="col" class="py-3.5 px-4">Spindle / Spesifikasi</th>
                            <th scope="col" class="py-3.5 px-4 text-right">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[var(--color-hairline)] text-sm">
                        @foreach ($machines as $machine)
                            <tr class="hover:bg-[var(--color-surface-elevated)] transition-colors">
                                <th scope="row" class="py-4 px-4 font-display font-semibold text-left text-[var(--color-ink)]">
                                    <div class="font-mono text-xs text-[var(--color-accent)]">{{ $machine->code }}</div>
                                    <div>{{ $machine->name }}</div>
                                </th>
                                <td data-label="Kategori" class="py-4 px-4 text-[var(--color-ink-secondary)]">
                                    {{ $machine->category }}
                                </td>
                                <td data-label="Rentang Kerja" class="py-4 px-4 font-mono text-xs text-[var(--color-ink)] tabular-nums">
                                    {{ $machine->work_envelope }}
                                </td>
                                <td data-label="Akurasi" class="py-4 px-4 font-mono text-xs text-[var(--color-accent)] tabular-nums">
                                    {{ $machine->positioning_accuracy }}
                                </td>
                                <td data-label="Spesifikasi" class="py-4 px-4 text-xs text-[var(--color-ink-muted)]">
                                    {{ $machine->spindle_speed }}
                                </td>
                                <td data-label="Jumlah Unit" class="py-4 px-4 font-mono font-semibold text-right text-[var(--color-ink)] tabular-nums">
                                    {{ $machine->quantity_units }} Unit
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- 5. 21ST.DEV SCROLL-LINKED VERTICAL TIMELINE BEAM: PROTOKOL QC SOP 5-TAHAP -->
    <section class="py-24 border-b border-[var(--color-hairline)] bg-[var(--color-surface)]">
        <div class="swiss-container">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
                <!-- Left Sticky Timeline Header (Cols 1-4) -->
                <div class="lg:col-span-4 lg:sticky lg:top-28 space-y-4">
                    <div class="text-xs font-mono text-[var(--color-accent)]">
                        QUALITY ASSURANCE PIPELINE // ISO 9001:2015
                    </div>
                    <h2 class="font-display font-bold text-3xl sm:text-4xl text-[var(--color-ink)]">
                        Protokol Produksi &amp; Jaminan Kualitas 5-Tahap
                    </h2>
                    <p class="text-sm sm:text-base text-[var(--color-ink-muted)] leading-relaxed">
                        Setiap pesanan B2B melewati tahapan verifikasi teknis terstruktur untuk mencegah kegagalan dimensi dan keterlambatan perakitan di lini pabrik Anda.
                    </p>
                    <div class="pt-2">
                        <a href="{{ route('workflow') }}" class="btn-technical-outline text-xs">
                            <span>Lihat Tabel Toleransi ISO 2768-1</span>
                        </a>
                    </div>
                </div>

                <!-- Right Scroll-Linked Vertical Timeline Beam (Cols 5-12) -->
                <div data-timeline-container class="lg:col-span-8 relative pl-8 sm:pl-12">
                    <!-- Vertical Laser Progress Beam Track -->
                    <div aria-hidden="true" class="timeline-beam-track absolute left-3.5 sm:left-4 top-2 bottom-2">
                        <div class="timeline-beam-fill"></div>
                    </div>

                    @php
                        $steps = [
                            [
                                'num' => '01',
                                'step' => 'TAHAP 01 // SLA 1×24 JAM',
                                'title' => 'Review Gambar Kerja (DFM) & NDA',
                                'desc' => 'Evaluasi file CAD 3D (STEP/IGES) & 2D PDF oleh tim engineer dalam 1×24 jam beserta penandatanganan Mutual NDA.',
                                'gate' => 'GATE-01: Validasi Toleransi GD&T & Estimasi Siklus',
                            ],
                            [
                                'num' => '02',
                                'step' => 'TAHAP 02 // PROTOTYPE APPROVAL',
                                'title' => 'Pemrograman CAM & First Article (FAI)',
                                'desc' => 'Simulasi toolpath anti-tabrakan dan pembuatan sampel prototipe awal untuk persetujuan dimensi sebelum produksi massal.',
                                'gate' => 'GATE-02: Persetujuan Sampel Fisik FAI oleh Klien',
                            ],
                            [
                                'num' => '03',
                                'step' => 'TAHAP 03 // IN-PROCESS SPC',
                                'title' => 'Eksekusi Lini CNC & Kontrol Statistik',
                                'desc' => 'Pemesinan batch dengan pemantauan keausan pahat otomatis dan in-process inspection setiap 25 komponen.',
                                'gate' => 'GATE-03: Sertifikat Material MTC 3.1 & CPK ≥ 1.67',
                            ],
                            [
                                'num' => '04',
                                'step' => 'TAHAP 04 // METROLOGY LAB 20°C',
                                'title' => 'Surface Finish & Kalibrasi 3D CMM',
                                'desc' => 'Proses anodizing, heat treatment, atau electropolishing diikuti verifikasi akhir di ruang 3D CMM Mitutoyo suhu 20°C.',
                                'gate' => 'GATE-04: Laporan Inspeksi Koordinat 3D CMM Penuh',
                            ],
                            [
                                'num' => '05',
                                'step' => 'TAHAP 05 // ZERO-CORROSION LOGISTICS',
                                'title' => 'Pembersihan Ultrasonik & Kemasan VCI',
                                'desc' => 'Pembersihan ultrasonik, pengemasan vakum anti-karat VCI, lampiran sertifikat MTC 3.1 + QC Report, dan pengiriman terjadwal.',
                                'gate' => 'GATE-05: Barcode Batch Lot & Serah Terima BAST',
                            ],
                        ];
                    @endphp

                    <div class="space-y-6">
                        @foreach ($steps as $s)
                            <article class="css-scroll-entry relative border border-[var(--color-hairline)] bg-[var(--color-canvas)] p-6 sm:p-7 hover:border-[var(--color-accent)] transition-colors">
                                <!-- Square Technical Timeline Node -->
                                <div
                                    aria-hidden="true"
                                    class="timeline-node-square absolute -left-8 sm:-left-12 top-6"
                                >
                                    {{ $s['num'] }}
                                </div>

                                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 pb-3 mb-3 border-b border-[var(--color-hairline)] font-mono text-xs">
                                    <span class="text-[var(--color-accent)]">{{ $s['step'] }}</span>
                                    <span class="text-[var(--color-ink-muted)]">{{ $s['gate'] }}</span>
                                </div>

                                <h3 class="font-display font-bold text-xl text-[var(--color-ink)] mb-2">
                                    {{ $s['title'] }}
                                </h3>
                                <p class="text-sm text-[var(--color-ink-secondary)] leading-relaxed">
                                    {{ $s['desc'] }}
                                </p>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. PORTOFOLIO PROYEK & SEKTOR INDUSTRI YANG DILAYANI -->
    <section class="py-24 border-b border-[var(--color-hairline)] bg-[var(--color-canvas)]">
        <div class="swiss-container">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-12 border-b border-[var(--color-hairline)]">
                <div class="space-y-2">
                    <div class="text-xs font-mono text-[var(--color-accent)]">
                        PROVEN BATCH RECORD // B2B CASE STUDIES
                    </div>
                    <h2 class="font-display font-bold text-3xl sm:text-4xl lg:text-5xl text-[var(--color-ink)]">
                        Rekam Jejak Batch Produksi B2B
                    </h2>
                    <p class="text-sm sm:text-base text-[var(--color-ink-muted)] max-w-2xl">
                        Bukti pengerjaan komponen presisi lintas industri dengan parameter material, volume batch, dan toleransi aktual yang tercapai.
                    </p>
                </div>
                <a href="{{ route('portfolio') }}" data-magnetic class="btn-technical-outline shrink-0">
                    <span>Lihat Studi Kasus Lengkap</span>
                </a>
            </div>

            <div data-reveal="stagger" class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-12">
                @foreach ($featuredPortfolios as $item)
                    <article
                        data-tilt-3d
                        class="css-scroll-entry corner-crosshair border border-[var(--color-hairline)] bg-[var(--color-surface)] p-6 sm:p-8 flex flex-col justify-between"
                    >
                        <div class="tilt-glare" aria-hidden="true"></div>
                        <div>
                            <div class="flex items-center justify-between gap-2 pb-3 mb-4 border-b border-[var(--color-hairline)] text-xs font-mono">
                                <span class="text-[var(--color-accent)]">{{ $item->client_industry }}</span>
                                <span class="text-[var(--color-ink-muted)] tabular-nums">Batch {{ $item->completion_year }}</span>
                            </div>

                            <h3 class="font-display font-bold text-xl sm:text-2xl text-[var(--color-ink)] mb-3">
                                {{ $item->title }}
                            </h3>

                            <p class="text-sm text-[var(--color-ink-muted)] mb-5 leading-relaxed">
                                {{ $item->solution_summary }}
                            </p>
                        </div>

                        <dl class="grid grid-cols-3 gap-2 pt-4 border-t border-[var(--color-hairline)] text-xs font-mono">
                            <div>
                                <dt class="text-[var(--color-ink-muted)]">Material</dt>
                                <dd class="text-[var(--color-ink)] truncate mt-0.5">{{ $item->material_used }}</dd>
                            </div>
                            <div>
                                <dt class="text-[var(--color-ink-muted)]">Skala</dt>
                                <dd class="text-[var(--color-ink)] truncate mt-0.5">{{ $item->batch_volume }}</dd>
                            </div>
                            <div>
                                <dt class="text-[var(--color-ink-muted)]">Toleransi</dt>
                                <dd class="text-[var(--color-accent)] mt-0.5 tabular-nums">{{ $item->tolerance_achieved }}</dd>
                            </div>
                        </dl>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 7. CLOSING ACTION: 21ST.DEV 3D CONTAINER SCROLL RFQ COMMAND DECK -->
    <section data-container-scroll class="py-24 bg-[var(--color-surface)] blueprint-subgrid-bg">
        <div class="swiss-container container-scroll-perspective">
            <div
                data-container-scroll-card
                class="container-scroll-card corner-crosshair border border-[var(--color-hairline-strong)] bg-[var(--color-canvas)] p-8 sm:p-12 lg:p-16 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center"
            >
                <div class="lg:col-span-8 space-y-4">
                    <div class="text-xs font-mono text-[var(--color-accent)]">
                        DIRECT ENGINEERING DESK // SLA 1×24 JAM KERJA
                    </div>
                    <h2 class="font-display font-bold text-3xl sm:text-4xl lg:text-5xl text-[var(--color-ink)]">
                        Siap Menghitung Estimasi Produksi Komponen Anda?
                    </h2>
                    <p class="text-base text-[var(--color-ink-secondary)] max-w-2xl leading-relaxed">
                        Kirimkan spesifikasi material, kuantitas batch, dan tautan drawing kerja (STEP, IGES, DWG, atau PDF). Tim Sales Engineering kami merespons dengan rincian harga dan lead time dalam 1×24 jam kerja.
                    </p>
                </div>
                <div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col gap-3">
                    <a href="{{ route('rfq') }}" data-magnetic class="btn-technical-primary w-full">
                        <i data-lucide="send" class="w-4 h-4" aria-hidden="true"></i>
                        <span>Buka Formulir RFQ B2B</span>
                    </a>
                    <a href="{{ route('catalog') }}" data-magnetic class="btn-technical-outline w-full">
                        <i data-lucide="file-down" class="w-4 h-4 text-[var(--color-accent)]" aria-hidden="true"></i>
                        <span>Unduh Katalog Kapabilitas</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
