<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class NmtVattuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
        // DB::table('nmtvattu')->insert([
        //     'nmtMaVTu'=>'DD01',
        //     'nmtTenVTu'=>'Đầu DVD Hitachi 1 cửa',
        //     'nmtDvTinh'=>'Bộ',
        //     'nmtPhanTram'=>40,
        //     ]);
        //     DB::table('nmtvattu')->insert([
        //         'nmtMaVTu'=>'DD02',
        //         'nmtTenVTu'=>'Đầu DVD Hitachi 2 cửa',
        //         'nmtDvTinh'=>'Bộ',
        //         'nmtPhanTram'=>50,
        //        ]);

                //
                $faker = Faker::create();
                foreach(range(1,50) as $index){
                DB::table('nmtvattu')->insert([
                'nmtMaVTu'=>$faker->word(4),
                // 'MaNCC'=>$faker->word(15),
                'nmtTenVTu'=>$faker->sentence(5),
                'nmtDvTinh'=>$faker->word(3),
                'nmtPhanTram'=>$faker->radomFloat('2',0,100)
                ]);
    }
    }
}
