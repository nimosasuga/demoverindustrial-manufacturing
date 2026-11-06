<x-layouts.app
    :title="$product->name . ' (' . $product->sku_code . ')'"
    :description="$product->short_description"
>
    <!-- Breadcrumb & Datasheet Header -->
    <section class="py-10 border-b border-[var(--color-hairline)] bg-[var(--color-surface)]">
        <div class="swiss-container">
            <nav aria-label="Breadcrumb" class="text-xs font-mono text-[var(--color-ink-muted)] mb-4 flex items-center gap-2">
                <a href="{{ route('home') }}" class="hover:text-[var(--color-accent)]">Beranda</a>
                <span>/</span>
                <a href="{{ route('products') }}" class="hover:text-[var(--color-accent)]">Katalog CNC</a>
                <span>/</span>
                <span class="text-[var(--color-accent)]">{{ $product->sku_code }}</span>
            </nav>

            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6">
                <div>
                    <div class="text-xs font-mono text-[var(--color-accent)] mb-2">
                        DATASHEET KOMPONEN // {{ $product->category }}
                    </div>
                    <h1 class="font-display font-bold text-3xl sm:text-5xl text-[var(--color-ink)]">
                        {{ $product->name }}
                    </h1>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a
                        href="{{ route('rfq', ['produk' => $product->name, 'material' => $product->material_grade]) }}"
                        data-magnetic
                        class="btn-technical-primary"
                    >
                        <i data-lucide="file-spreadsheet" class="w-4 h-4" aria-hidden="true"></i>
                        <span>Minta Penawaran Komponen Ini</span>
                    </a>
                    <a
                        href="{{ $product->whatsapp_rfq_url }}"
                        target="_blank"
                        rel="noopener"
                        class="btn-technical-outline"
                    >
                        <i data-lucide="message-square" class="w-4 h-4 text-[var(--color-accent)]" aria-hidden="true"></i>
                        <span>Diskusi Engineer via WA</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Technical Specification Split -->
    <section
        x-data="{
            batchQty: 50,
            baseDays: {{ $product->lead_time_days }},
            get estimatedLeadTime() {
                if (this.batchQty <= 20) return this.baseDays;
                if (this.batchQty <= 100) return this.baseDays + 3;
                if (this.batchQty <= 500) return this.baseDays + 7;
                return this.baseDays + 12;
            },
            get inspectionProtocol() {
                if (this.batchQty <= 20) return '100% Full Dimensional CMM Report';
                return 'First Article Inspection (FAI) + AQL 1.0 Sampling & SPC CPK ≥ 1.67';
            }
        }"
        class="py-16 border-b border-[var(--color-hairline)] bg-[var(--color-canvas)]"
    >
        <div class="swiss-container">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
                <!-- Left: High-Res Visual + Interactive Batch Lead-Time Estimator (5 Cols) -->
                <div class="lg:col-span-5 space-y-6">
                    <div data-tilt-3d class="border border-[var(--color-hairline)] bg-[var(--color-surface)] p-4">
                        <div class="tilt-glare" aria-hidden="true"></div>
                        <div class="industrial-image-frame aspect-[4/3] border border-[var(--color-hairline)]">
                            <img
                                src="{{ $product->image_url }}"
                                alt="{{ $product->name }}"
                                fetchpriority="high"
                                width="700"
                                height="525"
                                class="w-full h-full object-cover"
                            >
                        </div>
                        <div class="pt-3 flex items-center justify-between text-xs font-mono text-[var(--color-ink-muted)]">
                            <span>KODE: {{ $product->sku_code }}</span>
                            <span>TOLERANSI: {{ $product->tolerance }}</span>
                        </div>
                    </div>

                    <!-- Interactive Batch Lead-Time & QC Estimator -->
                    <div class="border border-[var(--color-hairline-strong)] bg-[var(--color-surface)] p-6 space-y-4">
                        <div class="flex items-center justify-between border-b border-[var(--color-hairline)] pb-3">
                            <h2 class="font-display font-bold text-lg text-[var(--color-ink)]">
                                Kalkulator Estimasi Lead Time Batch
                            </h2>
                            <span class="font-mono text-xs text-[var(--color-accent)]">SIMULASI LINI</span>
                        </div>

                        <div>
                            <div class="flex justify-between text-xs font-mono mb-2">
                                <label for="batch-slider" class="text-[var(--color-ink-secondary)]">Kuantitas Pesanan:</label>
                                <span class="text-[var(--color-accent)] font-semibold tabular-nums" x-text="batchQty + ' Unit'">50 Unit</span>
                            </div>
                            <input
                                id="batch-slider"
                                type="range"
                                min="5"
                                max="1000"
                                step="5"
                                x-model.number="batchQty"
                                class="w-full accent-[var(--color-accent)] cursor-pointer"
                            >
                            <div class="flex justify-between text-[11px] font-mono text-[var(--color-ink-muted)] mt-1">
                                <span>5 pcs (Prototype)</span>
                                <span>250 pcs</span>
                                <span>1.000 pcs (Mass Production)</span>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-3 pt-2">
                            <div class="p-3 border border-[var(--color-hairline)] bg-[var(--color-canvas)]">
                                <div class="text-xs text-[var(--color-ink-muted)]">Estimasi Durasi Produksi</div>
                                <div class="font-mono font-semibold text-lg text-[var(--color-ink)] tabular-nums mt-0.5" x-text="estimatedLeadTime + ' Hari Kerja'">
                                    {{ $product->lead_time_days }} Hari Kerja
                                </div>
                            </div>
                            <div class="p-3 border border-[var(--color-hairline)] bg-[var(--color-canvas)]">
                                <div class="text-xs text-[var(--color-ink-muted)]">Kuantitas Minimum (MOQ)</div>
                                <div class="font-mono font-semibold text-sm text-[var(--color-accent)] mt-1">
                                    {{ $product->moq }}
                                </div>
                            </div>
                        </div>

                        <div class="p-3 border border-[var(--color-hairline)] bg-[var(--color-canvas)] text-xs">
                            <span class="text-[var(--color-ink-muted)] block mb-0.5">Protokol QC Batch:</span>
                            <span class="font-mono text-[var(--color-ink-secondary)]" x-text="inspectionProtocol"></span>
                        </div>
                    </div>
                </div>

                <!-- Right: Complete Engineering Datasheet Table (7 Cols) -->
                <div class="lg:col-span-7 space-y-8">
                    <div class="border border-[var(--color-hairline)] bg-[var(--color-surface)] p-6 sm:p-8 space-y-6">
                        <h2 class="font-display font-bold text-2xl text-[var(--color-ink)] border-b border-[var(--color-hairline)] pb-4">
                            Deskripsi &amp; Parameter Rekayasa
                        </h2>
                        <p class="text-base text-[var(--color-ink-secondary)] leading-relaxed">
                            {{ $product->short_description }}
                        </p>

                        <dl class="divide-y divide-[var(--color-hairline)] border-t border-b border-[var(--color-hairline)] text-sm">
                            <div class="py-3.5 grid grid-cols-1 sm:grid-cols-3 gap-2">
                                <dt class="text-[var(--color-ink-muted)]">Kode Referensi SKU</dt>
                                <dd class="sm:col-span-2 font-mono text-[var(--color-accent)]">{{ $product->sku_code }}</dd>
                            </div>
                            <div class="py-3.5 grid grid-cols-1 sm:grid-cols-3 gap-2">
                                <dt class="text-[var(--color-ink-muted)]">Grade Material Utama</dt>
                                <dd class="sm:col-span-2 font-mono text-[var(--color-ink)]">{{ $product->material_grade }}</dd>
                            </div>
                            <div class="py-3.5 grid grid-cols-1 sm:grid-cols-3 gap-2">
                                <dt class="text-[var(--color-ink-muted)]">Toleransi Dimensi</dt>
                                <dd class="sm:col-span-2 font-mono text-[var(--color-accent)] tabular-nums">{{ $product->tolerance }}</dd>
                            </div>
                            <div class="py-3.5 grid grid-cols-1 sm:grid-cols-3 gap-2">
                                <dt class="text-[var(--color-ink-muted)]">Kekasaran &amp; Surface Finish</dt>
                                <dd class="sm:col-span-2 font-mono text-[var(--color-ink)]">{{ $product->surface_finish }}</dd>
                            </div>
                            <div class="py-3.5 grid grid-cols-1 sm:grid-cols-3 gap-2">
                                <dt class="text-[var(--color-ink-muted)]">Tahapan Pemesinan</dt>
                                <dd class="sm:col-span-2 text-[var(--color-ink-secondary)]">{{ $product->machining_process }}</dd>
                            </div>
                            <div class="py-3.5 grid grid-cols-1 sm:grid-cols-3 gap-2">
                                <dt class="text-[var(--color-ink-muted)]">Rentang Dimensi</dt>
                                <dd class="sm:col-span-2 font-mono text-[var(--color-ink)] tabular-nums">{{ $product->dimensions }}</dd>
                            </div>
                            <div class="py-3.5 grid grid-cols-1 sm:grid-cols-3 gap-2">
                                <dt class="text-[var(--color-ink-muted)]">Minimum Order (MOQ)</dt>
                                <dd class="sm:col-span-2 font-mono text-[var(--color-ink)]">{{ $product->moq }}</dd>
                            </div>
                        </dl>

                        @if (!empty($product->technical_specs))
                            <div class="pt-2">
                                <h3 class="font-display font-semibold text-lg text-[var(--color-ink)] mb-3">
                                    Spesifikasi Pengujian &amp; Standar Tambahan
                                </h3>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                    @foreach ($product->technical_specs as $key => $val)
                                        <div class="p-3.5 border border-[var(--color-hairline)] bg-[var(--color-canvas)]">
                                            <div class="text-xs text-[var(--color-ink-muted)]">{{ $key }}</div>
                                            <div class="font-mono text-xs sm:text-sm text-[var(--color-ink)] mt-1">{{ $val }}</div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Components -->
    <section class="py-16 bg-[var(--color-surface)]">
        <div class="swiss-container">
            <h2 class="font-display font-bold text-2xl text-[var(--color-ink)] pb-8 border-b border-[var(--color-hairline)]">
                Komponen &amp; Kapabilitas Terkait
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-8">
                @foreach ($relatedProducts as $rel)
                    <article class="border border-[var(--color-hairline)] bg-[var(--color-canvas)] p-5 flex flex-col justify-between">
                        <div>
                            <div class="text-xs font-mono text-[var(--color-accent)] mb-2">{{ $rel->sku_code }}</div>
                            <h3 class="font-display font-bold text-lg text-[var(--color-ink)] mb-2">
                                <a href="{{ route('products.show', $rel->slug) }}" class="hover:text-[var(--color-accent)]">
                                    {{ $rel->name }}
                                </a>
                            </h3>
                            <p class="text-xs text-[var(--color-ink-muted)] line-clamp-2 mb-4">{{ $rel->short_description }}</p>
                        </div>
                        <a href="{{ route('products.show', $rel->slug) }}" class="text-xs font-mono text-[var(--color-ink)] hover:text-[var(--color-accent)]">
                            Lihat Spesifikasi
                        </a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
</x-layouts.app>
