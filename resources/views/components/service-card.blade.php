{{-- Service Card Component --}}
@props([
    'service',
    'imageUrl' => null,
    'featured' => false
])

<div class="relative group overflow-hidden rounded-lg h-96 cursor-pointer">
    <img 
        alt="{{ $service->name }}" 
        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" 
        src="{{ $imageUrl ?? $service->image ?? 'https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=2069&auto=format&fit=crop' }}"
    />
    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/60 transition-all duration-300 flex flex-col justify-end p-6">
        @if($featured)
            <span class="absolute top-4 left-4 bg-primary text-white text-xs font-bold px-3 py-1 rounded">
                NỔI BẬT
            </span>
        @endif
        <h3 class="font-display text-2xl text-white mb-2">{{ $service->name }}</h3>
        @if($service->description)
            <p class="text-white/90 text-sm mb-4">{{ Str::limit($service->description, 80) }}</p>
        @endif
        @if(isset($service->price) && $service->price > 0)
            <p class="text-white text-lg font-semibold mb-2">
                {{ number_format($service->price, 0, ',', '.') }}đ / {{ $service->unit ?? 'lần' }}
            </p>
        @endif
        <a 
            class="text-white text-sm border-b border-white pb-1 inline-block w-fit" 
            href="{{ route('services') }}"
        >
            Xem chi tiết
        </a>
    </div>
</div>
