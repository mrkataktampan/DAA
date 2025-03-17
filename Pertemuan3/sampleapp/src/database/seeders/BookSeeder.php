<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            ['title' => 'One Piece', 'author' => 'Eiichiro Oda', 'publisher' => 'Shueisha', 'available' => true],
            ['title' => 'Naruto', 'author' => 'Masashi Kishimoto', 'publisher' => 'Shueisha', 'available' => true],
            ['title' => 'Fathul Muin', 'author' => 'Ahmad Zainudin Alfannani', 'publisher' => 'Pustaka Azzam', 'available' => true],
        ]);
    }
}
