<x-layouts.app
    title="Kontak Sales Engineering & Lokasi Pabrik Cikarang"
    description="Hubungi tim Sales Engineering PT Presisi Metalindo Teknik di Kawasan Industri Jababeka Tahap II, Cikarang Selatan, Bekasi untuk penawaran RFQ dan jadwal audit pabrik."
>
    <section class="py-14 border-b border-[var(--color-hairline)] blueprint-grid-bg">
        <div class="swiss-container">
            <div class="max-w-3xl space-y-3">
                <div class="text-xs font-mono text-[var(--color-accent)]">
                    KOORDINASI TEKNIS &amp; KUNJUNGAN PABRIK // JABABEKA II
                </div>
                <h1 class="font-display font-bold text-4xl sm:text-5xl text-[var(--color-ink)]">
                    Kontak &amp; Lokasi Workshop
                </h1>
                <p class="text-base text-[var(--color-ink-secondary)]">
                    Diskusikan kebutuhan komponen presisi, kirimkan undangan tender pengadaan, atau jadwalkan kunjungan inspeksi fasilitas bersama tim teknis kami.
                </p>
            </div>
        </div>
    </section>

    <section class="py-16 bg-[var(--color-canvas)]">
        <div class="swiss-container">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
                <!-- Left: Plant Address, Direct Contacts & Hours (5 Cols) -->
                <div class="lg:col-span-5 space-y-6">
                    <div data-tilt-3d class="border border-[var(--color-hairline)] bg-[var(--color-surface)] p-6 sm:p-8 space-y-6">
                        <div class="tilt-glare" aria-hidden="true"></div>

                        <div>
                            <div class="text-xs font-mono text-[var(--color-accent)] mb-1">ALAMAT WORKSHOP &amp; METROLOGI</div>
                            <h2 class="font-display font-bold text-xl text-[var(--color-ink)]">
                                {{ config('site.name') }}
                            </h2>
                            <p class="text-sm text-[var(--color-ink-secondary)] mt-2 leading-relaxed">
                                {{ config('site.address') }}, {{ config('site.city') }}, {{ config('site.province') }} {{ config('site.postal_code') }}
                            </p>
                        </div>

                        <div class="space-y-3 pt-4 border-t border-[var(--color-hairline)] text-sm">
                            <div>
                                <div class="text-xs font-mono text-[var(--color-ink-muted)]">Sales Engineering &amp; RFQ Desk</div>
                                <a href="https://wa.me/{{ config('site.whatsapp') }}" target="_blank" rel="noopener" class="font-mono font-semibold text-base text-[var(--color-accent)] hover:underline">
                                    {{ config('site.phone') }}
                                </a>
                            </div>
                            <div>
                                <div class="text-xs font-mono text-[var(--color-ink-muted)]">Hotline Teknis CAD / CAM &amp; QC</div>
                                <a href="https://wa.me/{{ config('site.whatsapp_alt') }}" target="_blank" rel="noopener" class="font-mono font-semibold text-base text-[var(--color-ink)] hover:text-[var(--color-accent)]">
                                    {{ config('site.phone_alt') }}
                                </a>
                            </div>
                            <div>
                                <div class="text-xs font-mono text-[var(--color-ink-muted)]">Email Pengadaan Resmi</div>
                                <a href="mailto:{{ config('site.email') }}" class="font-mono text-sm text-[var(--color-ink)] hover:text-[var(--color-accent)]">
                                    {{ config('site.email') }}
                                </a>
                            </div>
                        </div>

                        <div class="space-y-2 pt-4 border-t border-[var(--color-hairline)] text-xs font-mono text-[var(--color-ink-secondary)]">
                            <div>{{ config('site.opening_hours.office') }}</div>
                            <div>{{ config('site.opening_hours.plant') }}</div>
                        </div>

                        <div class="pt-2">
                            <a
                                href="{{ config('site.maps_url') }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                data-magnetic
                                class="btn-technical-outline w-full text-xs"
                            >
                                <i data-lucide="map-pin" class="w-4 h-4 text-[var(--color-accent)]" aria-hidden="true"></i>
                                <span>Buka Koordinat di Google Maps</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right: Direct Message / Plant Visit Form (7 Cols) -->
                <div class="lg:col-span-7">
                    <form
                        action="{{ route('contact.store') }}"
                        method="POST"
                        class="border border-[var(--color-hairline)] bg-[var(--color-surface)] p-6 sm:p-10 space-y-6"
                    >
                        @csrf

                        <!-- Honeypot -->
                        <div class="hidden" aria-hidden="true">
                            <label for="industrial_hp_check">Jangan diisi</label>
                            <input type="text" id="industrial_hp_check" name="industrial_hp_check" tabindex="-1" autocomplete="off">
                        </div>

                        <h2 class="font-display font-bold text-2xl text-[var(--color-ink)] border-b border-[var(--color-hairline)] pb-4">
                            Kirim Pesan Teknis / Jadwal Kunjungan Pabrik
                        </h2>

                        @if (session('success'))
                            <div role="status" class="p-4 border border-[var(--color-accent)] bg-[var(--color-canvas)] text-sm text-[var(--color-ink)] font-mono">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div role="alert" class="p-4 border border-[var(--color-danger)] bg-[var(--color-canvas)] text-xs text-[var(--color-danger)]">
                                Mohon lengkapi seluruh kolom wajib dengan benar.
                            </div>
                        @endif

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="name" class="block text-xs font-mono text-[var(--color-ink-secondary)] mb-2">Nama Lengkap *</label>
                                <input id="name" type="text" name="name" value="{{ old('name') }}" required class="input-technical" placeholder="Budi Santoso">
                            </div>
                            <div>
                                <label for="company" class="block text-xs font-mono text-[var(--color-ink-secondary)] mb-2">Nama Perusahaan</label>
                                <input id="company" type="text" name="company" value="{{ old('company') }}" class="input-technical" placeholder="PT Otomasi Industri">
                            </div>
                            <div>
                                <label for="email" class="block text-xs font-mono text-[var(--color-ink-secondary)] mb-2">Email *</label>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required class="input-technical" placeholder="budi@otomasi.co.id">
                            </div>
                            <div>
                                <label for="whatsapp" class="block text-xs font-mono text-[var(--color-ink-secondary)] mb-2">Nomor WhatsApp *</label>
                                <input id="whatsapp" type="text" name="whatsapp" value="{{ old('whatsapp') }}" required class="input-technical font-mono" placeholder="081234567890">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="subject" class="block text-xs font-mono text-[var(--color-ink-secondary)] mb-2">Subjek Keperluan *</label>
                                <input id="subject" type="text" name="subject" value="{{ old('subject') }}" required class="input-technical" placeholder="Jadwal Kunjungan Audit Pabrik / Konsultasi Spesifikasi Material">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="message" class="block text-xs font-mono text-[var(--color-ink-secondary)] mb-2">Pesan Detail *</label>
                                <textarea id="message" name="message" rows="4" required class="input-technical" placeholder="Tuliskan agenda diskusi atau spesifikasi singkat yang ingin dikonsultasikan...">{{ old('message') }}</textarea>
                            </div>
                        </div>

                        <div class="pt-2">
                            <button type="submit" data-magnetic class="btn-technical-primary">
                                <i data-lucide="send" class="w-4 h-4" aria-hidden="true"></i>
                                <span>Kirim Pesan ke Tim Engineering</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
