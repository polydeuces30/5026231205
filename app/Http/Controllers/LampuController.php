<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LampuController extends Controller
{
    public function lampu()
    {
    	// mengambil data dari table lampu
		// $lampu = DB::table('lampu')->get();
        // membuat pagination
        $lampu = DB::table('lampu')->paginate(10); // jumlah araay per halaman , default 15
    	// mengirim data lampu ke view index
    	return view('blog/lampuview',['lampu' => $lampu]);

    }
    // method untuk menampilkan view form tambah lampu
	public function tambahlampu()
	{

		// memanggil view tambah
		return view('blog/tambahlampu');

	}
    // method untuk edit data lampu
	public function edit($ID)
	{
		// mengambil data lampu berdasarkan id yang dipilih
		$lampu = DB::table('lampu')->where('ID',$ID)->get();
        //$lampu = DB::table('lampu')->where('lampu_id',$id)->get();
        //->where ('lampu_id' $id)
        //->get()
		// passing data lampu yang didapat ke view edit.blade.php
		return view('blog/editlampu',['lampu' => $lampu]);

	}
    // update data lampu
	public function update(Request $request)
	{
		// Debug untuk melihat data yang dikirim
		// dd($request->all()); // Uncomment untuk debug

		// update data lampu
		DB::table('lampu')->where('ID',$request->id)->update([
			'merklampu' => $request->merklampu,
			'hargalampu' => $request->hargalampu,
			'berat' => $request->berat,
			'tersedia' => $request->has('tersedia') ? 1 : 0
		]);
		// alihkan halaman ke halaman lampu
		return redirect('/lampu')->with('success', 'Data lampu berhasil diupdate!');
	}

	// method untuk hapus data lampu
	public function hapus($ID)
	{
		// menghapus data lampu berdasarkan id yang dipilih
		DB::table('lampu')->where('ID',$ID)->delete();

		// alihkan halaman ke halaman lampu
		return redirect('/lampu')->with('success', 'Data lampu berhasil dihapus!');
	}

	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table lampu sesuai pencarian data
		$lampu = DB::table('lampu')
		->where('ID','like',"%".$cari."%")
		->orWhere('merklampu','like',"%".$cari."%")
		->paginate();

    		// mengirim data lampu ke view index
		return view('blog/lampuview',['lampu' => $lampu,'cari' => $cari]);

	}
}
