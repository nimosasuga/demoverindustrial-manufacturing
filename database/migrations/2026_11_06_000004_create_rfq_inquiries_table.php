<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rfq_inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('reference_number')->unique();
            $table->string('company_name');
            $table->string('contact_name');
            $table->string('job_title')->nullable();
            $table->string('email');
            $table->string('whatsapp');
            $table->string('product_service');
            $table->string('material_grade');
            $table->string('estimated_quantity');
            $table->string('tolerance_requirement')->nullable();
            $table->string('target_deadline')->nullable();
            $table->string('delivery_location');
            $table->text('drawing_link_or_notes')->nullable();
            $table->boolean('nda_requested')->default(false);
            $table->string('status')->default('submitted');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rfq_inquiries');
    }
};
