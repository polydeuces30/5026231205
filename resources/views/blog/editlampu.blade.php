@extends('lampu')
@section('content')
	<h3>Edit Lampu</h3>
	<a href="/Lampu" class="btn btn-info"> Kembali</a>
    <br>
</br>
	@foreach($lampu as $p)
	<form action="/lampu/update" method="post">
		{{ csrf_field() }}
        <div class="row my-2">
            <div class="col-12">
                <input type="hidden" name="id" value="{{ $p->ID }}">
            </div>
        </div>
        <div class="row my-2">
            <div class="col-3">
                id
            </div>
            <div class="col-8">
		<input type="text" name="nama" required="required"  value="{{ $p->ID}}">
            </div>
        </div>
        <div class="row my-2">
            <div class="col-3">
                Merk Lampu
            </div>
            <div class="col-8">
		<input type="text" name="Jabatan" required="required" class="form-control" value="{{ $p->merklampu }}">
            </div>
        </div>
		<div class="row my-2">
            <div class="col-3">
                Harga Lampu
            </div>
            <div class="col-8">
		<input type="umur" name="umur" required="required" class="form-control" value="{{ $p->hargalampu }}">
            </div>
        </div>
        <div class="row my-2">
            <div class="col-3">
                <label class="label-control"> Berat </label>
            </div>
            <div class="col-8">
		<textarea name="alamat" required="required" class="form-control">{{ $p->berat }}</textarea>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-3">
                <label class="label-control"> Tersedia </label>
            </div>
            <div class="col-8">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" name="tersedia" id="tersediaSwitch"
                           value="1" {{ isset($p->tersedia) && $p->tersedia ? 'checked' : '' }}>
                    <label class="form-check-label" for="tersediaSwitch">
                        <span id="statusLabel">{{ isset($p->tersedia) && $p->tersedia ? 'Ya' : 'Tidak' }}</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-3">
		<input type="submit" value="Simpan Data" class="btn btn-success">
            </div>
        </div>
	</form>
	@endforeach

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleSwitch = document.getElementById('tersediaSwitch');
            const statusLabel = document.getElementById('statusLabel');

            toggleSwitch.addEventListener('change', function() {
                if (this.checked) {
                    statusLabel.textContent = 'Ya';
                } else {
                    statusLabel.textContent = 'Tidak';
                }
            });
        });
    </script>
@endsection
