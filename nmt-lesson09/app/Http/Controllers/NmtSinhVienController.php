<?php

namespace App\Http\Controllers;

use App\Models\NmtSinhVien;
use Illuminate\Http\Request;

class NmtSinhVienController extends Controller
{
    //list /insert /update(edit)/delete
    
    public function nmtList()
    {
        // lấy toàn bộ danh sách sinh viên 
        $nmtSinhViens =NmtSinhVien::all();

        return view('NmtSinhVien.nmt-list',['nmtSinhViens'=>$nmtSinhviens]);
    }
}
