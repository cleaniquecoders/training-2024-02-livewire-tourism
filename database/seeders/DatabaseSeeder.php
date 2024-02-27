<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if(! app()->isProduction()) {
            \App\Models\User::factory(rand(100, 500))->create();
        }
    }
}
