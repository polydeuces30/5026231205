@extends('template')
@section('content')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>
	<a href="/pegawai" class="btn btn-info"> Kembali</a>
    <br>
	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <div class="row my-2">
            <div class="col-3">
                Nama
            </div>
            <div class="col-8">
		<input type="text" name="nama" required="required" class="form-control">
            </div>
        </div>
        <div class="row my-2">
            <div class="col-3">
                Jabatan
            </div>
            <div class="col-8">
		<input type="text" name="Jabatan" required="required" class="form-control">
            </div>
        </div>
		<div class="row my-2">
            <div class="col-3">
                Umur
            </div>
            <div class="col-8">
		<input type="umur" name="umur" required="required" class="form-control">
            </div>
        </div>
        <div class="row my-2">
            <div class="col-3">
                <label class="label-control"> Alamat </label>
            </div>
            <div class="col-8">
		<textarea name="alamat" required="required" class="form-control"></textarea>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-3">
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
@endsection
