<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes - The Wandering Rose Villa
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rooms & Zones
Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
Route::get('/rooms/wooden', [RoomController::class, 'wooden'])->name('rooms.wooden');
Route::get('/rooms/rose', [RoomController::class, 'rose'])->name('rooms.rose');
Route::get('/rooms/villa', [RoomController::class, 'villa'])->name('rooms.villa');
Route::get('/room/{id}', [RoomController::class, 'show'])->name('rooms.show');

// Services & Events
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/servicesandevents', [ServiceController::class, 'index'])->name('services');
Route::get('/services/sinh-nhat', [ServiceController::class, 'sinhNhat'])->name('services.sinh-nhat');
Route::get('/services/teambuilding', [ServiceController::class, 'teamBuilding'])->name('services.teambuilding');
Route::get('/services/tiec-cuoi', [ServiceController::class, 'tiecCuoi'])->name('services.tiec-cuoi');
Route::get('/services/ky-niem', [ServiceController::class, 'kyNiem'])->name('services.ky-niem');


// Gallery
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

// Booking Flow
Route::get('/booking', [BookingController::class, 'create'])->name('booking.create');
Route::post('/booking/select-rooms', [BookingController::class, 'selectRooms'])->name('booking.select-rooms'); // Step 2
Route::post('/booking/confirm-details', [BookingController::class, 'confirmDetails'])->name('booking.confirm-details'); // Step 3
Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store'); // Finalize
Route::get('/booking/{id}/payment', [BookingController::class, 'payment'])->name('booking.payment');
Route::post('/booking/{id}/payment', [BookingController::class, 'processPayment'])->name('booking.process-payment');
Route::get('/booking/{id}/confirm', [BookingController::class, 'confirm'])->name('booking.confirm'); // Success Page

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Static Pages
Route::view('/about', 'pages.about')->name('about');
Route::view('/fragnews', 'pages.FragNews')->name('fragnews');

// Experiences & Tours
Route::get('/experiences', [App\Http\Controllers\ExperienceController::class, 'index'])->name('experiences');
Route::get('/experiences/tour-bavi', [App\Http\Controllers\ExperienceController::class, 'tourBavi'])->name('experiences.tour-bavi');
Route::get('/experiences/ao-vua', [App\Http\Controllers\ExperienceController::class, 'aoVua'])->name('experiences.ao-vua');
Route::get('/experiences/khoang-xanh', [App\Http\Controllers\ExperienceController::class, 'khoangXanh'])->name('experiences.khoang-xanh');
Route::get('/experiences/ban-dia', [App\Http\Controllers\ExperienceController::class, 'banDia'])->name('experiences.ban-dia');


// Legacy Routes (now redirect to zone pages)
Route::get('/HomeDesktop', function() {
    return redirect()->route('home');
})->name('home.desktop');

Route::get('/KhuWoodenHouseDesktop', function() {
    return redirect()->route('rooms.wooden');
});

Route::get('/KhuRoseHouseDesktop', function() {
    return redirect()->route('rooms.rose');
});

Route::get('/KhuVillaDesktop', function() {
    return redirect()->route('rooms.villa');
});

Route::get('/FamilyRoomDesktop', function() {
    return redirect()->route('rooms.index');
});

Route::get('/DuluxeRoomDesktop', function() {
    return redirect()->route('rooms.index');
});