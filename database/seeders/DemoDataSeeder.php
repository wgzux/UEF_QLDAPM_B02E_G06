<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoomType;
use App\Models\Room;
use App\Models\Service;
use App\Models\Gallery;

class DemoDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Room Types
        $roomTypes = [
            [
                'name' => 'The Wandering Rose Villa',
                'slug' => 'wandering-rose-villa',
                'description' => 'Villa cao cấp với không gian rộng rãi, view núi rừng tuyệt đẹp',
                'base_price' => 5000000,
                'max_capacity' => 16,
                'amenities' => json_encode(['wifi', 'pool', 'bbq', 'parking']),
                'image' => 'https://images.unsplash.com/photo-1613490493576-7fde634acd811?q=80&w=2071&auto=format&fit=crop',
                'is_active' => true
            ],
            [
                'name' => 'Forest Room',
                'slug' => 'forest-room',
                'description' => 'Phòng giữa rừng, mang đến trải nghiệm gần gũi với thiên nhiên',
                'base_price' => 800000,
                'max_capacity' => 2,
                'amenities' => json_encode(['wifi', 'ac', 'tv']),
                'image' => 'https://images.unsplash.com/photo-1598928506311-c55ded91a20c?q=80&w=2070&auto=format&fit=crop',
                'is_active' => true
            ],
            [
                'name' => 'Deluxe Room',
                'slug' => 'deluxe-room',
                'description' => 'Phòng cao cấp với đầy đủ tiện nghi hiện đại',
                'base_price' => 1200000,
                'max_capacity' => 4,
                'amenities' => json_encode(['wifi', 'ac', 'tv', 'minibar']),
                'image' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=2070&auto=format&fit=crop',
                'is_active' => true
            ],
            [
                'name' => 'Pink Rose House',
                'slug' => 'pink-rose-house',
                'description' => 'Ngôi nhà màu hồng lãng mạn, thích hợp cho couples',
                'base_price' => 1500000,
                'max_capacity' => 2,
                'amenities' => json_encode(['wifi', 'ac', 'tv', 'bathtub']),
                'image' => 'https://images.unsplash.com/photo-1518780664697-55e3ad937233?q=80&w=1965&auto=format&fit=crop',
                'is_active' => true
            ]
        ];

        foreach ($roomTypes as $roomTypeData) {
            $roomType = RoomType::create($roomTypeData);
            
            // Create sample rooms for each type
            for ($i = 1; $i <= 3; $i++) {
                Room::create([
                    'room_number' => strtoupper(substr($roomType->slug, 0, 3)) . '-' . str_pad($i, 3, '0', STR_PAD_LEFT),
                    'room_type_id' => $roomType->id,
                    'floor' => rand(1, 3),
                    'status' => 'available',
                    'notes' => null
                ]);
            }
        }

        // Create Services
        $services = [
            [
                'name' => 'Tổ chức sinh nhật',
                'description' => 'Tổ chức tiệc sinh nhật ấm cúng tại villa',
                'category' => 'event',
                'price' => 2000000,
                'unit' => 'buổi',
                'image' => 'https://images.unsplash.com/photo-1530103862676-de3c9a59aa57?q=80&w=2070&auto=format&fit=crop',
                'is_active' => true
            ],
            [
                'name' => 'Teambuilding',
                'description' => 'Tổ chức hoạt động teambuilding ngoài trời',
                'category' => 'event',
                'price' => 3500000,
                'unit' => 'nhóm',
                'image' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop',
                'is_active' => true
            ],
            [
                'name' => 'Tiệc cưới nhỏ',
                'description' => 'Tổ chức tiệc cưới nhỏ cho 50-100 khách',
                'category' => 'wedding',
                'price' => 10000000,
                'unit' => 'tiệc',
                'image' => 'https://images.unsplash.com/photo-1519741497674-611481863552?q=80&w=2070&auto=format&fit=crop',
                'is_active' => true
            ],
            [
                'name' => 'Spa & Massage',
                'description' => 'Dịch vụ spa và massage thư giãn',
                'category' => 'extra',
                'price' => 500000,
                'unit' => 'người',
                'image' => 'https://images.unsplash.com/photo-1544161515-4ab6ce6db874?q=80&w=2070&auto=format&fit=crop',
                'is_active' => true
            ]
        ];

        foreach ($services as $serviceData) {
            Service::create($serviceData);
        }

        // Create Gallery Items
        $galleryItems = [
            [
                'title' => 'Villa View',
                'description' => 'Tổng quan khu villa',
                'file_path' => 'https://images.unsplash.com/photo-1613490493576-7fde63acd811?q=80&w=2071&auto=format&fit=crop',
                'type' => 'image',
                'category' => 'resort',
                'display_order' => 1,
                'is_featured' => true
            ],
            [
                'title' => 'Hồ bơi',
                'description' => 'Hồ bơi vô cực view núi',
                'file_path' => 'https://images.unsplash.com/photo-1575429198097-0414ec08e8cd?q=80&w=2070&auto=format&fit=crop',
                'type' => 'image',
                'category' => 'resort',
                'display_order' => 2,
                'is_featured' => true
            ],
            [
                'title' => 'Phòng ngủ cao cấp',
                'description' => 'Phòng ngủ Deluxe',
                'file_path' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=2070&auto=format&fit=crop',
                'type' => 'image',
                'category' => 'rooms',
                'display_order' => 3,
                'is_featured' => false
            ]
        ];

        foreach ($galleryItems as $itemData) {
            Gallery::create($itemData);
        }

        $this->command->info('✅ Demo data created successfully!');
        $this->command->info('Created:');
        $this->command->info('- ' . count($roomTypes) . ' room types');
        $this->command->info('- ' . (count($roomTypes) * 3) . ' rooms');
        $this->command->info('- ' . count($services) . ' services');
        $this->command->info('- ' . count($galleryItems) . ' gallery items');
    }
}
