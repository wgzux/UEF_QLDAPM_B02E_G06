<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoomType;
use Illuminate\Support\Str;

class StandardRoomTypesSeeder extends Seeder
{
    /**
     * Seed standard room types (Wooden House & Rose House zones)
     */
    public function run(): void
    {
        $standardRooms = [
            // Wooden House Rooms
            [
                'name' => 'Forest Room',
                'slug' => 'forest-room',
                'description' => '<p>Forest Room tại Khu Wooden House là không gian nghỉ dưỡng lý tưởng dành cho các nhóm lớn với sức chứa lên đến 16 người. Phòng được thiết kế theo phong cách mộc mạc, gần gũi với thiên nhiên, tạo cảm giác thư giãn và ấm cúng.</p><p>Với diện tích rộng 48m² và 2 phòng ngủ, Forest Room phù hợp cho các gia đình đông người hoặc nhóm bạn muốn có một kỳ nghỉ cùng nhau tại Ba Vì.</p>',
                'base_price' => 2000000.00,
                'max_capacity' => 16,
                'size' => 48,
                'bed_info' => '08 đệm 1m6 x 1m8',
                'max_children' => 4,
                'view_direction' => 'Hướng vườn và rừng',
                'number_of_rooms' => 1,
                'capacity_adults' => 10,
                'amenities' => json_encode([
                    ['title' => 'Wi-Fi 24/7', 'desc' => 'Luôn duy trì sự kết nối mượt mà trong suốt kỳ nghỉ'],
                    ['title' => 'Điều hòa không khí', 'desc' => 'Duy trì không gian thoáng mát, dễ chịu'],
                    ['title' => 'Nệm cao cấp', 'desc' => 'Mang lại giấc ngủ êm ái và trọn vẹn'],
                    ['title' => 'Phòng tắm riêng', 'desc' => 'Vòi sen mưa & sen cầm tay'],
                    ['title' => 'Trà và cà phê miễn phí', 'desc' => 'Được chuẩn bị sẵn để thưởng thức'],
                    ['title' => 'View vườn & rừng', 'desc' => 'Tầm nhìn xanh mát, thư giãn'],
                ]),
                'image' => 'https://images.unsplash.com/photo-1631049307264-da0ec9d70304',
                'is_active' => true,
            ],
            [
                'name' => 'Deluxe Room',
                'slug' => 'deluxe-room',
                'description' => '<p>Deluxe Room tại Khu Wooden House mang đến không gian riêng tư và lãng mạn cho các cặp đôi. Phòng được thiết kế tinh tế với nội thất gỗ ấm áp, kết hợp hài hòa giữa phong cách hiện đại và nét truyền thống.</p><p>Với diện tích 18m², phòng được trang bị đầy đủ tiện nghi cao cấp, đảm bảo mang lại trải nghiệm nghỉ dưỡng thoải mái và đáng nhớ nhất.</p>',
                'base_price' => 1500000.00,
                'max_capacity' => 2,
                'size' => 18,
                'bed_info' => '01 giường 1m8 x 2m',
                'max_children' => 0,
                'view_direction' => 'Hướng vườn',
                'number_of_rooms' => 5,
                'capacity_adults' => 2,
                'amenities' => json_encode([
                    ['title' => 'Wi-Fi 24/7', 'desc' => 'Kết nối internet tốc độ cao'],
                    ['title' => 'Smart TV', 'desc' => 'Giải trí đa dạng ngay tại phòng'],
                    ['title' => 'Điều hòa không khí', 'desc' => 'Kiểm soát nhiệt độ hoàn hảo'],
                    ['title' => 'Nệm pillow-top cao cấp', 'desc' => 'Giấc ngủ êm ái tuyệt đối'],
                    ['title' => 'Vòi sen mưa', 'desc' => 'Trải nghiệm tắm thư giãn'],
                    ['title' => 'Minibar & ấm đun', 'desc' => 'Tiện nghi phục vụ 24/7'],
                ]),
                'image' => 'https://images.unsplash.com/photo-1590490360182-c33d57733427',
                'is_active' => true,
            ],
            [
                'name' => 'Family Room',
                'slug' => 'family-room',
                'description' => '<p>Family Room tại Khu Wooden House là lựa chọn hoàn hảo cho các gia đình nhỏ với sức chứa 4 người lớn. Không gian rộng rãi 25m² được bố trí thông minh với 2 giường lớn, đảm bảo sự thoải mái cho cả gia đình.</p><p>Phòng có view nhìn ra khu vườn xanh mát, mang đến cảm giác gần gũi với thiên nhiên Ba Vì trong lành.</p>',
                'base_price' => 1800000.00,
                'max_capacity' => 4,
                'size' => 25,
                'bed_info' => '02 giường 1m6 x 2m',
                'max_children' => 2,
                'view_direction' => 'Hướng vườn',
                'number_of_rooms' => 3,
                'capacity_adults' => 4,
                'amenities' => json_encode([
                    ['title' => 'Wi-Fi miễn phí', 'desc' => 'Tốc độ cao, ổn định'],
                    ['title' => 'TV Smart 43 inch', 'desc' => 'Giải trí đa dạng cho gia đình'],
                    ['title' => 'Điều hòa 2 chiều', 'desc' => 'Phù hợp mọi thời tiết'],
                    ['title' => '2 Nệm cao cấp', 'desc' => 'Đảm bảo giấc ngủ ngon'],
                    ['title' => 'Phòng tắm rộng', 'desc' => 'Sen nóng lạnh, đồ dùng cao cấp'],
                    ['title' => 'Ban công riêng', 'desc' => 'Thư giãn với view vườn'],
                ]),
                'image' => 'https://images.unsplash.com/photo-1611892440504-42a792e24d32',
                'is_active' => true,
            ],
            
            // Rose House Rooms
            [
                'name' => 'Pink Rose House',
                'slug' => 'pink-rose-house',
                'description' => '<p>Pink Rose House mang đến không gian lãng mạn với sắc hồng pastel dịu dàng. Phòng được thiết kế theo phong cách vintage kết hợp hiện đại, tạo nên không gian ấm cúng và tinh tế.</p><p>Với diện tích 30m² và sức chứa 4 người, Pink Rose House là lựa chọn tuyệt vời cho các cặp đôi hoặc gia đình nhỏ muốn có một kỳ nghỉ riêng tư và lãng mạn.</p>',
                'base_price' => 2200000.00,
                'max_capacity' => 4,
                'size' => 30,
                'bed_info' => '02 giường 1m8 x 2m',
                'max_children' => 2,
                'view_direction' => 'Hướng hồ',
                'number_of_rooms' => 1,
                'capacity_adults' => 4,
                'amenities' => json_encode([
                    ['title' => 'Wi-Fi cao cấp', 'desc' => 'Tốc độ cao, không giới hạn'],
                    ['title' => 'Jacuzzi riêng', 'desc' => 'Thư giãn tuyệt đối'],
                    ['title' => 'Điều hòa cao cấp', 'desc' => 'Công nghệ tiết kiệm điện'],
                    ['title' => 'Giường King Size', 'desc' => 'Nệm cao cấp nhập khẩu'],
                    ['title' => 'View hồ', 'desc' => 'Tầm nhìn thơ mộng'],
                    ['title' => 'Bộ trà cao cấp', 'desc' => 'Phục vụ miễn phí'],
                ]),
                'image' => 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2',
                'is_active' => true,
            ],
            [
                'name' => 'White Rose House',
                'slug' => 'white-rose-house',
                'description' => '<p>White Rose House toát lên vẻ thanh lịch và sang trọng với tông màu trắng tinh khôi. Không gian được thiết kế tối giản nhưng vô cùng tinh tế, mang đến cảm giác yên bình và thư thái tối đa.</p><p>Phòng phù hợp cho những ai yêu thích sự đơn giản nhưng không kém phần đẳng cấp trong từng chi tiết.</p>',
                'base_price' => 2200000.00,
                'max_capacity' => 4,
                'size' => 30,
                'bed_info' => '02 giường 1m8 x 2m',
                'max_children' => 2,
                'view_direction' => 'Hướng núi',
                'number_of_rooms' => 1,
                'capacity_adults' => 4,
                'amenities' => json_encode([
                    ['title' => 'Wi-Fi tốc độ cao', 'desc' => 'Fiber optic 100Mbps'],
                    ['title' => 'Smart Home System', 'desc' => 'Điều khiển bằng giọng nói'],
                    ['title' => 'Máy lạnh Inverter', 'desc' => 'Tiết kiệm, yên tĩnh'],
                    ['title' => 'Minibar cao cấp', 'desc' => 'Đồ uống premium miễn phí'],
                    ['title' => 'Bồn tắm đứng', 'desc' => 'Sen massage đa chức năng'],
                    ['title' => 'Ban công rộng', 'desc' => 'View thiên nhiên tuyệt đẹp'],
                ]),
                'image' => 'https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af',
                'is_active' => true,
            ],
            [
                'name' => 'Red Rose House',
                'slug' => 'red-rose-house',
                'description' => '<p>Red Rose House mang đến không gian đầy cảm xúc với sắc đỏ hồng ấm áp. Phòng được thiết kế đặc biệt dành cho các cặp đôi, tạo nên bầu không khí lãng mạn và riêng tư tuyệt đối.</p><p>Mỗi góc nhỏ của Red Rose House đều được chăm chút tỉ mỉ để mang lại trải nghiệm nghỉ dưỡng đáng nhớ nhất.</p>',
                'base_price' => 2200000.00,
                'max_capacity' => 4,
                'size' => 30,
                'bed_info' => '02 giường 1m8 x 2m',
                'max_children' => 2,
                'view_direction' => 'Hướng vườn',
                'number_of_rooms' => 1,
                'capacity_adults' => 4,
                'amenities' => json_encode([
                    ['title' => 'Wi-Fi không giới hạn', 'desc' => 'Tốc độ cao, ổn định'],
                    ['title' => 'Romantic Setup', 'desc' => '촛불, hoa hồng theo yêu cầu'],
                    ['title' => 'Điều hòa cao cấp', 'desc' => 'Không khí trong lành'],
                    ['title' => 'King Bed Premium', 'desc' => 'Chăn ga gối đệm 5 sao'],
                    ['title' => 'Phòng tắm sang trọng', 'desc' => 'Bồn tắm ngâm riêng'],
                    ['title' => 'Dịch vụ phòng 24/7', 'desc' => 'Phục vụ tận tình'],
                ]),
                'image' => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b',
                'is_active' => true,
            ],
            // Villa
            [
                'name' => 'The Wandering Rose Villa',
                'slug' => 'the-wandering-rose-villa',
                'description' => '<p>The Wandering Rose Villa là biểu tượng của sự sang trọng và đẳng cấp. Với không gian rộng lớn, view núi rừng hùng vĩ và hồ bơi riêng biệt, đây là lựa chọn hoàn hảo cho những kỳ nghỉ dưỡng đỉnh cao.</p>',
                'base_price' => 5000000.00,
                'max_capacity' => 8,
                'size' => 150,
                'bed_info' => '04 giường lớn',
                'max_children' => 4,
                'view_direction' => 'Toàn cảnh núi, hồ',
                'number_of_rooms' => 4,
                'capacity_adults' => 8,
                'amenities' => json_encode([
                     ['title' => 'Hồ bơi riêng', 'desc' => 'Vô cực, view núi'],
                     ['title' => 'Bếp đầy đủ tiện nghi', 'desc' => 'Tự do nấu nướng'],
                     ['title' => 'Phòng Karaoke', 'desc' => 'Giải trí đỉnh cao'],
                     ['title' => 'Sân BBQ rộng', 'desc' => 'Tiệc nướng ngoài trời'],
                ]),
                'image' => 'https://images.unsplash.com/photo-1582268611958-ebfd161ef9cf',
                'is_active' => true,
            ],
        ];

        foreach ($standardRooms as $room) {
            RoomType::updateOrCreate(
                ['slug' => $room['slug']],
                $room
            );
        }

        $this->command->info('✅ Đã seed thành công ' . count($standardRooms) . ' loại phòng tiêu chuẩn!');
        $this->command->info('📍 Forest Room: 2,000,000đ | Deluxe: 1,500,000đ | Family: 1,800,000đ');
        $this->command->info('🌹 Pink/White/Red Rose House: 2,200,000đ mỗi phòng');
    }
}
