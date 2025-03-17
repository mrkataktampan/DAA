<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RoleSeeder extends Seeder
{
    public function run(): void 
    {
        Role::firstOrCreate(['name' => 'User', 'guard_name' => 'web']);

        // Ensure roles exist
        $userRole = Role::firstOrCreate(['name' => 'User', 'guard_name' => 'web']);
        $adminRole = Role::firstOrCreate(['name' => 'super_admin', 'guard_name' => 'web']);
        
        // Assign roles to specific users based on email
        $userUser = User::where('email', 'user@admin.com')->first();
        $adminUser = User::where('email', 'admin@example.com')->first();

        if ($userUser) {
            $userUser->assignRole($userRole);
        }

        if ($adminUser) {
            $adminUser->assignRole($adminRole);
        }
    }
}