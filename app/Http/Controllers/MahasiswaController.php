<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// menambahkan auth berdasar kan yg login siapa
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
    //jika ingin melihat user nya tambakan reques $request
    public function daftarMahasiswa(Request $request){
        // $request->user()->id;
        $request->user()->name;
        // $request->user()->email;
        // $request->user()->password;

        return view('halaman.daftarmahasiswa');
    }

    public function tabelMahasiswa(){
        return view('halaman.tabelmahasiswa');
    }

    public function blogMahasiswa(){
        return view('halaman',['judul' => 'Blog Mahasiswa']);
    }
}
