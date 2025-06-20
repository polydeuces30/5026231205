<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MyKaryawanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table mykaryawan
		// $mykaryawan = DB::table('mykaryawan')->get();
        // membuat pagination
        $mykaryawan = DB::table('mykaryawan')->paginate(10); // jumlah araay per halaman , default 15
    	// mengirim data mykaryawan ke view index
    	return view('blog/indexmykaryawan',['mykaryawan' => $mykaryawan]);

    }
    // method untuk edit data mykaryawan
	public function edit($kodepegawai)
	{
		// mengambil data mykaryawan berdasarkan id yang dipilih
		$mykaryawan = DB::table('mykaryawan')->where('kodepegawai',$kodepegawai)->get();
        //$mykaryawan = DB::table('mykaryawan')->where('lampu_id',$id)->get();
        //->where ('lampu_id' $id)
        //->get()
		// passing data mykaryawan yang didapat ke view edit.blade.php
		return view('blog/editmykaryawan',['mykaryawan' => $mykaryawan]);

	}
    // // method untuk insert data ke table mykaryawan
	// public function store(Request $request)
	// {
	// 	// Debug untuk melihat data yang dikirim
	// 	// dd($request->all()); // Uncomment untuk debug

	// 	// insert data ke table mykaryawan
	// 	DB::table('mykaryawan')->insert([
	// 	    // Jika ID auto increment, hapus baris ini
	// 	    // 'ID' => $request->ID,
	// 	    'kodepegawai' => $request->kodepegawai,
	// 	    'namalengkap' => $request->namalengkap,
	// 	    'divisi' => $request->divisi,
    //         'departemen' => $request->departemen,
	// 	]);
    // update data mykaryawan
	public function view(Request $request)
	{
		// Debug untuk melihat data yang dikirim
		// dd($request->all()); // Uncomment untuk debug

		// view
		DB::table('mykaryawan')->where('ID',$request->id)->view([
			'kodepegawai' => $request->kodepegawai,
		    'namalengkap' => $request->namalengkap,
		    'divisi' => $request->divisi,
            'departemen' => $request->departemen,
		]);
        return view('blog/viewmykaryawan',['mykaryawan' => $mykaryawan]);
	}
}
