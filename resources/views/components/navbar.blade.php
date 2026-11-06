<header
    id="site-hud-header"
    x-data="{ mobileOpen: false }"
    class="sticky top-0 z-40 w-full border-b border-[var(--color-hairline)] hud-blur-bar"
>
    <div class="swiss-container">
        <div class="flex items-center justify-between h-[4.5rem] gap-4">
            <!-- Brand Wordmark + Architectural Crosshair Monogram -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group shrink-0">
                <span class="corner-crosshair w-9 h-9 flex items-center justify-center border border-[var(--color-hairline-strong)] bg-[var(--color-surface)] text-[var(--color-accent)] font-mono font-semibold text-xs">
                    PM
                </span>
                <div class="flex flex-col">
                    <span class="font-display font-bold text-base sm:text-lg tracking-tight text-[var(--color-ink)] leading-none whitespace-nowrap">
                        {{ config('site.short_name', 'PRESISI METALINDO') }}
                    </span>
                    <span class="font-mono text-[10px] text-[var(--color-ink-muted)] mt-1 hidden sm:inline-block">
                        CNC 5-AXIS &amp; METROLOGY LAB
                    </span>
                </div>
            </a>

            <!-- Desktop Navigation (Sentence case, untracked per Hallmark Gate 67 & 49a) -->
            <nav aria-label="Navigasi Utama" class="hidden lg:flex items-center divide-x divide-[var(--color-hairline)] border-x border-[var(--color-hairline)] bg-[var(--color-canvas)]/40">
                @php
                    $navItems = [
                        ['label' => 'Beranda', 'route' => 'home'],
                        ['label' => 'Katalog CNC', 'route' => 'products'],
                        ['label' => 'Fasilitas Mesin', 'route' => 'facilities'],
                        ['label' => 'Alur SOP', 'route' => 'workflow'],
                        ['label' => 'Portofolio', 'route' => 'portfolio'],
                        ['label' => 'Profil & FAQ', 'route' => 'about'],
                        ['label' => 'Kontak', 'route' => 'contact'],
                    ];
                @endphp

                @foreach ($navItems as $item)
                    @php
                        $isActive = request()->routeIs($item['route']) || ($item['route'] === 'products' && request()->routeIs('products.*'));
                    @endphp
                    <a
                        href="{{ route($item['route']) }}"
                        class="relative px-4 py-2.5 text-sm font-medium whitespace-nowrap transition-colors duration-200 {{ $isActive ? 'text-[var(--color-accent)] bg-[var(--color-surface-elevated)] border-b-2 border-b-[var(--color-accent)]' : 'text-[var(--color-ink-secondary)] hover:text-[var(--color-ink)] hover:bg-[var(--color-surface)]' }}"
                    >
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </nav>

            <!-- Live Z-Axis Scroll Telemetry + Primary Action (RFQ) -->
            <div class="hidden sm:flex items-center gap-3 shrink-0">
                <span
                    id="hud-scroll-telemetry"
                    aria-hidden="true"
                    class="hidden xl:inline-flex items-center px-2.5 py-1.5 border border-[var(--color-hairline)] bg-[var(--color-canvas)] font-mono text-[11px] text-[var(--color-accent)] tabular-nums"
                >
                    Z-POS // 000%
                </span>

                <a
                    href="{{ route('rfq') }}"
                    data-magnetic
                    class="btn-technical-primary text-sm px-4 min-h-[44px]"
                >
                    <i data-lucide="file-spreadsheet" class="w-4 h-4" aria-hidden="true"></i>
                    <span>Minta Penawaran</span>
                </a>
            </div>

            <!-- Mobile Hamburger Control (Min 44px Touch Target) -->
            <button
                type="button"
                @click="mobileOpen = !mobileOpen"
                :aria-expanded="mobileOpen.toString()"
                aria-controls="mobile-nav-drawer"
                aria-label="Buka menu navigasi"
                class="lg:hidden inline-flex items-center justify-center w-11 h-11 min-h-[44px] border border-[var(--color-hairline)] bg-[var(--color-surface)] text-[var(--color-ink)]"
            >
                <i x-show="!mobileOpen" data-lucide="menu" class="w-5 h-5" aria-hidden="true"></i>
                <i x-show="mobileOpen" data-lucide="x" class="w-5 h-5" aria-hidden="true" style="display: none;"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation Drawer with Optical Blur -->
    <div
        id="mobile-nav-drawer"
        x-show="mobileOpen"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        style="display: none;"
        class="lg:hidden border-t border-[var(--color-hairline)] optical-blur-panel"
    >
        <div class="swiss-container py-4 flex flex-col divide-y divide-[var(--color-hairline)]">
            @foreach ($navItems as $item)
                @php
                    $isActive = request()->routeIs($item['route']) || ($item['route'] === 'products' && request()->routeIs('products.*'));
                @endphp
                <a
                    href="{{ route($item['route']) }}"
                    class="flex items-center justify-between min-h-[48px] px-2 text-base font-medium {{ $isActive ? 'text-[var(--color-accent)]' : 'text-[var(--color-ink)]' }}"
                >
                    <span>{{ $item['label'] }}</span>
                    <i data-lucide="chevron-right" class="w-4 h-4 text-[var(--color-ink-muted)]" aria-hidden="true"></i>
                </a>
            @endforeach

            <div class="pt-4 flex flex-col sm:flex-row gap-3">
                <a href="{{ route('rfq') }}" class="btn-technical-primary w-full">
                    <i data-lucide="file-text" class="w-4 h-4" aria-hidden="true"></i>
                    <span>Ajukan RFQ Sekarang</span>
                </a>
                <a href="{{ route('catalog') }}" class="btn-technical-outline w-full">
                    <i data-lucide="download" class="w-4 h-4" aria-hidden="true"></i>
                    <span>Datasheet PDF</span>
                </a>
            </div>
        </div>
    </div>
</header>
