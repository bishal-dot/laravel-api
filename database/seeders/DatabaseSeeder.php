<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Comments;
use App\Models\Api;
use App\Models\Products;
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

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Comments::factory(10)->create();

        // Api::factory(10)->create();

        Products::factory(10)->create();

    }
}
