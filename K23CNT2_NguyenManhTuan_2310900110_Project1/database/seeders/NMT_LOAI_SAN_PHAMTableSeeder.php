<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class NMT_LOAI_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('NMT_LOAI_SAN_PHAM')->insert([
            'nmtMaLoai' =>"L001",
            'nmtTenLoai' =>"Cây cảnh văn phòng",
            'nmtTrangThai'=>0
        ]);
        DB::table('NMT_LOAI_SAN_PHAM')->insert([
            'nmtMaLoai' =>"L002",
            'nmtTenLoai' =>"Cây để bàn",
            'nmtTrangThai'=>0
        ]);
        DB::table('NMT_LOAI_SAN_PHAM')->insert([
            'nmtMaLoai' =>"L003",
            'nmtTenLoai' =>"Cây cảnh phong thuỷ",
            'nmtTrangThai'=>0
        ]);
        DB::table('NMT_LOAI_SAN_PHAM')->insert([
            'nmtMaLoai' =>"L004",
            'nmtTenLoai' =>"Cây thuỷ canh",
            'nmtTrangThai'=>0
        ]);
    }
}
