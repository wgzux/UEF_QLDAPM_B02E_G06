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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('room_id')->constrained('rooms')->onDelete('cascade');
            
            // Thông tin khách hàng
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('customer_phone');
            
            // Thông tin đặt phòng
            $table->date('check_in'); // Ngày nhận phòng
            $table->date('check_out'); // Ngày trả phòng
            $table->integer('adults')->default(1); // Số người lớn
            $table->integer('children')->default(0); // Số trẻ em
            $table->text('special_requests')->nullable(); // Yêu cầu đặc biệt
            
            // Giá và trạng thái
            $table->decimal('room_price', 10, 2); // Giá phòng
            $table->decimal('service_price', 10, 2)->default(0); // Tổng giá dịch vụ
            $table->decimal('total_price', 10, 2); // Tổng giá
            $table->enum('status', ['pending', 'confirmed', 'checked_in', 'checked_out', 'cancelled'])->default('pending');
            $table->enum('payment_status', ['unpaid', 'partial', 'paid', 'refunded'])->default('unpaid');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
