{{-- Trang Home - The Wandering Rose - REFACTORED --}}
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
            <a class="inline-flex items-center text-primary border border-primary px-6 py-2 text-sm uppercase tracking-wider hover:bg-primary hover:text-white transition rounded" href="{{ route('contact') }}">
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
            <a class="inline-flex items-center text-primary border border-primary px-6 py-2 text-sm uppercase tracking-wider hover:bg-primary hover:text-white transition rounded" href="{{ route('contact') }}">
                Xem thêm <span class="material-icons-outlined ml-2 text-sm">arrow_forward</span>
            </a>
        </div>
        <div class="order-1 md:order-2 relative">
            <img alt="Garden and Nature" class="w-full h-auto rounded shadow-xl object-cover aspect-[4/3]" src="https://images.unsplash.com/photo-1585320806297-9794b3e4eeae?q=80&w=2071&auto=format&fit=crop"/>
            <div class="hidden md:block absolute -top-6 -left-6 w-full h-full border-2 border-primary -z-10 rounded"></div>
        </div>
    </div>
</section>

{{-- Section: Quyền lợi khi đặt phòng - REFACTORED WITH COMPONENT --}}
<section class="relative py-24 bg-fixed bg-cover bg-center" style="background-image: url('https://i.ytimg.com/vi/n0FD6UwHsSI/maxresdefault.jpg?v=648c9a16');">
    <div class="absolute inset-0 bg-black/60"></div>
    <div class="relative z-10 container mx-auto px-4">
        <h2 class="font-display text-4xl md:text-5xl text-white text-center mb-16">Quyền lợi khi đặt phòng</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <x-benefit-card icon="wifi" title="Wifi 24/7" description="Kết nối tốc độ cao mọi lúc mọi nơi" />
            <x-benefit-card icon="pool" title="Hồ bơi" description="Hồ bơi vô cực view núi rừng" />
            <x-benefit-card icon="pedal_bike" title="Xe đạp miễn phí" description="Khám phá thiên nhiên xung quanh" />
            <x-benefit-card icon="outdoor_grill" title="BBQ ngoài trời" description="Tiệc nướng sân vườn ấm cúng" />
        </div>
    </div>
</section>

{{-- Section: Các hạng phòng - REFACTORED WITH COMPONENT --}}
<section class="py-20 px-4 md:px-12 bg-[#fdfbf7]">
    <div class="max-w-7xl mx-auto">
        <h2 class="font-display text-4xl md:text-5xl text-center text-primary mb-4">Các hạng phòng</h2>
        <p class="text-center text-gray-600 mb-12">Khám phá không gian nghỉ dưỡng đẳng cấp</p>
        
        <div class="overflow-x-auto pb-4 -mx-4 px-4" style="scrollbar-width: thin; scrollbar-color: #a88b68 #f1f1f1;">
            <div class="flex gap-6 min-w-max">
                @forelse($roomTypes ?? [] as $roomType)
                    <x-room-card :roomType="$roomType" :showPrice="true" />
                @empty
                    <p class="text-gray-500 w-full text-center py-8">Chưa có thông tin phòng. Vui lòng chạy: php artisan db:seed --class=DemoDataSeeder</p>
                @endforelse
            </div>
        </div>
        
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
<section class="bg-[#2c2416] py-20 px-4 md:px-12">
    <div class="max-w-7xl mx-auto">
        <h2 class="font-display text-4xl md:text-5xl text-white text-center mb-16">Các khu tại The Wandering Rose</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="relative group overflow-hidden rounded-lg h-96 cursor-pointer">
                <img alt="Rose House" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?q=80&w=2070&auto=format&fit=crop"/>
                <div class="absolute inset-0 bg-black/40 group-hover:bg-black/60 transition-all duration-300 flex flex-col justify-end p-6">
                    <h3 class="font-display text-2xl text-white mb-2">KHU ROSE HOUSE</h3>
                    <a class="text-white text-sm border-b border-white pb-1 inline-block w-fit" href="{{ route('rooms.index') }}">Tìm hiểu thêm</a>
                </div>
            </div>
            <div class="relative group overflow-hidden rounded-lg h-96 cursor-pointer">
                <img alt="Wooden House" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.unsplash.com/photo-1449156493391-d2cfa28e468b?q=80&w=2074&auto=format&fit=crop"/>
                <div class="absolute inset-0 bg-black/40 group-hover:bg-black/60 transition-all duration-300 flex flex-col justify-end p-6">
                    <h3 class="font-display text-2xl text-white mb-2">KHU WOODEN HOUSE</h3>
                    <p class="text-white/90 text-sm mb-4">Chốn dừng chân lý tưởng cho những ai kiếm tìm sự ấm áp</p>
                    <a class="text-white text-sm border-b border-white pb-1 inline-block w-fit" href="{{ route('rooms.index') }}">Tìm hiểu thêm</a>
                </div>
            </div>
            <div class="relative group overflow-hidden rounded-lg h-96 cursor-pointer">
                <img alt="Villa" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.unsplash.com/photo-1600596542815-e328d4de4bf7?q=80&w=2070&auto=format&fit=crop"/>
                <div class="absolute inset-0 bg-black/40 group-hover:bg-black/60 transition-all duration-300 flex flex-col justify-end p-6">
                    <h3 class="font-display text-2xl text-white mb-2">KHU VILLA</h3>
                    <a class="text-white text-sm border-b border-white pb-1 inline-block w-fit" href="{{ route('rooms.index') }}">Tìm hiểu thêm</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Section: Dịch vụ sự kiện --}}
<section class="py-20 px-4 md:px-12">
    <div class="max-w-7xl mx-auto">
        <h2 class="font-display text-4xl md:text-5xl text-center text-primary mb-16">Dịch vụ sự kiện</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @if(isset($services) && count($services) > 0)
                @foreach($services as $service)
                    <x-service-card :service="$service" />
                @endforeach
            @else
                <div class="relative group overflow-hidden rounded-lg h-96">
                    <img alt="Birthday Party" class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1530103862676-de3c9a59aa57?q=80&w=2070&auto=format&fit=crop"/>
                    <div class="absolute inset-0 bg-black/50 flex flex-col justify-end p-6">
                        <h3 class="font-display text-2xl text-white mb-2">Tổ chức sinh nhật</h3>
                        <a class="text-white text-sm" href="{{ route('services') }}">Xem chi tiết</a>
                    </div>
                </div>
                <div class="relative group overflow-hidden rounded-lg h-96">
                    <img alt="Teambuilding" class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop"/>
                    <div class="absolute inset-0 bg-black/50 flex flex-col justify-end p-6">
                        <h3 class="font-display text-2xl text-white mb-2">Teambuilding</h3>
                        <a class="text-white text-sm" href="{{ route('services') }}">Xem chi tiết</a>
                    </div>
                </div>
                <div class="relative group overflow-hidden rounded-lg h-96">
                    <img alt="Wedding" class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1519741497674-611481863552?q=80&w=2070&auto=format&fit=crop"/>
                    <div class="absolute inset-0 bg-black/50 flex flex-col justify-end p-6">
                        <h3 class="font-display text-2xl text-white mb-2">Tiệc cưới nhỏ</h3>
                        <a class="text-white text-sm" href="{{ route('services') }}">Xem chi tiết</a>
                    </div>
                </div>
                <div class="relative group overflow-hidden rounded-lg h-96">
                    <img alt="Events" class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?q=80&w=2069&auto=format&fit=crop"/>
                    <div class="absolute inset-0 bg-black/50 flex flex-col justify-end p-6">
                        <h3 class="font-display text-2xl text-white mb-2">Đặt sự kiện riêng</h3>
                        <a class="text-white text-sm" href="{{ route('services') }}">Xem chi tiết</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>

{{-- CTA Section --}}
<section class="relative py-20 bg-primary">
    <div class="container mx-auto px-4 text-center">
        <h2 class="font-display text-4xl md:text-5xl text-white mb-4">Đặt lịch với The Wandering Rose</h2>
        <p class="text-white/90 mb-8">Trải nghiệm không gian nghỉ dưỡng tuyệt vời ngay hôm nay</p>
        <a class="inline-block bg-white text-primary px-8 py-3 rounded font-semibold hover:bg-gray-100 transition" href="{{ route('contact') }}">BOOK PHÒNG</a>
    </div>
</section>

@endsection
