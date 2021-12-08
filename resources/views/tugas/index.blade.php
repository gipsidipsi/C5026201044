@extends('layout.bahagia')

@section('title', 'Data tugas')
@section('judulhalaman', 'Daftar Tugas')

@section('konten')
<head>
	<title>Muhammad Ghiffari</title>
</head>
<body>


	<a class="btn btn-success" href="/tugas/tambah">Tambah tugas Baru</a>

	<br/>
	<br/>

	<table class="table table-bordered table-responsive-sm table-striped" >
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($tugas as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->IDPegawai }}</td>
			<td>{{ $p->Tanggal }}</td>
			<td>{{ $p->NamaTugas }}</td>
            <td>{{ $p->Status }}</td>
			<td>
				<a class="btn btn-info" href="/tugas/edit/{{ $p->ID }}">Edit</a>
				|
				<a class="btn btn-danger" href="/tugas/hapus/{{ $p->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
@endsection
