<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Category>
 */
class CategoryFactory extends Factory
{
    /**
     * {@inheritdoc}
     */
    public function definition(): array
    {
        return [
            'title' => fake()->unique()->words(2, true),
        ];
    }
}
