{{-- Room Card Component --}}
@props([
    'roomType',
    'showPrice' => false,
    'layout' => 'card'
])

<div class="bg-white rounded-lg shadow-lg overflow-hidden w-80 flex-shrink-0 transform hover:-translate-y-2 transition duration-300">
    <div class="relative h-64">
        <img 
            alt="{{ $roomType->name }}" 
            class="w-full h-full object-cover" 
            src="{{ $roomType->image ?? 'https://images.unsplash.com/photo-1631049307264-da0ec9d70304?q=80&w=600&auto=format&fit=crop' }}"
        />
    </div>
    <div class="p-6 bg-[#fdfbf7]">
        <h3 class="font-display text-xl text-primary mb-2">{{ $roomType->name }}</h3>
        <div class="flex gap-4 text-xs text-gray-600 mb-4">
            <span>
                <i class="fas fa-user mr-1"></i> {{ $roomType->max_capacity }} người
            </span>
            <span>
                <i class="fas fa-bed mr-1"></i> {{ $roomType->rooms_count ?? 'N/A' }} phòng
            </span>
            @if($showPrice && isset($roomType->base_price))
                <span>
                    <i class="fas fa-tag mr-1"></i> {{ number_format($roomType->base_price, 0, ',', '.') }}đ
                </span>
            @endif
        </div>
        <a href="{{ route('rooms.index') }}" class="text-sm uppercase tracking-widest text-[#B59C71] border-b border-[#B59C71] pb-1">Chi tiết phòng</a>
    </div>
</div>
