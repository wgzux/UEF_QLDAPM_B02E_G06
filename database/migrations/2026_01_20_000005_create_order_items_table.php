<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->foreignId('room_type_id')->nullable()->constrained('room_types')->nullOnDelete();
            $table->integer('quantity')->default(1);
            $table->bigInteger('price_per_unit')->default(0);
            $table->bigInteger('total_line_price')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_items');
    }
};
