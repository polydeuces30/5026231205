<!-- Menghubungkan dengan view template master, karena dalam folder jdi blog/filenya -->
@extends('blog/master')

@section('title', 'teknik template')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Home')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

	<p>Ini Adalah Halaman Home</p>
	<p>Selamat datang !</p>

@endsection
