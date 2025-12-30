{{-- Trang Home - The Wandering Rose --}}
@extends('layouts.app')

@section('title', 'Trang Chủ - The Wandering Rose')

@section('content')

{{-- Hero Banner --}}
<div class="relative w-full h-[60vh] md:h-[80vh] overflow-hidden">
    <img alt="Beautiful Villa Exterior" class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1582719508461-905c673771fd?q=80&w=2025&auto=format&fit=crop"/>
    <div class="absolute inset-0 bg-black/30"></div>
</div>

{{-- Section: Vị trí & Không gian --}}
<section class="py-20 px-4 md:px-12 max-w-7xl mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div class="relative">
            <img alt="Mountain Landscape" class="w-full h-auto rounded shadow-xl object-cover aspect-[4/3]" src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?q=80&w=2070&auto=format&fit=crop"/>
            <div class="hidden md:block absolute -bottom-6 -right-6 w-full h-full border-2 border-primary -z-10 rounded"></div>
        </div>
        <div class="md:pl-10 text-center md:text-left">
            <h2 class="font-display text-4xl md:text-5xl text-primary mb-6">Vị trí & Không gian</h2>
            <p class="text-gray-600 mb-8 font-light leading-relaxed">
                Nằm giữa khung cảnh hùng vĩ của Ba Vì, The Wandering Rose mang đến không gian nghỉ dưỡng biệt lập, nơi bạn có thể hòa mình vào thiên nhiên, tận hưởng không khí trong lành và sự yên bình tuyệt đối.
            </p>
            <a class="inline-flex items-center text-primary border border-primary px-6 py-2 text-sm uppercase tracking-wider hover:bg-primary hover:text-white transition rounded" href="#">
                Xem thêm <span class="material-icons-outlined ml-2 text-sm">arrow_forward</span>
            </a>
        </div>
    </div>
</section>

{{-- Section: Hoà mình vào thiên nhiên --}}
<section class="py-20 px-4 md:px-12 bg-white">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div class="order-2 md:order-1 md:pr-10 text-center md:text-right">
            <h2 class="font-display text-4xl md:text-5xl text-primary mb-6">Hoà mình vào thiên nhiên</h2>
            <p class="text-gray-600 mb-8 font-light leading-relaxed">
                Trải nghiệm cảm giác thư thái khi dạo bước trong khu vườn xanh mát, lắng nghe tiếng suối chảy róc rách và tiếng chim hót líu lo. Một nơi trú ẩn hoàn hảo để tái tạo năng lượng.
            </p>
            <a class="inline-flex items-center text-primary border border-primary px-6 py-2 text-sm uppercase tracking-wider hover:bg-primary hover:text-white transition rounded" href="#">
                Xem thêm <span class="material-icons-outlined ml-2 text-sm">arrow_forward</span>
            </a>
        </div>
        <div class="order-1 md:order-2 relative">
            <img alt="Garden and Nature" class="w-full h-auto rounded shadow-xl object-cover aspect-[4/3]" src="https://images.unsplash.com/photo-1585320806297-9794b3e4eeae?q=80&w=2071&auto=format&fit=crop"/>
            <div class="hidden md:block absolute -top-6 -left-6 w-full h-full border-2 border-primary -z-10 rounded"></div>
        </div>
    </div>
</section>

{{-- Section: Quyền lợi khi đặt phòng --}}
<section class="relative py-24 bg-fixed bg-cover bg-center" style="background-image: url('https://i.ytimg.com/vi/n0FD6UwHsSI/maxresdefault.jpg?v=648c9a16');">
    <div class="absolute inset-0 bg-black/60"></div>
    <div class="relative z-10 container mx-auto px-4">
        <h2 class="font-display text-4xl md:text-5xl text-white text-center mb-16">Quyền lợi khi đặt phòng</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            {{-- Benefit Card 1 --}}
            <div class="bg-white/95 p-8 text-center rounded shadow-lg backdrop-blur-sm transform hover:-translate-y-1 transition duration-300">
                <span class="material-icons-outlined text-4xl text-primary mb-4">wifi</span>
                <h3 class="font-display text-xl text-primary mb-2">Wifi 24/7</h3>
                <p class="text-sm text-gray-500">Kết nối tốc độ cao mọi lúc mọi nơi</p>
            </div>
            {{-- Benefit Card 2 --}}
            <div class="bg-white/95 p-8 text-center rounded shadow-lg backdrop-blur-sm transform hover:-translate-y-1 transition duration-300">
                <span class="material-icons-outlined text-4xl text-primary mb-4">pool</span>
                <h3 class="font-display text-xl text-primary mb-2">Hồ bơi</h3>
                <p class="text-sm text-gray-500">Hồ bơi vô cực view núi rừng</p>
            </div>
            {{-- Benefit Card 3 --}}
            <div class="bg-white/95 p-8 text-center rounded shadow-lg backdrop-blur-sm transform hover:-translate-y-1 transition duration-300">
                <span class="material-icons-outlined text-4xl text-primary mb-4">pedal_bike</span>
                <h3 class="font-display text-xl text-primary mb-2">Xe đạp miễn phí</h3>
                <p class="text-sm text-gray-500">Khám phá thiên nhiên xung quanh</p>
            </div>
            {{-- Benefit Card 4 --}}
            <div class="bg-white/95 p-8 text-center rounded shadow-lg backdrop-blur-sm transform hover:-translate-y-1 transition duration-300">
                <span class="material-icons-outlined text-4xl text-primary mb-4">outdoor_grill</span>
                <h3 class="font-display text-xl text-primary mb-2">BBQ ngoài trời</h3>
                <p class="text-sm text-gray-500">Tiệc nướng sân vườn ấm cúng</p>
            </div>
        </div>
    </div>
</section>

{{-- Section: Các hạng phòng - Scroll ngang --}}
<section class="py-20 px-4 md:px-12 bg-[#fdfbf7]">
    <div class="max-w-7xl mx-auto">
        <h2 class="font-display text-4xl md:text-5xl text-center text-primary mb-4">Các hạng phòng</h2>
        <p class="text-center text-gray-600 mb-12">Khám phá không gian nghỉ dưỡng đẳng cấp</p>
        
        {{-- Container cuộn ngang --}}
        <div class="overflow-x-auto pb-4 -mx-4 px-4" style="scrollbar-width: thin; scrollbar-color: #a88b68 #f1f1f1;">
            <div class="flex gap-6 min-w-max">
                {{-- Room Card 1 --}}
                <div class="bg-white rounded-lg shadow-lg overflow-hidden w-80 flex-shrink-0 transform hover:-translate-y-2 transition duration-300">
                    <div class="relative h-64">
                        <img alt="Deluxe Room" class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?q=80&w=2070&auto=format&fit=crop"/>
                    </div>
                    <div class="p-6 bg-[#fdfbf7]">
                        <h3 class="font-display text-xl text-primary mb-2">Deluxe Room</h3>
                        <div class="flex gap-4 text-xs text-gray-600 mb-4">
                            <span><i class="fas fa-user mr-1"></i> 2 người</span>
                            <span><i class="fas fa-bed mr-1"></i> 1 giường</span>
                            <span><i class="fas fa-ruler-combined mr-1"></i> 35m²</span>
                        </div>
                        <a class="inline-block text-sm text-primary border border-primary px-6 py-2 rounded hover:bg-primary hover:text-white transition" href="#">
                            Chi tiết
                        </a>
                    </div>
                </div>
                
                {{-- Room Card 2 --}}
                <div class="bg-white rounded-lg shadow-lg overflow-hidden w-80 flex-shrink-0 transform hover:-translate-y-2 transition duration-300">
                    <div class="relative h-64">
                        <img alt="Forest Room" class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=2070&auto=format&fit=crop"/>
                    </div>
                    <div class="p-6 bg-[#fdfbf7]">
                        <h3 class="font-display text-xl text-primary mb-2">Forest Room</h3>
                        <div class="flex gap-4 text-xs text-gray-600 mb-4">
                            <span><i class="fas fa-user mr-1"></i> 2 người</span>
                            <span><i class="fas fa-bed mr-1"></i> 1 giường</span>
                            <span><i class="fas fa-ruler-combined mr-1"></i> 30m²</span>
                        </div>
                        <a class="inline-block text-sm text-primary border border-primary px-6 py-2 rounded hover:bg-primary hover:text-white transition" href="#">
                            Chi tiết
                        </a>
                    </div>
                </div>
                
                {{-- Room Card 3 --}}
                <div class="bg-white rounded-lg shadow-lg overflow-hidden w-80 flex-shrink-0 transform hover:-translate-y-2 transition duration-300">
                    <div class="relative h-64">
                        <img alt="Family Room" class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1602002418082-a4443e081dd1?q=80&w=2070&auto=format&fit=crop"/>
                    </div>
                    <div class="p-6 bg-[#fdfbf7]">
                        <h3 class="font-display text-xl text-primary mb-2">Family Room</h3>
                        <div class="flex gap-4 text-xs text-gray-600 mb-4">
                            <span><i class="fas fa-user mr-1"></i> 4 người</span>
                            <span><i class="fas fa-bed mr-1"></i> 2 giường</span>
                            <span><i class="fas fa-ruler-combined mr-1"></i> 45m²</span>
                        </div>
                        <a class="inline-block text-sm text-primary border border-primary px-6 py-2 rounded hover:bg-primary hover:text-white transition" href="#">
                            Chi tiết
                        </a>
                    </div>
                </div>
                
                {{-- Room Card 4 --}}
                <div class="bg-white rounded-lg shadow-lg overflow-hidden w-80 flex-shrink-0 transform hover:-translate-y-2 transition duration-300">
                    <div class="relative h-64">
                        <img alt="Suite Room" class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1590490360182-c33d57733427?q=80&w=2070&auto=format&fit=crop"/>
                    </div>
                    <div class="p-6 bg-[#fdfbf7]">
                        <h3 class="font-display text-xl text-primary mb-2">Suite Room</h3>
                        <div class="flex gap-4 text-xs text-gray-600 mb-4">
                            <span><i class="fas fa-user mr-1"></i> 2 người</span>
                            <span><i class="fas fa-bed mr-1"></i> 1 giường</span>
                            <span><i class="fas fa-ruler-combined mr-1"></i> 50m²</span>
                        </div>
                        <a class="inline-block text-sm text-primary border border-primary px-6 py-2 rounded hover:bg-primary hover:text-white transition" href="#">
                            Chi tiết
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Navigation arrows --}}
        <div class="flex justify-center mt-8 gap-4">
            <button class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center hover:bg-primary-dark transition">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center hover:bg-primary-dark transition">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
</section>

{{-- Section: Các khu tại The Wandering Rose --}}
<section class="py-20 px-4 md:px-12 bg-[#2a2a2a] text-white">
    <div class="max-w-7xl mx-auto">
        <h2 class="font-display text-4xl md:text-5xl text-center mb-16">Các khu tại The Wandering Rose</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Zone Card 1 --}}
            <div class="relative group overflow-hidden rounded-lg cursor-pointer">
                <img alt="Khu Wooden House" class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.unsplash.com/photo-1602002418082-a4443e081dd1?q=80&w=2070&auto=format&fit=crop"/>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-6">
                    <div>
                        <h3 class="font-display text-2xl mb-2">KHU WOODEN HOUSE</h3>
                        <a class="text-sm border-b border-white pb-1 inline-block" href="#">Khám phá ngay</a>
                    </div>
                </div>
            </div>
            
            {{-- Zone Card 2 --}}
            <div class="relative group overflow-hidden rounded-lg cursor-pointer">
                <img alt="Khu Rose House" class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=2070&auto=format&fit=crop"/>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-6">
                    <div>
                        <h3 class="font-display text-2xl mb-2">KHU ROSE HOUSE</h3>
                        <a class="text-sm border-b border-white pb-1 inline-block" href="#">Khám phá ngay</a>
                    </div>
                </div>
            </div>
            
            {{-- Zone Card 3 --}}
            <div class="relative group overflow-hidden rounded-lg cursor-pointer">
                <img alt="Khu Villa" class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?q=80&w=2071&auto=format&fit=crop"/>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-6">
                    <div>
                        <h3 class="font-display text-2xl mb-2">KHU VILLA</h3>
                        <a class="text-sm border-b border-white pb-1 inline-block" href="#">Khám phá ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section: Dịch vụ & Sự kiện --}}
<section class="py-20 px-4 md:px-12 bg-white">
    <div class="max-w-7xl mx-auto">
        <h2 class="font-display text-4xl md:text-5xl text-center text-primary mb-4">Dịch vụ và sự kiện</h2>
        <p class="text-center text-gray-600 mb-12">Trải nghiệm đa dạng hoạt động tại resort</p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Service Card 1 --}}
            <div class="relative group overflow-hidden rounded-lg h-96 cursor-pointer">
                <img alt="Tổ chức sự kiện" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=2069&auto=format&fit=crop"/>
                <div class="absolute inset-0 bg-black/40 group-hover:bg-black/60 transition-all duration-300 flex flex-col justify-end p-6">
                    <h3 class="font-display text-2xl text-white mb-2">Tổ chức sự kiện</h3>
                    <p class="text-white/90 text-sm mb-4">Đám cưới, hội nghị, team building</p>
                    <a class="text-white text-sm border-b border-white pb-1 inline-block w-fit" href="#">Xem chi tiết</a>
                </div>
            </div>
            
            {{-- Service Card 2 --}}
            <div class="relative group overflow-hidden rounded-lg h-96 cursor-pointer">
                <img alt="Live Music" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?q=80&w=2070&auto=format&fit=crop"/>
                <div class="absolute inset-0 bg-black/40 group-hover:bg-black/60 transition-all duration-300 flex flex-col justify-end p-6">
                    <h3 class="font-display text-2xl text-white mb-2">Live Music</h3>
                    <p class="text-white/90 text-sm mb-4">Âm nhạc mỗi cuối tuần</p>
                    <a class="text-white text-sm border-b border-white pb-1 inline-block w-fit" href="#">Xem chi tiết</a>
                </div>
            </div>
            
            {{-- Service Card 3 --}}
            <div class="relative group overflow-hidden rounded-lg h-96 cursor-pointer">
                <img alt="Spa & Massage" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?q=80&w=2070&auto=format&fit=crop"/>
                <div class="absolute inset-0 bg-black/40 group-hover:bg-black/60 transition-all duration-300 flex flex-col justify-end p-6">
                    <h3 class="font-display text-2xl text-white mb-2">Spa & Massage</h3>
                    <p class="text-white/90 text-sm mb-4">Thư giãn toàn diện</p>
                    <a class="text-white text-sm border-b border-white pb-1 inline-block w-fit" href="#">Xem chi tiết</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section: Trải nghiệm và tour --}}
<section class="py-20 px-4 md:px-12 bg-[#fdfbf7]">
    <div class="max-w-7xl mx-auto">
        <h2 class="font-display text-4xl md:text-5xl text-center text-primary mb-4">Trải nghiệm và tour</h2>
        <p class="text-center text-gray-600 mb-12">Khám phá vẻ đẹp Ba Vì</p>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            {{-- Tour Card 1 --}}
            <div class="bg-white rounded-lg overflow-hidden shadow-lg transform hover:-translate-y-2 transition duration-300">
                <img alt="Trekking núi Ba Vì" class="w-full h-48 object-cover" src="https://images.unsplash.com/photo-1551632811-561732d1e306?q=80&w=2070&auto=format&fit=crop"/>
                <div class="p-6">
                    <h3 class="font-display text-lg text-primary mb-2">Trekking núi Ba Vì</h3>
                    <p class="text-sm text-gray-600 mb-4">Chinh phục đỉnh núi Ba Vì</p>
                    <a class="text-sm text-primary underline" href="#">Đặt tour</a>
                </div>
            </div>
            
            {{-- Tour Card 2 --}}
            <div class="bg-white rounded-lg overflow-hidden shadow-lg transform hover:-translate-y-2 transition duration-300">
                <img alt="Thác Khoang Xanh" class="w-full h-48 object-cover" src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?q=80&w=2070&auto=format&fit=crop"/>
                <div class="p-6">
                    <h3 class="font-display text-lg text-primary mb-2">Thác Khoang Xanh</h3>
                    <p class="text-sm text-gray-600 mb-4">Khám phá thác nước tuyệt đẹp</p>
                    <a class="text-sm text-primary underline" href="#">Đặt tour</a>
                </div>
            </div>
            
            {{-- Tour Card 3 --}}
            <div class="bg-white rounded-lg overflow-hidden shadow-lg transform hover:-translate-y-2 transition duration-300">
                <img alt="Tour làng nghề" class="w-full h-48 object-cover" src="https://images.unsplash.com/photo-1585320806297-9794b3e4eeae?q=80&w=2071&auto=format&fit=crop"/>
                <div class="p-6">
                    <h3 class="font-display text-lg text-primary mb-2">Tour làng nghề</h3>
                    <p class="text-sm text-gray-600 mb-4">Tìm hiểu văn hóa địa phương</p>
                    <a class="text-sm text-primary underline" href="#">Đặt tour</a>
                </div>
            </div>
            
            {{-- Tour Card 4 --}}
            <div class="bg-white rounded-lg overflow-hidden shadow-lg transform hover:-translate-y-2 transition duration-300">
                <img alt="Xe đạp xung quanh" class="w-full h-48 object-cover" src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?q=80&w=2070&auto=format&fit=crop"/>
                <div class="p-6">
                    <h3 class="font-display text-lg text-primary mb-2">Đạp xe xung quanh</h3>
                    <p class="text-sm text-gray-600 mb-4">Khám phá thiên nhiên bằng xe đạp</p>
                    <a class="text-sm text-primary underline" href="#">Đặt tour</a>
                </div>
            </div>
        </div>
        
        {{-- Navigation arrows --}}
        <div class="flex justify-center mt-8 gap-4">
            <button class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center hover:bg-primary-dark transition">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center hover:bg-primary-dark transition">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
</section>

{{-- Section: Đặt lịch với The Wandering Rose --}}
<section class="py-20 px-4 md:px-12 bg-white">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="font-display text-4xl md:text-5xl text-primary mb-6">Đặt lịch với The Wandering Rose</h2>
        <p class="text-gray-600 mb-8 leading-relaxed">
            Để đảm bảo trải nghiệm tốt nhất, chúng tôi khuyên bạn nên đặt phòng trước. 
            Hãy liên hệ với chúng tôi ngay hôm nay để nhận ưu đãi đặc biệt!
        </p>
        <a class="inline-block bg-primary text-white px-8 py-3 rounded text-sm uppercase tracking-wider hover:bg-primary-dark transition" href="#">
            Đặt phòng ngay
        </a>
    </div>
</section>

@endsection
