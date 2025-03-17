<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisitorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('visitors')->insert([
            ['name' => 'Maul', 'visit_date' => '2024-11-08', 'contact' => '08123071298'],
            ['name' => 'Capunk', 'visit_date' => '2024-11-18', 'contact' => '08127469173'],
        ]);
    }
}
