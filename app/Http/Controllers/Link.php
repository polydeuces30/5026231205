<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Link extends Controller
{
    //
    public function helloworld()
    {
        return view('blog');
    }
    public function index(){
        // jika variabelnya lebih dari satu
        $nama = "Diki Alfarabi Hadi";
        $umur = 35;
        $alamat = "Surabaya";
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
        // variabel yang ingin dipassing atau dikirimkan, value menggunakan set/himpunan/array
        // kiri nama yang masuk ke viewnya lalu kanan untuk dtempatnya, kanan ke kiri
        // nama variabel dan func bisa beda, tetapi nanti di file ttp panggil bds func
    	return view('biodata',['nama'=>$nama,'usia'=>$umur,'alamat'=>$alamat,'matkul'=> $pelajaran]);
    }
}

