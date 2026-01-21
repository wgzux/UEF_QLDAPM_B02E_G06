@extends('layouts.app')

@section('title', 'Rose House - The Wandering Rose Villa')

@section('content')

{{-- Hero Section --}}
<section class="relative h-[70vh] min-h-[500px] flex items-center justify-center overflow-hidden">
    <img src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?q=80&w=2070&auto=format&fit=crop" 
         alt="Rose House" 
         class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-black/30 to-black/60"></div>
    <div class="relative z-10 text-center text-white px-4">
        <h1 class="font-display text-7xl md:text-8xl font-light mb-12">Rose House</h1>
        <nav class="flex justify-center gap-12 text-sm uppercase tracking-[0.2em]">
            <a href="#gioi-thieu" class="hover:text-[#C19D60] transition-colors">Giới Thiệu</a>
            <a href="#pink-rose" class="hover:text-[#C19D60] transition-colors">Pink Rose House</a>
            <a href="#white-rose" class="hover:text-[#C19D60] transition-colors">White Rose House</a>
            <a href="#red-rose" class="hover:text-[#C19D60] transition-colors">Red Rose House</a>
        </nav>
    </div>
</section>

{{-- Giới thiệu Section --}}
<section class="py-20 px-6 bg-white">
    <div class="max-w-6xl mx-auto">
        <h2 class="font-display text-5xl md:text-6xl text-center italic text-[#C19D60] mb-12">Giới thiệu</h2>
        
        <div class="max-w-4xl mx-auto text-center mb-16 space-y-4 text-gray-600 leading-relaxed">
            <p>Rose House mang đến không gian lãng mạn với thiết kế tinh tế và sang trọng. Mỗi căn phòng đều được chăm chút kỹ lưỡng để tạo nên bầu không khí ấm cúng và riêng tư.</p>
            <p>Thiết kế theo phong cách tân cổ điển với tông màu hồng pastel dịu dàng, Rose House là điểm đến lý tưởng cho những ai tìm kiếm sự lãng mạn và riêng tư tại Ba Vì.</p>
            <p>Với 3 phòng đặc sắc: Pink, White và Red Rose - mỗi phòng đều mang một câu chuyện riêng nhưng cùng chung tinh thần thanh lịch và ấm áp.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="overflow-hidden rounded shadow-lg">
                <img src="https://images.unsplash.com/photo-1582719508461-905c673771fd?w=500&h=600&fit=crop" 
                     alt="Lake View" 
                     class="w-full h-[400px] object-cover hover:scale-105 transition-transform duration-500">
            </div>
            <div class="overflow-hidden rounded shadow-lg">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=500&h=600&fit=crop" 
                     alt="Portrait" 
                     class="w-full h-[400px] object-cover hover:scale-105 transition-transform duration-500">
            </div>
            <div class="overflow-hidden rounded shadow-lg">
                <img src="https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?w=500&h=600&fit=crop" 
                     alt="Interior" 
                     class="w-full h-[400px] object-cover hover:scale-105 transition-transform duration-500">
            </div>
        </div>
    </div>
</section>

@foreach($roseRooms as $room)
    <section id="{{ Str::slug($room->name) }}" class="py-20 px-6 {{ $loop->even ? 'bg-white' : 'bg-[#FDFBF7]' }}">
        <div class="max-w-6xl mx-auto">
            <h2 class="font-display text-4xl md:text-5xl text-center text-[#C19D60] mb-4">{{ $room->name }}</h2>
            <p class="text-center text-gray-500 text-sm mb-4 max-w-2xl mx-auto">
                {{ $room->description ?? 'Không gian lãng mạn, tinh tế...' }}
            </p>
            <div class="text-center mb-12">
                <a href="{{ route('rooms.show', $room->id) }}" class="text-xs uppercase tracking-widest text-[#C19D60] hover:underline">
                    XEM CHI TIẾT →
                </a>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="relative overflow-hidden rounded shadow-2xl {{ $loop->odd ? 'lg:order-last' : '' }}">
                    <img src="{{ isset($room->images[0]) ? asset('storage/'.$room->images[0]) : ($room->image ?? 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b') }}" 
                         alt="{{ $room->name }}" 
                         class="w-full h-[500px] object-cover">
                </div>
                
                <div class="space-y-6">
                    <div class="space-y-3 text-sm text-gray-600">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[#C19D60]">group</span>
                            <span>{{ $room->max_capacity }} người lớn</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[#C19D60]">child_care</span>
                            <span>{{ $room->max_children ?? 0 }} trẻ em</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[#C19D60]">square_foot</span>
                            <span>{{ $room->size }} m²</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[#C19D60]">door_front</span>
                            <span>{{ $room->number_of_rooms ?? 1 }} phòng ngủ</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[#C19D60]">bed</span>
                            <span>{{ $room->bed_info ?? 'Giường đôi' }}</span>
                        </div>
                        <div class="flex items-center gap-3">
                             <span class="material-symbols-outlined text-[#C19D60]">payments</span>
                             <span class="font-bold text-[#C19D60]">{{ number_format($room->base_price) }}đ</span>
                        </div>
                    </div>
                    
                    <div class="flex gap-4 pt-4">
                        <a href="{{ route('booking.create', ['room_type_id' => $room->id]) }}" 
                           class="flex-1 bg-[#C19D60] text-white text-center py-3 text-xs uppercase tracking-widest hover:bg-[#a88b68] transition">
                            ĐẶT PHÒNG
                        </a>
                        <a href="{{ route('rooms.show', $room->id) }}" 
                           class="flex-1 border-2 border-[#C19D60] text-[#C19D60] text-center py-3 text-xs uppercase tracking-widest hover:bg-[#C19D60] hover:text-white transition">
                            XEM CHI TIẾT
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endforeach

{{-- Tiện nghi đã bao gồm --}}
<section class="py-20 px-6 bg-white">
    <div class="max-w-4xl mx-auto">
        <h2 class="font-display text-5xl md:text-6xl text-center italic text-[#C19D60] mb-16">Tiện nghi đã bao gồm</h2>
        
        <div class="divide-y divide-gray-200">
            <div class="py-8 text-center">
                <h3 class="text-xl font-display text-[#C19D60] mb-2">Wi-Fi 24/7</h3>
                <p class="text-xs uppercase tracking-[0.25em] text-gray-400">Luôn duy trì sự kết nối mượt mà trong suốt kỳ nghỉ</p>
            </div>
            <div class="py-8 text-center">
                <h3 class="text-xl font-display text-[#C19D60] mb-2">Trà và cà phê miễn phí</h3>
                <p class="text-xs uppercase tracking-[0.25em] text-gray-400">Được chuẩn bị sẵn để thưởng thức bất cứ lúc nào</p>
            </div>
            <div class="py-8 text-center">
                <h3 class="text-xl font-display text-[#C19D60] mb-2">Nệm pillow-top cao cấp</h3>
                <p class="text-xs uppercase tracking-[0.25em] text-gray-400">Mang lại giấc ngủ êm ái và trọn vẹn</p>
            </div>
            <div class="py-8 text-center">
                <h3 class="text-xl font-display text-[#C19D60] mb-2">Vòi sen mưa & sen cầm tay</h3>
                <p class="text-xs uppercase tracking-[0.25em] text-gray-400">Tận hưởng cảm giác thư giãn tuyệt đối</p>
            </div>
            <div class="py-8 text-center">
                <h3 class="text-xl font-display text-[#C19D60] mb-2">Điều hòa không khí</h3>
                <p class="text-xs uppercase tracking-[0.25em] text-gray-400">Duy trì không gian thoáng mát, dễ chịu</p>
            </div>
            <div class="py-8 text-center">
                <h3 class="text-xl font-display text-[#C19D60] mb-2">Smart TV</h3>
                <p class="text-xs uppercase tracking-[0.25em] text-gray-400">Giải trí đa dạng ngay tại phòng</p>
            </div>
        </div>
    </div>
</section>

{{-- Tin tức và sự kiện --}}
<section class="py-20 px-6 bg-[#C19D60]">
    <div class="max-w-6xl mx-auto">
        <h2 class="font-display text-5xl text-center text-white mb-16">Tin tức và sự kiện</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="group">
                <img src="https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3?w=500&h=600&fit=crop" 
                     alt="Event 1" 
                     class="w-full aspect-[3/4] object-cover mb-4 group-hover:opacity-90 transition">
                <p class="text-white/70 text-xs uppercase tracking-widest mb-2">Sự kiện âm nhạc</p>
                <h3 class="text-white font-display text-2xl mb-4">Tên tin tức</h3>
                <button class="border border-white/40 text-white px-6 py-2 text-xs uppercase tracking-widest hover:bg-white hover:text-[#C19D60] transition">
                    Tìm hiểu →
                </button>
            </div>
            <div class="group">
                <img src="https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=500&h=600&fit=crop" 
                     alt="Event 2" 
                     class="w-full aspect-[3/4] object-cover mb-4 group-hover:opacity-90 transition">
                <p class="text-white/70 text-xs uppercase tracking-widest mb-2">Tên loại tin tức</p>
                <h3 class="text-white font-display text-2xl mb-4">Tên tin tức</h3>
                <button class="border border-white/40 text-white px-6 py-2 text-xs uppercase tracking-widest hover:bg-white hover:text-[#C19D60] transition">
                    Tìm hiểu →
                </button>
            </div>
            <div class="group">
                <img src="https://images.unsplash.com/photo-1501281668745-f7f57925c3b4?w=500&h=600&fit=crop" 
                     alt="Event 3" 
                     class="w-full aspect-[3/4] object-cover mb-4 group-hover:opacity-90 transition">
                <p class="text-white/70 text-xs uppercase tracking-widest mb-2">Tên loại tin tức</p>
                <h3 class="text-white font-display text-2xl mb-4">Tên tin tức</h3>
                <button class="border border-white/40 text-white px-6 py-2 text-xs uppercase tracking-widest hover:bg-white hover:text-[#C19D60] transition">
                    Tìm hiểu →
                </button>
            </div>
        </div>
        
        <div class="flex justify-center gap-4 mt-12">
            <button class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-[#C19D60] hover:bg-white/90">
                ←
            </button>
            <button class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-[#C19D60] hover:bg-white/90">
                →
            </button>
        </div>
    </div>
</section>

@endsection
