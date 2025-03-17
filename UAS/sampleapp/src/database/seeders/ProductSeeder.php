<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Motor SmartLocate',
            'description' => 'Motor dengan fitur SmartLocate System',
            'price' => 15000000, // Ensure it's an integer (or decimal if required)
            'featured' => true,
        ]);
        

        Product::create([
            'name' => 'Motor Eco-Friendly',
            'description' => 'Motor dengan teknologi ramah lingkungan',
            'price' => 20000000,
            'featured' => true,
        ]);
    }
}
