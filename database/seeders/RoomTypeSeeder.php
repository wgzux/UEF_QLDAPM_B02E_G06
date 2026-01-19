<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoomType;

class RoomTypeSeeder extends Seeder
{
    public function run()
    {
        RoomType::create([
            'type_name' => 'Deluxe room',
            'description' => 'Comfortable deluxe room',
            'base_price' => 5000000,
            'max_occupancy' => 2,
            'thumbnail_url' => null,
        ]);

        RoomType::create([
            'type_name' => 'Rose house',
            'description' => 'Cozy rose house',
            'base_price' => 50000000,
            'max_occupancy' => 6,
            'thumbnail_url' => null,
        ]);
    }
}
