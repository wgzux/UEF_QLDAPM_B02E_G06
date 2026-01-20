<!DOCTYPE html>
<html class="scroll-smooth" lang="vi"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>{{ $roomType->name }} - The Wandering Rose</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&amp;family=Montserrat:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<script>
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              primary: "#B47F57",
              "background-light": "#FDFCF8",
              "background-dark": "#1A1A1A",
              "earth": "#AC7B57",
            },
            fontFamily: {
              display: ["Playfair Display", "serif"],
              sans: ["Montserrat", "sans-serif"],
            },
            borderRadius: {
              DEFAULT: "0.25rem",
            },
          },
        },
      };
    </script>
<style>
        .font-playfair { font-family: 'Playfair Display', serif; }
        .hero-gradient {
            background: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.1) 50%, rgba(0,0,0,0.5) 100%);
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-200 font-sans transition-colors duration-300">
<nav class="absolute top-0 left-0 w-full z-50 text-white">
<div class="bg-black/20 backdrop-blur-sm border-b border-white/10 px-6 py-2 flex justify-between items-center text-xs uppercase tracking-widest">
<span>Đặt lịch với giá tốt nhất</span>
<div class="flex gap-4 items-center">
<input class="bg-transparent border border-white/30 px-2 py-1 text-xs focus:ring-0 focus:border-white" placeholder="Check-in" type="text"/>
<input class="bg-transparent border border-white/30 px-2 py-1 text-xs focus:ring-0 focus:border-white" placeholder="Check-out" type="text"/>
<button class="border border-white px-4 py-1 hover:bg-white hover:text-black transition-all">Button Text →</button>
</div>
</div>
<div class="flex flex-col items-center py-6 gap-4">
<div class="flex justify-between w-full px-12 items-center">
<div class="w-10 h-10 border border-white/30 flex items-center justify-center">
<span class="material-symbols-outlined">menu</span>
</div>
<div class="text-center">
<div class="text-[8px] tracking-[0.3em] mb-1">EST. 2021</div>
<h1 class="font-display text-2xl tracking-widest">THE WANDERING ROSE</h1>
<div class="text-[8px] tracking-[0.5em] italic">Ba Vi</div>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-sm">phone_in_talk</span>
<span class="text-sm">092 981 6699</span>
</div>
</div>
<div class="flex gap-8 text-[11px] font-medium tracking-widest">
<a class="hover:text-primary transition" href="{{ route('home') }}">TRANG CHỦ</a>
<a class="hover:text-primary transition" href="{{ route('about') }}">VỀ CHÚNG TÔI</a>
<a class="hover:text-primary transition" href="{{ route('rooms.index') }}">HẠNG PHÒNG</a>
<a class="hover:text-primary transition" href="{{ route('services.index') }}">DỊCH VỤ SỰ KIỆN</a>
<a class="hover:text-primary transition" href="#">TRẢI NGHIỆM & TOUR</a>
<a class="hover:text-primary transition" href="{{ route('contact') }}">LIÊN HỆ</a>
</div>
</div>
</nav>

{{-- Hero Section --}}
<section class="relative h-[90vh] flex items-end justify-center pb-24 overflow-hidden">
<img alt="{{ $roomType->name }}" class="absolute inset-0 w-full h-full object-cover" src="{{ $roomType->image ?? 'https://images.unsplash.com/photo-1590490360182-c33d57733427' }}"/>
<div class="absolute inset-0 hero-gradient"></div>
<div class="relative z-10 text-center text-white">
<h2 class="font-display text-7xl md:text-8xl mb-8 font-light italic">{{ $roomType->name }}</h2>
<a href="{{ route('booking.create', ['room_type_id' => $roomType->id]) }}" class="border border-white px-8 py-3 uppercase tracking-widest text-sm hover:bg-white hover:text-black transition-all flex items-center mx-auto gap-2 inline-block text-center">ĐẶT PHÒNG <span class="material-symbols-outlined text-sm">arrow_forward</span></a>
</div>
</section>

{{-- Introduction Section --}}
<section class="max-w-7xl mx-auto px-6 py-20">
<div class="text-center max-w-4xl mx-auto mb-16">
<h3 class="font-display text-5xl text-primary mb-8">Giới thiệu</h3>
<div class="text-gray-600 dark:text-gray-400 leading-relaxed">
{!! $roomType->description ?? 'Không gian nghỉ dưỡng sang trọng và tinh tế, mang đến trải nghiệm tuyệt vời cho kỳ nghỉ của bạn.' !!}
</div>
</div>

{{-- Gallery Images - Static for now, will be dynamic in future --}}
<div class="grid md:grid-cols-2 gap-8">
<img alt="{{ $roomType->name }} - View 1" class="w-full h-[400px] object-cover shadow-lg" src="{{ $roomType->image ?? 'https://images.unsplash.com/photo-1590490360182-c33d57733427' }}"/>
<img alt="{{ $roomType->name }} - View 2" class="w-full h-[400px] object-cover shadow-lg" src="{{ $roomType->image ?? 'https://images.unsplash.com/photo-1590490360182-c33d57733427' }}"/>
</div>
</section>

{{-- Amenities & Details Section --}}
<section class="max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-3 gap-16">
<div class="md:col-span-2">
<h3 class="font-display text-4xl text-primary mb-12">Tiện nghi đã bao gồm</h3>
<div class="space-y-6">
@php
    $amenities = is_array($roomType->amenities) ? $roomType->amenities : json_decode($roomType->amenities ?? '[]', true);
    $defaultAmenities = [
        ['title' => 'Wi-Fi 24/7', 'desc' => 'Luôn duy trì sự kết nối mượt mà trong suốt kỳ nghỉ.'],
        ['title' => 'Trà và cà phê miễn phí', 'desc' => 'Được chuẩn bị sẵn để có thể thưởng thức bất cứ lúc nào.'],
        ['title' => 'Nệm pillow-top cao cấp', 'desc' => 'Mang lại giấc ngủ êm ái và trọn vẹn.'],
        ['title' => 'Vòi sen mưa & sen cầm tay', 'desc' => 'Mang lại cảm giác thư thái tuyệt vời.'],
        ['title' => 'Điều hòa không khí', 'desc' => 'Duy trì không gian thoáng mát, dễ chịu.'],
        ['title' => 'Ấm đun siêu tốc', 'desc' => 'Phục vụ nhu cầu pha chế nhanh chóng và tiện lợi.'],
    ];
    $displayAmenities = !empty($amenities) ? $amenities : $defaultAmenities;
@endphp

@foreach($displayAmenities as $amenity)
<div class="border-b border-primary/20 pb-4 text-center">
<h4 class="font-display text-xl text-primary">{{ $amenity['title'] ?? $amenity }}</h4>
@if(is_array($amenity) && isset($amenity['desc']))
<p class="text-xs text-gray-500 uppercase tracking-widest mt-1">{{ $amenity['desc'] }}</p>
@endif
</div>
@endforeach
</div>
</div>

{{-- Room Specs Sidebar --}}
<div class="space-y-8">
<img alt="{{ $roomType->name }} - Detail" class="w-full h-80 object-cover shadow-md" src="{{ $roomType->image ?? 'https://images.unsplash.com/photo-1590490360182-c33d57733427' }}"/>
<div>
<h3 class="font-display text-4xl text-primary mb-6">Mô tả</h3>
<ul class="space-y-4 text-gray-600 dark:text-gray-400">
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary">group</span>
<span>{{ $roomType->max_capacity ?? 2 }} người lớn</span>
</li>
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary">square_foot</span>
<span>{{ $roomType->size ?? 18 }} m²</span>
</li>
                <li class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-primary">child_care</span>
                    <span>{{ $roomType->max_children ?? 0 }} trẻ em</span>
                </li>
                <li class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-primary">door_front</span>
                    <span>{{ $roomType->number_of_rooms ?? 1 }} phòng</span>
                </li>
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary">bed</span>
<span>{{ $roomType->bed_info ?? '01 giường 1m8 x 2m' }}</span>
</li>
<li class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary">payments</span>
<span class="text-2xl font-bold text-primary">{{ number_format($roomType->base_price ?? 0) }} ₫/đêm</span>
</li>
</ul>
<a href="{{ route('booking.create', ['room_type_id' => $roomType->id]) }}" class="mt-8 bg-primary text-white px-10 py-3 uppercase tracking-widest text-sm hover:brightness-110 transition-all flex items-center gap-2 inline-block text-center">ĐẶT PHÒNG <span class="material-symbols-outlined text-sm">arrow_forward</span></a>
</div>
</div>
</section>

{{-- Related Rooms Section --}}
<section class="max-w-7xl mx-auto px-6 py-20 overflow-hidden">
<h3 class="font-display text-5xl text-primary text-center mb-16 italic">Các hạng phòng khác</h3>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
@foreach($relatedRooms as $related)
<div class="group">
<div class="overflow-hidden mb-6">
<img alt="{{ $related->name }}" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110" src="{{ $related->image ?? 'https://images.unsplash.com/photo-1590490360182-c33d57733427' }}"/>
</div>
<h4 class="font-display text-2xl text-primary mb-4">{{ $related->name }}</h4>
<ul class="space-y-1 text-xs text-gray-500 mb-6">
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-xs">group</span> {{ $related->max_capacity ?? 2 }} người lớn</li>
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-xs">square_foot</span> {{ $related->size ?? '--' }} m²</li>
<li class="flex items-center gap-2"><span class="material-symbols-outlined text-xs">payments</span> {{ number_format($related->base_price ?? 0) }} ₫</li>
</ul>
<div class="flex gap-2">
<a href="{{ route('booking.create', ['room_type_id' => $related->id]) }}" class="bg-primary text-white px-4 py-2 text-[10px] tracking-widest uppercase inline-block text-center">ĐẶT PHÒNG</a>
<a href="{{ route('rooms.show', $related->id) }}" class="border border-primary text-primary px-4 py-2 text-[10px] tracking-widest uppercase inline-block text-center">XEM CHI TIẾT</a>
</div>
</div>
@endforeach
</div>
</section>

{{-- News Section --}}
<section class="bg-primary/90 dark:bg-earth/80 text-white py-24 px-6">
<div class="max-w-7xl mx-auto">
<h3 class="font-display text-5xl text-center mb-16 italic">Tin tức và sự kiện</h3>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
<div class="flex flex-col gap-4">
<img alt="News 1" class="w-full aspect-[3/4] object-cover shadow-2xl" src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30"/>
<div class="space-y-2">
<p class="text-[10px] uppercase tracking-widest opacity-70">Sự kiện âm nhạc</p>
<h4 class="font-display text-2xl">Tên tin tức</h4>
<button class="text-[10px] uppercase tracking-widest flex items-center gap-2 border border-white/40 px-3 py-1.5 w-fit hover:bg-white hover:text-primary transition-all">TÌM HIỂU <span class="material-symbols-outlined text-[10px]">arrow_forward</span></button>
</div>
</div>
<div class="flex flex-col gap-4">
<img alt="News 2" class="w-full aspect-[3/4] object-cover shadow-2xl" src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819"/>
<div class="space-y-2">
<p class="text-[10px] uppercase tracking-widest opacity-70">Tên loại tin tức</p>
<h4 class="font-display text-2xl">Tên tin tức</h4>
<button class="text-[10px] uppercase tracking-widest flex items-center gap-2 border border-white/40 px-3 py-1.5 w-fit hover:bg-white hover:text-primary transition-all">TÌM HIỂU <span class="material-symbols-outlined text-[10px]">arrow_forward</span></button>
</div>
</div>
<div class="flex flex-col gap-4">
<img alt="News 3" class="w-full aspect-[3/4] object-cover shadow-2xl" src="https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3"/>
<div class="space-y-2">
<p class="text-[10px] uppercase tracking-widest opacity-70">Tên loại tin tức</p>
<h4 class="font-display text-2xl">Tên tin tức</h4>
<button class="text-[10px] uppercase tracking-widest flex items-center gap-2 border border-white/40 px-3 py-1.5 w-fit hover:bg-white hover:text-primary transition-all">TÌM HIỂU <span class="material-symbols-outlined text-[10px]">arrow_forward</span></button>
</div>
</div>
</div>
</div>
</section>

{{-- Footer --}}
<footer class="bg-primary dark:bg-earth text-white py-20">
<div class="max-w-7xl mx-auto px-6">
<div class="text-center mb-16">
<div class="text-[8px] tracking-[0.3em] mb-1">EST. 2021</div>
<h1 class="font-display text-3xl tracking-widest">THE WANDERING ROSE</h1>
<div class="text-[8px] tracking-[0.5em] italic">Ba Vi</div>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 gap-12 mb-16">
<div>
<h5 class="font-display text-xl mb-6">TRANG CHỦ</h5>
<ul class="space-y-3 text-[10px] tracking-widest opacity-80 uppercase">
<li><a class="hover:underline" href="{{ route('about') }}">VỀ CHÚNG TÔI</a></li>
<li><a class="hover:underline" href="{{ route('gallery') }}">GALLERY HÌNH ẢNH & VIDEO</a></li>
</ul>
</div>
<div>
<h5 class="font-display text-xl mb-6">HẠNG PHÒNG</h5>
<ul class="space-y-3 text-[10px] tracking-widest opacity-80 uppercase">
<li><a class="hover:underline" href="{{ route('rooms.wooden') }}">KHU WOODEN HOUSE</a></li>
<li><a class="hover:underline" href="{{ route('rooms.rose') }}">KHU ROSE HOUSE</a></li>
<li><a class="hover:underline" href="{{ route('rooms.villa') }}">KHU VILLA</a></li>
</ul>
</div>
<div>
<h5 class="font-display text-xl mb-6">DỊCH VỤ SỰ KIỆN</h5>
<ul class="space-y-3 text-[10px] tracking-widest opacity-80 uppercase">
<li><a class="hover:underline" href="{{ route('services.index') }}">TỔ CHỨC SINH NHẬT</a></li>
<li><a class="hover:underline" href="{{ route('services.index') }}">TEAMBUILDING</a></li>
<li><a class="hover:underline" href="{{ route('services.index') }}">TIỆC CƯỚI NHỎ</a></li>
</ul>
</div>
<div>
<h5 class="font-display text-xl mb-4">LIÊN HỆ</h5>
<p class="text-xs opacity-80 mb-1">092 981 6699</p>
<p class="text-xs opacity-80 mb-1">booking@thewanderingrosebavi.com</p>
<p class="text-xs opacity-80 mb-4">Thôn Mit Mái, Ba Vì, Hà Nội</p>
<a href="{{ route('contact') }}" class="border border-white px-4 py-1.5 text-[10px] tracking-widest uppercase hover:bg-white hover:text-primary transition-all flex items-center gap-2 inline-block">
GỬI LIÊN HỆ <span class="material-symbols-outlined text-[12px]">arrow_forward</span>
</a>
</div>
</div>
<div class="border-t border-white/20 pt-8 text-center">
<p class="text-[10px] opacity-60">© Copyright 2025 The Wandering Rose</p>
</div>
</div>
</footer>

{{-- Dark Mode Toggle --}}
<button class="fixed bottom-6 right-6 w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center shadow-2xl z-50" onclick="document.documentElement.classList.toggle('dark')">
<span class="material-symbols-outlined">contrast</span>
</button>

</body></html>