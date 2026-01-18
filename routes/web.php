<?php

use Illuminate\Support\Facades\Route;

// 1. Trang chủ chính (Cái trang có hình biệt thự đẹp đẹp)
Route::get('/', function () {
    return view('welcome'); // Hoặc tên file blade trang chủ của bạn
});

// 2. Trang dự án mới (Cái trang Selection bạn vừa code)
Route::get('/du-an', function () {
    return view('pages.home');
});
// Đường dẫn đến trang chi tiết Khu Villa
Route::get('/chi-tiet-villa', function () {
    return view('pages.khu-villa');
});
// Đường dẫn đến trang chi tiết Rose House
Route::get('/chi-tiet-rose-house', function () {
    return view('pages.khu-rose-house');
});
// Đường dẫn đến trang chi tiết Wooden House
Route::get('/chi-tiet-wooden-house', function () {
    return view('pages.khu-wooden-house');
});
// Đường dẫn đến trang Tiệc Cưới Nhỏ
Route::get('/chi-tiet-tiec-cuoi-nho', function () {
    return view('pages.tiec-cuoi-nho');
});
// Đường dẫn đến trang Tiệc Cưới Lớn
Route::get('/chi-tiet-tiec-cuoi-lon', function () {
    return view('pages.tiec-cuoi-lon');
});
// Đường dẫn đến trang Family Room
Route::get('/chi-tiet-family-room', function () {
    return view('pages.family-room');
});
// Đường dẫn đến trang Deluxe Room
Route::get('/chi-tiet-deluxe-room', function () {
    return view('pages.deluxe-room');
});
// Đường dẫn đến trang Red Rose House
Route::get('/chi-tiet-red-rose-house', function () {
    return view('pages.red-rose-house');
});