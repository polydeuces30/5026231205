<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
// kalau di java pakai import, kalau di php use
// banyak controller, maka banyak diuse

// di java memanggil sebuah kelas dengan ; sedangkan kalau di php menggunkan ::
Route::get('welcome', function () {
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
Route::get('/pegawai/{nama}', [PegawaiController::class, 'index'] );
Route::get('/formulir', [PegawaiController::class, 'formulir'] );
// sifatnya rahaasia
Route::post('/formulir/proses', [PegawaiController::class, 'proses'] );
// route blog
Route::get('/blog', [BlogController::class, 'home'] );
Route::get('/blog/tentang', [BlogController::class, 'tentang'] );
Route::get('/blog/kontak', [BlogController::class, 'kontak'] );


