<?php

return [
    'name' => env('SITE_NAME', 'PT Presisi Metalindo Teknik'),
    'short_name' => env('SITE_SHORT_NAME', 'PRESISI METALINDO'),
    'tagline' => env('SITE_TAGLINE', 'Manufaktur Komponen CNC 5-Axis, Fabrikasi Logam & Rekayasa Presisi B2B'),
    'description' => env('SITE_DESCRIPTION', 'Mitra manufaktur B2B spesialis pemesinan CNC 5-Axis, CNC Swiss Turning, fabrikasi sheet metal laser fiber, dan produksi komponen industri presisi tinggi dengan inspeksi CMM Mitutoyo.'),
    'phone' => env('SITE_PHONE', '+62 851-3333-1476'),
    'whatsapp' => env('SITE_WHATSAPP', '6285133331476'),
    'phone_alt' => env('SITE_PHONE_ALT', '+62 851-3333-1467'),
    'whatsapp_alt' => env('SITE_WHATSAPP_ALT', '6285133331467'),
    'whatsapp_message' => env('SITE_WHATSAPP_MESSAGE', 'Halo Tim Engineering PT Presisi Metalindo Teknik, kami ingin konsultasi spesifikasi drawing dan permintaan penawaran (RFQ).'),
    'email' => env('SITE_EMAIL', 'rfq@presisimetalindo.co.id'),
    'address' => env('SITE_ADDRESS', 'Kawasan Industri Jababeka Tahap II, Jl. Industri Selatan Blok JJ No. 14, Cikarang Selatan'),
    'city' => env('SITE_CITY', 'Bekasi'),
    'province' => env('SITE_PROVINCE', 'Jawa Barat'),
    'postal_code' => env('SITE_POSTAL_CODE', '17530'),
    'maps_url' => env('SITE_MAPS_URL', 'https://maps.google.com/?q=Kawasan+Industri+Jababeka+Cikarang+Bekasi'),
    'opening_hours' => [
        'office' => env('SITE_OPENING_HOURS_OFFICE', 'Senin - Jumat: 08:00 - 17:00 WIB (Sabtu: 08:00 - 13:00 WIB)'),
        'plant' => env('SITE_OPENING_HOURS_PLANT', 'Operasional Lini CNC: 24 Jam / 3 Shift (Senin - Sabtu)'),
    ],
    'certifications' => [
        'iso' => env('SITE_CERT_ISO', 'ISO 9001:2015 Quality Management System'),
        'tolerance_standard' => env('SITE_TOLERANCE_STD', 'ISO 2768-mK / Presisi Mikron ±0.005 mm'),
        'inspection' => env('SITE_INSPECTION_STD', '100% First Article Inspection (FAI) & CMM Report'),
    ],
    'capacity_summary' => [
        'cnc_centers' => '18 Unit Mesin CNC (5-Axis, VMC & Swiss Turning)',
        'max_tolerance' => '±0.005 mm',
        'monthly_output' => '45.000+ Komponen Presisi / Bulan',
        'lead_time_prototype' => '3 - 5 Hari Kerja (Fast-Track Prototype)',
    ],
    'social' => [
        'linkedin' => 'https://linkedin.com/company/presisi-metalindo-teknik',
        'instagram' => 'https://instagram.com/presisimetalindo.id',
        'youtube' => 'https://youtube.com/@presisimetalindoteknik',
    ],
];
