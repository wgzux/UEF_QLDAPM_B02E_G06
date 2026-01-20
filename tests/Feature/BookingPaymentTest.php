<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\RoomType;
use App\Models\Booking;
use Carbon\Carbon;

class BookingPaymentTest extends TestCase
{
    use RefreshDatabase;

    public function test_booking_store_creates_record_and_redirects_to_payment()
    {
        $this->seed(\Database\Seeders\StandardRoomTypesSeeder::class);
        $room = RoomType::first();
        
        $checkIn = Carbon::now()->addDays(2);
        $checkOut = Carbon::now()->addDays(3);
        
        $response = $this->post(route('booking.store'), [
            'check_in' => $checkIn->format('Y-m-d'),
            'check_out' => $checkOut->format('Y-m-d'),
            'adults' => 2,
            'children' => 0,
            'name' => 'Test User',
            'email' => 'test@example.com',
            'phone' => '0901234567',
            'rooms' => [
                $room->id => 1
            ]
        ]);
        
        // Assert redirect to payment
        $response->assertStatus(302);
        $booking = Booking::latest()->first();
        $this->assertNotNull($booking);
        $response->assertRedirect(route('booking.payment', $booking->id));
        
        // Verify DB
        $this->assertEquals('Test User', $booking->customer_name);
        $this->assertNotNull($booking->code);
    }

    public function test_payment_page_loads_with_qr_code()
    {
        $this->seed(\Database\Seeders\StandardRoomTypesSeeder::class);
        $booking = Booking::create([
            'customer_name' => 'Test User Payment',
            'customer_email' => 'pay@example.com',
            'customer_phone' => '0909999999',
            'check_in' => now(),
            'check_out' => now()->addDay(),
            'adults' => 2,
            'room_price' => 1000000,
            'service_price' => 0,
            'total_price' => 1000000,
            'status' => 'pending',
            'code' => '#OLTEST01',
            'room_id' => null
        ]);

        $response = $this->get(route('booking.payment', $booking->id));
        
        $response->assertStatus(200);
        $response->assertSee('Thanh toán');
        $response->assertSee('Test User Payment');
        $response->assertSee('#OLTEST01');
        $response->assertSee('0944085920'); // Bank Account
        $response->assertSee('PHAM QUANG VU');
        
        // Check for VietQR link part
        $response->assertSee('img.vietqr.io');
    }

    public function test_process_payment_redirects_to_confirm_page()
    {
        $this->seed(\Database\Seeders\StandardRoomTypesSeeder::class);
        $booking = Booking::create([
            'customer_name' => 'Confirm User',
            'customer_email' => 'confirm@example.com',
            'customer_phone' => '0901112222',
            'check_in' => now(),
            'check_out' => now()->addDay(),
            'adults' => 2,
            'room_price' => 2000000,
            'service_price' => 0,
            'total_price' => 2000000,
            'status' => 'pending',
            'payment_status' => 'unpaid', // Initial
            'code' => '#OLCONFIRM',
            'room_id' => null
        ]);

        $response = $this->post(route('booking.process-payment', $booking->id));

        $response->assertRedirect(route('booking.confirm', $booking->id));
        
        $booking->refresh();
        $this->assertEquals('paid', $booking->payment_status);
        $this->assertEquals('confirmed', $booking->status);
        
        // Verify View
        $viewResponse = $this->get(route('booking.confirm', $booking->id));
        $viewResponse->assertStatus(200);
        $viewResponse->assertSee('Xác nhận');
        $viewResponse->assertSee('Confirm User');
        $viewResponse->assertSee('#OLCONFIRM');
    }
}
