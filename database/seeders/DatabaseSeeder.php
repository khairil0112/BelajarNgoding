<?php

namespace Database\Seeders;

use App\Models\dailydeposit;
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

        dailydeposit::create([
            'id' => '1',
            'collector_id' => '2',
        ]);
    }
}
