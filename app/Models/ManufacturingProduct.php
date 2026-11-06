<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ManufacturingProduct extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'sku_code',
        'category',
        'material_grade',
        'tolerance',
        'surface_finish',
        'machining_process',
        'moq',
        'lead_time_days',
        'dimensions',
        'short_description',
        'technical_specs',
        'image_url',
        'is_featured',
        'sort_order',
    ];

    protected $casts = [
        'technical_specs' => 'array',
        'is_featured' => 'boolean',
        'lead_time_days' => 'integer',
        'sort_order' => 'integer',
    ];

    public function getWhatsappRfqUrlAttribute(): string
    {
        $wa = config('site.whatsapp', '6285133331476');
        $text = rawurlencode(
            "Halo Tim Engineering " . config('site.name') . ",\n\n" .
            "Kami ingin meminta penawaran (RFQ) untuk komponen:\n" .
            "- Nama: {$this->name} ({$this->sku_code})\n" .
            "- Kategori: {$this->category}\n" .
            "- Material: {$this->material_grade}\n" .
            "- Toleransi: {$this->tolerance}\n\n" .
            "Mohon informasi estimasi harga batch dan jadwal produksi."
        );

        return "https://wa.me/{$wa}?text={$text}";
    }
}
