<x-layouts.app
    title="Portofolio Proyek & Sektor Industri B2B"
    description="Studi kasus produksi komponen presisi untuk sektor Otomotif Tier-2, Otomasi Pabrik, Pengolahan Pangan, Hidrolik Alat Berat, dan Telekomunikasi."
>
    <!-- Header -->
    <section class="py-16 border-b border-[var(--color-hairline)] blueprint-grid-bg relative overflow-hidden">
        <div
            data-parallax="0.15"
            aria-hidden="true"
            class="hidden lg:block absolute right-10 top-10 font-mono text-xs text-[var(--color-ink-muted)]/40 text-right select-none pointer-events-none"
        >
            <div>PORTFOLIO // OEM BATCH RECORD</div>
            <div>INSPECTION // 100% FAI CMM</div>
        </div>
        <div class="swiss-container relative z-10">
            <div class="max-w-3xl space-y-3">
                <div class="text-xs font-mono text-[var(--color-accent)]">
                    REKAM JEJAK PRODUKSI // STUDI KASUS TEKNIS
                </div>
                <h1 class="font-display font-bold text-4xl sm:text-5xl text-[var(--color-ink)]">
                    Portofolio Batch &amp; Industri
                </h1>
                <p class="text-base text-[var(--color-ink-secondary)]">
                    Dokumentasi penyelesaian batch produksi beserta tantangan rekayasa, material yang digunakan, dan capaian toleransi dimensi.
                </p>
            </div>
        </div>
    </section>

    <!-- Industry Filter Bar -->
    <section class="sticky top-[4.5rem] z-30 border-b border-[var(--color-hairline)] hud-blur-bar">
        <div class="swiss-container py-3 flex items-center overflow-x-auto divide-x divide-[var(--color-hairline)]">
            <a
                href="{{ route('portfolio') }}"
                class="px-4 py-2 text-xs sm:text-sm font-medium whitespace-nowrap {{ empty($selectedIndustry) || $selectedIndustry === 'Semua' ? 'bg-[var(--color-accent)] text-[var(--color-accent-ink)] font-semibold' : 'text-[var(--color-ink-secondary)] hover:text-[var(--color-ink)]' }}"
            >
                Semua Sektor Industri
            </a>
            @foreach ($industries as $ind)
                <a
                    href="{{ route('portfolio', ['industri' => $ind]) }}"
                    class="px-4 py-2 text-xs sm:text-sm font-medium whitespace-nowrap {{ $selectedIndustry === $ind ? 'bg-[var(--color-accent)] text-[var(--color-accent-ink)] font-semibold' : 'text-[var(--color-ink-secondary)] hover:text-[var(--color-ink)]' }}"
                >
                    {{ $ind }}
                </a>
            @endforeach
        </div>
    </section>

    <!-- Portfolio Case Studies Grid -->
    <section class="py-20 bg-[var(--color-canvas)]">
        <div class="swiss-container">
            <div data-reveal="stagger" class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach ($portfolios as $item)
                    <article
                        data-tilt-3d
                        class="css-scroll-entry corner-crosshair border border-[var(--color-hairline)] bg-[var(--color-surface)] p-6 sm:p-8 flex flex-col justify-between hover:border-[var(--color-accent)]"
                    >
                        <div class="tilt-glare" aria-hidden="true"></div>
                        <div>
                            <div class="flex items-center justify-between gap-2 pb-3 mb-4 border-b border-[var(--color-hairline)] text-xs font-mono">
                                <span class="text-[var(--color-accent)]">{{ $item->client_industry }}</span>
                                <span class="text-[var(--color-ink-muted)] tabular-nums">Selesai {{ $item->completion_year }}</span>
                            </div>

                            <div data-reveal="curtain" class="industrial-image-frame aspect-[16/9] mb-5 border border-[var(--color-hairline)]">
                                <img
                                    src="{{ $item->image_url }}"
                                    alt="{{ $item->title }}"
                                    loading="lazy"
                                    width="700"
                                    height="394"
                                    class="w-full h-full object-cover"
                                >
                            </div>

                            <h2 class="font-display font-bold text-2xl text-[var(--color-ink)] mb-4">
                                {{ $item->title }}
                            </h2>

                            <div class="space-y-3 text-sm mb-6">
                                <div class="p-3.5 border border-[var(--color-hairline)] bg-[var(--color-canvas)]">
                                    <span class="font-mono text-xs text-[var(--color-ink-muted)] block mb-1">Tantangan Teknis:</span>
                                    <p class="text-[var(--color-ink-secondary)]">{{ $item->challenge_summary }}</p>
                                </div>
                                <div class="p-3.5 border border-[var(--color-hairline)] bg-[var(--color-canvas)]">
                                    <span class="font-mono text-xs text-[var(--color-accent)] block mb-1">Eksekusi Rekayasa &amp; QC:</span>
                                    <p class="text-[var(--color-ink-secondary)]">{{ $item->solution_summary }}</p>
                                </div>
                            </div>
                        </div>

                        <dl class="grid grid-cols-3 gap-3 pt-4 border-t border-[var(--color-hairline)] text-xs font-mono">
                            <div>
                                <dt class="text-[var(--color-ink-muted)]">Material</dt>
                                <dd class="text-[var(--color-ink)] mt-0.5">{{ $item->material_used }}</dd>
                            </div>
                            <div>
                                <dt class="text-[var(--color-ink-muted)]">Volume Batch</dt>
                                <dd class="text-[var(--color-ink)] mt-0.5">{{ $item->batch_volume }}</dd>
                            </div>
                            <div>
                                <dt class="text-[var(--color-ink-muted)]">Toleransi Aktual</dt>
                                <dd class="text-[var(--color-accent)] mt-0.5 tabular-nums">{{ $item->tolerance_achieved }}</dd>
                            </div>
                        </dl>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
</x-layouts.app>
