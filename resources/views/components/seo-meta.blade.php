@props([
    'title' => null,
    'description' => null,
])

@php
    $siteName = config('site.name', 'PT Presisi Metalindo Teknik');
    $pageTitle = $title ? "{$title} — {$siteName}" : "{$siteName} — " . config('site.tagline');
    $pageDesc = $description ?: config('site.description');
    $canonicalUrl = url()->current();
@endphp

<title>{{ $pageTitle }}</title>
<meta name="description" content="{{ $pageDesc }}">
<link rel="canonical" href="{{ $canonicalUrl }}">

<meta property="og:type" content="website">
<meta property="og:title" content="{{ $pageTitle }}">
<meta property="og:description" content="{{ $pageDesc }}">
<meta property="og:url" content="{{ $canonicalUrl }}">
<meta property="og:site_name" content="{{ $siteName }}">
<meta property="og:locale" content="id_ID">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $pageTitle }}">
<meta name="twitter:description" content="{{ $pageDesc }}">

@php
    $schemaData = [
        '@context' => 'https://schema.org',
        '@type' => 'LocalBusiness',
        'name' => $siteName,
        'description' => $pageDesc,
        'url' => url('/'),
        'telephone' => config('site.phone'),
        'email' => config('site.email'),
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => config('site.address'),
            'addressLocality' => config('site.city'),
            'addressRegion' => config('site.province'),
            'postalCode' => config('site.postal_code'),
            'addressCountry' => 'ID',
        ],
        'openingHours' => [
            'Mo-Fr 08:00-17:00',
            'Sa 08:00-13:00',
        ],
    ];
@endphp

<script type="application/ld+json">
{!! json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
