<?php

namespace Tests\Feature;

use App\Models\Booking;
use App\Models\BookingGuest;
use App\Models\RoomType;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookingAvailabilityTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        // Seed RoomType
        $this->roomType = RoomType::create([
            'name' => 'Test Room',
            'slug' => 'test-room',
            'description' => 'Test',
            'base_price' => 1000000,
            'max_capacity' => 2,
            'number_of_rooms' => 2, // Total 2 rooms available
            'is_active' => true,
        ]);
    }

    public function test_select_rooms_calculates_availability_correctly()
    {
        // 1. Create a confirmed booking for 1 room
        Booking::create([
            'check_in' => now()->addDays(1),
            'check_out' => now()->addDays(3),
            'customer_name' => 'Existing Guest',
            'customer_email' => 'guest@example.com',
            'customer_phone' => '0123456789',
            'status' => 'confirmed',
            'total_price' => 2000000,
            'room_price' => 2000000,
            'service_price' => 0,
            'room_id' => null,
            'adults' => 2,
            'children' => 0
        ])->roomTypes()->attach($this->roomType->id, ['quantity' => 1, 'price_per_night' => 1000000, 'subtotal' => 2000000]);

        // 2. Request select rooms for overlapping dates
        $checkIn = now()->addDays(1)->format('Y-m-d');
        $checkOut = now()->addDays(2)->format('Y-m-d');

        $response = $this->get(route('booking.select-rooms', [
            'check_in' => $checkIn,
            'check_out' => $checkOut,
            'adults' => 1
        ]));

        $response->assertStatus(200);
        
        // Assert that available_qty is 1 (2 total - 1 booked)
        $rooms = $response->viewData('rooms');
        $this->assertEquals(1, $rooms->first()->available_qty);
    }

    public function test_booking_store_fails_if_no_availability()
    {
        // 1. Fully book the room (2 bookings of 1 room each = 2 rooms)
        for ($i = 0; $i < 2; $i++) {
            Booking::create([
                'check_in' => now()->addDays(1),
                'check_out' => now()->addDays(3),
                'customer_name' => 'Existing Guest ' . $i,
                'customer_email' => 'guest'.$i.'@example.com',
                'customer_phone' => '0123456789',
                'status' => 'confirmed',
                'total_price' => 2000000,
                'room_price' => 2000000,
                'service_price' => 0,
                'room_id' => null,
                'adults' => 2,
                'children' => 0
            ])->roomTypes()->attach($this->roomType->id, ['quantity' => 1, 'price_per_night' => 1000000, 'subtotal' => 2000000]);
        }

        // 2. Try to book another room for same dates
        $response = $this->post(route('booking.store'), [
            'check_in' => now()->addDays(1)->format('Y-m-d'),
            'check_out' => now()->addDays(2)->format('Y-m-d'),
            'adults' => 2,
            'name' => 'New Guest',
            'email' => 'new@example.com',
            'phone' => '0987654321',
            'rooms' => [
                $this->roomType->id => 1 // Requesting 1 more
            ]
        ]);

        // Should redirect back with error
        $response->assertSessionHas('error');
    }

    public function test_booking_store_saves_guest_data_correctly()
    {
        $response = $this->post(route('booking.store'), [
            'check_in' => now()->addDays(10)->format('Y-m-d'),
            'check_out' => now()->addDays(12)->format('Y-m-d'),
            'adults' => 2,
            'name' => 'Main Guest',
            'email' => 'main@example.com',
            'phone' => '0987654321',
            'id_passport' => 'B1234567',
            'nationality' => 'VN',
            'dob' => '1990-01-01',
            'gender' => 'male',
            'rooms' => [
                $this->roomType->id => 1
            ],
            'guests' => [
                $this->roomType->id => [
                    ['name' => 'Room Guest 1']
                ]
            ]
        ]);

        $booking = Booking::where('customer_email', 'main@example.com')->first();
        if (!$booking) {
            dump('Session Errors:', session('errors') ? session('errors')->all() : 'None');
            dump('Session Error Key:', session('error'));
            dump('Response Status:', $response->status());
        }
        $this->assertNotNull($booking);

        // Check Primary Guest
        $primary = BookingGuest::where('booking_id', $booking->id)->where('is_primary_contact', true)->first();
        $this->assertNotNull($primary);
        $this->assertEquals('Main Guest', $primary->full_name);
        $this->assertEquals('B1234567', $primary->passport_id);
        $this->assertEquals('1990-01-01', $primary->dob->format('Y-m-d'));

        // Check Secondary Guest
        $secondary = BookingGuest::where('booking_id', $booking->id)->where('is_primary_contact', false)->first();
        $this->assertNotNull($secondary);
        $this->assertEquals('Room Guest 1', $secondary->full_name);
    }
}
