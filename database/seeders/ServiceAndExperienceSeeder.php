<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use Illuminate\Support\Str;

class ServiceAndExperienceSeeder extends Seeder
{
    /**
     * Seed services and experiences with real Vietnamese content
     * NO Lorem Ipsum - All content is meaningful and contextual
     */
    public function run(): void
    {
        // ========== SERVICES (Dịch vụ sự kiện) ==========
        $services = [
            [
                'name' => 'Tổ chức sinh nhật',
                'slug' => 'to-chuc-sinh-nhat',
                'description' => 'Tổ chức tiệc sinh nhật vui vẻ, ấm cúng tại không gian Villa với đầy đủ tiện nghi và dịch vụ chuyên nghiệp.',
                'content' => '<p>Bạn đang tìm kiếm một địa điểm lý tưởng để tổ chức sinh nhật cho người thân yêu? The Wandering Rose mang đến không gian tiệc sinh nhật sang trọng, ấm cúng giữa thiên nhiên Ba Vì trong lành.</p><p>Chúng tôi cung cấp gói dịch vụ trọn gói từ trang trí, âm thanh ánh sáng, đến ẩm thực cao cấp, giúp bữa tiệc sinh nhật của bạn trở nên đáng nhớ.</p>',
                'features' => json_encode([
                    'Trang trí theo chủ đề theo yêu cầu',
                    'Hệ thống âm thanh ánh sáng chuyên nghiệp',
                    'Bánh kem và buffet cao cấp',
                    'MC dẫn chương trình nhiệt tình',
                    'Không gian riêng tư, thoải mái',
                    'Hỗ trợ chụp ảnh lưu niệm'
                ]),
                'category' => 'event',
                'price' => 5000000,
                'price_note' => 'Liên hệ để được tư vấn chi tiết',
                'unit' => 'sự kiện',
                'image' => 'https://images.unsplash.com/photo-1530103862676-de8c9debad1d?w=800',
                'is_active' => true,
            ],
            [
                'name' => 'Teambuilding',
                'slug' => 'teambuilding',
                'description' => 'Tổ chức teambuilding, hoạt động ngoài trời cho doanh nghiệp với các trò chơi thú vị và bổ ích.',
                'content' => '<p>Teambuilding tại The Wandering Rose kết hợp hoàn hảo giữa các hoạt động ngoài trời kích thích sự sáng tạo và tinh thần đội nhóm với không gian nghỉ ngơi sang trọng.</p><p>Chúng tôi thiết kế các chương trình teambuilding sáng tạo, phù hợp với từng doanh nghiệp, giúp tăng cường tinh thần đồng đội và gắn kết nhân viên.</p>',
                'features' => json_encode([
                    'Thiết kế chương trình theo yêu cầu',
                    'Khu vực tổ chức hoạt động ngoài trời rộng rãi',
                    'Đội ngũ MC và hướng dẫn viên chuyên nghiệp',
                    'Buffet và đồ uống phục vụ suốt ngày',
                    'Hỗ trợ thiết bị âm thanh, microphone',
                    'Không gian nghỉ ngơi thoải mái sau hoạt động'
                ]),
                'category' => 'corporate',
                'price' => 8000000,
                'price_note' => 'Giá theo số lượng người tham gia',
                'unit' => 'ngày',
                'image' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?w=800',
                'is_active' => true,
            ],
            [
                'name' => 'Tiệc cưới nhỏ',
                'slug' => 'tiec-cuoi-nho',
                'description' => 'Tổ chức tiệc cưới nhỏ lãng mạn, ấm cúng giữa thiên nhiên với không gian riêng tư và sang trọng.',
                'content' => '<p>Tiệc cưới nhỏ tại The Wandering Rose mang đến không gian lãng mạn, riêng tư cho đám cưới thân mật của bạn. Được bao quanh bởi thiên nhiên xanh mát của Ba Vì, đây là địa điểm hoàn hảo cho một ngày trọng đại.</p><p>Chúng tôi hỗ trợ toàn bộ từ trang trí, ẩm thực đến âm nhạc, giúp bạn tận hưởng trọn vẹn niềm hạnh phúc trong ngày cưới.</p>',
                'features' => json_encode([
                    'Trang trí cưới theo phong cách riêng',
                    'Thực đơn cưới cao cấp, linh hoạt',
                    'Hỗ trợ setup sân khấu và backdrop',
                    'Âm thanh ánh sáng chuyên nghiệp',
                    'Không gian riêng tư, view đẹp',
                    'Phòng dành cho cô dâu chú rể'
                ]),
                'category' => 'wedding',
                'price' => 15000000,
                'price_note' => 'Giá gói cơ bản, liên hệ để tư vấn chi tiết',
                'unit' => 'tiệc',
                'image' => 'https://images.unsplash.com/photo-1519741497674-611481863552?w=800',
                'is_active' => true,
            ],
            [
                'name' => 'Lễ kỷ niệm',
                'slug' => 'le-ky-niem',
                'description' => 'Tổ chức lễ kỷ niệm, celebration cho các sự kiện đặc biệt của gia đình và doanh nghiệp.',
                'content' => '<p>Mỗi mốc kỷ niệm đều xứng đáng được tôn vinh. The Wandering Rose giúp bạn tổ chức lễ kỷ niệm đáng nhớ với không gian sang trọng và dịch vụ chu đáo.</p><p>Từ kỷ niệm ngày cưới, sinh nhật công ty đến các dịp celebration quan trọng khác, chúng tôi luôn sẵn sàng đồng hành cùng bạn.</p>',
                'features' => json_encode([
                    'Trang trí theo concept riêng',
                    'Thực đơn buffet hoặc set menu cao cấp',
                    'Hệ thống âm thanh, ánh sáng',
                    'MC và chương trình biểu diễn',
                    'Hỗ trợ slideshow, video kỷ niệm',
                    'Không gian ấm cúng, riêng tư'
                ]),
                'category' => 'celebration',
                'price' => 7000000,
                'price_note' => 'Liên hệ để được báo giá chi tiết',
                'unit' => 'sự kiện',
                'image' => 'https://images.unsplash.com/photo-1527529482837-4698179dc6ce?w=800',
                'is_active' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(
                ['slug' => $service['slug']],
                $service
            );
        }

        $this->command->info('✅ Đã seed thành công ' . count($services) . ' dịch vụ sự kiện!');
        $this->command->info('📋 Sinh nhật | Teambuilding | Tiệc cưới nhỏ | Lễ kỷ niệm');

        // ========== EXPERIENCES (Trải nghiệm & Tours) ==========
        // Create Experience model first
        if (!class_exists('App\Models\Experience')) {
            $this->command->warn('⚠️  Experience model chưa tồn tại. Vui lòng tạo model trước khi seed experiences.');
            return;
        }

        $experiences = [
            [
                'name' => 'Tour Vườn Quốc Gia Ba Vì',
                'slug' => 'tour-vuon-quoc-gia-ba-vi',
                'description' => 'Khám phá thiên nhiên hùng vĩ tại Vườn Quốc Gia Ba Vì với thảm thực vật đa dạng và phế tích thời Pháp cổ kính.',
                'content' => '<p>Vườn Quốc Gia Ba Vì là điểm đến lý tưởng cho những ai yêu thích thiên nhiên và muốn trải nghiệm không khí trong lành của vùng núi.</p><p>Tour của chúng tôi bao gồm đi bộ trekking trên các cung đường rừng thông, tham quan các phế tích cổ kính thời Pháp, và khám phá hệ thực vật phong phú tại Vườn Quốc Gia.</p>',
                'duration' => '1 ngày',
                'location' => 'Vườn Quốc Gia Ba Vì, Hà Nội',
                'price_note' => 'Liên hệ để biết giá chi tiết',
                'features' => json_encode([
                    'Trekking trên đường rừng thông thơ mộng',
                    'Khám phá phế tích thời Pháp cổ kính',
                    'Tìm hiểu về hệ sinh thái đa dạng',
                    'Hướng dẫn viên am hiểu địa phương',
                    'Bữa trưa picnic giữa thiên nhiên',
                    'Đưa đón tận nơi (tùy chọn)'
                ]),
                'image' => 'https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=800',
                'is_active' => true,
            ],
            [
                'name' => 'Tour Ao Vua',
                'slug' => 'tour-ao-vua',
                'description' => 'Tham quan khu du lịch Ao Vua dưới chân núi Tản Viên, trải nghiệm trò chơi cảm giác mạnh và tắm thác suối tự nhiên.',
                'content' => '<p>Ao Vua là điểm đến hấp dẫn với các hoạt động vui chơi giải trí đa dạng kết hợp với cảnh quan thiên nhiên tuyệt đẹp.</p><p>Bạn sẽ được trải nghiệm các trò chơi cảm giác mạnh, tắm suối mát lạnh, và tận hưởng không khí trong lành của vùng núi Ba Vì.</p>',
                'duration' => '1 ngày',
                'location' => 'Khu du lịch Ao Vua, Ba Vì',
                'price_note' => 'Từ 500.000đ/người',
                'features' => json_encode([
                    'Vui chơi tại khu du lịch Ao Vua',
                    'Tắm thác suối tự nhiên mát lạnh',
                    'Các trò chơi cảm giác mạnh',
                    'Tham quan núi Tản Viên huyền thoại',
                    'Ăn trưa đặc sản địa phương',
                    'Xe đưa đón khứ hồi'
                ]),
                'image' => 'https://images.unsplash.com/photo-1609137144813-7d9921338f24?w=800',
                'is_active' => true,
            ],
            [
                'name' => 'Khoang Xanh - Suối Tiên',
                'slug' => 'khoang-xanh-suoi-tien',
                'description' => 'Khám phá dòng suối xanh mát và thác nước hùng vĩ, tận hưởng sự thư thái giữa núi rừng đại ngàn.',
                'content' => '<p>Khoang Xanh - Suối Tiên là thiên đường của những ai yêu thích sự yên tĩnh và muốn đắm mình trong làn nước trong vắt giữa thiên nhiên.</p><p>Tour bao gồm đi bộ dọc suối, tắm suối tự nhiên, và thư giãn bên những thác nước tuyệt đẹp.</p>',
                'duration' => '4-5 giờ',
                'location' => 'Khoang Xanh - Suối Tiên, Ba Vì',
                'price_note' => 'Liên hệ để biết giá',
                'features' => json_encode([
                    'Đi bộ dọc suối xanh mát',
                    'Tắm suối, Thác nước tự nhiên',
                    'Không gian yên tĩnh, thư thái',
                    'Phù hợp mọi lứa tuổi',
                    'Khu vực picnic gia đình',
                    'Hướng dẫn viên an toàn'
                ]),
                'image' => 'https://images.unsplash.com/photo-1432405972618-c60b0225b8f9?w=800',
                'is_active' => true,
            ],
            [
                'name' => 'Trải nghiệm bản địa',
                'slug' => 'trai-nghiem-ban-dia',
                'description' => 'Giao lưu văn hóa, thưởng thức ẩm thực đặc sản và tìm hiểu các làng nghề truyền thống của vùng đất Ba Vì.',
                'content' => '<p>Hành trình đi sâu vào đời sống địa phương, khám phá văn hóa và ẩm thực đặc trưng của người dân Ba Vì.</p><p>Bạn sẽ được gặp gỡ, trò chuyện với người dân bản xứ, tìm hiểu về các làng nghề truyền thống, và thưởng thức những món ăn đặc sản chỉ có tại đây.</p>',
                'duration' => 'Nửa ngày',
                'location' => 'Các làng bản tại Ba Vì',
                'price_note' => 'Từ 300.000đ/người',
                'features' => json_encode([
                    'Giao lưu với người dân địa phương',
                    'Thưởng thức ẩm thực đặc sản vùng miền',
                    'Tìm hiểu làng nghề truyền thống',
                    'Tham gia hoạt động nông nghiệp',
                    'Mua sắm đặc sản, quà tặng thủ công',
                    'Trải nghiệm lối sống giản dị, chân thực'
                ]),
                'image' => 'https://images.unsplash.com/photo-1504609813442-a8924e83f76e?w=800',
                'is_active' => true,
            ],
        ];

        foreach ($experiences as $exp) {
            \App\Models\Experience::updateOrCreate(
                ['slug' => $exp['slug']],
                $exp
            );
        }

        $this->command->info('✅ Đã seed thành công ' . count($experiences) . ' trải nghiệm & tours!');
        $this->command->info('🎯 Ba Vì | Ao Vua | Khoang Xanh | Bản địa');
    }
}
