@php
    $waNumber = config('site.whatsapp', '6285133331476');
    $waMessage = rawurlencode(config('site.whatsapp_message', 'Halo Tim Engineering PT Presisi Metalindo Teknik, kami ingin konsultasi spesifikasi drawing dan permintaan penawaran (RFQ).'));
@endphp

<div class="fixed bottom-4 right-4 sm:bottom-6 sm:right-6 z-40">
    <a
        href="https://wa.me/{{ $waNumber }}?text={{ $waMessage }}"
        target="_blank"
        rel="noopener noreferrer"
        data-magnetic
        aria-label="Konsultasi Teknis & Kirim Drawing via WhatsApp"
        class="inline-flex items-center gap-2.5 px-4 py-3 min-h-[48px] border border-[var(--color-accent)] bg-[var(--color-surface-elevated)] text-[var(--color-ink)] shadow-lg hover:bg-[var(--color-accent)] hover:text-[var(--color-accent-ink)] transition-colors duration-200"
    >
        <i data-lucide="message-square-code" class="w-5 h-5 text-[var(--color-accent)] group-hover:text-[var(--color-accent-ink)] shrink-0" aria-hidden="true"></i>
        <span class="text-sm font-semibold whitespace-nowrap hidden sm:inline">WhatsApp Engineering</span>
    </a>
</div>
