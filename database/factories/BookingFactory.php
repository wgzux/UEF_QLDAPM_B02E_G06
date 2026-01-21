<?php

namespace Database\Factories;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $checkIn = Carbon::tomorrow();
        $checkOut = Carbon::tomorrow()->addDays(2);

        return [
            'user_id' => null, // Can be overridden
            'room_id' => null,
            'customer_name' => $this->faker->name(),
            'customer_email' => $this->faker->unique()->safeEmail(),
            'customer_phone' => $this->faker->numerify('09########'),
            'check_in' => $checkIn,
            'check_out' => $checkOut,
            'adults' => $this->faker->numberBetween(1, 4),
            'children' => $this->faker->numberBetween(0, 2),
            'special_requests' => $this->faker->optional()->sentence(),
            'room_price' => $this->faker->numberBetween(500000, 3000000),
            'service_price' => $this->faker->numberBetween(0, 500000),
            'total_price' => function (array $attributes) {
                return $attributes['room_price'] + $attributes['service_price'];
            },
            'status' => $this->faker->randomElement(['pending', 'confirmed', 'checked_in', 'checked_out']),
            'payment_status' => $this->faker->randomElement(['unpaid', 'partial', 'paid']),
            'code' => '#OL' . strtoupper($this->faker->bothify('????????')),
        ];
    }

    /**
     * Indicate that the booking is pending.
     */
    public function pending(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'pending',
        ]);
    }

    /**
     * Indicate that the booking is confirmed.
     */
    public function confirmed(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'confirmed',
        ]);
    }

    /**
     * Indicate that the booking is paid.
     */
    public function paid(): static
    {
        return $this->state(fn (array $attributes) => [
            'payment_status' => 'paid',
        ]);
    }
}
