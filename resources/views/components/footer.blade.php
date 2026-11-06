<footer class="border-t border-[var(--color-hairline)] bg-[var(--color-canvas)] text-[var(--color-ink-secondary)]">
    <div class="swiss-container py-16">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-10 pb-12 border-b border-[var(--color-hairline)]">
            <!-- Col 1: Brand & Metrology Identity (5 cols) -->
            <div class="md:col-span-5 space-y-4">
                <div class="flex items-center gap-3">
                    <span class="w-8 h-8 flex items-center justify-center border border-[var(--color-accent)] bg-[var(--color-surface)] text-[var(--color-accent)] font-mono font-semibold text-xs">
                        PM
                    </span>
                    <span class="font-display font-bold text-xl text-[var(--color-ink)]">
                        {{ config('site.name') }}
                    </span>
                </div>
                <p class="text-sm text-[var(--color-ink-muted)] max-w-md leading-relaxed">
                    {{ config('site.description') }}
                </p>
                <div class="pt-2 space-y-1.5 text-xs font-mono text-[var(--color-ink-secondary)]">
                    <div>{{ config('site.certifications.iso') }}</div>
                    <div>{{ config('site.certifications.tolerance_standard') }}</div>
                    <div>{{ config('site.certifications.inspection') }}</div>
                </div>
            </div>

            <!-- Col 2: Navigasi Teknis (3 cols) -->
            <div class="md:col-span-3 space-y-3">
                <h2 class="font-display font-semibold text-base text-[var(--color-ink)]">
                    Dokumentasi & Layanan
                </h2>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('products') }}" class="hover:text-[var(--color-accent)] transition-colors">Katalog Komponen & CNC</a></li>
                    <li><a href="{{ route('facilities') }}" class="hover:text-[var(--color-accent)] transition-colors">Daftar Mesin & CMM</a></li>
                    <li><a href="{{ route('workflow') }}" class="hover:text-[var(--color-accent)] transition-colors">Alur Kerja SOP & QC FAI</a></li>
                    <li><a href="{{ route('portfolio') }}" class="hover:text-[var(--color-accent)] transition-colors">Portofolio Batch B2B</a></li>
                    <li><a href="{{ route('catalog') }}" class="hover:text-[var(--color-accent)] transition-colors">Unduh Katalog Datasheet</a></li>
                    <li><a href="{{ route('rfq') }}" class="hover:text-[var(--color-accent)] transition-colors">Formulir Request a Quote</a></li>
                </ul>
            </div>

            <!-- Col 3: Lokasi Pabrik & Kontak Engineering (4 cols) -->
            <div class="md:col-span-4 space-y-3">
                <h2 class="font-display font-semibold text-base text-[var(--color-ink)]">
                    Workshop & Sales Engineering
                </h2>
                <p class="text-sm text-[var(--color-ink-muted)] leading-relaxed">
                    {{ config('site.address') }}, {{ config('site.city') }}, {{ config('site.province') }} {{ config('site.postal_code') }}
                </p>
                <div class="space-y-1.5 text-sm">
                    <div class="flex items-center gap-2">
                        <i data-lucide="phone" class="w-4 h-4 text-[var(--color-accent)] shrink-0" aria-hidden="true"></i>
                        <a href="https://wa.me/{{ config('site.whatsapp') }}" target="_blank" rel="noopener" class="font-mono whitespace-nowrap inline-block hover:text-[var(--color-accent)]">
                            {{ config('site.phone') }} (Sales RFQ)
                        </a>
                    </div>
                    <div class="flex items-center gap-2">
                        <i data-lucide="wrench" class="w-4 h-4 text-[var(--color-accent)] shrink-0" aria-hidden="true"></i>
                        <a href="https://wa.me/{{ config('site.whatsapp_alt') }}" target="_blank" rel="noopener" class="font-mono whitespace-nowrap inline-block hover:text-[var(--color-accent)]">
                            {{ config('site.phone_alt') }} (Hotline CAD)
                        </a>
                    </div>
                    <div class="flex items-center gap-2">
                        <i data-lucide="mail" class="w-4 h-4 text-[var(--color-accent)] shrink-0" aria-hidden="true"></i>
                        <a href="mailto:{{ config('site.email') }}" class="font-mono hover:text-[var(--color-accent)]">
                            {{ config('site.email') }}
                        </a>
                    </div>
                </div>
                <div class="pt-2 text-xs text-[var(--color-ink-muted)] space-y-1">
                    <div>{{ config('site.opening_hours.office') }}</div>
                    <div>{{ config('site.opening_hours.plant') }}</div>
                </div>
            </div>
        </div>

        <div class="pt-8 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 text-xs text-[var(--color-ink-muted)]">
            <div>
                &copy; {{ date('Y') }} {{ config('site.name') }}. Standar EXPROSA Sektor 05 Industrial &amp; Manufacturing.
            </div>
            <div>
                Fotografi fasilitas &amp; ilustrasi komponen melalui lisensi Unsplash Industrial Collection.
            </div>
        </div>
    </div>
</footer>
