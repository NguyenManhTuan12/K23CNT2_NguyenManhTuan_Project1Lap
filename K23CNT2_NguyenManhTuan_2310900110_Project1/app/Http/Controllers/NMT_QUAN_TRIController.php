<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NMT_QUAN_TRIController extends Controller
{
    //

    //gest login (authentication)
    public function nmtLogin(){
        return view('NmtLogin.nmt-login');
    }

    // login (authentication)
    public function nmtLoginSubmit(Request $request){
        return view('NmtLogin.nmt-login');
    }
}
