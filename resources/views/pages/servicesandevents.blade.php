@extends('layouts.app')

@section('title', 'Dịch Vụ Sự Kiện - The Wandering Rose')

@section('content')

{{-- Hero Section --}}
<section class="relative h-[70vh] min-h-[500px] flex items-center justify-center overflow-hidden">
    <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?q=80&w=2069&auto=format&fit=crop" 
         alt="Dịch vụ sự kiện" 
         class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-black/30 to-black/60"></div>
    <div class="relative z-10 text-center text-white px-4">
        <h1 class="font-display text-7xl md:text-8xl font-light mb-12">Dịch vụ sự kiện</h1>
        <nav class="flex justify-center gap-8 md:gap-12 text-xs md:text-sm uppercase tracking-[0.2em] flex-wrap">
            <a href="#sinh-nhat" class="hover:text-[#C19D60] transition-colors">Tổ chức sinh nhật</a>
            <a href="#teambuilding" class="hover:text-[#C19D60] transition-colors">Teambuilding</a>
            <a href="#hop-coquan" class="hover:text-[#C19D60] transition-colors">Họp cơ quan</a>
            <a href="#ky-niem" class="hover:text-[#C19D60] transition-colors">Lễ kỷ niệm</a>
            <a href="#dai-lich" class="hover:text-[#C19D60] transition-colors">Đại lịch sự kiện</a>
        </nav>
    </div>
</section>

{{-- Tổ chức sinh nhật --}}
<section id="sinh-nhat" class="py-20 px-6 bg-white">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="relative overflow-hidden rounded shadow-xl">
                <img src="https://images.unsplash.com/photo-1530103862676-de8c9debad1d?w=800&h=600&fit=crop" 
                     alt="Tổ chức sinh nhật" 
                     class="w-full h-[500px] object-cover">
            </div>
            
            <div class="space-y-6">
                <h2 class="font-display text-5xl text-[#C19D60]">Tổ chức sinh nhật</h2>
                <p class="text-gray-600 leading-relaxed">
                    Tổ chức tiệc sinh nhật tại The Wandering Rose mang đến không gian sang trọng và ấm cúng, phù hợp cho mọi độ tuổi. Chúng tôi cung cấp đầy đủ dịch vụ trang trí, âm thanh, ánh sáng và catering theo yêu cầu.
                </p>
                <div class="flex gap-4 flex-wrap">
                    <a href="{{ route('services.sinh-nhat') }}" 
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

{{-- Teambuilding --}}
<section id="teambuilding" class="py-20 px-6 bg-[#FDFBF7]">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6 lg:order-1">
                <h2 class="font-display text-5xl text-[#C19D60]">Teambuilding</h2>
                <p class="text-gray-600 leading-relaxed">
                    Tổ chức hoạt động teambuilding tại khu nghỉ dưỡng với không gian xanh mát, nhiều hoạt động ngoài trời hấp dẫn. Chương trình được thiết kế linh hoạt phù hợp với nhu cầu của từng doanh nghiệp.
                </p>
                <div class="flex gap-4 flex-wrap">
                    <a href="{{ route('services.teambuilding') }}" 
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
                <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?w=800&h=600&fit=crop" 
                     alt="Teambuilding" 
                     class="w-full h-[500px] object-cover">
            </div>
        </div>
    </div>
</section>

{{-- Họp cơ quan --}}
<section id="hop-coquan" class="py-20 px-6 bg-white">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="relative overflow-hidden rounded shadow-xl">
                <img src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?w=800&h=600&fit=crop" 
                     alt="Họp cơ quan" 
                     class="w-full h-[500px] object-cover">
            </div>
            
            <div class="space-y-6">
                <h2 class="font-display text-5xl text-[#C19D60]">Họp cơ quan</h2>
                <p class="text-gray-600 leading-relaxed">
                    Tổ chức hội nghị, hội thảo chuyên nghiệp tại không gian yên tĩnh, thoáng mát. Phòng họp được trang bị đầy đủ thiết bị hiện đại, phù hợp cho các cuộc họp từ 10-50 người.
                </p>
                <div class="flex gap-4 flex-wrap">
                    <a href="{{ route('contact') }}" 
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

{{-- Lễ kỷ niệm --}}
<section id="ky-niem" class="py-20 px-6 bg-[#FDFBF7]">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6 lg:order-1">
                <h2 class="font-display text-5xl text-[#C19D60]">Lễ kỷ niệm</h2>
                <p class="text-gray-600 leading-relaxed">
                    Tổ chức các buổi lễ kỷ niệm đáng nhớ trong không gian sang trọng và lãng mạn. Phù hợp cho tiệc cưới nhỏ, lễ kỷ niệm ngày cưới, hay các sự kiện gia đình quan trọng.
                </p>
                <div class="flex gap-4 flex-wrap">
                    <a href="{{ route('services.ky-niem') }}" 
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
                <img src="https://images.unsplash.com/photo-1519167758481-83f29da8c2a6?w=800&h=600&fit=crop" 
                     alt="Lễ kỷ niệm" 
                     class="w-full h-[500px] object-cover">
            </div>
        </div>
    </div>
</section>

{{-- Đại lịch sự kiện --}}
<section id="dai-lich" class="py-20 px-6 bg-white">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="relative overflow-hidden rounded shadow-xl">
                <img src="https://images.unsplash.com/photo-1505236858219-8359eb29e329?w=800&h=600&fit=crop" 
                     alt="Đại lịch sự kiện" 
                     class="w-full h-[500px] object-cover">
            </div>
            
            <div class="space-y-6">
                <h2 class="font-display text-5xl text-[#C19D60]">Đại lịch sự kiện</h2>
                <p class="text-gray-600 leading-relaxed">
                    Kết hợp giữa du lịch và tổ chức sự kiện với các chương trình tour tham quan Ba Vì, trải nghiệm văn hóa bản địa và các hoạt động outdoor thú vị. Hoàn hảo cho các chuyến du lịch team building hay gia đình.
                </p>
                <div class="flex gap-4 flex-wrap">
                    <a href="{{ route('contact') }}" 
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
