<?php

namespace App\Http\Controllers;

use App\Models\NMT_SAN_PHAM;
use App\Models\NMT_LOAI_SAN_PHAM;
use Illuminate\Http\Request;

class NMT_SAN_PHAMController extends Controller
{
    //CRUD:

    //GET: Read all
    public function nmtList()
    {
        $nmtSanPhams = NMT_SAN_PHAM::where('nmtTrangThai',0)->get();
        return view('nmtAdmins.nmtSanPham.nmt-list',['nmtSanPhams'=>$nmtSanPhams]);
    }
    // GET: Create 
    public function nmtCreate()
    {
        //Đọc dữ liệu từ bảng nmtLoai_San_Pham
        $nmtLoaiSanPhams =NMT_LOAI_SAN_PHAM::all();
        return view('nmtAdmins.nmtSanPham.nmt-create',['nmtLoaiSanPhams'=>$nmtLoaiSanPhams]);
    }
    //POST:Create Submit nmtCreateSubmit
    public function nmtCreateSubmit()
    {
        //Đọc dữ liệu từ bảng nmtLoai_San_Pham
        //$nmtLoaiSanPhams =NMT_LOAI_SAN_PHAM::all();
        //return view('nmtAdmins.nmtSanPham.nmt-create',['nmtLoaiSanPhams'=>$nmtLoaiSanPhams]);
        return redirect()->route('nmtadmins.nmtsanpham.nmtlist');
    }
}
