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
        Schema::create('contact_messages', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tên người gửi
            $table->string('email'); // Email
            $table->string('phone')->nullable(); // Số điện thoại
            $table->string('subject')->nullable(); // Chủ đề
            $table->text('message'); // Nội dung tin nhắn
            $table->boolean('is_read')->default(false); // Đã đọc chưa
            $table->timestamp('replied_at')->nullable(); // Thời gian phản hồi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_messages');
    }
};
