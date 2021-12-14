@extends('layout.bahagia')

@section('title', 'Data Baju')
@section('judulhalaman', 'Daftar Baju')

@section('konten')
<head>
</head>
<body>


	<a class="btn btn-success" href="/baju/tambah">Tambah Baju</a>

	<br/>
	<br/>

        <table class="table table-bordered table-responsive-sm table-striped" >
		<tr>

			<th>Merk Baju</th>
			<th>Stock Baju</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($baju as $b)
		<tr>

			<td>{{ $b->merkbaju }}</td>
			<td>{{ $b->stockbaju }}</td>
			<td>{{ $b->tersedia }}</td>
			<td>
				<a class="btn btn-info" href="/baju/edit/{{ $b->merkbaju }}">Edit Data</a>
				|
				<a class="btn btn-danger" href="/baju/hapus/{{ $b->merkbaju }}">Delete Data</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $baju->links() }}
    {{-- <p>
        Keterangan Status: <br>
        I : Izin <br>
        S : Sakit <br>
        A : Alpha <br>
        </p> --}}

</body>
@endsection
