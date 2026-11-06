@props([
    'title' => null,
    'description' => null,
])

<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <x-seo-meta :title="$title" :description="$description" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">

    <script>
        (function () {
            var d = document.documentElement;
            d.classList.add('js');
            if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                d.classList.add('reduced-motion');
            }
            try {
                var c = document.createElement('canvas');
                var gl = window.WebGLRenderingContext && (c.getContext('webgl') || c.getContext('experimental-webgl'));
                d.classList.add(gl ? 'webgl' : 'no-webgl');
            } catch (e) {
                d.classList.add('no-webgl');
            }
        })();
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <noscript>
        <style>
            [data-reveal], .stage-3d-card, .container-scroll-card, [data-tilt-3d] {
                opacity: 1 !important;
                transform: none !important;
                filter: none !important;
            }
            #hero-particle-canvas, #scroll-progress-bar {
                display: none !important;
            }
        </style>
    </noscript>
</head>
<body class="min-h-screen flex flex-col bg-[var(--color-canvas)] text-[var(--color-ink)] selection:bg-[var(--color-accent)] selection:text-[var(--color-accent-ink)]">
    <!-- Purely decorative scroll progress bar (modern-web-guidance: scroll-progress-indicator) -->
    <div id="scroll-progress-bar" aria-hidden="true"></div>

    <a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:top-3 focus:left-3 focus:z-50 focus:px-4 focus:py-2 focus:bg-[var(--color-accent)] focus:text-[var(--color-accent-ink)] focus:font-semibold">
        Langsung ke konten utama
    </a>

    <x-navbar />

    <main id="main-content" class="flex-grow">
        {{ $slot }}
    </main>

    <x-footer />
    <x-floating-whatsapp />
</body>
</html>
