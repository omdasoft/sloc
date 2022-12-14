<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->count(1)->create();
        \App\Models\Post::factory()->count(10)->create();
        \App\Models\Message::factory()->count(10)->create();
    }
}
