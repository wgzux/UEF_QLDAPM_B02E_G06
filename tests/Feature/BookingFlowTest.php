<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\RoomType;
use Carbon\Carbon;

class BookingFlowTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Case 1: Valid Date Selection
     */
    public function test_valid_date_selection_redirects_to_addcart()
    {
        $today = Carbon::today();
        $checkIn = $today->copy()->addDays(1); // Tomorrow
        $checkOut = $today->copy()->addDays(3); // 2 nights later

        $response = $this->post(route('booking.select-rooms'), [
            'check_in' => $checkIn->format('Y-m-d'),
            'check_out' => $checkOut->format('Y-m-d'),
            'adults' => 2,
            'children' => 0,
        ]);

        $response->assertStatus(200);
        $response->assertViewIs('pages.Addcart');
        $response->assertViewHas('nights', 2);
    }

    /**
     * Case 2: Invalid Date Selection (Past Date)
     */
    public function test_past_date_selection_fails_validation()
    {
        $pastDate = Carbon::yesterday();
        $checkOut = Carbon::today();

        $response = $this->post(route('booking.select-rooms'), [
            'check_in' => $pastDate->format('Y-m-d'),
            'check_out' => $checkOut->format('Y-m-d'),
            'adults' => 2,
        ]);

        $response->assertSessionHasErrors('check_in');
    }

    /**
     * Case 3: Price Calculation
     */
    public function test_price_calculation_is_correct()
    {
        // Setup: Create a room type with known price
        $roomPrice = 1500000;
        $roomType = RoomType::factory()->create([
            'base_price' => $roomPrice,
            'name' => 'Test Room'
        ]);

        $checkIn = Carbon::today();
        $checkOut = $checkIn->copy()->addDays(2); // 2 nights

        // Simulate submitting from Addcart to Confirm Details
        $response = $this->post(route('booking.confirm-details'), [
            'check_in' => $checkIn->format('Y-m-d'),
            'check_out' => $checkOut->format('Y-m-d'),
            'nights' => 2,
            'adults' => 2,
            'rooms' => [
                $roomType->id => 1 // 1 room
            ]
        ]);

        $expectedTotal = $roomPrice * 2 * 1; // 3,000,000

        $response->assertStatus(200);
        $response->assertViewIs('pages.BookingDetails');
        $response->assertViewHas('grandTotal', $expectedTotal);
    }
}
