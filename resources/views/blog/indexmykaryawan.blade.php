@extends('template')

@section('content')
<h3>Data Karyawan</h3>
<br/>
	<br/>
	<table class="table table-striped">
		<tr>
			<th>kode pegawai</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
            <th>Departemen</th>
            <th>Action </th>
		</tr>
		@foreach($mykaryawan as $k)
		<tr>
            <td>{{ $k->kodepegawai }}</td>
			<td class="text-uppercase">{{ $k->namalengkap }}</td>
			<td>{{ $k->divisi }}</td>
			<td class="text-lowercase">{{ $k->departemen }}</td>
			<td>
				<a href="/eas/edit{{ $k->kodepegawai }}" class="btn btn-danger">Edit</a>
                <a href="/eas/view{{ $k->kodepegawai }}" class="btn btn-success">View</a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection
