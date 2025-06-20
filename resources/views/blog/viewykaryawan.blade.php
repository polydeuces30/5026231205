@extends('template')
@section('content')
	<a href="/eas" class="btn btn-info"> Kembali</a>
    <br>
	<form action="/eas/view" method="post">
		{{ csrf_field() }}
        <div class="row my-2">
            <div class="col-3">
                Kode Pegawai
            </div>
            <div class="col-8">
		<input type="text" name="nama" required="required" class="form-control">
            </div>
        </div>
        <div class="row my-2">
            <div class="col-3">
                Nama Lengkap
            </div>
            <div class="col-8">
		<input type="text" name="Jabatan" required="required" class="form-control">
            </div>
        </div>
		<div class="row my-2">
            <div class="col-3">
                Divisi
            </div>
            <div class="col-8">
		<input type="umur" name="umur" required="required" class="form-control">
            </div>
        </div>
        <div class="row my-2">
            <div class="col-3">
                <label class="label-control"> Departemen </label>
            </div>
            <div class="col-8">
		<textarea name="alamat" required="required" class="form-control"></textarea>
            </div>
        </div>
	</form>
@endsection
