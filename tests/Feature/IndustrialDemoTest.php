<?php

namespace Tests\Feature;

use App\Models\ManufacturingProduct;
use App\Models\RfqInquiry;
use Database\Seeders\IndustrialDemoSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndustrialDemoTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(IndustrialDemoSeeder::class);
    }

    public function test_home_page_renders_3d_cad_stage_and_featured_capabilities(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Manufaktur Presisi Komponen Industri B2B');
        $response->assertSee('hero-3d-stage-wrapper');
        $response->assertSee('hero-particle-canvas');
        $response->assertSee('Impeller Turbin Kompresor 5-Axis');
        $response->assertSee('DMG MORI DMU 50');
    }

    public function test_products_catalog_and_category_filter_work(): void
    {
        $response = $this->get('/produk');
        $response->assertStatus(200);
        $response->assertSee('PMT-5X-0104');
        $response->assertSee('PMT-ST-0312');

        $filtered = $this->get('/produk?kategori=' . urlencode('CNC Swiss Turning'));
        $filtered->assertStatus(200);
        $filtered->assertSee('Poros Transmisi & Pinion Gear Presisi');
    }

    public function test_product_detail_datasheet_page_loads_with_batch_estimator(): void
    {
        $product = ManufacturingProduct::first();

        $response = $this->get('/produk/' . $product->slug);
        $response->assertStatus(200);
        $response->assertSee($product->name);
        $response->assertSee($product->sku_code);
        $response->assertSee('Kalkulator Estimasi Lead Time Batch');
    }

    public function test_facilities_and_cmm_metrology_page_loads(): void
    {
        $response = $this->get('/fasilitas-mesin');
        $response->assertStatus(200);
        $response->assertSee('Mitutoyo CRYSTA-Apex V574');
        $response->assertSee('Trumpf TruLaser 3030');
    }

    public function test_workflow_sop_and_iso_tolerance_table_page_loads(): void
    {
        $response = $this->get('/alur-kerja');
        $response->assertStatus(200);
        $response->assertSee('First Article Inspection');
        $response->assertSee('ISO 2768-1');
    }

    public function test_portfolio_and_industry_filter_page_loads(): void
    {
        $response = $this->get('/portofolio');
        $response->assertStatus(200);
        $response->assertSee('Produksi 12.000 Unit Housing Sensor Rem ABS Otomotif');
    }

    public function test_about_and_b2b_faq_page_loads(): void
    {
        $response = $this->get('/tentang');
        $response->assertStatus(200);
        $response->assertSee('Kebijakan Kerahasiaan Gambar Kerja (NDA)');
        $response->assertSee('Pertanyaan Umum Pengadaan B2B (FAQ)');
    }

    public function test_catalog_datasheet_download_page_loads(): void
    {
        $response = $this->get('/unduh-katalog');
        $response->assertStatus(200);
        $response->assertSee('Katalog Kapabilitas & Daftar Mesin');
    }

    public function test_rfq_submission_creates_record_and_redirects_to_ticket(): void
    {
        $payload = [
            'company_name' => 'PT Otomasi Presisi Indonesia',
            'contact_name' => 'Ir. Bambang Suryono',
            'job_title' => 'Lead Mechanical Engineer',
            'email' => 'bambang@otomasi.co.id',
            'whatsapp' => '081298765432',
            'product_service' => 'Impeller Turbin Kompresor 5-Axis (PMT-5X-0104)',
            'material_grade' => 'Aluminium 7075-T6',
            'estimated_quantity' => 'Medium Production (101 - 1.000 Unit)',
            'tolerance_requirement' => '±0.005 mm · Hard Anodized',
            'target_deadline' => '14 Hari Kerja',
            'delivery_location' => 'Kawasan Industri Jababeka Cikarang',
            'drawing_link_or_notes' => 'https://drive.google.com/example-step-drawing',
            'nda_requested' => '1',
        ];

        $response = $this->post('/request-quote', $payload);

        $rfq = RfqInquiry::first();
        $this->assertNotNull($rfq);
        $this->assertEquals('PT Otomasi Presisi Indonesia', $rfq->company_name);
        $this->assertTrue($rfq->nda_requested);
        $this->assertStringStartsWith('RFQ-', $rfq->reference_number);

        $response->assertRedirect(route('rfq.success', $rfq->id));

        $ticketPage = $this->get(route('rfq.success', $rfq->id));
        $ticketPage->assertStatus(200);
        $ticketPage->assertSee($rfq->reference_number);
        $ticketPage->assertSee('PT Otomasi Presisi Indonesia');
    }

    public function test_rfq_honeypot_blocks_automated_spam(): void
    {
        $response = $this->post('/request-quote', [
            'industrial_hp_check' => 'spam-bot-filled-this',
            'company_name' => 'Spam Corp',
        ]);

        $response->assertRedirect(route('rfq'));
        $this->assertDatabaseCount('rfq_inquiries', 0);
    }

    public function test_contact_form_submission_stores_message(): void
    {
        $response = $this->post('/kontak', [
            'name' => 'Andi Pratama',
            'company' => 'PT Mitra Logam',
            'email' => 'andi@mitralogam.co.id',
            'whatsapp' => '081122334455',
            'subject' => 'Jadwal Kunjungan Audit Pabrik',
            'message' => 'Kami ingin menjadwalkan audit fasilitas CNC & CMM minggu depan.',
        ]);

        $response->assertRedirect(route('contact'));
        $this->assertDatabaseHas('contact_messages', [
            'email' => 'andi@mitralogam.co.id',
            'subject' => 'Jadwal Kunjungan Audit Pabrik',
        ]);
    }

    public function test_sitemap_and_robots_txt_are_accessible(): void
    {
        $sitemap = $this->get('/sitemap.xml');
        $sitemap->assertStatus(200);
        $sitemap->assertSee('<urlset', false);

        $robots = $this->get('/robots.txt');
        $robots->assertStatus(200);
        $robots->assertSee('Sitemap:');
    }
}
