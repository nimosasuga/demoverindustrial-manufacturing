<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('project_portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('client_industry'); // Otomotif Tier-2, Otomasi Pabrik, Pengolahan Pangan, Energi & Hidrolik, Medis & Laboratorium
            $table->string('component_type');
            $table->string('material_used');
            $table->string('batch_volume');
            $table->string('tolerance_achieved');
            $table->string('completion_year');
            $table->text('challenge_summary');
            $table->text('solution_summary');
            $table->string('image_url');
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('project_portfolios');
    }
};
