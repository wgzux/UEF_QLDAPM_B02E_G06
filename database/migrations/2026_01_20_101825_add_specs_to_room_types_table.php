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
        Schema::table('room_types', function (Blueprint $table) {
            // Only add columns that don't exist yet
            $table->integer('max_children')->default(0)->comment('Maximum children allowed')->after('max_capacity');
            $table->string('view_direction')->nullable()->comment('View direction (e.g., Hướng vườn, Hướng hồ)')->after('bed_info');
            $table->json('images')->nullable()->comment('Multiple room images')->after('image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('room_types', function (Blueprint $table) {
            $table->dropColumn(['max_children', 'view_direction', 'images']);
        });
    }
};
