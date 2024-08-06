<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Brand>
 */
class BrandFactory extends Factory
{
    /**
     * {@inheritdoc}
     */
    public function definition(): array
    {
        return [
            'title' => fake()->unique()->words(2, true),
            'thumbnail' => fake()->imageUrl(640, 480, 'cats'),
        ];
    }
}
