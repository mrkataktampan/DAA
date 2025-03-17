<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kendaraan;

class KendaraansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kendaraan::create([
            'name' => 'Mobil',
            'type' => 'Kendaraan Darat',
            'functioned_for' => 'Membantu dalam perjalanan di darat'
        ]);
    }
}
