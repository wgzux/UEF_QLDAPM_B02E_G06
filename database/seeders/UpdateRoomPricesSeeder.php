<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdateRoomPricesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roomPrices = [
            'The Wandering Rose Villa' => 5000000,  // 5 triệu/đêm
            'Forest Room' => 2000000,                // 2 triệu/đêm
            'Deluxe Room' => 1500000,                // 1.5 triệu/đêm
            'Pink Rose House' => 3000000,            // 3 triệu/đêm
            'Family Room' => 2500000,                // 2.5 triệu/đêm
            'Rose House' => 3500000,                 // 3.5 triệu/đêm
            'Wooden House' => 4000000,               // 4 triệu/đêm
        ];

        foreach ($roomPrices as $name => $price) {
            DB::table('room_types')
                ->where('name', 'LIKE', "%{$name}%")
                ->update([
                    'base_price' => $price,
                    'updated_at' => now()
                ]);
        }

        $this->command->info('✅ Đã cập nhật giá phòng thành công!');
        $this->command->info('Villa: 5,000,000đ | Forest: 2,000,000đ | Deluxe: 1,500,000đ');
    }
}
