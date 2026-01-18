{{-- Component Button - Ví dụ về cách tạo component tái sử dụng --}}

{{-- 
    Cách sử dụng:
    
    1. Button đơn giản:
    <x-button>Đặt phòng</x-button>
    
    2. Button với thuộc tính:
    <x-button type="primary" href="/booking">Đặt phòng ngay</x-button>
    
    3. Button outline:
    <x-button type="outline">Xem thêm</x-button>
--}}

@props([
    'type' => 'primary',  // primary, outline, secondary
    'href' => null,       // Link nếu là thẻ <a>
])

@php
    $classes = match($type) {
        'primary' => 'bg-primary text-white border border-primary hover:bg-primary-dark',
        'outline' => 'bg-transparent text-primary border border-primary hover:bg-primary hover:text-white',
        'secondary' => 'bg-gray-600 text-white border border-gray-600 hover:bg-gray-700',
        default => 'bg-primary text-white border border-primary hover:bg-primary-dark',
    };
    
    $baseClasses = 'inline-flex items-center px-6 py-2 text-sm uppercase tracking-wider transition duration-300 rounded';
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $baseClasses . ' ' . $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['class' => $baseClasses . ' ' . $classes]) }}>
        {{ $slot }}
    </button>
@endif
