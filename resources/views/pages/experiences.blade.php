@extends('layouts.app')

@section('title', 'Trải Nghiệm & Tours - The Wandering Rose')

@section('content')

{{-- Hero Section --}}
<section class="relative h-[70vh] min-h-[500px] flex items-center justify-center overflow-hidden">
    <img src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?q=80&w=2073&auto=format&fit=crop" 
         alt="Trải nghiệm & Tours" 
         class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-black/30 to-black/60"></div>
    <div class="relative z-10 text-center text-white px-4">
        <h1 class="font-display text-7xl md:text-8xl font-light mb-12">Trải nghiệm & Tours</h1>
        <nav class="flex justify-center gap-8 md:gap-12 text-xs md:text-sm uppercase tracking-[0.2em] flex-wrap">
            <a href="#tour-bavi" class="hover:text-[#C19D60] transition-colors">Tour Vườn Quốc Gia Ba Vì</a>
            <a href="#tour-ao-vua" class="hover:text-[#C19D60] transition-colors">Tour Ao Vua</a>
            <a href="#khoang-xanh" class="hover:text-[#C19D60] transition-colors">Khoang Xanh - Suối Tiên</a>
            <a href="#ban-dia" class="hover:text-[#C19D60] transition-colors">Trải nghiệm bản địa</a>
        </nav>
    </div>
</section>

{{-- Tour Vườn Quốc Gia Ba Vì --}}
<section id="tour-bavi" class="py-20 px-6 bg-white">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="relative overflow-hidden rounded shadow-xl">
                <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=800&h=600&fit=crop" 
                     alt="Vườn Quốc Gia Ba Vì" 
                     class="w-full h-[500px] object-cover">
            </div>
            
            <div class="space-y-6">
                <h2 class="font-display text-5xl text-[#C19D60]">Tour khám phá<br>Vườn Quốc gia Ba Vì</h2>
                <p class="text-gray-600 leading-relaxed">
                    Trải nghiệm thiên nhiên hùng vĩ với thảm thực vật đa dạng tại Vườn Quốc Gia Ba Vì. Khám phá các phế tích thời Pháp cổ kính, rừng thông mộng mơ và những cung đường trekking tuyệt đẹp dẫn lối đến các đỉnh núi cao.
                </p>
                <div class="flex gap-4 flex-wrap">
                    <a href="{{ route('experiences.tour-bavi') }}" 
                       class="bg-[#C19D60] text-white px-8 py-3 text-xs uppercase tracking-widest hover:bg-[#a88b68] transition">
                        XEM CHI TIẾT
                    </a>
                    <a href="{{ route('contact') }}" 
                       class="border-2 border-[#C19D60] text-[#C19D60] px-8 py-3 text-xs uppercase tracking-widest hover:bg-[#C19D60] hover:text-white transition">
                        ĐẶT LỊCH →
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Tour Ao Vua --}}
<section id="tour-ao-vua" class="py-20 px-6 bg-[#FDFBF7]">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6 lg:order-1">
                <h2 class="font-display text-5xl text-[#C19D60]">Tour Ao Vua</h2>
                <p class="text-gray-600 leading-relaxed">
                    Khu du lịch Ao Vua nằm dưới chân núi Tản Viên huyền thoại, nơi gắn liền với truyền thuyết Sơn Tinh - Thủy Tinh. Tại đây, bạn có thể tham gia các trò chơi cảm giác mạnh, tắm thác suối tự nhiên và tận hưởng bầu không khí mát mẻ.
                </p>
                <div class="flex gap-4 flex-wrap">
                    <a href="{{ route('experiences.ao-vua') }}" 
                       class="bg-[#C19D60] text-white px-8 py-3 text-xs uppercase tracking-widest hover:bg-[#a88b68] transition">
                        XEM CHI TIẾT
                    </a>
                    <a href="{{ route('contact') }}" 
                       class="border-2 border-[#C19D60] text-[#C19D60] px-8 py-3 text-xs uppercase tracking-widest hover:bg-[#C19D60] hover:text-white transition">
                        ĐẶT LỊCH →
                    </a>
                </div>
            </div>
            
            <div class="relative overflow-hidden rounded shadow-xl lg:order-2">
                <img src="https://images.unsplash.com/photo-1609137144813-7d9921338f24?w=800&h=600&fit=crop" 
                     alt="Tour Ao Vua" 
                     class="w-full h-[500px] object-cover">
            </div>
        </div>
    </div>
</section>

{{-- Khoang Xanh - Suối Tiên --}}
<section id="khoang-xanh" class="py-20 px-6 bg-white">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="relative overflow-hidden rounded shadow-xl">
                <img src="https://images.unsplash.com/photo-1432405972618-c60b0225b8f9?w=800&h=600&fit=crop" 
                     alt="Khoang Xanh - Suối Tiên" 
                     class="w-full h-[500px] object-cover">
            </div>
            
            <div class="space-y-6">
                <h2 class="font-display text-5xl text-[#C19D60]">Khoang Xanh –<br>Suối Tiên</h2>
                <p class="text-gray-600 leading-relaxed">
                    Được thiên nhiên ưu ái ban tặng những dòng suối xanh mát và thác nước hùng vĩ, Khoang Xanh - Suối Tiên là điểm đến không thể bỏ qua. Hãy đắm mình vào làn nước mát rượi, lắng nghe tiếng chim hót và cảm nhận sự thư thái tuyệt đối.
                </p>
                <div class="flex gap-4 flex-wrap">
                    <a href="{{ route('experiences.khoang-xanh') }}" 
                       class="bg-[#C19D60] text-white px-8 py-3 text-xs uppercase tracking-widest hover:bg-[#a88b68] transition">
                        XEM CHI TIẾT
                    </a>
                    <a href="{{ route('contact') }}" 
                       class="border-2 border-[#C19D60] text-[#C19D60] px-8 py-3 text-xs uppercase tracking-widest hover:bg-[#C19D60] hover:text-white transition">
                        ĐẶT LỊCH →
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Trải nghiệm bản địa --}}
<section id="ban-dia" class="py-20 px-6 bg-[#FDFBF7]">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6 lg:order-1">
                <h2 class="font-display text-5xl text-[#C19D60]">Các trải nghiệm<br>bản địa</h2>
                <p class="text-gray-600 leading-relaxed">
                    Đi sâu vào đời sống địa phương với các hoạt động giao lưu văn hóa, thưởng thức ẩm thực đặc sản vùng miền và tìm hiểu về các làng nghề truyền thống. Một hành trình chạm đến linh hồn của vùng đất Ba Vì.
                </p>
                <div class="flex gap-4 flex-wrap">
                    <a href="{{ route('experiences.ban-dia') }}" 
                       class="bg-[#C19D60] text-white px-8 py-3 text-xs uppercase tracking-widest hover:bg-[#a88b68] transition">
                        XEM CHI TIẾT
                    </a>
                    <a href="{{ route('contact') }}" 
                       class="border-2 border-[#C19D60] text-[#C19D60] px-8 py-3 text-xs uppercase tracking-widest hover:bg-[#C19D60] hover:text-white transition">
                        ĐẶT LỊCH →
                    </a>
                </div>
            </div>
            
            <div class="relative overflow-hidden rounded shadow-xl lg:order-2">
                <img src="https://images.unsplash.com/photo-1504609813442-a8924e83f76e?w=800&h=600&fit=crop" 
                     alt="Trải nghiệm bản địa" 
                     class="w-full h-[500px] object-cover">
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
                <h3 class="text-white font-display text-2xl mb-4">Đêm nhạc acoustic</h3>
                <button class="border border-white/40 text-white px-6 py-2 text-xs uppercase tracking-widest hover:bg-white hover:text-[#C19D60] transition">
                    Tìm hiểu →
                </button>
            </div>
            <div class="group">
                <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?w=500&h=600&fit=crop" 
                     alt="Event 2" 
                     class="w-full aspect-[3/4] object-cover mb-4 group-hover:opacity-90 transition">
                <p class="text-white/70 text-xs uppercase tracking-widest mb-2">Workshop</p>
                <h3 class="text-white font-display text-2xl mb-4">Yoga & Meditation</h3>
                <button class="border border-white/40 text-white px-6 py-2 text-xs uppercase tracking-widest hover:bg-white hover:text-[#C19D60] transition">
                    Tìm hiểu →
                </button>
            </div>
            <div class="group">
                <img src="https://images.unsplash.com/photo-1501281668745-f7f57925c3b4?w=500&h=600&fit=crop" 
                     alt="Event 3" 
                     class="w-full aspect-[3/4] object-cover mb-4 group-hover:opacity-90 transition">
                <p class="text-white/70 text-xs uppercase tracking-widest mb-2">Ẩm thực</p>
                <h3 class="text-white font-display text-2xl mb-4">BBQ Garden Party</h3>
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
