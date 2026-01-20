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
        Schema::create('gallery', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Tiêu đề
            $table->text('description')->nullable(); // Mô tả
            $table->string('file_path'); // Đường dẫn file
            $table->enum('type', ['image', 'video'])->default('image'); // Loại media
            $table->string('category')->nullable(); // resort, rooms, events, etc.
            $table->integer('display_order')->default(0); // Thứ tự hiển thị
            $table->boolean('is_featured')->default(false); // Nổi bật
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery');
    }
};
