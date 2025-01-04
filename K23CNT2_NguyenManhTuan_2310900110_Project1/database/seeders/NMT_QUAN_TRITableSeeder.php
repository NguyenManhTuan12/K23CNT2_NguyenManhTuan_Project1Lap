<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NMT_QUAN_TRITableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nmtMaKhau = md5("123456a@");
        DB::table('NMT_QUAN_TRI')->insert([
            'nmtTaiKhoan'=>"manhtuan@gmail.com",
            'nmtMatKhau' =>$nmtMaKhau,
            'nmtTrangThai'=>0
        ]);
        DB::table('NMT_QUAN_TRI')->insert([
            'nmtTaiKhoan'=>"0372188491",
            'nmtMatKhau' =>$nmtMaKhau,
            'nmtTrangThai'=>0
        ]);
}
}
