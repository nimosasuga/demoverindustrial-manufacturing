<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RfqInquiry extends Model
{
    protected $fillable = [
        'reference_number',
        'company_name',
        'contact_name',
        'job_title',
        'email',
        'whatsapp',
        'product_service',
        'material_grade',
        'estimated_quantity',
        'tolerance_requirement',
        'target_deadline',
        'delivery_location',
        'drawing_link_or_notes',
        'nda_requested',
        'status',
    ];

    protected $casts = [
        'nda_requested' => 'boolean',
    ];

    public function getWhatsappFollowupUrlAttribute(): string
    {
        $wa = config('site.whatsapp', '6285133331476');
        $ndaText = $this->nda_requested ? 'Ya (Butuh Dokumen NDA)' : 'Standar';

        $text = rawurlencode(
            "Halo Sales Engineering " . config('site.name') . ",\n\n" .
            "Konfirmasi Pengajuan RFQ B2B:\n" .
            "- No. Referensi: {$this->reference_number}\n" .
            "- Perusahaan: {$this->company_name}\n" .
            "- PIC: {$this->contact_name}" . ($this->job_title ? " ({$this->job_title})" : "") . "\n" .
            "- Kebutuhan: {$this->product_service}\n" .
            "- Material: {$this->material_grade}\n" .
            "- Estimasi Kuantitas: {$this->estimated_quantity}\n" .
            "- Toleransi: " . ($this->tolerance_requirement ?: 'Standar ISO 2768-mK') . "\n" .
            "- Lokasi Kirim: {$this->delivery_location}\n" .
            "- Proteksi NDA: {$ndaText}\n\n" .
            "Mohon tindak lanjut review drawing & penawaran resmi."
        );

        return "https://wa.me/{$wa}?text={$text}";
    }
}
