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
            $table->integer('number_of_rooms')->default(5)->after('base_price')->comment('Total quantity of rooms of this type');
            $table->integer('capacity_adults')->default(2)->after('max_capacity')->comment('Standard adult capacity');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('room_types', function (Blueprint $table) {
            $table->dropColumn(['number_of_rooms', 'capacity_adults']);
        });
    }
};
