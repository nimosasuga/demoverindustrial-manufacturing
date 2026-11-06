<x-layouts.app
    title="Fasilitas Workshop, Mesin CNC & Laboratorium 3D CMM"
    description="Daftar inventaris mesin CNC 5-Axis DMG MORI, Mazak, Citizen Swiss Lathe, Trumpf Fiber Laser 6kW, dan ruang metrologi 3D CMM Mitutoyo di Cikarang."
>
    <!-- Header -->
    <section class="py-14 border-b border-[var(--color-hairline)] blueprint-grid-bg">
        <div class="swiss-container">
            <div class="max-w-3xl space-y-3">
                <div class="text-xs font-mono text-[var(--color-accent)]">
                    INFRASTRUKTUR PABRIK // CIKARANG SELATAN
                </div>
                <h1 class="font-display font-bold text-4xl sm:text-5xl text-[var(--color-ink)]">
                    Fasilitas Mesin &amp; Metrologi
                </h1>
                <p class="text-base text-[var(--color-ink-secondary)]">
                    Kapasitas produksi yang terukur di atas lahan workshop 2.400 m² dengan ruang inspeksi kualitas bersuhu terkontrol 20°C ±1°C.
                </p>
            </div>
        </div>
    </section>

    <!-- Machine Visual Cards -->
    <section class="py-16 border-b border-[var(--color-hairline)] bg-[var(--color-canvas)]">
        <div class="swiss-container">
            <div data-reveal="stagger" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($machines as $machine)
                    <article
                        data-tilt-3d
                        class="border border-[var(--color-hairline)] bg-[var(--color-surface)] p-6 flex flex-col justify-between h-full"
                    >
                        <div class="tilt-glare" aria-hidden="true"></div>
                        <div>
                            <div class="flex items-center justify-between gap-2 pb-3 mb-4 border-b border-[var(--color-hairline)] text-xs font-mono">
                                <span class="text-[var(--color-accent)]">{{ $machine->code }}</span>
                                <span class="text-[var(--color-ink-muted)] tabular-nums">{{ $machine->quantity_units }} Unit Aktif</span>
                            </div>

                            <div class="industrial-image-frame aspect-[16/10] mb-5 border border-[var(--color-hairline)]">
                                <img
                                    src="{{ $machine->image_url }}"
                                    alt="{{ $machine->name }}"
                                    loading="lazy"
                                    width="600"
                                    height="375"
                                    class="w-full h-full object-cover"
                                >
                            </div>

                            <h2 class="font-display font-bold text-xl text-[var(--color-ink)] h-14 line-clamp-2 flex items-start mb-1">
                                {{ $machine->name }}
                            </h2>
                            <div class="text-xs font-mono text-[var(--color-ink-muted)] mb-4">
                                {{ $machine->brand_origin }}
                            </div>

                            <dl class="space-y-2 p-3.5 border border-[var(--color-hairline)] bg-[var(--color-canvas)] text-xs font-mono">
                                <div class="flex justify-between gap-2">
                                    <dt class="text-[var(--color-ink-muted)]">Meja Kerja</dt>
                                    <dd class="text-[var(--color-ink)] text-right tabular-nums">{{ $machine->work_envelope }}</dd>
                                </div>
                                <div class="flex justify-between gap-2">
                                    <dt class="text-[var(--color-ink-muted)]">Akurasi</dt>
                                    <dd class="text-[var(--color-accent)] text-right tabular-nums">{{ $machine->positioning_accuracy }}</dd>
                                </div>
                                <div class="flex justify-between gap-2">
                                    <dt class="text-[var(--color-ink-muted)]">Performa</dt>
                                    <dd class="text-[var(--color-ink-secondary)] text-right">{{ $machine->spindle_speed }}</dd>
                                </div>
                            </dl>
                        </div>

                        <div class="mt-4 pt-4 border-t border-[var(--color-hairline)] text-xs font-mono text-[var(--color-ink-secondary)]">
                            Status: {{ $machine->status_note }}
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Metrology & Calibration Protocol -->
    <section class="py-16 bg-[var(--color-surface)]">
        <div class="swiss-container">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                <div class="lg:col-span-7 space-y-4">
                    <h2 class="font-display font-bold text-3xl text-[var(--color-ink)]">
                        Laboratorium Inspeksi 3D CMM &amp; Kalibrasi Terverifikasi
                    </h2>
                    <p class="text-sm sm:text-base text-[var(--color-ink-secondary)] leading-relaxed">
                        Kami memisahkan area pemesinan berat dari laboratorium metrologi akhir. Setiap batch komponen disertai laporan koordinat 3D CMM Mitutoyo CRYSTA-Apex, uji kekasaran permukaan Surftest SJ-410, dan sertifikat komposisi kimia material (Mill Test Certificate EN 10204 3.1).
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-2 font-mono text-xs">
                        <div class="p-4 border border-[var(--color-hairline)] bg-[var(--color-canvas)]">
                            <div class="text-[var(--color-accent)] font-semibold text-base tabular-nums">20°C ±1°C</div>
                            <div class="text-[var(--color-ink-muted)] mt-1">Suhu Ruang Metrologi</div>
                        </div>
                        <div class="p-4 border border-[var(--color-hairline)] bg-[var(--color-canvas)]">
                            <div class="text-[var(--color-accent)] font-semibold text-base tabular-nums">1.7 µm</div>
                            <div class="text-[var(--color-ink-muted)] mt-1">Resolusi Probe Renishaw</div>
                        </div>
                        <div class="p-4 border border-[var(--color-hairline)] bg-[var(--color-canvas)]">
                            <div class="text-[var(--color-accent)] font-semibold text-base tabular-nums">CPK ≥ 1.67</div>
                            <div class="text-[var(--color-ink-muted)] mt-1">Stabilitas Proses Batch</div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-5 flex flex-col gap-3 p-6 border border-[var(--color-hairline-strong)] bg-[var(--color-canvas)]">
                    <h3 class="font-display font-bold text-xl text-[var(--color-ink)]">
                        Jadwalkan Kunjungan Audit Pabrik (Plant Visit)
                    </h3>
                    <p class="text-sm text-[var(--color-ink-muted)]">
                        Tim Procurement dan QA perusahaan Anda dapat melakukan audit langsung ke workshop kami di Kawasan Industri Jababeka II setiap hari kerja.
                    </p>
                    <a href="{{ route('contact') }}" class="btn-technical-primary mt-2">
                        <span>Hubungi Tim Kunjungan Pabrik</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
