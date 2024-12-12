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
        User::factory()->create([
            'name' => 'Husein Zidan',
            'email' => 'zidan@gmail.com',
        ]);

        User::factory()->create([
            'name' => 'Test 2',
            'email' => 'test@gmail.com',
        ]);

        User::factory()->create([
            'name' => 'unknown',
            'email' => 'unknown@gmail.com',
        ]);
    }
}
