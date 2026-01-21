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
        Schema::table('services', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('name'); // Nullable for existing rows
            $table->longText('content')->nullable()->after('description'); // Nội dung chi tiết HTML
            $table->string('price_note')->nullable()->after('price'); // Ghi chú giá
            $table->json('features')->nullable()->after('content'); // Đặc điểm nổi bật
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['slug', 'content', 'price_note', 'features']);
        });
    }
};
