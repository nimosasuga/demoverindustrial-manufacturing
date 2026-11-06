<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('machines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->unique();
            $table->string('category'); // CNC Milling, CNC Turning, Sheet Metal Laser, Quality Metrology
            $table->string('brand_origin');
            $table->string('work_envelope');
            $table->string('positioning_accuracy');
            $table->string('spindle_speed');
            $table->integer('quantity_units')->default(1);
            $table->string('status_note')->default('Operasional Aktif · Terkalibrasi ISO');
            $table->string('image_url');
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('machines');
    }
};
