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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('admin12345'),
            'role' => 'admin'
        ]);

        User::factory()->create([
            'name' => 'Test Petugas',
            'email' => 'petugas@example.com',
            'password' => bcrypt('petugas12345'),
            'role' => 'petugas'
        ]);

        User::factory()->create([
            'name' => 'Test Manager',
            'email' => 'manager@example.com',
            'password' => bcrypt('manager12345'),
            'role' => 'manager'
        ]);
    }
}
