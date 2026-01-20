@extends('layouts.app')

@section('title', $service->name . ' - The Wandering Rose')

@section('content')

{{-- Hero Header --}}
<section class="relative h-[80vh] flex items-center justify-center overflow-hidden">
    <img src="{{ $service->image ?? 'https://images.unsplash.com/photo-1519741497674-611481863552?w=1600&h=1000&fit=crop' }}" 
         alt="{{ $service->name }}" 
         class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-black/30 to-black/30"></div>
    <div class="relative z-10 text-center text-white">
        <h1 class="font-display text-5xl md:text-7xl mb-8 font-light italic">{{ $service->name }}</h1>
        <a href="#booking-form" class="inline-flex items-center gap-2 border border-white/60 hover:border-white px-8 py-3 tracking-widest text-xs uppercase transition-all duration-300 group">
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
        <div class="text-gray-600 leading-relaxed font-light space-y-4">
            {!! $service->content ?? $service->description !!}
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        {{-- Image 1 --}}
        <img src="{{ $service->image }}" 
             alt="{{ $service->name }} 1" 
             class="w-full aspect-[4/3] object-cover rounded shadow-lg">
        {{-- Image 2 (Placeholder or varied if available, standardizing for now) --}}
        <img src="https://images.unsplash.com/photo-1606800052052-a08af7148866?w=800&h=600&fit=crop" 
             alt="{{ $service->name }} Detail" 
             class="w-full aspect-[4/3] object-cover rounded shadow-lg">
    </div>
</section>

{{-- Chi tiết & Form đặt lịch --}}
<section class="bg-[#FDFBF7] py-20 px-6" id="booking-form">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
        {{-- Features & Details --}}
        <div>
            <img src="{{ $service->image }}" 
                 alt="{{ $service->name }} Feature" 
                 class="w-full h-auto rounded shadow-lg mb-8 aspect-video object-cover">
            
            <h3 class="font-display text-2xl text-[#C19D60] mb-6">Dịch vụ bao gồm:</h3>
            
            @if(is_array($service->features))
            <ul class="space-y-3 text-gray-600 font-light text-sm italic list-disc list-inside">
                @foreach($service->features as $feature)
                <li>{{ $feature }}</li>
                @endforeach
            </ul>
            @endif

            @if($service->price > 0)
            <div class="mt-8 pt-8 border-t border-gray-200">
                <p class="text-gray-500 text-xs uppercase tracking-widest mb-1">Giá tham khảo</p>
                <p class="text-3xl font-display text-[#C19D60]">
                    {{ number_format($service->price) }} ₫
                    <span class="text-sm text-gray-400">/ {{ $service->unit }}</span>
                </p>
                @if($service->price_note)
                <p class="text-sm text-gray-500 italic mt-2">(* {{ $service->price_note }})</p>
                @endif
            </div>
            @endif
        </div>
        
        {{-- Booking Form --}}
        <div class="bg-white p-8 shadow-lg rounded sticky top-24">
            <h3 class="font-display text-4xl text-[#C19D60] mb-8 italic">Đặt lịch sự kiện</h3>
            <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                @csrf
                <input type="hidden" name="service_slug" value="{{ $service->slug }}">
                
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
                    <label class="text-xs uppercase tracking-wider text-gray-500 font-medium">Dịch vụ đang chọn</label>
                    <input type="text" value="{{ $service->name }}" readonly
                           class="w-full border-gray-200 bg-gray-50 py-3 px-4 text-gray-600 rounded cursor-not-allowed">
                    <input type="hidden" name="service" value="{{ $service->name }}">
                </div>
                
                <div class="space-y-1">
                    <label class="text-xs uppercase tracking-wider text-gray-500 font-medium">Tin nhắn (nếu có)</label>
                    <textarea name="message" rows="4"
                              class="w-full border-gray-200 bg-transparent py-3 px-4 focus:ring-[#C19D60] focus:border-[#C19D60] rounded resize-none" 
                              placeholder="Nhập tin nhắn (Ngày dự kiến, số lượng khách...)"></textarea>
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
