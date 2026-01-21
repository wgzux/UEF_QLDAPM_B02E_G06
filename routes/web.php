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
Route::match(['get', 'post'], '/booking/select-rooms', [BookingController::class, 'selectRooms'])->name('booking.select-rooms'); // Step 2
Route::post('/booking/confirm-details', [BookingController::class, 'confirmDetails'])->name('booking.confirm-details'); // Step 3
Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store'); // Finalize
Route::get('/booking/{id}/payment', [BookingController::class, 'payment'])->name('booking.payment');
Route::post('/booking/{id}/payment', [BookingController::class, 'processPayment'])->name('booking.process-payment');
Route::get('/booking/{id}/confirm', [BookingController::class, 'confirm'])->name('booking.confirm'); // Success Page

// Booking Tracking (Public)
Route::get('/tracking', [App\Http\Controllers\TrackingController::class, 'index'])->name('tracking.index');
Route::post('/tracking', [App\Http\Controllers\TrackingController::class, 'search'])->name('tracking.search');

// Customer Bookings (Authenticated)
Route::middleware('auth')->group(function () {
    Route::get('/my-bookings', [App\Http\Controllers\CustomerController::class, 'myBookings'])->name('customer.bookings');
    Route::get('/my-bookings/{id}', [App\Http\Controllers\CustomerController::class, 'showBooking'])->name('customer.booking.show');
});

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

// ===== ADMIN ROUTES =====
// Admin Auth Routes (No middleware - public access)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [App\Http\Controllers\Admin\AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [App\Http\Controllers\Admin\AuthController::class, 'login']);
});

// Protected Admin Routes (Requires authentication + admin role)
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::post('logout', [App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');
    
    // Dashboard
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/', function() {
        return redirect()->route('admin.dashboard');
    });
    
    // Bookings Management
    Route::get('bookings', [App\Http\Controllers\Admin\BookingController::class, 'index'])->name('bookings.index');
    Route::get('bookings/{id}', [App\Http\Controllers\Admin\BookingController::class, 'show'])->name('bookings.show');
    Route::post('bookings/{id}/status', [App\Http\Controllers\Admin\BookingController::class, 'updateStatus'])->name('bookings.updateStatus');
    
    // Room Management
    Route::get('rooms', [App\Http\Controllers\Admin\AdminRoomController::class, 'index'])->name('rooms.index');
    Route::get('rooms/{id}/edit', [App\Http\Controllers\Admin\AdminRoomController::class, 'edit'])->name('rooms.edit');
    Route::put('rooms/{id}', [App\Http\Controllers\Admin\AdminRoomController::class, 'update'])->name('rooms.update');
    Route::patch('rooms/{id}/toggle-status', [App\Http\Controllers\Admin\AdminRoomController::class, 'toggleStatus'])->name('rooms.toggleStatus');
    
    // Service Management
    Route::get('services', [App\Http\Controllers\Admin\AdminServiceController::class, 'index'])->name('services.index');
    Route::get('services/{id}/edit', [App\Http\Controllers\Admin\AdminServiceController::class, 'edit'])->name('services.edit');
    Route::put('services/{id}', [App\Http\Controllers\Admin\AdminServiceController::class, 'update'])->name('services.update');
    Route::patch('services/{id}/toggle-status', [App\Http\Controllers\Admin\AdminServiceController::class, 'toggleStatus'])->name('services.toggleStatus');
    
    // Settings
    Route::get('settings', [App\Http\Controllers\Admin\AdminSettingController::class, 'index'])->name('settings.index');
    Route::put('settings', [App\Http\Controllers\Admin\AdminSettingController::class, 'update'])->name('settings.update');
});