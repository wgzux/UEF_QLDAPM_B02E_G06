<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking;
use App\Models\RoomType;
use App\Models\BookingGuest;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DemoBookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ensure we have rooms
        $rooms = RoomType::all();
        if ($rooms->isEmpty()) {
            $this->command->info('No rooms found. Please run StandardRoomTypesSeeder first.');
            return;
        }

        $faker = \Faker\Factory::create('vi_VN');

        $bookings = [
            [
                'status' => 'pending',
                'payment_status' => 'unpaid',
                'check_in_offset' => 2, // days from now
                'nights' => 2,
                'adults' => 2,
                'children' => 1,
            ],
            [
                'status' => 'confirmed',
                'payment_status' => 'paid',
                'check_in_offset' => 5,
                'nights' => 3,
                'adults' => 4,
                'children' => 0,
            ],
            [
                'status' => 'checked_in', // Currently staying
                'payment_status' => 'paid',
                'check_in_offset' => -1,
                'nights' => 3,
                'adults' => 2,
                'children' => 2,
            ],
            [
                'status' => 'checked_out', // Completed
                'payment_status' => 'paid',
                'check_in_offset' => -10,
                'nights' => 2,
                'adults' => 2,
                'children' => 0,
            ],
            [
                'status' => 'cancelled',
                'payment_status' => 'unpaid',
                'check_in_offset' => 10,
                'nights' => 1,
                'adults' => 1,
                'children' => 0,
            ],
             [
                'status' => 'confirmed',
                'payment_status' => 'paid',
                'check_in_offset' => 0, // Today
                'nights' => 1,
                'adults' => 2,
                'children' => 0,
            ],
        ];

        foreach ($bookings as $index => $data) {
            $checkIn = Carbon::today()->addDays($data['check_in_offset']);
            $checkOut = (clone $checkIn)->addDays($data['nights']);
            
            // Random room
            $room = $rooms->random();
            $quantity = 1;
            $subtotal = $room->base_price * $data['nights'] * $quantity;
            
            $booking = Booking::create([
                'user_id' => null, // Guest booking
                'room_id' => null, // Legacy field
                'customer_name' => $faker->name,
                'customer_email' => $faker->email,
                'customer_phone' => $faker->phoneNumber,
                'check_in' => $checkIn,
                'check_out' => $checkOut,
                'adults' => $data['adults'],
                'children' => $data['children'],
                'special_requests' => $index % 2 == 0 ? 'Cần phòng yên tĩnh, tầng cao' : null,
                'room_price' => $subtotal,
                'service_price' => 0,
                'total_price' => $subtotal,
                'status' => $data['status'],
                'payment_status' => $data['payment_status'],
                'code' => '#DEMO' . str_pad($index + 1, 4, '0', STR_PAD_LEFT),
            ]);

            // Create Pivot
            DB::table('booking_room_types')->insert([
                'booking_id' => $booking->id,
                'room_type_id' => $room->id,
                'quantity' => $quantity,
                'price_per_night' => $room->base_price,
                'subtotal' => $subtotal,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Create Primary Guest
            BookingGuest::create([
                'booking_id' => $booking->id,
                'full_name' => $booking->customer_name,
                'passport_id' => '0012' . rand(10000000, 99999999),
                'nationality' => 'Việt Nam',
                'gender' => ($index % 2 == 0) ? 'male' : 'female',
                'dob' => '1990-01-01',
                'is_primary_contact' => true,
            ]);

            // Create Extra Guests if any
            for ($i = 0; $i < $data['adults'] - 1; $i++) {
                 BookingGuest::create([
                    'booking_id' => $booking->id,
                    'full_name' => $faker->name,
                    'is_primary_contact' => false,
                ]);
            }
        }
    }
}
