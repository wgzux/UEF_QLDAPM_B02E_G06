@extends('layouts.app')

@section('title', 'Tiệc Cưới Nhỏ - The Wandering Rose')

@section('content')

{{-- Hero Header --}}
<section class="relative h-[80vh] flex items-center justify-center overflow-hidden">
    <img src="https://images.unsplash.com/photo-1519741497674-611481863552?w=1600&h=1000&fit=crop" 
         alt="Small wedding ceremony" 
         class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/30 to-black/30"></div>
    <div class="relative z-10 text-center text-white">
        <h1 class="font-display text-5xl md:text-7xl mb-8 font-light italic">Tiệc cưới nhỏ</h1>
        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 border border-white/60 hover:border-white px-8 py-3 tracking-widest text-xs uppercase transition-all duration-300 group">
            ĐẶT LỊCH 
            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
        </a>
    </div>
</section>

{{-- Giới thiệu --}}
<section class="max-w-7xl mx-auto px-6 py-20">
    <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="font-display text-4xl text-[#C19D60] mb-6">Giới thiệu</h2>
        <p class="text-gray-600 leading-relaxed font-light">
            Tổ chức tiệc cưới nhỏ sang trọng và lãng mạn trong không gian yên tĩnh, riêng tư. Phù hợp cho các đôi uyên ương muốn có một đám cưới ấm cúng bên gia đình và bạn bè thân thiết, trong khung cảnh thiên nhiên thơ mộng của Ba Vì.
        </p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <img src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?w=800&h=600&fit=crop" 
             alt="Wedding setup" 
             class="w-full aspect-[4/3] object-cover rounded shadow-lg">
        <img src="https://images.unsplash.com/photo-1606800052052-a08af7148866?w=800&h=600&fit=crop" 
             alt="Wedding chairs" 
             class="w-full aspect-[4/3] object-cover rounded shadow-lg">
    </div>
</section>

{{-- Chi tiết & Form đặt lịch --}}
<section class="bg-[#FDFBF7] py-20 px-6">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
        <div>
            <img src="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?w=900&h=700&fit=crop" 
                 alt="Wedding decoration" 
                 class="w-full h-auto rounded shadow-lg mb-8">
            <ul class="space-y-3 text-gray-600 font-light text-sm italic list-disc list-inside">
                <li>Không gian lãng mạn với view thiên nhiên đẹp</li>
                <li>Trang trí theo phong cách riêng của đôi uyên ương</li>
                <li>Dịch vụ photography và videography chuyên nghiệp</li>
                <li>Thực đơn đa dạng, tùy chỉnh theo sở thích</li>
                <li>Hỗ trợ tổ chức lễ cưới và tiệc chiêu đãi</li>
                <li>Dịch vụ MC và âm thanh, ánh sáng cao cấp</li>
            </ul>
        </div>
        
        <div class="bg-white p-8 shadow-lg rounded">
            <h3 class="font-display text-4xl text-[#C19D60] mb-8 italic">Đặt lịch sự kiện</h3>
            <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                @csrf
                <div class="space-y-1">
                    <label class="text-xs uppercase tracking-wider text-gray-500 font-medium">Họ và tên *</label>
                    <input type="text" name="name" required
                           class="w-full border-gray-200 bg-transparent py-3 px-4 focus:ring-[#C19D60] focus:border-[#C19D60] rounded" 
                           placeholder="Nhập họ và tên">
                </div>
                
                <div class="space-y-1">
                    <label class="text-xs uppercase tracking-wider text-gray-500 font-medium">Email *</label>
                    <input type="email" name="email" required
                           class="w-full border-gray-200 bg-transparent py-3 px-4 focus:ring-[#C19D60] focus:border-[#C19D60] rounded" 
                           placeholder="Nhập địa chỉ email">
                </div>
                
                <div class="space-y-1">
                    <label class="text-xs uppercase tracking-wider text-gray-500 font-medium">Số điện thoại *</label>
                    <input type="tel" name="phone" required
                           class="w-full border-gray-200 bg-transparent py-3 px-4 focus:ring-[#C19D60] focus:border-[#C19D60] rounded" 
                           placeholder="Nhập số điện thoại">
                </div>
                
                <div class="space-y-1">
                    <label class="text-xs uppercase tracking-wider text-gray-500 font-medium">Chọn dịch vụ *</label>
                    <select name="service" required
                            class="w-full border-gray-200 bg-transparent py-3 px-4 focus:ring-[#C19D60] focus:border-[#C19D60] rounded appearance-none">
                        <option>Tổ chức sinh nhật</option>
                        <option>Teambuilding</option>
                        <option value="tiec-cuoi-nho">Tiệc cưới nhỏ</option>
                        <option>Tiệc kỷ niệm</option>
                    </select>
                </div>
                
                <div class="space-y-1">
                    <label class="text-xs uppercase tracking-wider text-gray-500 font-medium">Tin nhắn (nếu có)</label>
                    <textarea name="message" rows="4"
                              class="w-full border-gray-200 bg-transparent py-3 px-4 focus:ring-[#C19D60] focus:border-[#C19D60] rounded resize-none" 
                              placeholder="Nhập tin nhắn"></textarea>
                </div>
                
                <button type="submit" 
                        class="bg-[#C19D60] hover:bg-[#a88b68] text-white w-full py-4 uppercase tracking-widest text-xs font-semibold transition-all rounded">
                    GỬI TIN NHẮN ĐẶT LỊCH
                </button>
            </form>
        </div>
    </div>
</section>

@endsection
