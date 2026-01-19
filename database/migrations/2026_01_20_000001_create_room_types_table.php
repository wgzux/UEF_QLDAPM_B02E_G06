<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('room_types', function (Blueprint $table) {
            $table->id();
            $table->string('type_name');
            $table->text('description')->nullable();
            $table->bigInteger('base_price')->default(0);
            $table->integer('max_occupancy')->default(2);
            $table->string('thumbnail_url')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('room_types');
    }
};
