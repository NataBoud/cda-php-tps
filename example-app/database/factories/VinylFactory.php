<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vinyl>
 */
class VinylFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3), 
            'artist' => fake()->name(),
            'year' => fake()->year(), 
            'label' => fake()->company(),  
            'description' => fake()->paragraph(2), 
            'price' => fake()->randomFloat(2, 10, 50), 
        ];
    }
}
