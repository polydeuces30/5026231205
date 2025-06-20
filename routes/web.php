<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\Pegawai2Controller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\LampuController;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\Karyawan2Controller;
use App\Http\Controllers\MyKaryawanController;
use Illuminate\Support\Facades\DB;

// kalau di java pakai import, kalau di php use
// banyak controller, maka banyak diuse

// di java memanggil sebuah kelas dengan ; sedangkan kalau di php menggunkan ::
Route::get('/', function () {
    return view('welcome');
});
Route::get('halo', function () {
	return "<h2> Halo, Selamat datang di tutorial laravel www.malasngoding.com</h2>";
});
Route::get('blog', function () {
	return view('blog');
});
Route::get('hello', [Link::class, 'helloworld'] );
// jika berupa controller gunakan []
Route::get('bootstrap1', function() {
    return view('bootstrap1');
});
Route::get('cobapertama', function() {
    return view('cobapertama');
});
Route::get('js1', function() {
    return view('js1');
});
Route::get('js2', function() {
    return view('js2');
});
Route::get('pertama', function() {
    return view('pertama');
});
Route::get('pertemuan4', function() {
    return view('pertemuan4');
});
Route::get('template1', function() {
    return view('template1');
});
Route::get('tugaslinktree', function() {
    return view('tugaslinktree');
});
Route::get('index', function() {
    return view('index');
});
Route::get('frontend', function () {
    return view('frontend');
});
Route::get('dosen', [Link::class, 'index'] );
// Route::get('/pegawai/{nama}', [PegawaiController::class, 'index'] );
Route::get('/formulir', [Pegawai2Controller::class, 'formulir'] );
Route::post('/formulir/proses', [Pegawai2Controller::class, 'proses'] ); // sifatnya rahaasia
// route blog
Route::get('/blog', [BlogController::class, 'home'] );
Route::get('/blog/tentang', [BlogController::class, 'tentang'] );
Route::get('/blog/kontak', [BlogController::class, 'kontak'] );

// crud pegawai
Route::get('/pegawai/', [PegawaiController::class, 'index'] );
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah'] );
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit'] );
Route::post('/pegawai/store', [PegawaiController::class, 'store'] );
Route::post('/pegawai/update', [PegawaiController::class, 'update'] );
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus'] );
Route::get('/pegawai/cari', [PegawaiController::class, 'cari'] );

// crud lampu
Route::get('/lampu/', [LampuController::class, 'lampu'] );
Route::get('/lampu/tambah', [LampuController::class, 'tambahlampu'] );
Route::get('/lampu/edit/{id}', [LampuController::class, 'editlampu'] );
Route::post('/lampu/store', [LampuController::class, 'store'] );
Route::post('/lampu/update', [LampuController::class, 'update'] );
Route::get('/lampu/hapus/{id}', [LampuController::class, 'hapus'] );
Route::get('/lampu/cari', [LampuController::class, 'cari'] );

// crud keranjang belanja
Route::get('/keranjangbelanja/', [KeranjangBelanjaController::class, 'keranjangbelanja'] );
Route::get('/keranjangbelanja/tambah', [KeranjangBelanjaController::class, 'tambahkeranjangbelanja'] );
// Route::get('/keranjangbelanja/edit/{id}', [KeranjangBelanjaController::class, 'editkeranjangbelanja'] );
Route::post('/keranjangbelanja/store', [KeranjangBelanjaController::class, 'store'] );
Route::post('/keranjangbelanja/update', [KeranjangBelanjaController::class, 'update'] );
Route::get('/keranjangbelanja/hapus/{id}', [KeranjangBelanjaController::class, 'hapus'] );
// Route::get('/keranjangbelanja/cari', [KeranjangBelanjaController::class, 'cari'] );

//route karyawan
Route::get('/karyawan/', [KaryawanController::class, 'index']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::get('/karyawan/hapus/{id}', [KaryawanController::class, 'hapus']);

//crud karyawan2
Route::get('/karyawan2', [Karyawan2Controller::class, 'index']);
Route::get('/karyawan2/tambah', [Karyawan2Controller::class, 'tambah']);
Route::post('/karyawan2/store', [Karyawan2Controller::class, 'store']);
Route::get('/karyawan2/hapus/{id}', [Karyawan2Controller::class, 'hapus']);

//crud soal eas (sudah disiapkan)
Route::get('/eas', [MyKaryawanController::class, 'index']);
Route::get('/eas/edit', [MyKaryawanController::class, 'edit']);
Route::post('/eas/view', [MyKaryawanController::class, 'view']);

