<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class NMT_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("NMT_SAN_PHAM")->insert([
            'nmtMaSanPham'      =>"VP001",
            'nmtTenSanPham'     =>"Điện thoại iphone",
            'nmtHinhAnh'        => <img src="https://images.unsplash.com/photo-1599202860130-f600f4948364?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8JUUxJUJBJUEzbmglMjAlQzQlOTFpJUUxJUJCJTg3biUyMHRobyVFMSVCQSVBMWklMjBpcGhvbmV8ZW58MHx8MHx8fDA%3D" alt="">,
            'nmtSoLuong'        => 100,
            'nmtDonGia'         => 699000,
            'nmtMaLoai'         =>1,
            'nmtTrangThai'      =>0
        ]);
        DB::table("NMT_SAN_PHAM")->insert([
            'nmtMaSanPham'      =>"VP002",
            'nmtTenSanPham'     =>"Cây phú đại gia",
            'nmtHinhAnh'        =>"images/san-pham/VP002.jng",
            'nmtSoLuong'        => 100,
            'nmtDonGia'         => 699000,
            'nmtMaLoai'         =>1,
            'nmtTrangThai'      =>0
        ]);
        DB::table("NMT_SAN_PHAM")->insert([
            'nmtMaSanPham'      =>"VP003",
            'nmtTenSanPham'     =>"Cây hạnh phúc",
            'nmtHinhAnh'        =>"images/san-pham/VP003.jng",
            'nmtSoLuong'        => 150,
            'nmtDonGia'         => 250000,
            'nmtMaLoai'         =>1,
            'nmtTrangThai'      =>0
        ]);
        DB::table("NMT_SAN_PHAM")->insert([
            'nmtMaSanPham'      =>"VP004",
            'nmtTenSanPham'     =>"Cây vạn lộc",
            'nmtHinhAnh'        =>"images/san-pham/VP004.jng",
            'nmtSoLuong'        => 300,
            'nmtDonGia'         => 799000,
            'nmtMaLoai'         =>1,
            'nmtTrangThai'      =>0
        ]);
        DB::table("NMT_SAN_PHAM")->insert([
            'nmtMaSanPham'      =>"PT001",
            'nmtTenSanPham'     =>"Cây thiết mộc lan",
            'nmtHinhAnh'        =>"images/san-pham/PT001.jng",
            'nmtSoLuong'        => 150,
            'nmtDonGia'         => 590000,
            'nmtMaLoai'         =>3,
            'nmtTrangThai'      =>0
        ]);
        DB::table("NMT_SAN_PHAM")->insert([
            'nmtMaSanPham'      =>"PT002",
            'nmtTenSanPham'     =>"Cây trường sinh",
            'nmtHinhAnh'        =>"images/san-pham/PT002.jng",
            'nmtSoLuong'        => 100,
            'nmtDonGia'         => 150000,
            'nmtMaLoai'         =>3,
            'nmtTrangThai'      =>0
        ]);
        DB::table("NMT_SAN_PHAM")->insert([
            'nmtMaSanPham'      =>"PT003",
            'nmtTenSanPham'     =>"Cây hạnh phúc",
            'nmtHinhAnh'        =>"images/san-pham/PT003.jng",
            'nmtSoLuong'        => 200,
            'nmtDonGia'         => 299000,
            'nmtMaLoai'         =>3,
            'nmtTrangThai'      =>0
        ]);
        DB::table("NMT_SAN_PHAM")->insert([
            'nmtMaSanPham'      =>"PT004",
            'nmtTenSanPham'     =>"Cây hoa nhài (Lài ta)",
            'nmtHinhAnh'        =>"images/san-pham/PT004.jng",
            'nmtSoLuong'        => 300,
            'nmtDonGia'         => 199000,
            'nmtMaLoai'         =>3,
            'nmtTrangThai'      =>0
        ]);
    }
}
