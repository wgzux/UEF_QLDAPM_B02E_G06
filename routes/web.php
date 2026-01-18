<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return view('pages.HomeDesktop');
});
Route::get('/2', function () {
    return redirect()->route('contact');
});

// canonical contact route
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

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
    return view('pages.BookingDetails');
});
Route::get('/booking', function () {
    return view('pages.Booking');
});

Route::post('/booking', [BookingController::class, 'store']);

// Additional routes for other views
Route::get('/home', function () {
    return view('pages.home');
});
Route::get('/home-mobile', function () {
    return view('pages.home');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/rooms', function () {
    return view('pages.rooms');
});
Route::get('/room-detail', function () {
    return view('pages.room-detail');
});
Route::get('/gallery', function () {
    return view('pages.gallery');
});

Route::get('/KhuVillaDesktop', function () {
    return view('pages.KhuVillaDesktop');
});
Route::get('/KhuRoseHouseDesktop', function () {
    return view('pages.KhuRoseHouseDesktop');
});
Route::get('/KhuWoodenHouseDesktop', function () {
    return view('pages.KhuWoodenHouseDesktop');
});
Route::get('/TiecCuoiNhoDesktop', function () {
    return view('pages.TiecCuoiNhoDesktop');
});
Route::get('/TourBavi', function () {
    return view('pages.TourBavi');
});
Route::get('/FamilyRoomDesktop', function () {
    return view('pages.FamilyRoomDesktop');
});
Route::get('/DuluxeRoomDesktop', function () {
    return view('pages.DuluxeRoomDesktop');
});
Route::get('/RedRoseHouseDesktop', function () {
    return view('pages.RedRoseHouseDesktop');
});