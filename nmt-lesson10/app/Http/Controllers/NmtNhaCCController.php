<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NmtNhaCCController extends Controller
{
    // list(R) /create / edit /delete
    public function list(){
        // Lấy dữ liệu từ db thông qua ORM
        $nmtNhaCCs =NmtNhaCC::all();
        return view('NmtNhaCC.List',['nmtNhaCCs'=>$nmtNhaCCs]);
    }
    
}
