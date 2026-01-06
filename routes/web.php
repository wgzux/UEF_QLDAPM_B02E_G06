<?php

use Illuminate\Support\Facades\Route;

// Trang Home - The Wandering Rose
Route::get('/', function () {
    return view('pages.HomeDesktop');
    return view('pages.home');
});

// Trang About
Route::get('/about', function () {
    return view('pages.about');
});

// Trang Gallery - Hình ảnh & Video
Route::get('/gallery', function () {
    return view('pages.gallery');
});

// Trang Room & Suites - Hạng phòng
Route::get('/rooms', function () {
    return view('pages.rooms');
});

// Trang Room Detail - Chi tiết phòng
Route::get('/room/{slug}', function ($slug) {
    // Dữ liệu các phòng
    $rooms = [
        'forest-room' => [
            'name' => 'Forest room',
            'hero_image' => 'https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?q=80&w=2000&auto=format&fit=crop',
            'intro_images' => [
                'https://images.unsplash.com/photo-1631049307264-da0ec9d70304?q=80&w=600&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1590490360182-c33d57733427?q=80&w=600&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=600&auto=format&fit=crop',
            ],
            'description_image' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=800&auto=format&fit=crop',
            'guests' => '16 người lớn',
            'area' => '48 m²',
            'rooms' => '02 phòng',
            'beds' => '08 đệm 1m6 x 1m8',
        ],
        'family-room' => [
            'name' => 'Family Room',
            'hero_image' => 'https://images.unsplash.com/photo-1590490360182-c33d57733427?q=80&w=2000&auto=format&fit=crop',
            'intro_images' => [
                'https://images.unsplash.com/photo-1590490360182-c33d57733427?q=80&w=600&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?q=80&w=600&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1631049307264-da0ec9d70304?q=80&w=600&auto=format&fit=crop',
            ],
            'description_image' => 'https://images.unsplash.com/photo-1590490360182-c33d57733427?q=80&w=800&auto=format&fit=crop',
            'guests' => '04 người lớn',
            'area' => '25 m²',
            'rooms' => '04 phòng',
            'beds' => '02 giường 1m6 x 2m',
        ],
        'pink-rose-house' => [
            'name' => 'Pink Rose House',
            'hero_image' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?q=80&w=2000&auto=format&fit=crop',
            'intro_images' => [
                'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?q=80&w=600&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?q=80&w=600&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?q=80&w=600&auto=format&fit=crop',
            ],
            'description_image' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?q=80&w=800&auto=format&fit=crop',
            'guests' => '04 người lớn',
            'area' => '30 m²',
            'rooms' => '01 phòng',
            'beds' => '02 giường 1m8 x 2m',
        ],
        'white-rose-house' => [
            'name' => 'White Rose House',
            'hero_image' => 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?q=80&w=2000&auto=format&fit=crop',
            'intro_images' => [
                'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?q=80&w=600&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?q=80&w=600&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?q=80&w=600&auto=format&fit=crop',
            ],
            'description_image' => 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?q=80&w=800&auto=format&fit=crop',
            'guests' => '02 người lớn',
            'area' => '24 m²',
            'rooms' => '02 phòng',
            'beds' => '01 giường 1m8 x 2m',
        ],
        'red-rose-house' => [
            'name' => 'Red Rose House',
            'hero_image' => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?q=80&w=2000&auto=format&fit=crop',
            'intro_images' => [
                'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?q=80&w=600&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?q=80&w=600&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?q=80&w=600&auto=format&fit=crop',
            ],
            'description_image' => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?q=80&w=800&auto=format&fit=crop',
            'guests' => '02 người lớn',
            'area' => '13 m²',
            'rooms' => '02 phòng',
            'beds' => '01 giường 1m6 x 2m',
        ],
        'wandering-rose-villa' => [
            'name' => 'The Wandering Rose Villa',
            'hero_image' => 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=80&w=2000&auto=format&fit=crop',
            'intro_images' => [
                'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=80&w=600&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?q=80&w=600&auto=format&fit=crop',
                'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?q=80&w=600&auto=format&fit=crop',
            ],
            'description_image' => 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=80&w=800&auto=format&fit=crop',
            'guests' => '04 người lớn',
            'area' => 'Tầng 1: 100 m² Tầng 2: 35 m²',
            'rooms' => '02 phòng ngủ',
            'beds' => '2 giường 1m8 x 2m',
        ],
    ];
    
    // Lấy dữ liệu phòng theo slug, nếu không có thì dùng forest-room
    $room = $rooms[$slug] ?? $rooms['forest-room'];
    
    return view('pages.room-detail', [
        'slug' => $slug,
        'room' => $room,
        'allRooms' => $rooms,
    ]);
});

Route::get('/fragnews', function () {
    return view('pages.FragNews');
});

Route::get('/addcart', function () {
    return view('pages.Addcart');
});
Route::get('/checkout', function () {
    return view('pages.CheckOut');
});
Route::get('/payment', function () {
    return view('pages.Payment');
});
Route::get('/confirm', function () {
    return view('pages.Confirm');
});
Route::get('/bookingdetails', function () {
    return view('pages.bookingdetails');
});
Route::get('/booking', function () {
    return view('pages.booking');
});