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
        Schema::create('booking_guests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained()->onDelete('cascade');
            $table->foreignId('room_type_id')->nullable()->constrained()->onDelete('set null'); // Optional: Link to specific room type (or instance if we have room table per unit)
            $table->string('full_name');
            $table->string('passport_id')->nullable();
            $table->string('nationality')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable(); // male, female, other
            $table->boolean('is_primary_contact')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_guests');
    }
};
