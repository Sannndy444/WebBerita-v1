<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $adminRole = Role::create([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);

        $penulisRole = Role::create([
            'name' => 'penulis',
            'guard_name' => 'web',
        ]);

        $userRole = Role::create([
            'name' => 'user',
            'guard_name' => 'web',
        ]);

        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'avatar' => 'images/default-avatar.png',
        ]);

        $penulis = User::factory()->create([
            'name' => 'Penulis',
            'email' => 'penulis@gmail.com',
            'password' => bcrypt('12345678'),
            'avatar' => 'avatars/default-avatar.png',
        ]);

        $user = User::factory()->create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('12345678'),
            'avatar' => 'avatars/default-avatar.png',
        ]);

        $admin->assignRole($adminRole);
        $penulis->assignRole($penulisRole);
        $user->assignRole($userRole);
    }
}
