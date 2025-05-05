<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(2, true),
            'color' => $this->faker->safeColorName(),
            'category' => $this->faker->randomElement(['Electronics', 'Clothing', 'Toys', 'Books']),
            'accessories' => $this->faker->words(3, true),
            'available' => $this->faker->boolean(80),
            'price' => $this->faker->randomFloat(2, 5, 500),
            'weight' => $this->faker->randomFloat(2, 0.1, 10),
        ];
    }
}
