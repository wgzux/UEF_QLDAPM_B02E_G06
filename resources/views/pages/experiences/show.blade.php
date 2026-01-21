@extends('layouts.app')

@section('title', $experience->name . ' - The Wandering Rose')

@section('content')

{{-- Hero Header --}}
<section class="relative h-[80vh] flex items-center justify-center overflow-hidden">
    <img src="{{ $experience->image ?? 'https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=1600' }}" 
         alt="{{ $experience->name }}" 
         class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/30 to-black/30"></div>
    <div class="relative z-10 text-center text-white">
        <h1 class="font-display text-5xl md:text-7xl mb-8 font-light italic">{{ $experience->name }}</h1>
        
        <div class="flex justify-center gap-6 mb-8 text-sm uppercase tracking-widest font-medium">
            @if($experience->duration)
            <div class="flex items-center gap-2">
                <span class="material-icons text-[#C19D60]">schedule</span>
                {{ $experience->duration }}
            </div>
            @endif
            
            @if($experience->location)
            <div class="flex items-center gap-2">
                <span class="material-icons text-[#C19D60]">place</span>
                {{ $experience->location }}
            </div>
            @endif
        </div>

        <a href="#booking-form" class="inline-flex items-center gap-2 border border-white/60 hover:border-white px-8 py-3 tracking-widest text-xs uppercase transition-all duration-300 group">
            ĐẶT TOUR NGAY
            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
        </a>
    </div>
</section>

{{-- Giới thiệu --}}
<section class="max-w-7xl mx-auto px-6 py-20">
    <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="font-display text-4xl text-[#C19D60] mb-6">Khám phá</h2>
        <div class="text-gray-600 leading-relaxed font-light space-y-4">
            {!! $experience->content ?? $experience->description !!}
        </div>
    </div>
    
    {{-- Highlight Images --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <img src="{{ $experience->image }}" 
             alt="{{ $experience->name }} Highlight 1" 
             class="w-full aspect-[4/3] object-cover rounded shadow-lg transform hover:scale-[1.02] transition-transform duration-500">
        <img src="https://images.unsplash.com/photo-1504609813442-a8924e83f76e?w=800&fit=crop" 
             alt="{{ $experience->name }} Highlight 2" 
             class="w-full aspect-[4/3] object-cover rounded shadow-lg transform hover:scale-[1.02] transition-transform duration-500">
    </div>
</section>

{{-- Chi tiết & Form đặt lịch --}}
<section class="bg-[#FDFBF7] py-20 px-6" id="booking-form">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
        {{-- Itinerary & Features --}}
        <div>
            <h3 class="font-display text-3xl text-[#C19D60] mb-8">Điểm nổi bật của hành trình</h3>
            
            <div class="bg-white p-8 rounded shadow-sm border border-orange-100 mb-8">
                @if(is_array($experience->features))
                <ul class="space-y-4">
                    @foreach($experience->features as $feature)
                    <li class="flex items-start gap-4">
                        <span class="material-icons text-[#C19D60] mt-0.5">check_circle_outline</span>
                        <span class="text-gray-600 font-light">{{ $feature }}</span>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div class="flex items-center justify-between p-6 bg-[#C19D60]/10 rounded border border-[#C19D60]/20">
                <div>
                    <p class="text-xs uppercase tracking-widest text-gray-500 mb-1">Giá tour tham khảo</p>
                    <p class="text-2xl font-display text-[#C19D60] font-bold">{{ $experience->price_note ?? 'Liên hệ' }}</p>
                </div>
                <div class="text-right">
                    <p class="text-xs uppercase tracking-widest text-gray-500 mb-1">Thời lượng</p>
                    <p class="text-lg font-medium text-gray-700">{{ $experience->duration ?? 'Trong ngày' }}</p>
                </div>
            </div>
        </div>
        
        {{-- Booking Form --}}
        <div class="bg-white p-8 shadow-lg rounded sticky top-24">
            <h3 class="font-display text-4xl text-[#C19D60] mb-8 italic">Đăng ký trải nghiệm</h3>
            <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                @csrf
                <input type="hidden" name="type" value="experience">
                <input type="hidden" name="experience_slug" value="{{ $experience->slug }}">
                
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
                    <label class="text-xs uppercase tracking-wider text-gray-500 font-medium">Tour / Trải nghiệm</label>
                    <input type="text" value="{{ $experience->name }}" readonly
                           class="w-full border-gray-200 bg-gray-50 py-3 px-4 text-gray-600 rounded cursor-not-allowed">
                    <input type="hidden" name="service" value="{{ $experience->name }}">
                </div>
                
                <div class="space-y-1">
                    <label class="text-xs uppercase tracking-wider text-gray-500 font-medium">Ghi chú thêm</label>
                    <textarea name="message" rows="4"
                              class="w-full border-gray-200 bg-transparent py-3 px-4 focus:ring-[#C19D60] focus:border-[#C19D60] rounded resize-none" 
                              placeholder="Số lượng người, ngày khởi hành mong muốn..."></textarea>
                </div>
                
                <button type="submit" 
                        class="bg-[#C19D60] hover:bg-[#a88b68] text-white w-full py-4 uppercase tracking-widest text-xs font-semibold transition-all rounded">
                    ĐĂT TOUR NGAY
                </button>
            </form>
        </div>
    </div>
</section>

@endsection
