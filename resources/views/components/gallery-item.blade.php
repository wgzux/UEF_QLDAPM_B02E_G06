{{-- Gallery Item Component --}}
@props([
    'item',
    'size' => 'md'
])

@php
    $sizeClasses = [
        'sm' => 'aspect-[4/5]',
        'md' => 'aspect-[3/4]',
        'lg' => 'aspect-[16/9]'
    ];
    $aspectRatio = $sizeClasses[$size] ?? $sizeClasses['md'];
@endphp

<div class="group flex flex-col">
    <div class="relative overflow-hidden {{ $aspectRatio }} mb-6">
        @if($item->type === 'video')
            <video 
                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                controls
            >
                <source src="{{ $item->file_path }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        @else
            <img 
                alt="{{ $item->title }}" 
                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" 
                src="{{ $item->file_path }}"
            />
        @endif
        
        @if($item->is_featured)
            <div class="absolute top-4 right-4 bg-primary text-white text-xs font-bold px-3 py-1 rounded">
                NỔI BẬT
            </div>
        @endif
    </div>
    
    @if($item->title || $item->description)
        <div class="text-sm">
            @if($item->category)
                <span class="text-xs font-light tracking-wider uppercase opacity-80 mb-2 block">
                    {{ $item->category }}
                </span>
            @endif
            @if($item->title)
                <h3 class="text-lg font-display mb-2">{{ $item->title }}</h3>
            @endif
            @if($item->description)
                <p class="text-gray-600">{{ $item->description }}</p>
            @endif
        </div>
    @endif
</div>
