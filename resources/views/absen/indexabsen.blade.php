@extends('layout.bahagia')

@section('title', 'Data absen pegawai')
@section('judulhalaman', 'Daftar Absensi Pegawai')

@section('konten')
<head>
</head>
<body>


	<a class="btn btn-success" href="/absen/add">Tambah Absensi</a>

	<br/>
	<br/>

        <table class="table table-bordered table-responsive-sm table-striped" >
		<tr>

			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>

			<td>{{ $a->pegawai_nama }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a class="btn btn-info" href="/absen/edit/{{ $a->ID }}">Edit Absensi</a>
				|
				<a class="btn btn-danger" href="/absen/hapus/{{ $a->ID }}">Delete Absensi</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $absen->links() }}
    <p>
        Keterangan Status: <br>
        I : Izin <br>
        S : Sakit <br>
        A : Alpha <br>
        </p>

</body>
@endsection
