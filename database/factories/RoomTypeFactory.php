<?php

namespace Database\Factories;

use App\Models\RoomType;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RoomType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $name = $this->faker->words(3, true),
            'slug' => \Illuminate\Support\Str::slug($name),
            'description' => $this->faker->sentence,
            'base_price' => $this->faker->numberBetween(1000000, 5000000),
            'max_capacity' => $this->faker->numberBetween(2, 6),
            'image' => $this->faker->imageUrl(),
            'size' => 30,
            'bed_info' => 'King Bed',
            'max_children' => 2,
            'view_direction' => 'Mountain View',
            'images' => json_encode([]), 
            'amenities' => json_encode(['wifi', 'tv']),
        ];
    }
}
