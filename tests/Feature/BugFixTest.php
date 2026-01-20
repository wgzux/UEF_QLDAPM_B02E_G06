<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\RoomType;
use App\Models\Booking;

class BugFixTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Bug 1: Test Admin Edit Room Page Loads
     */
    public function test_admin_can_access_edit_room_page()
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $room = RoomType::create([
            'name' => 'Room Test',
            'slug' => 'room-test',
            'base_price' => 1000000,
            'amenities' => ['Wifi', 'TV'] // Valid array
        ]);

        $response = $this->actingAs($admin)->get(route('admin.rooms.edit', $room->id));

        $response->assertStatus(200);
        $response->assertSee('Chỉnh sửa Phòng');
    }

    /**
     * Bug 2: Test Validation for Zero Rooms
     */
    public function test_booking_fails_if_no_rooms_selected()
    {
        $response = $this->post(route('booking.confirm-details'), [
            'check_in' => now()->addDays(1)->toDateString(),
            'check_out' => now()->addDays(2)->toDateString(),
            'nights' => 1,
            'adults' => 2,
            'rooms' => [] // Empty selection
        ]);

        // Should redirect back with error
        $response->assertSessionHas('error');
    }

    /**
     * Bug 3: Test Select Rooms Route accepts GET (Back Button)
     */
    public function test_select_rooms_accepts_get_request()
    {
        $response = $this->get(route('booking.select-rooms', [
            'check_in' => now()->addDays(1)->toDateString(),
            'check_out' => now()->addDays(2)->toDateString(),
            'adults' => 2
        ]));

        $response->assertStatus(200);
        $response->assertSee('THE WANDERING ROSE');
        // Checking view "pages.Addcart"
    }

    /**
     * Bug 4: Test My Bookings Logic
     */
    public function test_my_bookings_displayed_correctly()
    {
        $email = 'test@example.com';
        $user = User::factory()->create([
            'email' => $email,
            'role' => 'customer'
        ]);

        // Create booking with same email but NO user_id (Guest booking)
        $booking = Booking::create([
            'code' => 'TEST1234',
            'customer_email' => $email,
            'customer_name' => 'John Doe',
            'customer_phone' => '0123456789',
            'check_in' => now(),
            'check_out' => now()->addDay(),
            'room_price' => 500000,
            'service_price' => 0,
            'total_price' => 500000,
            'adults' => 2,
            'children' => 0,
            'status' => 'pending',
            'payment_status' => 'unpaid'
        ]);

        // Login as User
        $response = $this->actingAs($user)->get(route('customer.bookings'));

        $response->assertStatus(200);
        $response->assertSee('TEST1234');
    }
}
