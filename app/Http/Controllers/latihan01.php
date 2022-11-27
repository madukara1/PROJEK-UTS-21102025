<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class latihan01 extends Controller
{
    function home(){
        return view('Homepage');
    }

    function komponen(){
        return view('Komponen');
    }

    function code(){
        return view('Code');
    }
    function beranda(){
        return view('beranda');
    }
}
