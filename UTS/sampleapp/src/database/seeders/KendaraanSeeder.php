<?php

namespace Database\Seeders;

use App\Models\Kendaraan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kendaraan::create([
            'name' => 'Speedboat',
            'type' => 'Kendaraan di Laut',
            'functioned_for' => 'Berpergian Antar Pulau'
        ]);
    }
}
