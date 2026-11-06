<x-layouts.app
    :title="'Tiket RFQ ' . $rfq->reference_number"
    description="Konfirmasi penerimaan pengajuan Request for Quotation (RFQ) B2B PT Presisi Metalindo Teknik."
>
    <section class="py-16 sm:py-24 blueprint-grid-bg">
        <div class="swiss-container max-w-3xl">
            <div
                data-tilt-3d
                class="border border-[var(--color-hairline-strong)] bg-[var(--color-surface)] p-6 sm:p-10 space-y-8 relative"
            >
                <div class="tilt-glare" aria-hidden="true"></div>

                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-6 border-b border-[var(--color-hairline)]">
                    <div>
                        <div class="text-xs font-mono text-[var(--color-accent)]">
                            TIKET REGISTRASI PENGADAAN B2B // STATUS: DITERIMA
                        </div>
                        <h1 class="font-display font-bold text-3xl sm:text-4xl text-[var(--color-ink)] mt-1">
                            {{ $rfq->reference_number }}
                        </h1>
                    </div>
                    <div class="px-3 py-1.5 border border-[var(--color-accent)] bg-[var(--color-canvas)] font-mono text-xs text-[var(--color-accent)]">
                        SLA ESTIMATOR: 1×24 JAM
                    </div>
                </div>

                <p class="text-sm sm:text-base text-[var(--color-ink-secondary)] leading-relaxed">
                    Terima kasih, <strong class="text-[var(--color-ink)]">{{ $rfq->contact_name }}</strong> dari <strong class="text-[var(--color-ink)]">{{ $rfq->company_name }}</strong>. Spesifikasi permintaan penawaran Anda telah tercatat di sistem antrean rekayasa kami.
                </p>

                <dl class="grid grid-cols-1 sm:grid-cols-2 gap-4 p-5 border border-[var(--color-hairline)] bg-[var(--color-canvas)] text-xs font-mono">
                    <div>
                        <dt class="text-[var(--color-ink-muted)]">Komponen / Layanan</dt>
                        <dd class="text-[var(--color-ink)] mt-1">{{ $rfq->product_service }}</dd>
                    </div>
                    <div>
                        <dt class="text-[var(--color-ink-muted)]">Spesifikasi Material</dt>
                        <dd class="text-[var(--color-accent)] mt-1">{{ $rfq->material_grade }}</dd>
                    </div>
                    <div>
                        <dt class="text-[var(--color-ink-muted)]">Estimasi Kuantitas</dt>
                        <dd class="text-[var(--color-ink)] mt-1">{{ $rfq->estimated_quantity }}</dd>
                    </div>
                    <div>
                        <dt class="text-[var(--color-ink-muted)]">Target Toleransi</dt>
                        <dd class="text-[var(--color-ink)] mt-1">{{ $rfq->tolerance_requirement ?: 'Standar ISO 2768-mK' }}</dd>
                    </div>
                    <div>
                        <dt class="text-[var(--color-ink-muted)]">Lokasi Pengiriman</dt>
                        <dd class="text-[var(--color-ink)] mt-1">{{ $rfq->delivery_location }}</dd>
                    </div>
                    <div>
                        <dt class="text-[var(--color-ink-muted)]">Permintaan Dokumen NDA</dt>
                        <dd class="text-[var(--color-ink)] mt-1">{{ $rfq->nda_requested ? 'Ya — Sertakan Draf Mutual NDA' : 'Standar' }}</dd>
                    </div>
                </dl>

                <div class="flex flex-col sm:flex-row items-center gap-4 pt-2">
                    <a
                        href="{{ $rfq->whatsapp_followup_url }}"
                        target="_blank"
                        rel="noopener"
                        data-magnetic
                        class="btn-technical-primary w-full sm:w-auto"
                    >
                        <i data-lucide="send" class="w-4 h-4" aria-hidden="true"></i>
                        <span>Kirim Tiket &amp; File CAD via WhatsApp</span>
                    </a>

                    <button
                        type="button"
                        onclick="window.print()"
                        class="btn-technical-outline w-full sm:w-auto"
                    >
                        <i data-lucide="printer" class="w-4 h-4 text-[var(--color-accent)]" aria-hidden="true"></i>
                        <span>Cetak Bukti RFQ</span>
                    </button>

                    <a href="{{ route('products') }}" class="text-xs font-mono text-[var(--color-ink-muted)] hover:text-[var(--color-ink)] sm:ml-auto">
                        Kembali ke Katalog
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
