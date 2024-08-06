<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Random\RandomException;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @throws RandomException
     */
    public function run(): void
    {
        Category::factory()
            ->count(20)
            ->has(Product::factory()->count(random_int(1, 5)))
            ->create();
    }
}
