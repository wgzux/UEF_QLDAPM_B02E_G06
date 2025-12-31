{{-- Trang Room & Suites - The Wandering Rose --}}
@extends('layouts.app')

@section('title', 'Hạng Phòng - The Wandering Rose')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages/rooms.css') }}">
@endpush

@section('content')

{{-- Hero Banner --}}
<div class="room-hero">
    <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?q=80&w=2000&auto=format&fit=crop" alt="Room Hero - Luxury bedroom interior">
    <div class="room-hero-content">
        <h1>Hạng phòng</h1>
        <div class="hero-tabs">
            <a href="#wooden-house" class="hero-tab active">KHU WOODEN HOUSE</a>
            <a href="#rose-house" class="hero-tab">KHU ROSE HOUSE</a>
            <a href="#villa" class="hero-tab">KHU VILLA</a>
        </div>
    </div>
</div>

{{-- Wooden House Section --}}
<section class="room-section" id="wooden-house">
    <div class="room-section-header">
        <h2 class="room-section-title">Woonden House</h2>
        <p class="room-section-desc">
            Wooden House tại The Wandering Rose Villa là chốn dừng chân lý tưởng cho những ai đang kiếm tìm sự ấm áp, bình yên và một nhịp sống chậm rãi hơn. Không gian được thiết kế theo phong cách mộc mạc, kết hợp hài hòa giữa sắc mộc mác và gỗ thanh, tạo nên sự gần gũi và thư giãn.
        </p>
        <a href="#" class="btn-detail">
            XEM CHI TIẾT <span class="material-icons-outlined" style="font-size: 16px;">arrow_forward</span>
        </a>
    </div>
    
    <div class="room-cards">
        {{-- Forest Room --}}
        <div class="room-card">
            <div class="room-card-image">
                <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?q=80&w=600&auto=format&fit=crop" alt="Forest Room">
            </div>
            <div class="room-card-body">
                <h3 class="room-card-title">Forest room</h3>
                <div class="room-specs">
                    <div class="room-spec">
                        <span class="material-icons-outlined">people</span>
                        <span>16 người lớn</span>
                    </div>
                    <div class="room-spec">
                        <span class="material-icons-outlined">square_foot</span>
                        <span>45 m²</span>
                    </div>
                    <div class="room-spec">
                        <span class="material-icons-outlined">door_front</span>
                        <span>02 phòng</span>
                    </div>
                    <div class="room-spec">
                        <span class="material-icons-outlined">bed</span>
                        <span>08 đệm 1m6 x 1m8</span>
                    </div>
                </div>
                <div class="room-card-actions">
                    <a href="#" class="btn-book">
                        ĐẶT PHÒNG <span class="material-icons-outlined" style="font-size: 14px;">arrow_forward</span>
                    </a>
                    <a href="#" class="btn-view">
                        XEM CHI TIẾT <span class="material-icons-outlined" style="font-size: 14px;">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
        
        {{-- White Rose House --}}
        <div class="room-card">
            <div class="room-card-image">
                <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?q=80&w=600&auto=format&fit=crop" alt="White Rose House">
            </div>
            <div class="room-card-body">
                <h3 class="room-card-title">White Rose House</h3>
                <div class="room-specs">
                    <div class="room-spec">
                        <span class="material-icons-outlined">people</span>
                        <span>02 người lớn</span>
                    </div>
                    <div class="room-spec">
                        <span class="material-icons-outlined">square_foot</span>
                        <span>24 m²</span>
                    </div>
                    <div class="room-spec">
                        <span class="material-icons-outlined">door_front</span>
                        <span>02 phòng</span>
                    </div>
                    <div class="room-spec">
                        <span class="material-icons-outlined">bed</span>
                        <span>01 giường 1m8 x 2m</span>
                    </div>
                </div>
                <div class="room-card-actions">
                    <a href="#" class="btn-book">
                        ĐẶT PHÒNG <span class="material-icons-outlined" style="font-size: 14px;">arrow_forward</span>
                    </a>
                    <a href="/room/white-rose-house" class="btn-view">
                        XEM CHI TIẾT <span class="material-icons-outlined" style="font-size: 14px;">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
        
        {{-- Family Room --}}
        <div class="room-card">
            <div class="room-card-image">
                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=600&auto=format&fit=crop" alt="Family Room">
            </div>
            <div class="room-card-body">
                <h3 class="room-card-title">Family Room</h3>
                <div class="room-specs">
                    <div class="room-spec">
                        <span class="material-icons-outlined">people</span>
                        <span>04 người lớn</span>
                    </div>
                    <div class="room-spec">
                        <span class="material-icons-outlined">square_foot</span>
                        <span>25 m²</span>
                    </div>
                    <div class="room-spec">
                        <span class="material-icons-outlined">door_front</span>
                        <span>04 phòng</span>
                    </div>
                    <div class="room-spec">
                        <span class="material-icons-outlined">bed</span>
                        <span>02 giường 1m8 x 2m</span>
                    </div>
                </div>
                <div class="room-card-actions">
                    <a href="#" class="btn-book">
                        ĐẶT PHÒNG <span class="material-icons-outlined" style="font-size: 14px;">arrow_forward</span>
                    </a>
                    <a href="#" class="btn-view">
                        XEM CHI TIẾT <span class="material-icons-outlined" style="font-size: 14px;">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Rose House Section --}}
<section class="room-section alt-bg" id="rose-house">
    <div class="room-section-header">
        <h2 class="room-section-title">Rose House</h2>
        <p class="room-section-desc">
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
        </p>
        <a href="#" class="btn-detail">
            XEM CHI TIẾT <span class="material-icons-outlined" style="font-size: 16px;">arrow_forward</span>
        </a>
    </div>
    
    <div class="room-cards">
        {{-- Pink Rose House --}}
        <div class="room-card">
            <div class="room-card-image">
                <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?q=80&w=600&auto=format&fit=crop" alt="Pink Rose House">
            </div>
            <div class="room-card-body">
                <h3 class="room-card-title">Pink Rose house</h3>
                <div class="room-specs">
                    <div class="room-spec">
                        <span class="material-icons-outlined">people</span>
                        <span>04 người lớn</span>
                    </div>
                    <div class="room-spec">
                        <span class="material-icons-outlined">square_foot</span>
                        <span>30 m²</span>
                    </div>
                    <div class="room-spec">
                        <span class="material-icons-outlined">door_front</span>
                        <span>01 phòng</span>
                    </div>
                    <div class="room-spec">
                        <span class="material-icons-outlined">bed</span>
                        <span>02 giường 1m8 x 2m</span>
                    </div>
                </div>
                <div class="room-card-actions">
                    <a href="#" class="btn-book">
                        ĐẶT PHÒNG <span class="material-icons-outlined" style="font-size: 14px;">arrow_forward</span>
                    </a>
                    <a href="#" class="btn-view">
                        XEM CHI TIẾT <span class="material-icons-outlined" style="font-size: 14px;">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
        
        {{-- Red Rose House --}}
        <div class="room-card">
            <div class="room-card-image">
                <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?q=80&w=600&auto=format&fit=crop" alt="Red Rose House">
            </div>
            <div class="room-card-body">
                <h3 class="room-card-title">Red Rose house</h3>
                <div class="room-specs">
                    <div class="room-spec">
                        <span class="material-icons-outlined">people</span>
                        <span>02 người lớn</span>
                    </div>
                    <div class="room-spec">
                        <span class="material-icons-outlined">square_foot</span>
                        <span>13 m²</span>
                    </div>
                    <div class="room-spec">
                        <span class="material-icons-outlined">door_front</span>
                        <span>02 phòng</span>
                    </div>
                    <div class="room-spec">
                        <span class="material-icons-outlined">bed</span>
                        <span>01 giường 1m6 x 2m</span>
                    </div>
                </div>
                <div class="room-card-actions">
                    <a href="#" class="btn-book">
                        ĐẶT PHÒNG <span class="material-icons-outlined" style="font-size: 14px;">arrow_forward</span>
                    </a>
                    <a href="#" class="btn-view">
                        XEM CHI TIẾT <span class="material-icons-outlined" style="font-size: 14px;">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- The Wandering Rose Villa Section --}}
<section class="room-section" id="villa">
    <div class="room-section-header">
        <h2 class="room-section-title">The Wandering Rose villa</h2>
        <p class="room-section-desc">
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
        </p>
        <a href="#" class="btn-detail">
            XEM CHI TIẾT <span class="material-icons-outlined" style="font-size: 16px;">arrow_forward</span>
        </a>
    </div>
    
    <div class="villa-card">
        <div class="villa-card-image">
            <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=80&w=800&auto=format&fit=crop" alt="The Wandering Rose Villa">
        </div>
        <div class="villa-card-body">
            <h3 class="villa-card-title">The Wandering Rose villa</h3>
            <div class="villa-specs">
                <div class="villa-spec">
                    <span class="material-icons-outlined">people</span>
                    <span>04 người lớn</span>
                </div>
                <div class="villa-spec">
                    <span class="material-icons-outlined">square_foot</span>
                    <span>Tầng 1: 100 m² Tầng 2: 35 m²</span>
                </div>
                <div class="villa-spec">
                    <span class="material-icons-outlined">king_bed</span>
                    <span>02 phòng ngủ</span>
                </div>
                <div class="villa-spec">
                    <span class="material-icons-outlined">bed</span>
                    <span>2 giường 1m8 x 2m</span>
                </div>
            </div>
            <div class="room-card-actions">
                <a href="#" class="btn-book">
                    BUTTON TEXT <span class="material-icons-outlined" style="font-size: 14px;">arrow_forward</span>
                </a>
                <a href="#" class="btn-view">
                    XEM CHI TIẾT <span class="material-icons-outlined" style="font-size: 14px;">arrow_forward</span>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Amenities Section --}}
<section class="amenities-section">
    <h2 class="amenities-title">Tiện nghi đã bao gồm</h2>
    
    <div class="amenities-list">
        <div class="amenity-item">
            <h3 class="amenity-name">Wi-Fi 24/7</h3>
            <p class="amenity-desc">Luôn duy trì sự kết nối mượt mà trong suốt kỳ nghỉ.</p>
        </div>
        
        <div class="amenity-item">
            <h3 class="amenity-name">Trà và cà phê miễn phí</h3>
            <p class="amenity-desc">Được chuẩn bị sẵn để có thể thưởng thức bất cứ lúc nào.</p>
        </div>
        
        <div class="amenity-item">
            <h3 class="amenity-name">Nệm pillow-top cao cấp</h3>
            <p class="amenity-desc">Mang lại giấc ngủ êm ái và trọn vẹn.</p>
        </div>
        
        <div class="amenity-item">
            <h3 class="amenity-name">Vòi sen mưa & sen cầm tay</h3>
            <p class="amenity-desc">Mang lại giấc ngủ êm ái và trọn vẹn.</p>
        </div>
        
        <div class="amenity-item">
            <h3 class="amenity-name">Điều hòa không khí</h3>
            <p class="amenity-desc">Duy trì không gian thoáng mát, dễ chịu.</p>
        </div>
        
        <div class="amenity-item">
            <h3 class="amenity-name">Ấm đun siêu tốc</h3>
            <p class="amenity-desc">Phục vụ nhu cầu pha chế nhanh chóng và tiện lợi.</p>
        </div>
        
        <div class="amenity-item">
            <h3 class="amenity-name">Smart TV & điều hòa</h3>
            <p class="amenity-desc">Mang đến trải nghiệm giải trí đa dạng ngay tại phòng.</p>
        </div>
        
        <div class="amenity-item">
            <h3 class="amenity-name">Tiện nghi phòng tắm cao cấp</h3>
            <p class="amenity-desc">Bao gồm máy sấy tóc cùng sản phẩm chăm sóc tinh chọn.</p>
        </div>
        
        <div class="amenity-item">
            <h3 class="amenity-name">Áo choàng tắm & dép đi trong phòng</h3>
            <p class="amenity-desc">Tôn thêm sự thoải mái và tinh tế.</p>
        </div>
        
        <div class="amenity-item">
            <h3 class="amenity-name">Phòng không hút thuốc</h3>
            <p class="amenity-desc">Giữ không gian trong lành, thoải mái cho mọi khách.</p>
        </div>
    </div>
</section>


@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scroll for hero tabs
    const heroTabs = document.querySelectorAll('.hero-tab');
    
    heroTabs.forEach(tab => {
        tab.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Update active state
            heroTabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
            
            // Smooth scroll to section
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                const headerHeight = 80;
                const targetPosition = targetSection.offsetTop - headerHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Update active tab on scroll
    window.addEventListener('scroll', function() {
        const sections = ['wooden-house', 'rose-house', 'villa'];
        const scrollPos = window.scrollY + 200;
        
        sections.forEach(sectionId => {
            const section = document.getElementById(sectionId);
            if (section) {
                const sectionTop = section.offsetTop;
                const sectionBottom = sectionTop + section.offsetHeight;
                
                if (scrollPos >= sectionTop && scrollPos < sectionBottom) {
                    heroTabs.forEach(tab => {
                        tab.classList.remove('active');
                        if (tab.getAttribute('href') === '#' + sectionId) {
                            tab.classList.add('active');
                        }
                    });
                }
            }
        });
    });
});
</script>
@endpush
