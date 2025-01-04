<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            NMT_QUAN_TRITableSeeder::class,
            NMT_LOAI_SAN_PHAMTableSeeder::class,
            NMT_SAN_PHAMTableSeeder::class,
        ]);
    }
}
