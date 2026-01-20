<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::set(
            'weekend_surcharge_percent',
            '10',
            'Phụ thu cuối tuần (%) - Áp dụng cho Thứ 7 và Chủ nhật'
        );

        $this->command->info('✅ Đã seed Settings: Phụ thu cuối tuần 10%');
    }
}
