<x-layouts.app
    title="Unduh Katalog Datasheet & Kapabilitas Mesin PDF"
    description="Ringkasan datasheet teknis kapabilitas pemesinan CNC 5-Axis, daftar inventaris mesin, dan matriks grade material PT Presisi Metalindo Teknik untuk keperluan vendor registrasi."
>
    <section class="py-14 border-b border-[var(--color-hairline)] blueprint-grid-bg">
        <div class="swiss-container">
            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6">
                <div class="max-w-3xl space-y-3">
                    <div class="text-xs font-mono text-[var(--color-accent)]">
                        DOKUMEN VENDOR REGISTRATION // TECHNICAL DATASHEET
                    </div>
                    <h1 class="font-display font-bold text-4xl sm:text-5xl text-[var(--color-ink)]">
                        Katalog Kapabilitas &amp; Daftar Mesin
                    </h1>
                    <p class="text-base text-[var(--color-ink-secondary)]">
                        Halaman ini diformat khusus sebagai lembar spesifikasi vendor (Company Capability Datasheet) yang dapat langsung dicetak atau disimpan sebagai PDF untuk lampiran pengadaan internal perusahaan Anda.
                    </p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <button
                        type="button"
                        onclick="window.print()"
                        data-magnetic
                        class="btn-technical-primary"
                    >
                        <i data-lucide="printer" class="w-4 h-4" aria-hidden="true"></i>
                        <span>Cetak / Simpan PDF</span>
                    </button>
                    <a href="{{ route('rfq') }}" class="btn-technical-outline">
                        <span>Formulir RFQ</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-[var(--color-canvas)]">
        <div class="swiss-container space-y-12">
            <!-- Summary Vendor Identity Sheet -->
            <div class="border border-[var(--color-hairline)] bg-[var(--color-surface)] p-6 sm:p-8">
                <h2 class="font-display font-bold text-2xl text-[var(--color-ink)] pb-4 mb-6 border-b border-[var(--color-hairline)]">
                    1. Ringkasan Data Vendor Manufaktur
                </h2>
                <dl class="grid grid-cols-1 md:grid-cols-3 gap-6 text-sm">
                    <div>
                        <dt class="text-xs font-mono text-[var(--color-ink-muted)]">Nama Badan Hukum</dt>
                        <dd class="font-semibold text-[var(--color-ink)] mt-1">{{ config('site.name') }}</dd>
                    </div>
                    <div>
                        <dt class="text-xs font-mono text-[var(--color-ink-muted)]">Lokasi Fasilitas Workshop</dt>
                        <dd class="text-[var(--color-ink-secondary)] mt-1">{{ config('site.address') }}, {{ config('site.city') }}</dd>
                    </div>
                    <div>
                        <dt class="text-xs font-mono text-[var(--color-ink-muted)]">Standar Mutu &amp; Kalibrasi</dt>
                        <dd class="font-mono text-xs text-[var(--color-accent)] mt-1">{{ config('site.certifications.iso') }} · {{ config('site.certifications.tolerance_standard') }}</dd>
                    </div>
                </dl>
            </div>

            <!-- Machine Inventory Sheet -->
            <div class="space-y-4">
                <h2 id="catalog-machines-heading" class="font-display font-bold text-2xl text-[var(--color-ink)]">
                    2. Matriks Inventaris Mesin Produksi &amp; QC
                </h2>
                <div tabindex="0" role="region" aria-labelledby="catalog-machines-heading" class="table-wrapper">
                    <table>
                        <caption class="sr-only">Daftar mesin produksi dan metrologi untuk lampiran vendor</caption>
                        <thead>
                            <tr class="border-b border-[var(--color-hairline)] text-left text-xs font-mono text-[var(--color-ink-secondary)]">
                                <th scope="col" class="py-3 px-4">Kode</th>
                                <th scope="col" class="py-3 px-4">Mesin &amp; Manufaktur</th>
                                <th scope="col" class="py-3 px-4">Kapasitas Meja</th>
                                <th scope="col" class="py-3 px-4">Akurasi</th>
                                <th scope="col" class="py-3 px-4 text-right">Unit</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[var(--color-hairline)] text-sm font-mono tabular-nums">
                            @foreach ($machines as $m)
                                <tr>
                                    <th scope="row" class="py-3.5 px-4 text-left text-[var(--color-accent)]">{{ $m->code }}</th>
                                    <td data-label="Mesin" class="py-3.5 px-4 font-sans text-[var(--color-ink)]">{{ $m->name }} ({{ $m->brand_origin }})</td>
                                    <td data-label="Kapasitas" class="py-3.5 px-4 text-xs">{{ $m->work_envelope }}</td>
                                    <td data-label="Akurasi" class="py-3.5 px-4 text-xs text-[var(--color-accent)]">{{ $m->positioning_accuracy }}</td>
                                    <td data-label="Unit" class="py-3.5 px-4 text-right">{{ $m->quantity_units }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Product & Capability Sheet -->
            <div class="space-y-4">
                <h2 id="catalog-products-heading" class="font-display font-bold text-2xl text-[var(--color-ink)]">
                    3. Daftar Kapabilitas Komponen &amp; Spesifikasi Material
                </h2>
                <div tabindex="0" role="region" aria-labelledby="catalog-products-heading" class="table-wrapper">
                    <table>
                        <caption class="sr-only">Daftar komponen dan spesifikasi material</caption>
                        <thead>
                            <tr class="border-b border-[var(--color-hairline)] text-left text-xs font-mono text-[var(--color-ink-secondary)]">
                                <th scope="col" class="py-3 px-4">SKU</th>
                                <th scope="col" class="py-3 px-4">Nama Komponen</th>
                                <th scope="col" class="py-3 px-4">Material</th>
                                <th scope="col" class="py-3 px-4">Toleransi</th>
                                <th scope="col" class="py-3 px-4">MOQ</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[var(--color-hairline)] text-sm">
                            @foreach ($products as $p)
                                <tr>
                                    <th scope="row" class="py-3.5 px-4 text-left font-mono text-xs text-[var(--color-accent)]">{{ $p->sku_code }}</th>
                                    <td data-label="Komponen" class="py-3.5 px-4 font-semibold text-[var(--color-ink)]">{{ $p->name }}</td>
                                    <td data-label="Material" class="py-3.5 px-4 font-mono text-xs text-[var(--color-ink-secondary)]">{{ $p->material_grade }}</td>
                                    <td data-label="Toleransi" class="py-3.5 px-4 font-mono text-xs text-[var(--color-accent)] tabular-nums">{{ $p->tolerance }}</td>
                                    <td data-label="MOQ" class="py-3.5 px-4 font-mono text-xs">{{ $p->moq }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
