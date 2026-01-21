{{-- Benefit/Amenity Card Component --}}
@props([
    'icon',
    'title',
    'description'
])

<div class="bg-white/95 p-8 text-center rounded shadow-lg backdrop-blur-sm transform hover:-translate-y-1 transition duration-300">
    <span class="material-icons-outlined text-4xl text-primary mb-4">{{ $icon }}</span>
    <h3 class="font-display text-xl text-primary mb-2">{{ $title }}</h3>
    <p class="text-sm text-gray-500">{{ $description }}</p>
</div>
