<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'address' => $this->faker->streetAddress,
            'state' => $this->faker->state,
            'price' => $this->faker->numberBetween(200000, 1000000),
            'rent_per_week' => $this->faker->numberBetween(300, 1500),
            'house_area' => $this->faker->numberBetween(80, 300),
            'land_area' => $this->faker->numberBetween(200, 800),
            'total_area' => $this->faker->numberBetween(280, 1100),
            'bedrooms' => $this->faker->numberBetween(1, 5),
            'bathrooms' => $this->faker->randomFloat(1, 1, 3),
            'garage' => $this->faker->numberBetween(0, 2),
            'image_url' => $this->faker->imageUrl(640, 480, 'house', true),
        ];
    }
}
