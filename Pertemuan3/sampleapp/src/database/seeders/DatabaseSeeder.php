<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([RoleSeeder::class]);


    
        $this->seedUsers();

        $this->call([BooksSeeder::class]);
        $this->call([VisitorsSeeder::class]);
        $this->call([BorrowingsSeeder::class]);
        $this->call([PermissionSeeder::class]);
    }

    private function seedUsers(): void 
    {
        $adminEmail = 'admin@admin.com';
        if (! User::where('email', $adminEmail)->exists()) {
            $admin = User::create([
                'name' => 'Admin',
                'email' => $adminEmail,
                'password' => bcrypt('password'),
            ]);
            $admin->assignRole('super_admin');
        }

        $stafEmail = 'staf@admin.com';
        if (! User::where('email', $stafEmail)-> exists()) {
            $staf = User::create([
                'name' => 'Staff',
                'email' => $stafEmail,
                'password' => bcrypt('password'),
            ]);
            $staf->assignRole('Staff');
        }
    }
}
