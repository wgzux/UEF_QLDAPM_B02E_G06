@extends('layouts.app')

@section('title', 'Hạng Phòng - The Wandering Rose')

@section('content')


@php
    // Tách data theo zone - filter dựa trên tên phòng
    $woodenRooms = $rooms->filter(function($room) {
        return stripos($room->name, 'wooden') !== false || 
               stripos($room->name, 'forest') !== false ||
               stripos($room->name, 'deluxe') !== false ||
               stripos($room->name, 'family') !== false;
    })->take(3);
    
    $roseRooms = $rooms->filter(function($room) {
        return stripos($room->name, 'rose') !== false;
    })->take(3);
    
    $villaRoom = $rooms->filter(function($room) {
        return stripos($room->name, 'villa') !== false;
    })->first();
@endphp

{{-- Hero Banner --}}
<section class="relative h-[600px] flex items-center justify-center overflow-hidden">
    <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?q=80&w=2000&auto=format&fit=crop" 
         alt="Rooms Hero" 
         class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/40"></div>
    <div class="relative z-10 text-center text-white">
        <h1 class="font-display text-7xl md:text-8xl font-light">Hạng phòng</h1>
    </div>
</section>

{{-- Wooden House Section --}}
<section class="py-20 px-6 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="font-display text-5xl text-[#C19D60] mb-6">Wooden House</h2>
            <p class="text-gray-600 leading-relaxed mb-8">
                Khu nhà gỗ mang đến không gian ấm áp, gần gũi với thiên nhiên. Thiết kế hiện đại kết hợp nét truyền thống, tạo cảm giác thư giãn tuyệt đối cho kỳ nghỉ của bạn.
            </p>
            <a href="{{ route('rooms.wooden') }}" 
               class="inline-block bg-[#C19D60] text-white px-10 py-3 text-xs uppercase tracking-widest hover:bg-[#a88b68] transition">
                XEM CHI TIẾT
            </a>
        </div>

        {{-- Grid 3 phòng Wooden House --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($woodenRooms as $room)
            <div class="group">
                {{-- Room Image --}}
                <div class="relative overflow-hidden mb-6 aspect-[4/3]">
                    @if($room->images && count($room->images) > 0)
                        <img src="{{ asset('storage/' . $room->images[0]) }}" 
                             alt="{{ $room->name }}" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @else
                        <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?w=800&h=600&fit=crop" 
                             alt="{{ $room->name }}" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @endif
                </div>

                {{-- Room Info --}}
                <h3 class="font-display text-3xl text-[#C19D60] mb-4">{{ $room->name }}</h3>
                
                {{-- Room Attributes --}}
                <div class="space-y-2.5 mb-6 text-gray-600">
                    <div class="flex items-center gap-3 text-sm">
                        <svg class="w-5 h-5 text-[#C19D60]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                        <span>{{ $room->max_capacity ?? '2' }} người lớn</span>
                    </div>
                    <div class="flex items-center gap-3 text-sm">
                        <svg class="w-5 h-5 text-[#C19D60]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                        </svg>
                        <span>{{ $room->size ?? '30' }}m²</span>
                    </div>
                    <div class="flex items-center gap-3 text-sm">
                        <svg class="w-5 h-5 text-[#C19D60]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <span>{{ $room->bed_info ?? '1 giường đôi' }}</span>
                    </div>
                    <div class="flex items-center gap-3 text-sm">
                        <svg class="w-5 h-5 text-[#C19D60]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                        </svg>
                        <span>{{ $room->number_of_rooms ?? 1 }} phòng</span>
                    </div>
                </div>

                {{-- Price --}}
                <div class="mb-6">
                    <p class="text-2xl font-display text-[#C19D60]">
                        {{ number_format($room->base_price ?? 1500000) }}đ
                        <span class="text-sm text-gray-500">/ đêm</span>
                    </p>
                </div>

                {{-- Action Buttons --}}
                <div class="flex gap-3">
                    <a href="{{ route('booking.create', ['room' => $room->id]) }}" 
                       class="flex-1 bg-[#C19D60] text-white text-center px-6 py-3 text-xs uppercase tracking-widest hover:bg-[#a88b68] transition">
                        ĐẶT PHÒNG
                    </a>
                    <a href="{{ route('rooms.show', $room->id) }}" 
                       class="flex-1 bg-white border-2 border-[#C19D60] text-[#C19D60] text-center px-6 py-3 text-xs uppercase tracking-widest hover:bg-[#C19D60] hover:text-white transition">
                        XEM CHI TIẾT
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Rose House Section --}}
<section class="py-20 px-6 bg-[#FDFBF7]">
    <div class="max-w-7xl mx-auto">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="font-display text-5xl text-[#C19D60] mb-6">Rose House</h2>
            <p class="text-gray-600 leading-relaxed mb-8">
                Khu Rose House mang phong cách lãng mạn, tinh tế với gam màu pastel nhẹ nhàng. Mỗi căn phòng được thiết kế riêng biệt, tạo nên không gian nghỉ dưỡng độc đáo và đẳng cấp.
            </p>
            <a href="{{ route('rooms.rose') }}" 
               class="inline-block bg-[#C19D60] text-white px-10 py-3 text-xs uppercase tracking-widest hover:bg-[#a88b68] transition">
                XEM CHI TIẾT
            </a>
        </div>

        {{-- Grid 3 phòng Rose House --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($roseRooms as $room)
            <div class="group">
                {{-- Room Image --}}
                <div class="relative overflow-hidden mb-6 aspect-[4/3]">
                    @if($room->images && count($room->images) > 0)
                        <img src="{{ asset('storage/' . $room->images[0]) }}" 
                             alt="{{ $room->name }}" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @else
                        <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=800&h=600&fit=crop" 
                             alt="{{ $room->name }}" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @endif
                </div>

                {{-- Room Info --}}
                <h3 class="font-display text-3xl text-[#C19D60] mb-4">{{ $room->name }}</h3>
                
                {{-- Room Attributes --}}
                <div class="space-y-2.5 mb-6 text-gray-600">
                    <div class="flex items-center gap-3 text-sm">
                        <svg class="w-5 h-5 text-[#C19D60]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                        <span>{{ $room->max_capacity ?? '2' }} người lớn</span>
                    </div>
                    <div class="flex items-center gap-3 text-sm">
                        <svg class="w-5 h-5 text-[#C19D60]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                        </svg>
                        <span>{{ $room->size ?? '35' }}m²</span>
                    </div>
                    <div class="flex items-center gap-3 text-sm">
                        <svg class="w-5 h-5 text-[#C19D60]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <span>{{ $room->bed_info ?? '1 giường queen' }}</span>
                    </div>
                    {{-- Children Capacity --}}
                    <div class="flex items-center gap-3 text-sm">
                        <svg class="w-5 h-5 text-[#C19D60]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                        <span>{{ $room->max_children ?? 0 }} trẻ em</span>
                    </div>
                    {{-- Number of Rooms --}}
                    <div class="flex items-center gap-3 text-sm">
                        <svg class="w-5 h-5 text-[#C19D60]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                        </svg>
                        <span>{{ $room->number_of_rooms ?? 1 }} phòng</span>
                    </div>
                </div>

                {{-- Price --}}
                <div class="mb-6">
                    <p class="text-2xl font-display text-[#C19D60]">
                        {{ number_format($room->base_price ?? 1800000) }}đ
                        <span class="text-sm text-gray-500">/ đêm</span>
                    </p>
                </div>

                {{-- Action Buttons --}}
                <div class="flex gap-3">
                    <a href="{{ route('booking.create', ['room' => $room->id]) }}" 
                       class="flex-1 bg-[#C19D60] text-white text-center px-6 py-3 text-xs uppercase tracking-widest hover:bg-[#a88b68] transition">
                        ĐẶT PHÒNG
                    </a>
                    <a href="{{ route('rooms.show', $room->id) }}" 
                       class="flex-1 bg-white border-2 border-[#C19D60] text-[#C19D60] text-center px-6 py-3 text-xs uppercase tracking-widest hover:bg-[#C19D60] hover:text-white transition">
                        XEM CHI TIẾT
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- The Wandering Rose Villa (Layout Đặc Biệt) --}}
@if($villaRoom)
<section class="py-20 px-6 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="font-display text-5xl text-[#C19D60] mb-6">The Wandering Rose Villa</h2>
            <p class="text-gray-600 leading-relaxed mb-8">
                Villa cao cấp nhất với diện tích rộng rãi, thiết kế hiện đại và đầy đủ tiện nghi. Không gian riêng tư hoàn hảo cho gia đình hoặc nhóm bạn muốn có kỳ nghỉ đẳng cấp.
            </p>
            <a href="{{ route('rooms.villa') }}" 
               class="inline-block bg-[#C19D60] text-white px-10 py-3 text-xs uppercase tracking-widest hover:bg-[#a88b68] transition">
                XEM CHI TIẾT
            </a>
        </div>

        {{-- Layout Flex Ngang --}}
        <div class="flex flex-col lg:flex-row gap-12 items-center">
            {{-- Bên Trái: Ảnh Villa (60%) --}}
            <div class="lg:w-3/5">
                <div class="relative overflow-hidden aspect-[16/10]">
                    @if($villaRoom->images && count($villaRoom->images) > 0)
                        <img src="{{ asset('storage/' . $villaRoom->images[0]) }}" 
                             alt="{{ $villaRoom->name }}" 
                             class="w-full h-full object-cover">
                    @else
                        <img src="https://images.unsplash.com/photo-1582268611958-ebfd161ef9cf?w=1200&h=800&fit=crop" 
                             alt="{{ $villaRoom->name }}" 
                             class="w-full h-full object-cover">
                    @endif
                </div>
            </div>

            {{-- Bên Phải: Thông Tin (40%) --}}
            <div class="lg:w-2/5 space-y-6">
                <h3 class="font-display text-4xl text-[#C19D60]">{{ $villaRoom->name }}</h3>
                
                <p class="text-gray-600 leading-relaxed">
                    {{ $villaRoom->description ?? 'Villa sang trọng với không gian rộng rãi, view đẹp và đầy đủ tiện nghi cao cấp. Phù hợp cho gia đình hoặc nhóm bạn.' }}
                </p>

                {{-- Villa Attributes --}}
                <div class="space-y-3 text-gray-600">
                    <div class="flex items-center gap-3">
                        <svg class="w-6 h-6 text-[#C19D60]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                        <span class="text-base">{{ $villaRoom->max_capacity ?? '8' }} người lớn</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <svg class="w-6 h-6 text-[#C19D60]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                        </svg>
                        <span class="text-base">{{ $villaRoom->size ?? '150' }}m²</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <svg class="w-6 h-6 text-[#C19D60]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <span class="text-base">{{ $villaRoom->bed_info ?? '4 phòng ngủ' }}</span>
                    </div>
                </div>

                {{-- Price --}}
                <div class="pt-4 border-t border-gray-200">
                    <p class="text-3xl font-display text-[#C19D60]">
                        {{ number_format($villaRoom->base_price ?? 5000000) }}đ
                        <span class="text-base text-gray-500">/ đêm</span>
                    </p>
                </div>

                {{-- Action Buttons --}}
                <div class="flex gap-3 pt-4">
                    <a href="{{ route('booking.create', ['room' => $villaRoom->id]) }}" 
                       class="flex-1 bg-[#C19D60] text-white text-center px-8 py-4 text-xs uppercase tracking-widest hover:bg-[#a88b68] transition">
                        ĐẶT PHÒNG
                    </a>
                    <a href="{{ route('rooms.show', $villaRoom->id) }}" 
                       class="flex-1 bg-white border-2 border-[#C19D60] text-[#C19D60] text-center px-8 py-4 text-xs uppercase tracking-widest hover:bg-[#C19D60] hover:text-white transition">
                        XEM CHI TIẾT
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@endsection
