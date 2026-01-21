<?php

namespace Tests\Feature;

use App\Models\Booking;
use App\Models\User;
use App\Models\RoomType;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Carbon\Carbon;

class MyBookingsFeatureTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that authenticated users can see their bookings by user_id
     */
    public function test_authenticated_user_can_see_bookings_by_user_id()
    {
        // Create a user and log them in
        $user = User::factory()->create([
            'email' => 'test@example.com',
        ]);

        $this->actingAs($user);

        // Create a room type
        $roomType = RoomType::factory()->create([
            'name' => 'Deluxe Room',
            'base_price' => 1000000, 
            'number_of_rooms' => 5,
        ]);

        // Create a booking linked to this user via user_id
        $booking = Booking::factory()->create([
            'user_id' => $user->id,
            'customer_email' => 'test@example.com',
            'customer_phone' => '0123456789',
            'customer_name' => 'Test User',
            'check_in' => Carbon::tomorrow(),
            'check_out' => Carbon::tomorrow()->addDays(2),
            'total_price' => 2000000,
            'status' => 'confirmed',
        ]);

        // Attach room type to booking
        $booking->roomTypes()->attach($roomType->id, [
            'quantity' => 1,
            'price_per_night' => 1000000,
            'subtotal' => 2000000,
        ]);

        // Visit my-bookings page
        $response = $this->get('/my-bookings');

        // Assert booking is visible
        $response->assertStatus(200);
        $response->assertSee($booking->code);
        $response->assertSee('Test User');
        $response->assertSee('2,000,000');
    }

    /**
     * Test that users can see legacy bookings (no user_id) by email matching
     */
    public function test_user_can_see_legacy_bookings_by_email()
    {
        // Create a user and log them in
        $user = User::factory()->create([
            'email' => 'legacy@example.com',
        ]);

        $this->actingAs($user);

        // Create a room type
        $roomType = RoomType::factory()->create([
            'name' => 'Standard Room',
            'base_price' => 800000,
            'number_of_rooms' => 10,
        ]);

        // Create a legacy booking (user_id is null, only email matches)
        $legacyBooking = Booking::factory()->create([
            'user_id' => null, // Legacy booking without user_id
            'customer_email' => 'legacy@example.com', // Matches user email
            'customer_phone' => '0999999999',
            'customer_name' => 'Legacy Guest',
            'check_in' => Carbon::tomorrow(),
            'check_out' => Carbon::tomorrow()->addDays(3),
            'total_price' => 2400000,
            'status' => 'pending',
        ]);

        // Attach room type
        $legacyBooking->roomTypes()->attach($roomType->id, [
            'quantity' => 1,
            'price_per_night' => 800000,
            'subtotal' => 2400000,
        ]);

        // Visit my-bookings page
        $response = $this->get('/my-bookings');

        // Assert legacy booking is visible (matched by email)
        $response->assertStatus(200);
        $response->assertSee($legacyBooking->code);
        $response->assertSee('Legacy Guest');
    }

    /**
     * Test that users cannot see bookings from other users
     */
    public function test_user_cannot_see_other_users_bookings()
    {
        // Create two users
        $user1 = User::factory()->create(['email' => 'user1@example.com']);
        $user2 = User::factory()->create(['email' => 'user2@example.com']);

        // Create room type
        $roomType = RoomType::factory()->create();

        // Create booking for user2
        $booking = Booking::factory()->create([
            'user_id' => $user2->id,
            'customer_email' => 'user2@example.com',
            'customer_name' => 'User Two',
        ]);

        $booking->roomTypes()->attach($roomType->id, [
            'quantity' => 1,
            'price_per_night' => 1000000,
            'subtotal' => 1000000,
        ]);

        // Log in as user1
        $this->actingAs($user1);

        // Visit my-bookings
        $response = $this->get('/my-bookings');

        // Should NOT see user2's booking
        $response->assertStatus(200);
        $response->assertDontSee($booking->code);
        $response->assertDontSee('User Two');
    }

    /**
     * Test showBooking method also respects user_id and email matching
     */
    public function test_show_booking_respects_user_ownership()
    {
        // Create user
        $user = User::factory()->create([
            'email' => 'owner@example.com',
        ]);

        $this->actingAs($user);

        // Create room type
        $roomType = RoomType::factory()->create();

        // Create booking for this user
        $booking = Booking::factory()->create([
            'user_id' => $user->id,
            'customer_email' => 'owner@example.com',
            'customer_name' => 'Owner',
        ]);

        $booking->roomTypes()->attach($roomType->id, [
            'quantity' => 1,
            'price_per_night' => 1000000,
            'subtotal' => 1000000,
        ]);

        // Can access their own booking detail
        $response = $this->get("/my-bookings/{$booking->id}");
        $response->assertStatus(200);

        // Create another user's booking
        $otherUser = User::factory()->create(['email' => 'other@example.com']);
        $otherBooking = Booking::factory()->create([
            'user_id' => $otherUser->id,
            'customer_email' => 'other@example.com',
        ]);

        $otherBooking->roomTypes()->attach($roomType->id, [
            'quantity' => 1,
            'price_per_night' => 1000000,
            'subtotal' => 1000000,
        ]);

        // Try to access other user's booking - should fail  
        $response = $this->get("/my-bookings/{$otherBooking->id}");
        $response->assertStatus(404); // firstOrFail throws 404
    }
}
