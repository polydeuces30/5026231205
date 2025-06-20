@extends('template')
@section('content')
	<h3>Edit Pegawai</h3>
	<a href="/eas" class="btn btn-info"> Kembali</a>
    <br>
</br>
	@foreach($mykaryawan as $k)
	<form action="eas/edit" method="post">
		{{ csrf_field() }}
        <div class="row my-2">
            <div class="col-12">
                <input type="hidden" name="id" value="{{ $k->kodepegawai }}">
            </div>
        </div>
        <div class="row my-2">
            <div class="col-3">
                Kode Pegawai
            </div>
            <div class="col-8">
		<input type="text" name="nama" required="required"  value="{{ $k->namalengkap }}">
            </div>
        </div>
        <div class="row my-2">
            <div class="col-3">
                Nama Lengkap
            </div>
            <div class="col-8">
		<input type="text" name="Jabatan" required="required" class="form-control" value="{{ $k->divisi }}">
            </div>
        </div>
		<div class="row my-2">
            <div class="col-3">
                divisi
            </div>
            <div class="col-8">
		<input type="umur" name="umur" required="required" class="form-control" value="{{ $k->departemen }}">
            </div>
        </div>
        <div class="row my-2">
            <div class="col-3">
                <label class="label-control"> departemen </label>
            </div>
            <div class="col-8">
		<textarea name="alamat" required="required" class="form-control">{{ $k->departemen }}</textarea>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-3">
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
	@endforeach
@endsection
