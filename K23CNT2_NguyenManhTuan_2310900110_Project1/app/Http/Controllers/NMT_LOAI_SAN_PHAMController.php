<?php

namespace App\Http\Controllers;

use App\Models\NMT_LOAI_SAN_PHAM;
use Illuminate\Http\Request;

class NMT_LOAI_SAN_PHAMController extends Controller
{
    //admin CRUD

    //list
    public function nmtList()
        {
            $nmtLoaiSanPhams = NMT_LOAI_SAN_PHAM::all();
            return view('nmtAdmins.nmtLoaiSanPham.nmt-list',['nmtLoaiSanPhams'=>$nmtLoaiSanPhams]);
        }
    //create
    public function nmtCreate()
    {
        return view('nmtAdmins.nmtLoaiSanPham.nmt-create');
    }
    //create .submit
    public function nmtCreateSubmit(Request $request)
    {
        // ghi dữ liệu xuống db
        $nmtLoaiSanPham = new NMT_LOAI_SAN_PHAM;
        $nmtLoaiSanPham->nmtMaLoai = $request->nmtMaLoai;
        $nmtLoaiSanPham->nmtTenLoai = $request->nmtTenLoai;
        $nmtLoaiSanPham->nmtTrangThai = $request->nmtTrangThai;
        
        $nmtLoaiSanPham->save();

        return redirect()->route('nmtadmins.nmtloaisanpham');
    }
    //GET:nmtEdit 
    public function nmtEdit($id)
    {
        $nmtLoaiSanPham = NMT_LOAI_SAN_PHAM::find($id);
        return view('nmtAdmins.nmtLoaiSanPham.nmt-edit',['nmtLoaiSanPham'=>$nmtLoaiSanPham]);
    }
    //Post: nmtEditSubmit

    public function nmtEditSubmit(Request $request)
    {
        // ghi dữ liệu xuống db
        $nmtLoaiSanPham =  NMT_LOAI_SAN_PHAM::find($request->id);

        $nmtLoaiSanPham->nmtMaLoai = $request->nmtMaLoai;
        $nmtLoaiSanPham->nmtTenLoai = $request->nmtTenLoai;
        $nmtLoaiSanPham->nmtTrangThai = $request->nmtTrangThai;
        
        $nmtLoaiSanPham->save();

        return redirect()->route('nmtadmins.nmtloaisanpham');
    }

    // Get- nmtDelete
    public function nmtDelete($id)
    {
        $nmtLoaiSanPham = NMT_LOAI_SAN_PHAM::find($id);
        
        $nmtLoaiSanPham->delete();

  
        return redirect()->route('nmtadmins.nmtloaisanpham');

    
    }
}
