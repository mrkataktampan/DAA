<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::insert([
            ['product_name' => 'Adidas Running Shoes', 'price' => 1500000, 'category_id' => 1],
            ['product_name' => 'Jeans', 'price' => 300000, 'category_id' => 2],
            ['product_name' => 'T-shirt', 'price' => 150000, 'category_id' => 3],
        ]);
    }
}

