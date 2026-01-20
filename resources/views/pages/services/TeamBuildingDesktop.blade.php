@extends('layouts.app')

@section('title', 'Teambuilding - The Wandering Rose')

@section('content')

{{-- Hero Header --}}
<section class="relative h-[80vh] flex items-center justify-center overflow-hidden">
    <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?w=1600&h=1000&fit=crop" 
         alt="Teambuilding activities" 
         class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/30 to-black/30"></div>
    <div class="relative z-10 text-center text-white">
        <h1 class="font-display text-5xl md:text-7xl mb-8 font-light italic">Teambuilding</h1>
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
            Tổ chức hoạt động teambuilding tại khu nghỉ dưỡng với không gian xanh mát, nhiều hoạt động ngoài trời hấp dẫn. Chương trình được thiết kế linh hoạt phù hợp với nhu cầu của từng doanh nghiệp, giúp tăng cường tinh thần đồng đội và kết nối giữa các thành viên.
        </p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <img src="https://images.unsplash.com/photo-1528605248644-14dd04022da1?w=800&h=600&fit=crop" 
             alt="Team activities" 
             class="w-full aspect-[4/3] object-cover rounded shadow-lg">
        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=800&h=600&fit=crop" 
             alt="Outdoor teambuilding" 
             class="w-full aspect-[4/3] object-cover rounded shadow-lg">
    </div>
</section>

{{-- Chi tiết & Form đặt lịch --}}
<section class="bg-[#FDFBF7] py-20 px-6">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
        <div>
            <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?w=900&h=700&fit=crop" 
                 alt="Teambuilding event" 
                 class="w-full h-auto rounded shadow-lg mb-8">
            <ul class="space-y-3 text-gray-600 font-light text-sm italic list-disc list-inside">
                <li>Thiết kế chương trình theo yêu cầu riêng</li>
                <li>Hoạt động ngoài trời đa dạng và sáng tạo</li>
                <li>Phòng họp hiện đại, đầy đủ tiện nghi</li>
                <li>Dịch vụ ăn uống trọn gói, buffet cao cấp</li>
                <li>Hỗ trợ MC và âm thanh chuyên nghiệp</li>
                <li>Chương trình gắn kết và đào tạo kỹ năng</li>
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
                        <option value="teambuilding">Teambuilding</option>
                        <option>Tiệc cưới nhỏ</option>
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
