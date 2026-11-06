<x-layouts.app
    title="Katalog Komponen CNC & Kemampuan Manufaktur"
    description="Katalog komponen CNC 5-Axis Milling, CNC Swiss Turning, fabrikasi sheet metal laser, dan pembuatan dies/jig presisi beserta spesifikasi material dan toleransi."
>
    <!-- Header Section -->
    <section class="py-16 border-b border-[var(--color-hairline)] blueprint-grid-bg relative overflow-hidden">
        <div
            data-parallax="0.14"
            aria-hidden="true"
            class="hidden lg:block absolute right-10 top-10 font-mono text-xs text-[var(--color-ink-muted)]/40 text-right select-none pointer-events-none"
        >
            <div>CATALOG // OEM &amp; MAKE-TO-PRINT</div>
            <div>CERT // MTC EN 10204 3.1</div>
        </div>
        <div class="swiss-container relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-end">
                <div class="lg:col-span-8 space-y-3">
                    <div class="text-xs font-mono text-[var(--color-accent)]">
                        KATALOG TEKNIS // MAKE-TO-PRINT &amp; OEM SUPPLY
                    </div>
                    <h1 class="font-display font-bold text-4xl sm:text-5xl text-[var(--color-ink)]">
                        Produk &amp; Kemampuan Manufaktur
                    </h1>
                    <p class="text-base text-[var(--color-ink-secondary)] max-w-2xl">
                        Seluruh item di bawah ini merupakan representasi kapabilitas pemesinan dan fabrikasi berdasarkan pesanan spesifikasi gambar kerja klien B2B.
                    </p>
                </div>
                <div class="lg:col-span-4 flex lg:justify-end">
                    <a href="{{ route('rfq') }}" data-magnetic class="btn-technical-primary">
                        <i data-lucide="file-plus-2" class="w-4 h-4" aria-hidden="true"></i>
                        <span>Kirim Gambar Kerja (RFQ)</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Filter & Search Bar (Minimal Text-Only Tabs separated by Hairlines) -->
    <section class="sticky top-[4.5rem] z-30 border-b border-[var(--color-hairline)] hud-blur-bar">
        <div class="swiss-container py-3 flex flex-col lg:flex-row lg:items-center justify-between gap-4">
            <!-- Text-only Category Tabs -->
            <nav aria-label="Filter Kategori Manufaktur" class="flex items-center overflow-x-auto divide-x divide-[var(--color-hairline)] border border-[var(--color-hairline)] bg-[var(--color-canvas)]">
                <a
                    href="{{ route('products') }}"
                    class="px-4 py-2 text-xs sm:text-sm font-medium whitespace-nowrap transition-colors {{ empty($selectedCategory) || $selectedCategory === 'Semua' ? 'bg-[var(--color-accent)] text-[var(--color-accent-ink)] font-semibold' : 'text-[var(--color-ink-secondary)] hover:text-[var(--color-ink)]' }}"
                >
                    Semua Lini ({{ \App\Models\ManufacturingProduct::count() }})
                </a>
                @foreach ($categories as $cat)
                    <a
                        href="{{ route('products', ['kategori' => $cat]) }}"
                        class="px-4 py-2 text-xs sm:text-sm font-medium whitespace-nowrap transition-colors {{ $selectedCategory === $cat ? 'bg-[var(--color-accent)] text-[var(--color-accent-ink)] font-semibold' : 'text-[var(--color-ink-secondary)] hover:text-[var(--color-ink)]' }}"
                    >
                        {{ $cat }}
                    </a>
                @endforeach
            </nav>

            <!-- Technical Keyword Search -->
            <form action="{{ route('products') }}" method="GET" class="flex items-center gap-2">
                @if ($selectedCategory)
                    <input type="hidden" name="kategori" value="{{ $selectedCategory }}">
                @endif
                <label for="search-spec" class="sr-only">Cari kode SKU, material, atau komponen</label>
                <input
                    id="search-spec"
                    type="search"
                    name="q"
                    value="{{ $search }}"
                    placeholder="Cari material (mis. SUS316L, 7075, Impeller)..."
                    class="input-technical min-h-[42px] py-1.5 text-sm sm:w-72"
                >
                <button type="submit" class="btn-technical-outline min-h-[42px] px-4 py-1.5 text-xs">
                    Cari
                </button>
            </form>
        </div>
    </section>

    <!-- Product Grid -->
    <section class="py-16 bg-[var(--color-canvas)]">
        <div class="swiss-container">
            @if ($products->isEmpty())
                <div class="corner-crosshair border border-[var(--color-hairline)] bg-[var(--color-surface)] p-12 text-center space-y-4">
                    <div class="font-display font-bold text-xl text-[var(--color-ink)]">
                        Komponen dengan filter tersebut tidak ditemukan
                    </div>
                    <p class="text-sm text-[var(--color-ink-muted)] max-w-md mx-auto">
                        Kami tetap dapat memproduksi komponen custom sesuai gambar kerja 2D/3D Anda. Silakan reset filter atau ajukan spesifikasi via formulir RFQ.
                    </p>
                    <div class="pt-2">
                        <a href="{{ route('products') }}" class="btn-technical-outline">Reset Filter Katalog</a>
                    </div>
                </div>
            @else
                <div data-reveal="stagger" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($products as $product)
                        <article
                            data-tilt-3d
                            class="css-scroll-entry corner-crosshair h-full flex flex-col justify-between border border-[var(--color-hairline)] bg-[var(--color-surface)] p-6 hover:border-[var(--color-accent)]"
                        >
                            <div class="tilt-glare" aria-hidden="true"></div>

                            <div>
                                <div class="flex items-center justify-between gap-2 pb-3 mb-4 border-b border-[var(--color-hairline)] text-xs font-mono">
                                    <span class="text-[var(--color-accent)]">{{ $product->sku_code }}</span>
                                    <span class="text-[var(--color-ink-muted)]">{{ $product->category }}</span>
                                </div>

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

                                <h2 class="font-display font-bold text-xl text-[var(--color-ink)] h-14 line-clamp-2 leading-snug flex items-start mb-2">
                                    <a href="{{ route('products.show', $product->slug) }}" class="hover:text-[var(--color-accent)] transition-colors">
                                        {{ $product->name }}
                                    </a>
                                </h2>

                                <p class="text-sm text-[var(--color-ink-muted)] h-[4.25rem] line-clamp-3 overflow-hidden mb-4">
                                    {{ $product->short_description }}
                                </p>

                                <dl class="grid grid-cols-2 gap-2 p-3 border border-[var(--color-hairline)] bg-[var(--color-canvas)] text-xs font-mono mb-4">
                                    <div>
                                        <dt class="text-[var(--color-ink-muted)]">Material</dt>
                                        <dd class="text-[var(--color-ink)] truncate mt-0.5">{{ $product->material_grade }}</dd>
                                    </div>
                                    <div>
                                        <dt class="text-[var(--color-ink-muted)]">Toleransi</dt>
                                        <dd class="text-[var(--color-accent)] mt-0.5 tabular-nums">{{ $product->tolerance }}</dd>
                                    </div>
                                    <div>
                                        <dt class="text-[var(--color-ink-muted)]">MOQ</dt>
                                        <dd class="text-[var(--color-ink)] truncate mt-0.5">{{ $product->moq }}</dd>
                                    </div>
                                    <div>
                                        <dt class="text-[var(--color-ink-muted)]">Lead Time</dt>
                                        <dd class="text-[var(--color-ink)] mt-0.5 tabular-nums">{{ $product->lead_time_days }} Hari Kerja</dd>
                                    </div>
                                </dl>
                            </div>

                            <div class="mt-auto pt-4 border-t border-[var(--color-hairline)] shrink-0 flex items-center justify-between gap-3">
                                <a
                                    href="{{ route('products.show', $product->slug) }}"
                                    class="text-xs font-mono text-[var(--color-ink-secondary)] hover:text-[var(--color-accent)] inline-flex items-center gap-1.5"
                                >
                                    <i data-lucide="file-search" class="w-3.5 h-3.5" aria-hidden="true"></i>
                                    <span>Buka Datasheet</span>
                                </a>

                                <a
                                    href="{{ route('rfq', ['produk' => $product->name, 'material' => $product->material_grade]) }}"
                                    class="px-3 py-2 bg-[var(--color-surface-elevated)] border border-[var(--color-hairline)] text-xs font-semibold text-[var(--color-ink)] hover:border-[var(--color-accent)] hover:text-[var(--color-accent)] transition-colors"
                                >
                                    Ajukan RFQ
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
</x-layouts.app>
