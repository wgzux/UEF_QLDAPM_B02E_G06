@extends('layouts.app')

@section('title', 'The Wandering Rose Villa')

@section('content')
@php
    $villa = $villaRooms->first();
@endphp

{{-- Hero Section --}}
<header class="relative h-screen flex items-center justify-center text-center overflow-hidden">
    <img src="{{ isset($villa->images[0]) ? asset('storage/'.$villa->images[0]) : ($villa->image ?? 'https://images.unsplash.com/photo-1582268611958-ebfd161ef9cf') }}" 
         alt="{{ $villa->name ?? 'The Wandering Rose Villa' }}" 
         class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/30"></div>
    <div class="relative z-10 px-4 text-white">
        <h1 class="font-display text-5xl md:text-7xl mb-8 tracking-wide">{{ $villa->name ?? 'The Wandering Rose Villa' }}</h1>
        <a href="{{ route('booking.create', ['room_type_id' => $villa->id]) }}" 
           class="border border-white text-white px-8 py-3 uppercase tracking-widest text-sm hover:bg-white hover:text-black transition-all duration-300 inline-flex items-center gap-2">
            ĐẶT PHÒNG <span class="material-symbols-outlined text-sm">arrow_forward</span>
        </a>
    </div>
</header>

{{-- Intro Section --}}
<section class="max-w-6xl mx-auto px-6 py-20 text-center">
    <h2 class="font-display text-4xl md:text-5xl text-[#C19D60] mb-12">Giới thiệu</h2>
    <div class="max-w-4xl mx-auto space-y-6 text-gray-600 font-light leading-relaxed mb-16">
        <p>{{ $villa->description ?? 'Không gian nghỉ dưỡng tuyệt vời...' }}</p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @if(isset($villa->images) && count($villa->images) > 1)
            @foreach(array_slice($villa->images, 0, 3) as $img)
                <div class="aspect-[4/5] overflow-hidden rounded-sm">
                    <img src="{{ asset('storage/'.$img) }}" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                </div>
            @endforeach
        @else
             <div class="aspect-[4/5] overflow-hidden rounded-sm">
                <img src="https://images.unsplash.com/photo-1582268611958-ebfd161ef9cf" class="w-full h-full object-cover">
            </div>
        @endif
    </div>
</section>

{{-- Information Scction --}}
<section class="bg-white py-20">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="font-display text-4xl md:text-5xl text-[#C19D60] text-center mb-6">Thông tin</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="relative group">
                <img src="{{ isset($villa->images[0]) ? asset('storage/'.$villa->images[0]) : ($villa->image ?? 'https://images.unsplash.com/photo-1582268611958-ebfd161ef9cf') }}" 
                     class="w-full rounded-sm shadow-xl">
            </div>
            
            <div class="space-y-8">
                {{-- Dynamic Attributes --}}
                <div class="flex items-center space-x-4 text-[#C19D60]">
                    <span class="material-symbols-outlined">group</span>
                    <span class="font-medium text-lg">{{ $villa->max_capacity ?? 8 }} người lớn - {{ $villa->max_children ?? 4 }} trẻ em</span>
                </div>
                
                <div class="space-y-4">
                    <h3 class="font-display text-3xl text-[#C19D60] border-b border-[#C19D60]/20 pb-2">Chi tiết</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center space-x-3">
                            <span class="material-symbols-outlined text-[#C19D60]">square_foot</span> 
                            <span>{{ $villa->size ?? 150 }} m²</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-symbols-outlined text-[#C19D60]">door_front</span> 
                            <span>{{ $villa->number_of_rooms ?? 4 }} phòng ngủ</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-symbols-outlined text-[#C19D60]">bed</span> 
                            <span>{{ $villa->bed_info ?? '4 giường lớn' }}</span>
                        </li>
                    </ul>
                </div>

                <div class="flex gap-4">
                     <a href="{{ route('booking.create', ['room_type_id' => $villa->id]) }}" 
                        class="border border-[#C19D60] text-[#C19D60] px-8 py-2 mt-4 hover:bg-[#C19D60] hover:text-white transition-all duration-300 flex items-center">
                        ĐẶT PHÒNG <span class="material-symbols-outlined ml-2 text-sm">arrow_forward</span>
                    </a>
                    {{-- Button View Detail as requested --}}
                     <a href="{{ route('rooms.show', $villa->id) }}" 
                        class="border border-[#C19D60] text-[#C19D60] px-8 py-2 mt-4 hover:bg-[#C19D60] hover:text-white transition-all duration-300 flex items-center">
                        XEM CHI TIẾT
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Amenities (Static or Dynamic) --}}
{{-- Keeping static for now as per design preference or use dynamic if available --}}
<section class="max-w-4xl mx-auto px-6 py-20">
    <h2 class="font-display text-4xl md:text-5xl text-[#C19D60] text-center mb-16">Tiện nghi đã bao gồm</h2>
    <div class="grid grid-cols-2 gap-8 text-center">
        @php
            $amenities = is_array($villa->amenities) ? $villa->amenities : json_decode($villa->amenities ?? '[]', true);
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
             <div class="pb-6 border-b border-[#C19D60]/10">
                <h4 class="font-display text-2xl text-[#C19D60] mb-1">{{ is_array($amenity) ? $amenity['title'] : $amenity }}</h4>
            </div>
        @endforeach
    </div>
</section>

@endsection