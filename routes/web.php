<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
// kalau di java pakai import, kalau di php use

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
