<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

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

    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'image' => $this->faker->imageUrl(),
            'image_desc' => $this->faker->paragraph(),
            'category' => $this->faker->randomElement(['anime', 'movie']),
            'price' => $this->faker->numberBetween($min = 1000, $max = 5000)
        ];
    }
}
