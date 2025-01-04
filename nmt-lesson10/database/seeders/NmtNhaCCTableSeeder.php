<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class NmtNhaCCTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $faker = Faker::create();
            foreach(range(1,100) as $index)
            {
            DB::table('nmtnhacc')->insert([
            'nmtMaNCC'=>$faker->uuid(),
            // 'MaNCC'=>$faker->word(15),
            'nmtTenNCC'=>$faker->sentence(5),
            'nmtDiachi'=>$faker->address(),
            'nmtDienthoai'=>$faker->phoneNumber(10),
            'nmtemail'=>$faker->email(),
            'nmtstatus'=>$faker->boolean()
            ]);

    }
    }
}