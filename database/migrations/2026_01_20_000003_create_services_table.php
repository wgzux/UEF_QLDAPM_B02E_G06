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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tên dịch vụ
            $table->text('description')->nullable(); // Mô tả
            $table->string('category')->nullable(); // wedding, event, extra, etc.
            $table->decimal('price', 10, 2); // Giá dịch vụ
            $table->string('unit')->default('lần'); // Đơn vị tính (lần, người, giờ, etc.)
            $table->string('image')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
