{{-- Component Card - Dùng để hiển thị phòng, tin tức, etc. --}}

{{-- 
    Cách sử dụng:
    
    <x-card 
        image="https://example.com/image.jpg"
        title="Deluxe Room"
        description="Phòng sang trọng view núi"
        price="2.500.000đ/đêm"
        badge="Hot"
        href="/rooms/deluxe"
    />
--}}

@props([
    'image' => null,
    'title' => '',
    'description' => '',
    'price' => null,
    'badge' => null,
    'href' => '#',
])

<div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition duration-300">
    {{-- Image --}}
    @if($image)
        <div class="relative h-64">
            <img alt="{{ $title }}" class="w-full h-full object-cover" src="{{ $image }}"/>
            
            {{-- Badge --}}
            @if($badge)
                <div class="absolute top-4 right-4 bg-primary text-white px-3 py-1 rounded text-xs font-bold">
                    {{ $badge }}
                </div>
            @endif
        </div>
    @endif
    
    {{-- Content --}}
    <div class="p-6">
        {{-- Title --}}
        @if($title)
            <h3 class="font-display text-2xl text-primary mb-2">{{ $title }}</h3>
        @endif
        
        {{-- Description --}}
        @if($description)
            <p class="text-sm text-gray-600 mb-4">{{ $description }}</p>
        @endif
        
        {{-- Price & Button --}}
        <div class="flex justify-between items-center">
            @if($price)
                <span class="text-primary font-bold text-lg">{{ $price }}</span>
            @endif
            
            <a class="text-sm text-primary border border-primary px-4 py-1 rounded hover:bg-primary hover:text-white transition" href="{{ $href }}">
                Chi tiết
            </a>
        </div>
        
        {{-- Custom Slot --}}
        @if($slot->isNotEmpty())
            <div class="mt-4">
                {{ $slot }}
            </div>
        @endif
    </div>
</div>
