<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    
    
    public function definition(): array
    {
        $categories = [
            'beauty',
            'furniture',
            'cars',
            'casual wear'
        ];

        return [
            'title'        => fake()->sentence(),
            'description'  => fake()->paragraph(),
            'category'     => fake()->randomElement($categories),
            'price'        => fake()->randomFloat(2,5, 100),
            'rating'       => fake()->randomFloat(2,1, 5),
            'stock'        => fake()->numberBetween(0, 100),
            'brand'        => fake()->word(),
            'weight'       => fake()->randomFloat(2,0, 99.99)
        ];
    }
}
