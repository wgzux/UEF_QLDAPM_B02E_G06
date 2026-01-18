{{-- Trang Room Detail - The Wandering Rose --}}
@extends('layouts.app')

@section('title', $room['name'] . ' - The Wandering Rose')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages/room-detail.css') }}">
@endpush

@section('content')

{{-- Hero Banner --}}
<div class="room-detail-hero">
    <img src="{{ $room['hero_image'] }}" alt="{{ $room['name'] }} - Interior">
    <div class="room-detail-hero-content">
        <h1>{{ $room['name'] }}</h1>
        <a href="#" class="btn-book-hero">
            ĐẶT PHÒNG <span class="material-icons-outlined" style="font-size: 16px;">arrow_forward</span>
        </a>
    </div>
</div>

{{-- Introduction Section --}}
<section class="intro-section">
    <h2 class="intro-title">Giới thiệu</h2>
    <p class="intro-desc">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fermentum id risus eu auctor. Quisque et accumsan magna. Nullam aliquam ex non ex consequat pharetra. Aliquam erat volutpat. Vestibulum eu libero non sem gravida semper a nec quam. Ut pulvinar ligula sit amet nisi pretium auctor. Vestibulum efficitur ornare facilisis.
    </p>
    
    <div class="intro-images">
        @foreach($room['intro_images'] as $index => $image)
        <div class="intro-image">
            <img src="{{ $image }}" alt="{{ $room['name'] }} Interior {{ $index + 1 }}">
        </div>
        @endforeach
    </div>
</section>

{{-- Amenities & Description Section --}}
<section class="amenities-desc-section">
    <div class="amenities-desc-container">
        {{-- Amenities Column --}}
        <div class="amenities-column">
            <h2 class="amenities-column-title">Tiện nghi đã bao gồm</h2>
            
            <div class="amenities-list-detail">
                <div class="amenity-item-detail">
                    <h3 class="amenity-name-detail">Wi-Fi 24/7</h3>
                    <p class="amenity-desc-detail">Luôn duy trì sự kết nối mượt mà trong suốt kỳ nghỉ.</p>
                </div>
                
                <div class="amenity-item-detail">
                    <h3 class="amenity-name-detail">Trà và cà phê miễn phí</h3>
                    <p class="amenity-desc-detail">Được chuẩn bị sẵn để có thể thưởng thức bất cứ lúc nào.</p>
                </div>
                
                <div class="amenity-item-detail">
                    <h3 class="amenity-name-detail">Nệm pillow-top cao cấp</h3>
                    <p class="amenity-desc-detail">Mang lại giấc ngủ êm ái và trọn vẹn.</p>
                </div>
                
                <div class="amenity-item-detail">
                    <h3 class="amenity-name-detail">Vòi sen mưa & sen cầm tay</h3>
                    <p class="amenity-desc-detail">Mang lại giấc ngủ êm ái và trọn vẹn.</p>
                </div>
                
                <div class="amenity-item-detail">
                    <h3 class="amenity-name-detail">Điều hòa không khí</h3>
                    <p class="amenity-desc-detail">Duy trì không gian thoáng mát, dễ chịu.</p>
                </div>
                
                <div class="amenity-item-detail">
                    <h3 class="amenity-name-detail">Ấm đun siêu tốc</h3>
                    <p class="amenity-desc-detail">Phục vụ nhu cầu pha chế nhanh chóng và tiện lợi.</p>
                </div>
                
                <div class="amenity-item-detail">
                    <h3 class="amenity-name-detail">Smart TV & điều hòa</h3>
                    <p class="amenity-desc-detail">Mang đến trải nghiệm giải trí đa dạng ngay tại phòng.</p>
                </div>
                
                <div class="amenity-item-detail">
                    <h3 class="amenity-name-detail">Tiện nghi phòng tắm cao cấp</h3>
                    <p class="amenity-desc-detail">Bao gồm máy sấy tóc cùng sản phẩm chăm sóc tinh chọn.</p>
                </div>
                
                <div class="amenity-item-detail">
                    <h3 class="amenity-name-detail">Áo choàng tắm & dép đi trong phòng</h3>
                    <p class="amenity-desc-detail">Tôn thêm sự thoải mái và tinh tế.</p>
                </div>
                
                <div class="amenity-item-detail">
                    <h3 class="amenity-name-detail">Phòng không hút thuốc</h3>
                    <p class="amenity-desc-detail">Giữ không gian trong lành, thoải mái cho mọi khách.</p>
                </div>
            </div>
        </div>
        
        {{-- Description Column --}}
        <div class="description-column">
            <div class="description-image">
                <img src="{{ $room['description_image'] }}" alt="{{ $room['name'] }} View">
            </div>
            
            <h3 class="description-title">Mô tả</h3>
            
            <div class="description-specs">
                <div class="description-spec">
                    <span class="material-icons-outlined">people</span>
                    <span>{{ $room['guests'] }}</span>
                </div>
                <div class="description-spec">
                    <span class="material-icons-outlined">square_foot</span>
                    <span>{{ $room['area'] }}</span>
                </div>
                <div class="description-spec">
                    <span class="material-icons-outlined">door_front</span>
                    <span>{{ $room['rooms'] }}</span>
                </div>
                <div class="description-spec">
                    <span class="material-icons-outlined">bed</span>
                    <span>{{ $room['beds'] }}</span>
                </div>
            </div>
            
            <a href="#" class="btn-book-detail">
                ĐẶT PHÒNG <span class="material-icons-outlined" style="font-size: 16px;">arrow_forward</span>
            </a>
        </div>
    </div>
</section>

{{-- Other Rooms Section --}}
<section class="other-rooms-section">
    <h2 class="other-rooms-title">Các hạng phòng khác</h2>
    
    <div class="other-rooms-slider">
        <div class="other-rooms-track" id="rooms-track">
            @foreach($allRooms as $roomSlug => $roomData)
                @if($roomSlug !== $slug)
                <div class="other-room-card">
                    <div class="other-room-image">
                        <img src="{{ $roomData['hero_image'] }}" alt="{{ $roomData['name'] }}">
                    </div>
                    <div class="other-room-body">
                        <h3 class="other-room-name">{{ $roomData['name'] }}</h3>
                        <div class="other-room-specs">
                            <div class="other-room-spec">
                                <span class="material-icons-outlined">people</span>
                                <span>{{ $roomData['guests'] }}</span>
                            </div>
                            <div class="other-room-spec">
                                <span class="material-icons-outlined">square_foot</span>
                                <span>{{ $roomData['area'] }}</span>
                            </div>
                            <div class="other-room-spec">
                                <span class="material-icons-outlined">door_front</span>
                                <span>{{ $roomData['rooms'] }}</span>
                            </div>
                            <div class="other-room-spec">
                                <span class="material-icons-outlined">bed</span>
                                <span>{{ $roomData['beds'] }}</span>
                            </div>
                        </div>
                        <div class="other-room-actions">
                            <a href="#" class="btn-book-small">
                                ĐẶT PHÒNG <span class="material-icons-outlined" style="font-size: 12px;">arrow_forward</span>
                            </a>
                            <a href="/room/{{ $roomSlug }}" class="btn-view-small">
                                XEM CHI TIẾT <span class="material-icons-outlined" style="font-size: 12px;">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
    
    {{-- Slider Navigation --}}
    <div class="slider-navigation">
        <button class="slider-nav-btn" id="slider-prev">
            <span class="material-icons-outlined">arrow_back</span>
        </button>
        <button class="slider-nav-btn" id="slider-next">
            <span class="material-icons-outlined">arrow_forward</span>
        </button>
    </div>
</section>


@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Slider functionality for Other Rooms
    const track = document.getElementById('rooms-track');
    const prevBtn = document.getElementById('slider-prev');
    const nextBtn = document.getElementById('slider-next');
    
    let currentPosition = 0;
    const cardWidth = 305; // card width + gap
    const visibleCards = Math.floor(track.parentElement.offsetWidth / cardWidth);
    const totalCards = track.children.length;
    const maxPosition = Math.max(0, (totalCards - visibleCards) * cardWidth);
    
    prevBtn.addEventListener('click', function() {
        currentPosition = Math.max(0, currentPosition - cardWidth);
        track.style.transform = `translateX(-${currentPosition}px)`;
    });
    
    nextBtn.addEventListener('click', function() {
        currentPosition = Math.min(maxPosition, currentPosition + cardWidth);
        track.style.transform = `translateX(-${currentPosition}px)`;
    });
    
    // Update on window resize
    window.addEventListener('resize', function() {
        const newVisibleCards = Math.floor(track.parentElement.offsetWidth / cardWidth);
        const newMaxPosition = Math.max(0, (totalCards - newVisibleCards) * cardWidth);
        currentPosition = Math.min(currentPosition, newMaxPosition);
        track.style.transform = `translateX(-${currentPosition}px)`;
    });
});
</script>
@endpush
