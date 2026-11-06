<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('manufacturing_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('sku_code')->unique();
            $table->string('category'); // CNC 5-Axis Milling, CNC Swiss Turning, Sheet Metal & Laser, Dies & Jig Fixture
            $table->string('material_grade');
            $table->string('tolerance');
            $table->string('surface_finish');
            $table->string('machining_process');
            $table->string('moq');
            $table->integer('lead_time_days')->default(7);
            $table->string('dimensions');
            $table->text('short_description');
            $table->json('technical_specs')->nullable();
            $table->string('image_url');
            $table->boolean('is_featured')->default(false);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('manufacturing_products');
    }
};
