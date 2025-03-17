<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::insert([
            ['category_name' => 'shoes'],
            ['category_name' => 'pants'],
            ['category_name' => 'clothes'],
        ]);
    }
}

