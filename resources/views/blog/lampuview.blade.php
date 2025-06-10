@extends('lampu')
@section('content')
	<h3>Data Lampu</h3>
	<a href="/lampu/tambah" class="btn btn-primary"> + Tambah Lampu Baru</a>
    <p>Cari Data Lampu :</p>
	<form action="/lampu/cari" method="GET">
		<input type="text" class="form-control mb-3" name="cari" placeholder="Cari Lampu ..">
		<input type="submit" class="btn btn-info" value="CARI">
	</form>

	<br/>
	<br/>
    <table class="table table-striped">
		<tr>
			<th>ID</th>
			<th>Merk Lampu</th>
			<th>Harga Lampu</th>
			<th>Berat</th>
			<th>Opsi</th>
		</tr>
		@foreach($lampu as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->merklampu }}</td>
			<td>{{ $p->hargalampu }}</td>
			<td>{{ $p->berat }}</td>
			<td>
				<a href="/lampu/edit/{{ $p->ID }}" class="btn btn-success">Edit</a>
				<a href="/lampu/hapus/{{ $p->ID }}" class="btn btn-danger" >Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
{{ $lampu ->links() }}
@endsection
