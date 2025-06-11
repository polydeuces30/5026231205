@extends('indexkeranjangbelanja')
@section('content')
	<h3>Data keranjang belanja</h3>
	<a href="/keranjangbelanja/tambah" class="btn btn-success"> + Beli</a>
    {{-- <p>Cari Data Keranjang Belanja :</p> --}}
	{{-- <form action="/keranjang/cari" method="GET">
		<input type="text" class="form-control mb-3" name="cari" placeholder="Cari Keranjang Belanja ..">
	</form> --}}

	<br/>
	<br/>
    <table class="table table-striped">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per item</th>
            <th>Total</th>
			<th>Action</th>
		</tr>
		@php
		@endphp
		@foreach($keranjangbelanja as $k)
		@php
			$total = $k->jumlah * $k->harga;
		@endphp
		<tr>
			<td>{{ $k->ID }}</td>
			<td>{{ $k->kodebarang }}</td>
			<td>{{ $k->jumlah }}</td>
			<td>Rp {{ number_format($k->harga, 0, ',', '.') }}</td>
			<td>Rp {{ number_format($total, 0, ',', '.') }}</td>
			<td>
				{{-- <a href="/keranjangbelanja/edit/{{ $k->ID }}" class="btn btn-success">Beli</a> --}}
				<a href="/keranjangbelanja/hapus/{{ $k->ID }}" class="btn btn-danger" >Batal</a>
			</td>
		</tr>
		@endforeach
		<tr class="table-info">
		</tr>
	</table>
{{ $keranjangbelanja ->links() }}
@endsection
