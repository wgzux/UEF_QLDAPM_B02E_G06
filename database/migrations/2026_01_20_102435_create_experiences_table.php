<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tên trải nghiệm/tour
            $table->string('slug')->unique(); // URL-friendly slug
            $table->text('description')->nullable(); // Mô tả ngắn
            $table->longText('content')->nullable(); // Nội dung chi tiết (HTML)
            $table->string('duration')->nullable(); // Thời lượng (e.g., "2 ngày 1 đêm")
            $table->string('location')->nullable(); // Địa điểm
            $table->string('price_note')->nullable(); // Ghi chú giá (e.g., "Liên hệ")
            $table->string('image')->nullable(); // Ảnh đại diện
            $table->json('features')->nullable(); // Các đặc điểm nổi bật (bullet points)
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
