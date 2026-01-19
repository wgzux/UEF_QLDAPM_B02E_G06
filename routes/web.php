<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AvailabilityController;

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

// experiences & tours (Tour) page
Route::get('/tours', function () {
    return view('pages.experiencesandTours');
})->name('tours');

// services & events page
Route::get('/services', function () {
    return view('pages.servicesandevents');
})->name('services');

Route::get('/addcart', function () {
    return view('pages.Addcart');
});
Route::get('/checkout', function () {
    return view('pages.CheckOut');
});
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Admin\RoomController as AdminRoomController;
use Illuminate\Http\Request;
use App\Models\RoomType;

Route::get('/payment', [PaymentController::class, 'index']);
Route::post('/payment', [PaymentController::class, 'store']);
Route::get('/bookingconfirm', function () {
    return view('pages.BookingConfirm');
});
Route::get('/confirm', function () {
    return view('pages.Confirm');
});
Route::get('/bookingdetails', function (Request $request) {
    $roomTypes = RoomType::withCount(['rooms as total_rooms' => function ($q) {
        $q->where('status', 'Active');
    }])->get();

    $selected = null;
    if ($request->has('room_type')) {
        $selected = RoomType::find($request->input('room_type'));
    }

    return view('pages.BookingDetails', compact('roomTypes', 'selected'));
});
Route::get('/booking', function () {
    return view('pages.Booking');
});

Route::post('/booking', [BookingController::class, 'store']);

// availability check (returns JSON)
Route::get('/availability', [AvailabilityController::class, 'check']);
Route::get('/availability/range', [AvailabilityController::class, 'range']);

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

// Admin routes (protected by simple HTTP Basic using ADMIN_USER/ADMIN_PASSWORD)
Route::middleware(\App\Http\Middleware\AdminBasicAuth::class)->group(function () {
    Route::get('/admin/rooms', [AdminRoomController::class, 'index']);
    Route::get('/admin/rooms/create', [AdminRoomController::class, 'create']);
    Route::post('/admin/rooms', [AdminRoomController::class, 'store']);
    Route::get('/admin/rooms/{id}/edit', [AdminRoomController::class, 'edit']);
    Route::put('/admin/rooms/{id}', [AdminRoomController::class, 'update']);
    Route::delete('/admin/rooms/{id}', [AdminRoomController::class, 'destroy']);
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