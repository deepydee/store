<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * {@inheritdoc}
     */
    public function definition(): array
    {
        return [
            'title' => ucfirst((string) fake()->unique()->words(2, true)),
            'price' => fake()->numberBetween(100, 10000),
            'thumbnail' => fake()->imageUrl(640, 480, 'cats'),
            'brand_id' => Brand::query()->inRandomOrder()->value('id'),
        ];
    }
}
