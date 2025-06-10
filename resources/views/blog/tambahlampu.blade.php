@extends('lampu')
@section('content')
	<h3>Tambah Lampu Baru</h3>
	<a href="/lampu" class="btn btn-info"> Kembali</a>
    <br><br>

	<form action="/lampu/store" method="post">
		{{ csrf_field() }}

        <div class="row my-2">
            <div class="col-3">
                <label>Merk Lampu</label>
            </div>
            <div class="col-8">
                <input type="text" name="merklampu" required="required" class="form-control" placeholder="Masukkan merk lampu">
            </div>
        </div>

		<div class="row my-2">
            <div class="col-3">
                <label>Harga Lampu</label>
            </div>
            <div class="col-8">
                <input type="number" name="hargalampu" required="required" class="form-control" placeholder="Masukkan harga lampu">
            </div>
        </div>

        <div class="row my-2">
            <div class="col-3">
                <label>Berat (kg)</label>
            </div>
            <div class="col-8">
                <input type="number" step="0.01" name="berat" required="required" class="form-control" placeholder="Masukkan berat lampu">
            </div>
        </div>

        <div class="row my-2">
            <div class="col-3">
                <label>Tersedia</label>
            </div>
            <div class="col-8">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" name="tersedia" id="tersediaSwitch" value="1">
                    <label class="form-check-label" for="tersediaSwitch">
                        <span id="statusLabel">Tidak</span>
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
